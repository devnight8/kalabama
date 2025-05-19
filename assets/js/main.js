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

document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("auth-modal");
  const modalContent = modal.querySelector(".relative");
  const registrationBtn = document.getElementById("registration");
  const closeBtn = document.getElementById("close-modal");
  const tabBtns = document.querySelectorAll("[data-tab]");
  const loginForm = document.getElementById("login-form");
  const registerForm = document.getElementById("register-form");

  // Open modal with animation
  registrationBtn.addEventListener("click", () => {
    modal.classList.remove("hidden");
    // Trigger reflow
    modal.offsetHeight;
    modal.classList.remove("opacity-0");
    modalContent.classList.remove("scale-95");
    modalContent.classList.add("scale-100");
  });

  // Close modal with animation
  const closeModal = () => {
    modal.classList.add("opacity-0");
    modalContent.classList.remove("scale-100");
    modalContent.classList.add("scale-95");
    setTimeout(() => {
      modal.classList.add("hidden");
    }, 300);
  };

  closeBtn.addEventListener("click", closeModal);

  // Close on outside click
  modal.addEventListener("click", (e) => {
    if (e.target === modal) {
      closeModal();
    }
  });

  // Tab switching
  tabBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      tabBtns.forEach((b) => {
        b.classList.remove("border-b-2", "border-blue-500", "text-blue-500");
      });

      btn.classList.add("border-b-2", "border-blue-500", "text-blue-500");

      if (btn.dataset.tab === "login") {
        loginForm.classList.remove("hidden");
        registerForm.classList.add("hidden");
      } else {
        loginForm.classList.add("hidden");
        registerForm.classList.remove("hidden");
      }
    });
  });
});
