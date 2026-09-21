import React from 'react';
import { Link } from '@inertiajs/react';
import { Building2, UserCheck, ArrowRight, CheckCircle, Briefcase } from 'lucide-react';

export default function DualAudienceSplit() {
  return (
    <section className="py-24 bg-slate-950 relative overflow-hidden">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* SECTION HEADER */}
        <div className="text-center max-w-3xl mx-auto mb-16 space-y-3">
          <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-900 border border-slate-800 text-amber-400 text-xs font-bold uppercase tracking-widest">
            Dual Path Journey
          </div>
          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
            Tailored Solutions for Employers &amp; Job Seekers
          </h2>
          <p className="text-slate-400 text-base">
            Whether you are looking to build a high-performing corporate team or looking to take the next step in your professional career, Anshivya Group provides a direct pathway.
          </p>
        </div>

        {/* SPLIT PATH GRID */}
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
          
          {/* LEFT: FOR EMPLOYERS CARD */}
          <div className="group relative rounded-3xl bg-gradient-to-b from-slate-900 via-slate-900/90 to-slate-950 p-8 sm:p-10 border border-slate-800 hover:border-amber-500/50 shadow-2xl transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between overflow-hidden">
            <div className="absolute top-0 right-0 w-48 h-48 bg-amber-500/10 rounded-full blur-3xl group-hover:bg-amber-500/20 transition-all pointer-events-none"></div>

            <div>
              <div className="flex items-center justify-between mb-8">
                <div className="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-wider">
                  <Building2 className="w-4 h-4" />
                  FOR EMPLOYERS
                </div>
                <span className="text-xs text-slate-400 font-mono">01 / HR Solutions</span>
              </div>

              <h3 className="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-4 group-hover:text-amber-300 transition-colors">
                Find the people who move your business forward.
              </h3>

              <p className="text-slate-300 text-base mb-8 leading-relaxed">
                Your growth deserves people who fit — we make it happen. Access end-to-end recruitment, payroll management, and compliance solutions designed around your operational requirements.
              </p>

              {/* HIGHLIGHT BULLETS */}
              <div className="space-y-3 mb-10 text-xs text-slate-300">
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-4 h-4 text-amber-400 shrink-0" />
                  <span>Executive Sourcing &amp; Lateral Recruitment</span>
                </div>
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-4 h-4 text-amber-400 shrink-0" />
                  <span>Structured Monthly Payroll &amp; HRMS Setup</span>
                </div>
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-4 h-4 text-amber-400 shrink-0" />
                  <span>Statutory Compliance &amp; Policy Audits</span>
                </div>
              </div>
            </div>

            <Link
              href="/contact"
              className="inline-flex items-center justify-center gap-3 w-full py-4 px-6 rounded-2xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 text-slate-950 shadow-xl shadow-orange-950/40 transition-all duration-200"
            >
              Tell Us About Your Hiring Needs
              <ArrowRight className="w-4 h-4" />
            </Link>
          </div>

          {/* RIGHT: FOR CANDIDATES CARD */}
          <div className="group relative rounded-3xl bg-gradient-to-b from-slate-900 via-slate-900/90 to-slate-950 p-8 sm:p-10 border border-slate-800 hover:border-emerald-500/50 shadow-2xl transition-all duration-300 hover:-translate-y-1 flex flex-col justify-between overflow-hidden">
            <div className="absolute top-0 right-0 w-48 h-48 bg-emerald-500/10 rounded-full blur-3xl group-hover:bg-emerald-500/20 transition-all pointer-events-none"></div>

            <div>
              <div className="flex items-center justify-between mb-8">
                <div className="inline-flex items-center gap-2 px-3 py-1.5 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-bold uppercase tracking-wider">
                  <UserCheck className="w-4 h-4" />
                  FOR CANDIDATES
                </div>
                <span className="text-xs text-slate-400 font-mono">02 / Careers</span>
              </div>

              <h3 className="text-2xl sm:text-3xl font-extrabold text-white tracking-tight mb-4 group-hover:text-emerald-300 transition-colors">
                Find opportunities built around your potential.
              </h3>

              <p className="text-slate-300 text-base mb-8 leading-relaxed">
                Explore career opportunities and connect with relevant roles across Automobile, Real Estate, Construction, Infrastructure, Media, and Manufacturing sectors.
              </p>

              {/* HIGHLIGHT BULLETS */}
              <div className="space-y-3 mb-10 text-xs text-slate-300">
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-4 h-4 text-emerald-400 shrink-0" />
                  <span>Direct Placement with Top Industrial Employers</span>
                </div>
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-4 h-4 text-emerald-400 shrink-0" />
                  <span>Transparent Job Specs &amp; Career Guidance</span>
                </div>
                <div className="flex items-center gap-3">
                  <CheckCircle className="w-4 h-4 text-emerald-400 shrink-0" />
                  <span>Seamless Resume Application &amp; Follow-up</span>
                </div>
              </div>
            </div>

            <Link
              href="/jobs"
              className="inline-flex items-center justify-center gap-3 w-full py-4 px-6 rounded-2xl text-xs font-bold uppercase tracking-wider bg-slate-900 hover:bg-slate-800 text-emerald-400 hover:text-white border border-emerald-500/40 hover:border-emerald-400 transition-all duration-200"
            >
              <Briefcase className="w-4 h-4" />
              View Job Openings
              <ArrowRight className="w-4 h-4" />
            </Link>
          </div>

        </div>
      </div>
    </section>
  );
}
