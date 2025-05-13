var swiper = new Swiper(".slider", {
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".slider-pagination", // مشخص و جدا
    clickable: true,
  },
});

var categoryList = new Swiper(".category-list", {
  spaceBetween: 100,
  slidesPerView: 7,
  centeredSlides: false,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".cat-btn-next",
    prevEl: ".cat-btn-prev",
  },
});

var swiper = new Swiper(".discount-product", {
  spaceBetween: 20,
  slidesPerView: 6,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  // pagination: {
  //   el: ".slider-pagination", // مشخص و جدا
  //   clickable: true,
  // },

  navigation: {
    nextEl: ".product-discount-btn-next",
    prevEl: ".product-discount-btn-prev",
  },

  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    1280: {
      slidesPerView: 5,
      spaceBetween: 20,
    },
    1536: {
      slidesPerView: 6,
      spaceBetween: 20,
    },
  },
});

const container = document.getElementById("cart-container");
const cartBox = document.getElementById("cart-box");

container.addEventListener("mouseenter", () => {
  cartBox.classList.remove("hidden");
});

container.addEventListener("mouseleave", () => {
  cartBox.classList.add("hidden");
});
