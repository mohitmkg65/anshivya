@extends('layouts.admin')

@section('title', 'Job Postings Management (CRUD)')

@section('content')
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <div>
            <h2 class="text-lg font-bold text-slate-900 dark:text-white">Job Postings Management</h2>
            <p class="text-xs text-slate-500 dark:text-slate-400">Manage active &amp; draft job vacancies published on the website.</p>
        </div>

        <a href="{{ route('admin.jobs.create') }}" class="px-5 py-2.5 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
            + Create New Job Posting
        </a>
    </div>

    <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl overflow-hidden shadow-xl transition-colors">
        <table class="w-full text-left text-xs text-slate-700 dark:text-slate-300">
            <thead class="bg-slate-100 dark:bg-slate-950 text-slate-700 dark:text-slate-400 font-bold uppercase border-b border-slate-200 dark:border-slate-800">
                <tr>
                    <th class="p-4">Job Title</th>
                    <th class="p-4">Department</th>
                    <th class="p-4">Location / Type</th>
                    <th class="p-4">Applications</th>
                    <th class="p-4">Status</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-200 dark:divide-slate-800">
                @forelse($jobs as $job)
                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/40 transition-colors">
                        <td class="p-4 font-semibold text-slate-900 dark:text-white">
                            {{ $job->title }}
                            <div class="text-[11px] text-slate-500 dark:text-slate-400 font-normal">Experience: {{ $job->experience }}</div>
                        </td>
                        <td class="p-4 font-medium text-amber-600 dark:text-amber-400">{{ $job->department }}</td>
                        <td class="p-4">
                            {{ $job->location }}
                            <div class="text-[11px] text-slate-500 dark:text-slate-400">{{ $job->type }}</div>
                        </td>
                        <td class="p-4 font-bold text-emerald-600 dark:text-emerald-400">
                            {{ $job->applications_count }} applications
                        </td>
                        <td class="p-4">
                            <form action="{{ route('admin.jobs.toggle', $job->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase border {{ $job->is_published ? 'bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border-emerald-500/30' : 'bg-slate-100 dark:bg-slate-800 text-slate-500 dark:text-slate-400 border-slate-300 dark:border-slate-700' }}">
                                    {{ $job->is_published ? 'Published' : 'Draft / Hidden' }}
                                </button>
                            </form>
                        </td>
                        <td class="p-4 text-right space-x-2">
                            <a href="{{ route('admin.jobs.edit', $job->id) }}" class="px-3 py-1.5 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-900 dark:text-white hover:bg-slate-200 dark:hover:bg-slate-700 font-bold transition-colors">Edit</a>
                            <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this job posting?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1.5 rounded-lg bg-red-500/10 text-red-600 dark:text-red-400 hover:bg-red-500/20 font-bold transition-colors">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-8 text-center text-slate-500 dark:text-slate-400">No job postings created yet. Click above to post your first vacancy.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pt-4">
        {{ $jobs->links() }}
    </div>

</div>
@endsection
