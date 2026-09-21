import React from 'react';
import Layout from '../Layouts/Layout';
import { Link } from '@inertiajs/react';
import { ArrowLeft, AlertCircle } from 'lucide-react';

export default function Error404() {
  return (
    <Layout title="404 — Page Not Found">
      <section className="pt-40 pb-32 bg-slate-950 flex items-center justify-center min-h-[70vh]">
        <div className="text-center space-y-6 max-w-md mx-auto px-4">
          <div className="w-16 h-16 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 flex items-center justify-center mx-auto">
            <AlertCircle className="w-8 h-8" />
          </div>
          
          <h1 className="text-5xl font-black text-white">404</h1>
          <h2 className="text-2xl font-bold text-slate-200">Page Not Found</h2>
          <p className="text-slate-400 text-sm leading-relaxed">
            The page you are looking for does not exist or may have been moved.
          </p>

          <div>
            <Link
              href="/"
              className="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-gradient-to-r from-amber-500 to-orange-600 text-slate-950 font-bold text-xs uppercase tracking-wider"
            >
              <ArrowLeft className="w-4 h-4" />
              Return to Homepage
            </Link>
          </div>
        </div>
      </section>
    </Layout>
  );
}
