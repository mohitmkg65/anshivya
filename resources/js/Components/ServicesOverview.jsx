import React from 'react';
import { Link } from '@inertiajs/react';
import { Users, Wallet, ShieldCheck, Briefcase, FileSpreadsheet, ArrowRight } from 'lucide-react';
import { servicesData } from '../data/servicesData';

export default function ServicesOverview() {
  const serviceIcons = {
    recruitment: Users,
    payroll: Wallet,
    compliance: ShieldCheck,
    'hr-consulting': Briefcase,
    'employee-relations': FileSpreadsheet
  };

  return (
    <section className="py-24 bg-slate-900/40 border-y border-slate-800/80 relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* HEADER */}
        <div className="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
          <div className="max-w-2xl space-y-3">
            <div className="text-xs font-bold uppercase tracking-widest text-amber-400">
              OUR SERVICES
            </div>
            <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
              HR Solutions Designed Around Your Business.
            </h2>
            <p className="text-slate-400 text-base">
              Comprehensive human resource practices focused on operational accuracy, talent alignment, and statutory governance.
            </p>
          </div>

          <Link
            href="/contact"
            className="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-400 hover:text-amber-300 group"
          >
            Custom HR Requirement? Talk to us
            <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
          </Link>
        </div>

        {/* SERVICES GRID */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          {servicesData.map((svc) => {
            const IconComp = serviceIcons[svc.id] || Users;
            return (
              <div
                key={svc.id}
                className="group relative rounded-3xl bg-slate-950 p-8 border border-slate-800 hover:border-amber-500/50 shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between"
              >
                <div>
                  <div className="flex items-center justify-between mb-6">
                    <div className="w-12 h-12 rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                      <IconComp className="w-6 h-6" />
                    </div>
                    <span className="text-xl font-black font-mono text-slate-700 group-hover:text-amber-400 transition-colors">
                      {svc.number}
                    </span>
                  </div>

                  <h3 className="text-xl font-bold text-white mb-3 group-hover:text-amber-300 transition-colors">
                    {svc.title}
                  </h3>

                  <p className="text-slate-400 text-xs leading-relaxed mb-6">
                    {svc.shortDesc}
                  </p>

                  {/* MINI FEATURES LIST */}
                  <div className="space-y-1.5 mb-8">
                    {svc.features.slice(0, 2).map((feat, i) => (
                      <div key={i} className="text-[11px] text-slate-300 flex items-center gap-2">
                        <span className="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                        <span>{feat}</span>
                      </div>
                    ))}
                  </div>
                </div>

                <Link
                  href={`/services/${svc.slug}`}
                  className="inline-flex items-center justify-between w-full pt-4 border-t border-slate-900 text-xs font-bold uppercase tracking-wider text-slate-300 group-hover:text-amber-400 transition-colors"
                >
                  <span>Explore Service</span>
                  <ArrowRight className="w-4 h-4 group-hover:translate-x-1 transition-transform" />
                </Link>
              </div>
            );
          })}
        </div>

      </div>
    </section>
  );
}
