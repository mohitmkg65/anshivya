@extends('layouts.admin')

@section('title', 'Candidate Applications Management')

@section('content')
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <h2 class="text-lg font-bold text-white">Candidate Applications &amp; Resumes</h2>

        <form action="{{ route('admin.applications.index') }}" method="GET" class="flex items-center gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search candidate, job, email..." class="px-3.5 py-2 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:outline-none focus:border-amber-500" />
            <button type="submit" class="px-4 py-2 rounded-xl bg-amber-500 text-slate-950 font-bold text-xs">Search</button>
        </form>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl overflow-hidden shadow-xl">
        <table class="w-full text-left text-xs text-slate-300">
            <thead class="bg-slate-950 text-slate-400 font-bold uppercase border-b border-slate-800">
                <tr>
                    <th class="p-4">Candidate Name</th>
                    <th class="p-4">Job Title</th>
                    <th class="p-4">Contact Info</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Applied Date</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800">
                @forelse($applications as $app)
                    <tr class="hover:bg-slate-800/40">
                        <td class="p-4 font-semibold text-white">
                            {{ $app->candidate_name }}
                        </td>
                        <td class="p-4 font-bold text-amber-400">
                            {{ $app->job_title }}
                        </td>
                        <td class="p-4">
                            {{ $app->candidate_email }}
                            <div class="text-[11px] text-slate-400">{{ $app->candidate_phone }}</div>
                        </td>
                        <td class="p-4">
                            @if($app->status === 'pending')
                                <span class="px-2.5 py-1 rounded-full text-[10px] bg-amber-500/20 text-amber-400 border border-amber-500/30 font-bold uppercase">Pending</span>
                            @elseif($app->status === 'shortlisted')
                                <span class="px-2.5 py-1 rounded-full text-[10px] bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 font-bold uppercase">Shortlisted</span>
                            @elseif($app->status === 'rejected')
                                <span class="px-2.5 py-1 rounded-full text-[10px] bg-red-500/20 text-red-400 border border-red-500/30 font-bold uppercase">Rejected</span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-[10px] bg-blue-500/20 text-blue-400 border border-blue-500/30 font-bold uppercase">Reviewed</span>
                            @endif
                        </td>
                        <td class="p-4 text-slate-400">{{ $app->created_at->format('M d, Y') }}</td>
                        <td class="p-4 text-right space-x-2">
                            <a href="{{ route('admin.applications.download', $app->id) }}" class="px-3 py-1.5 rounded-lg bg-emerald-500/20 text-emerald-400 hover:bg-emerald-500/30 font-bold">Download Resume</a>
                            <a href="{{ route('admin.applications.show', $app->id) }}" class="px-3 py-1.5 rounded-lg bg-slate-800 text-white hover:bg-slate-700 font-bold">Details</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-8 text-center text-slate-400">No candidate applications received yet.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pt-4">
        {{ $applications->links() }}
    </div>

</div>
@endsection
