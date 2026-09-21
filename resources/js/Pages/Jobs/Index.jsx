import React from 'react';
import Layout from '../../Layouts/Layout';
import JobBoard from '../../Components/JobBoard';
import FinalCTA from '../../Components/FinalCTA';
import { Briefcase } from 'lucide-react';

export default function JobsIndex() {
  return (
    <Layout
      title="Job Openings & Career Opportunities"
      description="Explore current career opportunities and connect with relevant roles across corporate and industrial sectors with Anshivya Group."
    >
      <section className="pt-36 pb-16 bg-slate-950 border-b border-slate-900 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="max-w-3xl space-y-4">
            <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 text-xs font-bold uppercase tracking-widest">
              <Briefcase className="w-3.5 h-3.5" />
              CAREERS &amp; TALENT OPPORTUNITIES
            </div>
            <h1 className="text-4xl sm:text-5xl font-black text-white tracking-tight leading-tight">
              Find Opportunities Built Around Your Potential.
            </h1>
            <p className="text-slate-300 text-lg leading-relaxed">
              Explore career opportunities and connect with relevant roles across corporate HR, recruitment, operations, and industrial sectors.
            </p>
          </div>
        </div>
      </section>

      <section className="py-20 bg-slate-900/40">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <JobBoard />
        </div>
      </section>

      <FinalCTA />
    </Layout>
  );
}
