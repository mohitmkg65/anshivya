import React from 'react';
import { Link } from '@inertiajs/react';
import { Car, HardHat, Building2, Landmark, Tv, Film, Megaphone, Factory, ArrowRight } from 'lucide-react';
import { industriesData } from '../data/industriesData';

export default function IndustryMarquee() {
  const iconMap = {
    Car: Car,
    HardHat: HardHat,
    Building2: Building2,
    Landmark: Landmark,
    Tv: Tv,
    Film: Film,
    Megaphone: Megaphone,
    Factory: Factory
  };

  // Duplicate for seamless infinite marquee loop
  const marqueeItems = [...industriesData, ...industriesData];

  return (
    <section className="py-24 bg-slate-950 relative overflow-hidden border-b border-slate-900">
      
      {/* SECTION HEADER */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div className="flex flex-col md:flex-row md:items-end justify-between gap-6">
          <div className="max-w-2xl space-y-3">
            <div className="text-xs font-bold uppercase tracking-widest text-amber-400">
              INDUSTRIES WE SERVE
            </div>
            <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
              Anshivya's Versatile Industry Reach.
            </h2>
            <p className="text-slate-400 text-base">
              Anshivya works across multifaceted industries, supporting diverse hiring and talent requirements with a sector-focused approach.
            </p>
          </div>

          <Link
            href="/industries"
            className="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-400 hover:text-amber-300 group shrink-0"
          >
            View All Sectors
            <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
          </Link>
        </div>
      </div>

      {/* INFINITE MARQUEE SLIDER */}
      <div className="relative w-full overflow-hidden py-4">
        {/* GRADIENT FADE OVERLAYS */}
        <div className="absolute top-0 left-0 bottom-0 w-24 bg-gradient-to-r from-slate-950 to-transparent z-10 pointer-events-none"></div>
        <div className="absolute top-0 right-0 bottom-0 w-24 bg-gradient-to-l from-slate-950 to-transparent z-10 pointer-events-none"></div>

        <div className="animate-marquee flex gap-6 px-4">
          {marqueeItems.map((item, index) => {
            const IconComponent = iconMap[item.iconName] || Building2;
            return (
              <div
                key={`${item.id}-${index}`}
                className="w-72 sm:w-80 shrink-0 rounded-2xl bg-slate-900/90 border border-slate-800 p-6 shadow-xl hover:border-amber-500/50 transition-all duration-300 hover:scale-[1.02] focus-within:ring-2 focus-within:ring-amber-500"
                tabIndex={0}
              >
                <div className="flex items-center justify-between mb-4">
                  <div className="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center">
                    <IconComponent className="w-5 h-5" />
                  </div>
                  <span className="text-[10px] font-mono font-bold px-2 py-0.5 rounded bg-slate-800 text-amber-400 border border-slate-700">
                    {item.code}
                  </span>
                </div>

                <h3 className="text-lg font-bold text-white mb-2">
                  {item.name}
                </h3>

                <p className="text-slate-400 text-xs line-clamp-2 leading-relaxed mb-4">
                  {item.description}
                </p>

                <div className="text-[11px] text-amber-400/90 font-medium flex items-center gap-1">
                  <span>{item.stats}</span>
                </div>
              </div>
            );
          })}
        </div>
      </div>

      <div className="text-center mt-6 text-xs text-slate-400">
        Hover or touch to pause slider. Accessible keyboard navigation supported.
      </div>
    </section>
  );
}
