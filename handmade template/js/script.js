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

  // Function for the form

document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const modal = document.createElement('div');

    // Funzione per creare un modal
    const createModal = (title, message, success = false) => {
        modal.innerHTML = `
            <div class="modal fade" tabindex="-1" id="feedbackModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header ${success ? 'bg-success' : 'bg-danger'} text-white">
                            <h5 class="modal-title">${title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>${message}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>`;
        document.body.appendChild(modal);
        const bootstrapModal = new bootstrap.Modal(document.getElementById('feedbackModal'));
        bootstrapModal.show();
    };

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        // Validazione dei campi
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const subject = document.getElementById('subject').value.trim();
        const message = document.getElementById('message').value.trim();
        const consent = document.getElementById('consent').checked;
        const recaptchaResponse = grecaptcha.getResponse();

        if (!name) {
            createModal('Error', 'Full Name is required.');
            return;
        }
        if (!email.includes('@') || !email.includes('.')) {
            createModal('Error', 'Invalid email address.');
            return;
        }
        if (!subject) {
            createModal('Error', 'Subject is required.');
            return;
        }
        if (!message) {
            createModal('Error', 'Message cannot be empty.');
            return;
        }
        if (!consent) {
            createModal('Error', 'You must agree to the consent.');
            return;
        }
        if (!recaptchaResponse) {
            createModal('Error', 'Please complete the reCAPTCHA.');
            return;
        }

        // Simula l'invio del form
        try {
            // Esegui eventuali chiamate API qui
            // Esempio di invio del form con fetch:
            /*
            const response = await fetch('/submit-form', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ name, email, subject, message, recaptchaResponse }),
            });
            const result = await response.json();
            if (!result.success) throw new Error(result.message);
            */

            createModal('Success', 'Your message has been sent successfully!', true);
            form.reset();
            grecaptcha.reset(); // Resetta il reCAPTCHA
        } catch (error) {
            createModal('Error', `Failed to send message: ${error.message}`);
        }
    });
});


