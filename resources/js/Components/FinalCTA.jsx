import React from 'react';
import { Link } from '@inertiajs/react';
import { ArrowRight, PhoneCall } from 'lucide-react';

export default function FinalCTA() {
  return (
    <section className="py-24 bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 relative overflow-hidden border-t border-slate-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div className="rounded-3xl bg-gradient-to-r from-slate-950 via-slate-900 to-amber-950/40 p-10 sm:p-16 border border-slate-800 shadow-2xl text-center max-w-4xl mx-auto relative overflow-hidden">
          
          <div className="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

          <div className="relative z-10 space-y-6">
            <span className="inline-block px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-widest">
              NEXT STEP FOR YOUR BUSINESS
            </span>

            <h2 className="text-3xl sm:text-4xl lg:text-5xl font-black text-white tracking-tight leading-tight">
              Let's Build Your Next Chapter Together.
            </h2>

            <p className="text-slate-300 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
              Tell us what your business needs. Our team can help you find the right people and build more effective HR processes.
            </p>

            <div className="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
              <Link
                href="/contact"
                className="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-2xl text-sm font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 hover:from-amber-400 hover:to-orange-500 text-slate-950 shadow-xl shadow-orange-950/60 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200"
              >
                <PhoneCall className="w-4 h-4" />
                Talk to Anshivya
              </Link>

              <Link
                href="/services/recruitment"
                className="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-2xl text-sm font-bold uppercase tracking-wider bg-slate-900 hover:bg-slate-800 text-slate-200 hover:text-white border border-slate-700/80 transition-all duration-200"
              >
                Explore Services
                <ArrowRight className="w-4 h-4" />
              </Link>
            </div>
          </div>

        </div>
      </div>
    </section>
  );
}
