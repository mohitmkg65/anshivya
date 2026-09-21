@extends('layouts.admin')

@section('title', 'Admin Overview Dashboard')

@section('content')
<div class="space-y-8">

    <!-- METRICS GRID -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xl space-y-2 transition-colors">
            <div class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Total Enquiries</div>
            <div class="flex items-baseline justify-between">
                <div class="text-3xl font-black text-slate-900 dark:text-white">{{ $stats['total_enquiries'] }}</div>
                <span class="px-2 py-0.5 rounded-full text-[10px] bg-amber-500/10 text-amber-600 dark:text-amber-400 border border-amber-500/30 font-bold">
                    {{ $stats['new_enquiries'] }} New
                </span>
            </div>
            <div class="text-[11px] text-slate-500 dark:text-slate-400">Submitted contact leads</div>
        </div>

    </div>

    <!-- RECENT ACTIVITY TABLES -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        
        <!-- RECENT ENQUIRIES -->
        <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xl space-y-4 transition-colors">
            <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-3">
                <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider">Recent Contact Enquiries</h3>
                <a href="{{ route('admin.enquiries.index') }}" class="text-xs text-amber-600 dark:text-amber-400 font-semibold hover:underline">View All &rarr;</a>
            </div>

            @if($recentEnquiries->isEmpty())
                <div class="text-xs text-slate-500 dark:text-slate-400 py-6 text-center">No contact enquiries received yet.</div>
            @else
                <div class="space-y-3">
                    @foreach($recentEnquiries as $enquiry)
                        <div class="p-3.5 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800/80 flex items-center justify-between text-xs">
                            <div>
                                <div class="font-bold text-slate-900 dark:text-white">{{ $enquiry->full_name }} <span class="text-slate-500 dark:text-slate-400 font-normal">({{ $enquiry->company_name }})</span></div>
                                <div class="text-[11px] text-slate-500 dark:text-slate-400">{{ $enquiry->service_required }} &bull; {{ $enquiry->created_at->diffForHumans() }}</div>
                            </div>
                            <a href="{{ route('admin.enquiries.show', $enquiry->id) }}" class="px-2.5 py-1 rounded-lg bg-slate-100 dark:bg-slate-800 text-amber-600 dark:text-amber-400 hover:bg-slate-200 dark:hover:bg-slate-700 font-semibold transition-colors">
                                View
                            </a>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

    </div>

</div>
@endsection
