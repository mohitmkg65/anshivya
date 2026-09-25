@extends('layouts.app')

@section('title', 'Employee Relations & Engagement Support | Anshivya Group')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                CULTURE & RETENTION
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Foster a Motivated, Aligned, and Engaged Workforce.</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl">
                We help organizations build healthier workplace environments through structured employee relations practices, transparent communication channels, and targeted engagement initiatives.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                Discuss Workplace Culture Needs
            </a>
        </div>
    </section>
@endsection
