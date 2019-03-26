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
/******/ 	return __webpack_require__(__webpack_require__.s = 600);
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

/***/ 600:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(601);


/***/ }),

/***/ 601:
/***/ (function(module, exports, __webpack_require__) {

Vue.component('product-filter', __webpack_require__(602));

var app = new Vue({
    el: '#product-filter'
});

/***/ }),

/***/ 602:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(4)
/* script */
var __vue_script__ = __webpack_require__(603)
/* template */
var __vue_template__ = __webpack_require__(604)
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

/***/ 603:
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

/* harmony default export */ __webpack_exports__["default"] = ({
    mounted: function mounted() {
        console.log('Component mounted.');
    },

    props: ['type'],
    data: function data() {
        return {
            isLoaded: false,
            tagGroup: {
                brand: null,
                size: null,
                trip: null,
                price: null,
                material: null
            },
            filterGroup: {
                brand: null,
                size: null,
                trip: null,
                price: null,
                material: null
            },
            pageData: {}
        };
    },

    watch: {
        filterGroup: {
            handler: function handler(filterGroup, oldVal) {
                this.getData();
            },

            deep: true
        }
    },
    created: function created() {
        this.getTag();
    },

    methods: {
        getTag: function getTag() {
            var _this = this;

            axios.get('/admin/tag/get').then(function (res) {
                Object.keys(res.data).forEach(function (elm) {
                    _this.tagGroup[elm] = res.data[elm];
                });

                _this.$nextTick(function () {
                    _this.getData();
                });
            });
        },
        getData: function getData() {
            var _this2 = this;

            var vo = {
                tag: this.filterGroup,
                category: this.type
            };

            axios.post('/products/tag', vo).then(function (res) {
                _this2.pageData = res.data;
                _this2.isLoaded = true;
            });
        },
        addSigleProduct: function (_addSigleProduct) {
            function addSigleProduct(_x) {
                return _addSigleProduct.apply(this, arguments);
            }

            addSigleProduct.toString = function () {
                return _addSigleProduct.toString();
            };

            return addSigleProduct;
        }(function (guid) {
            addSigleProduct(guid);
        }),
        learnMoreAction: function learnMoreAction() {
            var _this3 = this;

            var vo = {
                tag: this.filterGroup,
                category: 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V'
            };

            axios.post(this.pageData.next_page_url, vo).then(function (res) {
                _this3.pageData.next_page_url = res.data.next_page_url;
                _this3.pageData.current_page = res.data.current_page;
                _this3.pageData.data = _.concat(_this3.pageData.data, res.data.data);
            });
        },
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

/***/ 604:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("section", [
    _c("div", { staticClass: "container filter-area" }, [
      _vm._m(0),
      _vm._v(" "),
      _vm.type == "R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V"
        ? _c(
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
                      _c(
                        "div",
                        { staticClass: "filters-selects-div" },
                        _vm._l(_vm.tagGroup.brand, function(item, index) {
                          return _c(
                            "label",
                            { key: index, attrs: { for: item } },
                            [
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
                                  id: item,
                                  type: "radio"
                                },
                                domProps: {
                                  value: item,
                                  checked: _vm._q(_vm.filterGroup.brand, item)
                                },
                                on: {
                                  change: function($event) {
                                    _vm.$set(_vm.filterGroup, "brand", item)
                                  }
                                }
                              }),
                              _vm._v(
                                _vm._s(item) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      )
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
                      _c(
                        "div",
                        { staticClass: "filters-selects-div" },
                        _vm._l(_vm.tagGroup.size, function(item, index) {
                          return _c(
                            "label",
                            { key: index, attrs: { for: item } },
                            [
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
                                  id: item,
                                  type: "radio"
                                },
                                domProps: {
                                  value: item,
                                  checked: _vm._q(_vm.filterGroup.size, item)
                                },
                                on: {
                                  change: function($event) {
                                    _vm.$set(_vm.filterGroup, "size", item)
                                  }
                                }
                              }),
                              _vm._v(
                                _vm._s(item) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      )
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
                      _c(
                        "div",
                        { staticClass: "filters-selects-div" },
                        _vm._l(_vm.tagGroup.trip, function(item, index) {
                          return _c(
                            "label",
                            { key: index, attrs: { for: item } },
                            [
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
                                  id: item,
                                  type: "radio"
                                },
                                domProps: {
                                  value: item,
                                  checked: _vm._q(_vm.filterGroup.trip, item)
                                },
                                on: {
                                  change: function($event) {
                                    _vm.$set(_vm.filterGroup, "trip", item)
                                  }
                                }
                              }),
                              _vm._v(
                                _vm._s(item) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      )
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
                      _c(
                        "div",
                        { staticClass: "filters-selects-div" },
                        _vm._l(_vm.tagGroup.price, function(item, index) {
                          return _c(
                            "label",
                            { key: index, attrs: { for: item } },
                            [
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
                                  id: item,
                                  type: "radio"
                                },
                                domProps: {
                                  value: item,
                                  checked: _vm._q(_vm.filterGroup.price, item)
                                },
                                on: {
                                  change: function($event) {
                                    _vm.$set(_vm.filterGroup, "price", item)
                                  }
                                }
                              }),
                              _vm._v(
                                _vm._s(item) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      )
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
                      _c(
                        "div",
                        { staticClass: "filters-selects-div" },
                        _vm._l(_vm.tagGroup.material, function(item, index) {
                          return _c(
                            "label",
                            { key: index, attrs: { for: item } },
                            [
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
                                  id: item,
                                  type: "radio"
                                },
                                domProps: {
                                  value: item,
                                  checked: _vm._q(
                                    _vm.filterGroup.material,
                                    item
                                  )
                                },
                                on: {
                                  change: function($event) {
                                    _vm.$set(_vm.filterGroup, "material", item)
                                  }
                                }
                              }),
                              _vm._v(
                                _vm._s(item) +
                                  "\n                                "
                              )
                            ]
                          )
                        })
                      )
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
                    _vm._v(
                      "\n                    重製選取條件\n                "
                    )
                  ]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-4" })
              ])
            ]
          )
        : _vm._e()
    ]),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "container container-productCount",
        staticStyle: { position: "relative" }
      },
      [
        _c("div", { staticClass: "row" }, [
          _c("div", { staticClass: "col-md-12 productCount" }, [
            _vm._m(6),
            _vm._v(" "),
            _vm.isLoaded
              ? _c("div", { staticClass: "productCount-number" }, [
                  _c("span", [_vm._v("顯示總數")]),
                  _vm._v(" "),
                  _c("span", [_vm._v(_vm._s(_vm.pageData.data.length) + "/")]),
                  _vm._v(" "),
                  _c("span", [_vm._v(_vm._s(_vm.pageData.total))])
                ])
              : _vm._e()
          ])
        ]),
        _vm._v(" "),
        _vm.type == "R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V"
          ? _c("button", { staticClass: "collapseBtn" }, [
              _vm._v("\n            收合\n            "),
              _c("img", { attrs: { src: "/img/collapseIcon.png", alt: "" } })
            ])
          : _vm._e()
      ]
    ),
    _vm._v(" "),
    _c("div", { staticClass: "container-fulid filter-product-out" }, [
      _c("div", { staticClass: "row filter-product" }, [
        _c(
          "div",
          { staticClass: "filter-product-row" },
          _vm._l(_vm.pageData.data, function(item, index) {
            return _c("div", { key: index, staticClass: "col-md-6" }, [
              _c("div", { staticClass: "product-inner" }, [
                _c(
                  "div",
                  {
                    staticClass: "product-img",
                    style: "background-image: url('" + item.featureImage + "');"
                  },
                  [
                    _c(
                      "a",
                      { attrs: { href: "/detail/" + item.productGuid } },
                      [
                        _c("div", { staticClass: "product-img-mask" }),
                        _vm._v(" "),
                        _c("p", [_vm._v("查看商品")])
                      ]
                    )
                  ]
                ),
                _vm._v(" "),
                _c("div", { staticClass: "product-innertext" }, [
                  _c("div", { staticClass: "product-title" }, [
                    _c("p", [_vm._v(_vm._s(item.productTitle))])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-style" }, [
                    _c("div", {
                      domProps: { innerHTML: _vm._s(item.shortDescription) }
                    }),
                    _vm._v(" "),
                    _c("p", { staticClass: "product-price" }, [
                      _vm._v("$ " + _vm._s(item.price))
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(7, true),
                  _vm._v(" "),
                  _c(
                    "button",
                    {
                      staticClass: "buyIt",
                      on: {
                        click: function($event) {
                          _vm.addSigleProduct(item.productGuid)
                        }
                      }
                    },
                    [
                      _c("img", {
                        attrs: { src: "/img/cartIconWhite.svg", alt: "" }
                      }),
                      _vm._v(" "),
                      _c("p", [_vm._v("加入購物車")])
                    ]
                  )
                ])
              ])
            ])
          })
        ),
        _vm._v(" "),
        _vm.pageData.last_page != _vm.pageData.current_page
          ? _c(
              "div",
              {
                staticClass: "col-md-12 filter-product-readMore",
                on: { click: _vm.learnMoreAction }
              },
              [
                _c("button", { attrs: { id: "readMore-btn" } }, [
                  _vm._v("查看更多")
                ])
              ]
            )
          : _vm._e()
      ])
    ])
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
    return _c("div", { staticClass: "productCount-left" }, [
      _c("div", { staticClass: "productCount-sort" }, [
        _c("span", [_vm._v("價格由高到低排列 ↓")]),
        _vm._v(" "),
        _c("span", [_vm._v("價格由低到高排列 ↑")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "productHeart" }, [
      _c("img", { attrs: { src: "/img/productHeart.svg", alt: "" } })
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