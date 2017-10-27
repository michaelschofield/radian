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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(4);


/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__navigation__ = __webpack_require__(2);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__toc__ = __webpack_require__(3);



var page = document.querySelector('body.page');

__WEBPACK_IMPORTED_MODULE_0__navigation__["a" /* default */].init('#primary-menu-button', '.radian__menu');

if (page) {
    __WEBPACK_IMPORTED_MODULE_1__toc__["a" /* default */].init(page.querySelector('.hentry > .header'));
}

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * Depressing the menu `<button>` when it's present on small screens
 * will toggle the display class on the top menu.
 */
/* harmony default export */ __webpack_exports__["a"] = ({

    button: null,

    container: null,

    isOpen: false,

    close: function close() {
        this.button.classList.remove('active');
        this.button.setAttribute('aria-pressed', 'false');
        this.container.classList.remove('d-none');
        this.container.setAttribute('aria-expanded', 'false');
        this.isOpen = false;
    },
    init: function init(buttonSelector, containerSelector) {
        var _this = this;

        this.setButton(buttonSelector);
        this.setContainer(containerSelector);

        this.button.addEventListener('click', function () {
            _this.toggle();
        });
    },
    setButton: function setButton(selector) {
        this.button = document.querySelector(selector);
    },
    setContainer: function setContainer(selector) {
        this.container = document.querySelector(selector);
    },
    open: function open() {
        this.button.classList.add('active');
        this.button.setAttribute('aria-pressed', 'true');
        this.container.classList.add('d-none');
        this.container.setAttribute('aria-expanded', 'true');
        this.isOpen = true;
    },
    toggle: function toggle() {
        if (this.isOpen) {
            this.close();
        } else {
            this.open();
        }
    }
});

/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * Generates a table of contents with jump links based off section headings.
 */
/* harmony default export */ __webpack_exports__["a"] = ({

    links: [],

    markup: null,

    generateMarkup: function generateMarkup() {
        var nav = document.createElement('nav');

        nav.classList.add('col-md-8');
        nav.classList.add('col-lg-6');
        nav.classList.add('p-md-0');
        nav.classList.add('mb-5');
        nav.setAttribute('role', 'navigation');

        this.links.forEach(function (link) {
            var linkElement = document.createElement('a');
            linkElement.classList.add('d-block');
            linkElement.href = '#' + link.id;
            linkElement.textContent = link.title;
            nav.appendChild(linkElement);
        });

        this.markup = nav;
    },
    init: function init(selector) {
        this.setLinks();
        this.generateMarkup();
        this.inject(selector);
    },
    inject: function inject(selector) {
        selector.appendChild(this.markup);
    },
    setLinks: function setLinks() {
        var sections = document.querySelectorAll('section[id]');
        var links = [];

        [].forEach.call(sections, function (section) {
            var link = {
                id: section.getAttribute('id'),
                title: section.getAttribute('title')
            };
            links.push(link);
        });

        this.links = links;
    }
});

/***/ }),
/* 4 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);