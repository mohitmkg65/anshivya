<?php

namespace App\Http\Controllers;

use App\Models\SiteInfo;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function about(): View
    {
        return view('pages.about');
    }

    public function services(): View
    {
        return view('services.index');
    }

    public function hrConsulting(): View
    {
        return view('services.hr-consulting');
    }

    public function recruitment(): View
    {
        return view('services.recruitment');
    }

    public function payroll(): View
    {
        return view('services.payroll');
    }

    public function hrmsTechnology(): View
    {
        return view('services.hrms-technology');
    }

    public function performanceManagement(): View
    {
        return view('services.performance-management');
    }

    public function backgroundVerification(): View
    {
        return view('services.background-verification');
    }

    public function staffingSolutions(): View
    {
        return view('services.staffing-solutions');
    }

    public function employeeRelations(): View
    {
        return view('services.employee-relations');
    }

    public function hrPolicies(): View
    {
        return view('services.hr-policies');
    }

    public function compliance(): View
    {
        return view('services.payroll'); // Fallback map to Payroll & Compliance
    }

    public function industries(): View
    {
        return view('pages.industries');
    }

    public function contact(): View
    {
        $siteInfo = SiteInfo::first();

        return view('pages.contact', compact('siteInfo'));
    }

    public function privacy(): View
    {
        return view('pages.privacy');
    }

    public function terms(): View
    {
        return view('pages.terms');
    }
}
