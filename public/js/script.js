/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/script.js":
/*!********************************!*\
  !*** ./resources/js/script.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  //Show full image on review-page
  //set proportion for review__image__container
  var image_height = $('body').width() / (4 / 3); //set new dynamic height for review__image__container and show/hide "View more" button

  if ($('.review__image').height() > image_height) {
    $('.view-full-image').css('display', 'block');
  } else {
    $('.view-full-image').css('display', 'none');
    $('.review__image__container').css('border-radius', '5px');
  } //replace the text for "View more" button as "Hide picture"


  $('.view-full-image').on('click', function (event) {
    if ($('.view-full-image p').text() === 'Show full image') {
      $('.view-full-image p').text('Hide image');
    } else {
      $('.view-full-image p').text('Show full image');
    } //show full-size image when had been clicked the "View more" button


    $('.review__image__container').toggleClass('full-image');
  });
  $('.transform-block').on('click', function (event) {
    $('.transform-block').css('width', '100%');
  }); //select image button

  $('.key__image').change(function () {
    if ($(this).val() != '') {
      $('.key__image__label').text("Chose one image");
    } else {
      $('.key__image__label').text("Choose an image");
    }
  }); //checklist items and recommendations. Replacing a value of an input when click on checklist item.

  $('.rating__list__item').on('mouseover', function (event) {
    if ($(this).val() >= 8) {
      $(this).prop('title', $(this).val() + '/10 very good =)');
    }

    if ($(this).val() >= 5 && $(this).val() < 8) {
      $(this).prop('title', $(this).val() + '/10 so-so but ok =|');
    }

    if ($(this).val() >= 1 && $(this).val() < 5) {
      $(this).prop('title', $(this).val() + '/10 bad! =(');
    }
  }); //change color and width for rating progress-bar

  function ratingProgress(element, bar, val) {
    if ($(element).val() >= 8) {
      $(bar).css('background', '#68971a');
      $(bar).css('width', $(element).val() + '0%');
    }

    if ($(element).val() >= 5 && $(element).val() < 8) {
      $(bar).css('background', '#d79921');
      $(bar).css('width', $(element).val() + '0%');
    }

    if ($(element).val() >= 1 && $(element).val() < 5) {
      $(bar).css('background', '#cc241d');
      $(bar).css('width', $(element).val() + '0%');
    }

    $(val).val($(element).val());
    console.log($(val).val());
  } //change color and width when click on the element


  $('.time-rating__list li').on('click', function (event) {
    ratingProgress($(this), ".timings__progress", ".timings__input");
  });
  $('.quality-rating__list li').on('click', function (event) {
    ratingProgress($(this), ".quality__progress", ".quality__input");
  });
  $('.communication-rating__list li').on('click', function (event) {
    ratingProgress($(this), ".communication__progress", ".sociability__input");
  }); //recommendation progress-bar changing

  $('.rec').on('click', function (event) {
    $('.rec__progress').css('left', '0');
    $('.rec__progress').css('background', '#68971a');
    $('.rec__input').val('rec');
  });
  $('.not-rec').on('click', function (event) {
    $('.rec__progress').css('left', '50%');
    $('.rec__progress').css('background', '#cc241d');
    $('.rec__input').val('notrec');
  }); //popup-appeal

  function popup(popup, close, curtain) {
    //any params is required
    $(popup).addClass('popup-open');
    $(curtain).addClass('curtain-open');
    $('body, html').css('overflow-y', 'hidden');
    $(location).attr('href', '#header');
    $(close).on('click', function (event) {
      $(popup).removeClass('popup-open');
      $(curtain).removeClass('curtain-open');
      $('body, html').css('overflow-y', 'auto');
    });
    $(curtain).on('click', function (event) {
      $(popup).removeClass('popup-open');
      $(curtain).removeClass('curtain-open');
      $('body, html').css('overflow-y', 'auto');
    });
  }
});

/***/ }),

/***/ "./resources/sass/style.scss":
/*!***********************************!*\
  !*** ./resources/sass/style.scss ***!
  \***********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!******************************************************************!*\
  !*** multi ./resources/js/script.js ./resources/sass/style.scss ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/shalom/files/coderpool/doobook/resources/js/script.js */"./resources/js/script.js");
module.exports = __webpack_require__(/*! /home/shalom/files/coderpool/doobook/resources/sass/style.scss */"./resources/sass/style.scss");


/***/ })

/******/ });