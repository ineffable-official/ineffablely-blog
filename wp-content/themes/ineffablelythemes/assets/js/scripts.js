function showSearchModal() {
  const searchModal = document.getElementById("search-modal");
  const searchBtn = document.getElementById("search-btn").children[0];

  if (hasActiveClass(searchModal)) {
    searchModal.classList.remove("active");
    searchBtn.classList.remove("fa-times");
    searchBtn.classList.add("fa-search");
  } else {
    searchModal.classList.add("active");
    searchBtn.classList.remove("fa-search");
    searchBtn.classList.add("fa-times");
  }
}

function hasActiveClass(e) {
  for (let index = 0; index < e.classList.length; index++) {
    if (e.classList[index] == "active") {
      return true;
    }
  }
  return false;
}

const slideContainer = document.querySelector(".slider-container");
const slide = document.querySelector(".slides");
const nextBtn = document.getElementById("next-btn");
const prevBtn = document.getElementById("prev-btn");
const interval = 3000;

let slides = document.querySelectorAll(".slide");
let index = 1;
let slideId;

const firstClone = slides[0].cloneNode(true);
const lastClone = slides[slides.length - 1].cloneNode(true);

firstClone.id = "first-clone";
lastClone.id = "last-clone";

slide.append(firstClone);
slide.prepend(lastClone);

const slideWidth = slides[index].clientWidth;

slide.style.transform = `translateX(${-slideWidth * index}px)`;

const startSlide = () => {
  slideId = setInterval(() => {
    moveToNextSlide();
  }, interval);
};

const getSlides = () => document.querySelectorAll(".slide");

slide.addEventListener("transitionend", () => {
  slides = getSlides();
  if (slides[index].id === firstClone.id) {
    slide.style.transition = "none";
    index = 1;
    slide.style.transform = `translateX(${-slideWidth * index}px)`;
  }

  if (slides[index].id === lastClone.id) {
    slide.style.transition = "none";
    index = slides.length - 2;
    slide.style.transform = `translateX(${-slideWidth * index}px)`;
  }
});

const moveToNextSlide = () => {
  slides = getSlides();
  if (index >= slides.length - 1) return;
  index++;
  slide.style.transition = ".7s ease-out";
  slide.style.transform = `translateX(${-slideWidth * index}px)`;
};

const moveToPreviousSlide = () => {
  if (index <= 0) return;
  index--;
  slide.style.transition = ".7s ease-out";
  slide.style.transform = `translateX(${-slideWidth * index}px)`;
};

slideContainer.addEventListener("mouseenter", () => {
  clearInterval(slideId);
});

slideContainer.addEventListener("mouseleave", startSlide);
nextBtn.addEventListener("click", moveToNextSlide);
prevBtn.addEventListener("click", moveToPreviousSlide);

startSlide();

function showMenu() {
  var menuBtn = document.getElementById("menu-btn");
  var menuModal = document.getElementById("menu-modal");

  if (hasActiveClass(menuModal)) {
    menuModal.classList.remove("active");
    menuBtn.classList.remove("active");
  } else {
    menuModal.classList.add("active");
    menuBtn.classList.add("active");
  }
}
