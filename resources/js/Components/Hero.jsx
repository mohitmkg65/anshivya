import React from 'react';
import { Link } from '@inertiajs/react';
import { ArrowRight, ShieldCheck, Users, Sparkles, Building2, TrendingUp } from 'lucide-react';
import { companyData } from '../data/companyData';

export default function Hero() {
  return (
    <section className="relative pt-32 sm:pt-40 pb-20 lg:pb-32 overflow-hidden bg-slate-950">
      {/* BACKGROUND AMBIENT LIGHTS */}
      <div className="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[500px] bg-gradient-to-tr from-amber-600/10 via-orange-500/15 to-blue-900/10 rounded-full blur-[120px] pointer-events-none"></div>
      <div className="absolute top-10 right-10 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
          
          {/* HERO LEFT COLUMN: TEXT & CTAs */}
          <div className="lg:col-span-7 space-y-8 text-left">
            
            {/* EYEBROW BADGE */}
            <div className="inline-flex items-center gap-2.5 px-3.5 py-1.5 rounded-full bg-slate-900/90 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-widest shadow-lg shadow-amber-950/30">
              <Sparkles className="w-3.5 h-3.5 text-amber-400" />
              <span>GLOBAL GROWTH</span>
            </div>

            {/* MAIN HEADLINE */}
            <h1 className="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.08]">
              Empowering People.<br />
              <span className="bg-gradient-to-r from-amber-400 via-orange-400 to-amber-200 bg-clip-text text-transparent">
                Accelerating Business.
              </span><br />
              Building Futures.
            </h1>

            {/* SUPPORTING TEXT */}
            <p className="text-slate-300 text-lg sm:text-xl font-normal leading-relaxed max-w-2xl">
              {companyData.subTagline}
            </p>

            {/* ACTION BUTTONS */}
            <div className="pt-2 flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
              <Link
                href="/contact"
                className="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-2xl text-sm font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 hover:from-amber-400 hover:to-orange-500 text-slate-950 shadow-2xl shadow-orange-950/60 hover:shadow-orange-500/30 transition-all duration-300 hover:scale-[1.02] active:scale-[0.98] group"
              >
                Talk to Anshivya
                <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
              </Link>

              <Link
                href="/services/recruitment"
                className="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-2xl text-sm font-bold uppercase tracking-wider bg-slate-900/90 hover:bg-slate-800 text-slate-200 hover:text-white border border-slate-700/80 transition-all duration-300 hover:scale-[1.02] active:scale-[0.98]"
              >
                Explore Our Services
              </Link>
            </div>

            {/* TRUST BULLETS */}
            <div className="pt-4 grid grid-cols-2 sm:grid-cols-3 gap-4 border-t border-slate-900 text-slate-400 text-xs font-medium">
              <div className="flex items-center gap-2">
                <ShieldCheck className="w-4 h-4 text-amber-500" />
                <span>Verified Compliance</span>
              </div>
              <div className="flex items-center gap-2">
                <Users className="w-4 h-4 text-amber-500" />
                <span>Sector-Focused Hiring</span>
              </div>
              <div className="flex items-center gap-2">
                <Building2 className="w-4 h-4 text-amber-500" />
                <span>Ahmedabad &amp; Global</span>
              </div>
            </div>

          </div>

          {/* HERO RIGHT COLUMN: ELEGANT HR VISUAL & FLOATING BADGES */}
          <div className="lg:col-span-5 relative">
            <div className="relative mx-auto max-w-md lg:max-w-none">
              
              {/* MAIN VISUAL CARD */}
              <div className="rounded-3xl bg-gradient-to-b from-slate-900 to-slate-950 border border-slate-800/80 p-6 sm:p-8 shadow-2xl shadow-slate-950 relative overflow-hidden group">
                <div className="absolute top-0 right-0 w-32 h-32 bg-amber-500/10 rounded-full blur-2xl group-hover:bg-amber-500/20 transition-all"></div>
                
                <div className="flex items-center justify-between border-b border-slate-800 pb-4 mb-6">
                  <div className="flex items-center gap-3">
                    <div className="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400">
                      <TrendingUp className="w-5 h-5" />
                    </div>
                    <div>
                      <div className="text-xs font-bold text-white uppercase tracking-wider">Corporate HR Solutions</div>
                      <div className="text-[11px] text-slate-400">Strategic &amp; Practical Execution</div>
                    </div>
                  </div>
                  <span className="text-xs font-bold px-2.5 py-1 rounded-full bg-emerald-500/10 text-emerald-400 border border-emerald-500/30">
                    Active Partner
                  </span>
                </div>

                {/* VISUAL CARDS GRID INSIDE HERO GRAPHIC */}
                <div className="space-y-3">
                  <div className="p-4 rounded-xl bg-slate-900/90 border border-slate-800 flex items-center justify-between">
                    <div className="flex items-center gap-3">
                      <div className="w-8 h-8 rounded-lg bg-orange-500/20 text-orange-400 flex items-center justify-center text-xs font-bold">
                        01
                      </div>
                      <div>
                        <div className="text-xs font-semibold text-slate-200">Recruitment &amp; Talent Acquisition</div>
                        <div className="text-[11px] text-slate-400">Sector-focused executive hiring</div>
                      </div>
                    </div>
                    <span className="text-xs text-amber-400 font-bold">98% Match</span>
                  </div>

                  <div className="p-4 rounded-xl bg-slate-900/90 border border-slate-800 flex items-center justify-between">
                    <div className="flex items-center gap-3">
                      <div className="w-8 h-8 rounded-lg bg-amber-500/20 text-amber-400 flex items-center justify-center text-xs font-bold">
                        02
                      </div>
                      <div>
                        <div className="text-xs font-semibold text-slate-200">Payroll Management</div>
                        <div className="text-[11px] text-slate-400">Organized monthly reporting</div>
                      </div>
                    </div>
                    <span className="text-xs text-emerald-400 font-bold">100% Accurate</span>
                  </div>

                  <div className="p-4 rounded-xl bg-slate-900/90 border border-slate-800 flex items-center justify-between">
                    <div className="flex items-center gap-3">
                      <div className="w-8 h-8 rounded-lg bg-blue-500/20 text-blue-400 flex items-center justify-center text-xs font-bold">
                        03
                      </div>
                      <div>
                        <div className="text-xs font-semibold text-slate-200">Compliance &amp; Policy Formulation</div>
                        <div className="text-[11px] text-slate-400">Structured HR audit readiness</div>
                      </div>
                    </div>
                    <span className="text-xs text-blue-400 font-bold">Compliant</span>
                  </div>
                </div>

                <div className="mt-6 pt-4 border-t border-slate-800/80 flex items-center justify-between text-xs text-slate-400">
                  <span>Anshivya Corporate Framework</span>
                  <span className="text-amber-400 font-semibold">5+ Years Industry Experience</span>
                </div>
              </div>

              {/* FLOATING BADGE 1 */}
              <div className="absolute -bottom-6 -left-6 bg-slate-900/95 border border-slate-700/80 p-4 rounded-2xl shadow-2xl backdrop-blur-xl flex items-center gap-3 animate-bounce-slow">
                <div className="w-10 h-10 rounded-xl bg-amber-500 text-slate-950 font-black text-sm flex items-center justify-center shadow-lg">
                  5+
                </div>
                <div>
                  <div className="text-xs font-bold text-white">Years Experience</div>
                  <div className="text-[10px] text-slate-400">Proven HR Execution</div>
                </div>
              </div>

              {/* FLOATING BADGE 2 */}
              <div className="absolute -top-6 -right-6 bg-slate-900/95 border border-slate-700/80 p-4 rounded-2xl shadow-2xl backdrop-blur-xl flex items-center gap-3">
                <div className="w-10 h-10 rounded-xl bg-emerald-500 text-slate-950 font-black text-sm flex items-center justify-center shadow-lg">
                  4+
                </div>
                <div>
                  <div className="text-xs font-bold text-white">Trusted Clients</div>
                  <div className="text-[10px] text-slate-400">Long-term Partners</div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>
  );
}
