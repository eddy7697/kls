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
/******/ 	return __webpack_require__(__webpack_require__.s = 612);
/******/ })
/************************************************************************/
/******/ ({

/***/ 296:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony default export */ __webpack_exports__["default"] = ({
    number_format: function number_format(n, c, d, t) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c,
            d = d == undefined ? "." : d,
            t = t == undefined ? "," : t,
            s = n < 0 ? "-" : "",
            i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
            j = (j = i.length) > 3 ? j % 3 : 0;

        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    },
    CheckTaiwanID: function CheckTaiwanID(userid) {
        //身份證檢查函式
        var reg = /^[A-Z]{1}[1-2]{1}[0-9]{8}$/; //身份證的正規表示式
        if (reg.test(userid)) {
            var s = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; //把A取代成10,把B取代成11...的作法
            var ct = ["10", "11", "12", "13", "14", "15", "16", "17", "34", "18", "19", "20", "21", "22", "35", "23", "24", "25", "26", "27", "28", "29", "32", "30", "31", "33"];
            var i = s.indexOf(userid.charAt(0));
            var tempuserid = ct[i] + userid.substr(1, 9); //若此身份證號若是A123456789=>10123456789
            var num = tempuserid.charAt(0) * 1;
            for (i = 1; i <= 9; i++) {
                num = num + tempuserid.charAt(i) * (10 - i);
            }
            num += tempuserid.charAt(10) * 1;

            if (num % 10 == 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    },
    getAstro: function getAstro(m, d) {
        return "魔羯水瓶雙魚牡羊金牛雙子巨蟹獅子處女天秤天蠍射手魔羯".substr(m * 2 - (d < "102223444433".charAt(m - 1) - -19) * 2, 2);
    },
    FormatNumberLength: function FormatNumberLength(num, length) {
        var r = "" + num;
        while (r.length < length) {
            r = "0" + r;
        }
        return r;
    }
});

/***/ }),

/***/ 48:
/***/ (function(module, exports) {

/*
	MIT License http://www.opensource.org/licenses/mit-license.php
	Author Tobias Koppers @sokra
*/
// css base code, injected by the css-loader
module.exports = function(useSourceMap) {
	var list = [];

	// return the list of modules as css string
	list.toString = function toString() {
		return this.map(function (item) {
			var content = cssWithMappingToString(item, useSourceMap);
			if(item[2]) {
				return "@media " + item[2] + "{" + content + "}";
			} else {
				return content;
			}
		}).join("");
	};

	// import a list of modules into the list
	list.i = function(modules, mediaQuery) {
		if(typeof modules === "string")
			modules = [[null, modules, ""]];
		var alreadyImportedModules = {};
		for(var i = 0; i < this.length; i++) {
			var id = this[i][0];
			if(typeof id === "number")
				alreadyImportedModules[id] = true;
		}
		for(i = 0; i < modules.length; i++) {
			var item = modules[i];
			// skip already imported module
			// this implementation is not 100% perfect for weird media query combinations
			//  when a module is imported multiple times with different media queries.
			//  I hope this will never occur (Hey this way we have smaller bundles)
			if(typeof item[0] !== "number" || !alreadyImportedModules[item[0]]) {
				if(mediaQuery && !item[2]) {
					item[2] = mediaQuery;
				} else if(mediaQuery) {
					item[2] = "(" + item[2] + ") and (" + mediaQuery + ")";
				}
				list.push(item);
			}
		}
	};
	return list;
};

function cssWithMappingToString(item, useSourceMap) {
	var content = item[1] || '';
	var cssMapping = item[3];
	if (!cssMapping) {
		return content;
	}

	if (useSourceMap && typeof btoa === 'function') {
		var sourceMapping = toComment(cssMapping);
		var sourceURLs = cssMapping.sources.map(function (source) {
			return '/*# sourceURL=' + cssMapping.sourceRoot + source + ' */'
		});

		return [content].concat(sourceURLs).concat([sourceMapping]).join('\n');
	}

	return [content].join('\n');
}

// Adapted from convert-source-map (MIT)
function toComment(sourceMap) {
	// eslint-disable-next-line no-undef
	var base64 = btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap))));
	var data = 'sourceMappingURL=data:application/json;charset=utf-8;base64,' + base64;

	return '/*# ' + data + ' */';
}


