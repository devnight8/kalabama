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
  // اگر صفحه‌بندی خاص خواستی، اینو هم فعال کن
  // pagination: {
  //   el: ".category-pagination",
  //   clickable: true,
  // },
});

var swiper = new Swiper(".discount-product", {
  // loop: true,
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
});

const container = document.getElementById("cart-container");
const cartBox = document.getElementById("cart-box");

container.addEventListener("mouseenter", () => {
  cartBox.classList.remove("hidden");
});

container.addEventListener("mouseleave", () => {
  cartBox.classList.add("hidden");
});
