import React from 'react';
import { appRoute } from '../routes';

const Footer: React.FC = () => {
  return (
    <footer className="bg-[#050505] text-white border-t border-white/5">
      <div className="container mx-auto px-6 py-24">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-16 mb-24">
          <div className="lg:col-span-2 space-y-8">
            <div className="flex items-center space-x-3 group">
              <div className="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center shadow-2xl shadow-blue-500/20">
                <span className="text-white font-black text-xl italic tracking-tighter">B</span>
              </div>
              <span className="text-xl font-bold tracking-[0.2em] text-white uppercase">BRIXCAP</span>
            </div>
            <p className="text-slate-500 text-sm leading-relaxed max-w-sm font-medium">
              Multi-asset trading platform for serious retail traders and small professional teams.
              Account onboarding, execution, funding, and portfolio tools are managed in one workspace.
            </p>
          </div>

          <div className="space-y-6">
            <h4 className="text-[10px] font-black uppercase tracking-[0.3em] text-blue-500">Markets</h4>
            <ul className="space-y-4 text-sm font-bold text-slate-500">
              <li><a href={appRoute('market', '/market')} className="hover:text-white transition-colors">Market Coverage</a></li>
              <li><a href={appRoute('trading', '/trading')} className="hover:text-white transition-colors">Trading Products</a></li>
              <li><a href={appRoute('platform', '/platform')} className="hover:text-white transition-colors">Platform</a></li>
              <li><a href={appRoute('news', '/news')} className="hover:text-white transition-colors">Market Updates</a></li>
            </ul>
          </div>

          <div className="space-y-6">
            <h4 className="text-[10px] font-black uppercase tracking-[0.3em] text-blue-500">Tools</h4>
            <ul className="space-y-4 text-sm font-bold text-slate-500">
              <li><a href="#features" className="hover:text-white transition-colors">Signals</a></li>
              <li><a href="#features" className="hover:text-white transition-colors">Bot Trading</a></li>
              <li><a href="#features" className="hover:text-white transition-colors">Copy Trading</a></li>
              <li><a href="#features" className="hover:text-white transition-colors">Staking & Wallets</a></li>
            </ul>
          </div>

          <div className="space-y-6">
            <h4 className="text-[10px] font-black uppercase tracking-[0.3em] text-blue-500">Company</h4>
            <ul className="space-y-4 text-sm font-bold text-slate-500">
              <li><a href={appRoute('trust', '/about')} className="hover:text-white transition-colors">About</a></li>
              <li><a href={appRoute('account', '/account')} className="hover:text-white transition-colors">Accounts</a></li>
              <li><a href={appRoute('consultant', '/consultant')} className="hover:text-white transition-colors">Advisor Desk</a></li>
              <li><a href={appRoute('contact', '/contact-us')} className="hover:text-white transition-colors">Contact</a></li>
            </ul>
          </div>

          <div className="space-y-6">
            <h4 className="text-[10px] font-black uppercase tracking-[0.3em] text-blue-500">Support</h4>
            <ul className="space-y-4 text-sm font-bold text-slate-500">
              <li><a href={appRoute('contact', '/contact-us')} className="hover:text-white transition-colors">Help Center</a></li>
              <li><a href={appRoute('contact', '/contact-us')} className="hover:text-white transition-colors">Contact Support</a></li>
              <li><a href={appRoute('contact', '/contact-us')} className="hover:text-white transition-colors">Report Issue</a></li>
              <li><a href={appRoute('contact', '/contact-us')} className="hover:text-white transition-colors">Risk Notice</a></li>
            </ul>
          </div>
        </div>

        <div className="pt-12 border-t border-white/5 flex flex-col md:flex-row items-center justify-between gap-8">
          <p className="text-[10px] font-black text-slate-600 uppercase tracking-widest">
            &copy; {new Date().getFullYear()} BRIXCAP. All rights reserved.
          </p>
          <p className="text-[10px] font-black text-slate-600 uppercase tracking-[0.2em] text-center md:text-right">
            Trading involves risk. Product availability may vary by jurisdiction.
          </p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;
