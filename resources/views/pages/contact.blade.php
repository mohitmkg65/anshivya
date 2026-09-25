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

                        <button type="submit" class="w-full py-4 rounded-xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 text-white shadow-xl hover:scale-[1.01] transition-all">
                            Submit Enquiry
                        </button>
                    </form>
                </div>

                <!-- DETAILS & MAP CARD -->
                <div class="lg:col-span-5 space-y-6">
                    <div class="p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6 transition-colors">
                        <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-4">
                            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Direct Contact Info</h3>
                            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-400 text-xs font-bold">
                                <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span> Head Office
                            </span>
                        </div>

                        <div class="space-y-5 text-sm">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-1">Phone / Mobile</div>
                                    <div class="text-slate-900 dark:text-white font-semibold">
                                        <a href="tel:{{ str_replace(' ', '', $siteInfo->mobile_1 ?? '+918112825288') }}" class="hover:text-amber-500 transition-colors">
                                            {{ $siteInfo->mobile_1 ?? '+91 81128 25288' }}
                                        </a>
                                        @if(!empty($siteInfo->mobile_2))
                                            <span class="mx-1 text-slate-400">|</span>
                                            <a href="tel:{{ str_replace(' ', '', $siteInfo->mobile_2) }}" class="hover:text-amber-500 transition-colors">
                                                {{ $siteInfo->mobile_2 }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-1">Email Address</div>
                                    <div class="text-slate-900 dark:text-white font-semibold">
                                        <a href="mailto:{{ $siteInfo->email_1 ?? 'info@anshivya.com' }}" class="hover:text-amber-500 transition-colors">
                                            {{ $siteInfo->email_1 ?? 'info@anshivya.com' }}
                                        </a>
                                        @if(!empty($siteInfo->email_2))
                                            <span class="mx-1 text-slate-400">|</span>
                                            <a href="mailto:{{ $siteInfo->email_2 }}" class="hover:text-amber-500 transition-colors">
                                                {{ $siteInfo->email_2 }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase tracking-wider mb-1">Office Location</div>
                                    <div class="text-slate-900 dark:text-white font-medium leading-relaxed">
                                        {{ $siteInfo->full_address ?? 'Anshivya Group Corporate Headquarters, Ahmedabad, Gujarat, India' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- GOOGLE MAP EMBED CARD -->
                    <div class="p-4 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl overflow-hidden transition-colors">
                        <div class="flex items-center justify-between px-3 pb-3">
                            <h4 class="text-xs font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider flex items-center gap-2">
                                <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                                Find Us On Google Maps
                            </h4>
                        </div>
                        <div class="w-full h-64 rounded-2xl overflow-hidden border border-slate-200 dark:border-slate-800 bg-slate-100 dark:bg-slate-950">
                            @php
                                $mapUrl = $siteInfo->map_url ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.970188722248!2d72.50742137591632!3d23.024886916248384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84f5217b1897%3A0x7d0a204689b02a82!2sTitanium%20Heights%2C%20Corporate%20Rd%2C%20Prahlad%20Nagar%2C%20Ahmedabad%2C%20Gujarat%20380015!5e0!3m2!1sen!2sin!4v1710000000000!5m2!1sen!2sin';
                            @endphp
                            <iframe src="{{ $mapUrl }}" 
                                    class="w-full h-full border-0" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
