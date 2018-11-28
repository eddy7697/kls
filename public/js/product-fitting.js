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
/******/ 	return __webpack_require__(__webpack_require__.s = 602);
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

/***/ 602:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(603);


/***/ }),

/***/ 603:
/***/ (function(module, exports, __webpack_require__) {

Vue.component('product-fitting', __webpack_require__(604));

var app = new Vue({
    el: '#product-fitting'
});

/***/ }),

/***/ 604:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(4)
/* script */
var __vue_script__ = __webpack_require__(605)
/* template */
var __vue_template__ = __webpack_require__(606)
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
Component.options.__file = "resources/assets/js/components/views/frontend/product-fitting/product-fitting.vue"

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-36a0d20e", Component.options)
  } else {
    hotAPI.reload("data-v-36a0d20e", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),

/***/ 605:
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

/***/ 606:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("section", [
    _vm._m(0),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "container container-productCount",
        staticStyle: { position: "relative" }
      },
      [
        _vm._m(1),
        _vm._v(" "),
        _c(
          "button",
          { staticClass: "collapseBtn", on: { click: _vm.collapse } },
          [
            _vm._v("\n            收合\n            "),
            _c("img", { attrs: { src: "/img/collapseIcon.png", alt: "" } })
          ]
        )
      ]
    ),
    _vm._v(" "),
    _vm._m(2)
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "container filter-area" }, [
      _c("div", { staticClass: "row filter" }, [
        _c("div", { staticClass: "col-md-12 filter-title" }, [
          _c("h1", [_vm._v("行李箱配件")]),
          _vm._v(" "),
          _c("div", { staticClass: "filter-title-hr" }),
          _vm._v(" "),
          _c("p", { staticStyle: { "margin-top": "50px" } }, [
            _vm._v("這裡總有一款屬於你的冒險")
          ])
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row" }, [
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
    ])
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
    require("vue-hot-reload-api")      .rerender("data-v-36a0d20e", module.exports)
  }
}

/***/ })

/******/ });