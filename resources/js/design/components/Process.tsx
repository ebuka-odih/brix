import React from 'react';
import { UserPlus, ShieldCheck, Wallet2, TrendingUp, CheckCircle2 } from 'lucide-react';

const Process: React.FC = () => {
  const steps = [
    {
      icon: <UserPlus className="w-6 h-6" />,
      title: 'Sign Up',
      desc: 'Create your BRIXCAP account and complete profile setup.'
    },
    {
      icon: <ShieldCheck className="w-6 h-6" />,
      title: 'Verify',
      desc: 'Submit identity and compliance details for KYC/AML checks.'
    },
    {
      icon: <Wallet2 className="w-6 h-6" />,
      title: 'Fund',
      desc: 'Deposit funds, confirm account controls, and prepare your workspace.'
    },
    {
      icon: <TrendingUp className="w-6 h-6" />,
      title: 'Trade',
      desc: 'Execute manually, use signals, run bots, or manage copy strategies.'
    }
  ];

  return (
    <section id="process" className="py-24 lg:py-32 bg-[#050505]">
      <div className="container mx-auto px-6">
        <div className="text-center max-w-3xl mx-auto mb-16 lg:mb-24">
          <h2 className="text-sm font-bold text-blue-500 uppercase tracking-[0.3em] mb-4">Onboarding Path</h2>
          <h3 className="text-3xl lg:text-5xl font-black text-white tracking-tighter">Sign up. Verify. Fund. Trade.</h3>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-12 relative">
          <div className="hidden lg:block absolute top-12 left-[12%] right-[12%] h-px bg-white/5 z-0"></div>

          {steps.map((step, idx) => (
            <div key={idx} className="relative z-10 flex flex-col items-center text-center group">
              <div className="w-20 h-20 lg:w-24 lg:h-24 rounded-3xl bg-white/[0.02] border border-white/10 flex items-center justify-center mb-6 shadow-2xl group-hover:border-blue-500/50 group-hover:bg-blue-600/5 transition-all duration-500">
                <div className="text-blue-500 group-hover:scale-110 transition-transform">{step.icon}</div>
              </div>
              <div className="space-y-3">
                <div className="flex items-center justify-center gap-2 mb-1">
                  <span className="text-[9px] font-black bg-white/5 text-slate-500 border border-white/5 px-2 py-1 rounded uppercase tracking-widest">Step 0{idx + 1}</span>
                </div>
                <h4 className="text-lg font-bold text-white tracking-tight">{step.title}</h4>
                <p className="text-sm text-slate-500 leading-relaxed px-4 group-hover:text-slate-400 transition-colors">{step.desc}</p>
              </div>
            </div>
          ))}
        </div>

        <div className="mt-20 flex justify-center">
          <div className="flex flex-col sm:flex-row items-center gap-4 sm:gap-10 px-8 py-4 bg-white/[0.02] rounded-3xl border border-white/5 text-slate-500 text-[10px] lg:text-xs font-black uppercase tracking-widest">
            <span className="flex items-center gap-2"><CheckCircle2 className="w-4 h-4 text-emerald-500" /> Account setup path</span>
            <span className="hidden sm:block w-px h-4 bg-white/10"></span>
            <span className="flex items-center gap-2"><CheckCircle2 className="w-4 h-4 text-emerald-500" /> Compliance verification</span>
            <span className="hidden sm:block w-px h-4 bg-white/10"></span>
            <span className="flex items-center gap-2"><CheckCircle2 className="w-4 h-4 text-emerald-500" /> Funding and execution</span>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Process;
