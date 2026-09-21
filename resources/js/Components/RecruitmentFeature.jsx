import React from 'react';
import { Link } from '@inertiajs/react';
import { ArrowUpRight, Search, FileText, Settings2 } from 'lucide-react';

export default function RecruitmentFeature() {
  const cards = [
    {
      num: "01",
      icon: Search,
      title: "Tell Us About Your Hiring Needs",
      desc: "Share your candidate requirements, technical profiles, and team capacity goals directly with our sourcing team.",
      href: "/contact",
      badge: "Employer Action"
    },
    {
      num: "02",
      icon: FileText,
      title: "Understand Our Hiring Process",
      desc: "Learn how we source, assess, background-check, and present candidates tailored to your sector standards.",
      href: "/services/recruitment",
      badge: "Recruitment Workflow"
    },
    {
      num: "03",
      icon: Settings2,
      title: "Know More About Our Services",
      desc: "Explore our full operational suite across recruitment, payroll management, HRMS, and statutory compliance.",
      href: "/services/payroll",
      badge: "Full Service Suite"
    }
  ];

  return (
    <section className="py-24 bg-slate-900/50 border-y border-slate-800/80 relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* HEADER */}
        <div className="max-w-3xl mb-16 space-y-3">
          <div className="text-xs font-bold uppercase tracking-widest text-amber-400">
            FIND THE EMPLOYEES
          </div>
          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
            Your growth deserves people who fit — we make it happen.
          </h2>
          <p className="text-slate-400 text-base leading-relaxed">
            Anshivya Group supports businesses with recruitment and talent acquisition across diverse industrial sectors. We combine sector knowledge, active sourcing pipelines, and rigorous screening to present qualified talent.
          </p>
        </div>

        {/* 3 INTERACTIVE CTA CARDS */}
        <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
          {cards.map((card) => {
            const IconComp = card.icon;
            return (
              <Link
                key={card.num}
                href={card.href}
                className="group relative rounded-3xl bg-slate-950 p-8 border border-slate-800 hover:border-amber-500/50 shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between"
              >
                <div>
                  <div className="flex items-center justify-between mb-6">
                    <div className="w-12 h-12 rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors">
                      <IconComp className="w-6 h-6" />
                    </div>
                    <span className="text-xs font-mono text-slate-400 font-bold">
                      {card.num}
                    </span>
                  </div>

                  <span className="inline-block text-[11px] font-bold uppercase tracking-wider text-amber-400 mb-2">
                    {card.badge}
                  </span>

                  <h3 className="text-xl font-bold text-white mb-3 group-hover:text-amber-300 transition-colors">
                    {card.title}
                  </h3>

                  <p className="text-slate-400 text-xs leading-relaxed mb-8">
                    {card.desc}
                  </p>
                </div>

                <div className="pt-4 border-t border-slate-900 flex items-center justify-between text-xs font-bold text-slate-300 group-hover:text-amber-400 transition-colors">
                  <span>Explore Now</span>
                  <ArrowUpRight className="w-4 h-4 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform" />
                </div>
              </Link>
            );
          })}
        </div>

      </div>
    </section>
  );
}
