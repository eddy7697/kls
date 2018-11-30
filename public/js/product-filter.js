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
/******/ 	return __webpack_require__(__webpack_require__.s = 597);
/******/ })
/************************************************************************/
/******/ ({

/***/ 4:
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file.
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate

    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 597:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(598);


/***/ }),

/***/ 598:
/***/ (function(module, exports, __webpack_require__) {

Vue.component('product-filter', __webpack_require__(599));

var app = new Vue({
    el: '#product-filter'
});

/***/ }),

/***/ 599:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(4)
/* script */
var __vue_script__ = __webpack_require__(600)
/* template */
var __vue_template__ = __webpack_require__(601)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = null
/* scopeId */
var __vue_scopeId__ = null
/* moduleIdentifier (server only) */
var __vue_module_identifier__ = null
var Component = normalizeComponent(
  __vue_script__,
  __vue_template__,
  __vue_template_functional__,
  __vue_styles__,
  __vue_scopeId__,
  __vue_module_identifier__
)
Component.options.__file = "resources/assets/js/components/views/frontend/product-filter/product-filter.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-465a82ca", Component.options)
  } else {
    hotAPI.reload("data-v-465a82ca", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 600:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mounted: function mounted() {
        console.log('Component mounted.');
    },
    data: function data() {
        return {
            filterGroup: {
                brand: null,
                size: null,
                trip: null,
                price: null,
                material: null
            }
        };
    },

    watch: {
        filterGroup: {
            handler: function handler(filterGroup, oldVal) {
                console.log(filterGroup);
            },

            deep: true
        }
    },
    methods: {
        clearFilter: function clearFilter() {
            this.filterGroup = {
                brand: null,
                size: null,
                trip: null,
                price: null,
                material: null
            };
        }
    }
});

/***/ }),

