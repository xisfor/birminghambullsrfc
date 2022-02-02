const bodyPage = document.querySelector("body");
const closeMenuButton = document.querySelector(".ph-x-thin");
const menuItems = document.querySelector(".menu-items");
const openMenuButton = document.querySelector(".ph-list-thin");

/* Mobile navigation menu appears when you click the menu button */

openMenuButton.addEventListener("click", () => {
  bodyPage.classList.add("body-stop-scrolling");
  closeMenuButton.classList.add("close-menu-visible");
  menuItems.classList.add("menu-items-visible");
  openMenuButton.classList.add("menu-button-invisible");
});

/* Mobile navigation menu disappears when you click the X button */

function closeMenu() {
  bodyPage.classList.remove("body-stop-scrolling");
  closeMenuButton.classList.remove("close-menu-visible");
  menuItems.classList.remove("menu-items-visible");
  openMenuButton.classList.remove("menu-button-invisible");
}

closeMenuButton.addEventListener("click", () => {
  closeMenu();
});

/* Mobile navigation menu disappears when you click menu items */

menuItems.addEventListener("click", () => {
  closeMenu();
});

/* Random image on page load */

const images = [
  "./assets/images/village-kit-1-min.jpg",
  "./assets/images/village-kit-2-min.jpg",
  "./assets/images/village-kit-3-min.jpg",
  "./assets/images/village-kit-4-min.jpg",
];

const imageDestination = document.querySelector(".hero-subsection");

function displayImage() {
  const num = Math.floor(Math.random() * images.length);
  imageDestination.style.backgroundImage = `url("${images[num]}")`;
}

displayImage();
