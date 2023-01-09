const navbar = document.querySelector(".navbar");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

window.addEventListener("scroll", () => {
  if (this.scrollY > 1) {
    navbar.classList.add("navbar-light");
  } else {
    navbar.classList.remove("navbar-light")};
})

mMenuToggle.addEventListener("click", (Event) => {
  Event.preventDefault();
  menu.classList.toggle ("is-open");
});