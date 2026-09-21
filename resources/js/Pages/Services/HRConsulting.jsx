import React from 'react';
import Layout from '../../Layouts/Layout';
import FinalCTA from '../../Components/FinalCTA';
import { servicesData } from '../../data/servicesData';
import { Link } from '@inertiajs/react';
import { Briefcase, AlertTriangle, ArrowRight, HelpCircle } from 'lucide-react';

export default function HRConsulting() {
  const service = servicesData.find(s => s.id === 'hr-consulting');

  return (
    <Layout
      title="Strategic HR Consulting & Advisory"
      description="Strategic organizational design, performance management systems, and people-centric growth strategies."
    >
      <section className="pt-36 pb-20 bg-slate-950 border-b border-slate-900 relative overflow-hidden">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="max-w-3xl space-y-4">
            <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-widest">
              {service.heroEyebrow}
            </div>
            <h1 className="text-4xl sm:text-5xl font-black text-white tracking-tight leading-tight">
              {service.heroHeadline}
            </h1>
            <p className="text-slate-300 text-lg leading-relaxed">
              {service.description}
            </p>
            <div className="pt-2">
              <Link
                href="/contact"
                className="inline-flex items-center gap-2 px-7 py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-lg"
              >
                Schedule HR Advisory Session
                <ArrowRight className="w-4 h-4" />
              </Link>
            </div>
          </div>
        </div>
      </section>

      <section className="py-20 bg-slate-900/40 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="max-w-2xl mb-12">
            <span className="text-xs font-bold uppercase tracking-widest text-amber-400">ORGANIZATIONAL BOTTLENECKS</span>
            <h2 className="text-3xl font-extrabold text-white tracking-tight mt-1">
              Growth Challenges We Resolve
            </h2>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-3 gap-6">
            {service.problemsSolved.map((prob, idx) => (
              <div key={idx} className="p-6 rounded-2xl bg-slate-950 border border-slate-800 space-y-3">
                <AlertTriangle className="w-6 h-6 text-amber-400" />
                <p className="text-slate-300 text-xs leading-relaxed">{prob}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className="py-24 bg-slate-950">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="max-w-2xl mb-16">
            <span className="text-xs font-bold uppercase tracking-widest text-amber-400">CONSULTING BLUEPRINT</span>
            <h2 className="text-3xl font-extrabold text-white tracking-tight mt-1">
              4-Phase Strategic Execution
            </h2>
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            {service.process.map((p) => (
              <div key={p.step} className="p-6 rounded-2xl bg-slate-900 border border-slate-800 space-y-3">
                <div className="text-3xl font-black text-amber-400 font-mono">{p.step}</div>
                <h3 className="text-lg font-bold text-white">{p.title}</h3>
                <p className="text-slate-400 text-xs leading-relaxed">{p.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      <FinalCTA />
    </Layout>
  );
}
