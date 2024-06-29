document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.scroll-to-section[data-target]');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            const targetSelector = button.getAttribute('data-target');
            const targetElement = document.querySelector(targetSelector);

            if (targetElement) {
                const offset = 70; // Navbar
                const elementPosition = targetElement.getBoundingClientRect().top + window.pageYOffset;
                const offsetPosition = elementPosition - offset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
});
