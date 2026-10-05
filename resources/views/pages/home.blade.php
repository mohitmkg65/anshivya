@extends('layouts.app')

@section('title', 'Anshivya Global HR Solution\'s | Corporate HR Solutions & Recruitment Partner')

@section('content')

    <!-- SECTION 1 — HERO SECTION WITH IMAGE BACKGROUND & GRADIENT OVERLAY -->
    <section class="relative pt-36 pb-24 lg:pt-44 lg:pb-36 overflow-hidden bg-slate-100 dark:bg-slate-950 transition-colors">
        <!-- BACKGROUND HERO IMAGE WITH ELEGANT GRADIENT OVERLAY -->
        <div class="absolute inset-0 z-0">
            <img src="/images/hero_corporate.jpg" alt="Anshivya Corporate Leadership" class="w-full h-full object-cover object-center scale-105 filter brightness-95 dark:brightness-90 transition-transform duration-1000" />
            <div class="absolute inset-0 hero-image-overlay"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- HERO LEFT TEXT -->
                <div class="lg:col-span-7 space-y-8 text-left">
                    <div class="inline-flex items-center gap-2.5 px-4 py-1.5 rounded-full bg-white/90 dark:bg-slate-900/90 border border-amber-500/40 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-widest shadow-xl backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-amber-500 dark:bg-amber-400 animate-ping"></span>
                        GLOBAL GROWTH
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 dark:text-white tracking-tight leading-[1.08]">
                        Empowering People.<br />
                        <span class="accent-text-gradient">
                            Accelerating Business.
                        </span><br />
                        Building Futures.
                    </h1>

                    <p class="text-slate-700 dark:text-slate-200 text-lg sm:text-xl font-medium dark:font-normal leading-relaxed max-w-2xl">
                        Partner with Anshivya Global HR Solution to access a global network of professionals who drive results.
                    </p>

                    <div class="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
                        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-2xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 text-white shadow-2xl shadow-orange-950/20 hover:scale-[1.02] active:scale-[0.98] transition-all">
                            Talk to Anshivya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="{{ route('services') }}" class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-2xl text-xs font-bold uppercase tracking-wider bg-white/90 dark:bg-slate-900/90 text-slate-800 dark:text-slate-200 hover:text-slate-950 dark:hover:text-white border border-slate-300 dark:border-slate-700/80 hover:bg-slate-100 dark:hover:bg-slate-800 backdrop-blur-md transition-all shadow-md">
                            Explore Our Services
                        </a>
                    </div>

                    <div class="pt-4 grid grid-cols-2 sm:grid-cols-3 gap-4 border-t border-slate-300/80 dark:border-slate-800/80 text-slate-700 dark:text-slate-300 text-xs font-semibold">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-500 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Verified HR Audit</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-500 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Sector-Focused Hiring</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-amber-500 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span>Pan India &amp; Global</span>
                        </div>
                    </div>
                </div>

                <!-- HERO RIGHT FLOATING GLASS CARDS -->
                <div class="lg:col-span-5 relative">
                    <div class="rounded-3xl glass-card p-8 shadow-2xl space-y-4 relative overflow-hidden">
                        <div class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 pb-4 mb-2">
                            <div>
                                <div class="text-xs font-extrabold text-slate-900 dark:text-white uppercase tracking-wider">Anshivya Global HR Solution</div>
                                <div class="text-[11px] text-slate-500 dark:text-slate-400">Strategic &amp; Operational Execution</div>
                            </div>
                            <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/10 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 border border-emerald-500/30">
                                Active Partner
                            </span>
                        </div>

                        <div class="space-y-3 text-xs">
                            <div class="p-3.5 rounded-xl bg-slate-100/90 dark:bg-slate-950/80 border border-slate-200 dark:border-slate-800 flex justify-between items-center">
                                <span class="font-semibold text-slate-800 dark:text-slate-200">Recruitment &amp; Talent Acquisition</span>
                                <span class="text-amber-600 dark:text-amber-400 font-bold">98% Match</span>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-100/90 dark:bg-slate-950/80 border border-slate-200 dark:border-slate-800 flex justify-between items-center">
                                <span class="font-semibold text-slate-800 dark:text-slate-200">Payroll Management &amp; Compliance</span>
                                <span class="text-emerald-600 dark:text-emerald-400 font-bold">100% Accurate</span>
                            </div>
                            <div class="p-3.5 rounded-xl bg-slate-100/90 dark:bg-slate-950/80 border border-slate-200 dark:border-slate-800 flex justify-between items-center">
                                <span class="font-semibold text-slate-800 dark:text-slate-200">HRMS &amp; HR Technology</span>
                                <span class="text-blue-600 dark:text-blue-400 font-bold">Compliant</span>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-slate-200 dark:border-slate-800/80 flex items-center justify-between text-xs">
                            <span class="text-slate-500 dark:text-slate-400">Trusted Corporate Group</span>
                            <span class="text-amber-600 dark:text-amber-400 font-bold">5+ Years Experience</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 2 — TRUST / COMPANY SNAPSHOT -->
    <section class="py-16 bg-slate-100/80 dark:bg-slate-900/60 border-y border-slate-200 dark:border-slate-800/80 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between gap-10">
            <div class="max-w-xl space-y-2">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">Proven Industry Track Record</div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white">Professional HR solutions built around real business requirements.</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm">We partner with organizations to deliver practical recruitment, payroll management, and compliance systems without administrative complexity.</p>
            </div>

            <div x-data="{
                    count1: 1,
                    count2: 1,
                    hasAnimated: false,
                    init() {
                        const observer = new IntersectionObserver((entries) => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting && !this.hasAnimated) {
                                    this.hasAnimated = true;
                                    this.animateCounters();
                                }
                            });
                        }, { threshold: 0.2 });
                        observer.observe(this.$el);
                    },
                    animateCounters() {
                        const duration = 1000;
                        const startTime = performance.now();
                        const step = (now) => {
                            const progress = Math.min((now - startTime) / duration, 1);
                            const ease = 1 - Math.pow(1 - progress, 3);
                            this.count1 = Math.min(6, Math.floor(1 + (6 - 1) * ease));
                            this.count2 = Math.min(10, Math.floor(1 + (10 - 1) * ease));
                            if (progress < 1) {
                                requestAnimationFrame(step);
                            } else {
                                this.count1 = 6;
                                this.count2 = 10;
                            }
                        };
                        requestAnimationFrame(step);
                    }
                }"
                 class="grid grid-cols-2 gap-6 w-full lg:w-auto">
                <div class="p-6 rounded-2xl glass-card flex flex-col justify-between">
                    <div class="text-3xl sm:text-4xl font-black text-amber-600 dark:text-amber-400 font-mono tracking-tight flex items-center">
                        <span x-text="count1">1</span><span>+</span>
                    </div>
                    <div class="text-xs font-bold text-slate-900 dark:text-white uppercase mt-2">Years of Experience</div>
                    <div class="text-[11px] text-slate-500 dark:text-slate-400">Delivering workforce solutions</div>
                </div>
                <div class="p-6 rounded-2xl glass-card flex flex-col justify-between">
                    <div class="text-3xl sm:text-4xl font-black text-amber-600 dark:text-amber-400 font-mono tracking-tight flex items-center">
                        <span x-text="count2">1</span><span>+</span>
                    </div>
                    <div class="text-xs font-bold text-slate-900 dark:text-white uppercase mt-2">Trusted Clients</div>
                    <div class="text-[11px] text-slate-500 dark:text-slate-400">Long-term business partners</div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 3 — EMPLOYERS / CANDIDATES SPLIT -->
    <section class="py-24 bg-slate-50 dark:bg-slate-950 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-2">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">Dual Path Journey</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">Tailored Solutions for Employers &amp; Job Seekers</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Whether you are building an executive corporate team or looking to take your next career step.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- FOR EMPLOYERS -->
                <div class="rounded-3xl glass-card p-8 sm:p-10 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-wider mb-6">
                            FOR EMPLOYERS
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white mb-4">Find the people who move your business forward.</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-sm mb-8 leading-relaxed">Your growth deserves people who fit — we make it happen. Access recruitment, payroll management, and compliance solutions designed around your operational requirements.</p>
                    </div>
                    <a href="{{ route('contact') }}" class="w-full py-4 text-center rounded-2xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 text-white shadow-xl hover:scale-[1.01] transition-all">
                        Tell Us About Your Hiring Needs &rarr;
                    </a>
                </div>

                <!-- FOR CANDIDATES -->
                <div class="rounded-3xl glass-card p-8 sm:p-10 flex flex-col justify-between">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 text-xs font-bold uppercase tracking-wider mb-6">
                            FOR CANDIDATES
                        </div>
                        <h3 class="text-2xl sm:text-3xl font-extrabold text-slate-900 dark:text-white mb-4">Find opportunities built around your potential.</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-sm mb-8 leading-relaxed">Explore career opportunities and connect with relevant roles across Automobile, Real Estate, Construction, Infrastructure, Media, and Manufacturing sectors.</p>
                    </div>
                    <a href="mailto:hr@anshivya.com" class="w-full py-4 text-center rounded-2xl text-xs font-bold uppercase tracking-wider bg-slate-900 hover:bg-slate-800 text-white dark:bg-slate-900 dark:border dark:border-emerald-500/40 dark:text-emerald-400 dark:hover:text-white transition-all shadow-md">
                        Mail Us Your Resume &rarr;
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5 — WHY ANSHIVYA -->
    <section class="py-24 bg-slate-100/60 dark:bg-slate-900/40 border-y border-slate-200 dark:border-slate-800 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-16 space-y-2">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">WHY ANSHIVYA</div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">One Partner. Greater Possibilities.</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm">Professional expertise combined with flexible, practical and technology-driven business solutions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="p-8 rounded-3xl glass-card">
                    <div class="text-amber-600 dark:text-amber-400 font-mono text-xl font-extrabold mb-2">01</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Diversified Expertise</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Access professional expertise and multiple business capabilities under one trusted group.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card">
                    <div class="text-amber-600 dark:text-amber-400 font-mono text-xl font-extrabold mb-2">02</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Cost-Effective Solutions</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Practical solutions designed around actual client requirements, scale and business priorities.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card">
                    <div class="text-amber-600 dark:text-amber-400 font-mono text-xl font-bold mb-2">03</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Professional Team</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Industry knowledge and hands-on experience across HR, recruitment, payroll and compliance.</p>
                </div>
                <div class="p-8 rounded-3xl glass-card">
                    <div class="text-amber-600 dark:text-amber-400 font-mono text-xl font-bold mb-2">04</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Technology-Driven Approach</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Modern processes and technology help improve efficiency, visibility and operational control.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6 — SERVICES OVERVIEW -->
    <section class="py-24 bg-slate-50 dark:bg-slate-950 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                <div class="max-w-3xl space-y-2">
                    <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">OUR SERVICES</div>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">HR Solutions Designed Around Your Business.</h2>
                </div>
                <a href="{{ route('services') }}" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-600 dark:text-amber-400 text-xs font-bold uppercase tracking-wider hover:bg-amber-500 hover:text-white transition-all shrink-0">
                    View All 9 Services &rarr;
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('services.recruitment') }}" class="p-8 rounded-3xl glass-card block group">
                    <div class="text-xs font-mono font-bold text-slate-400 dark:text-slate-500 mb-2">01</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">Recruitment &amp; Talent Acquisition</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">End-to-end recruitment and talent acquisition tailored to diverse sector requirements.</p>
                    <div class="mt-4 text-xs font-bold text-amber-600 dark:text-amber-400">Explore Service &rarr;</div>
                </a>

                <a href="{{ route('services.hr-consulting') }}" class="p-8 rounded-3xl glass-card block group">
                    <div class="text-xs font-mono font-bold text-slate-400 dark:text-slate-500 mb-2">02</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">HR Consulting</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Strategic HR solutions for efficient and compliant business growth.</p>
                    <div class="mt-4 text-xs font-bold text-amber-600 dark:text-amber-400">Explore Service &rarr;</div>
                </a>

                <a href="{{ route('services.payroll') }}" class="p-8 rounded-3xl glass-card block group">
                    <div class="text-xs font-mono font-bold text-slate-400 dark:text-slate-500 mb-2">03</div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2 group-hover:text-amber-600 dark:group-hover:text-amber-400 transition-colors">Payroll Management &amp; Compliance</h3>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed">Accurate monthly compensation processing, tax management, and PF/ESIC filings.</p>
                    <div class="mt-4 text-xs font-bold text-amber-600 dark:text-amber-400">Explore Service &rarr;</div>
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION 7 — INDUSTRIES MARQUEE -->
    <section class="py-24 bg-slate-100/80 dark:bg-slate-900/50 border-y border-slate-200 dark:border-slate-800 overflow-hidden transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400 mb-2">INDUSTRIES WE SERVE</div>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 dark:text-white">Anshivya's Versatile Industry Reach.</h2>
        </div>

        <div class="animate-marquee flex gap-6 px-4">
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">Automobile</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">Engineering &amp; Operations Talent</div>
            </div>
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">Construction</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">Site Leaders &amp; Engineers</div>
            </div>
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">Real Estate</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">Development &amp; Sales Leaders</div>
            </div>
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">Infrastructure</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">Civil &amp; Project Executives</div>
            </div>
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">Manufacturing</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">Plant Managers &amp; Technicians</div>
            </div>
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">KPO and BPO</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">Process &amp; Analytics Talent</div>
            </div>
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">Pharma</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">R&amp;D &amp; QA/QC Specialists</div>
            </div>
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">Healthcare</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">Medical &amp; Hospital Leaders</div>
            </div>
            <div class="w-72 shrink-0 rounded-2xl glass-card p-6">
                <div class="text-lg font-bold text-slate-900 dark:text-white mb-1">Renewable Energy</div>
                <div class="text-xs text-amber-600 dark:text-amber-400 font-semibold">Solar &amp; Wind Engineers</div>
            </div>
        </div>
    </section>

    <!-- SECTION 8 — LEADERSHIP SHOWCASE WITH EXECUTIVE IMAGES -->
    <section class="py-24 bg-slate-50 dark:bg-slate-950 transition-colors">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mb-16 space-y-2">
                <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">LEADERSHIP</div>
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
                    <div class="p-4 flex-1 flex flex-col justify-between space-y-6 bg-slate-50/50 dark:bg-slate-900/60">
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
                    <div class="p-4 flex-1 flex flex-col justify-between space-y-6 bg-slate-50/50 dark:bg-slate-900/60">
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
                    <div class="p-4 flex-1 flex flex-col justify-between space-y-6 bg-slate-50/50 dark:bg-slate-900/60">
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
        </div>
    </section>

    <!-- SECTION 9 — CLIENT EXPERIENCE -->
    <section class="py-24 bg-slate-100/80 dark:bg-slate-900/60 border-y border-slate-200 dark:border-slate-800 text-center transition-colors">
        <div class="max-w-4xl mx-auto px-4 space-y-6">
            <div class="text-xs font-bold uppercase tracking-widest text-amber-600 dark:text-amber-400">CLIENT EXPERIENCE</div>
            <blockquote class="text-xl sm:text-2xl font-medium text-slate-800 dark:text-slate-100 italic leading-relaxed">
                "Their payroll support helped us create a more organized monthly process with clearer reporting, better coordination and improved visibility."
            </blockquote>
            <div class="text-xs font-bold text-amber-600 dark:text-amber-400 uppercase tracking-wider">Clear Process. Reliable Payroll.</div>
        </div>
    </section>

    <!-- SECTION 10 — FINAL CTA -->
    <section class="py-24 bg-slate-50 dark:bg-slate-950 text-center transition-colors">
        <div class="max-w-3xl mx-auto px-4 space-y-6">
            <h2 class="text-4xl font-extrabold text-slate-900 dark:text-white">Let's Build Your Next Chapter Together.</h2>
            <p class="text-slate-600 dark:text-slate-300 text-base">Tell us what your business needs. Our team can help you find the right people and build more effective HR processes.</p>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-600 text-white font-bold uppercase text-xs shadow-xl hover:scale-105 transition-all">
                Talk to Anshivya &rarr;
            </a>
        </div>
    </section>

@endsection
