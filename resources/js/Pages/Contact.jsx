import React from 'react';
import Layout from '../Layouts/Layout';
import ContactForm from '../Components/ContactForm';
import { PhoneCall } from 'lucide-react';

export default function Contact() {
  return (
    <Layout
      title="Contact Us — HR & Hiring Consultation"
      description="Connect with Anshivya Group for corporate recruitment, payroll management, statutory compliance, and strategic HR consulting."
    >
      <section className="pt-36 pb-16 bg-slate-950 border-b border-slate-900 relative">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div className="max-w-3xl space-y-4">
            <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-bold uppercase tracking-widest">
              <PhoneCall className="w-3.5 h-3.5" />
              GET IN TOUCH
            </div>
            <h1 className="text-4xl sm:text-5xl font-black text-white tracking-tight leading-tight">
              Let's Talk About Your Hiring &amp; HR Needs.
            </h1>
            <p className="text-slate-300 text-lg leading-relaxed">
              Tell us about your team capacity requirements or operational goals. Our team is ready to discuss how Anshivya Group can partner with your business.
            </p>
          </div>
        </div>
      </section>

      <section className="py-24 bg-slate-900/40">
        <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <ContactForm />
        </div>
      </section>
    </Layout>
  );
}
