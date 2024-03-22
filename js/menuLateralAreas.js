// Variable para mantener el seguimiento del elemento activo
var activeMenuItem = null;

// Función para agregar la clase 'active' al elemento del menú cuando está visible en la pantalla
function activateMenu() {
    var menuItems = document.querySelectorAll('.menuLateral li a');
    var windowTop = window.pageYOffset || document.documentElement.scrollTop;
    var windowBottom = windowTop + window.innerHeight;
    
    // Iterar sobre todos los elementos del menú
    menuItems.forEach(function(item) {
        var sectionId = item.getAttribute('href').substring(1);
        var section = document.getElementById(sectionId);
        
        if (section) {
            var rect = section.getBoundingClientRect();
            var sectionTop = rect.top + windowTop;
            var sectionBottom = rect.bottom + windowTop;
            
            // Verificar si la sección está visible en la pantalla
            if (sectionTop <= windowBottom && sectionBottom >= windowTop) {
                // Agregar la clase 'active' solo al elemento actual y quitarla del elemento anterior
                if (activeMenuItem) {
                    activeMenuItem.classList.remove('active-lateral');
                }
                item.classList.add('active-lateral');
                activeMenuItem = item;
            }
        }
    });
}

// Llamamos a la función cuando se carga la página y cada vez que se hace scroll
document.addEventListener('DOMContentLoaded', activateMenu);
window.addEventListener('scroll', activateMenu);


