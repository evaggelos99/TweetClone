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

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("function _typeof(obj) { \"@babel/helpers - typeof\"; if (typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; }; } return _typeof(obj); }\n\n/******/\n(function (modules) {\n  // webpackBootstrap\n\n  /******/\n  // The module cache\n\n  /******/\n  var installedModules = {};\n  /******/\n\n  /******/\n  // The require function\n\n  /******/\n\n  function __webpack_require__(moduleId) {\n    /******/\n\n    /******/\n    // Check if module is in cache\n\n    /******/\n    if (installedModules[moduleId]) {\n      /******/\n      return installedModules[moduleId].exports;\n      /******/\n    }\n    /******/\n    // Create a new module (and put it into the cache)\n\n    /******/\n\n\n    var module = installedModules[moduleId] = {\n      /******/\n      i: moduleId,\n\n      /******/\n      l: false,\n\n      /******/\n      exports: {}\n      /******/\n\n    };\n    /******/\n\n    /******/\n    // Execute the module function\n\n    /******/\n\n    modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);\n    /******/\n\n    /******/\n    // Flag the module as loaded\n\n    /******/\n\n    module.l = true;\n    /******/\n\n    /******/\n    // Return the exports of the module\n\n    /******/\n\n    return module.exports;\n    /******/\n  }\n  /******/\n\n  /******/\n\n  /******/\n  // expose the modules object (__webpack_modules__)\n\n  /******/\n\n\n  __webpack_require__.m = modules;\n  /******/\n\n  /******/\n  // expose the module cache\n\n  /******/\n\n  __webpack_require__.c = installedModules;\n  /******/\n\n  /******/\n  // define getter function for harmony exports\n\n  /******/\n\n  __webpack_require__.d = function (exports, name, getter) {\n    /******/\n    if (!__webpack_require__.o(exports, name)) {\n      /******/\n      Object.defineProperty(exports, name, {\n        enumerable: true,\n        get: getter\n      });\n      /******/\n    }\n    /******/\n\n  };\n  /******/\n\n  /******/\n  // define __esModule on exports\n\n  /******/\n\n\n  __webpack_require__.r = function (exports) {\n    /******/\n    if (typeof Symbol !== 'undefined' && Symbol.toStringTag) {\n      /******/\n      Object.defineProperty(exports, Symbol.toStringTag, {\n        value: 'Module'\n      });\n      /******/\n    }\n    /******/\n\n\n    Object.defineProperty(exports, '__esModule', {\n      value: true\n    });\n    /******/\n  };\n  /******/\n\n  /******/\n  // create a fake namespace object\n\n  /******/\n  // mode & 1: value is a module id, require it\n\n  /******/\n  // mode & 2: merge all properties of value into the ns\n\n  /******/\n  // mode & 4: return value when already ns object\n\n  /******/\n  // mode & 8|1: behave like require\n\n  /******/\n\n\n  __webpack_require__.t = function (value, mode) {\n    /******/\n    if (mode & 1) value = __webpack_require__(value);\n    /******/\n\n    if (mode & 8) return value;\n    /******/\n\n    if (mode & 4 && _typeof(value) === 'object' && value && value.__esModule) return value;\n    /******/\n\n    var ns = Object.create(null);\n    /******/\n\n    __webpack_require__.r(ns);\n    /******/\n\n\n    Object.defineProperty(ns, 'default', {\n      enumerable: true,\n      value: value\n    });\n    /******/\n\n    if (mode & 2 && typeof value != 'string') for (var key in value) {\n      __webpack_require__.d(ns, key, function (key) {\n        return value[key];\n      }.bind(null, key));\n    }\n    /******/\n\n    return ns;\n    /******/\n  };\n  /******/\n\n  /******/\n  // getDefaultExport function for compatibility with non-harmony modules\n\n  /******/\n\n\n  __webpack_require__.n = function (module) {\n    /******/\n    var getter = module && module.__esModule ?\n    /******/\n    function getDefault() {\n      return module['default'];\n    } :\n    /******/\n    function getModuleExports() {\n      return module;\n    };\n    /******/\n\n    __webpack_require__.d(getter, 'a', getter);\n    /******/\n\n\n    return getter;\n    /******/\n  };\n  /******/\n\n  /******/\n  // Object.prototype.hasOwnProperty.call\n\n  /******/\n\n\n  __webpack_require__.o = function (object, property) {\n    return Object.prototype.hasOwnProperty.call(object, property);\n  };\n  /******/\n\n  /******/\n  // __webpack_public_path__\n\n  /******/\n\n\n  __webpack_require__.p = \"/\";\n  /******/\n\n  /******/\n\n  /******/\n  // Load entry module and return exports\n\n  /******/\n\n  return __webpack_require__(__webpack_require__.s = 0);\n  /******/\n})(\n/************************************************************************/\n\n/******/\n{\n  /***/\n  \"./resources/sass/app.scss\":\n  /*!*********************************!*\\\n    !*** ./resources/sass/app.scss ***!\n    \\*********************************/\n\n  /*! no static exports found */\n\n  /***/\n  function resourcesSassAppScss(module, exports) {\n    eval(\"// removed by extract-text-webpack-plugin//# sourceURL=[module]\\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz8wZTE1Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\\n\");\n    /***/\n  },\n\n  /***/\n  0:\n  /*!*************************************************************!*\\\n    !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!\n    \\*************************************************************/\n\n  /*! no static exports found */\n\n  /***/\n  function _(module, exports, __webpack_require__) {\n    !function webpackMissingModule() {\n      var e = new Error(\"Cannot find module '/home/evangelos/Laravel/code/websiteCoursework/resources/js/app.js'\");\n      e.code = 'MODULE_NOT_FOUND';\n      throw e;\n    }();\n    module.exports = __webpack_require__(\n    /*! /home/evangelos/Laravel/code/websiteCoursework/resources/sass/app.scss */\n    \"./resources/sass/app.scss\");\n    /***/\n  }\n  /******/\n\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYXBwLmpzPzZkNDAiXSwibmFtZXMiOlsibW9kdWxlcyIsImluc3RhbGxlZE1vZHVsZXMiLCJfX3dlYnBhY2tfcmVxdWlyZV9fIiwibW9kdWxlSWQiLCJleHBvcnRzIiwibW9kdWxlIiwiaSIsImwiLCJjYWxsIiwibSIsImMiLCJkIiwibmFtZSIsImdldHRlciIsIm8iLCJPYmplY3QiLCJkZWZpbmVQcm9wZXJ0eSIsImVudW1lcmFibGUiLCJnZXQiLCJyIiwiU3ltYm9sIiwidG9TdHJpbmdUYWciLCJ2YWx1ZSIsInQiLCJtb2RlIiwiX19lc01vZHVsZSIsIm5zIiwiY3JlYXRlIiwia2V5IiwiYmluZCIsIm4iLCJnZXREZWZhdWx0IiwiZ2V0TW9kdWxlRXhwb3J0cyIsIm9iamVjdCIsInByb3BlcnR5IiwicHJvdG90eXBlIiwiaGFzT3duUHJvcGVydHkiLCJwIiwicyIsImV2YWwiLCJ3ZWJwYWNrTWlzc2luZ01vZHVsZSIsImUiLCJFcnJvciIsImNvZGUiXSwibWFwcGluZ3MiOiI7O0FBQUE7QUFBUyxDQUFDLFVBQVNBLE9BQVQsRUFBa0I7QUFBRTs7QUFDOUI7QUFBVTs7QUFDVjtBQUFVLE1BQUlDLGdCQUFnQixHQUFHLEVBQXZCO0FBQ1Y7O0FBQ0E7QUFBVTs7QUFDVjs7QUFBVSxXQUFTQyxtQkFBVCxDQUE2QkMsUUFBN0IsRUFBdUM7QUFDakQ7O0FBQ0E7QUFBVzs7QUFDWDtBQUFXLFFBQUdGLGdCQUFnQixDQUFDRSxRQUFELENBQW5CLEVBQStCO0FBQzFDO0FBQVksYUFBT0YsZ0JBQWdCLENBQUNFLFFBQUQsQ0FBaEIsQ0FBMkJDLE9BQWxDO0FBQ1o7QUFBWTtBQUNaO0FBQVc7O0FBQ1g7OztBQUFXLFFBQUlDLE1BQU0sR0FBR0osZ0JBQWdCLENBQUNFLFFBQUQsQ0FBaEIsR0FBNkI7QUFDckQ7QUFBWUcsT0FBQyxFQUFFSCxRQURzQzs7QUFFckQ7QUFBWUksT0FBQyxFQUFFLEtBRnNDOztBQUdyRDtBQUFZ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RlQ7O0FBQ0E7QUFBVTtBQUVWO0FBQU07QUFDTjtBQUNBO0FBQ0E7O0FBQ0E7O0FBQ0E7QUFBTyxnQ0FBU2pDLE1BQVQsRUFBaUJELE9BQWpCLEVBQTBCO0FBRWpDbUMsUUFBSSxDQUFDLGtlQUFELENBQUo7QUFFQTtBQUFPLEdBWEc7O0FBYVY7QUFBTTtBQUNOO0FBQ0E7QUFDQTs7QUFDQTs7QUFDQTtBQUFPLGFBQVNsQyxNQUFULEVBQWlCRCxPQUFqQixFQUEwQkYsbUJBQTFCLEVBQStDO0FBRXRELEtBQUUsU0FBU3NDLG9CQUFULEdBQWdDO0FBQUUsVUFBSUMsQ0FBQyxHQUFHLElBQUlDLEtBQUosQ0FBVSx5RkFBVixDQUFSO0FBQThHRCxPQUFDLENBQUNFLElBQUYsR0FBUyxrQkFBVDtBQUE2QixZQUFNRixDQUFOO0FBQVUsS0FBdkwsRUFBRjtBQUNBcEMsVUFBTSxDQUFDRCxPQUFQLEdBQWlCRixtQkFBbUI7QUFBQztBQUE2RSwrQkFBOUUsQ0FBcEM7QUFHQTtBQUFPO0FBRVA7O0FBMUJVLENBdEZEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2FwcC5qcy5qcyIsInNvdXJjZXNDb250ZW50IjpbIi8qKioqKiovIChmdW5jdGlvbihtb2R1bGVzKSB7IC8vIHdlYnBhY2tCb290c3RyYXBcbi8qKioqKiovIFx0Ly8gVGhlIG1vZHVsZSBjYWNoZVxuLyoqKioqKi8gXHR2YXIgaW5zdGFsbGVkTW9kdWxlcyA9IHt9O1xuLyoqKioqKi9cbi8qKioqKiovIFx0Ly8gVGhlIHJlcXVpcmUgZnVuY3Rpb25cbi8qKioqKiovIFx0ZnVuY3Rpb24gX193ZWJwYWNrX3JlcXVpcmVfXyhtb2R1bGVJZCkge1xuLyoqKioqKi9cbi8qKioqKiovIFx0XHQvLyBDaGVjayBpZiBtb2R1bGUgaXMgaW4gY2FjaGVcbi8qKioqKiovIFx0XHRpZihpbnN0YWxsZWRNb2R1bGVzW21vZHVsZUlkXSkge1xuLyoqKioqKi8gXHRcdFx0cmV0dXJuIGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdLmV4cG9ydHM7XG4vKioqKioqLyBcdFx0fVxuLyoqKioqKi8gXHRcdC8vIENyZWF0ZSBhIG5ldyBtb2R1bGUgKGFuZCBwdXQgaXQgaW50byB0aGUgY2FjaGUpXG4vKioqKioqLyBcdFx0dmFyIG1vZHVsZSA9IGluc3RhbGxlZE1vZHVsZXNbbW9kdWxlSWRdID0ge1xuLyoqKioqKi8gXHRcdFx0aTogbW9kdWxlSWQsXG4vKioqKioqLyBcdFx0XHRsOiBmYWxzZSxcbi8qKioqKiovIFx0XHRcdGV4cG9ydHM6IHt9XG4vKioqKioqLyBcdFx0fTtcbi8qKioqKiovXG4vKioqKioqLyBcdFx0Ly8gRXhlY3V0ZSB0aGUgbW9kdWxlIGZ1bmN0aW9uXG4vKioqKioqLyBcdFx0bW9kdWxlc1ttb2R1bGVJZF0uY2FsbChtb2R1bGUuZXhwb3J0cywgbW9kdWxlLCBtb2R1bGUuZXhwb3J0cywgX193ZWJwYWNrX3JlcXVpcmVfXyk7XG4vKioqKioqL1xuLyoqKioqKi8gXHRcdC8vIEZsYWcgdGhlIG1vZHVsZSBhcyBsb2FkZWRcbi8qKioqKiovIFx0XHRtb2R1bGUubCA9IHRydWU7XG4vKioqKioqL1xuLyoqKioqKi8gXHRcdC8vIFJldHVybiB0aGUgZXhwb3J0cyBvZiB0aGUgbW9kdWxlXG4vKioqKioqLyBcdFx0cmV0dXJuIG1vZHVsZS5leHBvcnRzO1xuLyoqKioqKi8gXHR9XG4vKioqKioqL1xuLyoqKioqKi9cbi8qKioqKiovIFx0Ly8gZXhwb3NlIHRoZSBtb2R1bGVzIG9iamVjdCAoX193ZWJwYWNrX21vZHVsZXNfXylcbi8qKioqKiovIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5tID0gbW9kdWxlcztcbi8qKioqKiovXG4vKioqKioqLyBcdC8vIGV4cG9zZSB0aGUgbW9kdWxlIGNhY2hlXG4vKioqKioqLyBcdF9fd2VicGFja19yZXF1aXJlX18uYyA9IGluc3RhbGxlZE1vZHVsZXM7XG4vKioqKioqL1xuLyoqKioqKi8gXHQvLyBkZWZpbmUgZ2V0dGVyIGZ1bmN0aW9uIGZvciBoYXJtb255IGV4cG9ydHNcbi8qKioqKiovIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kID0gZnVuY3Rpb24oZXhwb3J0cywgbmFtZSwgZ2V0dGVyKSB7XG4vKioqKioqLyBcdFx0aWYoIV9fd2VicGFja19yZXF1aXJlX18ubyhleHBvcnRzLCBuYW1lKSkge1xuLyoqKioqKi8gXHRcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsIG5hbWUsIHsgZW51bWVyYWJsZTogdHJ1ZSwgZ2V0OiBnZXR0ZXIgfSk7XG4vKioqKioqLyBcdFx0fVxuLyoqKioqKi8gXHR9O1xuLyoqKioqKi9cbi8qKioqKiovIFx0Ly8gZGVmaW5lIF9fZXNNb2R1bGUgb24gZXhwb3J0c1xuLyoqKioqKi8gXHRfX3dlYnBhY2tfcmVxdWlyZV9fLnIgPSBmdW5jdGlvbihleHBvcnRzKSB7XG4vKioqKioqLyBcdFx0aWYodHlwZW9mIFN5bWJvbCAhPT0gJ3VuZGVmaW5lZCcgJiYgU3ltYm9sLnRvU3RyaW5nVGFnKSB7XG4vKioqKioqLyBcdFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkoZXhwb3J0cywgU3ltYm9sLnRvU3RyaW5nVGFnLCB7IHZhbHVlOiAnTW9kdWxlJyB9KTtcbi8qKioqKiovIFx0XHR9XG4vKioqKioqLyBcdFx0T2JqZWN0LmRlZmluZVByb3BlcnR5KGV4cG9ydHMsICdfX2VzTW9kdWxlJywgeyB2YWx1ZTogdHJ1ZSB9KTtcbi8qKioqKiovIFx0fTtcbi8qKioqKiovXG4vKioqKioqLyBcdC8vIGNyZWF0ZSBhIGZha2UgbmFtZXNwYWNlIG9iamVjdFxuLyoqKioqKi8gXHQvLyBtb2RlICYgMTogdmFsdWUgaXMgYSBtb2R1bGUgaWQsIHJlcXVpcmUgaXRcbi8qKioqKiovIFx0Ly8gbW9kZSAmIDI6IG1lcmdlIGFsbCBwcm9wZXJ0aWVzIG9mIHZhbHVlIGludG8gdGhlIG5zXG4vKioqKioqLyBcdC8vIG1vZGUgJiA0OiByZXR1cm4gdmFsdWUgd2hlbiBhbHJlYWR5IG5zIG9iamVjdFxuLyoqKioqKi8gXHQvLyBtb2RlICYgOHwxOiBiZWhhdmUgbGlrZSByZXF1aXJlXG4vKioqKioqLyBcdF9fd2VicGFja19yZXF1aXJlX18udCA9IGZ1bmN0aW9uKHZhbHVlLCBtb2RlKSB7XG4vKioqKioqLyBcdFx0aWYobW9kZSAmIDEpIHZhbHVlID0gX193ZWJwYWNrX3JlcXVpcmVfXyh2YWx1ZSk7XG4vKioqKioqLyBcdFx0aWYobW9kZSAmIDgpIHJldHVybiB2YWx1ZTtcbi8qKioqKiovIFx0XHRpZigobW9kZSAmIDQpICYmIHR5cGVvZiB2YWx1ZSA9PT0gJ29iamVjdCcgJiYgdmFsdWUgJiYgdmFsdWUuX19lc01vZHVsZSkgcmV0dXJuIHZhbHVlO1xuLyoqKioqKi8gXHRcdHZhciBucyA9IE9iamVjdC5jcmVhdGUobnVsbCk7XG4vKioqKioqLyBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5yKG5zKTtcbi8qKioqKiovIFx0XHRPYmplY3QuZGVmaW5lUHJvcGVydHkobnMsICdkZWZhdWx0JywgeyBlbnVtZXJhYmxlOiB0cnVlLCB2YWx1ZTogdmFsdWUgfSk7XG4vKioqKioqLyBcdFx0aWYobW9kZSAmIDIgJiYgdHlwZW9mIHZhbHVlICE9ICdzdHJpbmcnKSBmb3IodmFyIGtleSBpbiB2YWx1ZSkgX193ZWJwYWNrX3JlcXVpcmVfXy5kKG5zLCBrZXksIGZ1bmN0aW9uKGtleSkgeyByZXR1cm4gdmFsdWVba2V5XTsgfS5iaW5kKG51bGwsIGtleSkpO1xuLyoqKioqKi8gXHRcdHJldHVybiBucztcbi8qKioqKiovIFx0fTtcbi8qKioqKiovXG4vKioqKioqLyBcdC8vIGdldERlZmF1bHRFeHBvcnQgZnVuY3Rpb24gZm9yIGNvbXBhdGliaWxpdHkgd2l0aCBub24taGFybW9ueSBtb2R1bGVzXG4vKioqKioqLyBcdF9fd2VicGFja19yZXF1aXJlX18ubiA9IGZ1bmN0aW9uKG1vZHVsZSkge1xuLyoqKioqKi8gXHRcdHZhciBnZXR0ZXIgPSBtb2R1bGUgJiYgbW9kdWxlLl9fZXNNb2R1bGUgP1xuLyoqKioqKi8gXHRcdFx0ZnVuY3Rpb24gZ2V0RGVmYXVsdCgpIHsgcmV0dXJuIG1vZHVsZVsnZGVmYXVsdCddOyB9IDpcbi8qKioqKiovIFx0XHRcdGZ1bmN0aW9uIGdldE1vZHVsZUV4cG9ydHMoKSB7IHJldHVybiBtb2R1bGU7IH07XG4vKioqKioqLyBcdFx0X193ZWJwYWNrX3JlcXVpcmVfXy5kKGdldHRlciwgJ2EnLCBnZXR0ZXIpO1xuLyoqKioqKi8gXHRcdHJldHVybiBnZXR0ZXI7XG4vKioqKioqLyBcdH07XG4vKioqKioqL1xuLyoqKioqKi8gXHQvLyBPYmplY3QucHJvdG90eXBlLmhhc093blByb3BlcnR5LmNhbGxcbi8qKioqKiovIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5vID0gZnVuY3Rpb24ob2JqZWN0LCBwcm9wZXJ0eSkgeyByZXR1cm4gT2JqZWN0LnByb3RvdHlwZS5oYXNPd25Qcm9wZXJ0eS5jYWxsKG9iamVjdCwgcHJvcGVydHkpOyB9O1xuLyoqKioqKi9cbi8qKioqKiovIFx0Ly8gX193ZWJwYWNrX3B1YmxpY19wYXRoX19cbi8qKioqKiovIFx0X193ZWJwYWNrX3JlcXVpcmVfXy5wID0gXCIvXCI7XG4vKioqKioqL1xuLyoqKioqKi9cbi8qKioqKiovIFx0Ly8gTG9hZCBlbnRyeSBtb2R1bGUgYW5kIHJldHVybiBleHBvcnRzXG4vKioqKioqLyBcdHJldHVybiBfX3dlYnBhY2tfcmVxdWlyZV9fKF9fd2VicGFja19yZXF1aXJlX18ucyA9IDApO1xuLyoqKioqKi8gfSlcbi8qKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiovXG4vKioqKioqLyAoe1xuXG4vKioqLyBcIi4vcmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3NcIjpcbi8qISoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiEqXFxcbiAgISoqKiAuL3Jlc291cmNlcy9zYXNzL2FwcC5zY3NzICoqKiFcbiAgXFwqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiovXG4vKiEgbm8gc3RhdGljIGV4cG9ydHMgZm91bmQgKi9cbi8qKiovIChmdW5jdGlvbihtb2R1bGUsIGV4cG9ydHMpIHtcblxuZXZhbChcIi8vIHJlbW92ZWQgYnkgZXh0cmFjdC10ZXh0LXdlYnBhY2stcGx1Z2luLy8jIHNvdXJjZVVSTD1bbW9kdWxlXVxcbi8vIyBzb3VyY2VNYXBwaW5nVVJMPWRhdGE6YXBwbGljYXRpb24vanNvbjtjaGFyc2V0PXV0Zi04O2Jhc2U2NCxleUoyWlhKemFXOXVJam96TENKemIzVnlZMlZ6SWpwYkluZGxZbkJoWTJzNkx5OHZMaTl5WlhOdmRYSmpaWE12YzJGemN5OWhjSEF1YzJOemN6OHdaVEUxSWwwc0ltNWhiV1Z6SWpwYlhTd2liV0Z3Y0dsdVozTWlPaUpCUVVGQklpd2labWxzWlNJNklpNHZjbVZ6YjNWeVkyVnpMM05oYzNNdllYQndMbk5qYzNNdWFuTWlMQ0p6YjNWeVkyVnpRMjl1ZEdWdWRDSTZXeUl2THlCeVpXMXZkbVZrSUdKNUlHVjRkSEpoWTNRdGRHVjRkQzEzWldKd1lXTnJMWEJzZFdkcGJpSmRMQ0p6YjNWeVkyVlNiMjkwSWpvaUluMD1cXG4vLyMgc291cmNlVVJMPXdlYnBhY2staW50ZXJuYWw6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzc1xcblwiKTtcblxuLyoqKi8gfSksXG5cbi8qKiovIDA6XG4vKiEqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqISpcXFxuICAhKioqIG11bHRpIC4vcmVzb3VyY2VzL2pzL2FwcC5qcyAuL3Jlc291cmNlcy9zYXNzL2FwcC5zY3NzICoqKiFcbiAgXFwqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqL1xuLyohIG5vIHN0YXRpYyBleHBvcnRzIGZvdW5kICovXG4vKioqLyAoZnVuY3Rpb24obW9kdWxlLCBleHBvcnRzLCBfX3dlYnBhY2tfcmVxdWlyZV9fKSB7XG5cbiEoZnVuY3Rpb24gd2VicGFja01pc3NpbmdNb2R1bGUoKSB7IHZhciBlID0gbmV3IEVycm9yKFwiQ2Fubm90IGZpbmQgbW9kdWxlICcvaG9tZS9ldmFuZ2Vsb3MvTGFyYXZlbC9jb2RlL3dlYnNpdGVDb3Vyc2V3b3JrL3Jlc291cmNlcy9qcy9hcHAuanMnXCIpOyBlLmNvZGUgPSAnTU9EVUxFX05PVF9GT1VORCc7IHRocm93IGU7IH0oKSk7XG5tb2R1bGUuZXhwb3J0cyA9IF9fd2VicGFja19yZXF1aXJlX18oLyohIC9ob21lL2V2YW5nZWxvcy9MYXJhdmVsL2NvZGUvd2Vic2l0ZUNvdXJzZXdvcmsvcmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3MgKi9cIi4vcmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3NcIik7XG5cblxuLyoqKi8gfSlcblxuLyoqKioqKi8gfSk7Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("// removed by extract-text-webpack-plugin//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvc2Fzcy9hcHAuc2Nzcz8wZTE1Il0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL3Nhc3MvYXBwLnNjc3MuanMiLCJzb3VyY2VzQ29udGVudCI6WyIvLyByZW1vdmVkIGJ5IGV4dHJhY3QtdGV4dC13ZWJwYWNrLXBsdWdpbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/sass/app.scss\n");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /home/vagrant/code/websiteCoursework/resources/js/app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! /home/vagrant/code/websiteCoursework/resources/sass/app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });