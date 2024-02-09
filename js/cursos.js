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

// swiper
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });