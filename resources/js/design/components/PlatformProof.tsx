import React from 'react';
import { Activity, ShieldAlert, Zap } from 'lucide-react';

const PlatformProof: React.FC = () => {
  return (
    <section id="platform" className="py-32 bg-[#050505] text-white overflow-hidden relative">
      <div
        className="absolute inset-0 opacity-10 pointer-events-none"
        style={{ backgroundImage: 'radial-gradient(circle at 1px 1px, #333 1px, transparent 0)', backgroundSize: '40px 40px' }}
      ></div>

      <div className="container mx-auto px-6 relative z-10">
        <div className="grid lg:grid-cols-2 gap-24 items-center">
          <div className="space-y-12">
            <div className="space-y-6">
              <div className="inline-flex items-center gap-2 text-blue-500 text-[10px] font-black tracking-[0.4em] uppercase">
                <Zap size={14} className="fill-current" />
                Platform Proof
              </div>
              <h3 className="text-5xl lg:text-7xl font-black tracking-tighter leading-[0.9]">
                Product evidence, <br /><span className="text-slate-600">not marketing claims.</span>
              </h3>
              <p className="text-slate-400 text-xl font-medium leading-relaxed">
                BRIXCAP is built around execution workflow clarity, risk controls, and account operations transparency.
                The platform is designed so traders can see status, actions, and controls at every step.
              </p>
            </div>

            <div className="grid sm:grid-cols-2 gap-10">
              <div className="space-y-4">
                <div className="flex items-center gap-3 text-blue-500 font-black text-xs uppercase tracking-widest">
                  <Activity className="w-5 h-5" />
                  Execution Workflow
                </div>
                <h4 className="text-xl font-bold">Order Routing & Fills</h4>
                <p className="text-slate-500 text-sm leading-relaxed">
                  Submit orders, track acknowledgement, and monitor fill status in one unified flow.
                </p>
              </div>
              <div className="space-y-4">
                <div className="flex items-center gap-3 text-emerald-500 font-black text-xs uppercase tracking-widest">
                  <ShieldAlert className="w-5 h-5" />
                  Risk Layer
                </div>
                <h4 className="text-xl font-bold">Pre-Trade & Account Controls</h4>
                <p className="text-slate-500 text-sm leading-relaxed">
                  Configure position risk settings, account checks, and operational safeguards before execution.
                </p>
              </div>
            </div>
          </div>

          <div className="relative">
            <div className="absolute -inset-10 bg-blue-600/10 blur-[100px] rounded-full pointer-events-none"></div>
            <div className="relative glass-dark rounded-[2.25rem] p-8 lg:p-12 border border-white/5 shadow-2xl">
              <div className="space-y-8">
                <div className="flex justify-between items-center border-b border-white/5 pb-6">
                  <div className="space-y-1">
                    <p className="text-slate-500 text-[10px] font-black uppercase tracking-widest">Operational Status</p>
                    <p className="text-lg font-black mono text-emerald-400">Monitoring Active</p>
                  </div>
                  <div className="h-12 w-12 rounded-2xl bg-emerald-500/10 flex items-center justify-center">
                    <Activity className="text-emerald-500 animate-pulse" />
                  </div>
                </div>

                <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
                  <div className="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <p className="text-[10px] font-black text-slate-500 uppercase tracking-widest">Live Markets</p>
                    <p className="mt-2 text-sm text-slate-300">Watchlists and pricing stream directly in workspace modules.</p>
                  </div>
                  <div className="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <p className="text-[10px] font-black text-slate-500 uppercase tracking-widest">Risk Controls</p>
                    <p className="mt-2 text-sm text-slate-300">Manage limits, checks, and protective settings before orders are submitted.</p>
                  </div>
                  <div className="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <p className="text-[10px] font-black text-slate-500 uppercase tracking-widest">Account Tools</p>
                    <p className="mt-2 text-sm text-slate-300">Track KYC status, funding, withdrawals, and transfer history in one place.</p>
                  </div>
                  <div className="rounded-xl border border-white/10 bg-white/[0.03] p-4">
                    <p className="text-[10px] font-black text-slate-500 uppercase tracking-widest">Audit Trail</p>
                    <p className="mt-2 text-sm text-slate-300">Review order and account events with timestamped operational visibility.</p>
                  </div>
                </div>

                <div className="bg-white/5 rounded-2xl p-5 border border-white/5">
                  <p className="text-slate-300 text-[10px] font-black uppercase tracking-[0.2em] mb-3">Core Safeguard Layers</p>
                  <div className="flex flex-wrap gap-2">
                    {['KYC_AML_CHECKS', 'WITHDRAWAL_REVIEW', 'SESSION_SECURITY', 'RISK_ALERTS'].map((tag) => (
                      <span key={tag} className="px-3 py-1 bg-white/5 border border-white/10 rounded-lg text-[9px] font-black text-slate-500 mono">
                        {tag}
                      </span>
                    ))}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
};

export default PlatformProof;
