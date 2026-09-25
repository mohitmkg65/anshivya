<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Anshivya Group | HR Solutions & Recruitment Partner')</title>
    <meta name="description" content="@yield('meta_description', 'Anshivya Group provides corporate HR solutions, recruitment, payroll management, compliance solutions, and strategic HR consulting.')">

    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />

    <!-- Google Fonts: Plus Jakarta Sans & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300..800;1,300..800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Zero-Flicker Theme Script -->
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
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
      class="font-sans bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 antialiased selection:bg-amber-500 selection:text-slate-950 overflow-x-hidden min-h-screen flex flex-col transition-colors duration-300">

    <!-- HEADER -->
    <header :class="scrolled 
                ? 'bg-white/90 dark:bg-slate-950/90 backdrop-blur-md border-b border-slate-200 dark:border-slate-800/80 py-3.5 shadow-xl shadow-slate-900/5 dark:shadow-slate-950/50' 
                : 'bg-gradient-to-b from-white/90 via-white/50 to-transparent dark:from-slate-950/90 dark:to-transparent py-5'"
            class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                
                <!-- LOGO -->
                <a href="{{ route('home') }}" class="group flex items-center gap-3 focus:outline-none focus:ring-2 focus:ring-amber-500 rounded-lg p-1">
                    <div class="relative w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 via-orange-600 to-amber-700 flex items-center justify-center shadow-lg shadow-orange-950/30 group-hover:scale-105 transition-transform duration-300">
                        <span class="font-extrabold text-white text-xl tracking-tighter">A</span>
                        <div class="absolute inset-0 rounded-xl border border-white/20"></div>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl font-extrabold text-slate-900 dark:text-white tracking-tight flex items-center gap-1.5">
                            ANSHIVYA <span class="text-xs font-semibold px-2 py-0.5 rounded bg-amber-500/10 text-amber-600 dark:text-amber-400 border border-amber-500/20">GROUP</span>
                        </span>
                        <span class="text-[10px] uppercase font-semibold tracking-widest text-slate-500 dark:text-slate-400">HR Solutions & Talent</span>
                    </div>
                </a>

                <!-- DESKTOP NAV -->
                <nav class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('home') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('home') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Home</a>
                    <a href="{{ route('about') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('about') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">About</a>

                    <!-- SERVICES DROPDOWN -->
                    <div class="relative" @mouseenter="servicesOpen = true" @mouseleave="servicesOpen = false">
                        <button type="button" @click="servicesOpen = !servicesOpen" class="px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 flex items-center gap-1.5 {{ request()->is('services*') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">
                            Services
                            <svg class="w-4 h-4 transition-transform duration-200" :class="servicesOpen ? 'rotate-180 text-amber-500' : 'text-slate-400'" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>

                        <div x-show="servicesOpen" x-transition.origin.top class="absolute top-full left-0 w-80 pt-2">
                            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-2.5 shadow-2xl shadow-slate-950/20 backdrop-blur-xl">
                                <div class="text-[11px] font-bold tracking-widest uppercase text-slate-400 dark:text-slate-400 px-3 py-1.5 border-b border-slate-100 dark:border-slate-800/60 mb-1">
                                    Core Capabilities
                                </div>
                                <a href="{{ route('services.recruitment') }}" class="group flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/80 transition-colors">
                                    <div class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-amber-600 dark:text-amber-400 group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-300">Recruitment Services</div>
                                        <div class="text-[11px] text-slate-500 dark:text-slate-400">Talent acquisition & executive sourcing</div>
                                    </div>
                                </a>
                                <a href="{{ route('services.payroll') }}" class="group flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/80 transition-colors">
                                    <div class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-amber-600 dark:text-amber-400 group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-300">Payroll Management</div>
                                        <div class="text-[11px] text-slate-500 dark:text-slate-400">Organized monthly payroll & reporting</div>
                                    </div>
                                </a>
                                <a href="{{ route('services.compliance') }}" class="group flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/80 transition-colors">
                                    <div class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-amber-600 dark:text-amber-400 group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-300">Compliance Solutions</div>
                                        <div class="text-[11px] text-slate-500 dark:text-slate-400">HR compliance & policy formulation</div>
                                    </div>
                                </a>
                                <a href="{{ route('services.hr-consulting') }}" class="group flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/80 transition-colors">
                                    <div class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-amber-600 dark:text-amber-400 group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-300">HR Consulting</div>
                                        <div class="text-[11px] text-slate-500 dark:text-slate-400">Strategic advisory & people strategies</div>
                                    </div>
                                </a>
                                <a href="{{ route('services.employee-relations') }}" class="group flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-100 dark:hover:bg-slate-800/80 transition-colors">
                                    <div class="p-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-amber-600 dark:text-amber-400 group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    </div>
                                    <div>
                                        <div class="text-xs font-semibold text-slate-900 dark:text-white group-hover:text-amber-600 dark:group-hover:text-amber-300">Employee Relations</div>
                                        <div class="text-[11px] text-slate-500 dark:text-slate-400">Grievance redressal & engagement</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('industries') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('industries') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Industries</a>
                    {{-- <a href="{{ route('jobs') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('jobs') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Job Openings</a> --}}
                    <a href="{{ route('contact') }}" class="px-3.5 py-2 rounded-lg text-sm font-medium {{ request()->routeIs('contact') ? 'text-amber-600 dark:text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-700 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white hover:bg-slate-100 dark:hover:bg-slate-900/60' }}">Contact Us</a>
                </nav>

                <!-- DESKTOP RIGHT ACTIONS: THEME TOGGLE & CTA -->
                <div class="hidden lg:flex items-center gap-3">
                    
                    <!-- THEME TOGGLE BUTTON -->
                    {{-- <button type="button" 
                            @click="toggleTheme()" 
                            class="p-2.5 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-amber-400 hover:scale-105 active:scale-95 transition-all focus:outline-none focus:ring-2 focus:ring-amber-500"
                            :title="isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode'"
                            :aria-label="isDark ? 'Switch to Light Mode' : 'Switch to Dark Mode'">
                        <!-- SUN ICON (Appears when Dark Mode is Active -> Switch to Light) -->
                        <template x-if="isDark">
                            <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </template>
                        <!-- MOON ICON (Appears when Light Mode is Active -> Switch to Dark) -->
                        <template x-if="!isDark">
                            <svg class="w-4 h-4 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                        </template>
                    </button> --}}

                    <a href="{{ route('contact') }}" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 text-white shadow-lg shadow-orange-950/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        Talk to an HR Expert
                    </a>
                </div>

                <!-- MOBILE ACTIONS -->
                <div class="flex lg:hidden items-center gap-2">
                    <button type="button" @click="toggleTheme()" class="p-2 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-amber-400">
                        <template x-if="isDark">
                            <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                        </template>
                        <template x-if="!isDark">
                            <svg class="w-5 h-5 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                        </template>
                    </button>

                    <button type="button" @click="mobileOpen = !mobileOpen" class="p-2 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE SLIDE OUT -->
        <div x-show="mobileOpen" x-transition class="lg:hidden fixed inset-0 top-[65px] bg-white/98 dark:bg-slate-950/98 backdrop-blur-2xl z-40 p-6 flex flex-col justify-between overflow-y-auto border-t border-slate-200 dark:border-slate-800">
            <nav class="flex flex-col gap-3">
                <a href="{{ route('home') }}" class="text-lg font-semibold py-2 text-slate-900 dark:text-white">Home</a>
                <a href="{{ route('about') }}" class="text-lg font-semibold py-2 text-slate-900 dark:text-white">About Us</a>
                <a href="{{ route('services.recruitment') }}" class="text-sm py-1.5 text-slate-600 dark:text-slate-300 pl-4">Recruitment Services</a>
                <a href="{{ route('services.payroll') }}" class="text-sm py-1.5 text-slate-600 dark:text-slate-300 pl-4">Payroll Management</a>
                <a href="{{ route('services.compliance') }}" class="text-sm py-1.5 text-slate-600 dark:text-slate-300 pl-4">Compliance Solutions</a>
                <a href="{{ route('services.hr-consulting') }}" class="text-sm py-1.5 text-slate-600 dark:text-slate-300 pl-4">HR Consulting</a>
                <a href="{{ route('services.employee-relations') }}" class="text-sm py-1.5 text-slate-600 dark:text-slate-300 pl-4">Employee Relations</a>
                <a href="{{ route('industries') }}" class="text-lg font-semibold py-2 text-slate-900 dark:text-white">Industries</a>
                {{-- <a href="{{ route('jobs') }}" class="text-lg font-semibold py-2 text-slate-900 dark:text-white">Job Openings</a> --}}
                <a href="{{ route('contact') }}" class="text-lg font-semibold py-2 text-slate-900 dark:text-white">Contact Us</a>
            </nav>

            <div class="pt-6 border-t border-slate-200 dark:border-slate-800 space-y-4">
                <button type="button" @click="toggleTheme()" class="w-full py-3 px-4 rounded-xl bg-slate-100 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-xs font-bold text-slate-800 dark:text-slate-200 flex items-center justify-center gap-2">
                    <span x-text="isDark ? 'Switch to Light Mode ☀️' : 'Switch to Dark Mode 🌙'"></span>
                </button>
                <a href="{{ route('contact') }}" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold text-center block text-sm tracking-wide uppercase">
                    Talk to an HR Expert
                </a>
            </div>
        </div>
    </header>

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
                        <p class="text-slate-300 text-sm">Let's discuss how Anshivya can support your business with customized recruitment, payroll, and compliance execution.</p>
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
                    <a href="{{ route('home') }}" class="inline-flex items-center gap-3">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center text-white font-extrabold text-lg">A</div>
                        <span class="text-xl font-extrabold text-slate-900 dark:text-white tracking-tight">ANSHIVYA <span class="text-xs text-amber-600 dark:text-amber-400 font-semibold px-2 py-0.5 rounded bg-amber-500/10 border border-amber-500/20">GROUP</span></span>
                    </a>
                    <p class="text-slate-600 dark:text-slate-400 text-sm">Empowering People. Accelerating Business. Building Futures.</p>
                    <p class="text-slate-500 dark:text-slate-400 text-xs">Partner with Anshivya Group to access a global network of professionals who drive results.</p>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Company</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">About Us</a></li>
                        <li><a href="{{ route('industries') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Industries</a></li>
                        {{-- <li><a href="{{ route('jobs') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Job Openings</a></li> --}}
                        <li><a href="{{ route('contact') }}" class="text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white">Contact Us</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Services</h4>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('services.recruitment') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Recruitment Services</a></li>
                        <li><a href="{{ route('services.payroll') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Payroll Management</a></li>
                        <li><a href="{{ route('services.compliance') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Compliance Solutions</a></li>
                        <li><a href="{{ route('services.hr-consulting') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">HR Consulting</a></li>
                        <li><a href="{{ route('services.employee-relations') }}" class="text-slate-600 dark:text-slate-400 hover:text-amber-500">Employee Relations</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Contact Us</h4>
                    <ul class="space-y-3 text-xs text-slate-600 dark:text-slate-400">
                        <li class="flex items-start gap-2">
                            <span class="font-bold text-slate-800 dark:text-slate-200">Phone:</span>
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
                            <span class="font-bold text-slate-800 dark:text-slate-200">Email:</span>
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
                            <span class="font-bold text-slate-800 dark:text-slate-200 shrink-0">Location:</span>
                            <span class="leading-relaxed">
                                {{ $siteInfo->full_address ?? 'Ahmedabad, Gujarat, India' }}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 dark:text-slate-400">
                <div>&copy; {{ date('Y') }} Anshivya Group. All rights reserved.</div>
                <div class="flex items-center gap-6">
                    <a href="{{ route('privacy') }}" class="hover:text-slate-900 dark:hover:text-slate-300">Privacy Policy</a>
                    <a href="{{ route('terms') }}" class="hover:text-slate-900 dark:hover:text-slate-300">Terms &amp; Conditions</a>
                    <a href="{{ route('admin.login') }}" class="text-amber-600 dark:text-amber-400 hover:underline">Admin Login</a>
                </div>
            </div>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
