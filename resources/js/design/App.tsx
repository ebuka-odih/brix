
import React from 'react';
import Header from './components/Header';
import Hero from './components/Hero';
import Features from './components/Features';
import Process from './components/Process';
import PlatformProof from './components/PlatformProof';
import Trust from './components/Trust';
import Markets from './components/Markets';
import FAQ from './components/FAQ';
import Footer from './components/Footer';

const App: React.FC = () => {
  return (
    <div className="min-h-screen flex flex-col bg-[#050505] selection:bg-blue-500/30 selection:text-blue-200">
      <div className="fixed inset-0 pointer-events-none z-0">
        <div className="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-[0.03] brightness-100 contrast-150"></div>
        <div className="scanline"></div>
      </div>
      
      <Header />
      <main className="flex-grow relative z-10">
        <Hero />
        <Markets />
        <Features />
        <PlatformProof />
        <Process />
        <Trust />
        <FAQ />
      </main>
      <Footer />
    </div>
  );
};

export default App;
