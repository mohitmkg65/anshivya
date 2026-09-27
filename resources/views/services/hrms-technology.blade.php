@extends('layouts.app')

@section('title', 'HRMS & HR Technology Solutions | Anshivya Group')

@section('meta_description', 'Automate HR workflows, attendance tracking, leave management, and employee self-service with Anshivya Group\'s HRMS & HR Technology Solutions.')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                HR TECHNOLOGY &amp; AUTOMATION
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">HRMS &amp; HR Technology Solutions</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-3xl leading-relaxed">
                Modernize workforce operations with smart HR software integration, automated attendance tracking, employee self-service portals, and data-driven HR analytics.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">HRMS Implementation &amp; Customization</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Selecting, configuring, and deploying scalable HRMS software tailored to your organizational hierarchy and approval flows.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Attendance &amp; Leave Automation</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Biometric, mobile GPS, and web-based attendance sync with automated leave approvals and shift management.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Self-Service Portals &amp; Analytics</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Empowering employees with digital payslips, tax declarations, and leadership with real-time HR performance metrics.</p>
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                    Request HR Technology Consultation
                </a>
            </div>
        </div>
    </section>
@endsection
