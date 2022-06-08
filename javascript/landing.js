let nav = document.querySelector('nav');
let navbar = document.querySelector('.navbar-nav');
let navbarbrand = document.querySelector('.navbar-brand');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 100) {
        nav.classList.add('bg-light', 'shadow');
        navbar.classList.add('navBar-menu'); 
        navbarbrand.classList.remove('text-white');

    } else {
        nav.classList.remove('bg-light', 'shadow');
        navbar.classList.remove('navBar-menu');
        navbarbrand.classList.add('text-white'); 
    }
}); 