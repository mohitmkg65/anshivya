@extends('layouts.app')

@section('title', $job->title . ' | Anshivya Group Careers')

@section('content')
    <section class="pt-36 pb-16 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <a href="{{ route('jobs') }}" class="text-xs font-bold text-amber-600 dark:text-amber-400 hover:underline">&larr; Back to Openings</a>
            <div class="text-xs font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400">{{ $job->department }} &bull; {{ $job->type }}</div>
            <h1 class="text-4xl font-extrabold text-slate-900 dark:text-white">{{ $job->title }}</h1>
            <div class="flex items-center gap-4 text-xs text-slate-600 dark:text-slate-400">
                <span>📍 {{ $job->location }}</span>
                <span>⏱️ {{ $job->experience }} Experience</span>
            </div>
        </div>
    </section>

    <section class="py-16 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 space-y-6 shadow-xl">
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-2">Overview</h3>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">{{ $job->short_description }}</p>
                </div>

                @if(!empty($job->responsibilities))
                    <div class="border-t border-slate-200 dark:border-slate-800 pt-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-3">Responsibilities</h3>
                        <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-300 list-disc pl-5">
                            @foreach($job->responsibilities as $resp)
                                <li>{{ $resp }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(!empty($job->requirements))
                    <div class="border-t border-slate-200 dark:border-slate-800 pt-4">
                        <h3 class="text-xs font-bold uppercase tracking-wider text-slate-700 dark:text-slate-300 mb-3">Requirements</h3>
                        <ul class="space-y-2 text-xs text-slate-600 dark:text-slate-300 list-disc pl-5">
                            @foreach($job->requirements as $req)
                                <li>{{ $req }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <!-- APPLICATION FORM -->
            <div id="apply" class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 space-y-6 shadow-xl">
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Apply for {{ $job->title }}</h3>

                @if(session('success'))
                    <div class="p-4 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 text-xs font-bold">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('api.jobs.apply') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                    @csrf
                    <input type="hidden" name="job_id" value="{{ $job->id }}">
                    <input type="hidden" name="job_title" value="{{ $job->title }}">

                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-1">Full Name *</label>
                        <input type="text" name="candidate_name" value="{{ old('candidate_name') }}" class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-amber-500" required />
                        @error('candidate_name') <span class="text-red-500 dark:text-red-400 text-[10px]">{{ $message }}</span> @enderror
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-1">Email Address *</label>
                            <input type="email" name="candidate_email" value="{{ old('candidate_email') }}" class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-amber-500" required />
                            @error('candidate_email') <span class="text-red-500 dark:text-red-400 text-[10px]">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-1">Phone Number *</label>
                            <input type="tel" name="candidate_phone" value="{{ old('candidate_phone') }}" class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-amber-500" required />
                            @error('candidate_phone') <span class="text-red-500 dark:text-red-400 text-[10px]">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-1">Resume Upload (PDF / DOCX, max 5MB) *</label>
                        <input type="file" name="resume" accept=".pdf,.doc,.docx" class="w-full px-4 py-2 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-700 dark:text-slate-300 text-xs file:mr-3 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-amber-500/10 file:text-amber-600 dark:file:text-amber-400" required />
                        @error('resume') <span class="text-red-500 dark:text-red-400 text-[10px]">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-1">Cover Message</label>
                        <textarea name="cover_message" rows="3" class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-xs focus:outline-none focus:border-amber-500">{{ old('cover_message') }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-slate-950 font-bold text-xs uppercase tracking-wider hover:scale-[1.01] transition-all shadow-lg">
                        Submit Application
                    </button>
                </form>
            </div>

        </div>
    </section>
@endsection
