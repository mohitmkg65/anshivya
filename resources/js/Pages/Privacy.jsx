import React from 'react';
import Layout from '../Layouts/Layout';

export default function Privacy() {
  return (
    <Layout
      title="Privacy Policy"
      description="Privacy Policy and data handling policies of Anshivya Group."
    >
      <section className="pt-36 pb-20 bg-slate-950 border-b border-slate-900">
        <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
          <h1 className="text-3xl sm:text-4xl font-extrabold text-white">Privacy Policy</h1>
          <p className="text-xs text-slate-400">Last updated: September 2026</p>

          <div className="prose prose-invert max-w-none space-y-4 text-xs text-slate-300 leading-relaxed">
            <h2 className="text-lg font-bold text-white mt-6">1. Information We Collect</h2>
            <p>
              Anshivya Group collects personal and corporate information provided voluntarily through our contact forms, job application forms, and business communications. This may include full names, work email addresses, phone numbers, company information, and submitted resume documents.
            </p>

            <h2 className="text-lg font-bold text-white mt-6">2. Use of Information</h2>
            <p>
              Information collected is used solely for evaluating candidate applications, responding to corporate HR and recruitment inquiries, delivering contracted payroll and compliance services, and maintaining business relationships.
            </p>

            <h2 className="text-lg font-bold text-white mt-6">3. Data Security &amp; Sharing</h2>
            <p>
              We implement industry-standard administrative, physical, and technical safeguards to protect your personal and corporate data. We do not sell, rent, or lease your personal information to third parties.
            </p>

            <h2 className="text-lg font-bold text-white mt-6">4. Contact Information</h2>
            <p>
              For questions regarding this Privacy Policy or your data, please contact us at <a href="mailto:info@anshivya.com" className="text-amber-400 underline">info@anshivya.com</a>.
            </p>
          </div>
        </div>
      </section>
    </Layout>
  );
}
