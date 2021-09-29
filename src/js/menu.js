function toggleMenu() {
    let $menu = document.getElementById('nav-menu');
    let $mask = document.getElementById('nav-menu-mask');

    $menu?.classList.toggle('nav__menu--open');
    $mask?.classList.toggle('nav__menu-mask--displayed');
}

document.addEventListener('DOMContentLoaded', function() {
    let $toggler = document.getElementById('nav-menu-toggle');
    let $mask = document.getElementById('nav-menu-mask');
    let $close = document.getElementById('nav-menu-close');

    $toggler?.addEventListener('click', toggleMenu);
    $mask?.addEventListener('click', toggleMenu);
    $close?.addEventListener('click', toggleMenu);
});