@extends('layouts.app')

@section('title', 'HR Policies & SOPs | Anshivya Group')

@section('meta_description', 'Draft comprehensive employee handbooks, corporate policies, Standard Operating Procedures (SOPs), and POSH frameworks with Anshivya Group.')

@section('content')
    <section class="pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                CORPORATE GOVERNANCE &amp; SOPS
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">HR Policies &amp; SOPs</h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-3xl leading-relaxed">
                Establish operational clarity and legal compliance across your organization with custom employee policy handbooks, standardized operating procedures (SOPs), and regulatory governance frameworks.
            </p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Custom HR Policy Handbooks</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Formulating tailor-made corporate handbooks detailing leave policies, code of conduct, IT usage, remote work, and compensation rules.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">Standard Operating Procedures (SOPs)</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Mapping step-by-step HR workflows for onboarding, exit interviews, performance reviews, training, and asset management.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card space-y-3">
                    <h3 class="font-bold text-slate-900 dark:text-white text-lg">POSH &amp; Statutory Compliance Frameworks</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Setting up Internal Complaints Committees (ICC), drafting POSH policies, and conducting mandatory compliance awareness training.</p>
                </div>
            </div>

            <div class="text-center pt-8">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs hover:scale-105 transition-all shadow-xl">
                    Develop Custom HR Policies &amp; SOPs
                </a>
            </div>
        </div>
    </section>
@endsection
