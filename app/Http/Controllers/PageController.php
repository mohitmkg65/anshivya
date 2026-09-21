<?php

namespace App\Http\Controllers;

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
        return view('pages.contact');
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
