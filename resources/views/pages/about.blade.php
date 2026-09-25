@extends('layouts.app')

@section('title', 'About Us & Executive Leadership | Anshivya Group')

@section('content')

    <!-- ABOUT HERO SECTION -->
    <section class="relative pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 overflow-hidden transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                ABOUT ANSHIVYA GROUP
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">
                Building Futures, <span class="accent-text-gradient">Beyond Boundaries.</span>
            </h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl leading-relaxed">
                Partner with Anshivya Group to access a global network of professionals who drive results.
            </p>
        </div>
    </section>

    <!-- VISION & MISSION -->
    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 border-b border-slate-200 dark:border-slate-800 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 sm:p-10 rounded-3xl glass-card space-y-4">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">OUR VISION</div>
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Empowering Corporate Growth</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    To be the preferred corporate HR and recruitment solutions partner for expanding enterprises across India and global markets, recognized for domain precision, operational clarity, and ethical workforce practices.
                </p>
            </div>

            <div class="p-8 sm:p-10 rounded-3xl glass-card space-y-4">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">OUR MISSION</div>
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Building High-Fitting Teams</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    To empower businesses with high-fitting talent, streamlined payroll management, and sound HR compliance frameworks, while providing candidates with transparent, value-aligned career growth opportunities.
                </p>
            </div>
        </div>
    </section>

    <!-- EXECUTIVE LEADERSHIP SECTION WITH PORTRAITS -->
    <section class="py-24 bg-slate-100/50 dark:bg-slate-950 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <div class="max-w-3xl space-y-2">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">EXECUTIVE LEADERSHIP</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">Guided by Experience.</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Our leadership brings together business vision, people expertise, financial discipline and operational experience.</p>
            </div>

            <!-- 4 EXECUTIVE LEADERSHIP CARDS WITH IMAGES -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- 1. CHAIRMAN SHIV MUNI PAL -->
                <div class="rounded-3xl glass-card p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 group">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden border-2 border-amber-500/40 shrink-0 shadow-2xl">
                        <img src="/images/shiv-muni-pal.png" alt="Shiv Muni Pal - Chairman" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <div class="space-y-2 text-center sm:text-left">
                        <span class="text-[11px] font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">Chairman</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 dark:text-white">Shiv Muni Pal</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Providing strategic direction, corporate governance, and long-term vision to Anshivya Group's expansion across diverse industrial sectors.
                        </p>
                    </div>
                </div>

                <!-- 2. FOUNDER & MANAGING DIRECTOR SHIVAM PAL -->
                <div class="rounded-3xl glass-card p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 group">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden border-2 border-amber-500/40 shrink-0 shadow-2xl">
                        <img src="/images/shivam-pal.jpeg" alt="Shivam Pal - Founder & Managing Director" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <div class="space-y-2 text-center sm:text-left">
                        <span class="text-[11px] font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">Founder &amp; Managing Director</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 dark:text-white">Shivam Pal</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Leading Anshivya Group's strategic growth, operational excellence, and workforce practice across recruitment, payroll, and statutory compliance.
                        </p>
                    </div>
                </div>

                <!-- 3. CHIEF OPERATING OFFICER ANANYA SHARMA -->
                <div class="rounded-3xl glass-card p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 group">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden border-2 border-amber-500/40 shrink-0 shadow-2xl">
                        <img src="/images/anjali-pal.jpeg" alt="Anjali Pal - Chief Operating Officer" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <div class="space-y-2 text-center sm:text-left">
                        <span class="text-[11px] font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">Chief Operating Officer</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 dark:text-white">Anjali Pal</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Directing daily HR operations, client delivery frameworks, executive recruitment teams, and candidate onboarding processes.
                        </p>
                    </div>
                </div>

                <!-- 4. HEAD OF COMPLIANCE & PAYROLL MAYA PAL -->
                <div class="rounded-3xl glass-card p-8 flex flex-col sm:flex-row items-center sm:items-start gap-6 group">
                    <div class="w-32 h-32 rounded-2xl overflow-hidden border-2 border-amber-500/40 shrink-0 shadow-2xl">
                        <img src="/images/maya-pal.png" alt="Maya Pal - Finance & Accounts Head" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500" />
                    </div>
                    <div class="space-y-2 text-center sm:text-left">
                        <span class="text-[11px] font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">Finance &amp; Accounts Head</span>
                        <h3 class="text-2xl font-extrabold text-slate-900 dark:text-white">Maya Pal</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-xs leading-relaxed">
                            Managing accounts, payroll, taxation, audits, budgeting, cash flow, compliance, financial controls, and corporate policy formulation.
                        </p>
                    </div>
                </div>

            </div>

            <!-- DETAILED SPOTLIGHT FOR SHIVAM PAL -->
            <div class="rounded-3xl bg-white dark:bg-gradient-to-r dark:from-slate-900 dark:via-slate-950 dark:to-slate-900 p-8 sm:p-12 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-wider">
                    EXECUTIVE SPOTLIGHT
                </div>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">Experience That Shapes Our Direction.</h3>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed max-w-3xl">
                    Shivam Pal brings hands-on leadership and domain experience across HR, recruitment, payroll management, statutory compliance, and corporate workforce strategy.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-4 border-t border-slate-200 dark:border-slate-800 text-xs text-slate-700 dark:text-slate-200">
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Recruitment &amp; Talent Acquisition</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Payroll &amp; HRMS Implementation</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Compliance &amp; Policy Formulation</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Employee Relations &amp; Engagement</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Strategic HR Consulting</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
