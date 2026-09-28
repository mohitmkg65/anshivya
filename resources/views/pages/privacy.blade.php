@extends('layouts.app')

@section('title', 'Privacy Policy | Anshivya Global HR Solution\'s')

@section('meta_description', 'Learn how Anshivya Global HR Solution\'s collects, protects, uses, and safeguards candidate and corporate client data across our HR services.')

@section('content')

    <!-- HERO HEADER SECTION -->
    <section class="pt-36 pb-16 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                DATA PROTECTION &amp; PRIVACY
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white tracking-tight">
                Privacy Policy
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
                
                <!-- 1. PRIVACY COMMITMENT -->
                <div class="space-y-3">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">01.</span> Our Privacy Commitment
                    </h2>
                    <p>
                        At <strong class="text-slate-900 dark:text-white">Anshivya Group</strong> ("Anshivya", "we", "us", or "our"), we place the highest priority on protecting the privacy, confidentiality, and security of candidate personal data and corporate client records.
                    </p>
                    <p>
                        This Privacy Policy outlines how we collect, process, store, and safeguard personal information collected through our website (<a href="{{ route('home') }}" class="text-amber-600 dark:text-amber-400 font-semibold hover:underline">https://anshivya.com</a>), contact forms, career portals, and recruitment services in compliance with applicable Indian data protection frameworks, including the Digital Personal Data Protection Act (DPDP Act).
                    </p>
                </div>

                <!-- 2. INFORMATION WE COLLECT -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">02.</span> Information We Collect
                    </h2>
                    <p>
                        Depending on your interaction with Anshivya Group, we may collect the following categories of information:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-300">
                        <li><strong class="text-slate-900 dark:text-white">Candidate Information:</strong> Full name, contact numbers, email address, physical location/city, detailed resume/CV, education background, employment history, skills, current &amp; expected compensation, and background verification records.</li>
                        <li><strong class="text-slate-900 dark:text-white">Corporate &amp; Employer Information:</strong> Company name, designated contact person, official email address, telephone numbers, office location, job vacancy details, and billing/tax details.</li>
                        <li><strong class="text-slate-900 dark:text-white">Technical &amp; Telemetry Data:</strong> IP address, browser type, operating system, referrer URL, pages visited, and local theme preference (`theme`).</li>
                    </ul>
                </div>

                <!-- 3. HOW WE USE YOUR INFORMATION -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">03.</span> Purpose of Data Processing
                    </h2>
                    <p>
                        We process collected personal data exclusively for legitimate business and HR service fulfillment purposes, including:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-300">
                        <li>Evaluating candidate suitability and matching job seekers with relevant client career openings.</li>
                        <li>Executing recruitment, background verification (BGV), payroll processing, and staffing operations.</li>
                        <li>Responding to employer corporate enquiries and scheduling advisory consultations.</li>
                        <li>Sending application status updates, interview schedules, and HR compliance newsletters.</li>
                        <li>Ensuring system security, anti-spam verification, and platform performance optimization.</li>
                    </ul>
                </div>

                <!-- 4. DATA SHARING & DISCLOSURE -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">04.</span> Data Disclosure &amp; Sharing Protocols
                    </h2>
                    <p>
                        <strong class="text-slate-900 dark:text-white">We do not sell, rent, or trade your personal information to third-party marketing brokers under any circumstances.</strong>
                    </p>
                    <p>
                        Personal data is shared strictly under the following controlled circumstances:
                    </p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-300">
                        <li><strong class="text-slate-900 dark:text-white">Prospective Employers:</strong> Candidate resumes and profile summaries are shared with authorized hiring managers at client organizations with candidate consent.</li>
                        <li><strong class="text-slate-900 dark:text-white">Authorized Background Screening Partners:</strong> Sharing data with verified verification agencies for education, past employment, and criminal record screening.</li>
                        <li><strong class="text-slate-900 dark:text-white">Legal Obligations:</strong> Disclosing information if required by law enforcement, court order, or regulatory government bodies under statutory mandates.</li>
                    </ul>
                </div>

                <!-- 5. DATA SECURITY & STORAGE -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">05.</span> Data Security &amp; Encryption
                    </h2>
                    <p>
                        Anshivya Group implements enterprise-grade technical and organizational safeguards to protect data against unauthorized access, loss, alteration, or disclosure. These measures include encrypted SSL/TLS data transmission, strict role-based data access controls, secure server infrastructure, and routine vulnerability assessments.
                    </p>
                </div>

                <!-- 6. DATA RETENTION -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">06.</span> Data Retention Policy
                    </h2>
                    <p>
                        Candidate profiles and application records are retained in our active talent database to notify job seekers of upcoming relevant career opportunities. If you wish to have your candidate profile deleted from our database, you may submit a written request at any time.
                    </p>
                    <p>
                        Corporate payroll and statutory compliance records are retained in accordance with mandatory Indian labor, PF/ESIC, and taxation retention regulations.
                    </p>
                </div>

                <!-- 7. YOUR PRIVACY RIGHTS -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">07.</span> Your Privacy Rights
                    </h2>
                    <p>You possess the following rights regarding your personal information:</p>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 dark:text-slate-300">
                        <li><strong class="text-slate-900 dark:text-white">Access &amp; Review:</strong> Request a summary of personal information we hold about you.</li>
                        <li><strong class="text-slate-900 dark:text-white">Correction &amp; Update:</strong> Request correction of inaccurate or incomplete resume/profile details.</li>
                        <li><strong class="text-slate-900 dark:text-white">Erasure:</strong> Request the deletion of your personal data from our recruitment records.</li>
                        <li><strong class="text-slate-900 dark:text-white">Withdraw Consent:</strong> Opt-out of non-essential email communications or updates.</li>
                    </ul>
                </div>

                <!-- 8. COOKIES & LOCAL STORAGE -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">08.</span> Cookies &amp; Local Storage
                    </h2>
                    <p>
                        Our website utilizes browser local storage (`theme`) to save your preferred UI display mode (Light or Dark mode). We do not use intrusive tracking cookies for cross-site behavioral advertising.
                    </p>
                </div>

                <!-- 9. PRIVACY OFFICER CONTACT -->
                <div class="space-y-3 pt-6 border-t border-slate-200 dark:border-slate-800/80">
                    <h2 class="text-xl font-extrabold text-slate-900 dark:text-white flex items-center gap-2">
                        <span class="text-amber-600 dark:text-amber-400 font-mono">09.</span> Contact Our Privacy Officer
                    </h2>
                    <p>
                        For privacy inquiries, data access requests, or to exercise your privacy rights, please contact our Data Protection Officer:
                    </p>
                    <div class="p-4 rounded-2xl bg-slate-100 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 space-y-1.5 text-xs text-slate-700 dark:text-slate-300">
                        <p><strong class="text-slate-900 dark:text-white">Data Protection Officer &bull; Anshivya Group</strong></p>
                        <p>Ahmedabad, Gujarat, India</p>
                        <p>Privacy Email: <a href="mailto:info@anshivya.com" class="text-amber-600 dark:text-amber-400 hover:underline font-semibold">info@anshivya.com</a></p>
                        <p>Corporate Phone: {{ $siteInfo->mobile_1 ?? '+91 81128 25288' }}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
