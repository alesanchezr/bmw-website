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
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
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
/******/ 	__webpack_require__.p = "/wp-content/themes/rigo/public/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./wp-content/themes/rigo/src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/html-template-engine/dist/html-template-engine.js":
/*!************************************************************************!*\
  !*** ./node_modules/html-template-engine/dist/html-template-engine.js ***!
  \************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

!function(e,t){ true?module.exports=t():undefined}(window,function(){return function(e){var t={};function o(n){if(t[n])return t[n].exports;var r=t[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,o),r.l=!0,r.exports}return o.m=e,o.c=t,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:n})},o.r=function(e){Object.defineProperty(e,"__esModule",{value:!0})},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="/dist",o(o.s=0)}([function(e,t){let o=function(){var e={};return e.settings={basePath:"",logRequests:!1,windowExport:!1,loadProperty:function(e,t){let o=null;"false"===(o=void 0!==t?t[e]:e)&&(o=!1),void 0!==typeof o&&o&&(this[e]=o)}},e.loadPieces=function(t,o){!function(t){e.settings.loadProperty("basePath",t),e.settings.loadProperty("logRequests",t),e.settings.loadProperty("windowExport",t)}(o),e.settings.logRequests&&0===t.length&&console.warn("No template parts were found or loaded, make sure you are using <span> tags with the 'require-file' attribute"),t.forEach(t=>{!function(t,o){t=e.settings.basePath+t;var n=new XMLHttpRequest;n.open("GET",t,!0),n.addEventListener("load",r=>{4==n.readyState&&200==n.status?(e.settings.logRequests&&console.log("The following path was successfully loaded: "+t),o(n.responseText)):404==n.status?console.error("The following template path was not found: "+t):200!=n.status&&console.warn("There was an issue loading the following template path: "+t)}),n.addEventListener("error",()=>{console.error("The following template path was imposible to load: "+t)}),n.send()}(t.filePath,function(e){void 0!==t.elementId?document.querySelector(t.elementId).innerHTML=e:void 0!==t.element?t.element.innerHTML=e:console.error("Error loading the template part: ",t)})})},e.start=function(){let t=[];document.querySelectorAll("span[require-file]").forEach(function(e){t.push({element:e,filePath:e.getAttribute("require-file")})});const o=document.querySelector("body"),n={basePath:o.getAttribute("base-template-path"),logRequests:o.getAttribute("log-template-requests")};e.loadPieces(t,n)},e}();const n=(r=!1,a=!1,document.querySelectorAll("script").forEach(function(e){-1!==e.src.indexOf("html-template-engine")&&(a=!0,-1!==e.src.indexOf("?autoload")&&(r=!0))}),{autoload:r,includedViaScriptTag:a});var r,a;n.autoload?window.onload=o.start:n.includedViaScriptTag&&console.warn('Include ?autoload at the end of the script url if you want to autoload the template parts without using any javascript \n For example: <script type="text/javascript" src="html-template-engine.js?autoload"><\/script>'),e.exports=o}])});
//# sourceMappingURL=html-template-engine.js.map

/***/ }),

/***/ "./wp-content/themes/rigo/src/index.js":
/*!*********************************************!*\
  !*** ./wp-content/themes/rigo/src/index.js ***!
  \*********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _style_index_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style/index.scss */ "./wp-content/themes/rigo/src/style/index.scss");
/* harmony import */ var _style_index_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_style_index_scss__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var html_template_engine__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! html-template-engine */ "./node_modules/html-template-engine/dist/html-template-engine.js");
/* harmony import */ var html_template_engine__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(html_template_engine__WEBPACK_IMPORTED_MODULE_1__);



window.onload = function(){

    html_template_engine__WEBPACK_IMPORTED_MODULE_1___default.a.start();
    $(document).ready(function(){
    	let tabselected=null;
		$('#myTab a').hover( function (e) {

		  $(this).tab('show');

		})
		 $( ".men" ).mouseleave(function(){
		 	$(".menu-content").removeClass('active show');
		 	$('#myTab a').removeClass('active show');
		 	console.log(1)
		 });

		 function topFunction() {
		    document.body.scrollTop = 0; // For Safari
		    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
		}
	})


// Gets the video src from the data-src on each button






}


/***/ }),

/***/ "./wp-content/themes/rigo/src/style/index.scss":
/*!*****************************************************!*\
  !*** ./wp-content/themes/rigo/src/style/index.scss ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })

/******/ });
//# sourceMappingURL=bundle.js.map