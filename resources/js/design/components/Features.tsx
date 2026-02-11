import React from 'react';
import {
  Zap,
  Bot,
  ArrowLeftRight,
  Coins,
  Copy,
  Terminal
} from 'lucide-react';

const Features: React.FC = () => {
  const items = [
    {
      icon: <Terminal className="w-8 h-8 text-blue-500" />,
      title: 'Live Trading',
      desc: 'Place and manage orders across supported asset classes with one workspace view.'
    },
    {
      icon: <Zap className="w-8 h-8 text-amber-400" />,
      title: 'Signals',
      desc: 'Review trading signals with context before deciding whether to execute.'
    },
    {
      icon: <Bot className="w-8 h-8 text-emerald-500" />,
      title: 'Bot Trading',
      desc: 'Run automated workflows with configurable account-level controls.'
    },
    {
      icon: <Copy className="w-8 h-8 text-indigo-500" />,
      title: 'Copy Trading',
      desc: 'Follow strategy providers and monitor copied positions in your account.'
    },
    {
      icon: <ArrowLeftRight className="w-8 h-8 text-slate-400" />,
      title: 'Exchange & Swap',
      desc: 'Convert assets and rebalance holdings without leaving your account environment.'
    },
    {
      icon: <Coins className="w-8 h-8 text-purple-400" />,
      title: 'Staking & Wallets',
      desc: 'Manage staking allocations and wallet connections from one dashboard.'
    }
  ];

  return (
    <section id="features" className="py-24 lg:py-32 bg-[#050505] relative overflow-hidden">
      <div className="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-full bg-[radial-gradient(circle_at_center,rgba(37,99,235,0.05)_0%,rgba(5,5,5,0)_60%)] pointer-events-none"></div>

      <div className="container mx-auto px-6 relative z-10">
        <div className="text-center max-w-4xl mx-auto mb-16 lg:mb-24 space-y-4 lg:space-y-6">
          <div className="text-blue-500 text-[10px] font-black uppercase tracking-[0.4em] lg:tracking-[0.5em]">What You Can Do</div>
          <h3 className="text-3xl lg:text-7xl font-black text-white tracking-tighter">Connected tools for <span className="text-slate-600">daily trading operations.</span></h3>
          <p className="text-base lg:text-xl text-slate-400 font-medium leading-relaxed">Onboarding, funding, execution, and portfolio actions are handled from one product surface.</p>
        </div>

        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          {items.map((item, idx) => (
            <div
              key={idx}
              className="bg-white/[0.03] p-8 lg:p-10 rounded-[2rem] border border-white/5 hover:bg-white/[0.05] hover:border-blue-500/20 transition-all group cursor-pointer"
            >
              <div className="mb-6 lg:mb-8 w-14 h-14 lg:w-16 lg:h-16 rounded-2xl bg-white/[0.02] border border-white/5 flex items-center justify-center group-hover:scale-110 group-hover:bg-blue-600/10 group-hover:border-blue-500/30 transition-all">
                {item.icon}
              </div>
              <h4 className="text-base lg:text-lg font-black text-white mb-3 lg:mb-4 tracking-widest uppercase">{item.title}</h4>
              <p className="text-slate-400 leading-relaxed text-xs lg:text-sm font-medium opacity-70 group-hover:opacity-100 transition-opacity">{item.desc}</p>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Features;
