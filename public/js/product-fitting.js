<<<<<<< HEAD
!function(t){var e={};function n(i){if(e[i])return e[i].exports;var r=e[i]={i:i,l:!1,exports:{}};return t[i].call(r.exports,r,r.exports,n),r.l=!0,r.exports}n.m=t,n.c=e,n.d=function(t,e,i){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:i})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=583)}({2:function(t,e){t.exports=function(t,e,n,i,r,s){var a,o=t=t||{},c=typeof t.default;"object"!==c&&"function"!==c||(a=t,o=t.default);var u,l="function"==typeof o?o.options:o;if(e&&(l.render=e.render,l.staticRenderFns=e.staticRenderFns,l._compiled=!0),n&&(l.functional=!0),r&&(l._scopeId=r),s?(u=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),i&&i.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(s)},l._ssrRegister=u):i&&(u=i),u){var d=l.functional,p=d?l.render:l.beforeCreate;d?(l._injectStyles=u,l.render=function(t,e){return u.call(e),p(t,e)}):l.beforeCreate=p?[].concat(p,u):[u]}return{esModule:a,exports:o,options:l}}},583:function(t,e,n){t.exports=n(584)},584:function(t,e,n){Vue.component("product-fitting",n(585));new Vue({el:"#product-fitting"})},585:function(t,e,n){var i=n(2)(n(586),n(587),!1,null,null,null);t.exports=i.exports},586:function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={mounted:function(){console.log("Component mounted.")},data:function(){return{tagGroup:{brand:null,size:null,trip:null,price:null,material:null},filterGroup:{brand:null,size:null,trip:null,price:null,material:null},pageData:{}}},watch:{filterGroup:{handler:function(t,e){this.getData()},deep:!0}},created:function(){this.getTag()},methods:{getTag:function(){var t=this;axios.get("/admin/tag/get").then(function(e){Object.keys(e.data).forEach(function(n){t.tagGroup[n]=e.data[n]}),t.$nextTick(function(){t.getData()})})},getData:function(){var t=this,e={tag:this.filterGroup,category:"yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd"};axios.post("/products/tag",e).then(function(e){t.pageData=e.data})},addSigleProduct:function(t){function e(e){return t.apply(this,arguments)}return e.toString=function(){return t.toString()},e}(function(t){addSigleProduct(t)}),clearFilter:function(){this.filterGroup={brand:null,size:null,trip:null,price:null,material:null}}}}},587:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("section",[t._m(0),t._v(" "),t._m(1),t._v(" "),n("div",{staticClass:"container-fulid filter-product-out"},[n("div",{staticClass:"row filter-product"},[n("div",{staticClass:"filter-product-row"},t._l(t.pageData.data,function(e,i){return n("div",{key:i,staticClass:"col-md-6"},[n("div",{staticClass:"product-inner"},[n("div",{staticClass:"product-img",style:"background-image: url('"+e.featureImage+"');"},[n("a",{attrs:{href:"/detail/"+e.productGuid}},[n("div",{staticClass:"product-img-mask"}),t._v(" "),n("p",[t._v("查看商品")])])]),t._v(" "),n("div",{staticClass:"product-innertext"},[n("div",{staticClass:"product-title"},[n("p",[t._v(t._s(e.productTitle))])]),t._v(" "),n("div",{staticClass:"product-style"},[n("div",{domProps:{innerHTML:t._s(e.shortDescription)}}),t._v(" "),n("p",{staticClass:"product-price"},[t._v("$ "+t._s(e.price))])]),t._v(" "),t._m(2,!0),t._v(" "),n("button",{staticClass:"buyIt",on:{click:function(n){t.addSigleProduct(e.productGuid)}}},[n("img",{attrs:{src:"/img/cartIconWhite.svg",alt:""}}),t._v(" "),n("p",[t._v("加入購物車")])])])])])})),t._v(" "),t._m(3)])])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"container filter-area"},[e("div",{staticClass:"row filter"},[e("div",{staticClass:"col-md-12 filter-title"},[e("h1",[this._v("品牌行李箱")]),this._v(" "),e("div",{staticClass:"filter-title-hr"}),this._v(" "),e("p",{staticStyle:{"margin-top":"50px"}},[this._v("這裡總有一款屬於你的冒險")])])])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"container container-productCount",staticStyle:{position:"relative"}},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-md-12 productCount"},[n("div",{staticClass:"productCount-left"},[n("div",{staticClass:"productCount-icon"},[n("img",{staticClass:"cube01",attrs:{src:"/img/selectCube-01.svg",alt:""}}),t._v(" "),n("img",{staticClass:"cube02",attrs:{src:"/img/selectCube-02.svg",alt:""}})]),t._v(" "),n("div",{staticClass:"productCount-sort"},[n("span",[t._v("價格由高到低排列 ↓")]),t._v(" "),n("span",[t._v("價格由低到高排列 ↑")])])]),t._v(" "),n("div",{staticClass:"productCount-number"},[n("span",[t._v("顯示總數")]),t._v(" "),n("span",[t._v("08/")]),t._v(" "),n("span",[t._v("127")])])])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"productHeart"},[e("img",{attrs:{src:"/img/productHeart.svg",alt:""}})])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"col-md-12 filter-product-readMore"},[e("button",{attrs:{id:"readMore-btn"}},[this._v("查看更多")])])}]}}});
=======
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
/******/ 	return __webpack_require__(__webpack_require__.s = 607);
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

/***/ 607:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(608);


/***/ }),

/***/ 608:
/***/ (function(module, exports, __webpack_require__) {

Vue.component('product-fitting', __webpack_require__(609));

var app = new Vue({
    el: '#product-fitting'
});

/***/ }),

/***/ 609:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var normalizeComponent = __webpack_require__(4)
/* script */
var __vue_script__ = __webpack_require__(610)
/* template */
var __vue_template__ = __webpack_require__(611)
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

/***/ 610:
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

/* harmony default export */ __webpack_exports__["default"] = ({
    mounted: function mounted() {
        console.log('Component mounted.');
    },
    data: function data() {
        return {
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
                category: 'yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd'
            };

            axios.post('/products/tag', vo).then(function (res) {
                _this2.pageData = res.data;
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

/***/ 611:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("section", [
    _vm._m(0),
    _vm._v(" "),
    _vm._m(1),
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
                  _vm._m(2, true),
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
        _vm._m(3)
      ])
    ])
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
          _c("h1", [_vm._v("品牌行李箱")]),
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
        ])
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "productHeart" }, [
      _c("img", { attrs: { src: "/img/productHeart.svg", alt: "" } })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12 filter-product-readMore" }, [
      _c("button", { attrs: { id: "readMore-btn" } }, [_vm._v("查看更多")])
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
>>>>>>> 57309db7ad9f39dd2d5b2015ac9322636535cf82
