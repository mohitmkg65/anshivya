import React, { useState } from 'react';
import { MessageSquare } from 'lucide-react';
import { companyData } from '../data/companyData';

export default function WhatsAppButton() {
  const [isHovered, setIsHovered] = useState(false);

  return (
    <div className="fixed bottom-6 right-6 z-40 flex items-center gap-3">
      {/* TOOLTIP ON HOVER */}
      {isHovered && (
        <div className="hidden sm:block px-3.5 py-1.5 rounded-xl bg-slate-900 border border-slate-700 text-slate-100 text-xs font-semibold shadow-xl animate-in fade-in slide-in-from-right-2 duration-200">
          Chat with Anshivya
        </div>
      )}

      {/* WHATSAPP ACTION FAB */}
      <a
        href={companyData.contact.whatsappUrl}
        target="_blank"
        rel="noopener noreferrer"
        onMouseEnter={() => setIsHovered(true)}
        onMouseLeave={() => setIsHovered(false)}
        className="w-13 h-13 rounded-2xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 flex items-center justify-center shadow-2xl shadow-emerald-950/60 transition-all duration-300 hover:scale-110 active:scale-95 focus:outline-none focus:ring-4 focus:ring-emerald-500/40"
        aria-label="Chat with Anshivya on WhatsApp"
      >
        <MessageSquare className="w-6 h-6 fill-slate-950 stroke-emerald-500" />
      </a>
    </div>
  );
}
