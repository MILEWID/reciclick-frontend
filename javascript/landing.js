let nav = document.querySelector('nav');
let navbar = document.querySelector('.navbar-nav');
let navbarbrand = document.querySelector('.navbar-brand');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('navbar-light');
        navbar.classList.add('navBar-menu'); 
    } else {
        nav.classList.remove('navbar-light');
        navbar.classList.remove('navBar-menu');
    }
}); 