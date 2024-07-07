
document.addEventListener('DOMContentLoaded', function(){
 new Glider(document.querySelector('.glider'), {
     slidesToShow: 1,
     slidesToScroll: 1,
     draggable: true,
     dots: '.dots',
     arrows: {
         prev: '.glider-prev',
         next: '.glider-next'
     }
 });
});

// Navbar scroll effect
window.addEventListener('scroll', function() {
 var navbar = document.querySelector('.nav-bg');
 var scrollPosition = window.scrollY;

 if (scrollPosition > 0) {
     navbar.classList.add('scrolled');
 } else {
     navbar.classList.remove('scrolled');
 }
});

// Smooth scroll to section
function scrollToSection(sectionId) {
 var section = document.getElementById(sectionId);
 if (section) {
     section.scrollIntoView({ behavior: 'smooth' });
 }
}

// Automatic carousel functionality
const carrusel = document.querySelector('.carrusel__lista');
const velocidadCambio = 3000;

function avanzarCarrusel() {
 if (carrusel.scrollLeft + carrusel.offsetWidth >= carrusel.scrollWidth) {
     carrusel.scrollLeft = 0;
 } else {
     carrusel.scrollLeft += carrusel.offsetWidth;
 }
}

function iniciarCarruselAutomatico() {
 setInterval(avanzarCarrusel, velocidadCambio);
}


// Center images in the carousel
const imagenes = carrusel.querySelectorAll('.carrusel__elemento');

function centrarImagen(imagen) {
 const carruselAncho = carrusel.offsetWidth;
 const imagenAncho = imagen.offsetWidth;
 const margenIzquierdo = (carruselAncho - imagenAncho) / 2;
 imagen.style.marginLeft = margenIzquierdo + 'px';
}

function centrarImagenes() {
 imagenes.forEach(imagen => {
     centrarImagen(imagen);
 });
}

window.addEventListener('load', centrarImagenes);
window.addEventListener('resize', centrarImagenes);

