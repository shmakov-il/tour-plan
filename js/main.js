var mySwiper = new Swiper('.swiper-container', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.slider-button--next',
    prevEl: '.slider-button--prev',
  },
  // Navigation keyboard
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
  speed: 2000,
  effect: 'coverflow',
  coverflowEffect: {
    rotate: 40,
    slideShadows: true,
  },
})