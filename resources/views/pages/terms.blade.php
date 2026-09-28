@extends('layouts.app')

@section('title', 'Terms & Conditions | Anshivya Global HR Solution\'s')

@section('meta_description', 'Read the official Terms and Conditions governing the use of Anshivya Global HR Solution\'s website, recruitment services, payroll solutions, and corporate HR offerings.')

@section('content')

    <!-- HERO HEADER SECTION -->
    <section class="pt-36 pb-16 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                LEGAL &amp; COMPLIANCE
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white tracking-tight">
                Terms &amp; Conditions
            </h1>
            <p class="text-xs font-semibold text-slate-500 dark:text-slate-400">
                Effective Date: September 27, 2026 &bull; Anshivya Group (Ahmedabad, Gujarat, India)
            </p>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-16 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl glass-card border border-slate-200/80 dark:border-slate-800/80 p-8 sm:p-12 space-y-10 text-slate-700 dark:text-slate-300 text-sm leading-relaxed shadow-xl">
                
                <!-- 1. ACCEPTANCE OF TERMS -->
                <div class="space-y-3">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">01.</span> Acceptance of Terms
                    </h2>
                    <p>
                        Welcome to the official web portal of <strong class="text-slate-900 dark:text-white">Anshivya Group</strong> ("Anshivya", "Company", "we", "us", or "our"). By accessing or using our website (<a href="{{ route('home') }}" class="text-amber-600 dark:text-amber-400 font-semibold hover:underline">https://anshivya.com</a>), engaging our corporate HR services, or submitting candidate applications, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions ("Terms").
                    </p>
                    <p>
                        If you do not agree with any part of these Terms, you must immediately discontinue use of our website and services.
                    </p>
                </div>

                <!-- 2. SCOPE OF SERVICES -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">02.</span> Scope of Corporate Services
                    </h2>
                    <p>
                        Anshivya Group provides professional business solutions across diverse industrial sectors, including but not limited to:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-300">
                        <li><strong class="text-slate-900 dark:text-white">HR Consulting:</strong> Strategic advisory, organizational structure design, and operational planning.</li>
                        <li><strong class="text-slate-900 dark:text-white">Recruitment &amp; Talent Acquisition:</strong> Executive search, lateral recruitment, and volume talent sourcing.</li>
                        <li><strong class="text-slate-900 dark:text-white">Payroll Management &amp; Compliance:</strong> Monthly salary computation, statutory filings (PF, ESIC, PT), and tax audit readiness.</li>
                        <li><strong class="text-slate-900 dark:text-white">HRMS &amp; HR Technology:</strong> Attendance tracking systems, employee portals, and analytics integration.</li>
                        <li><strong class="text-slate-900 dark:text-white">Background Verification (BGV):</strong> Pre-employment credential, education, and employment history screening.</li>
                        <li><strong class="text-slate-900 dark:text-white">Manpower &amp; Staffing Solutions:</strong> Contractual deployment, shop-floor staffing, and temp-to-perm models.</li>
                    </ul>
                </div>

                <!-- 3. EMPLOYER OBLIGATIONS -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">03.</span> Client &amp; Employer Responsibilities
                    </h2>
                    <p>
                        Corporate clients engaging Anshivya Group for recruitment, payroll, or consulting services agree to:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-300">
                        <li>Provide accurate, complete job descriptions, remuneration details, and hiring criteria.</li>
                        <li>Adhere to agreed commercial contracts, service level agreements (SLAs), and fee schedule terms.</li>
                        <li>Maintain workplace safety, statutory labor standards, and ethical treatment for deployed personnel.</li>
                        <li>Treat all candidate profile data provided by Anshivya with strict confidentiality.</li>
                    </ul>
                </div>

                <!-- 4. CANDIDATE OBLIGATIONS -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">04.</span> Candidate Application Accuracy
                    </h2>
                    <p>
                        Job seekers submitting resumes, credentials, or personal information to Anshivya Group warrant that:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-300">
                        <li>All information supplied regarding academic qualifications, past employment, and salary history is authentic and truthful.</li>
                        <li>They authorize Anshivya Group to verify credentials with listed past employers and educational institutions.</li>
                        <li>Submitting an application does not guarantee employment or placement with a client enterprise.</li>
                    </ul>
                </div>

                <!-- 5. INTELLECTUAL PROPERTY -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">05.</span> Intellectual Property Rights
                    </h2>
                    <p>
                        All content on this portal—including text, graphics, brand logos, UI elements, software scripts, design systems, and trademarks—is the exclusive intellectual property of Anshivya Group. Unauthorized reproduction, modification, distribution, or re-publication is strictly prohibited without explicit written permission.
                    </p>
                </div>

                <!-- 6. LIMITATION OF LIABILITY -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">06.</span> Limitation of Liability
                    </h2>
                    <p>
                        While Anshivya Group strives to ensure uninterrupted service availability and accurate information:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-300">
                        <li>Our website and content are provided on an "as-is" and "as-available" basis without warranties of any kind.</li>
                        <li>Anshivya Group shall not be held liable for indirect, incidental, or consequential damages resulting from website downtime or third-party network issues.</li>
                        <li>Final hiring decisions, employment contracts, and workplace management remain the sole responsibility of the respective client enterprise.</li>
                    </ul>
                </div>

                <!-- 7. GOVERNING LAW -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">07.</span> Governing Law &amp; Jurisdiction
                    </h2>
                    <p>
                        These Terms and Conditions shall be governed by and construed in accordance with the laws of the Republic of India. Any legal disputes or claims arising out of or in connection with this website or our services shall be subject to the exclusive jurisdiction of the competent courts located in <strong class="text-slate-900 dark:text-white">Ahmedabad, Gujarat, India</strong>.
                    </p>
                </div>

                <!-- 8. CONTACT INFORMATION -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">08.</span> Legal Enquiries &amp; Support
                    </h2>
                    <p>
                        For any questions, legal clarifications, or service agreements regarding these Terms, please contact our administrative team:
                    </p>
                    <div class="p-4 rounded-2xl bg-slate-100 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 space-y-1.5 text-xs text-slate-700 dark:text-slate-300">
                        <p><strong class="text-slate-900 dark:text-white">Anshivya Group Corporate Office</strong></p>
                        <p>Ahmedabad, Gujarat, India</p>
                        <p>Email: <a href="mailto:info@anshivya.com" class="text-amber-600 dark:text-amber-400 hover:underline font-semibold">info@anshivya.com</a></p>
                        <p>Phone: {{ $siteInfo->mobile_1 ?? '+91 81128 25288' }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
