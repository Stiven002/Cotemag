// loader
window.addEventListener('load', ()=>{
  document.getElementById("loader").classList.toggle("loader__bg-2")
})

// seccion de lenguajes
const lenguageButton = document.getElementById('lenguage'),
    options = document.getElementById('btn-lenguage'),
    option = document.getElementById('remove');

lenguageButton.addEventListener('click', () =>{
    options.classList.toggle('lenguage-activate')
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
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination-2",
      clickable: true,
      bulletActiveClass: "bullets-active",
    },
  });