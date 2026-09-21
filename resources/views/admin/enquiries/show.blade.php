@extends('layouts.admin')

@section('title', 'Enquiry Details — ' . $enquiry->full_name)

@section('content')
<div class="max-w-4xl space-y-6">

<div class="max-w-4xl space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.enquiries.index') }}" class="text-xs font-bold text-amber-600 dark:text-amber-400 hover:underline">&larr; Back to Enquiries List</a>
        
        <form action="{{ route('admin.enquiries.status', $enquiry->id) }}" method="POST" class="flex items-center gap-2">
            @csrf
            @method('PATCH')
            <label class="text-xs text-slate-600 dark:text-slate-400 font-bold uppercase">Status:</label>
            <select name="status" onchange="this.form.submit()" class="px-3 py-1.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-xs text-amber-600 dark:text-amber-400 font-bold focus:outline-none shadow-sm">
                <option value="new" {{ $enquiry->status === 'new' ? 'selected' : '' }}>New</option>
                <option value="contacted" {{ $enquiry->status === 'contacted' ? 'selected' : '' }}>Contacted</option>
                <option value="closed" {{ $enquiry->status === 'closed' ? 'selected' : '' }}>Closed</option>
            </select>
        </form>
    </div>

    <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 space-y-6 shadow-2xl transition-colors">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-4 gap-2">
            <div>
                <h2 class="text-2xl font-extrabold text-slate-900 dark:text-white">{{ $enquiry->full_name }}</h2>
                <div class="text-sm font-bold text-amber-600 dark:text-amber-400">{{ $enquiry->company_name }}</div>
            </div>
            <div class="text-xs text-slate-500 dark:text-slate-400">
                Submitted {{ $enquiry->created_at->format('M d, Y h:i A') }}
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-xs border-b border-slate-200 dark:border-slate-800 pb-6">
            <div>
                <div class="font-bold uppercase text-slate-500 dark:text-slate-400 mb-1">Work Email</div>
                <a href="mailto:{{ $enquiry->work_email }}" class="text-slate-900 dark:text-white hover:underline text-sm font-semibold">{{ $enquiry->work_email }}</a>
            </div>

            <div>
                <div class="font-bold uppercase text-slate-500 dark:text-slate-400 mb-1">Phone Number</div>
                <a href="tel:{{ $enquiry->phone_number }}" class="text-slate-900 dark:text-white hover:underline text-sm font-semibold">{{ $enquiry->phone_number }}</a>
            </div>

            <div>
                <div class="font-bold uppercase text-slate-500 dark:text-slate-400 mb-1">Service Required</div>
                <div class="text-amber-600 dark:text-amber-400 font-semibold">{{ $enquiry->service_required }}</div>
            </div>

            <div>
                <div class="font-bold uppercase text-slate-500 dark:text-slate-400 mb-1">Positions / Staff Count</div>
                <div class="text-slate-900 dark:text-white font-semibold">{{ $enquiry->employee_count ?? 'Not specified' }}</div>
            </div>
        </div>

        <div>
            <h3 class="text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400 mb-2">Message / Hiring Details</h3>
            <div class="p-6 rounded-2xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 text-slate-800 dark:text-slate-200 text-xs leading-relaxed whitespace-pre-line">
                {{ $enquiry->message }}
            </div>
        </div>

        <div class="flex items-center justify-between pt-4 border-t border-slate-200 dark:border-slate-800">
            <a href="mailto:{{ $enquiry->work_email }}" class="px-6 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-400 text-slate-950 font-bold text-xs uppercase tracking-wider transition-colors shadow-md">
                Reply Via Email
            </a>

            <form action="{{ route('admin.enquiries.destroy', $enquiry->id) }}" method="POST" onsubmit="return confirm('Delete this enquiry?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 rounded-xl bg-red-500/10 text-red-600 dark:text-red-400 hover:bg-red-500/20 text-xs font-bold transition-colors">
                    Delete Lead
                </button>
            </form>
        </div>
    </div>

</div>
@endsection
