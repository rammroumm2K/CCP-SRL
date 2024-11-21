

  // Function to set the footer year dynamically
  function updateFooterYear() {
    const yearSpan = document.getElementById('current-year');
    const currentYear = new Date().getFullYear();
    yearSpan.textContent = currentYear;
  }

  // Call the function on page load
  updateFooterYear();

  
  
  