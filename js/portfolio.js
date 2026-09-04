document.addEventListener("DOMContentLoaded", () => {

    const buttons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.portfolio-col');
	
	// Imposta "Tutti" come attivo all'avvio
    const defaultBtn = document.querySelector('[data-filter="all"]');
    if (defaultBtn) defaultBtn.classList.add('active');
	
    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

            // Rimuove active da tutti i pulsanti
            buttons.forEach(b => b.classList.remove('active'));

            // Aggiunge active al pulsante cliccato
            btn.classList.add('active');

            // Filtra gli elementi
            items.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.classList.remove('d-none');
                } else {
                    item.classList.add('d-none');
                }
            });
        });
    });

});