/***/ }),

/***/ 6:
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

/***/ 612:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(613);


/***/ }),

/***/ 613:
/***/ (function(module, exports, __webpack_require__) {

Vue.component('product-filter', __webpack_require__(614));

var app = new Vue({
    el: '#product-filter'
});

/***/ }),

/***/ 614:
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(615)
}
var normalizeComponent = __webpack_require__(6)
/* script */
var __vue_script__ = __webpack_require__(617)
/* template */
var __vue_template__ = __webpack_require__(618)
/* template functional */
var __vue_template_functional__ = false
/* styles */
var __vue_styles__ = injectStyle
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

/***/ 615:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(616);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(77)("51fa9ddc", content, false, {});
// Hot Module Replacement
if(false) {
 // When the styles change, update the <style> tags
 if(!content.locals) {
   module.hot.accept("!!../../../../../../../node_modules/css-loader/index.js!../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-465a82ca\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./product-filter.vue", function() {
     var newContent = require("!!../../../../../../../node_modules/css-loader/index.js!../../../../../../../node_modules/vue-loader/lib/style-compiler/index.js?{\"vue\":true,\"id\":\"data-v-465a82ca\",\"scoped\":false,\"hasInlineConfig\":true}!../../../../../../../node_modules/sass-loader/lib/loader.js!../../../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./product-filter.vue");
     if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
     update(newContent);
   });
 }
 // When the module is disposed, remove the <style> tags
 module.hot.dispose(function() { update(); });
}

/***/ }),

/***/ 616:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(48)(false);
// imports


// module
exports.push([module.i, "\n.loading-mask {\n  position: fixed;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n  background: rgba(255, 255, 255, 0.3);\n  z-index: 100;\n}\n.loading-mask .loading-spinner {\n    position: absolute;\n    top: 50%;\n    left: 50%;\n    -webkit-transform: translate(-50%, -50%);\n            transform: translate(-50%, -50%);\n    width: 50px;\n}\n.learnmore {\n  position: relative;\n}\n.learnmore.loading::before {\n    position: absolute;\n    width: 20px;\n    height: 20px;\n    left: -25px;\n    top: 50%;\n    -webkit-transform: translateY(-50%);\n            transform: translateY(-50%);\n    background-image: url(\"/img/loading-spinner.svg\");\n    background-size: cover;\n    content: \"\";\n}\n.searchBar {\n  padding: 5px 10px;\n  width: 175px;\n  margin: 0 auto;\n  border: solid 1px #bdbdbd;\n  color: #bdbdbd;\n  border-radius: 12px;\n}\n.searchBar .cearch-icon input {\n    outline: none;\n}\n", ""]);

// exports


/***/ }),

/***/ 617:
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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

