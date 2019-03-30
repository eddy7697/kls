<<<<<<< HEAD
!function(t){var e={};function r(i){if(e[i])return e[i].exports;var a=e[i]={i:i,l:!1,exports:{}};return t[i].call(a.exports,a,a.exports,r),a.l=!0,a.exports}r.m=t,r.c=e,r.d=function(t,e,i){r.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:i})},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=576)}({2:function(t,e){t.exports=function(t,e,r,i,a,n){var s,o=t=t||{},l=typeof t.default;"object"!==l&&"function"!==l||(s=t,o=t.default);var c,u="function"==typeof o?o.options:o;if(e&&(u.render=e.render,u.staticRenderFns=e.staticRenderFns,u._compiled=!0),r&&(u.functional=!0),a&&(u._scopeId=a),n?(c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),i&&i.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(n)},u._ssrRegister=c):i&&(c=i),c){var d=u.functional,p=d?u.render:u.beforeCreate;d?(u._injectStyles=c,u.render=function(t,e){return c.call(e),p(t,e)}):u.beforeCreate=p?[].concat(p,c):[c]}return{esModule:s,exports:o,options:u}}},50:function(t,e){t.exports=function(t){var e=[];return e.toString=function(){return this.map(function(e){var r=function(t,e){var r=t[1]||"",i=t[3];if(!i)return r;if(e&&"function"==typeof btoa){var a=(s=i,"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(s))))+" */"),n=i.sources.map(function(t){return"/*# sourceURL="+i.sourceRoot+t+" */"});return[r].concat(n).concat([a]).join("\n")}var s;return[r].join("\n")}(e,t);return e[2]?"@media "+e[2]+"{"+r+"}":r}).join("")},e.i=function(t,r){"string"==typeof t&&(t=[[null,t,""]]);for(var i={},a=0;a<this.length;a++){var n=this[a][0];"number"==typeof n&&(i[n]=!0)}for(a=0;a<t.length;a++){var s=t[a];"number"==typeof s[0]&&i[s[0]]||(r&&!s[2]?s[2]=r:r&&(s[2]="("+s[2]+") and ("+r+")"),e.push(s))}},e}},576:function(t,e,r){t.exports=r(577)},577:function(t,e,r){Vue.component("product-filter",r(578));new Vue({el:"#product-filter"})},578:function(t,e,r){var i=r(2)(r(581),r(582),!1,function(t){r(579)},null,null);t.exports=i.exports},579:function(t,e,r){var i=r(580);"string"==typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);r(72)("4301f3fa",i,!0,{})},580:function(t,e,r){(t.exports=r(50)(!1)).push([t.i,'.loading-mask{position:fixed;top:0;left:0;right:0;bottom:0;background:hsla(0,0%,100%,.3);z-index:100}.loading-mask .loading-spinner{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);width:50px}.learnmore{position:relative}.learnmore.loading:before{position:absolute;width:20px;height:20px;left:-25px;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);background-image:url("/img/loading-spinner.svg");background-size:cover;content:""}',""])},581:function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={mounted:function(){console.log("Component mounted.")},props:["type"],data:function(){return{isLoading:!1,isLoadingLearnMore:!1,order:"desc",isLoaded:!1,tagGroup:{brand:null,size:null,trip:null,price:null,material:null},filterGroup:{brand:null,size:null,trip:null,price:null,material:null},pageData:{}}},watch:{filterGroup:{handler:function(t,e){this.getData()},deep:!0},order:function(t){this.getData()}},created:function(){this.getTag()},methods:{getTag:function(){var t=this;axios.get("/admin/tag/get").then(function(e){Object.keys(e.data).forEach(function(r){t.tagGroup[r]=e.data[r]}),t.$nextTick(function(){t.getData()})})},getData:function(){var t=this,e={tag:this.filterGroup,category:this.type,order:this.order};this.isLoading=!0,axios.post("/products/tag",e).then(function(e){t.pageData=e.data,t.isLoaded=!0}).catch(function(t){}).then(function(){t.isLoading=!1})},addSigleProduct:function(t){function e(e){return t.apply(this,arguments)}return e.toString=function(){return t.toString()},e}(function(t){addSigleProduct(t)}),learnMoreAction:function(){var t=this,e={tag:this.filterGroup,category:this.type};this.isLoading=!0,this.isLoadingLearnMore=!0,axios.post(this.pageData.next_page_url,e).then(function(e){t.pageData.next_page_url=e.data.next_page_url,t.pageData.current_page=e.data.current_page,t.pageData.data=_.concat(t.pageData.data,e.data.data)}).catch(function(t){}).then(function(){t.isLoading=!1,t.isLoadingLearnMore=!1})},clearFilter:function(){this.filterGroup={brand:null,size:null,trip:null,price:null,material:null}}}}},582:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("section",[r("img",{staticStyle:{display:"none"},attrs:{src:"/img/loading-spinner.svg",alt:""}}),t._v(" "),t.isLoading?r("div",{staticClass:"loading-mask"},[r("img",{staticClass:"loading-spinner",attrs:{src:"/img/loading-spinner.svg",alt:""}})]):t._e(),t._v(" "),r("div",{staticClass:"container filter-area"},[t._m(0),t._v(" "),"R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V"==t.type?r("div",{staticClass:"row filter",staticStyle:{"margin-top":"80px","margin-bottom":"80px"}},[r("div",{staticClass:"col-md-12 filter-filtering"},[r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(1),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.brand,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.brand,expression:"filterGroup.brand"}],attrs:{name:"brand",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.brand,e)},on:{change:function(r){t.$set(t.filterGroup,"brand",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(2),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.size,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.size,expression:"filterGroup.size"}],attrs:{name:"size",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.size,e)},on:{change:function(r){t.$set(t.filterGroup,"size",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(3),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.trip,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.trip,expression:"filterGroup.trip"}],attrs:{name:"trip",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.trip,e)},on:{change:function(r){t.$set(t.filterGroup,"trip",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])])]),t._v(" "),r("div",{staticClass:"col-md-12 filter-filtering"},[r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(4),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.price,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.price,expression:"filterGroup.price"}],attrs:{name:"price",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.price,e)},on:{change:function(r){t.$set(t.filterGroup,"price",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(5),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.material,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.material,expression:"filterGroup.material"}],attrs:{name:"material",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.material,e)},on:{change:function(r){t.$set(t.filterGroup,"material",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("button",{staticClass:"filter-remakeBtn",on:{click:function(e){t.clearFilter()}}},[r("img",{staticClass:"filter-remakeBtnImg",attrs:{src:"/img/remakeIcon.svg",alt:""}}),t._v("\n                    重製選取條件\n                ")]),t._v(" "),r("div",{staticClass:"col-md-4"})])]):t._e()]),t._v(" "),r("div",{staticClass:"container container-productCount",staticStyle:{position:"relative"}},[r("div",{staticClass:"row"},[r("div",{staticClass:"col-md-12 productCount"},[r("div",{staticClass:"productCount-left"},[r("div",{staticClass:"productCount-sort"},[r("span",{class:{active:"desc"==t.order},on:{click:function(e){t.order="desc"}}},[t._v("價格由高到低排列 ↓")]),t._v(" "),r("span",{class:{active:"asc"==t.order},on:{click:function(e){t.order="asc"}}},[t._v("價格由低到高排列 ↑")])])]),t._v(" "),t.isLoaded?r("div",{staticClass:"productCount-number"},[r("span",[t._v("顯示總數")]),t._v(" "),r("span",[t._v(t._s(t.pageData.data.length)+"/")]),t._v(" "),r("span",[t._v(t._s(t.pageData.total))])]):t._e()])]),t._v(" "),"R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V"==t.type?r("button",{staticClass:"collapseBtn"},[t._v("\n            收合\n            "),r("img",{attrs:{src:"/img/collapseIcon.png",alt:""}})]):t._e()]),t._v(" "),r("div",{staticClass:"container-fulid filter-product-out"},[r("div",{staticClass:"row filter-product"},[r("div",{staticClass:"filter-product-row"},t._l(t.pageData.data,function(e,i){return r("div",{key:i,staticClass:"col-md-6"},[r("div",{staticClass:"product-inner"},[r("div",{staticClass:"product-img",style:"background-image: url('"+e.featureImage+"');"},[r("a",{attrs:{href:"/detail/"+e.productGuid}},[r("div",{staticClass:"product-img-mask"}),t._v(" "),r("p",[t._v("查看商品")])])]),t._v(" "),r("div",{staticClass:"product-innertext"},[r("div",{staticClass:"product-title"},[r("p",[t._v(t._s(e.productTitle))])]),t._v(" "),r("div",{staticClass:"product-style"},[r("div",{domProps:{innerHTML:t._s(e.shortDescription)}}),t._v(" "),r("p",{staticClass:"product-price"},[t._v("$ "+t._s(e.price))])]),t._v(" "),t._m(6,!0),t._v(" "),r("button",{staticClass:"buyIt",on:{click:function(r){t.addSigleProduct(e.productGuid)}}},[r("img",{attrs:{src:"/img/cartIconWhite.svg",alt:""}}),t._v(" "),r("p",[t._v("加入購物車")])])])])])})),t._v(" "),t.pageData.last_page!=t.pageData.current_page?r("div",{staticClass:"col-md-12 filter-product-readMore",on:{click:t.learnMoreAction}},[r("button",{attrs:{id:"readMore-btn"}},[r("span",{staticClass:"learnmore",class:{loading:t.isLoadingLearnMore}},[t._v("查看更多")])])]):t._e()])])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"row filter"},[e("div",{staticClass:"col-md-12 filter-title"},[e("h1",[this._v("品牌行李箱")]),this._v(" "),e("div",{staticClass:"filter-title-hr"}),this._v(" "),e("p",{staticStyle:{"margin-top":"50px"}},[this._v("這裡總有一款屬於你的冒險")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("品牌 Brand")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("尺寸 Size")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("旅程 Trip")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("價格 Price")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("材質 Material")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"productHeart"},[e("img",{attrs:{src:"/img/productHeart.svg",alt:""}})])}]}},72:function(t,e,r){var i="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!i)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var a=r(73),n={},s=i&&(document.head||document.getElementsByTagName("head")[0]),o=null,l=0,c=!1,u=function(){},d=null,p="data-vue-ssr-id",f="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function v(t){for(var e=0;e<t.length;e++){var r=t[e],i=n[r.id];if(i){i.refs++;for(var a=0;a<i.parts.length;a++)i.parts[a](r.parts[a]);for(;a<r.parts.length;a++)i.parts.push(g(r.parts[a]));i.parts.length>r.parts.length&&(i.parts.length=r.parts.length)}else{var s=[];for(a=0;a<r.parts.length;a++)s.push(g(r.parts[a]));n[r.id]={id:r.id,refs:1,parts:s}}}}function m(){var t=document.createElement("style");return t.type="text/css",s.appendChild(t),t}function g(t){var e,r,i=document.querySelector("style["+p+'~="'+t.id+'"]');if(i){if(c)return u;i.parentNode.removeChild(i)}if(f){var a=l++;i=o||(o=m()),e=C.bind(null,i,a,!1),r=C.bind(null,i,a,!0)}else i=m(),e=function(t,e){var r=e.css,i=e.media,a=e.sourceMap;i&&t.setAttribute("media",i);d.ssrId&&t.setAttribute(p,e.id);a&&(r+="\n/*# sourceURL="+a.sources[0]+" */",r+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(a))))+" */");if(t.styleSheet)t.styleSheet.cssText=r;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(r))}}.bind(null,i),r=function(){i.parentNode.removeChild(i)};return e(t),function(i){if(i){if(i.css===t.css&&i.media===t.media&&i.sourceMap===t.sourceMap)return;e(t=i)}else r()}}t.exports=function(t,e,r,i){c=r,d=i||{};var s=a(t,e);return v(s),function(e){for(var r=[],i=0;i<s.length;i++){var o=s[i];(l=n[o.id]).refs--,r.push(l)}e?v(s=a(t,e)):s=[];for(i=0;i<r.length;i++){var l;if(0===(l=r[i]).refs){for(var c=0;c<l.parts.length;c++)l.parts[c]();delete n[l.id]}}}};var _,h=(_=[],function(t,e){return _[t]=e,_.filter(Boolean).join("\n")});function C(t,e,r,i){var a=r?"":i.css;if(t.styleSheet)t.styleSheet.cssText=h(e,a);else{var n=document.createTextNode(a),s=t.childNodes;s[e]&&t.removeChild(s[e]),s.length?t.insertBefore(n,s[e]):t.appendChild(n)}}},73:function(t,e){t.exports=function(t,e){for(var r=[],i={},a=0;a<e.length;a++){var n=e[a],s=n[0],o={id:t+":"+a,css:n[1],media:n[2],sourceMap:n[3]};i[s]?i[s].parts.push(o):r.push(i[s]={id:s,parts:[o]})}return r}}});
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

/***/ 52:
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
function injectStyle (ssrContext) {
  if (disposed) return
  __webpack_require__(603)
}
var normalizeComponent = __webpack_require__(4)
/* script */
var __vue_script__ = __webpack_require__(605)
/* template */
var __vue_template__ = __webpack_require__(606)
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

/***/ 603:
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(604);
if(typeof content === 'string') content = [[module.i, content, '']];
if(content.locals) module.exports = content.locals;
// add the styles to the DOM
var update = __webpack_require__(75)("51fa9ddc", content, false, {});
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

/***/ 604:
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(52)(false);
// imports


// module
exports.push([module.i, "\n.loading-mask {\n  position: fixed;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n  background: rgba(255, 255, 255, 0.3);\n  z-index: 100;\n}\n.loading-mask .loading-spinner {\n    position: absolute;\n    top: 50%;\n    left: 50%;\n    -webkit-transform: translate(-50%, -50%);\n            transform: translate(-50%, -50%);\n    width: 50px;\n}\n.learnmore {\n  position: relative;\n}\n.learnmore.loading::before {\n    position: absolute;\n    width: 20px;\n    height: 20px;\n    left: -25px;\n    top: 50%;\n    -webkit-transform: translateY(-50%);\n            transform: translateY(-50%);\n    background-image: url(\"/img/loading-spinner.svg\");\n    background-size: cover;\n    content: \"\";\n}\n", ""]);

// exports


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
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
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
                      domProps: { innerHTML: _vm._s(item.shortDescription) }
                    }),
                    _vm._v(" "),
                    _c("p", { staticClass: "product-price" }, [
                      _vm._v("$ " + _vm._s(item.price))
                    ])
                  ]),
                  _vm._v(" "),
                  _vm._m(6, true),
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
                  _c(
                    "span",
                    {
                      staticClass: "learnmore",
                      class: { loading: _vm.isLoadingLearnMore }
                    },
                    [_vm._v("查看更多")]
                  )
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

/***/ }),

/***/ 75:
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

var listToStyles = __webpack_require__(76)

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

/***/ 76:
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
>>>>>>> 57309db7ad9f39dd2d5b2015ac9322636535cf82
