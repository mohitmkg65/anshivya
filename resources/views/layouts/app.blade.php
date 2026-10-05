<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Anshivya Global HR Solution\'s | HR Solutions & Recruitment Partner')</title>
    <meta name="description" content="@yield('meta_description', 'Anshivya Global HR Solution\'s provides corporate HR solutions, recruitment, payroll management, compliance solutions, and strategic HR consulting.')">

    <link rel="icon" type="image" href="/images/favicon.png" />


    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Zero-Flicker Theme Script -->
    <script>
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>

    <!-- Alpine.js & jQuery -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body x-data="{ 
        isDark: document.documentElement.classList.contains('dark'), 
        scrolled: false, 
        mobileOpen: false, 
        servicesOpen: false,
        toggleTheme() {
            this.isDark = !this.isDark;
            if (this.isDark) {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        } 
      }" 
      @scroll.window="scrolled = (window.pageYOffset > 20)" 
      :class="mobileOpen ? 'overflow-hidden' : ''"
      class="font-sans bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 antialiased selection:bg-amber-500 selection:text-slate-950 overflow-x-hidden min-h-screen flex flex-col transition-colors duration-300">

    <!-- HEADER -->
    <header :class="(scrolled || mobileOpen) 
                ? 'bg-white/95 dark:bg-slate-950/95 backdrop-blur-md border-b border-slate-200 dark:border-slate-800/80 py-3.5 shadow-xl shadow-slate-900/5 dark:shadow-slate-950/50' 
                : 'bg-gradient-to-b from-white/90 via-white/50 to-transparent dark:from-slate-950/90 dark:to-transparent py-5'"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                
                <!-- LOGO -->
                <a href="{{ route('home') }}" class="group flex items-center gap-1 focus:outline-none focus:ring-2 focus:ring-amber-500 rounded-lg p-1">
                    {{-- <div class="relative w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 via-orange-600 to-amber-700 flex items-center justify-center shadow-lg shadow-orange-950/30 group-hover:scale-105 transition-transform duration-300">
                        <span class="font-extrabold text-white text-xl tracking-tighter">A</span>
                        <div class="absolute inset-0 rounded-xl border border-white/20"></div>
                    </div> --}}
                    <div class="w-16 h-16 rounded-xl bg-trasparent flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                       <img src="/images/favicon.png" alt="Logo">
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-extrabold text-slate-900 dark:text-white tracking-tight flex items-center gap-1.5">ANSHIVYA </span>
                        <span class="text-[10px] uppercase font-black tracking-widest text-amber-600 dark:text-slate-400"> Global HR Solution</span>
                    </div>
                </a>

                <!-- DESKTOP NAV -->
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('home') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('home') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Home</a>
                    <a href="{{ route('about') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('about') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">About</a>
                    <a href="{{ route('services') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->is('services*') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Services</a>
                    <a href="{{ route('industries') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('industries') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Our Reach</a>
                    {{-- <a href="{{ route('jobs') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('jobs') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Job Openings</a> --}}
                    <a href="{{ route('contact') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('contact') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Contact Us</a>
                </nav>

                <!-- DESKTOP RIGHT ACTIONS: THEME TOGGLE & CTA -->
                <div class="hidden lg:flex items-center gap-3">
                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 text-white shadow-lg shadow-orange-950/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Talk to an HR Expert
                    </a>
                </div>

                <!-- MOBILE ACTIONS -->
                <div class="flex lg:hidden items-center gap-2">
                    <button type="button" @click="mobileOpen = !mobileOpen" class="p-2 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 focus:outline-none focus:ring-2 focus:ring-amber-500" aria-label="Toggle Navigation">
                        <svg x-show="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                        <svg x-show="mobileOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- MOBILE SLIDE OUT OVERLAY (SIBLING TO HEADER) -->
    <div x-show="mobileOpen" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         x-cloak
         class="lg:hidden fixed inset-0 z-40 bg-white/98 dark:bg-slate-950/98 backdrop-blur-2xl pt-24 pb-8 px-6 flex flex-col justify-between overflow-y-auto border-t border-slate-200 dark:border-slate-800">
        <nav class="flex flex-col gap-2 pt-2">
            <a href="{{ route('home') }}" @click="mobileOpen = false" class="text-lg font-semibold py-3 px-4 rounded-xl transition-colors {{ request()->routeIs('home') ? 'bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold' : 'text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-900' }}">Home</a>
            <a href="{{ route('about') }}" @click="mobileOpen = false" class="text-lg font-semibold py-3 px-4 rounded-xl transition-colors {{ request()->routeIs('about') ? 'bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold' : 'text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-900' }}">About Us</a>
            <a href="{{ route('services') }}" @click="mobileOpen = false" class="text-lg font-semibold py-3 px-4 rounded-xl transition-colors {{ request()->is('services*') ? 'bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold' : 'text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-900' }}">Services</a>
            <a href="{{ route('industries') }}" @click="mobileOpen = false" class="text-lg font-semibold py-3 px-4 rounded-xl transition-colors {{ request()->routeIs('industries') ? 'bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold' : 'text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-900' }}">Our Reach</a>
            <a href="{{ route('contact') }}" @click="mobileOpen = false" class="text-lg font-semibold py-3 px-4 rounded-xl transition-colors {{ request()->routeIs('contact') ? 'bg-amber-500/10 text-amber-600 dark:text-amber-400 font-bold' : 'text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-900' }}">Contact Us</a>
        </nav>

        <div class="pt-6 border-t border-slate-200 dark:border-slate-800 space-y-4">
            <a href="{{ route('contact') }}" @click="mobileOpen = false" class="flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 text-white shadow-lg shadow-orange-950/20 active:scale-[0.98] transition-all w-full">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                Talk to an HR Expert
            </a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <main class="flex-1">
        @yield('content')
    </main>

    <!-- FLOATING WHATSAPP BUTTON -->
    <div class="fixed bottom-6 right-6 z-40">
        @php
            $waMobile = preg_replace('/[^0-9]/', '', $siteInfo->mobile_1 ?? '918112825288');
        @endphp
        <a href="https://wa.me/{{ $waMobile }}?text=Hello%20Anshivya%20Group,%20I%20would%20like%20to%20discuss%20our%20HR/Recruitment%20needs." 
           target="_blank" 
           rel="noopener noreferrer" 
           class="w-13 h-13 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 flex items-center justify-center shadow-2xl shadow-emerald-950/40 transition-all hover:scale-110 active:scale-95">
           <svg class="w-8 h-8 fill-white" fill="#ffffff" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z"></path><path d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z"></path></g></svg>
           {{-- <img src="/images/whatsapp.svg" alt="WhatsApp" class="w-8 h-8" />  --}}
        </a>
    </div>

    <!-- FOOTER -->
    <footer class="bg-white dark:bg-slate-950 text-slate-700 dark:text-slate-300 border-t border-slate-200 dark:border-slate-900 pt-16 pb-12 relative overflow-hidden transition-colors">
        <!-- PRE-FOOTER BANNER -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="relative rounded-3xl bg-gradient-to-r from-slate-900 via-slate-900/95 to-amber-950/90 p-8 sm:p-12 border border-slate-800 shadow-2xl overflow-hidden text-slate-100">
                <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                    <div class="max-w-2xl space-y-3">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold uppercase tracking-wider">
                            Ready To Scale Your Team?
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Have a hiring or HR requirement?</h3>
                        <p class="text-slate-300 text-sm">Let's discuss how Anshivya Global HR Solution can support your business with customized recruitment, payroll, and compliance execution.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl text-sm font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 text-white shadow-xl shadow-orange-950/40">
                        Start a Conversation
                    </a>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-200 dark:border-slate-900">
                <div class="lg:col-span-2 space-y-4">
                    <a href="{{ route('home') }}" class="group flex items-center gap-1 focus:outline-none focus:ring-2 focus:ring-amber-500 rounded-lg p-1">
                        {{-- <div class="relative w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 via-orange-600 to-amber-700 flex items-center justify-center shadow-lg shadow-orange-950/30 group-hover:scale-105 transition-transform duration-300">
                            <span class="font-extrabold text-white text-xl tracking-tighter">A</span>
                            <div class="absolute inset-0 rounded-xl border border-white/20"></div>
                        </div> --}}
                        <div class="relative w-16 h-16 rounded-xl bg-transparent flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                            <img src="/images/favicon.png" alt="Logo">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-extrabold text-slate-900 dark:text-white tracking-tight flex items-center gap-1.5">ANSHIVYA</span>
                            <span class="text-[10px] uppercase font-black tracking-widest text-amber-600 dark:text-slate-400"> Global HR Solution</span>
                        </div>
                    </a>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">Empowering People. Accelerating Business. Building Futures.</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Partner with Anshivya Global HR Solution to access a global network of professionals who drive results.</p>
                    <div class="pt-2">
                        <a href="{{ $siteInfo->linkedin_url ?? 'https://www.linkedin.com/company/anshivya.com/' }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-[#0A66C2]/10 hover:bg-[#0A66C2] text-xs font-bold transition-all shadow-sm group bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 text-white">
                            <svg class="w-4 h-4 fill-current transition-colors" viewBox="0 0 24 24">
                                <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.75a1.48 1.48 0 1 0 0 2.96 1.48 1.48 0 0 0 0-2.96z"/>
                            </svg>
                            <span>Follow Us on LinkedIn</span>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Company</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Services</a></li>
                        <li><a href="{{ route('industries') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Our Reach</a></li>
                        {{-- <li><a href="{{ route('jobs') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Job Openings</a></li> --}}
                        <li><a href="{{ route('contact') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Contact Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Services</h4>
                    <ul class="space-y-2 text-xs">
                        <li><a href="{{ route('services.hr-consulting') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">HR Consulting</a></li>
                        <li><a href="{{ route('services.recruitment') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Recruitment &amp; Talent Acquisition</a></li>
                        <li><a href="{{ route('services.payroll') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Payroll Management &amp; Compliance</a></li>
                        <li><a href="{{ route('services.hrms-technology') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">HRMS &amp; HR Technology Solutions</a></li>
                        <li><a href="{{ route('services.performance-management') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Performance Management (PMS)</a></li>
                        <li><a href="{{ route('services.background-verification') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Background Verification (BGV)</a></li>
                        <li><a href="{{ route('services.staffing-solutions') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Manpower &amp; Staffing Solutions</a></li>
                        <li><a href="{{ route('services.employee-relations') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Employee Relation</a></li>
                        <li><a href="{{ route('services.hr-policies') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">HR Policies &amp; SOPs</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Contact Us</h4>
                    <ul class="space-y-3 text-xs text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
                            {{-- <span class="font-bold text-slate-800 dark:text-slate-200">Phone:</span> --}}
                            <span>
                                <a href="tel:{{ str_replace(' ', '', $siteInfo->mobile_1 ?? '+918112825288') }}" class="hover:text-amber-500 transition-colors">
                                    {{ $siteInfo->mobile_1 ?? '+91 81128 25288' }}
                                </a>
                                @if(!empty($siteInfo->mobile_2))
                                    <span class="text-slate-400">|</span>
                                    <a href="tel:{{ str_replace(' ', '', $siteInfo->mobile_2) }}" class="hover:text-amber-500 transition-colors">
                                        {{ $siteInfo->mobile_2 }}
                                    </a>
                                @endif
                            </span>
                        </li>
                        <li class="flex items-start gap-2">
                            {{-- <span class="font-bold text-slate-800 dark:text-slate-200">Email:</span> --}}
                            <span>
                                <a href="mailto:{{ $siteInfo->email_1 ?? 'info@anshivya.com' }}" class="hover:text-amber-500 transition-colors">
                                    {{ $siteInfo->email_1 ?? 'info@anshivya.com' }}
                                </a>
                                @if(!empty($siteInfo->email_2))
                                    <span class="text-slate-400">|</span>
                                    <a href="mailto:{{ $siteInfo->email_2 }}" class="hover:text-amber-500 transition-colors">
                                        {{ $siteInfo->email_2 }}
                                    </a>
                                @endif
                            </span>
                        </li>
                        <li class="flex items-start gap-2">
                            {{-- <span class="font-bold text-slate-800 dark:text-slate-200 shrink-0">Location:</span> --}}
                            <span class="leading-relaxed">
                                {{ $siteInfo->full_address ?? 'Ahmedabad, Gujarat, India' }}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 dark:text-slate-400">
                <div>&copy; {{ date('Y') }} Anshivya Global HR Solution. All rights reserved.</div>
                <div class="flex items-center gap-6">
                    <a href="{{ route('privacy') }}" class="hover:text-slate-900 dark:hover:text-slate-300">Privacy Policy</a>
                    <a href="{{ route('terms') }}" class="hover:text-slate-900 dark:hover:text-slate-300">Terms &amp; Conditions</a>
                    {{-- <a href="{{ route('admin.login') }}" class="text-amber-600 dark:text-amber-400 hover:underline">Admin Login</a> --}}
                </div>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