var h = __webpack_require__(296).default;
/* harmony default export */ __webpack_exports__["default"] = ({
    mounted: function mounted() {
        console.log('Component mounted.');
    },

    props: ['type'],
    data: function data() {
        return {
            isLoading: false,
            isLoadingLearnMore: false,
            order: 'desc',
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
        },
        order: function order(val) {
            this.getData();
        }
    },
    created: function created() {
        this.getTag();
    },

    methods: {
        getTag: function getTag() {
            var _this = this;

            axios.get('/admin/tag/get').then(function (res) {
                console.log(res);

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
                category: this.type,
                order: this.order
            };

            this.isLoading = true;
            axios.post('/products/tag', vo).then(function (res) {
                _this2.pageData = res.data;
                _this2.isLoaded = true;
                _this2.getTitle();
                _this2.scrollMore();
                _this2.getFavorite();
            }).catch(function (err) {}).then(function () {
                _this2.isLoading = false;
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
                category: this.type
            };

            this.isLoading = true;
            this.isLoadingLearnMore = true;

            axios.post(this.pageData.next_page_url, vo).then(function (res) {
                _this3.pageData.next_page_url = res.data.next_page_url;
                _this3.pageData.current_page = res.data.current_page;
                _this3.pageData.data = _.concat(_this3.pageData.data, res.data.data);
                _this3.$nextTick(function () {
                    _this3.pageData.data.forEach(function (elm) {
                        if (elm.productType == 'variable') {
                            console.log(elm);
                        }
                    });
                });
            }).catch(function (err) {}).then(function () {
                _this3.isLoading = false;
                _this3.isLoadingLearnMore = false;
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
        },
        addFavorite: function (_addFavorite) {
            function addFavorite(_x2) {
                return _addFavorite.apply(this, arguments);
            }

            addFavorite.toString = function () {
                return _addFavorite.toString();
            };

            return addFavorite;
        }(function (guid) {
            var target = event.target;
            var tagName = target.tagName;
            this.getFavorite(tagName, target);
            addFavorite(guid);
        }),
        getFavorite: function getFavorite(tagName, target) {
            var self = this;
            axios.get('/favorite/get').then(function (res) {
                var wishCount = res.data.length;
                self.isFavorited(res.data);
                if (wishCount) {
                    $('.wish-icon .count').text(wishCount);
                }
                if (tagName == 'IMG') {
                    $(target).parent('.productHeart').addClass('productHeart-active');
                } else {
                    $(target).addClass('productHeart-active');
                }
            });
        },
        getTitle: function getTitle() {
            var title = $('#thisTitle');
            var vo = {
                category: this.type
            };
            var fiterType = {
                all: 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V',
                other: 'yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd',
                bag: '3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe'
            };

            switch (vo.category) {
                case fiterType.all:
                    title.text('品牌旅行箱');
                    this.menuStyle(1);
                    break;
                case fiterType.other:
                    title.text('旅行配件');
                    $('.filter-subTitle').hide();
                    $('.searchBar').css('margin-top', '50px');
                    this.menuStyle(2);
                    break;
                case fiterType.bag:
                    title.text('品牌背包');
                    $('.filter-subTitle').hide();
                    $('.searchBar').css('margin-top', '50px');
                    this.menuStyle(3);
                    break;
            }
        },
        menuStyle: function menuStyle(val) {
            $('.mega-menu .product .mega-menu-list ul li:nth-child(' + val + ') a').css('border', 'solid 1px #B3B3B3');
        },
        scrollMore: function scrollMore() {
            var _this4 = this;

            var timer = void 0;
            $(document).scroll(function () {
                window.clearTimeout(timer);

                timer = window.setTimeout(function () {
                    var docH = $(document).height();
                    var scrollH = $(document).scrollTop() + $('.sub-page-footer').height() / 2 + window.innerHeight;
                    if (scrollH > docH) {
                        _this4.learnMoreAction();
                    }
                }, 100);
            });
        },
        numberFormat: function numberFormat(n, c, d, t) {
            return h.number_format(n, c, d, t);
        },
        isFavorited: function isFavorited(data) {
            data.forEach(function (item, index) {
                $('.productHeart[data-id="' + item.productGuid + '"]').addClass('productHeart-active');
            });
        }
    }
});

/***/ }),

/***/ 618:
/***/ (function(module, exports, __webpack_require__) {

var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("section", [
    _c("img", {
      staticStyle: { display: "none" },
      attrs: { src: "/img/loading-spinner.svg", alt: "" }
    }),
    _vm._v(" "),
    _vm.isLoading
      ? _c("div", { staticClass: "loading-mask" }, [
          _c("img", {
            staticClass: "loading-spinner",
            attrs: { src: "/img/loading-spinner.svg", alt: "" }
          })
        ])
      : _vm._e(),
    _vm._v(" "),
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
        : _vm._e(),
      _vm._v(" "),
      _vm.type == "3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe"
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
                    _vm._m(6),
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
                _vm._m(7),
                _vm._v(" "),
                _c("div", { staticClass: "col-md-4" }, [
                  _c("div", { staticClass: "filter-filters" }, [
                    _vm._m(8),
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
                ])
              ]),
              _vm._v(" "),
              _c("div", { staticClass: "col-md-12 filter-filtering" }, [
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
        : _vm._e(),
      _vm._v(" "),
      _vm.type == "yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd"
        ? _c(
            "div",
            {
              staticClass: "row filter",
              staticStyle: { "margin-top": "80px", "margin-bottom": "80px" }
            },
            [_vm._m(9)]
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
            _c("div", { staticClass: "productCount-left" }, [
              _c("div", { staticClass: "productCount-sort" }, [
                _c(
                  "span",
                  {
                    class: { active: _vm.order == "desc" },
                    on: {
                      click: function($event) {
                        _vm.order = "desc"
                      }
                    }
                  },
                  [_vm._v("價格由高到低排列 ↓")]
                ),
                _vm._v(" "),
                _c(
                  "span",
                  {
                    class: { active: _vm.order == "asc" },
                    on: {
                      click: function($event) {
                        _vm.order = "asc"
                      }
                    }
                  },
                  [_vm._v("價格由低到高排列 ↑")]
                )
              ])
            ]),
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
                      staticClass: "style-inner",
                      domProps: { innerHTML: _vm._s(item.shortDescription) }
                    }),
                    _vm._v(" "),
                    item.productType == "simple"
                      ? _c("p", { staticClass: "product-price" }, [
                          _vm._v(
                            "$ " +
                              _vm._s(_vm.numberFormat(item.price, 0, ".", ","))
                          )
                        ])
                      : _c("p", [_vm._v("多規格商品")])
                  ]),
                  _vm._v(" "),
                  _c(
                    "div",
                    {
                      staticClass: "productHeart",
                      attrs: { "data-id": item.productGuid },
                      on: {
                        click: function($event) {
                          _vm.addFavorite(item.productGuid)
                        }
                      }
                    },
                    [
                      _c("img", {
                        attrs: { src: "/img/productHeart.svg", alt: "" }
                      })
                    ]
                  ),
                  _vm._v(" "),
                  item.productType == "simple"
                    ? _c(
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
                    : _c(
                        "a",
                        {
                          staticClass: "buyIt",
                          attrs: { href: "/detail/" + item.productGuid }
                        },
                        [
                          _vm._v(
                            "\n                                選擇規格\n                            "
                          )
                        ]
                      )
                ])
              ])
            ])
          })
        )
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
        _c("h1", { attrs: { id: "thisTitle" } }, [_vm._v("品牌行李箱")]),
        _vm._v(" "),
        _c("div", { staticClass: "filter-title-hr" }),
        _vm._v(" "),
        _c(
          "p",
          {
            staticClass: "filter-subTitle",
            staticStyle: { "margin-top": "50px" }
          },
          [_vm._v("這裡總有一款屬於你的冒險")]
        ),
        _vm._v(" "),
        _c("div", { staticClass: "searchBar" }, [
          _c(
            "i",
            {
              staticClass: "fa fa-search lg cearch-icon",
              attrs: { "aria-hidden": "true" }
            },
            [
              _c("input", {
                staticStyle: {
                  "padding-left": "10px",
                  border: "none",
                  width: "90%"
                },
                attrs: { type: "text", placeholder: "輸入要尋找的商品" }
              })
            ]
          )
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
    return _c("div", { staticClass: "filters-title" }, [
      _c("p", [_vm._v("品牌 Brand")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-4" }, [
      _c("div", { staticClass: "filter-filters" }, [
        _c("div", { staticClass: "filters-title" }, [
          _c("p", [_vm._v("類型 Types")])
        ]),
        _vm._v(" "),
        _c("hr"),
        _vm._v(" "),
        _c("form", { staticClass: "filters-selects" }, [
          _c("div", { staticClass: "filters-selects-div" }, [
            _c("label", [
              _c("input", {
                attrs: { name: "size", value: "type1", type: "radio" }
              }),
              _vm._v("Type1\n                                ")
            ]),
            _vm._v(" "),
            _c("label", [
              _c("input", {
                attrs: { name: "size", value: "type2", type: "radio" }
              }),
              _vm._v("Type2\n                                ")
            ]),
            _vm._v(" "),
            _c("label", [
              _c("input", {
                attrs: { name: "size", value: "type3", type: "radio" }
              }),
              _vm._v("Type3\n                                ")
            ]),
            _vm._v(" "),
            _c("label", [
              _c("input", {
                attrs: { name: "size", value: "type4", type: "radio" }
              }),
              _vm._v("Type4\n                                ")
            ]),
            _vm._v(" "),
            _c("label", [
              _c("input", {
                attrs: { name: "size", value: "type5", type: "radio" }
              }),
              _vm._v("Type5\n                                ")
            ])
          ])
        ])
      ])
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
    return _c("div", { staticClass: "col-md-12 blog-filter-inner" }, [
      _c("a", { staticClass: "active" }, [_vm._v("全部文章")]),
      _vm._v(" "),
      _c("a", { attrs: { href: "" } }, [_vm._v("束帶")]),
      _vm._v(" "),
      _c("a", { attrs: { href: "" } }, [_vm._v("行李秤")]),
      _vm._v(" "),
      _c("a", { attrs: { href: "" } }, [_vm._v("收納包")]),
      _vm._v(" "),
      _c("a", { attrs: { href: "" } }, [_vm._v("行李箱保護套")]),
      _vm._v(" "),
      _c("a", { attrs: { href: "" } }, [_vm._v("護照包")]),
      _vm._v(" "),
      _c("a", { attrs: { href: "" } }, [_vm._v("其他")])
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

/***/ }),

/***/ 77:
/***/ (function(module, exports, __webpack_require__) {

/*
  MIT License http://www.opensource.org/licenses/mit-license.php
  Author Tobias Koppers @sokra
  Modified by Evan You @yyx990803
*/

var hasDocument = typeof document !== 'undefined'

if (typeof DEBUG !== 'undefined' && DEBUG) {
  if (!hasDocument) {
    throw new Error(
    'vue-style-loader cannot be used in a non-browser environment. ' +
    "Use { target: 'node' } in your Webpack config to indicate a server-rendering environment."
  ) }
}

var listToStyles = __webpack_require__(78)

/*
type StyleObject = {
  id: number;
  parts: Array<StyleObjectPart>
}

type StyleObjectPart = {
  css: string;
  media: string;
  sourceMap: ?string
}
*/

var stylesInDom = {/*
  [id: number]: {
    id: number,
    refs: number,
    parts: Array<(obj?: StyleObjectPart) => void>
  }
*/}

var head = hasDocument && (document.head || document.getElementsByTagName('head')[0])
var singletonElement = null
var singletonCounter = 0
var isProduction = false
var noop = function () {}
var options = null
var ssrIdKey = 'data-vue-ssr-id'

// Force single-tag solution on IE6-9, which has a hard limit on the # of <style>
// tags it will allow on a page
var isOldIE = typeof navigator !== 'undefined' && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase())

module.exports = function (parentId, list, _isProduction, _options) {
  isProduction = _isProduction

  options = _options || {}

  var styles = listToStyles(parentId, list)
  addStylesToDom(styles)

  return function update (newList) {
    var mayRemove = []
    for (var i = 0; i < styles.length; i++) {
      var item = styles[i]
      var domStyle = stylesInDom[item.id]
      domStyle.refs--
      mayRemove.push(domStyle)
    }
    if (newList) {
      styles = listToStyles(parentId, newList)
      addStylesToDom(styles)
    } else {
      styles = []
    }
    for (var i = 0; i < mayRemove.length; i++) {
      var domStyle = mayRemove[i]
      if (domStyle.refs === 0) {
        for (var j = 0; j < domStyle.parts.length; j++) {
          domStyle.parts[j]()
        }
        delete stylesInDom[domStyle.id]
      }
    }
  }
}

function addStylesToDom (styles /* Array<StyleObject> */) {
  for (var i = 0; i < styles.length; i++) {
    var item = styles[i]
    var domStyle = stylesInDom[item.id]
    if (domStyle) {
      domStyle.refs++
      for (var j = 0; j < domStyle.parts.length; j++) {
        domStyle.parts[j](item.parts[j])
      }
      for (; j < item.parts.length; j++) {
        domStyle.parts.push(addStyle(item.parts[j]))
      }
      if (domStyle.parts.length > item.parts.length) {
        domStyle.parts.length = item.parts.length
      }
    } else {
      var parts = []
      for (var j = 0; j < item.parts.length; j++) {
        parts.push(addStyle(item.parts[j]))
      }
      stylesInDom[item.id] = { id: item.id, refs: 1, parts: parts }
    }
  }
}

function createStyleElement () {
  var styleElement = document.createElement('style')
  styleElement.type = 'text/css'
  head.appendChild(styleElement)
  return styleElement
}

function addStyle (obj /* StyleObjectPart */) {
  var update, remove
  var styleElement = document.querySelector('style[' + ssrIdKey + '~="' + obj.id + '"]')

  if (styleElement) {
    if (isProduction) {
      // has SSR styles and in production mode.
      // simply do nothing.
      return noop
    } else {
      // has SSR styles but in dev mode.
      // for some reason Chrome can't handle source map in server-rendered
      // style tags - source maps in <style> only works if the style tag is
      // created and inserted dynamically. So we remove the server rendered
      // styles and inject new ones.
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  if (isOldIE) {
    // use singleton mode for IE9.
    var styleIndex = singletonCounter++
    styleElement = singletonElement || (singletonElement = createStyleElement())
    update = applyToSingletonTag.bind(null, styleElement, styleIndex, false)
    remove = applyToSingletonTag.bind(null, styleElement, styleIndex, true)
  } else {
    // use multi-style-tag mode in all other cases
    styleElement = createStyleElement()
    update = applyToTag.bind(null, styleElement)
    remove = function () {
      styleElement.parentNode.removeChild(styleElement)
    }
  }

  update(obj)

  return function updateStyle (newObj /* StyleObjectPart */) {
    if (newObj) {
      if (newObj.css === obj.css &&
          newObj.media === obj.media &&
          newObj.sourceMap === obj.sourceMap) {
        return
      }
      update(obj = newObj)
    } else {
      remove()
    }
  }
}

var replaceText = (function () {
  var textStore = []

  return function (index, replacement) {
    textStore[index] = replacement
    return textStore.filter(Boolean).join('\n')
  }
})()

function applyToSingletonTag (styleElement, index, remove, obj) {
  var css = remove ? '' : obj.css

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = replaceText(index, css)
  } else {
    var cssNode = document.createTextNode(css)
    var childNodes = styleElement.childNodes
    if (childNodes[index]) styleElement.removeChild(childNodes[index])
    if (childNodes.length) {
      styleElement.insertBefore(cssNode, childNodes[index])
    } else {
      styleElement.appendChild(cssNode)
    }
  }
}

function applyToTag (styleElement, obj) {
  var css = obj.css
  var media = obj.media
  var sourceMap = obj.sourceMap

  if (media) {
    styleElement.setAttribute('media', media)
  }
  if (options.ssrId) {
    styleElement.setAttribute(ssrIdKey, obj.id)
  }

  if (sourceMap) {
    // https://developer.chrome.com/devtools/docs/javascript-debugging
    // this makes source maps inside style tags work properly in Chrome
    css += '\n/*# sourceURL=' + sourceMap.sources[0] + ' */'
    // http://stackoverflow.com/a/26603875
    css += '\n/*# sourceMappingURL=data:application/json;base64,' + btoa(unescape(encodeURIComponent(JSON.stringify(sourceMap)))) + ' */'
  }

  if (styleElement.styleSheet) {
    styleElement.styleSheet.cssText = css
  } else {
    while (styleElement.firstChild) {
      styleElement.removeChild(styleElement.firstChild)
    }
    styleElement.appendChild(document.createTextNode(css))
  }
}


/***/ }),

/***/ 78:
/***/ (function(module, exports) {

/**
 * Translates the list format produced by css-loader into something
 * easier to manipulate.
 */
module.exports = function listToStyles (parentId, list) {
  var styles = []
  var newStyles = {}
  for (var i = 0; i < list.length; i++) {
    var item = list[i]
    var id = item[0]
    var css = item[1]
    var media = item[2]
    var sourceMap = item[3]
    var part = {
      id: parentId + ':' + i,
      css: css,
      media: media,
      sourceMap: sourceMap
    }
    if (!newStyles[id]) {
      styles.push(newStyles[id] = { id: id, parts: [part] })
    } else {
      newStyles[id].parts.push(part)
    }
  }
  return styles
}


/***/ })

/******/ });