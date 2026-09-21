<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class JobAdminController extends Controller
{
    public function index(): View
    {
        $jobs = Job::withCount('applications')->latest()->paginate(15);

        return view('admin.jobs.index', compact('jobs'));
    }

    public function create(): View
    {
        return view('admin.jobs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'department' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'experience' => 'required|string|max:50',
            'short_description' => 'required|string|max:1000',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'benefits' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        $responsibilities = ! empty($validated['responsibilities'])
            ? array_filter(array_map('trim', explode("\n", $validated['responsibilities'])))
            : [];

        $requirements = ! empty($validated['requirements'])
            ? array_filter(array_map('trim', explode("\n", $validated['requirements'])))
            : [];

        $benefits = ! empty($validated['benefits'])
            ? array_filter(array_map('trim', explode("\n", $validated['benefits'])))
            : [];

        Job::create([
            'title' => $validated['title'],
            'slug' => Str::slug($validated['title']).'-'.Str::random(5),
            'department' => $validated['department'],
            'location' => $validated['location'],
            'type' => $validated['type'],
            'experience' => $validated['experience'],
            'short_description' => $validated['short_description'],
            'responsibilities' => array_values($responsibilities),
            'requirements' => array_values($requirements),
            'benefits' => array_values($benefits),
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Job opening created successfully.');
    }

    public function edit(int $id): View
    {
        $job = Job::findOrFail($id);

        return view('admin.jobs.edit', compact('job'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $job = Job::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:200',
            'department' => 'required|string|max:100',
            'location' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'experience' => 'required|string|max:50',
            'short_description' => 'required|string|max:1000',
            'responsibilities' => 'nullable|string',
            'requirements' => 'nullable|string',
            'benefits' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        $responsibilities = ! empty($validated['responsibilities'])
            ? array_filter(array_map('trim', explode("\n", $validated['responsibilities'])))
            : [];

        $requirements = ! empty($validated['requirements'])
            ? array_filter(array_map('trim', explode("\n", $validated['requirements'])))
            : [];

        $benefits = ! empty($validated['benefits'])
            ? array_filter(array_map('trim', explode("\n", $validated['benefits'])))
            : [];

        $job->update([
            'title' => $validated['title'],
            'department' => $validated['department'],
            'location' => $validated['location'],
            'type' => $validated['type'],
            'experience' => $validated['experience'],
            'short_description' => $validated['short_description'],
            'responsibilities' => array_values($responsibilities),
            'requirements' => array_values($requirements),
            'benefits' => array_values($benefits),
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Job posting updated successfully.');
    }

    public function togglePublish(int $id): RedirectResponse
    {
        $job = Job::findOrFail($id);
        $job->update(['is_published' => ! $job->is_published]);

        $status = $job->is_published ? 'published' : 'unpublished';

        return back()->with('success', "Job posting is now {$status}.");
    }

    public function destroy(int $id): RedirectResponse
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.jobs.index')->with('success', 'Job posting deleted successfully.');
    }
}
