const BurgerMenuButton = document.querySelector(".hamburger");
const BurgerMenu = document.querySelector(".container-links");

BurgerMenuButton.addEventListener('click', () => {
  BurgerMenuButton.classList.toggle('open');
  BurgerMenu.classList.toggle('open');
});

// const BurgerMenuButton = document.querySelector(".hamburger");
// const BurgerMenu = document.querySelector(".container-links");

// BurgerMenuButton.addEventListener('click', () => {
//   BurgerMenuButton.classList.toggle('open');
//   BurgerMenu.classList.toggle('open');
// });
