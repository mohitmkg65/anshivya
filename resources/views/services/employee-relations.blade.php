@extends('layouts.app')

@section('title', 'Employee Relation Services | Anshivya Global HR Solution\'s')

@section('meta_description', 'Foster positive workplace harmony, grievance redressal, employee engagement, and conflict mediation with Anshivya Group\'s Employee Relation solutions.')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                WORKPLACE HARMONY &amp; ENGAGEMENT
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Employee Relation</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-3xl leading-relaxed">
                Build an engaged, transparent, and collaborative work environment through structured grievance redressal mechanisms, conflict resolution, and proactive workplace communication strategies.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Grievance Redressal &amp; Dispute Mediation</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Setting up objective dispute resolution channels and managing formal employee grievance processes with confidentiality.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Employee Engagement &amp; Well-being</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Designing recognition programs, satisfaction pulse surveys, and team-building initiatives that boost morale and retention.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Workplace Communication Protocols</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Establishing transparent top-down and bottom-up feedback mechanisms to align team objectives across departments.</p>
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                    Discuss Employee Relation Solutions
                </a>
            </div>
        </div>
    </section>
@endsection
