<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\View\View;

class JobController extends Controller
{
    public function index(Request $request): View
    {
        $query = Job::where('is_published', true);

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('short_description', 'like', "%{$search}%")
                    ->orWhere('department', 'like', "%{$search}%");
            });
        }

        if ($request->filled('department') && $request->input('department') !== 'All Departments') {
            $query->where('department', $request->input('department'));
        }

        if ($request->filled('type') && $request->input('type') !== 'All Types') {
            $query->where('type', $request->input('type'));
        }

        $jobs = $query->latest()->get();
        $departments = Job::where('is_published', true)->pluck('department')->unique();

        return view('jobs.index', compact('jobs', 'departments'));
    }

    public function show(string $slug): View
    {
        $job = Job::where('slug', $slug)->where('is_published', true)->firstOrFail();

        return view('jobs.show', compact('job'));
    }
}
