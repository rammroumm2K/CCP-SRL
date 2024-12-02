// Funzione per creare un cookie
function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    document.cookie = `${name}=${value};expires=${date.toUTCString()};path=/`;
  }
  
  // Funzione per ottenere il valore di un cookie
  function getCookie(name) {
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
      const c = cookies[i].trim();
      if (c.startsWith(name + '=')) {
        return c.substring(name.length + 1);
      }
    }
    return null;
  }
  
  // Funzione per controllare il consenso
  function checkCookieConsent() {
    if (!getCookie('cookieConsent')) {
      document.getElementById('cookieModal').style.display = 'block';
    }
  }
  
  // Gestione dei pulsanti
  document.getElementById('allowCookies').addEventListener('click', () => {
    setCookie('cookieConsent', 'accepted', 365);
    document.getElementById('cookieModal').style.display = 'none';
    console.log('Cookies allowed');
  });
  
  document.getElementById('declineCookies').addEventListener('click', () => {
    setCookie('cookieConsent', 'declined', 365);
    document.getElementById('cookieModal').style.display = 'none';
    console.log('Cookies declined');
  });
  
  // Mostra il modal se necessario
  window.onload = checkCookieConsent;
  