/***/ 601:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("section", [
    _c("div", { staticClass: "container filter-area" }, [
      _vm._m(0),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass: "row filter",
          staticStyle: { "margin-top": "80px", "margin-bottom": "80px" }
        },
        [
          _c("div", { staticClass: "col-md-12 filter-filtering" }, [
            _c("div", { staticClass: "col-md-4" }, [
              _c("div", { staticClass: "filter-filters" }, [
                _vm._m(1),
                _vm._v(" "),
                _c("hr"),
                _vm._v(" "),
                _c("form", { staticClass: "filters-selects" }, [
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "departure",
                        id: "departure",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "departure")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "departure")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "departure" } }, [
                      _vm._v("Departure")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "crown",
                        id: "crown",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "crown")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "crown")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "crown" } }, [
                      _vm._v("CROWN 皇冠")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "novita",
                        id: "novita",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "novita")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "novita")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "novita" } }, [
                      _vm._v("NOVITA")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "yue",
                        id: "yue",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "yue")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "yue")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "yue" } }, [_vm._v("YUE")]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "allBrand",
                        id: "allBrand",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "allBrand")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "allBrand")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "allBrand" } }, [
                      _vm._v("全部品牌")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "oossack",
                        id: "oossack",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "oossack")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "oossack")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "oossack" } }, [
                      _vm._v("OOSSACK")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "ad",
                        id: "ad",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "ad")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "ad")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "ad" } }, [
                      _vm._v("AD 亞蘭德倫")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "mom",
                        id: "mom",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "mom")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "mom")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "mom" } }, [_vm._v("MOM")]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "at",
                        id: "at",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "at")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "at")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "at" } }, [
                      _vm._v("AT 美國旅行者")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.brand,
                          expression: "filterGroup.brand"
                        }
                      ],
                      attrs: {
                        name: "brand",
                        value: "samsonite",
                        id: "samsonite",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.brand, "samsonite")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "brand", "samsonite")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "samsonite" } }, [
                      _vm._v("SAMSONITE 新秀麗")
                    ])
                  ])
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-md-4" }, [
              _c("div", { staticClass: "filter-filters" }, [
                _vm._m(2),
                _vm._v(" "),
                _c("hr"),
                _vm._v(" "),
                _c("form", { staticClass: "filters-selects" }, [
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.size,
                          expression: "filterGroup.size"
                        }
                      ],
                      attrs: {
                        name: "size",
                        value: "20",
                        id: "20",
                        type: "radio"
                      },
                      domProps: { checked: _vm._q(_vm.filterGroup.size, "20") },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "size", "20")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "20" } }, [_vm._v("20吋以下")]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.size,
                          expression: "filterGroup.size"
                        }
                      ],
                      attrs: {
                        name: "size",
                        value: "23",
                        id: "23",
                        type: "radio"
                      },
                      domProps: { checked: _vm._q(_vm.filterGroup.size, "23") },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "size", "23")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "23" } }, [
                      _vm._v("20 - 23吋")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.size,
                          expression: "filterGroup.size"
                        }
                      ],
                      attrs: {
                        name: "size",
                        value: "25",
                        id: "25",
                        type: "radio"
                      },
                      domProps: { checked: _vm._q(_vm.filterGroup.size, "25") },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "size", "25")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "25" } }, [_vm._v("23 - 25吋")])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.size,
                          expression: "filterGroup.size"
                        }
                      ],
                      attrs: {
                        name: "size",
                        value: "29",
                        id: "29",
                        type: "radio"
                      },
                      domProps: { checked: _vm._q(_vm.filterGroup.size, "29") },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "size", "29")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "29" } }, [
                      _vm._v("27 - 29吋")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.size,
                          expression: "filterGroup.size"
                        }
                      ],
                      attrs: {
                        name: "size",
                        value: "30",
                        id: "30",
                        type: "radio"
                      },
                      domProps: { checked: _vm._q(_vm.filterGroup.size, "30") },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "size", "30")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "30" } }, [_vm._v("30吋以上")]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.size,
                          expression: "filterGroup.size"
                        }
                      ],
                      attrs: {
                        name: "size",
                        value: "allSize",
                        id: "allSize",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.size, "allSize")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "size", "allSize")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "allSize" } }, [
                      _vm._v("全部尺寸")
                    ])
                  ])
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-md-4" }, [
              _c("div", { staticClass: "filter-filters" }, [
                _vm._m(3),
                _vm._v(" "),
                _c("hr"),
                _vm._v(" "),
                _c("form", { staticClass: "filters-selects" }, [
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.trip,
                          expression: "filterGroup.trip"
                        }
                      ],
                      attrs: {
                        name: "trip",
                        value: "aDay",
                        id: "aDay",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.trip, "aDay")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "trip", "aDay")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "aDay" } }, [
                      _vm._v("當日來回")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.trip,
                          expression: "filterGroup.trip"
                        }
                      ],
                      attrs: {
                        name: "trip",
                        value: "aWeek",
                        id: "aWeek",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.trip, "aWeek")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "trip", "aWeek")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "aWeek" } }, [
                      _vm._v("3 - 7天")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.trip,
                          expression: "filterGroup.trip"
                        }
                      ],
                      attrs: {
                        name: "trip",
                        value: "twoWeeks",
                        id: "twoWeeks",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.trip, "twoWeeks")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "trip", "twoWeeks")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "twoWeeks" } }, [
                      _vm._v("7 - 14天")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.trip,
                          expression: "filterGroup.trip"
                        }
                      ],
                      attrs: {
                        name: "trip",
                        value: "long",
                        id: "long",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.trip, "long")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "trip", "long")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "long" } }, [
                      _vm._v("Long Stay")
                    ])
                  ])
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "col-md-12 filter-filtering" }, [
            _c("div", { staticClass: "col-md-4" }, [
              _c("div", { staticClass: "filter-filters" }, [
                _vm._m(4),
                _vm._v(" "),
                _c("hr"),
                _vm._v(" "),
                _c("form", { staticClass: "filters-selects" }, [
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.price,
                          expression: "filterGroup.price"
                        }
                      ],
                      attrs: {
                        name: "price",
                        value: "5000",
                        id: "5000",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.price, "5000")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "price", "5000")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "5000" } }, [
                      _vm._v("0 - 5000")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.price,
                          expression: "filterGroup.price"
                        }
                      ],
                      attrs: {
                        name: "price",
                        value: "10000",
                        id: "10000",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.price, "10000")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "price", "10000")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "10000" } }, [
                      _vm._v("5000 - 10000")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.price,
                          expression: "filterGroup.price"
                        }
                      ],
                      attrs: {
                        name: "price",
                        value: "15000",
                        id: "15000",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.price, "15000")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "price", "15000")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "15000" } }, [
                      _vm._v("10000 - 15000")
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.price,
                          expression: "filterGroup.price"
                        }
                      ],
                      attrs: {
                        name: "price",
                        value: "20000",
                        id: "20000",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.price, "20000")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "price", "20000")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "20000" } }, [
                      _vm._v("15000 - 20000")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.price,
                          expression: "filterGroup.price"
                        }
                      ],
                      attrs: {
                        name: "price",
                        value: "20000Up",
                        id: "20000Up",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.price, "20000Up")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "price", "20000Up")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "20000Up" } }, [
                      _vm._v("20000 以上")
                    ])
                  ])
                ])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "col-md-4" }, [
              _c("div", { staticClass: "filter-filters" }, [
                _vm._m(5),
                _vm._v(" "),
                _c("hr"),
                _vm._v(" "),
                _c("form", { staticClass: "filters-selects" }, [
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.material,
                          expression: "filterGroup.material"
                        }
                      ],
                      attrs: {
                        name: "material",
                        value: "aluminum",
                        id: "aluminum",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.material, "aluminum")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "material", "aluminum")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "aluminum" } }, [
                      _vm._v("鋁框")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.material,
                          expression: "filterGroup.material"
                        }
                      ],
                      attrs: {
                        name: "material",
                        value: "pc",
                        id: "pc",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.material, "pc")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "material", "pc")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "pc" } }, [_vm._v("PC")]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.material,
                          expression: "filterGroup.material"
                        }
                      ],
                      attrs: {
                        name: "material",
                        value: "abs",
                        id: "abs",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.material, "abs")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "material", "abs")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "abs" } }, [_vm._v("ABS")]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.material,
                          expression: "filterGroup.material"
                        }
                      ],
                      attrs: {
                        name: "material",
                        value: "nylon",
                        id: "nylon",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.material, "nylon")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "material", "nylon")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "nylon" } }, [
                      _vm._v("防水尼龍")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.material,
                          expression: "filterGroup.material"
                        }
                      ],
                      attrs: {
                        name: "material",
                        value: "pet",
                        id: "pet",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.material, "pet")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "material", "pet")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "pet" } }, [_vm._v("PET")])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "filters-selects-div" }, [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.material,
                          expression: "filterGroup.material"
                        }
                      ],
                      attrs: {
                        name: "material",
                        value: "carbon",
                        id: "carbon",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.material, "carbon")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "material", "carbon")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "carbon" } }, [
                      _vm._v("碳纖維")
                    ]),
                    _vm._v(" "),
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.filterGroup.material,
                          expression: "filterGroup.material"
                        }
                      ],
                      attrs: {
                        name: "material",
                        value: "allMaterial",
                        id: "allMaterial",
                        type: "radio"
                      },
                      domProps: {
                        checked: _vm._q(_vm.filterGroup.material, "allMaterial")
                      },
                      on: {
                        change: function($event) {
                          _vm.$set(_vm.filterGroup, "material", "allMaterial")
                        }
                      }
                    }),
                    _c("label", { attrs: { for: "allMaterial" } }, [
                      _vm._v("全部材質")
                    ])
                  ])
                ])
              ])
            ]),
            _vm._v(" "),
            _c(
              "button",
              {
                staticClass: "filter-remakeBtn",
                on: {
                  click: function($event) {
                    _vm.clearFilter()
                  }
                }
              },
              [
                _c("img", {
                  staticClass: "filter-remakeBtnImg",
                  attrs: { src: "/img/remakeIcon.svg", alt: "" }
                }),
                _vm._v("\n                    重製選取條件\n                ")
              ]
            ),
            _vm._v(" "),
            _c("div", { staticClass: "col-md-4" })
          ])
        ]
      )
    ]),
    _vm._v(" "),
    _vm._m(6),
    _vm._v(" "),
    _vm._m(7)
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row filter" }, [
      _c("div", { staticClass: "col-md-12 filter-title" }, [
        _c("h1", [_vm._v("品牌行李箱")]),
        _vm._v(" "),
        _c("div", { staticClass: "filter-title-hr" }),
        _vm._v(" "),
        _c("p", { staticStyle: { "margin-top": "50px" } }, [
          _vm._v("這裡總有一款屬於你的冒險")
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "filters-title" }, [
      _c("p", [_vm._v("品牌 Brand")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "filters-title" }, [
      _c("p", [_vm._v("尺寸 Size")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "filters-title" }, [
      _c("p", [_vm._v("旅程 Trip")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "filters-title" }, [
      _c("p", [_vm._v("價格 Price")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "filters-title" }, [
      _c("p", [_vm._v("材質 Material")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      {
        staticClass: "container container-productCount",
        staticStyle: { position: "relative" }
      },
      [
        _c("div", { staticClass: "row" }, [
          _c("div", { staticClass: "col-md-12 productCount" }, [
            _c("div", { staticClass: "productCount-left" }, [
              _c("div", { staticClass: "productCount-icon" }, [
                _c("img", {
                  staticClass: "cube01",
                  attrs: { src: "/img/selectCube-01.svg", alt: "" }
                }),
                _vm._v(" "),
                _c("img", {
                  staticClass: "cube02",
                  attrs: { src: "/img/selectCube-02.svg", alt: "" }
                })
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "productCount-sort" }, [
                _c("span", [_vm._v("價格由高到低排列 ↓")]),
                _vm._v(" "),
                _c("span", [_vm._v("價格由低到高排列 ↑")])
              ])
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "productCount-number" }, [
              _c("span", [_vm._v("顯示總數")]),
              _vm._v(" "),
              _c("span", [_vm._v("08/")]),
              _vm._v(" "),
              _c("span", [_vm._v("127")])
            ])
          ])
        ]),
        _vm._v(" "),
        _c("button", { staticClass: "collapseBtn" }, [
          _vm._v("\n            收合\n            "),
          _c("img", { attrs: { src: "/img/collapseIcon.png", alt: "" } })
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "container-fulid filter-product-out" }, [
      _c("div", { staticClass: "row filter-product" }, [
        _c("div", { staticClass: "filter-product-row" }, [
          _c("div", { staticClass: "col-md-6" }, [
            _c("div", { staticClass: "product-inner" }, [
              _c(
                "div",
                {
                  staticClass: "product-img",
                  staticStyle: { "background-image": "url(/img/product01.jpg)" }
                },
                [
                  _c("div", { staticClass: "product-img-mask" }),
                  _vm._v(" "),
                  _c("p", [_vm._v("查看商品")])
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "product-innertext" }, [
                _c("div", { staticClass: "product-label" }, [
                  _c("img", {
                    attrs: { src: "/img/product-logo.jpg", alt: "" }
                  })
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "product-title" }, [
                  _c("p", [_vm._v("細鋁框板異型箱 - 銀")])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "product-style" }, [
                  _c("p", { staticClass: "product-model" }, [
                    _vm._v("型號 : "),
                    _c("span", [_vm._v("HD-515")])
                  ]),
                  _vm._v(" "),
                  _c("p", { staticClass: "product-size" }, [
                    _vm._v("尺寸 : "),
                    _c("span", [_vm._v("27 吋")]),
                    _vm._v(" 實際大小 : "),
                    _c("span", [_vm._v("W40xD34xH69")]),
                    _vm._v("容量 : "),
                    _c("span", [_vm._v("76.6L")])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-text" }, [
                    _c("ul", [
                      _c("li", [
                        _vm._v(
                          "  外殼100%採用德國拜耳(Bayer)PC製成，耐衝擊性佳。"
                        )
                      ]),
                      _vm._v(" "),
                      _c("li", [_vm._v("  美國海關認證TSA密碼鎖。")]),
                      _vm._v(" "),
                      _c("li", [
                        _vm._v("  360度高彈性PU灌注，寂靜無聲頂級萬向輪組。")
                      ]),
                      _vm._v(" "),
                      _c("li", [
                        _vm._v(
                          "  輪子採用最大65ｍｍ設計，輪徑更大、抓地力更穩。"
                        )
                      ]),
                      _vm._v(" "),
                      _c("li", [
                        _vm._v("  三段式符合人體工學的頂級鋁合金滑順拉桿。")
                      ]),
                      _vm._v(" "),
                      _c("li", [
                        _vm._v("  提把採用杜邦海翠爾，韌性更好、耐久度更佳。")
                      ]),
                      _vm._v(" "),
                      _c("li", [_vm._v("  對開拉鍊箱體、完美內裝。")])
                    ])
                  ]),
                  _vm._v(" "),
                  _c("p", { staticClass: "product-price" }, [
                    _vm._v("$ 12,000")
                  ])
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "productHeart" }, [
                  _c("img", {
                    attrs: { src: "/img/productHeart.svg", alt: "" }
                  })
                ]),
                _vm._v(" "),
                _c("button", { staticClass: "buyIt" }, [
                  _c("img", {
                    attrs: { src: "/img/cartIconWhite.svg", alt: "" }
                  }),
                  _vm._v(" "),
                  _c("p", [_vm._v("加入購物車")])
                ])
              ])
            ])
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-md-12 filter-product-readMore" }, [
          _c("button", { attrs: { id: "readMore-btn" } }, [_vm._v("查看更多")])
        ])
      ])
    ])
  }
]
render._withStripped = true
module.exports = { render: render, staticRenderFns: staticRenderFns }
if (false) {
  module.hot.accept()
  if (module.hot.data) {
    require("vue-hot-reload-api")      .rerender("data-v-465a82ca", module.exports)
  }
}

/***/ })

/******/ });