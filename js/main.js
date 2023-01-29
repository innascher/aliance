const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use")
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

  const swiper = new Swiper('.features-slider', {
    speed: 400,
    direction: 'horizontal',
    slidesPerView: 1,
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

  const swiperSteps = new Swiper('.steps-slider', {
    slidesPerView: 1,
    navigation: {
      nextEl: '.steps-next-btn',
      prevEl: '.steps-prev-btn',
  },

breakpoints: {
  576: {
    slidesPerView: 1,
  },
  768: {
    slidesPerView: 2,
  },
  1243: {
    slidesPerView: 3,
  },
  1920: {
    slidesPerView: 3,
  },
}
});

const swiperBlog = new Swiper('.blog-slider', {
  slidesPerView: 2,
  spaceBetween: 30,
  navigation: {
    nextEl: '.blog-btn-next',
    prevEl: '.blog-btn-prev',
},

  // breakpoints: {
  // 768: {
  //   slidesPerView: 1,
  // },

  // 1920: {
  //   slidesPerView: 2,
  // },


// } 

});

const modal = document.querySelector(".modal");
const modalToggle = document.querySelectorAll("[data-toggle=modal]");
const modalClose = document.querySelector(".modal-close")
console.log(modalToggle);
modalToggle.forEach((element) => {
  element.addEventListener("click", (event) => {
  event.preventDefault();
  modal.classList.add("is-open")
  });

});

modalClose.addEventListener("click", (event) =>{
  event.preventDefault();
  modal.classList.remove("is-open");
});



  