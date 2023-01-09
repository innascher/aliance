const navbar = document.querySelector(".navbar");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const lightModeOn = (Event) => {
  navbar.classList.add("navbar-light");
}

const lightModeOff = (Event) => {
  navbar.classList.remove("navbar-light");
}

const openMenu = (Event) => {
  menu.classList.add("is-open");
  mMenuToggle.classList.add("close-menu");
  document.body.style.overflow = "hidden";
  lightModeOn();
};

const closeMenu = (Event) => {
  menu.classList.remove("is-open");
  mMenuToggle.classList.remove("close-menu");
  document.body.style.overflow = "";
  lightModeOff();
};

window.addEventListener("scroll", () => {
  this.scrollY > 1 ? lightModeOn() : lightModeOff();
  });

mMenuToggle.addEventListener("click", (Event) => {
  Event.preventDefault();
  menu.classList.contains('is-open') ? closeMenu() : openMenu();
  });