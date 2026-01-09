document.addEventListener('DOMContentLoaded', function () {
    // Elements
    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    const navOverlay = document.getElementById('navOverlay');
    const body = document.body;

    // CEK: pastikan elemennya ada
    if (!menuToggle || !navLinks) {
        console.error('Menu elements not found!');
        return;
    }

    console.log('JavaScript loaded successfully');

    // Mobile menu toggle function
    function toggleMenu() {
        console.log('Toggle menu clicked');
        const isActive = navLinks.classList.contains('active');
        
        if (isActive) {
            closeMenu();
        } else {
            openMenu();
        }
    }

    // Open menu function
    function openMenu() {
        console.log('Opening menu');
        navLinks.classList.add('active');
        if (navOverlay) {
            navOverlay.classList.add('active');
            console.log('Overlay added');
        }
        body.classList.add('menu-open');
        menuToggle.innerHTML = '<i class="fas fa-times"></i>';
        menuToggle.setAttribute('aria-expanded', 'true');
    }

    // Close menu function
    function closeMenu() {
        console.log('Closing menu');
        navLinks.classList.remove('active');
        if (navOverlay) {
            navOverlay.classList.remove('active');
        }
        body.classList.remove('menu-open');
        menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
        menuToggle.setAttribute('aria-expanded', 'false');
    }

    // Mobile menu toggle event
    menuToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu();
    });

    // Close menu when overlay clicked
    if (navOverlay) {
        navOverlay.addEventListener('click', function(e) {
            e.stopPropagation();
            closeMenu();
        });
    }

    // Close menu when link clicked
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', function(e) {
            console.log('Nav link clicked:', this.href);
            closeMenu();
            
            // Update active link
            document.querySelectorAll('.nav-links a').forEach(item => {
                item.classList.remove('active');
            });
            this.classList.add('active');
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(e) {
        if (navLinks.classList.contains('active') && 
            !navLinks.contains(e.target) && 
            e.target !== menuToggle) {
            closeMenu();
        }
    });

    // Download CV
    const downloadBtn = document.getElementById('downloadCV');
    if (downloadBtn) {
        downloadBtn.addEventListener('click', function () {
            alert('CV berhasil diunduh! (Demo)');
        });
    }

    // Smooth scroll
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            if (this.getAttribute('href') === '#') return;
            
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Header shadow on scroll
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (header) {
            header.style.boxShadow = window.scrollY > 100
                ? '0 5px 20px rgba(0,0,0,.1)'
                : '0 10px 15px -3px rgba(0,0,0,.1)';
        }
    });

    // Close menu on escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && navLinks.classList.contains('active')) {
            closeMenu();
        }
    });

    // Update active nav link on scroll
    window.addEventListener('scroll', () => {
        const sections = document.querySelectorAll('section');
        const navLinksItems = document.querySelectorAll('.nav-links a');
        
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= (sectionTop - 100)) {
                current = section.getAttribute('id');
            }
        });

        navLinksItems.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Prevent default behavior for empty hash links
    document.querySelectorAll('a[href="#"]').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
        });
    });
});