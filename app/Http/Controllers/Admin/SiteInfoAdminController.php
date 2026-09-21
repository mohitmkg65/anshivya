<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteInfo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SiteInfoAdminController extends Controller
{
    /**
     * Show the form for editing Site Info.
     */
    public function edit(): View
    {
        $siteInfo = SiteInfo::first() ?? new SiteInfo();

        return view('admin.site-info.index', compact('siteInfo'));
    }

    /**
     * Update or create the single Site Info record.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'mobile_1' => ['required', 'string', 'max:255'],
            'mobile_2' => ['nullable', 'string', 'max:255'],
            'email_1' => ['required', 'email', 'max:255'],
            'email_2' => ['nullable', 'email', 'max:255'],
            'full_address' => ['required', 'string', 'max:1000'],
            'map_url' => ['required', 'string', 'max:2000'],
        ]);

        // If user pasted an <iframe> tag, extract src attribute URL
        if (preg_match('/src=["\']([^"\']+)["\']/', $validated['map_url'], $matches)) {
            $validated['map_url'] = $matches[1];
        }

        SiteInfo::updateOrCreate(
            ['id' => 1],
            $validated
        );

        return redirect()
            ->route('admin.site-info.edit')
            ->with('success', 'Site Info & Map URL updated successfully.');
    }
}
