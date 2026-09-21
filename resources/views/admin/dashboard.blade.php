@extends('layouts.admin')

@section('title', 'Admin Overview Dashboard')

@section('content')
<div class="space-y-8">

    <!-- METRICS GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 shadow-xl space-y-2">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Total Enquiries</div>
            <div class="flex items-baseline justify-between">
                <div class="text-3xl font-black text-white">{{ $stats['total_enquiries'] }}</div>
                <span class="px-2 py-0.5 rounded-full text-[10px] bg-amber-500/10 text-amber-400 border border-amber-500/30 font-bold">
                    {{ $stats['new_enquiries'] }} New
                </span>
            </div>
            <div class="text-[11px] text-slate-500">Submitted contact leads</div>
        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 shadow-xl space-y-2">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Active Job Openings</div>
            <div class="flex items-baseline justify-between">
                <div class="text-3xl font-black text-white">{{ $stats['active_jobs'] }}</div>
                <span class="text-xs text-slate-400">of {{ $stats['total_jobs'] }} total</span>
            </div>
            <div class="text-[11px] text-slate-500">Live candidate vacancies</div>
        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 shadow-xl space-y-2">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Candidate Applications</div>
            <div class="flex items-baseline justify-between">
                <div class="text-3xl font-black text-white">{{ $stats['total_applications'] }}</div>
                <span class="px-2 py-0.5 rounded-full text-[10px] bg-emerald-500/10 text-emerald-400 border border-emerald-500/30 font-bold">
                    {{ $stats['pending_applications'] }} Pending
                </span>
            </div>
            <div class="text-[11px] text-slate-500">Received CV submissions</div>
        </div>

        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 shadow-xl space-y-3">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-400">Quick Management</div>
            <div class="flex flex-col gap-2">
                <a href="{{ route('admin.jobs.create') }}" class="px-3 py-1.5 rounded-xl bg-amber-500 text-slate-950 text-xs font-bold text-center uppercase tracking-wider hover:bg-amber-400">
                    + Post New Job
                </a>
            </div>
        </div>

    </div>

    <!-- RECENT ACTIVITY TABLES -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- RECENT ENQUIRIES -->
        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 shadow-xl space-y-4">
            <div class="flex items-center justify-between border-b border-slate-800 pb-3">
                <h3 class="text-sm font-bold text-white uppercase tracking-wider">Recent Contact Enquiries</h3>
                <a href="{{ route('admin.enquiries.index') }}" class="text-xs text-amber-400 hover:underline">View All &rarr;</a>
            </div>

            @if($recentEnquiries->isEmpty())
                <div class="text-xs text-slate-400 py-6 text-center">No contact enquiries received yet.</div>
            @else
                <div class="space-y-3">
                    @foreach($recentEnquiries as $enquiry)
                        <div class="p-3.5 rounded-2xl bg-slate-950 border border-slate-800/80 flex items-center justify-between text-xs">
                            <div>
                                <div class="font-bold text-white">{{ $enquiry->full_name }} <span class="text-slate-400 font-normal">({{ $enquiry->company_name }})</span></div>
                                <div class="text-[11px] text-slate-400">{{ $enquiry->service_required }} &bull; {{ $enquiry->created_at->diffForHumans() }}</div>
                            </div>
                            <a href="{{ route('admin.enquiries.show', $enquiry->id) }}" class="px-2.5 py-1 rounded-lg bg-slate-800 text-amber-400 hover:bg-slate-700 font-semibold">
                                View
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        <!-- RECENT CANDIDATE APPLICATIONS -->
        <div class="bg-slate-900 border border-slate-800 rounded-3xl p-6 shadow-xl space-y-4">
            <div class="flex items-center justify-between border-b border-slate-800 pb-3">
                <h3 class="text-sm font-bold text-white uppercase tracking-wider">Recent Candidate Applications</h3>
                <a href="{{ route('admin.applications.index') }}" class="text-xs text-amber-400 hover:underline">View All &rarr;</a>
            </div>

            @if($recentApplications->isEmpty())
                <div class="text-xs text-slate-400 py-6 text-center">No candidate applications received yet.</div>
            @else
                <div class="space-y-3">
                    @foreach($recentApplications as $app)
                        <div class="p-3.5 rounded-2xl bg-slate-950 border border-slate-800/80 flex items-center justify-between text-xs">
                            <div>
                                <div class="font-bold text-white">{{ $app->candidate_name }}</div>
                                <div class="text-[11px] text-slate-400">Applied for: <span class="text-amber-300 font-semibold">{{ $app->job_title }}</span> &bull; {{ $app->created_at->diffForHumans() }}</div>
                            </div>
                            <a href="{{ route('admin.applications.show', $app->id) }}" class="px-2.5 py-1 rounded-lg bg-slate-800 text-emerald-400 hover:bg-slate-700 font-semibold">
                                Review CV
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>

</div>
@endsection
