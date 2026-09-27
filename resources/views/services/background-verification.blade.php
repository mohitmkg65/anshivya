@extends('layouts.app')

@section('title', 'Background Verification (BGV) Services | Anshivya Group')

@section('meta_description', 'Mitigate hiring risks with Anshivya Group\'s pre-employment background verification services covering education, employment, criminal records, and credentials.')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                RISK MITIGATION &amp; COMPLIANCE
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Background Verification (BGV)</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-3xl leading-relaxed">
                Safeguard enterprise integrity and ensure authentic hiring through rigorous pre-employment background screening, document validation, and identity checks.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Employment &amp; Education Checks</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Direct verification with previous employers, HR departments, universities, and technical boards.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Identity &amp; Address Verification</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Validation of government IDs, permanent/current residential addresses, and physical site visits when required.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Criminal &amp; Court Record Screening</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Comprehensive screening across law enforcement databases, court records, and regulatory watchlists.</p>
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                    Initiate BGV Screening
                </a>
            </div>
        </div>
    </section>
@endsection
