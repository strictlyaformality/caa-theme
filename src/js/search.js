function toggleSearch() {
    let $modal = document.getElementById('search-modal');
    let $input = document.getElementById('search-input');

    $modal?.classList.toggle('nav__search--open');
    $input?.focus();
}

document.addEventListener('DOMContentLoaded', function() {
    let $open = document.getElementById('search-open');
    let $close = document.getElementById('search-close');

    $open?.addEventListener('click', toggleSearch);
    $close?.addEventListener('click', toggleSearch);
});