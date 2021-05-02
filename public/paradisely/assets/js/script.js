/*===== MENU SHOW Y HIDDEN =====*/
const navMenu = document.getElementById("nav-menu"),
    toggleMenu = document.getElementById("nav-toggle"),
    closeMenu = document.getElementById("nav-close");

// SHOW
toggleMenu.addEventListener("click", () => {
    navMenu.classList.toggle("show");
});

// HIDDEN
closeMenu.addEventListener("click", () => {
    navMenu.classList.remove("show");
});

/*===== GSAP ANIMATION =====*/
// NAV
gsap.from(".nav__logo, .nav__toggle", {
    opacity: 0,
    duration: 1,
    delay: 2,
    y: 10
});
gsap.from(".nav__item", {
    opacity: 0,
    duration: 1,
    delay: 2.1,
    y: 30,
    stagger: 0.2
});

// HERO SECTION
gsap.from(".hero__small", { opacity: 0, duration: 1, delay: 1.6, y: 30 });
gsap.from(".hero__big", { opacity: 0, duration: 1, delay: 1.8, y: 30 });
gsap.from(".hero__description", { opacity: 0, duration: 1, delay: 1.8, y: 30 });
gsap.from(".hero__button", { opacity: 0, duration: 1, delay: 2.1, y: 30 });
gsap.from(".hero__image", { opacity: 0, duration: 1, delay: 1.3, y: 30 });
gsap.from(".hero__arrow", { opacity: 0, duration: 1, delay: 1.9, y: 30 });

AOS.init();
