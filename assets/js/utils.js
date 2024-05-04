function toggleHamburger() {
    var hamburger = document.querySelector('.hamburger');
    var menu = document.querySelector('.container__nav--menu');
    hamburger.classList.toggle('active');
    menu.classList.toggle('open');
}