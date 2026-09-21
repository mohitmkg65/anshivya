import React from 'react';
import { Quote, CheckCircle2 } from 'lucide-react';
import { testimonialsData } from '../data/testimonialsData';

export default function ClientExperience() {
  const item = testimonialsData[0];

  return (
    <section className="py-24 bg-slate-950 relative overflow-hidden border-b border-slate-900">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* HEADER */}
        <div className="max-w-3xl mb-16 space-y-3">
          <div className="text-xs font-bold uppercase tracking-widest text-amber-400">
            CLIENT EXPERIENCE
          </div>
          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
            Relationships Built on Trust &amp; Results.
          </h2>
          <p className="text-slate-400 text-base">
            Professional support, responsive communication and solutions built around real business requirements.
          </p>
        </div>

        {/* VERIFIED TESTIMONIAL CARD */}
        <div className="max-w-4xl mx-auto">
          <div className="relative rounded-3xl bg-slate-900/90 border border-slate-800 p-8 sm:p-12 shadow-2xl overflow-hidden hover:border-amber-500/40 transition-colors">
            <Quote className="absolute -top-4 -left-4 w-32 h-32 text-amber-500/10 pointer-events-none" />

            <div className="relative z-10 space-y-6">
              <div className="flex items-center justify-between">
                <span className="px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-wider">
                  {item.category}
                </span>
                <span className="text-xs text-slate-400 font-semibold flex items-center gap-1.5">
                  <CheckCircle2 className="w-4 h-4 text-emerald-400" />
                  Verified Review
                </span>
              </div>

              <blockquote className="text-xl sm:text-2xl font-medium text-slate-100 leading-relaxed italic">
                "{item.quote}"
              </blockquote>

              <div className="pt-4 border-t border-slate-800 flex flex-col sm:flex-row sm:items-center justify-between gap-2 text-xs">
                <div className="font-bold text-amber-400 tracking-wide uppercase">
                  {item.label}
                </div>
                <div className="text-slate-400">
                  Impact: <span className="text-slate-300 font-medium">{item.highlight}</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
  );
}
