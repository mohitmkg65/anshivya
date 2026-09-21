<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ApplicationAdminController extends Controller
{
    public function index(Request $request): View
    {
        $query = JobApplication::with('job');

        if ($request->filled('status')) {
            $query->where('status', $request->input('status'));
        }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('candidate_name', 'like', "%{$search}%")
                    ->orWhere('candidate_email', 'like', "%{$search}%")
                    ->orWhere('job_title', 'like', "%{$search}%");
            });
        }

        $applications = $query->latest()->paginate(15);

        return view('admin.applications.index', compact('applications'));
    }

    public function show(int $id): View
    {
        $application = JobApplication::with('job')->findOrFail($id);

        if ($application->status === 'pending') {
            $application->update(['status' => 'reviewed']);
        }

        return view('admin.applications.show', compact('application'));
    }

    public function updateStatus(Request $request, int $id): RedirectResponse
    {
        $application = JobApplication::findOrFail($id);
        $request->validate(['status' => 'required|in:pending,reviewed,shortlisted,rejected']);

        $application->update(['status' => $request->input('status')]);

        return back()->with('success', 'Application status updated.');
    }

    public function downloadResume(int $id): BinaryFileResponse|RedirectResponse
    {
        $application = JobApplication::findOrFail($id);

        if (! Storage::disk('public')->exists($application->resume_path)) {
            return back()->with('error', 'Resume file not found on server storage.');
        }

        return response()->download(Storage::disk('public')->path($application->resume_path));
    }

    public function destroy(int $id): RedirectResponse
    {
        $application = JobApplication::findOrFail($id);

        if (Storage::disk('public')->exists($application->resume_path)) {
            Storage::disk('public')->delete($application->resume_path);
        }

        $application->delete();

        return redirect()->route('admin.applications.index')->with('success', 'Application deleted successfully.');
    }
}
