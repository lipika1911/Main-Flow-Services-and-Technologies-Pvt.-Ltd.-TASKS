const navToggle = document.querySelector('.mobile-nav-toggle');
const primaryNav = document.querySelector('#primary-nav');
const dropdowns = document.querySelectorAll('.dropdown');
const body = document.body;

// Handle mobile menu toggle
navToggle.addEventListener('click', () => {
    const visibility = primaryNav.getAttribute('data-visible');
    if (visibility === "false" || !visibility) {
        primaryNav.setAttribute('data-visible', true);
        navToggle.setAttribute('aria-expanded', true);
        body.classList.add('menu-open');
    } else {
        primaryNav.setAttribute('data-visible', false);
        navToggle.setAttribute('aria-expanded', false);
        body.classList.remove('menu-open');
    }
});

// Handle mobile dropdowns
dropdowns.forEach(dropdown => {
    const link = dropdown.querySelector('.dropdown-toggle');
    link.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            // Close other dropdowns
            dropdowns.forEach(d => {
                if (d !== dropdown) {
                    d.classList.remove('active');
                }
            });
            dropdown.classList.toggle('active');
        }
    });
});

// Close mobile menu when clicking outside
document.addEventListener('click', (e) => {
    if (!primaryNav.contains(e.target) && !navToggle.contains(e.target)) {
        primaryNav.setAttribute('data-visible', false);
        navToggle.setAttribute('aria-expanded', false);
        body.classList.remove('menu-open');
    }
}); 