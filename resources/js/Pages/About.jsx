import React from 'react';
import Layout from '../Layouts/Layout';
import TrustSnapshot from '../Components/TrustSnapshot';
import LeadershipSection from '../Components/LeadershipSection';
import FinalCTA from '../Components/FinalCTA';
import { Target, Eye, ShieldCheck, Users, ArrowRight } from 'lucide-react';
import { companyData } from '../data/companyData';
import { Link } from '@inertiajs/react';

export default function About() {
  return (
    <Layout
      title="About Us — Corporate HR Partner"
      description="Learn about Anshivya Group's mission, leadership, core expertise, and client commitment."
    >
      {/* ABOUT HERO */}
      <section className="pt-36 pb-20 bg-slate-950 border-b border-slate-900 relative overflow-hidden">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="max-w-3xl space-y-4">
            <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-widest">
              ABOUT ANSHIVYA GROUP
            </div>
            <h1 className="text-4xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-tight">
              Building Futures,<br />
              <span className="bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent">
                Beyond Boundaries.
              </span>
            </h1>
            <p className="text-slate-300 text-lg leading-relaxed">
              {companyData.tagline} {companyData.subTagline}
            </p>
          </div>
        </div>
      </section>

      {/* VISION & MISSION SECTION */}
      <section className="py-24 bg-slate-900/40 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            {/* VISION */}
            <div className="rounded-3xl bg-slate-950 p-8 sm:p-10 border border-slate-800 space-y-4">
              <div className="w-12 h-12 rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center">
                <Eye className="w-6 h-6" />
              </div>
              <h2 className="text-2xl font-bold text-white">Our Vision</h2>
              <p className="text-slate-300 text-sm leading-relaxed">
                To be the preferred corporate HR and recruitment solutions partner for expanding enterprises across India and global markets, recognized for domain precision, operational clarity, and ethical workforce practices.
              </p>
            </div>

            {/* MISSION */}
            <div className="rounded-3xl bg-slate-950 p-8 sm:p-10 border border-slate-800 space-y-4">
              <div className="w-12 h-12 rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center">
                <Target className="w-6 h-6" />
              </div>
              <h2 className="text-2xl font-bold text-white">Our Mission</h2>
              <p className="text-slate-300 text-sm leading-relaxed">
                To empower businesses with high-fitting talent, streamlined payroll management, and sound HR compliance frameworks, while providing candidates with transparent, value-aligned career growth opportunities.
              </p>
            </div>

          </div>
        </div>
      </section>

      <TrustSnapshot />
      <LeadershipSection />

      {/* CORE EXPERTISE SUMMARY */}
      <section className="py-24 bg-slate-950">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="rounded-3xl bg-gradient-to-r from-slate-900 to-slate-950 p-8 sm:p-12 border border-slate-800 space-y-8">
            <div className="max-w-2xl">
              <span className="text-xs font-bold uppercase tracking-widest text-amber-400">
                CAPABILITY OVERVIEW
              </span>
              <h3 className="text-3xl font-extrabold text-white tracking-tight mt-1">
                Multi-Faceted Business Capabilities
              </h3>
            </div>

            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-slate-300 text-xs">
              <div className="p-4 rounded-xl bg-slate-950 border border-slate-800 space-y-2">
                <div className="font-bold text-white text-sm">Recruitment</div>
                <p className="text-slate-400">Targeted lateral &amp; executive hiring across Automobile, Construction, Real Estate, Media &amp; Industrial sectors.</p>
              </div>
              <div className="p-4 rounded-xl bg-slate-950 border border-slate-800 space-y-2">
                <div className="font-bold text-white text-sm">Payroll</div>
                <p className="text-slate-400">Structured monthly workflows, clear reporting breakdown, attendance reconciliation, and HRMS setup.</p>
              </div>
              <div className="p-4 rounded-xl bg-slate-950 border border-slate-800 space-y-2">
                <div className="font-bold text-white text-sm">Compliance</div>
                <p className="text-slate-400">HR policy audit, handbook development, and statutory framework alignment for corporate governance.</p>
              </div>
              <div className="p-4 rounded-xl bg-slate-950 border border-slate-800 space-y-2">
                <div className="font-bold text-white text-sm">Consulting</div>
                <p className="text-slate-400">Strategic organizational restructuring, appraisal systems, and retention strategy advisory.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <FinalCTA />
    </Layout>
  );
}
