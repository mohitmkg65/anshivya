<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Dashboard') | Anshivya Group</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

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
      class="bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 font-sans antialiased min-h-screen flex transition-colors duration-300">

    <!-- ADMIN SIDEBAR -->
    <aside class="w-64 bg-white dark:bg-slate-900 border-r border-slate-200 dark:border-slate-800 flex flex-col justify-between shrink-0 transition-colors">
        <div>
            <!-- LOGO HEADER -->
            <div class="p-6 border-b border-slate-200 dark:border-slate-800 flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center font-extrabold text-slate-950">
                    A
                </div>
                <div>
                    <div class="font-extrabold text-slate-900 dark:text-white text-sm tracking-tight">ANSHIVYA ADMIN</div>
                    <div class="text-[10px] text-amber-600 dark:text-amber-400 font-mono">Control Panel v1.0</div>
                </div>
            </div>

            <!-- NAV LINKS -->
            <nav class="p-4 space-y-1.5 text-xs font-semibold">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-amber-500 text-slate-950 font-bold shadow-md' : 'text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 00-1-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Dashboard
                </a>

                <a href="{{ route('admin.enquiries.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.enquiries*') ? 'bg-amber-500 text-slate-950 font-bold shadow-md' : 'text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        Contact Enquiries
                    </div>
                    @php $newEnquiries = \App\Models\ContactEnquiry::where('status', 'new')->count(); @endphp
                    @if($newEnquiries > 0)
                        <span class="px-2 py-0.5 rounded-full text-[10px] bg-orange-600 text-white font-bold">{{ $newEnquiries }}</span>
                    @endif
                </a>

                <a href="{{ route('admin.jobs.index') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.jobs*') ? 'bg-amber-500 text-slate-950 font-bold shadow-md' : 'text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    Job Postings (CRUD)
                </a>

                <a href="{{ route('admin.applications.index') }}" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl transition-colors {{ request()->routeIs('admin.applications*') ? 'bg-amber-500 text-slate-950 font-bold shadow-md' : 'text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-800' }}">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        Candidate Applications
                    </div>
                    @php $pendingApps = \App\Models\JobApplication::where('status', 'pending')->count(); @endphp
                    @if($pendingApps > 0)
                        <span class="px-2 py-0.5 rounded-full text-[10px] bg-emerald-600 text-white font-bold">{{ $pendingApps }}</span>
                    @endif
                </a>
            </nav>
        </div>

        <!-- FOOTER LINKS -->
        <div class="p-4 border-t border-slate-200 dark:border-slate-800 space-y-2 text-xs">
            <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-2 text-slate-600 dark:text-slate-400 hover:text-slate-900 dark:hover:text-white px-3 py-1.5 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800">
                <svg class="w-4 h-4 text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                View Public Website
            </a>

            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full flex items-center gap-2 text-red-600 dark:text-red-400 hover:text-red-700 dark:hover:text-red-300 px-3 py-1.5 rounded-lg hover:bg-red-500/10 font-semibold">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                    Logout Admin
                </button>
            </form>
        </div>
    </aside>

    <!-- MAIN BODY -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- TOPBAR -->
        <header class="h-16 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 flex items-center justify-between px-8 transition-colors">
            <div class="text-sm font-bold text-slate-900 dark:text-slate-200">
                @yield('title', 'Admin Dashboard')
            </div>

            <div class="flex items-center gap-4 text-xs">
                <!-- THEME TOGGLE BUTTON FOR ADMIN -->
                <button type="button" 
                        @click="toggleTheme()" 
                        class="p-2 rounded-xl bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-amber-400 hover:scale-105 transition-all">
                    <template x-if="isDark">
                        <svg class="w-4 h-4 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    </template>
                    <template x-if="!isDark">
                        <svg class="w-4 h-4 text-slate-700" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                    </template>
                </button>

                <span class="text-slate-500 dark:text-slate-400">Logged in: <strong class="text-amber-600 dark:text-amber-400">{{ auth()->user()->email ?? 'admin@anshivya.com' }}</strong></span>
            </div>
        </header>

        <!-- FLASH NOTIFICATIONS -->
        @if(session('success'))
            <div class="bg-emerald-500/10 border-b border-emerald-500/30 text-emerald-600 dark:text-emerald-400 px-8 py-3 text-xs font-semibold flex items-center justify-between">
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-500/10 border-b border-red-500/30 text-red-600 dark:text-red-400 px-8 py-3 text-xs font-semibold flex items-center justify-between">
                <span>{{ session('error') }}</span>
            </div>
        @endif

        <!-- CONTENT -->
        <main class="flex-1 p-8 overflow-y-auto">
            @yield('content')
        </main>
    </div>

    @yield('scripts')
</body>
</html>
