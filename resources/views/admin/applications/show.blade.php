@extends('layouts.admin')

@section('title', 'Application — ' . $application->candidate_name)

@section('content')
<div class="max-w-4xl space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.applications.index') }}" class="text-xs font-bold text-amber-400 hover:underline">&larr; Back to Applications</a>

        <form action="{{ route('admin.applications.status', $application->id) }}" method="POST" class="flex items-center gap-2">
            @csrf
            @method('PATCH')
            <label class="text-xs text-slate-400 font-bold uppercase">Application Status:</label>
            <select name="status" onchange="this.form.submit()" class="px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-800 text-xs text-emerald-400 font-bold">
                <option value="pending" {{ $application->status === 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="reviewed" {{ $application->status === 'reviewed' ? 'selected' : '' }}>Reviewed</option>
                <option value="shortlisted" {{ $application->status === 'shortlisted' ? 'selected' : '' }}>Shortlisted</option>
                <option value="rejected" {{ $application->status === 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </form>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 space-y-6 shadow-2xl">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-slate-800 pb-4 gap-2">
            <div>
                <h2 class="text-2xl font-extrabold text-white">{{ $application->candidate_name }}</h2>
                <div class="text-sm font-bold text-amber-400">Applied for: {{ $application->job_title }}</div>
            </div>
            <div class="text-xs text-slate-400">
                Applied {{ $application->created_at->format('M d, Y h:i A') }}
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-xs border-b border-slate-800 pb-6">
            <div>
                <div class="font-bold uppercase text-slate-400 mb-1">Email Address</div>
                <a href="mailto:{{ $application->candidate_email }}" class="text-white hover:underline text-sm font-semibold">{{ $application->candidate_email }}</a>
            </div>

            <div>
                <div class="font-bold uppercase text-slate-400 mb-1">Phone Number</div>
                <a href="tel:{{ $application->candidate_phone }}" class="text-white hover:underline text-sm font-semibold">{{ $application->candidate_phone }}</a>
            </div>
        </div>

        @if($application->cover_message)
            <div>
                <h3 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Cover Message / Note</h3>
                <div class="p-6 rounded-2xl bg-slate-950 border border-slate-800 text-slate-200 text-xs leading-relaxed whitespace-pre-line">
                    {{ $application->cover_message }}
                </div>
            </div>
        @endif

        <div class="flex items-center justify-between pt-4 border-t border-slate-800">
            <a href="{{ route('admin.applications.download', $application->id) }}" class="px-6 py-2.5 rounded-xl bg-emerald-500 text-slate-950 font-bold text-xs uppercase tracking-wider flex items-center gap-2">
                Download Resume File
            </a>

            <form action="{{ route('admin.applications.destroy', $application->id) }}" method="POST" onsubmit="return confirm('Delete this application?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 rounded-xl bg-red-500/10 text-red-400 hover:bg-red-500/20 text-xs font-bold">
                    Delete Application
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
