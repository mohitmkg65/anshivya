import React from 'react';
import { Head } from '@inertiajs/react';
import Header from '../Components/Header';
import Footer from '../Components/Footer';
import WhatsAppButton from '../Components/WhatsAppButton';
import { companyData } from '../data/companyData';

export default function Layout({ children, title, description, schemaType = 'Organization' }) {
  const pageTitle = title 
    ? `${title} | Anshivya Group` 
    : 'Anshivya Group | Corporate HR Solutions & Recruitment Partner';
  
  const pageDesc = description || 
    'Anshivya Group provides corporate HR solutions, recruitment, payroll management, statutory compliance, and strategic HR consulting for businesses.';

  const orgSchema = {
    '@context': 'https://schema.org',
    '@type': 'Organization',
    'name': companyData.name,
    'url': companyData.domain,
    'logo': `${companyData.domain}/images/logo.png`,
    'contactPoint': [
      {
        '@type': 'ContactPoint',
        'telephone': '+91-8112825288',
        'contactType': 'customer service',
        'email': 'info@anshivya.com',
        'areaServed': 'IN',
        'availableLanguage': ['English', 'Hindi', 'Gujarati']
      }
    ],
    'address': {
      '@type': 'PostalAddress',
      'addressLocality': 'Ahmedabad',
      'addressRegion': 'Gujarat',
      'addressCountry': 'IN'
    }
  };

  return (
    <>
      <Head>
        <title>{pageTitle}</title>
        <meta name="description" content={pageDesc} />
        <meta property="og:title" content={pageTitle} />
        <meta property="og:description" content={pageDesc} />
        <meta property="og:type" content="website" />
        <meta property="og:url" content={companyData.domain} />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:title" content={pageTitle} />
        <meta name="twitter:description" content={pageDesc} />
        <script type="application/ld+json">
          {JSON.stringify(orgSchema)}
        </script>
      </Head>

      <div className="min-h-screen bg-slate-950 text-slate-100 flex flex-col selection:bg-amber-500 selection:text-slate-950">
        <Header />
        
        <main className="flex-1">
          {children}
        </main>

        <WhatsAppButton />
        <Footer />
      </div>
    </>
  );
}
