@extends('layouts.app')

@section('title', 'Job Openings & Career Opportunities | Anshivya Group')

@section('content')
    <section class="pt-36 pb-16 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 text-xs font-bold uppercase tracking-widest">
                CAREERS &amp; TALENT OPPORTUNITIES
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Find Opportunities Built Around Your Potential.</h1>
            <p class="text-slate-600 dark:text-slate-300 text-base max-w-2xl">Explore career opportunities and connect with relevant roles across corporate HR, recruitment, operations, and industrial sectors.</p>
        </div>
    </section>

    <section class="py-20 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">

            <!-- SEARCH & FILTERS -->
            <form action="{{ route('jobs') }}" method="GET" class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xl space-y-4">
                <div class="grid grid-cols-1 sm:grid-cols-4 gap-4">
                    <div class="sm:col-span-2">
                        <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-400 mb-1">Search Keywords</label>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by job title, skill, or keyword..." class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-amber-500" />
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-400 mb-1">Department</label>
                        <select name="department" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-slate-200 text-xs focus:outline-none focus:border-amber-500">
                            <option value="All Departments">All Departments</option>
                            @foreach($departments as $dept)
                                <option value="{{ $dept }}" {{ request('department') == $dept ? 'selected' : '' }}>{{ $dept }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-end">
                        <button type="submit" class="w-full py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold text-xs uppercase tracking-wider transition-colors shadow-md">
                            Filter Jobs
                        </button>
                    </div>
                </div>
            </form>

            <!-- JOB LISTINGS -->
            @if($jobs->isEmpty())
                <div class="py-20 text-center bg-white dark:bg-slate-900/40 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 space-y-4 shadow-md">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Currently, there are no open positions matching your search.</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-sm max-w-md mx-auto">Check back soon for new opportunities or send us your CV directly at <a href="mailto:hr@anshivya.com" class="text-amber-600 dark:text-amber-400 underline">hr@anshivya.com</a>.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($jobs as $job)
                        <div class="rounded-3xl glass-card p-8 shadow-xl flex flex-col justify-between space-y-6">
                            <div>
                                <div class="flex items-center justify-between mb-4">
                                    <span class="px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-[11px] font-bold uppercase">
                                        {{ $job->department }}
                                    </span>
                                    <span class="text-[11px] text-slate-500 dark:text-slate-400">{{ $job->type }}</span>
                                </div>

                                <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">{{ $job->title }}</h3>
                                <p class="text-slate-600 dark:text-slate-400 text-xs mb-4">{{ $job->short_description }}</p>

                                <div class="flex flex-wrap items-center gap-4 text-xs text-slate-700 dark:text-slate-300">
                                    <span>📍 {{ $job->location }}</span>
                                    <span>⏱️ {{ $job->experience }} Exp</span>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                                <a href="{{ route('jobs.show', $job->slug) }}" class="text-xs font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400 hover:text-amber-500">
                                    View Details &amp; Apply &rarr;
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </section>
@endsection
