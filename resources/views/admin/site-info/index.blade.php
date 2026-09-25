@extends('layouts.admin')

@section('title', 'Site Contact Info & Map Settings')

@section('content')
<div class="max-w-5xl mx-auto space-y-8">
    <!-- PAGE HEADER -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="text-2xl font-black text-slate-900 dark:text-white tracking-tight">Site Info &amp; Map Settings</h1>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Manage public contact phone numbers, emails, physical address, and Google Map embed URL.</p>
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- FORM CARD -->
        <div class="lg:col-span-7 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6 sm:p-8 shadow-sm transition-colors">
            <form action="{{ route('admin.site-info.update') }}" method="POST" class="space-y-6">
                @csrf

                <!-- PHONE NUMBERS -->
                <div class="space-y-4">
                    <h2 class="text-xs font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400 border-b border-slate-200 dark:border-slate-800 pb-2">
                        Phone &amp; Mobile Contacts
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider mb-2">
                                Mobile 1 <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   name="mobile_1" 
                                   value="{{ old('mobile_1', $siteInfo->mobile_1) }}" 
                                   placeholder="+91 81128 25288"
                                   class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500 transition-colors"
                                   required />
                            @error('mobile_1')
                                <span class="text-red-500 dark:text-red-400 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider mb-2">
                                Mobile 2 <span class="text-slate-400 font-normal text-[11px]">(Optional)</span>
                            </label>
                            <input type="text" 
                                   name="mobile_2" 
                                   value="{{ old('mobile_2', $siteInfo->mobile_2) }}" 
                                   placeholder="+91 63071 80489"
                                   class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500 transition-colors" />
                            @error('mobile_2')
                                <span class="text-red-500 dark:text-red-400 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- EMAIL ADDRESSES -->
                <div class="space-y-4">
                    <h2 class="text-xs font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400 border-b border-slate-200 dark:border-slate-800 pb-2">
                        Email Addresses
                    </h2>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider mb-2">
                                Email 1 <span class="text-red-500">*</span>
                            </label>
                            <input type="email" 
                                   name="email_1" 
                                   value="{{ old('email_1', $siteInfo->email_1) }}" 
                                   placeholder="info@anshivya.com"
                                   class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500 transition-colors"
                                   required />
                            @error('email_1')
                                <span class="text-red-500 dark:text-red-400 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider mb-2">
                                Email 2 <span class="text-slate-400 font-normal text-[11px]">(Optional)</span>
                            </label>
                            <input type="email" 
                                   name="email_2" 
                                   value="{{ old('email_2', $siteInfo->email_2) }}" 
                                   placeholder="hr@anshivya.com"
                                   class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500 transition-colors" />
                            @error('email_2')
                                <span class="text-red-500 dark:text-red-400 text-xs mt-1 block">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <!-- ADDRESS & MAP URL -->
                <div class="space-y-4">
                    <h2 class="text-xs font-bold uppercase tracking-wider text-amber-600 dark:text-amber-400 border-b border-slate-200 dark:border-slate-800 pb-2">
                        Office Location &amp; Google Map URL
                    </h2>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider mb-2">
                            Full Address <span class="text-red-500">*</span>
                        </label>
                        <textarea name="full_address" 
                                  rows="3" 
                                  placeholder="Anshivya Group Corporate Office, Ahmedabad..."
                                  class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm focus:outline-none focus:border-amber-500 transition-colors"
                                  required>{{ old('full_address', $siteInfo->full_address) }}</textarea>
                        @error('full_address')
                            <span class="text-red-500 dark:text-red-400 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-xs font-bold text-slate-700 dark:text-slate-300 uppercase tracking-wider mb-2">
                            Google Map Embed URL <span class="text-red-500">*</span>
                        </label>
                        <textarea name="map_url" 
                                  rows="3" 
                                  placeholder="https://www.google.com/maps/embed?pb=... or full <iframe> code"
                                  class="w-full px-4 py-2.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-300 dark:border-slate-800 text-slate-900 dark:text-white text-sm font-mono text-xs focus:outline-none focus:border-amber-500 transition-colors"
                                  required>{{ old('map_url', $siteInfo->map_url) }}</textarea>
                        <p class="text-[11px] text-slate-500 dark:text-slate-400 mt-1">
                            You can paste either the Google Maps embed URL (starts with <code class="text-amber-600 dark:text-amber-400">https://www.google.com/maps/embed...</code>) or the full Google Maps <code class="text-amber-600 dark:text-amber-400">&lt;iframe&gt;</code> HTML code.
                        </p>
                        @error('map_url')
                            <span class="text-red-500 dark:text-red-400 text-xs mt-1 block">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="pt-4 flex items-center gap-4">
                    <button type="submit" 
                            class="px-6 py-3 rounded-xl bg-amber-500 hover:bg-amber-400 text-white font-bold text-xs uppercase tracking-wider shadow-lg hover:scale-105 transition-all">
                        Save &amp; Update Site Info
                    </button>
                </div>
            </form>
        </div>

        <!-- LIVE PREVIEW CARD -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-6 shadow-sm space-y-6 transition-colors">
                <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-3">
                    <h3 class="text-sm font-bold text-slate-900 dark:text-white uppercase tracking-wider flex items-center gap-2">
                        <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        Live Info Card Preview
                    </h3>
                    <span class="px-2 py-0.5 rounded-full text-[10px] font-bold bg-amber-500/10 text-amber-600 dark:text-amber-400">Public Contact View</span>
                </div>

                <div class="space-y-4 text-xs">
                    <div class="p-3.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 space-y-1">
                        <div class="font-bold text-slate-500 dark:text-slate-400 uppercase text-[10px] tracking-wider">Phone / Mobile</div>
                        <div class="text-slate-900 dark:text-white font-medium">
                            {{ $siteInfo->mobile_1 ?? '+91 81128 25288' }}
                            @if($siteInfo->mobile_2)
                                <span class="text-slate-400 dark:text-slate-500">|</span> {{ $siteInfo->mobile_2 }}
                            @endif
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 space-y-1">
                        <div class="font-bold text-slate-500 dark:text-slate-400 uppercase text-[10px] tracking-wider">Emails</div>
                        <div class="text-slate-900 dark:text-white font-medium">
                            {{ $siteInfo->email_1 ?? 'info@anshivya.com' }}
                            @if($siteInfo->email_2)
                                <span class="text-slate-400 dark:text-slate-500">|</span> {{ $siteInfo->email_2 }}
                            @endif
                        </div>
                    </div>

                    <div class="p-3.5 rounded-xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 space-y-1">
                        <div class="font-bold text-slate-500 dark:text-slate-400 uppercase text-[10px] tracking-wider">Full Address</div>
                        <div class="text-slate-900 dark:text-white font-medium leading-relaxed">
                            {{ $siteInfo->full_address ?? 'Ahmedabad, Gujarat, India' }}
                        </div>
                    </div>
                </div>

                <!-- MAP PREVIEW -->
                <div class="space-y-2">
                    <div class="text-xs font-bold text-slate-500 dark:text-slate-400 uppercase text-[10px] tracking-wider">Embedded Map Preview</div>
                    <div class="h-48 w-full rounded-xl overflow-hidden border border-slate-200 dark:border-slate-800 bg-slate-100 dark:bg-slate-950">
                        @if($siteInfo->map_url)
                            <iframe src="{{ $siteInfo->map_url }}" 
                                    class="w-full h-full border-0" 
                                    allowfullscreen="" 
                                    loading="lazy" 
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        @else
                            <div class="w-full h-full flex items-center justify-center text-slate-400 text-xs">
                                Map URL not configured yet.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
