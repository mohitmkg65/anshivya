import React from 'react';
import { UserCheck, CheckCircle2, Award, Briefcase } from 'lucide-react';
import { leadershipData } from '../data/leadershipData';

export default function LeadershipSection() {
  const { spotlight } = leadershipData;

  return (
    <section className="py-24 bg-slate-900/40 border-b border-slate-800/80 relative">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* HEADER */}
        <div className="max-w-3xl mb-16 space-y-3">
          <div className="text-xs font-bold uppercase tracking-widest text-amber-400">
            LEADERSHIP
          </div>
          <h2 className="text-3xl sm:text-4xl font-extrabold text-white tracking-tight">
            {leadershipData.sectionHeadline}
          </h2>
          <p className="text-slate-400 text-base">
            {leadershipData.sectionSub}
          </p>
        </div>

        {/* TWO EXECUTIVE LEADERSHIP CARDS */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
          {leadershipData.executives.map((exec) => (
            <div
              key={exec.id}
              className="rounded-3xl bg-slate-950 p-8 border border-slate-800 shadow-xl flex items-start gap-6 hover:border-amber-500/40 transition-all duration-300"
            >
              <div className="w-16 h-16 rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center shrink-0">
                <UserCheck className="w-8 h-8" />
              </div>
              <div>
                <span className="text-[11px] font-bold uppercase tracking-widest text-amber-400">
                  {exec.role}
                </span>
                <h3 className="text-2xl font-extrabold text-white mt-1 mb-2">
                  {exec.name}
                </h3>
                <p className="text-slate-400 text-xs leading-relaxed">
                  {exec.bio}
                </p>
              </div>
            </div>
          ))}
        </div>

        {/* LARGER SPOTLIGHT FOR SHIVAM PAL */}
        <div className="rounded-3xl bg-gradient-to-r from-slate-950 via-slate-900 to-amber-950/30 p-8 sm:p-12 border border-slate-800 shadow-2xl relative overflow-hidden">
          <div className="absolute top-0 right-0 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

          <div className="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <div className="lg:col-span-7 space-y-4">
              <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-wider">
                <Award className="w-3.5 h-3.5" />
                EXECUTIVE SPOTLIGHT
              </div>

              <h3 className="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                {spotlight.headline}
              </h3>

              <div className="text-lg font-bold text-amber-300">
                {spotlight.leaderName} — <span className="text-slate-300 text-sm font-medium">{spotlight.title}</span>
              </div>

              <p className="text-slate-300 text-sm leading-relaxed max-w-2xl">
                {spotlight.summary} With comprehensive oversight across recruitment operations, payroll workflows, statutory compliance, and strategic HR consulting, he ensures client initiatives yield tangible operational value.
              </p>
            </div>

            <div className="lg:col-span-5 bg-slate-950/80 backdrop-blur-md p-6 rounded-2xl border border-slate-800/80 space-y-4">
              <div className="text-xs font-bold uppercase tracking-widest text-slate-300 flex items-center gap-2 border-b border-slate-800 pb-3">
                <Briefcase className="w-4 h-4 text-amber-400" />
                Core Expertise &amp; Focus
              </div>

              <div className="space-y-2.5">
                {spotlight.coreExpertise.map((item, idx) => (
                  <div key={idx} className="flex items-center gap-3 text-xs text-slate-200">
                    <CheckCircle2 className="w-4 h-4 text-amber-400 shrink-0" />
                    <span>{item}</span>
                  </div>
                ))}
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
  );
}
