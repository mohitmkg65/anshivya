import React from 'react';
import { Award, Building, CheckCircle2 } from 'lucide-react';
import { companyData } from '../data/companyData';

export default function TrustSnapshot() {
  return (
    <section className="py-16 bg-slate-900/60 border-y border-slate-800/80 relative overflow-hidden">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex flex-col lg:flex-row items-center justify-between gap-10">
          
          {/* LEFT TRUST STATEMENT */}
          <div className="lg:max-w-xl space-y-2 text-center lg:text-left">
            <div className="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-amber-400">
              <CheckCircle2 className="w-4 h-4" />
              <span>Proven Industry Track Record</span>
            </div>
            <h2 className="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
              Professional HR solutions built around real business requirements.
            </h2>
            <p className="text-slate-400 text-sm">
              We partner with organizations to deliver practical recruitment, payroll management, and compliance systems without administrative complexity.
            </p>
          </div>

          {/* RIGHT METRICS CARDS */}
          <div className="grid grid-cols-2 gap-6 w-full lg:w-auto">
            
            {/* METRIC 1: 5+ YEARS */}
            <div className="p-6 rounded-2xl bg-slate-950 border border-slate-800 shadow-xl flex flex-col justify-between hover:border-amber-500/40 transition-colors">
              <div className="flex items-center justify-between mb-4">
                <div className="text-3xl sm:text-4xl font-black text-amber-400 tracking-tight">
                  5+
                </div>
                <div className="p-2 rounded-xl bg-amber-500/10 text-amber-400 border border-amber-500/20">
                  <Award className="w-5 h-5" />
                </div>
              </div>
              <div>
                <div className="text-sm font-bold text-white uppercase tracking-wider">Years of Experience</div>
                <div className="text-xs text-slate-400 mt-1">Delivering strategic workforce solutions</div>
              </div>
            </div>

            {/* METRIC 2: 4+ TRUSTED CLIENTS */}
            <div className="p-6 rounded-2xl bg-slate-950 border border-slate-800 shadow-xl flex flex-col justify-between hover:border-amber-500/40 transition-colors">
              <div className="flex items-center justify-between mb-4">
                <div className="text-3xl sm:text-4xl font-black text-amber-400 tracking-tight">
                  4+
                </div>
                <div className="p-2 rounded-xl bg-amber-500/10 text-amber-400 border border-amber-500/20">
                  <Building className="w-5 h-5" />
                </div>
              </div>
              <div>
                <div className="text-sm font-bold text-white uppercase tracking-wider">Trusted Clients</div>
                <div className="text-xs text-slate-400 mt-1">Long-term business partnerships</div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </section>
  );
}
