// loader
window.addEventListener("load", () => {
  document.getElementById("loader").classList.toggle("loader__bg-2");
});

// seccion de lenguajes
const lenguageButton = document.getElementById("lenguage"),
  options = document.getElementById("btn-lenguage"),
  option = document.getElementById("remove");

lenguageButton.addEventListener("click", () => {
  options.classList.toggle("lenguage-activate");
});

// menu responsive
const openButton = document.getElementById("menu-open"),
  menu = document.getElementById("menu"),
  closeButton = document.getElementById("menu-close");

openButton.addEventListener("click", () => {
  menu.classList.toggle("menu-open");
});


// swiper del header
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  navigation: {
    nextEl: ".arrow-next",
    prevEl: ".arrow-prev",
  },
  pagination: {
    el: ".swiper__navegation-1",
    clickable: true,
  },
  autoplay:{
    display: 4000,
    disableOnInteraction: false,
  }
});


// swiper de los cursos
let swiperCourse = new Swiper(".mySwipere", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".swiper-pagination-2",
    clickable: true,
    bulletActiveClass: "bullets-active",
  },
  breakpoints: {
    1200: {
      slidesPerView: 3,
    },

    750: {
      slidesPerView: 2,
    }
  }
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
