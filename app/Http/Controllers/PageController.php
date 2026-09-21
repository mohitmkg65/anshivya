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

    public function recruitment(): View
    {
        return view('services.recruitment');
    }

    public function payroll(): View
    {
        return view('services.payroll');
    }

    public function compliance(): View
    {
        return view('services.compliance');
    }

    public function hrConsulting(): View
    {
        return view('services.hr-consulting');
    }

    public function employeeRelations(): View
    {
        return view('services.employee-relations');
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
