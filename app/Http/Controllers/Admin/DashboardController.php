<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactEnquiry;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $stats = [
            'total_enquiries' => ContactEnquiry::count(),
            'new_enquiries' => ContactEnquiry::where('status', 'new')->count(),
            'active_jobs' => Job::where('is_published', true)->count(),
            'total_jobs' => Job::count(),
            'total_applications' => JobApplication::count(),
            'pending_applications' => JobApplication::where('status', 'pending')->count(),
        ];

        $recentEnquiries = ContactEnquiry::latest()->take(5)->get();
        $recentApplications = JobApplication::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentEnquiries', 'recentApplications'));
    }
}
