import React, { useState, useEffect } from 'react';
import { Link, usePage } from '@inertiajs/react';
import { ChevronDown, Menu, X, PhoneCall, ArrowUpRight, ShieldCheck, Users, Wallet, Briefcase, FileSpreadsheet } from 'lucide-react';
import { companyData } from '../data/companyData';

export default function Header() {
  const { url } = usePage();
  const [isScrolled, setIsScrolled] = useState(false);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [servicesDropdownOpen, setServicesDropdownOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  // Close mobile menu on escape key
  useEffect(() => {
    const handleKeyDown = (e) => {
      if (e.key === 'Escape') {
        setMobileMenuOpen(false);
        setServicesDropdownOpen(false);
      }
    };
    window.addEventListener('keydown', handleKeyDown);
    return () => window.removeEventListener('keydown', handleKeyDown);
  }, []);

  const services = [
    { title: 'Recruitment Services', href: '/services/recruitment', desc: 'Talent acquisition & executive sourcing', icon: Users },
    { title: 'Payroll Management', href: '/services/payroll', desc: 'Organized monthly payroll & reporting', icon: Wallet },
    { title: 'Compliance Solutions', href: '/services/compliance', desc: 'HR compliance & policy formulation', icon: ShieldCheck },
    { title: 'HR Consulting', href: '/services/hr-consulting', desc: 'Strategic advisory & people strategies', icon: Briefcase },
    { title: 'Employee Relations', href: '/services/employee-relations', desc: 'Grievance redressal & engagement', icon: FileSpreadsheet },
  ];

  const navItems = [
    { name: 'Home', href: '/' },
    { name: 'About', href: '/about' },
    { name: 'Services', isDropdown: true },
    { name: 'Industries', href: '/industries' },
    { name: 'Job Openings', href: '/jobs' },
    { name: 'Contact Us', href: '/contact' },
  ];

  const isActive = (path) => {
    if (path === '/') return url === '/';
    return url.startsWith(path);
  };

  return (
    <header className={`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${
      isScrolled 
        ? 'bg-slate-950/90 backdrop-blur-md border-b border-slate-800/80 py-3.5 shadow-2xl shadow-slate-950/50' 
        : 'bg-gradient-to-b from-slate-950/90 to-transparent py-5'
    }`}>
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div className="flex items-center justify-between">
          
          {/* LOGO */}
          <Link href="/" className="group flex items-center gap-3 focus:outline-none focus:ring-2 focus:ring-amber-500 rounded-lg p-1">
            <div className="relative w-10 h-10 rounded-xl bg-gradient-to-br from-amber-500 via-orange-600 to-amber-700 flex items-center justify-center shadow-lg shadow-orange-950/40 group-hover:scale-105 transition-transform duration-300">
              <span className="font-extrabold text-slate-950 text-xl tracking-tighter">A</span>
              <div className="absolute inset-0 rounded-xl border border-white/20"></div>
            </div>
            <div className="flex flex-col">
              <span className="text-xl font-extrabold text-white tracking-tight flex items-center gap-1.5">
                ANSHIVYA <span className="text-xs font-semibold px-2 py-0.5 rounded bg-amber-500/10 text-amber-400 border border-amber-500/20">GROUP</span>
              </span>
              <span className="text-[10px] uppercase font-semibold tracking-widest text-slate-400">HR Solutions & Talent</span>
            </div>
          </Link>

          {/* DESKTOP NAV */}
          <nav className="hidden lg:flex items-center gap-1" aria-label="Main Navigation">
            {navItems.map((item) => {
              if (item.isDropdown) {
                return (
                  <div 
                    key="services-dropdown" 
                    className="relative"
                    onMouseEnter={() => setServicesDropdownOpen(true)}
                    onMouseLeave={() => setServicesDropdownOpen(false)}
                  >
                    <button
                      type="button"
                      onClick={() => setServicesDropdownOpen(!servicesDropdownOpen)}
                      onKeyDown={(e) => {
                        if (e.key === 'Enter' || e.key === ' ') {
                          e.preventDefault();
                          setServicesDropdownOpen(!servicesDropdownOpen);
                        }
                      }}
                      className={`px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 flex items-center gap-1.5 focus:outline-none focus:ring-2 focus:ring-amber-500 ${
                        url.startsWith('/services') ? 'text-amber-400 bg-amber-500/10 font-semibold' : 'text-slate-300 hover:text-white hover:bg-slate-900/60'
                      }`}
                      aria-expanded={servicesDropdownOpen}
                    >
                      Services
                      <ChevronDown className={`w-4 h-4 transition-transform duration-200 ${servicesDropdownOpen ? 'rotate-180 text-amber-400' : 'text-slate-400'}`} />
                    </button>

                    {/* DROPDOWN MENU */}
                    {servicesDropdownOpen && (
                      <div className="absolute top-full left-0 w-80 pt-2 animate-in fade-in slide-in-from-top-2 duration-200">
                        <div className="bg-slate-900 border border-slate-800 rounded-2xl p-2.5 shadow-2xl shadow-slate-950/90 backdrop-blur-xl">
                          <div className="text-[11px] font-bold tracking-widest uppercase text-slate-400 px-3 py-1.5 border-b border-slate-800/60 mb-1">
                            Core Capabilities
                          </div>
                          {services.map((svc) => {
                            const IconComponent = svc.icon;
                            return (
                              <Link
                                key={svc.href}
                                href={svc.href}
                                onClick={() => setServicesDropdownOpen(false)}
                                className="group flex items-start gap-3 p-2.5 rounded-xl hover:bg-slate-800/80 transition-colors focus:outline-none focus:ring-2 focus:ring-amber-500"
                              >
                                <div className="p-2 rounded-lg bg-slate-800 border border-slate-700/60 text-amber-400 group-hover:bg-amber-500 group-hover:text-slate-950 transition-colors shrink-0">
                                  <IconComponent className="w-4 h-4" />
                                </div>
                                <div>
                                  <div className="text-xs font-semibold text-white group-hover:text-amber-300 transition-colors flex items-center gap-1">
                                    {svc.title}
                                    <ArrowUpRight className="w-3 h-3 opacity-0 group-hover:opacity-100 transition-opacity" />
                                  </div>
                                  <div className="text-[11px] text-slate-400 line-clamp-1">{svc.desc}</div>
                                </div>
                              </Link>
                            );
                          })}
                        </div>
                      </div>
                    )}
                  </div>
                );
              }

              return (
                <Link
                  key={item.name}
                  href={item.href}
                  className={`px-3.5 py-2 rounded-lg text-sm font-medium transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-amber-500 ${
                    isActive(item.href)
                      ? 'text-amber-400 bg-amber-500/10 font-semibold'
                      : 'text-slate-300 hover:text-white hover:bg-slate-900/60'
                  }`}
                >
                  {item.name}
                </Link>
              );
            })}
          </nav>

          {/* DESKTOP CTA */}
          <div className="hidden lg:flex items-center gap-3">
            <Link
              href="/contact"
              className="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl text-xs font-bold uppercase tracking-wider bg-gradient-to-r from-amber-500 to-orange-600 hover:from-amber-400 hover:to-orange-500 text-slate-950 shadow-lg shadow-orange-950/40 hover:shadow-orange-500/20 hover:scale-[1.02] active:scale-[0.98] transition-all duration-200 focus:outline-none focus:ring-2 focus:ring-amber-400"
            >
              <PhoneCall className="w-3.5 h-3.5" />
              Talk to an HR Expert
            </Link>
          </div>

          {/* MOBILE HAMBURGER BUTTON */}
          <div className="flex lg:hidden items-center gap-2">
            <Link
              href="/contact"
              className="px-3 py-1.5 rounded-lg text-xs font-bold bg-amber-500/10 border border-amber-500/30 text-amber-400 hover:bg-amber-500 hover:text-slate-950 transition-colors"
            >
              Talk to Us
            </Link>
            <button
              type="button"
              onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
              className="p-2 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-amber-500"
              aria-label="Toggle navigation menu"
              aria-expanded={mobileMenuOpen}
            >
              {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
            </button>
          </div>
        </div>
      </div>

      {/* MOBILE FULL-SCREEN SLIDE-OUT */}
      {mobileMenuOpen && (
        <div className="lg:hidden fixed inset-0 top-[65px] bg-slate-950/98 backdrop-blur-2xl z-40 overflow-y-auto p-6 flex flex-col justify-between border-t border-slate-800 animate-in fade-in duration-200">
          <div className="space-y-6">
            <div className="text-xs font-bold uppercase tracking-widest text-slate-400 border-b border-slate-800 pb-2">
              Navigation Menu
            </div>
            <nav className="flex flex-col gap-2">
              <Link
                href="/"
                onClick={() => setMobileMenuOpen(false)}
                className="text-lg font-semibold py-2.5 px-3 rounded-xl hover:bg-slate-900 text-white"
              >
                Home
              </Link>
              <Link
                href="/about"
                onClick={() => setMobileMenuOpen(false)}
                className="text-lg font-semibold py-2.5 px-3 rounded-xl hover:bg-slate-900 text-white"
              >
                About Us
              </Link>
              
              <div className="py-2">
                <div className="text-xs font-bold uppercase tracking-widest text-amber-400 px-3 mb-2">
                  Our HR & Recruitment Services
                </div>
                <div className="grid grid-cols-1 gap-1.5 pl-2">
                  {services.map((svc) => (
                    <Link
                      key={svc.href}
                      href={svc.href}
                      onClick={() => setMobileMenuOpen(false)}
                      className="py-2 px-3 rounded-lg text-sm text-slate-300 hover:text-amber-300 hover:bg-slate-900 flex items-center justify-between"
                    >
                      {svc.title}
                      <ArrowUpRight className="w-3.5 h-3.5 text-slate-400" />
                    </Link>
                  ))}
                </div>
              </div>

              <Link
                href="/industries"
                onClick={() => setMobileMenuOpen(false)}
                className="text-lg font-semibold py-2.5 px-3 rounded-xl hover:bg-slate-900 text-white"
              >
                Industries
              </Link>
              <Link
                href="/jobs"
                onClick={() => setMobileMenuOpen(false)}
                className="text-lg font-semibold py-2.5 px-3 rounded-xl hover:bg-slate-900 text-white flex items-center justify-between"
              >
                Job Openings
                <span className="text-xs bg-amber-500/20 text-amber-400 font-bold px-2 py-0.5 rounded-full border border-amber-500/30">
                  Join Us
                </span>
              </Link>
              <Link
                href="/contact"
                onClick={() => setMobileMenuOpen(false)}
                className="text-lg font-semibold py-2.5 px-3 rounded-xl hover:bg-slate-900 text-white"
              >
                Contact Us
              </Link>
            </nav>
          </div>

          <div className="pt-6 border-t border-slate-800 space-y-4">
            <Link
              href="/contact"
              onClick={() => setMobileMenuOpen(false)}
              className="w-full py-3.5 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-slate-950 font-bold text-center block text-sm tracking-wide uppercase shadow-lg shadow-orange-950/50"
            >
              Talk to an HR Expert
            </Link>
            <div className="text-center text-xs text-slate-400">
              Email: info@anshivya.com | Phone: +91 81128 25288
            </div>
          </div>
        </div>
      )}
    </header>
  );
}
