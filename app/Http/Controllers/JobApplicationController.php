<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class JobApplicationController extends Controller
{
    public function store(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'job_id' => 'nullable|exists:job_openings,id',
            'job_title' => 'required|string|max:150',
            'candidate_name' => 'required|string|max:150',
            'candidate_email' => 'required|email|max:150',
            'candidate_phone' => 'required|string|max:50',
            'cover_message' => 'nullable|string|max:2000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $file = $request->file('resume');
        $fileName = time().'_'.preg_replace('/[^a-zA-Z0-9._-]/', '', $file->getClientOriginalName());
        $path = $file->storeAs('resumes', $fileName, 'public');

        $application = JobApplication::create([
            'job_id' => $validated['job_id'] ?? null,
            'job_title' => $validated['job_title'],
            'candidate_name' => $validated['candidate_name'],
            'candidate_email' => $validated['candidate_email'],
            'candidate_phone' => $validated['candidate_phone'],
            'cover_message' => $validated['cover_message'] ?? null,
            'resume_path' => $path,
            'status' => 'pending',
        ]);

        Log::info('Candidate Application Saved to DB', ['id' => $application->id]);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Your application has been received successfully! Our recruitment team will review your CV.',
            ]);
        }

        return back()->with('success', 'Your application has been received successfully! Our recruitment team will review your CV.');
    }
}
