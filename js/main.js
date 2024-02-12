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
  menu.classList.add("menu-open");
});
closeButton.addEventListener("click", () => {
  menu.classList.remove("menu-open");
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
  
  subMenus.forEach(subMenu => {
      subMenu.addEventListener('click', function () {
          // Cerrar todos los sub-menús
          subMenus.forEach(menu => {
              if (menu !== subMenu) {
                  menu.querySelector('ul').classList.remove('show');
              }
          });

          // Toggle (abrir/cerrar) el sub-menú actual
          const submenuList = subMenu.querySelector('ul');
          submenuList.classList.toggle('show');
      });
  });
});