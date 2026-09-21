import React from 'react';
import { Layers, DollarSign, Users, Cpu } from 'lucide-react';
import { companyData } from '../data/companyData';

export default function WhyAnshivya() {
  const icons = [Layers, DollarSign, Users, Cpu];

  return (
    <section className="py-24 bg-slate-950 relative overflow-hidden">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* HEADER */}
        <div className="max-w-3xl mb-16 space-y-3">
          <div className="text-xs font-bold uppercase tracking-widest text-amber-400">
            WHY ANSHIVYA
          </div>
          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
            One Partner. Greater Possibilities.
          </h2>
          <p className="text-slate-400 text-base">
            Professional expertise combined with flexible, practical and technology-driven business solutions.
          </p>
        </div>

        {/* 2X2 GRID */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
          {companyData.values.map((item, idx) => {
            const IconComp = icons[idx];
            return (
              <div
                key={item.num}
                className="group relative rounded-3xl bg-gradient-to-b from-slate-900 to-slate-950 p-8 sm:p-10 border border-slate-800/80 hover:border-amber-500/50 shadow-2xl transition-all duration-300 hover:-translate-y-1 overflow-hidden"
              >
                <div className="flex items-start justify-between mb-8">
                  <div className="w-14 h-14 rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center group-hover:scale-110 group-hover:bg-amber-500 group-hover:text-slate-950 transition-all duration-300">
                    <IconComp className="w-7 h-7" />
                  </div>
                  <span className="text-2xl font-black text-slate-700 font-mono group-hover:text-amber-400 transition-colors">
                    {item.num}
                  </span>
                </div>

                <h3 className="text-xl sm:text-2xl font-bold text-white mb-3 group-hover:text-amber-300 transition-colors">
                  {item.title}
                </h3>

                <p className="text-slate-400 text-sm leading-relaxed">
                  {item.desc}
                </p>
              </div>
            );
          })}
        </div>

      </div>
    </section>
  );
}
