@extends('layouts.app')

@section('title', 'Performance Management System (PMS) | Anshivya Global HR Solution\'s')

@section('meta_description', 'Design transparent KPI & KRA appraisal systems, performance reviews, and employee growth plans with Anshivya Global HR Solution\'s PMS solutions.')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                TALENT PERFORMANCE
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Performance Management System (PMS)</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-3xl leading-relaxed">
                Build a culture of accountability and continuous achievement with structured KPI frameworks, transparent evaluation cycles, and merit-driven career progression.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">KRA &amp; KPI Framework Design</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Establishing role-specific Key Result Areas (KRAs) and measurable Key Performance Indicators (KPIs) aligned with business targets.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Appraisal Cycle Facilitation</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Quarterly and annual review management, 360-degree feedback channels, and normalization sessions.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">PIP &amp; Capability Building</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Constructive Performance Improvement Plans (PIPs) and skill-gap identification for continuous employee growth.</p>
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                    Implement PMS Framework
                </a>
            </div>
        </div>
    </section>
@endsection
