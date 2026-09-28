@extends('layouts.app')

@section('title', 'Manpower & Staffing Solutions | Anshivya Global HR Solution\'s')

@section('meta_description', 'Flexible contractual staffing, volume manpower deployment, and temporary staffing solutions with Anshivya Global HR Solution\'s.')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                FLEXIBLE WORKFORCE DEPLOYMENT
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Manpower &amp; Staffing Solutions</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-3xl leading-relaxed">
                Scale your operational workforce effortlessly with flexible contractual staffing, project-based manpower deployment, and skilled talent for industrial demand.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Contractual &amp; Temp-to-Perm Staffing</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Agile staffing models that allow companies to ramp headcount up or down based on workload volatility.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Industrial &amp; Technical Manpower</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Deploying vetted technicians, engineers, plant supervisors, and skilled labor across manufacturing and construction sectors.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Onsite Management &amp; Payroll Co-sourcing</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Full attendance, compliance, and site coordination managed directly by Anshivya's field deployment team.</p>
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                    Request Staffing Requirement Proposal
                </a>
            </div>
        </div>
    </section>
@endsection
