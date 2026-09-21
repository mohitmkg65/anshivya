import React from 'react';
import Layout from '../Layouts/Layout';
import FinalCTA from '../Components/FinalCTA';
import IndustryMarquee from '../Components/IndustryMarquee';
import { industriesData } from '../data/industriesData';
import { Link } from '@inertiajs/react';
import { Car, HardHat, Building2, Landmark, Tv, Film, Megaphone, Factory, ArrowRight } from 'lucide-react';

export default function Industries() {
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

  return (
    <Layout
      title="Industries We Serve — Sector-Focused HR & Talent"
      description="Anshivya Group provides sector-focused talent acquisition and workforce solutions across Automobile, Construction, Real Estate, Infrastructure, Media, Entertainment, Advertising, and Manufacturing."
    >
      <section className="pt-36 pb-20 bg-slate-950 border-b border-slate-900 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="max-w-3xl space-y-4">
            <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-widest">
              SECTOR EXPERTISE
            </div>
            <h1 className="text-4xl sm:text-5xl font-black text-white tracking-tight leading-tight">
              Anshivya's Versatile Industry Reach.
            </h1>
            <p className="text-slate-300 text-lg leading-relaxed">
              Anshivya works across multifaceted industries, supporting diverse hiring and talent requirements with a sector-focused approach.
            </p>
          </div>
        </div>
      </section>

      {/* FULL INDUSTRY GRID */}
      <section className="py-24 bg-slate-900/40">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            {industriesData.map((ind) => {
              const IconComp = iconMap[ind.iconName] || Building2;
              return (
                <div
                  key={ind.id}
                  className="rounded-3xl bg-slate-950 p-8 border border-slate-800 hover:border-amber-500/40 shadow-xl flex flex-col justify-between space-y-4 transition-all"
                >
                  <div className="space-y-4">
                    <div className="flex items-center justify-between">
                      <div className="w-12 h-12 rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center">
                        <IconComp className="w-6 h-6" />
                      </div>
                      <span className="text-xs font-mono font-bold px-2 py-0.5 rounded bg-slate-900 text-amber-400 border border-slate-800">
                        {ind.code}
                      </span>
                    </div>

                    <h2 className="text-xl font-bold text-white">{ind.name}</h2>
                    <p className="text-slate-400 text-xs leading-relaxed">{ind.description}</p>
                  </div>

                  <div className="pt-4 border-t border-slate-900 text-[11px] text-amber-400 font-semibold flex items-center justify-between">
                    <span>{ind.stats}</span>
                    <Link href="/contact" className="hover:underline">Inquire</Link>
                  </div>
                </div>
              );
            })}
          </div>
        </div>
      </section>

      <IndustryMarquee />
      <FinalCTA />
    </Layout>
  );
}
