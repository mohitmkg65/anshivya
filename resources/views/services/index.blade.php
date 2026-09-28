@extends('layouts.app')

@section('title', 'Corporate HR Services & Workforce Solutions | Anshivya Global HR Solution\'s')

@section('meta_description', 'Explore Anshivya Global HR Solution\'s 9 core HR capabilities: HR Consulting, Recruitment, Payroll & Compliance, HRMS, PMS, Background Verification, Staffing Solutions, Employee Relation, and HR Policies & SOPs.')

@section('content')

    <!-- HERO SECTION -->
    <section class="relative pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 overflow-hidden transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                OUR SERVICES &amp; CAPABILITIES
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">
                Comprehensive HR &amp; <span class="accent-text-gradient">Workforce Solutions.</span>
            </h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-3xl leading-relaxed">
                Empowering organizations from startups to large enterprises with specialized HR consulting, talent acquisition, payroll management, HR technology, and strategic compliance frameworks.
            </p>
        </div>
    </section>

    <!-- SERVICES GRID SECTION -->
    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <div class="max-w-3xl space-y-2">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">CORE SERVICE PILLARS</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">End-to-End Solutions Tailored for Sustainable Growth</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Select any service card to view complete capabilities, execution methodology, and business advantages.</p>
            </div>

            <!-- 8 SERVICE CARDS GRID -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- CARD 1: HR CONSULTING -->
                <a href="{{ route('services.hr-consulting') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                01
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            HR Consulting
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Strategic advice and organizational design that aligns people management, leadership structures, and HR frameworks directly with long-term commercial goals.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore HR Consulting</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <!-- CARD 2: RECRUITMENT & TALENT ACQUISITION -->
                <a href="{{ route('services.recruitment') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                02
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            Recruitment &amp; Talent Acquisition
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Targeted executive search, technical lateral hiring, and volume sourcing designed to deliver qualified candidates across diverse industrial sectors.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore Recruitment</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <!-- CARD 3: PAYROLL MANAGEMENT & COMPLIANCE -->
                <a href="{{ route('services.payroll') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                03
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            Payroll Management &amp; Compliance
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Accurate monthly payroll computation, tax processing, PF/ESIC statutory compliance, and audit-ready reporting with zero operational error.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore Payroll &amp; Compliance</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <!-- CARD 4: HRMS & HR TECHNOLOGY SOLUTIONS -->
                <a href="{{ route('services.hrms-technology') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                04
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            HRMS &amp; HR Technology Solutions
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Modern HRMS integration, automated leave/attendance tracking, employee self-service portals, and data analytics dashboards for modern teams.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore HR Technology</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <!-- CARD 5: PERFORMANCE MANAGEMENT SYSTEM (PMS) -->
                <a href="{{ route('services.performance-management') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                05
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            Performance Management System (PMS)
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Robust KPI and KRA framework design, periodic review cycles, 360-degree evaluation systems, and merit-based performance improvement plans.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore Performance Management</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <!-- CARD 6: BACKGROUND VERIFICATION (BGV) -->
                <a href="{{ route('services.background-verification') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                06
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            Background Verification (BGV)
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Comprehensive pre-employment background checks covering education, past work history, criminal records, address verification, and credential validation.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore Background Verification</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <!-- CARD 7: MANPOWER & STAFFING SOLUTIONS -->
                <a href="{{ route('services.staffing-solutions') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                07
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            Manpower &amp; Staffing Solutions
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Flexible contractual staffing, temp-to-perm staffing, shop-floor workforce deployment, and rapid ramp-up for seasonal project demands.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore Staffing Solutions</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <!-- CARD 8: EMPLOYEE RELATION -->
                <a href="{{ route('services.employee-relations') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                08
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            Employee Relation
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Proactive grievance redressal mechanisms, dispute mediation, employee engagement initiatives, and transparent workplace communication frameworks.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore Employee Relation</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

                <!-- CARD 9: HR POLICIES & SOPS -->
                <a href="{{ route('services.hr-policies') }}" class="group rounded-3xl glass-card p-8 border border-slate-200/80 dark:border-slate-800/80 hover:border-amber-500/40 hover:shadow-2xl transition-all duration-300 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-lg group-hover:bg-amber-500 group-hover:text-white transition-colors duration-300">
                                09
                            </div>
                            <span class="text-slate-400 dark:text-slate-500 group-hover:text-amber-500 group-hover:translate-x-1 transition-all">
                                &rarr;
                            </span>
                        </div>
                        <h3 class="text-xl font-extrabold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">
                            HR Policies &amp; SOPs
                        </h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Custom employee handbooks, Standard Operating Procedures (SOPs), POSH compliance frameworks, and corporate governance documentation.
                        </p>
                    </div>
                    <div class="pt-6 mt-6 border-t border-slate-200 dark:border-slate-800/80 text-xs font-bold text-amber-600 dark:text-amber-400 flex items-center gap-1">
                        <span>Explore HR Policies &amp; SOPs</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- BOTTOM CTA BANNER -->
    <section class="py-16 bg-slate-100 dark:bg-slate-950 border-t border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="rounded-3xl bg-gradient-to-r from-slate-900 via-slate-950 to-amber-950 p-8 sm:p-12 border border-slate-800 shadow-2xl flex flex-col lg:flex-row items-center justify-between gap-8 text-white">
                <div class="space-y-2 max-w-2xl">
                    <h3 class="text-2xl sm:text-3xl font-extrabold">Require a Customized HR Package?</h3>
                    <p class="text-slate-300 text-sm">Our HR consultants work directly with leadership teams to assemble multi-service frameworks tailored to your industry.</p>
                </div>
                <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 text-white shadow-xl">
                    Talk to an HR Expert
                </a>
            </div>
        </div>
    </section>

@endsection
