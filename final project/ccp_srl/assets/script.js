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
    const form = document.getElementById('form-CCP'); // Seleziona il modulo con ID 'form-CCP'
    const modalElement = document.getElementById('formModal'); // Seleziona il modal con ID 'formModal'
    const modalInstance = new bootstrap.Modal(modalElement); // Inizializza il modal Bootstrap
    const modalTitle = document.getElementById('modalTitle'); // Titolo del modal
    const modalMessage = document.getElementById('modalMessage'); // Corpo del modal per i messaggi

    form.addEventListener('submit', function (e) {
        e.preventDefault(); // Impedisce il comportamento predefinito del modulo

        const formData = new FormData(form); // Recupera i dati del modulo

        // Esegue la richiesta AJAX
        fetch(form.action, {
            method: 'POST', // Metodo HTTP POST
            body: formData
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json(); // Converte la risposta in JSON
            })
            .then(data => {
                if (data.success) {
                    // Mostra messaggio di successo
                    modalTitle.textContent = 'Success';
                    modalMessage.innerHTML = `<p>${data.message}</p>`;
                    form.reset(); // Resetta il modulo
                } else {
                    // Mostra messaggi di errore
                    modalTitle.textContent = 'Error';
                    if (data.errors) {
                        modalMessage.innerHTML = data.errors.map(error => `<p>${error}</p>`).join('');
                    } else {
                        modalMessage.innerHTML = `<p>${data.message}</p>`;
                    }
                }
                modalInstance.show(); // Mostra il modal
            })
            .catch(error => {
                // Gestione errore generico
                modalTitle.textContent = 'Error';
                modalMessage.innerHTML = `<p>An unexpected error occurred. Please try again later.</p>`;
                modalInstance.show();
            });
    });
});
