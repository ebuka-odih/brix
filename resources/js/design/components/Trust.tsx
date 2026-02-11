import React from 'react';
import { ShieldCheck, Lock, FileCheck, Headset, ReceiptText } from 'lucide-react';
import { appRoute } from '../routes';

const Trust: React.FC = () => {
  const trustPoints = [
    {
      icon: <Lock className="w-7 h-7 text-blue-500" />,
      title: 'Security Controls',
      desc: 'Session protection, account safeguards, and operational checks are embedded in the platform workflow.'
    },
    {
      icon: <FileCheck className="w-7 h-7 text-emerald-500" />,
      title: 'Compliance Workflows',
      desc: 'KYC/AML verification steps are integrated with onboarding, funding, and account access controls.'
    },
    {
      icon: <ReceiptText className="w-7 h-7 text-amber-500" />,
      title: 'Transparent Fees',
      desc: 'Fees are displayed in trading and transfer flows before confirmation to reduce surprises.'
    },
    {
      icon: <Headset className="w-7 h-7 text-indigo-500" />,
      title: 'Advisor and Support Access',
      desc: 'Contact channels are available for onboarding, product setup, and account operations support.'
    }
  ];

  return (
    <section id="trust" className="py-24 lg:py-32 bg-[#080808] border-y border-white/5">
      <div className="container mx-auto px-6">
        <div className="max-w-4xl mx-auto text-center mb-16 lg:mb-24 space-y-6">
          <h2 className="text-sm font-bold text-blue-500 uppercase tracking-[0.4em]">Security & Trust</h2>
          <h3 className="text-4xl lg:text-6xl font-black text-white tracking-tighter">Built for accountable operations.</h3>
          <p className="text-lg lg:text-xl text-slate-500 font-medium">
            BRIXCAP emphasizes clear controls, compliance-ready workflows, and transparent account behavior.
          </p>
        </div>

        <div className="grid md:grid-cols-2 gap-x-12 gap-y-12 lg:gap-y-20">
          {trustPoints.map((point, idx) => (
            <div key={idx} className="flex flex-col sm:flex-row gap-6 group">
              <div className="flex-shrink-0 bg-white/[0.02] w-16 h-16 rounded-2xl flex items-center justify-center border border-white/5 group-hover:border-blue-500/30 group-hover:bg-blue-600/5 transition-all duration-300">
                {point.icon}
              </div>
              <div className="space-y-2">
                <h4 className="text-xl font-bold text-white tracking-tight">{point.title}</h4>
                <p className="text-slate-500 leading-relaxed text-sm font-medium group-hover:text-slate-400 transition-colors">{point.desc}</p>
              </div>
            </div>
          ))}
        </div>

        <div className="mt-20 p-8 lg:p-12 bg-blue-600/5 rounded-[2.5rem] border border-blue-500/20 flex flex-col md:flex-row items-center justify-between gap-8 lg:gap-12">
          <div className="flex flex-col sm:flex-row items-center gap-6 text-center sm:text-left">
            <div className="w-16 h-16 rounded-full bg-blue-600 flex items-center justify-center shadow-[0_0_30px_rgba(37,99,235,0.4)]">
              <ShieldCheck className="w-8 h-8 text-white" />
            </div>
            <div>
              <h4 className="text-xl font-bold text-white">Need account guidance?</h4>
              <p className="text-slate-400 text-sm mt-1">Speak with an advisor about onboarding, verification, and trading workflow setup.</p>
            </div>
          </div>
          <a href={appRoute('consultant', '/consultant')} className="w-full md:w-auto whitespace-nowrap bg-white text-black px-10 py-4 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-slate-100 transition-all shadow-xl active:scale-95 text-center">
            Contact Advisor
          </a>
        </div>
      </div>
    </section>
  );
};

export default Trust;
