document.addEventListener('DOMContentLoaded', function() {
    eventListener();
    iniciarApp();
    //darkMode();
});

function darkMode() {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');

    // console.log(prefiereDarkMode.matches);

    if(prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }

    prefiereDarkMode.addEventListener('change', function() {
        if(prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });

    const botonDarkMode = document.querySelector('.contenedor-modos');

    botonDarkMode.addEventListener('click', function() {
        document.body.classList.toggle('dark-mode');
        const modo = document.querySelector('.lighMode');
        modo.classList.toggle('dark');
    })
}

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
    });
}

function cambiarNav() {
    const nav = document.querySelector('.contenedor-header');
    nav.classList.toggle('nav');
}

function eventListener() {
    const mostrarNav = document.querySelector('.imagen-nav');
    mostrarNav.addEventListener('click', mostrarNavegacion);
}

function mostrarNavegacion() {
    const navegacion = document.querySelector('.navegacion');
    navegacion.classList.toggle('show');

    const tipo = document.querySelector('.contenedor-info-tipo');
    tipo.classList.toggle('hide-tipo');
}