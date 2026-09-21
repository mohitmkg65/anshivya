@extends('layouts.admin')

@section('title', 'Contact Enquiries Management')

@section('content')
<div class="space-y-6">

    <div class="flex items-center justify-between">
        <h2 class="text-lg font-bold text-white">Contact Enquiries &amp; Employer Leads</h2>
        
        <form action="{{ route('admin.enquiries.index') }}" method="GET" class="flex items-center gap-2">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Search name, company, email..." class="px-3.5 py-2 rounded-xl bg-slate-900 border border-slate-800 text-xs text-white focus:outline-none focus:border-amber-500" />
            <button type="submit" class="px-4 py-2 rounded-xl bg-amber-500 text-slate-950 font-bold text-xs">Search</button>
        </form>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl overflow-hidden shadow-xl">
        <table class="w-full text-left text-xs text-slate-300">
            <thead class="bg-slate-950 text-slate-400 font-bold uppercase border-b border-slate-800">
                <tr>
                    <th class="p-4">Applicant / Company</th>
                    <th class="p-4">Contact</th>
                    <th class="p-4">Service Required</th>
                    <th class="p-4">Status</th>
                    <th class="p-4">Date</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-800">
                @forelse($enquiries as $enquiry)
                    <tr class="hover:bg-slate-800/40">
                        <td class="p-4 font-semibold text-white">
                            {{ $enquiry->full_name }}
                            <div class="text-[11px] text-amber-400 font-normal">{{ $enquiry->company_name }}</div>
                        </td>
                        <td class="p-4">
                            {{ $enquiry->work_email }}
                            <div class="text-[11px] text-slate-400">{{ $enquiry->phone_number }}</div>
                        </td>
                        <td class="p-4">{{ $enquiry->service_required }}</td>
                        <td class="p-4">
                            @if($enquiry->status === 'new')
                                <span class="px-2.5 py-1 rounded-full text-[10px] bg-amber-500/20 text-amber-400 border border-amber-500/30 font-bold uppercase">New</span>
                            @elseif($enquiry->status === 'contacted')
                                <span class="px-2.5 py-1 rounded-full text-[10px] bg-blue-500/20 text-blue-400 border border-blue-500/30 font-bold uppercase">Contacted</span>
                            @else
                                <span class="px-2.5 py-1 rounded-full text-[10px] bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 font-bold uppercase">Closed</span>
                            @endif
                        </td>
                        <td class="p-4 text-slate-400">{{ $enquiry->created_at->format('M d, Y') }}</td>
                        <td class="p-4 text-right space-x-2">
                            <a href="{{ route('admin.enquiries.show', $enquiry->id) }}" class="px-3 py-1.5 rounded-lg bg-slate-800 text-amber-400 hover:bg-slate-700 font-bold">View</a>
                            <form action="{{ route('admin.enquiries.destroy', $enquiry->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this enquiry?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-3 py-1.5 rounded-lg bg-red-500/10 text-red-400 hover:bg-red-500/20 font-bold">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="p-8 text-center text-slate-400">No contact enquiries found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pt-4">
        {{ $enquiries->links() }}
    </div>

</div>
@endsection
