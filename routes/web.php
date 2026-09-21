<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\ApplicationAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EnquiryAdminController;
use App\Http\Controllers\Admin\JobAdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SeoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// Services
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/recruitment', [PageController::class, 'recruitment'])->name('recruitment');
    Route::get('/payroll', [PageController::class, 'payroll'])->name('payroll');
    Route::get('/compliance', [PageController::class, 'compliance'])->name('compliance');
    Route::get('/hr-consulting', [PageController::class, 'hrConsulting'])->name('hr-consulting');
    Route::get('/employee-relations', [PageController::class, 'employeeRelations'])->name('employee-relations');
});

// Industries
Route::get('/industries', [PageController::class, 'industries'])->name('industries');

// Careers & Jobs
Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/jobs/{slug}', [JobController::class, 'show'])->name('jobs.show');

// Contact
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Legal
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');

// SEO
Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('sitemap');
Route::get('/robots.txt', [SeoController::class, 'robots'])->name('robots');

// Public Form Submissions
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:10,1')->name('api.contact');
Route::post('/jobs/apply', [JobApplicationController::class, 'store'])->middleware('throttle:10,1')->name('api.jobs.apply');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.submit');

    Route::middleware('auth')->group(function () {
        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // Contact Enquiries
        Route::get('/enquiries', [EnquiryAdminController::class, 'index'])->name('enquiries.index');
        Route::get('/enquiries/{id}', [EnquiryAdminController::class, 'show'])->name('enquiries.show');
        Route::patch('/enquiries/{id}/status', [EnquiryAdminController::class, 'updateStatus'])->name('enquiries.status');
        Route::delete('/enquiries/{id}', [EnquiryAdminController::class, 'destroy'])->name('enquiries.destroy');

        // Job Postings CRUD
        Route::get('/jobs', [JobAdminController::class, 'index'])->name('jobs.index');
        Route::get('/jobs/create', [JobAdminController::class, 'create'])->name('jobs.create');
        Route::post('/jobs', [JobAdminController::class, 'store'])->name('jobs.store');
        Route::get('/jobs/{id}/edit', [JobAdminController::class, 'edit'])->name('jobs.edit');
        Route::put('/jobs/{id}', [JobAdminController::class, 'update'])->name('jobs.update');
        Route::patch('/jobs/{id}/toggle', [JobAdminController::class, 'togglePublish'])->name('jobs.toggle');
        Route::delete('/jobs/{id}', [JobAdminController::class, 'destroy'])->name('jobs.destroy');

        // Candidate Applications
        Route::get('/applications', [ApplicationAdminController::class, 'index'])->name('applications.index');
        Route::get('/applications/{id}', [ApplicationAdminController::class, 'show'])->name('applications.show');
        Route::patch('/applications/{id}/status', [ApplicationAdminController::class, 'updateStatus'])->name('applications.status');
        Route::get('/applications/{id}/download', [ApplicationAdminController::class, 'downloadResume'])->name('applications.download');
        Route::delete('/applications/{id}', [ApplicationAdminController::class, 'destroy'])->name('applications.destroy');
    });
});
