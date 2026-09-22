<?php

use App\Models\Job;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

test('public blade pages load successfully', function () {
    $this->get('/')->assertStatus(200);
    $this->get('/about')->assertStatus(200);
    $this->get('/services/recruitment')->assertStatus(200);
    $this->get('/services/payroll')->assertStatus(200);
    $this->get('/services/compliance')->assertStatus(200);
    $this->get('/services/hr-consulting')->assertStatus(200);
    $this->get('/services/employee-relations')->assertStatus(200);
    $this->get('/industries')->assertStatus(200);
    $this->get('/jobs')->assertStatus(200);
    $this->get('/contact')->assertStatus(200);
});

use App\Mail\ContactEnquirySubmitted;
use App\Models\SiteInfo;
use Illuminate\Support\Facades\Mail;

test('contact enquiry saves to database and sends email notification to admin email_1', function () {
    Mail::fake();

    SiteInfo::create([
        'mobile_1' => '+91 81128 25288',
        'email_1' => 'admin-test@anshivya.com',
        'full_address' => 'Corporate Office, Ahmedabad',
        'map_url' => 'https://maps.google.com/test',
    ]);

    $response = $this->post('/contact', [
        'full_name' => 'Rahul Employer',
        'company_name' => 'Apex Manufacturing',
        'work_email' => 'rahul@apex.com',
        'phone_number' => '+918112825288',
        'service_required' => 'Recruitment',
        'employee_count' => '10 positions',
        'message' => 'Need 10 plant technicians urgently.',
    ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('contact_enquiries', [
        'work_email' => 'rahul@apex.com',
        'company_name' => 'Apex Manufacturing',
    ]);

    Mail::assertSent(ContactEnquirySubmitted::class, function ($mail) {
        return $mail->hasTo('admin-test@anshivya.com') &&
               $mail->enquiry->company_name === 'Apex Manufacturing';
    });
});

test('candidate application saves resume and application to database', function () {
    Storage::fake('public');

    $job = Job::create([
        'title' => 'Sample Engineer',
        'slug' => 'sample-engineer',
        'department' => 'Operations',
        'location' => 'Ahmedabad, Gujarat',
        'type' => 'Full-Time',
        'experience' => '2 Years',
        'short_description' => 'Test job',
        'is_published' => true,
    ]);

    $resume = UploadedFile::fake()->create('resume.pdf', 500, 'application/pdf');

    $response = $this->post('/jobs/apply', [
        'job_id' => $job->id,
        'job_title' => $job->title,
        'candidate_name' => 'Priya Applicant',
        'candidate_email' => 'priya@example.com',
        'candidate_phone' => '+916307180489',
        'cover_message' => 'Interested in joining Anshivya network.',
        'resume' => $resume,
    ]);

    $response->assertRedirect();
    $this->assertDatabaseHas('job_applications', [
        'candidate_email' => 'priya@example.com',
    ]);
});

test('admin authentication and dashboard access', function () {
    $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@anshivya.com',
        'password' => Hash::make('password'),
    ]);

    $loginRes = $this->post('/admin/login', [
        'email' => 'admin@anshivya.com',
        'password' => 'password',
    ]);

    $loginRes->assertRedirect('/admin/dashboard');

    $this->actingAs($admin)
        ->get('/admin/dashboard')
        ->assertStatus(200)
        ->assertSee('Dashboard');
});

test('admin job crud workflow', function () {
    $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@anshivya.com',
        'password' => Hash::make('password'),
    ]);

    $this->actingAs($admin)
        ->post('/admin/jobs', [
            'title' => 'Lead Payroll Manager',
            'department' => 'Payroll',
            'location' => 'Ahmedabad, Gujarat',
            'type' => 'Full-Time',
            'experience' => '5-7 Years',
            'short_description' => 'Lead monthly payroll processing for key clients.',
            'is_published' => '1',
        ])
        ->assertRedirect('/admin/jobs');

    $this->assertDatabaseHas('job_openings', [
        'title' => 'Lead Payroll Manager',
    ]);
});
