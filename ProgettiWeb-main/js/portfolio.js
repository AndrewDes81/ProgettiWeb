document.addEventListener("DOMContentLoaded", () => {

    const buttons = document.querySelectorAll('.filter-btn');
    const items = document.querySelectorAll('.portfolio-col');

    buttons.forEach(btn => {
        btn.addEventListener('click', () => {
            const filter = btn.getAttribute('data-filter');

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
