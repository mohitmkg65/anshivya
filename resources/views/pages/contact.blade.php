@extends('layouts.app')

@section('title', 'Contact Us — HR & Hiring Consultation | Anshivya Group')

@section('content')
    <section class="pt-36 pb-16 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                GET IN TOUCH
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">Let's Talk About Your Hiring &amp; HR Needs.</h1>
            <p class="text-slate-600 dark:text-slate-300 text-base max-w-2xl">Tell us about your hiring requirements or operational goals. Our team is ready to discuss how Anshivya Group can partner with your business.</p>
        </div>
    </section>

    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- FORM -->
                <div class="lg:col-span-7 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 shadow-2xl">
                    @if(session('success'))
                        <div class="p-4 mb-6 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 text-xs font-bold">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('api.contact') }}" method="POST" class="space-y-6">
                        @csrf
                        <input type="text" name="website_hp" class="hidden" tabindex="-1" autocomplete="off" />

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-2">Full Name *</label>
                                <input type="text" name="full_name" value="{{ old('full_name') }}" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500" required />
                                @error('full_name') <span class="text-red-500 dark:text-red-400 text-[11px] mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-2">Company Name *</label>
                                <input type="text" name="company_name" value="{{ old('company_name') }}" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500" required />
                                @error('company_name') <span class="text-red-500 dark:text-red-400 text-[11px] mt-1">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-2">Work Email *</label>
                                <input type="email" name="work_email" value="{{ old('work_email') }}" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500" required />
                                @error('work_email') <span class="text-red-500 dark:text-red-400 text-[11px] mt-1">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-2">Phone Number *</label>
                                <input type="tel" name="phone_number" value="{{ old('phone_number') }}" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500" required />
                                @error('phone_number') <span class="text-red-500 dark:text-red-400 text-[11px] mt-1">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-2">Service Required</label>
                                <select name="service_required" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500">
                                    <option value="Recruitment">Recruitment &amp; Talent Acquisition</option>
                                    <option value="Payroll Management">Payroll Management</option>
                                    <option value="Compliance Solutions">Compliance Solutions</option>
                                    <option value="HR Consulting">Strategic HR Consulting</option>
                                    <option value="Employee Relations">Employee Relations &amp; Engagement</option>
                                    <option value="Other">Other Operational Needs</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-2">Number of Positions / Staff</label>
                                <input type="text" name="employee_count" value="{{ old('employee_count') }}" placeholder="e.g. 1-10 hires or 50+ staff" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500" />
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold uppercase text-slate-700 dark:text-slate-300 mb-2">Message &amp; Requirement Details *</label>
                            <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500" required>{{ old('message') }}</textarea>
                            @error('message') <span class="text-red-500 dark:text-red-400 text-[11px] mt-1">{{ $message }}</span> @enderror
                        </div>

                        <button type="submit" class="w-full py-4 rounded-xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 text-slate-950 shadow-xl hover:scale-[1.01] transition-all">
                            Submit Enquiry
                        </button>
                    </form>
                </div>

                <!-- DETAILS -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white border-b border-slate-200 dark:border-slate-800 pb-4">Direct Contact Info</h3>
                        <div class="space-y-4 text-xs">
                            <div>
                                <div class="font-bold text-slate-500 dark:text-slate-400 uppercase">Email</div>
                                <div class="text-slate-900 dark:text-white font-medium">info@anshivya.com | hr@anshivya.com</div>
                            </div>
                            <div>
                                <div class="font-bold text-slate-500 dark:text-slate-400 uppercase">Phone</div>
                                <div class="text-slate-900 dark:text-white font-medium">+91 81128 25288 | +91 63071 80489</div>
                            </div>
                            <div>
                                <div class="font-bold text-slate-500 dark:text-slate-400 uppercase">Location</div>
                                <div class="text-slate-900 dark:text-white font-medium">Ahmedabad, Gujarat, India</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
