const BurgerMenuButton = document.querySelector(".hamburger");
const navbarMenu = document.querySelector(".main-navlinks");
const BurgerMenu = document.querySelector(".container-links");
const CloseButton = document.querySelector(".close-button");
const BodyElement = document.querySelector("body");

BurgerMenuButton.addEventListener("click", () => {
  BurgerMenuButton.classList.toggle("open");
  BurgerMenu.classList.toggle("open");
  CloseButton.classList.toggle("open");
  BodyElement.classList.toggle("navbar-open");
  navbarMenu.classList.toggle("open");
});

CloseButton.addEventListener("click", () => {
  BurgerMenuButton.classList.toggle("open");
  BurgerMenu.classList.toggle("open");
  CloseButton.classList.toggle("open");
  BodyElement.classList.toggle("navbar-open");
  navbarMenu.classList.toggle("open");
});

BurgerMenu.addEventListener("click", () => {
  BurgerMenuButton.classList.toggle("open");
  BurgerMenu.classList.toggle("open");
  CloseButton.classList.toggle("open");
  BodyElement.classList.toggle("navbar-open");
  navbarMenu.classList.toggle("open");
});

new ResizeObserver((entries) => {
  if (entries[0].contentRect.width <= 990) {
    BurgerMenu.style.transition = "transform 0.3 ease-out";
  } else {
    BurgerMenu.style.transition = "none";
  }
}).observe(document.body);
// Permet d'activer la transition ease out au lieu de l'avoir en css et de l'empêcher quand la taille de l'écran n'est pas en plus bas ou égal à 900px
