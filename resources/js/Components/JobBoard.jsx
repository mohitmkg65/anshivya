import React, { useState, useMemo } from 'react';
import { Search, MapPin, Briefcase, Calendar, Clock, Filter, X, Upload, CheckCircle2, AlertCircle, Loader2, ArrowRight } from 'lucide-react';
import { jobsData, departmentsList, locationsList, employmentTypesList } from '../data/jobsData';

export default function JobBoard() {
  const [searchTerm, setSearchTerm] = useState('');
  const [selectedDept, setSelectedDept] = useState('All Departments');
  const [selectedLoc, setSelectedLoc] = useState('All Locations');
  const [selectedType, setSelectedType] = useState('All Types');

  const [activeModalJob, setActiveModalJob] = useState(null);
  const [showApplyForm, setShowApplyForm] = useState(false);

  // Application form state
  const [applicantData, setApplicantData] = useState({
    candidate_name: '',
    candidate_email: '',
    candidate_phone: '',
    cover_message: '',
    resume_file: null
  });

  const [errors, setErrors] = useState({});
  const [isSubmitting, setIsSubmitting] = useState(false);
  const [applySuccess, setApplySuccess] = useState(false);
  const [statusMessage, setStatusMessage] = useState('');

  // Filter logic
  const filteredJobs = useMemo(() => {
    return jobsData.filter((job) => {
      const matchesSearch =
        job.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
        job.shortDescription.toLowerCase().includes(searchTerm.toLowerCase()) ||
        job.department.toLowerCase().includes(searchTerm.toLowerCase());

      const matchesDept = selectedDept === 'All Departments' || job.department === selectedDept;
      const matchesLoc = selectedLoc === 'All Locations' || job.location.includes(selectedLoc.replace('All Locations', ''));
      const matchesType = selectedType === 'All Types' || job.type === selectedType;

      return matchesSearch && matchesDept && matchesLoc && matchesType;
    });
  }, [searchTerm, selectedDept, selectedLoc, selectedType]);

  const handleApplySubmit = async (e) => {
    e.preventDefault();
    const errs = {};

    if (!applicantData.candidate_name.trim()) errs.candidate_name = 'Name is required';
    if (!applicantData.candidate_email.trim()) {
      errs.candidate_email = 'Email is required';
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(applicantData.candidate_email)) {
      errs.candidate_email = 'Valid email is required';
    }
    if (!applicantData.candidate_phone.trim()) errs.candidate_phone = 'Phone number is required';
    if (!applicantData.resume_file) {
      errs.resume_file = 'Resume file (PDF/DOCX) is required';
    } else {
      const allowed = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
      if (!allowed.includes(applicantData.resume_file.type)) {
        errs.resume_file = 'File must be PDF or DOCX document';
      } else if (applicantData.resume_file.size > 5 * 1024 * 1024) {
        errs.resume_file = 'File size must be under 5MB';
      }
    }

    setErrors(errs);
    if (Object.keys(errs).length > 0) return;

    setIsSubmitting(true);

    try {
      const formData = new FormData();
      formData.append('job_slug', activeModalJob.slug);
      formData.append('job_title', activeModalJob.title);
      formData.append('candidate_name', applicantData.candidate_name);
      formData.append('candidate_email', applicantData.candidate_email);
      formData.append('candidate_phone', applicantData.candidate_phone);
      formData.append('cover_message', applicantData.cover_message);
      formData.append('resume', applicantData.resume_file);

      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

      const res = await fetch('/api/jobs/apply', {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': csrfToken
        },
        body: formData
      });

      const resData = await res.json();

      if (res.ok && resData.success) {
        setApplySuccess(true);
        setStatusMessage(resData.message || 'Your application has been submitted successfully.');
      } else {
        setStatusMessage(resData.message || 'Error submitting application. Please try again.');
      }
    } catch (err) {
      setStatusMessage('Network error submitting application. Please try again.');
    } finally {
      setIsSubmitting(false);
    }
  };

  return (
    <div className="space-y-10">
      
      {/* FILTER & SEARCH BAR */}
      <div className="bg-slate-900 border border-slate-800 rounded-3xl p-6 shadow-xl space-y-6">
        <div className="relative">
          <Search className="w-5 h-5 text-slate-400 absolute left-4 top-1/2 -translate-y-1/2" />
          <input
            type="text"
            value={searchTerm}
            onChange={(e) => setSearchTerm(e.target.value)}
            placeholder="Search by job title, skill, or keyword..."
            className="w-full pl-12 pr-4 py-3.5 rounded-2xl bg-slate-950 border border-slate-800 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-amber-500 focus:ring-1 focus:ring-amber-500"
          />
          {searchTerm && (
            <button
              type="button"
              onClick={() => setSearchTerm('')}
              className="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white"
            >
              <X className="w-4 h-4" />
            </button>
          )}
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-3 gap-4">
          <div>
            <label className="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1.5">
              Department
            </label>
            <select
              value={selectedDept}
              onChange={(e) => setSelectedDept(e.target.value)}
              className="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-200 text-xs focus:outline-none focus:border-amber-500"
            >
              {departmentsList.map((dept) => (
                <option key={dept} value={dept}>{dept}</option>
              ))}
            </select>
          </div>

          <div>
            <label className="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1.5">
              Location
            </label>
            <select
              value={selectedLoc}
              onChange={(e) => setSelectedLoc(e.target.value)}
              className="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-200 text-xs focus:outline-none focus:border-amber-500"
            >
              {locationsList.map((loc) => (
                <option key={loc} value={loc}>{loc}</option>
              ))}
            </select>
          </div>

          <div>
            <label className="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-1.5">
              Employment Type
            </label>
            <select
              value={selectedType}
              onChange={(e) => setSelectedType(e.target.value)}
              className="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-slate-200 text-xs focus:outline-none focus:border-amber-500"
            >
              {employmentTypesList.map((type) => (
                <option key={type} value={type}>{type}</option>
              ))}
            </select>
          </div>
        </div>
      </div>

      {/* JOB LISTINGS / EMPTY STATE */}
      {filteredJobs.length === 0 ? (
        <div className="py-20 text-center bg-slate-900/40 border border-slate-800/80 rounded-3xl p-8 space-y-4">
          <div className="w-16 h-16 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 flex items-center justify-center mx-auto">
            <Filter className="w-8 h-8" />
          </div>
          <h3 className="text-2xl font-bold text-white">
            Currently, there are no open positions matching your search.
          </h3>
          <p className="text-slate-400 text-sm max-w-md mx-auto">
            Check back soon for new opportunities or send us your CV directly at <a href="mailto:hr@anshivya.com" className="text-amber-400 underline">hr@anshivya.com</a>.
          </p>
          <button
            type="button"
            onClick={() => {
              setSearchTerm('');
              setSelectedDept('All Departments');
              setSelectedLoc('All Locations');
              setSelectedType('All Types');
            }}
            className="mt-2 px-6 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-white text-xs font-bold uppercase tracking-wider transition-colors"
          >
            Reset Filters
          </button>
        </div>
      ) : (
        <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
          {filteredJobs.map((job) => (
            <div
              key={job.id}
              className="group rounded-3xl bg-slate-900/90 border border-slate-800 p-8 shadow-xl hover:border-amber-500/50 transition-all flex flex-col justify-between"
            >
              <div>
                <div className="flex items-center justify-between mb-4">
                  <span className="px-3 py-1 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-[11px] font-bold uppercase tracking-wider">
                    {job.department}
                  </span>
                  <span className="text-[11px] text-slate-400 flex items-center gap-1 font-mono">
                    <Calendar className="w-3.5 h-3.5 text-slate-500" />
                    Posted {job.postedDate}
                  </span>
                </div>

                <h3 className="text-xl font-bold text-white mb-2 group-hover:text-amber-300 transition-colors">
                  {job.title}
                </h3>

                <p className="text-slate-400 text-xs leading-relaxed mb-6 line-clamp-2">
                  {job.shortDescription}
                </p>

                <div className="flex flex-wrap items-center gap-4 text-xs text-slate-300 mb-6">
                  <div className="flex items-center gap-1.5">
                    <MapPin className="w-3.5 h-3.5 text-amber-400" />
                    <span>{job.location}</span>
                  </div>
                  <div className="flex items-center gap-1.5">
                    <Briefcase className="w-3.5 h-3.5 text-amber-400" />
                    <span>{job.type}</span>
                  </div>
                  <div className="flex items-center gap-1.5">
                    <Clock className="w-3.5 h-3.5 text-amber-400" />
                    <span>{job.experience} Exp</span>
                  </div>
                </div>
              </div>

              <div className="pt-4 border-t border-slate-800 flex items-center justify-between">
                <button
                  type="button"
                  onClick={() => {
                    setActiveModalJob(job);
                    setShowApplyForm(false);
                    setApplySuccess(false);
                  }}
                  className="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-amber-400 hover:text-amber-300"
                >
                  View Details &amp; Apply
                  <ArrowRight className="w-4 h-4" />
                </button>
              </div>
            </div>
          ))}
        </div>
      )}

      {/* MODAL DRAWER FOR JOB DETAIL & APPLICATION */}
      {activeModalJob && (
        <div className="fixed inset-0 z-50 bg-slate-950/80 backdrop-blur-md flex items-center justify-center p-4 overflow-y-auto animate-in fade-in duration-200">
          <div className="bg-slate-900 border border-slate-800 rounded-3xl max-w-3xl w-full p-6 sm:p-10 shadow-2xl relative my-8 max-h-[90vh] overflow-y-auto">
            
            <button
              type="button"
              onClick={() => setActiveModalJob(null)}
              className="absolute top-6 right-6 p-2 rounded-xl bg-slate-800 text-slate-400 hover:text-white"
            >
              <X className="w-5 h-5" />
            </button>

            {!showApplyForm ? (
              <div className="space-y-6">
                <div>
                  <span className="text-xs font-bold uppercase tracking-wider text-amber-400">
                    {activeModalJob.department} &bull; {activeModalJob.type}
                  </span>
                  <h2 className="text-2xl sm:text-3xl font-extrabold text-white mt-1">
                    {activeModalJob.title}
                  </h2>
                  <div className="flex items-center gap-4 text-xs text-slate-400 mt-2">
                    <span>{activeModalJob.location}</span>
                    <span>&bull;</span>
                    <span>Experience: {activeModalJob.experience}</span>
                  </div>
                </div>

                <div className="border-t border-slate-800 pt-4 space-y-4">
                  <div>
                    <h4 className="text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                      Key Responsibilities
                    </h4>
                    <ul className="space-y-2 text-xs text-slate-300">
                      {activeModalJob.responsibilities.map((resp, i) => (
                        <li key={i} className="flex items-start gap-2">
                          <span className="w-1.5 h-1.5 rounded-full bg-amber-400 mt-1 shrink-0"></span>
                          <span>{resp}</span>
                        </li>
                      ))}
                    </ul>
                  </div>

                  <div>
                    <h4 className="text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                      Candidate Requirements
                    </h4>
                    <ul className="space-y-2 text-xs text-slate-300">
                      {activeModalJob.requirements.map((req, i) => (
                        <li key={i} className="flex items-start gap-2">
                          <span className="w-1.5 h-1.5 rounded-full bg-amber-400 mt-1 shrink-0"></span>
                          <span>{req}</span>
                        </li>
                      ))}
                    </ul>
                  </div>

                  <div>
                    <h4 className="text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                      Benefits &amp; Perks
                    </h4>
                    <ul className="space-y-2 text-xs text-slate-300">
                      {activeModalJob.benefits.map((b, i) => (
                        <li key={i} className="flex items-start gap-2">
                          <span className="w-1.5 h-1.5 rounded-full bg-emerald-400 mt-1 shrink-0"></span>
                          <span>{b}</span>
                        </li>
                      ))}
                    </ul>
                  </div>
                </div>

                <div className="border-t border-slate-800 pt-6 flex items-center justify-between">
                  <button
                    type="button"
                    onClick={() => setActiveModalJob(null)}
                    className="px-5 py-2.5 rounded-xl bg-slate-800 text-xs font-bold text-slate-300 hover:text-white"
                  >
                    Close
                  </button>
                  <button
                    type="button"
                    onClick={() => setShowApplyForm(true)}
                    className="px-7 py-3 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-slate-950 font-bold text-xs uppercase tracking-wider shadow-lg"
                  >
                    Apply For Position
                  </button>
                </div>
              </div>
            ) : (
              <div className="space-y-6">
                <div>
                  <button
                    type="button"
                    onClick={() => setShowApplyForm(false)}
                    className="text-xs text-amber-400 hover:underline mb-2 block"
                  >
                    &larr; Back to Job Description
                  </button>
                  <h3 className="text-xl font-bold text-white">
                    Apply for {activeModalJob.title}
                  </h3>
                </div>

                {applySuccess ? (
                  <div className="py-8 text-center space-y-4">
                    <CheckCircle2 className="w-12 h-12 text-emerald-400 mx-auto" />
                    <h4 className="text-lg font-bold text-white">Application Submitted!</h4>
                    <p className="text-xs text-slate-300">{statusMessage}</p>
                    <button
                      type="button"
                      onClick={() => setActiveModalJob(null)}
                      className="px-6 py-2 rounded-xl bg-slate-800 text-white text-xs font-bold"
                    >
                      Done
                    </button>
                  </div>
                ) : (
                  <form onSubmit={handleApplySubmit} className="space-y-4" noValidate>
                    {statusMessage && (
                      <div className="p-3 rounded-xl bg-red-500/10 border border-red-500/30 text-red-400 text-xs flex items-center gap-2">
                        <AlertCircle className="w-4 h-4 shrink-0" />
                        <span>{statusMessage}</span>
                      </div>
                    )}

                    <div>
                      <label className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                        Full Name *
                      </label>
                      <input
                        type="text"
                        value={applicantData.candidate_name}
                        onChange={(e) => setApplicantData({ ...applicantData, candidate_name: e.target.value })}
                        className="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500"
                        required
                      />
                      {errors.candidate_name && <p className="text-red-400 text-[10px] mt-0.5">{errors.candidate_name}</p>}
                    </div>

                    <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                      <div>
                        <label className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                          Email Address *
                        </label>
                        <input
                          type="email"
                          value={applicantData.candidate_email}
                          onChange={(e) => setApplicantData({ ...applicantData, candidate_email: e.target.value })}
                          className="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500"
                          required
                        />
                        {errors.candidate_email && <p className="text-red-400 text-[10px] mt-0.5">{errors.candidate_email}</p>}
                      </div>

                      <div>
                        <label className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                          Phone Number *
                        </label>
                        <input
                          type="tel"
                          value={applicantData.candidate_phone}
                          onChange={(e) => setApplicantData({ ...applicantData, candidate_phone: e.target.value })}
                          className="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500"
                          required
                        />
                        {errors.candidate_phone && <p className="text-red-400 text-[10px] mt-0.5">{errors.candidate_phone}</p>}
                      </div>
                    </div>

                    <div>
                      <label className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                        Resume Upload (PDF / DOCX, max 5MB) *
                      </label>
                      <input
                        type="file"
                        accept=".pdf,.doc,.docx"
                        onChange={(e) => setApplicantData({ ...applicantData, resume_file: e.target.files[0] || null })}
                        className="w-full px-3.5 py-2 rounded-xl bg-slate-950 border border-slate-800 text-slate-300 text-xs file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-amber-500/10 file:text-amber-400"
                        required
                      />
                      {errors.resume_file && <p className="text-red-400 text-[10px] mt-0.5">{errors.resume_file}</p>}
                    </div>

                    <div>
                      <label className="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-1">
                        Cover Message / Brief Introduction
                      </label>
                      <textarea
                        rows={3}
                        value={applicantData.cover_message}
                        onChange={(e) => setApplicantData({ ...applicantData, cover_message: e.target.value })}
                        placeholder="Briefly explain your relevant experience..."
                        className="w-full px-3.5 py-2.5 rounded-xl bg-slate-950 border border-slate-800 text-white text-xs focus:outline-none focus:border-amber-500"
                      ></textarea>
                    </div>

                    <div className="pt-2 flex justify-end gap-3">
                      <button
                        type="button"
                        onClick={() => setShowApplyForm(false)}
                        className="px-4 py-2.5 rounded-xl bg-slate-800 text-xs text-slate-300 font-bold"
                      >
                        Cancel
                      </button>
                      <button
                        type="submit"
                        disabled={isSubmitting}
                        className="px-6 py-2.5 rounded-xl bg-amber-500 text-slate-950 font-bold text-xs uppercase tracking-wider flex items-center gap-2"
                      >
                        {isSubmitting ? (
                          <>
                            <Loader2 className="w-4 h-4 animate-spin" />
                            Submitting...
                          </>
                        ) : (
                          <>
                            <Upload className="w-4 h-4" />
                            Submit Application
                          </>
                        )}
                      </button>
                    </div>
                  </form>
                )}
              </div>
            )}

          </div>
        </div>
      )}

    </div>
  );
}
