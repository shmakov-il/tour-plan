var hotelSlider = new Swiper('.hotel-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.hotel-slider__button--next',
    prevEl: '.hotel-slider__button--prev',
  },
  // Navigation keyboard
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
  speed: 2000,
  effect: 'coverflow',
});


var reviewsSlider = new Swiper('.reviews-slider', {
  // Optional parameters
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.reviews-slider__button--next',
    prevEl: '.reviews-slider__button--prev',
  },
  // Navigation keyboard
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
})

var menuButton = document.querySelector('.button-menu');
menuButton.addEventListener('click', function () {
  console.log('clicked')
  document.querySelector('.navbar-bottom').classList.toggle('navbar-bottom--visible')
} )