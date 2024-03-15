// JavaScript (menuLateralIzquierda.js)
function highlight(event, element) {
    event.preventDefault();

    var menuItems = document.querySelectorAll('.seccionLateralIzquierda ol li a');
    for (var i = 0; i < menuItems.length; i++) {
        menuItems[i].classList.remove('active');
    }
    element.classList.add('active');
}
