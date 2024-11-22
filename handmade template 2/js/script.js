

  // Function to set the footer year dynamically
  function updateFooterYear() {
    const yearSpan = document.getElementById('current-year');
    const currentYear = new Date().getFullYear();
    yearSpan.textContent = currentYear;
  }

  // Call the function on page load
  updateFooterYear();

  
  
  !function() {
    "use strict";
    class t {
        constructor() {
            this.init()
        }
        init() {
            this.bsToolTip(),
            this.clipBoard()
        }
        bsToolTip() {
            [...document.querySelectorAll('[data-bs-toggle="tooltip"]')].map((t => new bootstrap.Tooltip(t)))
        }
        clipBoard() {
            new ClipboardJS(".bsb-clipboard",{
                target: t => t.closest(".bsb-code-snippet").querySelector(".bsb-highlight"),
                text: t => t.closest(".bsb-code-snippet").querySelector(".bsb-highlight").textContent.trim()
            }).on("success", (function(t) {
                const e = t.trigger.querySelector(".bsb-icon");
                e.classList.remove("bi-clipboard"),
                e.classList.add("bi-check2");
                const o = t.trigger.dataset.bsTitle
                  , i = bootstrap.Tooltip.getInstance(t.trigger);
                i.setContent({
                    ".tooltip-inner": "Copied!"
                }),
                setTimeout(( () => {
                    e.classList.remove("bi-check2"),
                    e.classList.add("bi-clipboard"),
                    i.setContent({
                        ".tooltip-inner": o
                    })
                }
                ), 2e3),
                t.clearSelection()
            }
            ))
        }
    }
    !function() {
        function e() {
            new t
        }
        "loading" === document.readyState ? document.addEventListener("DOMContentLoaded", e) : e(),
        window.addEventListener("load", (function() {}
        ), !1)
    }()
}();


document.addEventListener("DOMContentLoaded", () => {
    // Configurazione dell'animazione
    const texts = ["trendy notions", "creative imagination", "contemporary ideas"];
    const typedElement = document.getElementById("bsb-typed");
    const cursorElement = document.querySelector(".typed-cursor");
    let textIndex = 0; // Indice del testo corrente
    let charIndex = 0; // Indice del carattere corrente
    let isDeleting = false; // Flag per sapere se si sta cancellando il testo
    const typeSpeed = 100; // Velocità di scrittura
    const deleteSpeed = 50; // Velocità di cancellazione
    const pauseDelay = 1000; // Pausa tra le parole

    // Funzione per gestire l'effetto digitazione
    function typeEffect() {
        // Ottieni il testo corrente da animare
        const currentText = texts[textIndex];

        if (!isDeleting) {
            // Aggiungi caratteri uno alla volta
            typedElement.textContent = currentText.slice(0, charIndex++);
        } else {
            // Rimuovi caratteri uno alla volta
            typedElement.textContent = currentText.slice(0, charIndex--);
        }

        // Pausa dopo aver completato la scrittura
        if (charIndex === currentText.length && !isDeleting) {
            setTimeout(() => {
                isDeleting = true; // Passa alla cancellazione
                typeEffect();
            }, pauseDelay);
            return;
        }

        // Pausa dopo aver completato la cancellazione
        if (charIndex === 0 && isDeleting) {
            isDeleting = false; // Passa al testo successivo
            textIndex = (textIndex + 1) % texts.length; // Torna al primo testo se necessario
            setTimeout(typeEffect, typeSpeed);
            return;
        }

        // Continua l'animazione
        const nextStepSpeed = isDeleting ? deleteSpeed : typeSpeed;
        setTimeout(typeEffect, nextStepSpeed);
    }

    // Inizializza il cursore lampeggiante
    setInterval(() => {
        cursorElement.style.opacity = cursorElement.style.opacity === "0" ? "1" : "0";
    }, 500);

    // Avvia l'animazione
    typeEffect();
});

