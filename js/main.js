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

  const swiper = new Swiper('.swiper', {
    direction: 'horizontal',
    slidesPerView: 5,
    navigation: {
      nextEl: '.slider-button-next',
      prevEl: '.slider-button-prev',
    },

    breakpoints: {
      200: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 3,
      },
      1243: {
        slidesPerView: 4,
      },
      1333: {
        slidesPerView: 5,
      },
    }
  });

  const stepsswiper = new Swiper('.steps-swiper', {
    direction: 'horizontal',
    slidesPerView: 1,
    navigation: {
      nextEl: '.steps-next-btn',
      prevEl: '.steps-prev-btn',
    },

    breakpoints: {
      200: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 2,
      },
      1214: {
        slidesPerView: 3,
      },
      1243: {
        slidesPerView: 4,
      },
    }
  });