document.querySelectorAll('.sidebar-item a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();

        const targetId = this.getAttribute('href');
        const target = document.querySelector(targetId);
        const container = document.querySelector('.content');

        if (target && container) {
            // Calculate the correct offset
            const containerRect = container.getBoundingClientRect();
            const targetRect = target.getBoundingClientRect();

            const offsetTop = targetRect.top - containerRect.top + container.scrollTop;

            container.scroll({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});


