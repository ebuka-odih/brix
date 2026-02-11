import React from 'react';
import { Play, Bitcoin, Coins, Landmark, Globe, CheckCircle2 } from 'lucide-react';
import { appRoute } from '../routes';

const Hero: React.FC = () => {
  return (
    <section className="relative min-h-[90vh] flex items-center pt-24 pb-16 lg:pt-32 lg:pb-24 overflow-hidden hero-gradient">
      <div className="absolute top-1/4 left-1/4 w-[1px] h-96 bg-gradient-to-b from-transparent via-blue-500/20 to-transparent"></div>
      <div className="absolute top-1/3 right-1/4 w-[1px] h-64 bg-gradient-to-b from-transparent via-indigo-500/20 to-transparent"></div>

      <div className="absolute top-[15%] left-[5%] lg:left-[10%] opacity-10 lg:opacity-20 floating-asset pointer-events-none">
        <Bitcoin className="w-10 h-10 lg:w-16 lg:h-16 text-amber-500" />
      </div>
      <div className="absolute bottom-[10%] left-[10%] lg:left-[15%] opacity-10 lg:opacity-20 floating-asset-reverse pointer-events-none">
        <Coins className="w-8 h-8 lg:w-12 lg:h-12 text-emerald-400" />
      </div>
      <div className="absolute top-[20%] right-[5%] lg:right-[10%] opacity-10 lg:opacity-20 floating-asset pointer-events-none">
        <Landmark className="w-12 h-12 lg:w-20 lg:h-20 text-blue-400" />
      </div>
      <div className="absolute bottom-[15%] right-[10%] lg:right-[15%] opacity-10 lg:opacity-20 floating-asset-reverse pointer-events-none">
        <Globe className="w-10 h-10 lg:w-14 lg:h-14 text-indigo-400" />
      </div>

      <div className="container mx-auto px-6 relative z-10">
        <div className="flex flex-col items-center text-center space-y-8 lg:space-y-12">
          <div className="max-w-4xl space-y-6 lg:space-y-8 animate-fade-in-up">
            <div className="inline-flex items-center px-4 py-2 bg-white/5 border border-white/10 rounded-full text-slate-300 text-[9px] lg:text-[10px] font-bold tracking-[0.2em] lg:tracking-[0.3em] uppercase backdrop-blur-md">
              <span className="flex h-2 w-2 mr-3 bg-blue-500 rounded-full shadow-[0_0_10px_rgba(37,99,235,1)]"></span>
              BRIXCAP Multi-Asset Platform
            </div>

            <h1 className="text-4xl sm:text-6xl lg:text-8xl font-black text-white leading-[1] lg:leading-[0.9] tracking-tighter">
              Trade global markets from one <span className="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-indigo-300">secure account</span>.
            </h1>

            <p className="text-base lg:text-xl text-slate-400 max-w-3xl mx-auto leading-relaxed font-medium">
              Open your account, complete KYC/AML, fund, and access live trading, signals, bot workflows, copy trading,
              exchange, swap, staking, and wallet connectivity in a single operational workspace.
            </p>

            <div className="flex flex-col sm:flex-row items-center justify-center gap-4 lg:gap-6 pt-2 lg:pt-4">
              <a href={appRoute('register', '/register')} className="w-full sm:w-auto bg-blue-600 hover:bg-blue-500 text-white px-8 lg:px-10 py-4 lg:py-5 rounded-lg font-black text-xs lg:text-sm uppercase tracking-[0.2em] transition-all transform hover:scale-105 shadow-2xl shadow-blue-500/40 text-center">
                Open Account
              </a>
              <a href={appRoute('platform', '/platform')} className="w-full sm:w-auto bg-transparent border border-white/10 hover:border-white/20 text-white px-8 lg:px-10 py-4 lg:py-5 rounded-lg font-black text-xs lg:text-sm uppercase tracking-[0.2em] transition-all flex items-center justify-center group">
                Explore Platform
                <Play size={14} className="ml-3 fill-current group-hover:scale-125 transition-transform" />
              </a>
            </div>
          </div>

          <div className="w-full max-w-6xl mt-8 lg:mt-12 relative animate-fade-in-up delay-300">
            <div className="absolute -inset-0.5 bg-gradient-to-r from-blue-500/20 via-indigo-500/20 to-emerald-500/20 rounded-[1.5rem] lg:rounded-[2rem] blur-xl opacity-30 lg:opacity-50"></div>
            <div className="relative glass-dark rounded-[1.5rem] lg:rounded-[2rem] overflow-hidden border border-white/5 shadow-[0_40px_100px_rgba(0,0,0,0.6)]">
              <div className="bg-white/5 px-4 lg:px-8 py-3 lg:py-5 border-b border-white/5 flex items-center justify-between">
                <div className="flex gap-2 lg:gap-4">
                  <div className="h-1.5 w-10 lg:w-16 bg-white/10 rounded-full"></div>
                  <div className="h-1.5 w-8 lg:w-12 bg-white/10 rounded-full"></div>
                </div>
                <div className="mono text-[8px] lg:text-[10px] text-blue-400/70 tracking-[0.3em] lg:tracking-[0.5em] uppercase">Workspace Preview</div>
                <div className="flex gap-1.5">
                  <div className="w-1.5 h-1.5 lg:w-2.5 lg:h-2.5 rounded-full bg-white/5"></div>
                  <div className="w-1.5 h-1.5 lg:w-2.5 lg:h-2.5 rounded-full bg-white/10"></div>
                </div>
              </div>

              <div className="grid grid-cols-1 lg:grid-cols-2 gap-0">
                <div className="p-6 lg:p-8 border-b lg:border-b-0 lg:border-r border-white/5">
                  <p className="text-[10px] font-black text-slate-500 uppercase tracking-[0.25em]">Account Flow</p>
                  <div className="mt-5 space-y-4">
                    {['Create account profile', 'Complete KYC/AML checks', 'Fund wallet and set controls', 'Start trading or automation'].map((step) => (
                      <div key={step} className="flex items-center gap-3 text-sm text-slate-300">
                        <CheckCircle2 className="w-4 h-4 text-emerald-400 flex-shrink-0" />
                        <span>{step}</span>
                      </div>
                    ))}
                  </div>
                </div>

                <div className="p-6 lg:p-8">
                  <p className="text-[10px] font-black text-slate-500 uppercase tracking-[0.25em]">Product Modules</p>
                  <div className="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-3">
                    {['Live Trading', 'Signals', 'Bot Trading', 'Copy Trading', 'Exchange / Swap', 'Staking / Wallets'].map((item) => (
                      <div key={item} className="rounded-lg border border-white/10 bg-white/[0.03] px-3 py-2 text-xs text-slate-300 font-semibold">
                        {item}
                      </div>
                    ))}
                  </div>
                  <p className="mt-5 text-xs text-slate-500 leading-relaxed">
                    Interface shown as product preview. Live pricing and market movement are provided in the Live Market Core section below.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default Hero;
