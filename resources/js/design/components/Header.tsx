
import React, { useState, useEffect } from 'react';
import { Menu, X, ArrowRight, ChevronDown } from 'lucide-react';
import { appRoute } from '../routes';

const Header: React.FC = () => {
  const [isScrolled, setIsScrolled] = useState(false);
  const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 20);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const navLinks = [
    { name: 'Markets', href: '#markets' },
    { name: 'Capabilities', href: '#features' },
    { name: 'Platform', href: '#platform' },
    { name: 'Trust', href: '#trust' },
    { name: 'FAQ', href: '#faq' },
  ];

  return (
    <header 
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-500 ${
        isScrolled ? 'glass-dark py-3 border-b border-white/5' : 'bg-transparent py-6'
      }`}
    >
      <div className="container mx-auto px-6 flex items-center justify-between">
        <a href={appRoute('home', '/')} className="flex items-center space-x-3 cursor-pointer group">
          <div className="w-10 h-10 bg-gradient-to-br from-blue-600 to-indigo-700 rounded-lg flex items-center justify-center shadow-2xl shadow-blue-500/20 group-hover:scale-110 transition-transform">
            <span className="text-white font-extrabold text-xl italic tracking-tighter">B</span>
          </div>
          <span className="text-xl font-bold tracking-[0.2em] text-white uppercase">BRIXCAP</span>
        </a>

        {/* Desktop Nav */}
        <nav className="hidden lg:flex items-center space-x-12">
          {navLinks.map((link) => (
            <a 
              key={link.name} 
              href={link.href}
              className="text-xs font-bold text-slate-400 hover:text-white transition-all uppercase tracking-widest flex items-center gap-1.5"
            >
              {link.name}
              <ChevronDown size={12} className="opacity-40" />
            </a>
          ))}
        </nav>

        <div className="hidden lg:flex items-center space-x-6">
          <a href={appRoute('login', '/login')} className="text-xs font-bold text-slate-400 hover:text-white transition-colors uppercase tracking-widest">
            Login
          </a>
          <a href={appRoute('register', '/register')} className="bg-white hover:bg-slate-100 text-black px-6 py-3 rounded-lg text-xs font-black uppercase tracking-widest transition-all shadow-xl hover:shadow-white/10 active:scale-95">
            Open Account
          </a>
        </div>

        {/* Mobile Toggle */}
        <button 
          className="lg:hidden text-white p-2"
          onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
        >
          {isMobileMenuOpen ? <X /> : <Menu />}
        </button>
      </div>

      {/* Mobile Menu */}
      {isMobileMenuOpen && (
        <div className="lg:hidden absolute top-full left-0 right-0 glass-dark border-b border-white/5 p-8 flex flex-col space-y-6 animate-fade-in-up">
          {navLinks.map((link) => (
            <a 
              key={link.name} 
              href={link.href}
              className="text-sm font-bold text-slate-300 hover:text-blue-400 flex justify-between items-center tracking-widest uppercase"
              onClick={() => setIsMobileMenuOpen(false)}
            >
              {link.name}
              <ArrowRight size={14} className="opacity-20" />
            </a>
          ))}
          <div className="pt-6 flex flex-col space-y-4">
            <a href={appRoute('register', '/register')} className="bg-white text-black py-4 rounded-lg font-black text-xs uppercase tracking-widest text-center">Open Account</a>
          </div>
        </div>
      )}
    </header>
  );
};

export default Header;
