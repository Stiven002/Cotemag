// loader
window.addEventListener("load", () => {
    document.getElementById("loader").classList.toggle("loader__bg-2");
  });
  

// menu responsive
const openButton = document.getElementById("menu-open"),
  menu = document.getElementById("menu"),
  closeButton = document.getElementById("menu-close");

openButton.addEventListener("click", () => {
  menu.classList.toggle("menu-open");
});

document.addEventListener('DOMContentLoaded', function () {
    const subMenus = document.querySelectorAll('.menu__list-item');
  
    function closeSubMenus() {
        subMenus.forEach(menu => {
            const submenuList = menu.querySelector('ul');
            submenuList.classList.remove('show');
        });
    }
  
    function handleMenuClick(event) {
  
        // Toggle (abrir/cerrar) el sub-menú actual
        const submenuList = this.querySelector('ul');
        submenuList.classList.toggle('show');
  
        // Cerrar todos los demás sub-menús
        subMenus.forEach(menu => {
            if (menu !== this) {
                const otherSubmenuList = menu.querySelector('ul');
                otherSubmenuList.classList.remove('show');
            }
        });
    }
  
    subMenus.forEach(subMenu => {
        subMenu.addEventListener('click', handleMenuClick);
    });

    // Cerrar todos los sub-menús cuando se hace clic fuera del menú
    document.addEventListener('click', function (event) {
      const isMenuClick = event.target.closest('.menu__icons');
      if (!isMenuClick) {
          closeSubMenus();
      }
  });

  
  
  
    // Limpiar estilos en el modo responsive al cambiar el tamaño de la ventana
    window.addEventListener('resize', function () {
        if (window.innerWidth > 1200) {
            // Si estamos en el modo normal, cerrar todos los sub-menús
            closeSubMenus();
            menu.classList.remove("menu-open");
        }
    });
  });
  
