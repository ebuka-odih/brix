import React from 'react';
import ReactDOM from 'react-dom/client';
import './bootstrap';
import '../css/app.css';
import './design/frontpage.css';
import App from './design/App';

const rootElement = document.getElementById('root');

if (!rootElement) {
    throw new Error('Could not find root element to mount to');
}

ReactDOM.createRoot(rootElement).render(
    <React.StrictMode>
        <div id="main-content">
            <App />
        </div>
    </React.StrictMode>
);
