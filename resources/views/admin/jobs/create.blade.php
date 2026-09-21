@extends('layouts.admin')

@section('title', 'Create New Job Posting')

@section('content')
<div class="max-w-4xl space-y-6">

    <div class="flex items-center justify-between">
        <a href="{{ route('admin.jobs.index') }}" class="text-xs font-bold text-amber-400 hover:underline">&larr; Back to Job Postings</a>
    </div>

    <div class="bg-slate-900 border border-slate-800 rounded-3xl p-8 shadow-2xl space-y-6">
        <h2 class="text-xl font-extrabold text-white border-b border-slate-800 pb-4">Create Job Vacancy</h2>

        <form action="{{ route('admin.jobs.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Job Title *</label>
                    <input type="text" name="title" value="{{ old('title') }}" placeholder="e.g. Senior HR Manager" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500" required />
                    @error('title') <span class="text-red-400 text-[10px]">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Department *</label>
                    <input type="text" name="department" value="{{ old('department', 'Recruitment') }}" placeholder="e.g. Recruitment or Operations" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500" required />
                    @error('department') <span class="text-red-400 text-[10px]">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <div>
                    <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Location *</label>
                    <input type="text" name="location" value="{{ old('location', 'Ahmedabad, Gujarat') }}" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500" required />
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Employment Type *</label>
                    <select name="type" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500">
                        <option value="Full-Time">Full-Time</option>
                        <option value="Part-Time">Part-Time</option>
                        <option value="Contractual">Contractual</option>
                    </select>
                </div>

                <div>
                    <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Required Experience *</label>
                    <input type="text" name="experience" value="{{ old('experience', '3-5 Years') }}" placeholder="e.g. 3-5 Years" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500" required />
                </div>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Short Overview / Description *</label>
                <textarea name="short_description" rows="3" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500" required>{{ old('short_description') }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Responsibilities (One bullet per line)</label>
                <textarea name="responsibilities" rows="4" placeholder="Oversee onboarding processes&#10;Manage attendance and payroll inputs" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500">{{ old('responsibilities') }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Candidate Requirements (One bullet per line)</label>
                <textarea name="requirements" rows="4" placeholder="Degree in Human Resources&#10;3+ years in recruitment agency" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500">{{ old('requirements') }}</textarea>
            </div>

            <div>
                <label class="block text-xs font-bold uppercase text-slate-300 mb-1.5">Benefits &amp; Perks (One bullet per line)</label>
                <textarea name="benefits" rows="3" placeholder="Competitive salary&#10;Health coverage" class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500">{{ old('benefits') }}</textarea>
            </div>

            <div class="flex items-center gap-3">
                <input type="checkbox" name="is_published" value="1" id="is_published" class="rounded bg-slate-950 border-slate-800 text-amber-500" checked />
                <label htmlFor="is_published" class="text-xs font-bold text-slate-300">Publish immediately to public careers page</label>
            </div>

            <div class="pt-4 flex justify-end gap-3 border-t border-slate-800">
                <a href="{{ route('admin.jobs.index') }}" class="px-5 py-2.5 rounded-xl bg-slate-800 text-xs font-bold text-slate-300">Cancel</a>
                <button type="submit" class="px-7 py-2.5 rounded-xl bg-amber-500 text-slate-950 font-bold text-xs uppercase tracking-wider">Save Job Posting</button>
            </div>
        </form>
    </div>

</div>
@endsection
