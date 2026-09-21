<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EnquiryAdminController extends Controller
{
    public function index(Request $request): View
    {
        $query = ContactEnquiry::query();

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('full_name', 'like', "%{$search}%")
                    ->orWhere('company_name', 'like', "%{$search}%")
                    ->orWhere('work_email', 'like', "%{$search}%");
            });
        }

        $enquiries = $query->latest()->paginate(15);

        return view('admin.enquiries.index', compact('enquiries'));
    }

    public function show(int $id): View
    {
        $enquiry = ContactEnquiry::findOrFail($id);

        // Auto mark as contacted if new
        if ($enquiry->status === 'new') {
            $enquiry->update(['status' => 'contacted']);
        }

        return view('admin.enquiries.show', compact('enquiry'));
    }

    public function updateStatus(Request $request, int $id): RedirectResponse
    {
        $enquiry = ContactEnquiry::findOrFail($id);
        $request->validate(['status' => 'required|in:new,contacted,closed']);

        $enquiry->update(['status' => $request->input('status')]);

        return back()->with('success', 'Enquiry status updated successfully.');
    }

    public function destroy(int $id): RedirectResponse
    {
        $enquiry = ContactEnquiry::findOrFail($id);
        $enquiry->delete();

        return redirect()->route('admin.enquiries.index')->with('success', 'Enquiry deleted successfully.');
    }
}
