document.addEventListener('DOMContentLoaded', function() {
    eventListener();
    iniciarApp();
});

function iniciarApp() {
    navegacionFija();
}

function navegacionFija() {
    const nav = document.querySelector('.contenedor-header');
    const header = document.querySelector('.header');

    window.addEventListener('scroll', function() {
        if(header.getBoundingClientRect().bottom < 0) {
            nav.classList.add('nav');
        } else {
            nav.classList.remove('nav');
        }
    })
}

function cambiarNav() {
    const nav = document.querySelector('.contenedor-header');
    nav.classList.toggle('nav');
}

function eventListener() {
    const mostrarNav = document.querySelector('.imagen-nav')
    mostrarNav.addEventListener('click', mostrarNavegacion);
}

function mostrarNavegacion() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('show');
}