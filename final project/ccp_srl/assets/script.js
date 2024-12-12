document.querySelector('.styled-link').addEventListener('click', function (event) {
    // Prevent default behavior of the link
    event.preventDefault();
  
    // Collapse functionality (Bootstrap will handle this automatically)
    const collapseTargetId = this.getAttribute('data-bs-target');
    const collapseTarget = document.querySelector(collapseTargetId);
    if (collapseTarget && collapseTarget.classList.contains('collapse')) {
      collapseTarget.classList.toggle('show'); // Manages the collapse
    }
  
    // Scroll functionality
    const scrollTargetId = this.getAttribute('href');
    const scrollTarget = document.querySelector(scrollTargetId);
    if (scrollTarget) {
      scrollTarget.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });

// Function to set the footer year dynamically
  function updateFooterYear() {
    const yearSpan = document.getElementById('current-year');
    const currentYear = new Date().getFullYear();
    yearSpan.textContent = currentYear;
  }

  // Call the function on page load
  updateFooterYear();
  
    document.addEventListener('DOMContentLoaded', function () {
        const modalElement = document.getElementById('formModal');
        if (modalElement && modalElement.classList.contains('show')) {
            const modal = new bootstrap.Modal(modalElement);
            modal.show();
        }
    });

