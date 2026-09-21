import React from 'react';
import { Link } from '@inertiajs/react';
import { Mail, Phone, MapPin, ArrowRight, MessageSquare } from 'lucide-react';
import { companyData } from '../data/companyData';

export default function Footer() {
  return (
    <footer className="bg-slate-950 text-slate-300 border-t border-slate-900 pt-16 pb-12 relative overflow-hidden">
      {/* PRE-FOOTER BANNER SECTION */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div className="relative rounded-3xl bg-gradient-to-r from-slate-900 via-slate-900/90 to-amber-950/40 p-8 sm:p-12 border border-slate-800/80 shadow-2xl overflow-hidden">
          <div className="absolute top-0 right-0 -mt-12 -mr-12 w-64 h-64 rounded-full bg-amber-500/10 blur-3xl pointer-events-none"></div>
          <div className="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
            <div className="max-w-2xl space-y-3">
              <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/20 text-amber-400 text-xs font-bold uppercase tracking-wider">
                <span className="w-1.5 h-1.5 rounded-full bg-amber-400 animate-ping"></span>
                Ready To Scale Your Team?
              </div>
              <h3 className="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-white tracking-tight">
                Have a hiring or HR requirement?
              </h3>
              <p className="text-slate-400 text-base">
                Let's discuss how Anshivya can support your business with customized recruitment, payroll, and compliance execution.
              </p>
            </div>
            <div className="shrink-0 flex flex-col sm:flex-row gap-3">
              <Link
                href="/contact"
                className="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl text-sm font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 text-slate-950 shadow-xl shadow-orange-950/40 transition-all hover:scale-[1.02] active:scale-[0.98]"
              >
                Start a Conversation
                <ArrowRight className="w-4 h-4" />
              </Link>
            </div>
          </div>
        </div>
      </div>

      {/* FOOTER MAIN GRID */}
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-900">
          
          {/* BRAND COLUMN */}
          <div className="lg:col-span-2 space-y-4">
            <Link href="/" className="inline-flex items-center gap-3">
              <div className="w-9 h-9 rounded-xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center text-slate-950 font-extrabold text-lg">
                A
              </div>
              <span className="text-xl font-extrabold text-white tracking-tight">
                ANSHIVYA <span className="text-xs text-amber-400 font-semibold px-2 py-0.5 rounded bg-amber-500/10 border border-amber-500/20">GROUP</span>
              </span>
            </Link>
            <p className="text-slate-400 text-sm leading-relaxed max-w-sm">
              Empowering People. Accelerating Business. Building Futures.
            </p>
            <p className="text-slate-400 text-xs leading-relaxed max-w-sm">
              {companyData.subTagline}
            </p>
            <div className="pt-2 flex items-center gap-3">
              <a
                href={companyData.contact.linkedin}
                target="_blank"
                rel="noopener noreferrer"
                className="w-9 h-9 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-amber-400 hover:border-amber-500/40 transition-colors"
                aria-label="LinkedIn"
              >
                <svg className="w-4 h-4 fill-current" viewBox="0 0 24 24">
                  <path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.28 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.75M6.46 10.9v8.37H9.25V10.9H6.46M7.86 6.74a1.45 1.45 0 1 0 1.45 1.45 1.45 1.45 0 0 0-1.45-1.45Z"/>
                </svg>
              </a>
              <a
                href={companyData.contact.whatsappUrl}
                target="_blank"
                rel="noopener noreferrer"
                className="w-9 h-9 rounded-lg bg-slate-900 border border-slate-800 flex items-center justify-center text-slate-400 hover:text-emerald-400 hover:border-emerald-500/40 transition-colors"
                aria-label="WhatsApp"
              >
                <MessageSquare className="w-4 h-4" />
              </a>
            </div>
          </div>

          {/* COMPANY COLUMN */}
          <div>
            <h4 className="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">
              Company
            </h4>
            <ul className="space-y-2.5 text-sm">
              <li>
                <Link href="/" className="text-slate-400 hover:text-white transition-colors">Home</Link>
              </li>
              <li>
                <Link href="/about" className="text-slate-400 hover:text-white transition-colors">About Us</Link>
              </li>
              <li>
                <Link href="/industries" className="text-slate-400 hover:text-white transition-colors">Industries</Link>
              </li>
              <li>
                <Link href="/jobs" className="text-slate-400 hover:text-white transition-colors">Job Openings</Link>
              </li>
              <li>
                <Link href="/contact" className="text-slate-400 hover:text-white transition-colors">Contact Us</Link>
              </li>
            </ul>
          </div>

          {/* SERVICES COLUMN */}
          <div>
            <h4 className="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">
              Services
            </h4>
            <ul className="space-y-2.5 text-sm">
              <li>
                <Link href="/services/recruitment" className="text-slate-400 hover:text-amber-400 transition-colors">Recruitment Services</Link>
              </li>
              <li>
                <Link href="/services/payroll" className="text-slate-400 hover:text-amber-400 transition-colors">Payroll Management</Link>
              </li>
              <li>
                <Link href="/services/compliance" className="text-slate-400 hover:text-amber-400 transition-colors">Compliance Solutions</Link>
              </li>
              <li>
                <Link href="/services/hr-consulting" className="text-slate-400 hover:text-amber-400 transition-colors">HR Consulting</Link>
              </li>
              <li>
                <Link href="/services/employee-relations" className="text-slate-400 hover:text-amber-400 transition-colors">Employee Relations</Link>
              </li>
            </ul>
          </div>

          {/* CONTACT COLUMN */}
          <div>
            <h4 className="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">
              Contact Us
            </h4>
            <ul className="space-y-3 text-xs">
              <li className="flex items-start gap-2.5 text-slate-400">
                <Mail className="w-4 h-4 text-amber-500 shrink-0 mt-0.5" />
                <div className="flex flex-col gap-0.5">
                  <a href="mailto:info@anshivya.com" className="hover:text-white transition-colors">info@anshivya.com</a>
                  <a href="mailto:hr@anshivya.com" className="hover:text-white transition-colors">hr@anshivya.com</a>
                </div>
              </li>
              <li className="flex items-start gap-2.5 text-slate-400">
                <Phone className="w-4 h-4 text-amber-500 shrink-0 mt-0.5" />
                <div className="flex flex-col gap-0.5">
                  <a href="tel:+918112825288" className="hover:text-white transition-colors">+91 81128 25288</a>
                  <a href="tel:+916307180489" className="hover:text-white transition-colors">+91 63071 80489</a>
                </div>
              </li>
              <li className="flex items-start gap-2.5 text-slate-400">
                <MapPin className="w-4 h-4 text-amber-500 shrink-0 mt-0.5" />
                <span>Ahmedabad, Gujarat, India</span>
              </li>
            </ul>
          </div>

        </div>

        {/* BOTTOM COPYRIGHT & LEGAL LINKS */}
        <div className="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
          <div>
            &copy; {new Date().getFullYear()} Anshivya Group. All rights reserved.
          </div>
          <div className="flex items-center gap-6">
            <Link href="/privacy" className="hover:text-slate-300 transition-colors">Privacy Policy</Link>
            <Link href="/terms" className="hover:text-slate-300 transition-colors">Terms &amp; Conditions</Link>
          </div>
        </div>
      </div>
    </footer>
  );
}
