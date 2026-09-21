<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Senior HR Generalist',
                'slug' => 'senior-hr-generalist',
                'department' => 'HR & Operations',
                'location' => 'Ahmedabad, Gujarat',
                'type' => 'Full-Time',
                'experience' => '4-6 Years',
                'short_description' => 'Oversee employee relations, policy administration, onboarding, and payroll coordination for manufacturing clients.',
                'responsibilities' => [
                    'Manage end-to-end employee onboarding and orientation processes.',
                    'Coordinate monthly attendance, leaves, and payroll input verification.',
                    'Formulate and update HR policy handbooks in alignment with client guidelines.',
                    'Handle employee grievances and implement retention activities.',
                ],
                'requirements' => [
                    "Bachelor's or Master's degree in Human Resources or related discipline.",
                    'Minimum 4 years of hands-on experience in corporate or agency HR generalist roles.',
                    'Strong understanding of Indian statutory HR compliance and payroll workflows.',
                    'Excellent communication and conflict resolution skills.',
                ],
                'benefits' => [
                    'Competitive salary package',
                    'Health & medical coverage',
                    'Professional development support',
                    'Structured career growth path',
                ],
                'is_published' => true,
            ],
            [
                'title' => 'Talent Acquisition Specialist',
                'slug' => 'talent-acquisition-specialist',
                'department' => 'Recruitment',
                'location' => 'Ahmedabad, Gujarat',
                'type' => 'Full-Time',
                'experience' => '2-4 Years',
                'short_description' => 'Drive candidate sourcing, screening, and interview scheduling across industrial, construction, and engineering sectors.',
                'responsibilities' => [
                    'Source candidate profiles across job boards, professional networks, and referral channels.',
                    'Conduct preliminary technical and behavioral screening calls.',
                    'Coordinate client interviews and follow up on feedback.',
                    'Maintain updated candidate pipelines in the recruitment database.',
                ],
                'requirements' => [
                    '2+ years of experience in recruitment (agency or in-house preferred).',
                    'Demonstrated success in sourcing engineering, manufacturing, or commercial roles.',
                    'Proficiency with recruitment tools, job portals, and LinkedIn Recruiter.',
                    'Strong interpersonal and negotiation skills.',
                ],
                'benefits' => [
                    'Performance incentives',
                    'Flexible work options',
                    'Mentorship from senior recruiters',
                ],
                'is_published' => true,
            ],
        ];

        foreach ($jobs as $jobData) {
            Job::updateOrCreate(
                ['slug' => $jobData['slug']],
                $jobData
            );
        }
    }
}
