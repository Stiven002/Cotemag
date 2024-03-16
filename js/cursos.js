const carrousel = document.querySelector(".carrousel"),
    firstItem = carrousel.querySelector(".item_carousel"), // Utiliza querySelector en lugar de querySelectorAll
    arrowIcons = document.querySelectorAll(".arrow");

let isDragStar = false, isDraging = false, prevPageX, prevScrollLeft;

const showHideIcon = () => {
    const scrollWidth = carrousel.scrollWidth - carrousel.clientWidth;
    arrowIcons[0].style.display = carrousel.scrollLeft === 0 ? "none" : "flex";
    arrowIcons[1].style.display = carrousel.scrollLeft >= scrollWidth ? "none" : "flex";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstItemWidth = firstItem.clientWidth + 16;
        carrousel.scrollLeft += icon.id == "left" ? -firstItemWidth : firstItemWidth; // Corregir la variable a firstItemWidth
        setTimeout(() => showHideIcon(), 60);
    });
});

const dragStar = (e) => {
    isDragStar = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carrousel.scrollLeft;
}

const dragging = (e) => {
    if (!isDragStar) return;
    e.preventDefault();
    isDraging = true;

    carrousel.classList.add("dragging");
    let positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carrousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcon();
}

const dragStop = () => {
    isDragStar = false;
    carrousel.classList.remove("dragging");
}

document.addEventListener("mousemove", dragging, { passive: false });
document.addEventListener("touchmove", dragging, { passive: false });

document.addEventListener("mouseup", dragStop);
document.addEventListener("mouseleave", dragStop);

document.addEventListener("touchend", dragStop);
document.addEventListener("touchcancel", dragStop);

carrousel.addEventListener("mousedown", dragStar);
carrousel.addEventListener("touchstart", dragStar);

// Función para mover el carrusel automáticamente de forma infinita
const moveAutomatically = () => {
    const firstItemWidth = firstItem.clientWidth + 16;
    const totalWidth = carrousel.scrollWidth;

    // Si el carrusel está en el último elemento, vuelve al primero
    if (carrousel.scrollLeft + carrousel.clientWidth >= totalWidth) {
        carrousel.scrollLeft = 0;
    } else {
        carrousel.scrollLeft += firstItemWidth; // Mover al siguiente item
    }
    
    setTimeout(() => showHideIcon(), 60);
};

// Llamar a la función cada 5 segundos
setInterval(moveAutomatically, 5000);
