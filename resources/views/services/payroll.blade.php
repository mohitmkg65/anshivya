@extends('layouts.app')

@section('title', 'Payroll Management & HRMS Implementation | Anshivya Group')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                WORKFORCE OPERATIONS
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Streamlined, Accurate, and Transparent Payroll Systems.</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl">
                Our payroll management solutions help organizations eliminate operational friction, automate calculation workflows, ensure clear reporting, and maintain full visibility over monthly compensation structures.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="p-6 rounded-2xl glass-card space-y-2">
                    <h3 class="font-bold text-slate-900 dark:text-white text-base">Monthly Salary Processing</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs">Accurate calculation, attendance reconciliation, and disbursement coordination.</p>
                </div>
                <div class="p-6 rounded-2xl glass-card space-y-2">
                    <h3 class="font-bold text-slate-900 dark:text-white text-base">HRMS Implementation</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs">Software setup, employee portal configuration, and attendance integration.</p>
                </div>
                <div class="p-6 rounded-2xl glass-card space-y-2">
                    <h3 class="font-bold text-slate-900 dark:text-white text-base">Transparent Reporting</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs">Customized monthly summary reports detailing payouts, deductions, and audit breakdown.</p>
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-slate-950 font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                    Discuss Payroll Setup
                </a>
            </div>
        </div>
    </section>
@endsection
