import React, { useState } from 'react';
import { Plus, Minus, AlertCircle } from 'lucide-react';
import { appRoute } from '../routes';

const FAQ: React.FC = () => {
  const [openIndex, setOpenIndex] = useState<number | null>(0);

  const faqs = [
    {
      q: "What do I need before I can start live trading?",
      a: 'Create an account, complete KYC/AML verification, and fund your wallet. Once these steps are complete, trading modules are available based on your account setup.'
    },
    {
      q: "Can I use manual trading and automation together?",
      a: 'Yes. You can execute manually, use signals, manage bot workflows, and run copy-trading allocations from the same account environment.'
    },
    {
      q: 'How are deposits and withdrawals handled?',
      a: 'Funding and withdrawals are handled inside your account dashboard with status tracking and verification checks.'
    },
    {
      q: 'Are fees visible before I confirm an action?',
      a: 'Yes. BRIXCAP shows applicable costs in order and transfer workflows before final confirmation.'
    }
  ];

  return (
    <section id="faq" className="py-24 lg:py-32 bg-[#050505]">
      <div className="container mx-auto px-6">
        <div className="grid lg:grid-cols-12 gap-12 lg:gap-20">
          <div className="lg:col-span-5 space-y-6 text-center lg:text-left">
            <h2 className="text-sm font-bold text-blue-500 uppercase tracking-[0.4em]">FAQ</h2>
            <h3 className="text-4xl lg:text-5xl font-black text-white tracking-tighter">Common account and platform questions.</h3>
            <p className="text-lg text-slate-500 font-medium">Quick answers for onboarding, trading workflow, and account operations.</p>

            <div className="pt-4">
              <a href={appRoute('consultant', '/consultant')} className="inline-block w-full sm:w-auto bg-white/5 border border-white/10 text-white px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition-all text-xs uppercase tracking-widest text-center">
                Talk to an Advisor
              </a>
            </div>
          </div>

          <div className="lg:col-span-7 space-y-4">
            {faqs.map((faq, idx) => (
              <div key={idx} className="bg-white/[0.02] border border-white/5 rounded-2xl overflow-hidden transition-all duration-300">
                <button
                  className="w-full flex items-center justify-between p-6 text-left hover:bg-white/5 transition-colors"
                  onClick={() => setOpenIndex(openIndex === idx ? null : idx)}
                >
                  <span className="font-bold text-white tracking-tight">{faq.q}</span>
                  {openIndex === idx ? <Minus className="w-5 h-5 text-blue-500" /> : <Plus className="w-5 h-5 text-slate-500" />}
                </button>
                {openIndex === idx && (
                  <div className="px-6 pb-6 animate-fade-in-up">
                    <p className="text-slate-400 leading-relaxed text-sm font-medium">{faq.a}</p>
                  </div>
                )}
              </div>
            ))}
          </div>
        </div>

        <div className="mt-20 lg:mt-32 p-8 bg-white/[0.01] rounded-3xl border border-white/5 flex flex-col sm:flex-row items-start gap-6">
          <div className="w-12 h-12 rounded-2xl bg-slate-900 border border-white/5 flex items-center justify-center flex-shrink-0">
            <AlertCircle className="w-6 h-6 text-slate-500" />
          </div>
          <div className="space-y-4">
            <h4 className="font-black text-slate-300 text-[10px] uppercase tracking-[0.3em]">Risk Disclosure</h4>
            <p className="text-slate-600 text-xs leading-relaxed font-medium">
              Trading financial instruments and digital assets carries risk and may not be suitable for all investors.
              You may lose part or all of your capital. Evaluate your objectives, experience, and risk tolerance before trading.
              BRIXCAP does not provide investment advice.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
};

export default FAQ;
