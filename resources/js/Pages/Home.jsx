import React from 'react';
import Layout from '../Layouts/Layout';
import Hero from '../Components/Hero';
import TrustSnapshot from '../Components/TrustSnapshot';
import DualAudienceSplit from '../Components/DualAudienceSplit';
import RecruitmentFeature from '../Components/RecruitmentFeature';
import WhyAnshivya from '../Components/WhyAnshivya';
import ServicesOverview from '../Components/ServicesOverview';
import IndustryMarquee from '../Components/IndustryMarquee';
import LeadershipSection from '../Components/LeadershipSection';
import ClientExperience from '../Components/ClientExperience';
import FinalCTA from '../Components/FinalCTA';

export default function Home() {
  return (
    <Layout
      title="Corporate HR Solutions & Recruitment Partner"
      description="Anshivya Group empowers businesses with recruitment, payroll management, compliance solutions, and strategic HR consulting."
    >
      <Hero />
      <TrustSnapshot />
      <DualAudienceSplit />
      <RecruitmentFeature />
      <WhyAnshivya />
      <ServicesOverview />
      <IndustryMarquee />
      <LeadershipSection />
      <ClientExperience />
      <FinalCTA />
    </Layout>
  );
}
