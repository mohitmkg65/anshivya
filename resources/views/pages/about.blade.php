@extends('layouts.app')

@section('title', 'About Us & Executive Leadership | Anshivya Global HR Solution\'s')

@section('content')

    <!-- ABOUT HERO SECTION -->
    <section class="relative pt-36 pb-20 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-900 overflow-hidden transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-4">
            <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                ABOUT ANSHIVYA GLOBAL HR Solution
            </div>
            <h1 class="text-4xl sm:text-5xl font-black text-slate-900 dark:text-white">
                Building Futures, <span class="accent-text-gradient">Beyond Boundaries.</span>
            </h1>
            <p class="text-slate-600 dark:text-slate-300 text-lg max-w-2xl leading-relaxed">
                Partner with Anshivya Global HR Solution to access a global network of professionals who drive results.
            </p>
        </div>
    </section>

    <!-- WHO WE ARE SECTION -->
    <section class="py-24 bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
            <div class="max-w-3xl space-y-3">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest">
                    Who We Are
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white leading-tight">
                    The Story Behind Our Passion For Smarter Hiring Solutions.
                </h2>
                <p class="text-xl font-bold accent-text-gradient pt-1">
                    Building Futures, Beyond Boundaries
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-8 rounded-3xl glass-card border border-slate-200/80 dark:border-slate-800/80 space-y-4 hover:border-amber-500/30 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-bold text-lg">
                        01
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 leading-relaxed">
                        At Anshivya Global HR Solutions, we believe meaningful growth begins with the right people, the right processes, and a clear vision for the future.
                    </p>
                </div>

                <div class="p-8 rounded-3xl glass-card border border-slate-200/80 dark:border-slate-800/80 space-y-4 hover:border-amber-500/30 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-bold text-lg">
                        02
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 leading-relaxed">
                        Headquartered in Ahmedabad, Gujarat, Anshivya Group is a growing business group focused on delivering reliable, efficient, and future-ready solutions to organizations across diverse industries.
                    </p>
                </div>

                <div class="p-8 rounded-3xl glass-card border border-slate-200/80 dark:border-slate-800/80 space-y-4 hover:border-amber-500/30 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-bold text-lg">
                        03
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 leading-relaxed">
                        Our approach goes beyond simply providing services. We work as an extension of our clients’ teams—understanding their challenges, simplifying complex processes, reducing operational burden, and creating solutions that support sustainable business growth.
                    </p>
                </div>

                <div class="p-8 rounded-3xl glass-card border border-slate-200/80 dark:border-slate-800/80 space-y-4 hover:border-amber-500/30 transition-colors">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-bold text-lg">
                        04
                    </div>
                    <p class="text-slate-700 dark:text-slate-300 leading-relaxed">
                        Backed by industry experience, professional expertise, and a technology-driven mindset, we serve businesses ranging from startups and SMEs to established organizations across manufacturing, engineering, construction, IT, pharmaceuticals, healthcare, education, renewable energy, real estate, and other sectors.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- VISION & MISSION -->
    <section class="py-24 bg-slate-50 dark:bg-slate-900/40 border-b border-slate-200 dark:border-slate-800 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 sm:p-10 rounded-3xl glass-card space-y-4">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">OUR VISION</div>
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Empowering Corporate Growth</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    To be the preferred corporate HR and recruitment solutions partner for expanding enterprises across India and global markets, recognized for domain precision, operational clarity, and ethical workforce practices.
                </p>
            </div>

            <div class="p-8 sm:p-10 rounded-3xl glass-card space-y-4">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">OUR MISSION</div>
                <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Building High-Fitting Teams</h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                    To empower businesses with high-fitting talent, streamlined payroll management, and sound HR compliance frameworks, while providing candidates with transparent, value-aligned career growth opportunities.
                </p>
            </div>
        </div>
    </section>

    <!-- EXECUTIVE LEADERSHIP SECTION WITH PORTRAITS -->
    <section class="py-24 bg-slate-100/50 dark:bg-slate-950 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <div class="max-w-3xl space-y-2">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">EXECUTIVE LEADERSHIP</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">Guided by Experience.</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Our leadership brings together business vision, people expertise, financial discipline and operational experience.</p>
            </div>

            <!-- 3 EXECUTIVE LEADERSHIP CARDS WITH RESPONSIVE IMAGES -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
                
                <!-- CHAIRMAN: SHIV MUNI PAL -->
                <div class="group relative rounded-3xl overflow-hidden bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800/80 shadow-xl hover:shadow-2xl hover:border-amber-500/50 transition-all duration-500 flex flex-col">
                    <!-- Image Container - Edge-to-Edge Full Width on all screen sizes -->
                    <div class="relative w-full h-80 sm:h-96 overflow-hidden bg-slate-950">
                        <img src="/images/shiv-muni-pal.png" alt="Shiv Muni Pal - Chairman" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
                        
                        <!-- Role Badge floating top left -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/80 backdrop-blur-md border border-amber-500/40 text-amber-400 text-xs font-bold uppercase tracking-widest shadow-lg">
                                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                                Chairman
                            </span>
                        </div>

                        <!-- Name & Subtitle overlay on photo -->
                        <div class="absolute bottom-4 left-6 right-6">
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight group-hover:text-amber-300 transition-colors">
                                Shiv Muni Pal
                            </h3>
                            <p class="text-xs font-bold uppercase tracking-widest text-amber-400/90 mt-1">
                                Anshivya Global HR Solution
                            </p>
                        </div>
                    </div>

                    <!-- Details Box below photo -->
                    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6 bg-slate-50/50 dark:bg-slate-900/60">
                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                            Providing strategic direction, corporate governance, and long-term vision to Anshivya Global HR Solution expansion across diverse industrial sectors.
                        </p>
                        
                        <!-- Capability Pills & LinkedIn Link -->
                        <div class="pt-4 border-t border-slate-200/80 dark:border-slate-800/80 space-y-3">
                            <div class="flex flex-wrap gap-2 text-xs">
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">Strategic Direction</span>
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">Corporate Governance</span>
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">Group Vision</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FOUNDER & MANAGING DIRECTOR: SHIVAM PAL -->
                <div class="group relative rounded-3xl overflow-hidden bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800/80 shadow-xl hover:shadow-2xl hover:border-amber-500/50 transition-all duration-500 flex flex-col">
                    <!-- Image Container - Edge-to-Edge Full Width on all screen sizes -->
                    <div class="relative w-full h-80 sm:h-96 overflow-hidden bg-slate-950">
                        <img src="/images/shivam-pal.jpeg" alt="Shivam Pal - Founder & Managing Director" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
                        
                        <!-- Role Badge floating top left -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/80 backdrop-blur-md border border-amber-500/40 text-amber-400 text-xs font-bold uppercase tracking-widest shadow-lg">
                                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                                Founder &amp; MD
                            </span>
                        </div>

                        <!-- Name & Subtitle overlay on photo -->
                        <div class="absolute bottom-4 left-6 right-6">
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight group-hover:text-amber-300 transition-colors">
                                Shivam Pal
                            </h3>
                            <p class="text-xs font-bold uppercase tracking-widest text-amber-400/90 mt-1">
                                Anshivya Global HR Solution
                            </p>
                        </div>
                    </div>

                    <!-- Details Box below photo -->
                    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6 bg-slate-50/50 dark:bg-slate-900/60">
                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                            Leading Anshivya Group's strategic growth, operational excellence, and workforce practice across recruitment, payroll, and statutory compliance.
                        </p>
                        
                        <!-- Capability Pills & LinkedIn Link -->
                        <div class="pt-4 border-t border-slate-200/80 dark:border-slate-800/80 space-y-3">
                            <div class="flex flex-wrap gap-2 text-xs">
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">Business Strategy</span>
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">Operational Excellence</span>
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">Workforce Practice</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CHIEF OPERATING OFFICER: ANJALI PAL -->
                <div class="group relative rounded-3xl overflow-hidden bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800/80 shadow-xl hover:shadow-2xl hover:border-amber-500/50 transition-all duration-500 flex flex-col">
                    <!-- Image Container - Edge-to-Edge Full Width on all screen sizes -->
                    <div class="relative w-full h-80 sm:h-96 overflow-hidden bg-slate-950">
                        <img src="/images/anjali-pal.jpeg" alt="Anjali Pal - Chief Operating Officer" class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700 ease-out" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent opacity-90 group-hover:opacity-80 transition-opacity"></div>
                        
                        <!-- Role Badge floating top left -->
                        <div class="absolute top-4 left-4">
                            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900/80 backdrop-blur-md border border-amber-500/40 text-amber-400 text-xs font-bold uppercase tracking-widest shadow-lg">
                                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                                Chief Operating Officer
                            </span>
                        </div>

                        <!-- Name & Subtitle overlay on photo -->
                        <div class="absolute bottom-4 left-6 right-6">
                            <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight group-hover:text-amber-300 transition-colors">
                                Anjali Pal
                            </h3>
                            <p class="text-xs font-bold uppercase tracking-widest text-amber-400/90 mt-1">
                                Anshivya Global HR Solution
                            </p>
                        </div>
                    </div>

                    <!-- Details Box below photo -->
                    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6 bg-slate-50/50 dark:bg-slate-900/60">
                        <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                            Directing daily HR operations, client delivery frameworks, executive recruitment teams, and candidate onboarding processes.
                        </p>
                        
                        <!-- Capability Pills & LinkedIn Link -->
                        <div class="pt-4 border-t border-slate-200/80 dark:border-slate-800/80 space-y-3">
                            <div class="flex flex-wrap gap-2 text-xs">
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">HR Operations</span>
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">Client Delivery</span>
                                <span class="px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-400 font-semibold border border-amber-500/20">Team Execution</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- DETAILED SPOTLIGHT FOR SHIVAM PAL -->
            <div class="rounded-3xl bg-white dark:bg-gradient-to-r dark:from-slate-900 dark:via-slate-950 dark:to-slate-900 p-8 sm:p-12 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-wider">
                    EXECUTIVE SPOTLIGHT
                </div>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">Experience That Shapes Our Direction.</h3>
                <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed max-w-3xl">
                    Shivam Pal brings hands-on leadership and domain experience across HR, recruitment, payroll management, statutory compliance, and corporate workforce strategy.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-4 border-t border-slate-200 dark:border-slate-800 text-xs text-slate-700 dark:text-slate-200">
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Recruitment &amp; Talent Acquisition</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Payroll &amp; HRMS Implementation</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Compliance &amp; Policy Formulation</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Employee Relations &amp; Engagement</span>
                    </div>
                    <div class="flex items-center gap-2.5">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400"></span>
                        <span>Strategic HR Consulting</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection
