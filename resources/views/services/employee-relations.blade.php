@extends('layouts.app')

@section('title', 'Employee Relations & HR Policies | Anshivya Group')

@section('meta_description', 'Build transparent workplace policies, grievance redressal mechanisms, POSH compliance, and employee engagement frameworks with Anshivya Group.')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                CULTURE &amp; RETENTION
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Employee Relations &amp; HR Policies</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-3xl leading-relaxed">
                Foster a motivated, aligned, and compliant workforce through structured policy handbooks, transparent grievance redressal mechanisms, POSH frameworks, and retention initiatives.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">HR Policy Handbook Formulation</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Drafting clear, compliant employee handbooks, code of conduct policies, attendance rules, and leave guidelines.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Grievance &amp; Disciplinary Frameworks</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Setting up objective dispute resolution protocols, disciplinary inquiry procedures, and conflict mediation.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">POSH Compliance &amp; Engagement</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Internal Complaints Committee (ICC) setup, POSH training workshops, and employee well-being initiatives.</p>
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                    Discuss Workplace Culture &amp; Policies
                </a>
            </div>
        </div>
    </section>
@endsection
