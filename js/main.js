$(document).ready(function () {
  
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
});

var menuButton = document.querySelector('.button-menu');
menuButton.addEventListener('click', function () {
  console.log('clicked')
  document.querySelector('.navbar-bottom').classList.toggle('navbar-bottom--visible')
});

var modalButton = $('[data-toggle=modal]');
var closeModalButton = $('.modal__close');
var closeModalButtonAll = $('.modal__overlay');
modalButton.on('click', openModal);
closeModalButton.on('click', closeModal);
closeModalButtonAll.on('click', closeModal);

function openModal () {
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOverlay.addClass('modal__overlay--visible')
  modalDialog.addClass('modal__dialog--visible')
}

function closeModal (event) {
  event.preventDefault()
  var modalOverlay = $('.modal__overlay');
  var modalDialog = $('.modal__dialog');
  modalOverlay.removeClass('modal__overlay--visible');
  modalDialog.removeClass('modal__dialog--visible');
}

var modalOverlay = $('.modal__overlay');
var modalDialog = $('.modal__dialog');
$(document).on('keydown', function (e) {
  if (e.keyCode === 27) {
    modalOverlay.removeClass('modal__overlay--visible');
    modalDialog.removeClass('modal__dialog--visible');
  }
});

// обработка форм
$('.form').each( function() {
  $( this ).validate( {
    errorClass: "invalid",
    messages: {
    name: {
      required: "Please enter your name",
      minlength: "Short name",
    },
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    },
    phone: {
      required: "Please enter number phone",
      minlength: "Required format +7 (xxx) xxx xx xx",
    },
    searchme: "Please fill out the form",
    bookingName: {
      required: "Please enter your name",
      minlength: "Short name",
    },
    bookingPhone: {
      required: "Please enter number phone",
      minlength: "Required format +7 (xxx) xxx xx xx",
    },
    bookingSubscribe: "Please enter your email",
    subscribe: {
      required: "Please enter your email",
      minlength: "error"
    },
  }
  })
});
$('.telphone').mask('+7 (000) 000-00-00');
AOS.init();
});

