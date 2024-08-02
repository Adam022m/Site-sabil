const BurgerMenuButton = document.querySelector(".hamburger");
const BurgerMenu = document.querySelector(".container-links");
const CloseButton = document.querySelector(".close-button");

BurgerMenuButton.addEventListener("click", () => {
  BurgerMenuButton.classList.toggle("open");
  BurgerMenu.classList.toggle("open");
  CloseButton.classList.toggle("open");
});
CloseButton.addEventListener("click", () => {
  BurgerMenuButton.classList.toggle("open");
  BurgerMenu.classList.toggle("open");
  CloseButton.classList.toggle("open");
});
