import React, { useEffect, useRef } from 'react';
import { Activity, ArrowRight } from 'lucide-react';
import { appRoute } from '../routes';

const Markets: React.FC = () => {
  const widgetContainerRef = useRef<HTMLDivElement | null>(null);

  useEffect(() => {
    if (!widgetContainerRef.current) {
      return;
    }

    widgetContainerRef.current.innerHTML = '';

    const widgetTarget = document.createElement('div');
    widgetTarget.className = 'tradingview-widget-container__widget';
    widgetTarget.style.height = '520px';
    widgetTarget.style.width = '100%';

    const credit = document.createElement('div');
    credit.className = 'tradingview-widget-copyright text-[10px] text-slate-500 mt-3';
    credit.innerHTML = '<a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank" class="text-blue-400 hover:text-blue-300">Live market data by TradingView</a>';

    const script = document.createElement('script');
    script.type = 'text/javascript';
    script.async = true;
    script.src = 'https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js';
    script.innerHTML = JSON.stringify({
      colorTheme: 'dark',
      dateRange: '12M',
      showChart: true,
      locale: 'en',
      width: '100%',
      height: 520,
      isTransparent: true,
      showSymbolLogo: true,
      showFloatingTooltip: true,
      tabs: [
        {
          title: 'Forex',
          symbols: [
            { s: 'FX:EURUSD', d: 'EUR/USD' },
            { s: 'FX:GBPUSD', d: 'GBP/USD' },
            { s: 'FX:USDJPY', d: 'USD/JPY' }
          ]
        },
        {
          title: 'Crypto',
          symbols: [
            { s: 'BINANCE:BTCUSDT', d: 'BTC/USDT' },
            { s: 'BINANCE:ETHUSDT', d: 'ETH/USDT' },
            { s: 'BINANCE:SOLUSDT', d: 'SOL/USDT' }
          ]
        },
        {
          title: 'Indices',
          symbols: [
            { s: 'FOREXCOM:SPXUSD', d: 'S&P 500' },
            { s: 'FOREXCOM:NSXUSD', d: 'Nasdaq 100' },
            { s: 'FOREXCOM:DJI', d: 'Dow Jones' }
          ]
        },
        {
          title: 'Commodities',
          symbols: [
            { s: 'TVC:GOLD', d: 'Gold' },
            { s: 'TVC:SILVER', d: 'Silver' },
            { s: 'TVC:USOIL', d: 'WTI Oil' }
          ]
        }
      ]
    });

    widgetContainerRef.current.appendChild(widgetTarget);
    widgetContainerRef.current.appendChild(script);
    widgetContainerRef.current.appendChild(credit);

    return () => {
      if (widgetContainerRef.current) {
        widgetContainerRef.current.innerHTML = '';
      }
    };
  }, []);

  return (
    <section id="markets" className="py-24 lg:py-32 relative bg-[#080808]">
      <div className="container mx-auto px-6">
        <div className="flex flex-col lg:flex-row justify-between items-start lg:items-end mb-12 lg:mb-16 gap-8">
          <div className="max-w-3xl space-y-4 lg:space-y-6">
            <div className="flex items-center gap-2 text-blue-500 text-[10px] font-black uppercase tracking-[0.4em]">
              <Activity size={14} />
              Live Market Core
            </div>
            <h2 className="text-4xl lg:text-5xl font-black text-white tracking-tighter">
              Live pricing across key markets.
            </h2>
            <p className="text-base lg:text-lg text-slate-400 font-medium leading-relaxed">
              Stream real-time market data for forex, crypto, indices, and commodities. Use it as a live reference while
              planning entries, exits, and risk.
            </p>
          </div>
        </div>

        <div className="glass-dark rounded-[1.5rem] lg:rounded-2xl overflow-hidden border border-white/5 p-4 lg:p-6">
          <div ref={widgetContainerRef} className="tradingview-widget-container" aria-label="Live market data widget" />
        </div>

        <div className="mt-6 p-4 lg:p-6 border border-white/5 rounded-xl bg-white/[0.02] flex flex-col sm:flex-row items-center justify-between gap-4">
          <p className="text-[10px] lg:text-xs font-black text-slate-500 uppercase tracking-[0.2em] text-center sm:text-left">
            Market data feed for reference. Execution availability depends on account type and region.
          </p>
          <a href={appRoute('market', '/market')} className="text-[10px] lg:text-xs font-black text-blue-500 hover:text-blue-400 flex items-center gap-2 transition-colors uppercase tracking-widest">
            Explore Market Coverage <ArrowRight size={14} />
          </a>
        </div>
      </div>
    </section>
  );
};

export default Markets;
