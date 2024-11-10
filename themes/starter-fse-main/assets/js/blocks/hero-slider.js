// Import Slider
import Swiper from "swiper/bundle";
import "swiper/css/bundle";

document.addEventListener("DOMContentLoaded", function () {
  "use strict";
  // Hero slider
  const heroSlider = document.querySelector(".hero-slider");
  if (document.body.contains(heroSlider)) {
    var swiper = new Swiper(".hero-slider", {
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      grabCursor: true,
      effect: "creative",
      creativeEffect: {
        prev: {
          shadow: true,
          translate: [0, 0, -400],
        },
        next: {
          translate: ["100%", 0, 0],
        },
      },
    });
  }
});
