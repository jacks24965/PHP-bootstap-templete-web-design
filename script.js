/**
 * Mobile Navigation Dropdown Script
 * JACKS.DEV | MASTER TOUFIK
 */
(function () {
    function initMobileMenu() {
        var menuBtn = document.getElementById('mobileMenuBtn');
        var navList = document.getElementById('mainNavbar');

        if (!menuBtn || !navList) return;

        // Toggle dropdown menu on button click/tap
        menuBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            var isOpen = navList.classList.toggle('show');
            menuBtn.classList.toggle('active', isOpen);
            menuBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        // Close dropdown when tapping any link inside it
        var links = navList.querySelectorAll('.nav-link');
        for (var i = 0; i < links.length; i++) {
            links[i].addEventListener('click', function () {
                navList.classList.remove('show');
                menuBtn.classList.remove('active');
                menuBtn.setAttribute('aria-expanded', 'false');
            });
        }

        // Close dropdown when tapping/clicking anywhere outside
        document.addEventListener('click', function (e) {
            if (!menuBtn.contains(e.target) && !navList.contains(e.target)) {
                if (navList.classList.contains('show')) {
                    navList.classList.remove('show');
                    menuBtn.classList.remove('active');
                    menuBtn.setAttribute('aria-expanded', 'false');
                }
            }
        });

        // Automatically close mobile menu if resized to desktop width
        window.addEventListener('resize', function () {
            if (window.innerWidth > 768) {
                navList.classList.remove('show');
                menuBtn.classList.remove('active');
                menuBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initMobileMenu);
    } else {
        initMobileMenu();
    }
})();





