import React from 'react';
import ReactDOM from 'react-dom';
import Header from './components/Header';
import MainPage from './components/MainPage';

ReactDOM.render(
  <React.StrictMode>
    <div>
      <Header />
      <MainPage />
    </div>
  </React.StrictMode>,
  document.getElementById('app')
);
