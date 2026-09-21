import React, { useState } from 'react';
import { Send, CheckCircle2, AlertCircle, Loader2, Mail, Phone, MapPin, MessageSquare } from 'lucide-react';
import { companyData } from '../data/companyData';

export default function ContactForm() {
  const [formData, setFormData] = useState({
    full_name: '',
    company_name: '',
    work_email: '',
    phone_number: '',
    service_required: 'Recruitment',
    employee_count: '',
    message: '',
    website_hp: '' // Honeypot spam protection
  });

  const [errors, setErrors] = useState({});
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [submitStatus, setSubmitStatus] = useState(null); // 'success' | 'error' | null
  const [statusMessage, setStatusMessage] = useState('');

  const validate = () => {
    const errs = {};
    if (!formData.full_name.trim()) errs.full_name = 'Full name is required';
    if (!formData.company_name.trim()) errs.company_name = 'Company name is required';
    if (!formData.work_email.trim()) {
      errs.work_email = 'Work email is required';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(formData.work_email)) {
      errs.work_email = 'Please enter a valid work email address';
    }
    if (!formData.phone_number.trim()) {
      errs.phone_number = 'Phone number is required';
    } else if (!/^[0-9+\-\s()]{7,20}$/.test(formData.phone_number)) {
      errs.phone_number = 'Please enter a valid phone number';
    }
    if (!formData.message.trim()) errs.message = 'Please provide details about your requirement';

    setErrors(errs);
    return Object.keys(errs).length === 0;
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    setSubmitStatus(null);
    setStatusMessage('');

    // Spam honeypot check
    if (formData.website_hp) {
      setSubmitStatus('success');
      setStatusMessage('Thank you! Your enquiry has been received.');
      return;
    }

    if (!validate()) return;

    setIsSubmitting(true);

    try {
      // Get CSRF token from document head or cookies if present
      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

      const response = await fetch('/api/contact', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'Accept': 'application/json',
          'X-CSRF-TOKEN': csrfToken
        },
        body: JSON.stringify(formData)
      });

      const result = await response.json();

      if (response.ok && result.success) {
        setSubmitStatus('success');
        setStatusMessage(result.message || 'Thank you! Your enquiry has been received. An HR expert from Anshivya will contact you shortly.');
        setFormData({
          full_name: '',
          company_name: '',
          work_email: '',
          phone_number: '',
          service_required: 'Recruitment',
          employee_count: '',
          message: '',
          website_hp: ''
        });
      } else {
        setSubmitStatus('error');
        if (result.errors) {
          setErrors(result.errors);
          setStatusMessage('Please correct the highlighted fields in the form.');
        } else {
          setStatusMessage(result.message || 'Failed to send your enquiry. Please try again or contact us directly via email.');
        }
      }
    } catch (err) {
      setSubmitStatus('error');
      setStatusMessage('Network error occurred. Please try again or connect via WhatsApp.');
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    <div className="grid grid-cols-1 lg:grid-cols-12 gap-12">
      
      {/* FORM COLUMN (LEFT) */}
      <div className="lg:col-span-7 bg-slate-900/90 border border-slate-800 rounded-3xl p-6 sm:p-10 shadow-2xl relative">
        
        {submitStatus === 'success' ? (
          <div className="py-12 text-center space-y-4 animate-in fade-in duration-300">
            <div className="w-16 h-16 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-400 flex items-center justify-center mx-auto">
              <CheckCircle2 className="w-8 h-8" />
            </div>
            <h3 className="text-2xl font-extrabold text-white">Enquiry Received</h3>
            <p className="text-slate-300 text-sm max-w-md mx-auto">
              {statusMessage}
            </p>
            <button
              type="button"
              onClick={() => setSubmitStatus(null)}
              className="mt-4 px-6 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider transition-colors"
            >
              Submit Another Request
            </button>
          </div>
        ) : (
          <form onSubmit={handleSubmit} className="space-y-6" noValidate>
            
            {/* HONEYPOT INVISIBLE SPAM FIELD */}
            <input
              type="text"
              name="website_hp"
              value={formData.website_hp}
              onChange={(e) => setFormData({ ...formData, website_hp: e.target.value })}
              className="hidden"
              tabIndex={-1}
              autoComplete="off"
            />

            {submitStatus === 'error' && (
              <div className="p-4 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 text-xs flex items-center gap-3">
                <AlertCircle className="w-5 h-5 shrink-0" />
                <span>{statusMessage}</span>
              </div>
            )}

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
              {/* FULL NAME */}
              <div>
                <label htmlFor="full_name" className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                  Full Name <span className="text-amber-400">*</span>
                </label>
                <input
                  type="text"
                  id="full_name"
                  value={formData.full_name}
                  onChange={(e) => setFormData({ ...formData, full_name: e.target.value })}
                  placeholder="e.g. Rahul Sharma"
                  className={`w-full px-4 py-3 rounded-xl bg-slate-950 border ${
                    errors.full_name ? 'border-red-500/80 focus:ring-red-500' : 'border-slate-800 focus:border-amber-500 focus:ring-amber-500'
                  } text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-1 transition-all`}
                  required
                />
                {errors.full_name && <p className="text-red-400 text-[11px] mt-1">{errors.full_name}</p>}
              </div>

              {/* COMPANY NAME */}
              <div>
                <label htmlFor="company_name" className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                  Company Name <span className="text-amber-400">*</span>
                </label>
                <input
                  type="text"
                  id="company_name"
                  value={formData.company_name}
                  onChange={(e) => setFormData({ ...formData, company_name: e.target.value })}
                  placeholder="e.g. Apex Manufacturing"
                  className={`w-full px-4 py-3 rounded-xl bg-slate-950 border ${
                    errors.company_name ? 'border-red-500/80 focus:ring-red-500' : 'border-slate-800 focus:border-amber-500 focus:ring-amber-500'
                  } text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-1 transition-all`}
                  required
                />
                {errors.company_name && <p className="text-red-400 text-[11px] mt-1">{errors.company_name}</p>}
              </div>
            </div>

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
              {/* WORK EMAIL */}
              <div>
                <label htmlFor="work_email" className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                  Work Email <span className="text-amber-400">*</span>
                </label>
                <input
                  type="email"
                  id="work_email"
                  value={formData.work_email}
                  onChange={(e) => setFormData({ ...formData, work_email: e.target.value })}
                  placeholder="name@company.com"
                  className={`w-full px-4 py-3 rounded-xl bg-slate-950 border ${
                    errors.work_email ? 'border-red-500/80 focus:ring-red-500' : 'border-slate-800 focus:border-amber-500 focus:ring-amber-500'
                  } text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-1 transition-all`}
                  required
                />
                {errors.work_email && <p className="text-red-400 text-[11px] mt-1">{errors.work_email}</p>}
              </div>

              {/* PHONE NUMBER */}
              <div>
                <label htmlFor="phone_number" className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                  Phone Number <span className="text-amber-400">*</span>
                </label>
                <input
                  type="tel"
                  id="phone_number"
                  value={formData.phone_number}
                  onChange={(e) => setFormData({ ...formData, phone_number: e.target.value })}
                  placeholder="+91 98765 43210"
                  className={`w-full px-4 py-3 rounded-xl bg-slate-950 border ${
                    errors.phone_number ? 'border-red-500/80 focus:ring-red-500' : 'border-slate-800 focus:border-amber-500 focus:ring-amber-500'
                  } text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-1 transition-all`}
                  required
                />
                {errors.phone_number && <p className="text-red-400 text-[11px] mt-1">{errors.phone_number}</p>}
              </div>
            </div>

            <div className="grid grid-cols-1 sm:grid-cols-2 gap-6">
              {/* SERVICE REQUIRED DROPDOWN */}
              <div>
                <label htmlFor="service_required" className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                  Service Required
                </label>
                <select
                  id="service_required"
                  value={formData.service_required}
                  onChange={(e) => setFormData({ ...formData, service_required: e.target.value })}
                  className="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-all"
                >
                  <option value="Recruitment">Recruitment &amp; Talent Acquisition</option>
                  <option value="Payroll Management">Payroll Management</option>
                  <option value="Compliance Solutions">Compliance Solutions</option>
                  <option value="HR Consulting">Strategic HR Consulting</option>
                  <option value="Employee Relations">Employee Relations &amp; Engagement</option>
                  <option value="Other">Other Operational Needs</option>
                </select>
              </div>

              {/* NUMBER OF POSITIONS / EMPLOYEES */}
              <div>
                <label htmlFor="employee_count" className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                  Number of Positions / Employees
                </label>
                <input
                  type="text"
                  id="employee_count"
                  value={formData.employee_count}
                  onChange={(e) => setFormData({ ...formData, employee_count: e.target.value })}
                  placeholder="e.g. 1-10 hires or 50+ staff"
                  className="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500 transition-all"
                />
              </div>
            </div>

            {/* MESSAGE / REQUIREMENT DETAILS */}
            <div>
              <label htmlFor="message" className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                Message &amp; Hiring Requirements <span className="text-amber-400">*</span>
              </label>
              <textarea
                id="message"
                rows={4}
                value={formData.message}
                onChange={(e) => setFormData({ ...formData, message: e.target.value })}
                placeholder="Describe your current HR challenge, positions needed, timeline, or operational goals..."
                className={`w-full px-4 py-3 rounded-xl bg-slate-950 border ${
                  errors.message ? 'border-red-500/80 focus:ring-red-500' : 'border-slate-800 focus:border-amber-500 focus:ring-amber-500'
                } text-white placeholder-slate-500 text-sm focus:outline-none focus:ring-1 transition-all resize-y`}
                required
              ></textarea>
              {errors.message && <p className="text-red-400 text-[11px] mt-1">{errors.message}</p>}
            </div>

            {/* SUBMIT BUTTON */}
            <button
              type="submit"
              disabled={isSubmitting}
              className="w-full py-4 rounded-xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 via-orange-500 to-amber-600 hover:from-amber-400 hover:to-orange-500 text-slate-950 shadow-xl shadow-orange-950/40 hover:scale-[1.01] active:scale-[0.99] transition-all flex items-center justify-center gap-2 disabled:opacity-50"
            >
              {isSubmitting ? (
                <>
                  <Loader2 className="w-4 h-4 animate-spin" />
                  Submitting Enquiry...
                </>
              ) : (
                <>
                  <Send className="w-4 h-4" />
                  Submit Enquiry
                </>
              )}
            </button>
          </form>
        )}
      </div>

      {/* CONTACT INFO COLUMN (RIGHT) */}
      <div className="lg:col-span-5 space-y-8 flex flex-col justify-between">
        
        <div className="space-y-6">
          <div className="p-8 rounded-3xl bg-slate-900/60 border border-slate-800 space-y-6">
            <h3 className="text-xl font-bold text-white border-b border-slate-800 pb-4">
              Direct Contact Details
            </h3>

            <div className="space-y-4 text-sm">
              <div className="flex items-start gap-4">
                <div className="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center shrink-0">
                  <Mail className="w-5 h-5" />
                </div>
                <div>
                  <div className="text-xs font-bold uppercase tracking-wider text-slate-400">Email Us</div>
                  <a href="mailto:info@anshivya.com" className="text-white hover:text-amber-400 font-medium block">info@anshivya.com</a>
                  <a href="mailto:hr@anshivya.com" className="text-slate-300 hover:text-amber-400 text-xs block">hr@anshivya.com</a>
                </div>
              </div>

              <div className="flex items-start gap-4">
                <div className="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center shrink-0">
                  <Phone className="w-5 h-5" />
                </div>
                <div>
                  <div className="text-xs font-bold uppercase tracking-wider text-slate-400">Call Us</div>
                  <a href="tel:+918112825288" className="text-white hover:text-amber-400 font-medium block">+91 81128 25288</a>
                  <a href="tel:+916307180489" className="text-slate-300 hover:text-amber-400 text-xs block">+91 63071 80489</a>
                </div>
              </div>

              <div className="flex items-start gap-4">
                <div className="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center shrink-0">
                  <MapPin className="w-5 h-5" />
                </div>
                <div>
                  <div className="text-xs font-bold uppercase tracking-wider text-slate-400">Location</div>
                  <div className="text-white font-medium">Ahmedabad, Gujarat, India</div>
                  <div className="text-xs text-slate-400">Serving clients across India &amp; global networks</div>
                </div>
              </div>
            </div>
          </div>

          {/* INSTANT WHATSAPP CTA BOX */}
          <div className="p-8 rounded-3xl bg-gradient-to-r from-emerald-950/40 via-slate-900 to-slate-900 border border-emerald-500/30 space-y-4">
            <div className="flex items-center gap-3">
              <div className="w-10 h-10 rounded-xl bg-emerald-500 text-slate-950 flex items-center justify-center font-bold">
                <MessageSquare className="w-5 h-5" />
              </div>
              <div>
                <h4 className="text-base font-bold text-white">Prefer Instant Chat?</h4>
                <p className="text-xs text-slate-400">Connect directly on WhatsApp business.</p>
              </div>
            </div>

            <a
              href={companyData.contact.whatsappUrl}
              target="_blank"
              rel="noopener noreferrer"
              className="inline-flex items-center justify-center gap-2 w-full py-3.5 px-4 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 text-xs font-bold uppercase tracking-wider transition-colors shadow-lg"
            >
              Start WhatsApp Chat Now
            </a>
          </div>
        </div>

      </div>
    </div>
  );
}
