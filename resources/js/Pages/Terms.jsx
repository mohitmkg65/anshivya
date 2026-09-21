import React from 'react';
import Layout from '../Layouts/Layout';

export default function Terms() {
  return (
    <Layout
      title="Terms & Conditions"
      description="Terms and Conditions governing the use of Anshivya Group's corporate website."
    >
      <section className="pt-36 pb-20 bg-slate-950 border-b border-slate-900">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
          <h1 className="text-3xl sm:text-4xl font-extrabold text-white">Terms &amp; Conditions</h1>
          <p className="text-xs text-slate-400">Last updated: September 2026</p>

          <div className="prose prose-invert max-w-none space-y-4 text-xs text-slate-300 leading-relaxed">
            <h2 className="text-lg font-bold text-white mt-6">1. Acceptance of Terms</h2>
            <p>
              By accessing and using https://anshivya.com, you agree to comply with and be bound by these Terms &amp; Conditions.
            </p>

            <h2 className="text-lg font-bold text-white mt-6">2. Corporate HR &amp; Recruitment Services</h2>
            <p>
              All service descriptions, recruitment frameworks, payroll workflows, and compliance advisory provided on this website are for informational purposes. Formal engagements are governed by separate commercial agreements executed between Anshivya Group and the client organization.
            </p>

            <h2 className="text-lg font-bold text-white mt-6">3. Intellectual Property</h2>
            <p>
              All branding elements, content, text, designs, logos, and graphics are the exclusive property of Anshivya Group.
            </p>
          </div>
        </div>
      </section>
    </Layout>
  );
}
