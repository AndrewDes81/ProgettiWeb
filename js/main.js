function openImgModal(src) {
    const modal = document.getElementById("imgModal");
    const modalImg = document.getElementById("imgModalContent");

    modalImg.src = src;
    modal.style.display = "flex";
}

function closeImgModal() {
    const modal = document.getElementById("imgModal");
    modal.style.display = "none";
}

// Validazione form contatti
document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById('contattiForm');
    const nome = document.getElementById('nome');
    const email = document.getElementById('email');
    const telefono = document.getElementById('telefono');
    const messaggio = document.getElementById('messaggio');
    const submitBtn = form.querySelector('button[type="submit"]');
    const successBox = document.getElementById('formSuccess');

    // Disabilita il pulsante finché il form non è valido
    submitBtn.disabled = true;

    function validateForm() {
        let valid = true;

        // Nome
        if (nome.value.trim().length < 2) {
            nome.classList.add("is-invalid");
            nome.classList.remove("is-valid");
            valid = false;
        } else {
            nome.classList.remove("is-invalid");
            nome.classList.add("is-valid");
        }

        // Email
        if (!email.checkValidity()) {
            email.classList.add("is-invalid");
            email.classList.remove("is-valid");
            valid = false;
        } else {
            email.classList.remove("is-invalid");
            email.classList.add("is-valid");
        }

        // Telefono (solo numeri)
        const phoneRegex = /^[0-9]{7,15}$/;
        if (!phoneRegex.test(telefono.value.trim())) {
            telefono.classList.add("is-invalid");
            telefono.classList.remove("is-valid");
            valid = false;
        } else {
            telefono.classList.remove("is-invalid");
            telefono.classList.add("is-valid");
        }

        // Messaggio
        if (messaggio.value.trim().length < 10) {
            messaggio.classList.add("is-invalid");
            messaggio.classList.remove("is-valid");
            valid = false;
        } else {
            messaggio.classList.remove("is-invalid");
            messaggio.classList.add("is-valid");
        }

        submitBtn.disabled = !valid;
    }

    // Eventi live
    nome.addEventListener("input", validateForm);
    email.addEventListener("input", validateForm);
    telefono.addEventListener("input", validateForm);
    messaggio.addEventListener("input", validateForm);

    // Submit finale
    form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
            return;
        }

        event.preventDefault(); // evita invio reale

        // Mostra messaggio di successo
        successBox.classList.remove("d-none");
        setTimeout(() => {
            successBox.classList.add("show");
        }, 50);

        // Reset form
        form.reset();
        form.classList.remove("was-validated");

        // Rimuovi validazioni visive
        [nome, email, telefono, messaggio].forEach(el => {
            el.classList.remove("is-valid", "is-invalid");
        });

        // Disabilita di nuovo il pulsante
        submitBtn.disabled = true;
    });

});

