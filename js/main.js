


// swiper del header
var swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  effect: "fade",
  loop: true,
  autoplay: {
    delay: 3000, // Tiempo en milisegundos entre cada slide
    disableOnInteraction: false,},
  navigation: {
    nextEl: ".arrow-next",
    prevEl: ".arrow-prev",
  },
  pagination: {
    el: ".swiper__navegation-1",
    clickable: true,
  },
});





