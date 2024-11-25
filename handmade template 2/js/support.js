document.addEventListener("DOMContentLoaded", () => {
    // Configurazione dell'animazione
    const texts = ["Trusted Partner", "Expert Solutions", "Cost-Effective", "Tailored Support", "Flexible Solutions"];
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
            typedElement.textContent = currentText.slice(0, charIndex);
            charIndex++;
            if (charIndex === currentText.length + 1) {
                // Pausa dopo aver completato la scrittura
                setTimeout(() => {
                    isDeleting = true;
                    typeEffect();
                }, pauseDelay);
                return;
            }
        } else {
            // Rimuovi caratteri uno alla volta
            charIndex--;
            typedElement.textContent = currentText.slice(0, charIndex);
            if (charIndex === 0) {
                // Passa al testo successivo dopo la cancellazione
                isDeleting = false;
                textIndex = (textIndex + 1) % texts.length; // Torna al primo testo se necessario
                setTimeout(typeEffect, typeSpeed);
                return;
            }
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
