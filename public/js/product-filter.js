<<<<<<< HEAD
!function(t){var e={};function r(i){if(e[i])return e[i].exports;var a=e[i]={i:i,l:!1,exports:{}};return t[i].call(a.exports,a,a.exports,r),a.l=!0,a.exports}r.m=t,r.c=e,r.d=function(t,e,i){r.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:i})},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="",r(r.s=590)}({13:function(t,e){t.exports=function(t,e,r,i,a,s){var n,o=t=t||{},l=typeof t.default;"object"!==l&&"function"!==l||(n=t,o=t.default);var c,d="function"==typeof o?o.options:o;if(e&&(d.render=e.render,d.staticRenderFns=e.staticRenderFns,d._compiled=!0),r&&(d.functional=!0),a&&(d._scopeId=a),s?(c=function(t){(t=t||this.$vnode&&this.$vnode.ssrContext||this.parent&&this.parent.$vnode&&this.parent.$vnode.ssrContext)||"undefined"==typeof __VUE_SSR_CONTEXT__||(t=__VUE_SSR_CONTEXT__),i&&i.call(this,t),t&&t._registeredComponents&&t._registeredComponents.add(s)},d._ssrRegister=c):i&&(c=i),c){var u=d.functional,p=u?d.render:d.beforeCreate;u?(d._injectStyles=c,d.render=function(t,e){return c.call(e),p(t,e)}):d.beforeCreate=p?[].concat(p,c):[c]}return{esModule:n,exports:o,options:d}}},139:function(t,e,r){var i="undefined"!=typeof document;if("undefined"!=typeof DEBUG&&DEBUG&&!i)throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");var a=r(140),s={},n=i&&(document.head||document.getElementsByTagName("head")[0]),o=null,l=0,c=!1,d=function(){},u=null,p="data-vue-ssr-id",f="undefined"!=typeof navigator&&/msie [6-9]\b/.test(navigator.userAgent.toLowerCase());function v(t){for(var e=0;e<t.length;e++){var r=t[e],i=s[r.id];if(i){i.refs++;for(var a=0;a<i.parts.length;a++)i.parts[a](r.parts[a]);for(;a<r.parts.length;a++)i.parts.push(g(r.parts[a]));i.parts.length>r.parts.length&&(i.parts.length=r.parts.length)}else{var n=[];for(a=0;a<r.parts.length;a++)n.push(g(r.parts[a]));s[r.id]={id:r.id,refs:1,parts:n}}}}function m(){var t=document.createElement("style");return t.type="text/css",n.appendChild(t),t}function g(t){var e,r,i=document.querySelector("style["+p+'~="'+t.id+'"]');if(i){if(c)return d;i.parentNode.removeChild(i)}if(f){var a=l++;i=o||(o=m()),e=C.bind(null,i,a,!1),r=C.bind(null,i,a,!0)}else i=m(),e=function(t,e){var r=e.css,i=e.media,a=e.sourceMap;i&&t.setAttribute("media",i);u.ssrId&&t.setAttribute(p,e.id);a&&(r+="\n/*# sourceURL="+a.sources[0]+" */",r+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(a))))+" */");if(t.styleSheet)t.styleSheet.cssText=r;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(r))}}.bind(null,i),r=function(){i.parentNode.removeChild(i)};return e(t),function(i){if(i){if(i.css===t.css&&i.media===t.media&&i.sourceMap===t.sourceMap)return;e(t=i)}else r()}}t.exports=function(t,e,r,i){c=r,u=i||{};var n=a(t,e);return v(n),function(e){for(var r=[],i=0;i<n.length;i++){var o=n[i];(l=s[o.id]).refs--,r.push(l)}e?v(n=a(t,e)):n=[];for(i=0;i<r.length;i++){var l;if(0===(l=r[i]).refs){for(var c=0;c<l.parts.length;c++)l.parts[c]();delete s[l.id]}}}};var h,_=(h=[],function(t,e){return h[t]=e,h.filter(Boolean).join("\n")});function C(t,e,r,i){var a=r?"":i.css;if(t.styleSheet)t.styleSheet.cssText=_(e,a);else{var s=document.createTextNode(a),n=t.childNodes;n[e]&&t.removeChild(n[e]),n.length?t.insertBefore(s,n[e]):t.appendChild(s)}}},140:function(t,e){t.exports=function(t,e){for(var r=[],i={},a=0;a<e.length;a++){var s=e[a],n=s[0],o={id:t+":"+a,css:s[1],media:s[2],sourceMap:s[3]};i[n]?i[n].parts.push(o):r.push(i[n]={id:n,parts:[o]})}return r}},272:function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={number_format:function(t,e,r,i){e=isNaN(e=Math.abs(e))?2:e,r=void 0==r?".":r,i=void 0==i?",":i;var a=t<0?"-":"",s=String(parseInt(t=Math.abs(Number(t)||0).toFixed(e))),n=(n=s.length)>3?n%3:0;return a+(n?s.substr(0,n)+i:"")+s.substr(n).replace(/(\d{3})(?=\d)/g,"$1"+i)+(e?r+Math.abs(t-s).toFixed(e).slice(2):"")},CheckTaiwanID:function(t){if(/^[A-Z]{1}[1-2]{1}[0-9]{8}$/.test(t)){var e="ABCDEFGHIJKLMNOPQRSTUVWXYZ".indexOf(t.charAt(0)),r=["10","11","12","13","14","15","16","17","34","18","19","20","21","22","35","23","24","25","26","27","28","29","32","30","31","33"][e]+t.substr(1,9),i=1*r.charAt(0);for(e=1;e<=9;e++)i+=r.charAt(e)*(10-e);return(i+=1*r.charAt(10))%10==0}return!1},getAstro:function(t,e){return"魔羯水瓶雙魚牡羊金牛雙子巨蟹獅子處女天秤天蠍射手魔羯".substr(2*t-2*(e<"102223444433".charAt(t-1)- -19),2)},FormatNumberLength:function(t,e){for(var r=""+t;r.length<e;)r="0"+r;return r}}},45:function(t,e){t.exports=function(t){var e=[];return e.toString=function(){return this.map(function(e){var r=function(t,e){var r=t[1]||"",i=t[3];if(!i)return r;if(e&&"function"==typeof btoa){var a=(n=i,"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(n))))+" */"),s=i.sources.map(function(t){return"/*# sourceURL="+i.sourceRoot+t+" */"});return[r].concat(s).concat([a]).join("\n")}var n;return[r].join("\n")}(e,t);return e[2]?"@media "+e[2]+"{"+r+"}":r}).join("")},e.i=function(t,r){"string"==typeof t&&(t=[[null,t,""]]);for(var i={},a=0;a<this.length;a++){var s=this[a][0];"number"==typeof s&&(i[s]=!0)}for(a=0;a<t.length;a++){var n=t[a];"number"==typeof n[0]&&i[n[0]]||(r&&!n[2]?n[2]=r:r&&(n[2]="("+n[2]+") and ("+r+")"),e.push(n))}},e}},590:function(t,e,r){t.exports=r(591)},591:function(t,e,r){Vue.component("product-filter",r(592));new Vue({el:"#product-filter"})},592:function(t,e,r){var i=r(13)(r(595),r(596),!1,function(t){r(593)},null,null);t.exports=i.exports},593:function(t,e,r){var i=r(594);"string"==typeof i&&(i=[[t.i,i,""]]),i.locals&&(t.exports=i.locals);r(139)("23b222eb",i,!0,{})},594:function(t,e,r){(t.exports=r(45)(!1)).push([t.i,'.loading-mask{position:fixed;top:0;left:0;right:0;bottom:0;background:hsla(0,0%,100%,.3);z-index:100}.loading-mask .loading-spinner{position:absolute;top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%);width:50px}.learnmore{position:relative}.learnmore.loading:before{position:absolute;width:20px;height:20px;left:-25px;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);background-image:url("/img/loading-spinner.svg");background-size:cover;content:""}.searchBar{padding:5px 10px;width:175px;margin:0 auto;border:1px solid gray;color:gray;border-radius:12px;font-family:Microsoft JhengHei}.searchBar .cearch-icon input{font-family:Microsoft JhengHei;color:#333;outline:none}',""])},595:function(t,e,r){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=r(272).default;e.default={mounted:function(){console.log("Component mounted.")},props:["type"],data:function(){var t=void 0,e=new Object,r=new Object;switch(this.type){case"R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V":t="tag",e={brand:null,size:null,trip:null,price:null,material:null},r={brand:null,size:null,trip:null,price:null,material:null};break;case"3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe":t="bag_tag",e={brand:null,type:null,price:null},r={brand:null,type:null,price:null};break;case"yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd":t="fitting_tag",e={categories:null},r={categories:null}}return{keyword:null,isSearch:!1,tagType:t,isLoading:!1,isLoadingLearnMore:!1,order:"desc",isLoaded:!1,tagGroup:e,filterGroup:r,pageData:{}}},watch:{filterGroup:{handler:function(t,e){this.getData()},deep:!0},order:function(t){this.getData()}},created:function(){this.getTag()},computed:{brandTitle:function(){switch(this.type){case"R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V":return"品牌旅行箱";case"yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd":return"旅行配件";case"3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe":return"品牌背包";default:return""}}},methods:{getTag:function(){var t=this;axios.get("/admin/tag/get/"+this.tagType).then(function(e){Object.keys(e.data).forEach(function(r){t.tagGroup[r]=e.data[r]}),t.$nextTick(function(){t.getData()})})},getData:function(){var t=this,e=new Object;e=this.isSearch?{tag:this.filterGroup,category:this.type,order:this.order,keyword:this.keyword}:{tag:this.filterGroup,category:this.type,order:this.order},this.isLoading=!0,axios.post("/products/tag",e).then(function(e){t.pageData=e.data,t.isLoaded=!0,t.scrollMore(),t.getFavorite()}).catch(function(t){}).then(function(){t.isLoading=!1})},addSigleProduct:function(t){function e(e){return t.apply(this,arguments)}return e.toString=function(){return t.toString()},e}(function(t){addSigleProduct(t)}),learnMoreAction:function(){var t=this,e={tag:this.filterGroup,category:this.type};this.isLoading=!0,this.isLoadingLearnMore=!0,axios.post(this.pageData.next_page_url,e).then(function(e){t.pageData.next_page_url=e.data.next_page_url,t.pageData.current_page=e.data.current_page,t.pageData.data=_.concat(t.pageData.data,e.data.data),t.$nextTick(function(){t.pageData.data.forEach(function(t){"variable"==t.productType&&console.log(t)})})}).catch(function(t){}).then(function(){t.isLoading=!1,t.isLoadingLearnMore=!1})},clearFilter:function(){switch(this.isSearch=!1,this.type){case"R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V":this.filterGroup={brand:null,size:null,trip:null,price:null,material:null};break;case"3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe":this.filterGroup={brand:null,type:null,price:null};break;case"yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd":this.filterGroup={categories:null}}},addFavorite:function(t){function e(e){return t.apply(this,arguments)}return e.toString=function(){return t.toString()},e}(function(t){var e=event.target,r=e.tagName;("IMG"==r?$(e).parent(".productHeart").hasClass("productHeart-active"):$(e).hasClass("productHeart-active"))?deleteFavorite(t,function(){$(".productHeart[data-id="+t+"]").removeClass("productHeart-active")}):(addFavorite(t),this.getFavorite(r,e))}),getFavorite:function(t,e){var r=this;axios.get("/favorite/get").then(function(i){var a=i.data.length;r.isFavorited(i.data),a?$(".wish-icon .count").text(a):$(".wish-icon .count").text(""),"IMG"==t?$(e).parent(".productHeart").addClass("productHeart-active"):$(e).addClass("productHeart-active")})},menuStyle:function(t){$(".sub-page-header .sub-page-header-inner .sub-nav-menu .sub-nav-menu-ul li:nth-child(2) a").css("opacity","1"),$(".mega-menu .product .mega-menu-list ul li:nth-child("+t+") a").css("border","solid 1px #B3B3B3")},scrollMore:function(){var t=this,e=void 0;$(document).scroll(function(){window.clearTimeout(e),e=window.setTimeout(function(){var e=$(document).height();$(document).scrollTop()+$(".sub-page-footer").height()/2+window.innerHeight>e&&t.learnMoreAction()},100)})},searchProduct:function(t){this.isSearch=!0,this.getData()},numberFormat:function(t,e,r,a){return i.number_format(t,e,r,a)},isFavorited:function(t){t.forEach(function(t,e){$('.productHeart[data-id="'+t.productGuid+'"]').addClass("productHeart-active")})}}}},596:function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("section",[r("img",{staticStyle:{display:"none"},attrs:{src:"/img/loading-spinner.svg",alt:""}}),t._v(" "),t.isLoading?r("div",{staticClass:"loading-mask"},[r("img",{staticClass:"loading-spinner",attrs:{src:"/img/loading-spinner.svg",alt:""}})]):t._e(),t._v(" "),r("div",{staticClass:"container filter-area"},[r("div",{staticClass:"row filter"},[r("div",{staticClass:"col-md-12 filter-title"},[r("h1",{attrs:{id:"thisTitle"}},[t._v(t._s(t.brandTitle))]),t._v(" "),r("div",{staticClass:"filter-title-hr"}),t._v(" "),r("p",{staticClass:"filter-subTitle",staticStyle:{"margin-top":"50px"}},[t._v("這裡總有一款屬於你的冒險")]),t._v(" "),r("div",{staticClass:"searchBar"},[r("form",{on:{submit:function(e){return e.preventDefault(),t.searchProduct(e)}}},[r("i",{staticClass:"fa fa-search lg cearch-icon",attrs:{"aria-hidden":"true"}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.keyword,expression:"keyword"}],staticStyle:{"padding-left":"10px",border:"none",width:"90%"},attrs:{type:"text",placeholder:"輸入要尋找的商品"},domProps:{value:t.keyword},on:{input:function(e){e.target.composing||(t.keyword=e.target.value)}}})])])])])]),t._v(" "),"R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V"==t.type?r("div",{staticClass:"row filter",staticStyle:{"margin-top":"80px","margin-bottom":"80px"}},[r("div",{staticClass:"col-md-12 filter-filtering"},[r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(0),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.brand,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.brand,expression:"filterGroup.brand"}],attrs:{name:"brand",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.brand,e)},on:{change:function(r){t.$set(t.filterGroup,"brand",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(1),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.size,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.size,expression:"filterGroup.size"}],attrs:{name:"size",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.size,e)},on:{change:function(r){t.$set(t.filterGroup,"size",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(2),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.trip,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.trip,expression:"filterGroup.trip"}],attrs:{name:"trip",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.trip,e)},on:{change:function(r){t.$set(t.filterGroup,"trip",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])])]),t._v(" "),r("div",{staticClass:"col-md-12 filter-filtering"},[r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(3),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.price,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.price,expression:"filterGroup.price"}],attrs:{name:"price",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.price,e)},on:{change:function(r){t.$set(t.filterGroup,"price",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(4),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.material,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.material,expression:"filterGroup.material"}],attrs:{name:"material",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.material,e)},on:{change:function(r){t.$set(t.filterGroup,"material",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("button",{staticClass:"filter-remakeBtn",on:{click:function(e){t.clearFilter()}}},[r("img",{staticClass:"filter-remakeBtnImg",attrs:{src:"/img/remakeIcon.svg",alt:""}}),t._v("\n                    重製選取條件\n                ")]),t._v(" "),r("div",{staticClass:"col-md-4"})])]):t._e(),t._v(" "),"3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe"==t.type?r("div",{staticClass:"row filter",staticStyle:{"margin-top":"80px","margin-bottom":"80px"}},[r("div",{staticClass:"col-md-12 filter-filtering"},[r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(5),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.brand,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.brand,expression:"filterGroup.brand"}],attrs:{name:"brand",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.brand,e)},on:{change:function(r){t.$set(t.filterGroup,"brand",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(6),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.type,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.type,expression:"filterGroup.type"}],attrs:{name:"type",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.type,e)},on:{change:function(r){t.$set(t.filterGroup,"type",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])]),t._v(" "),r("div",{staticClass:"col-md-4"},[r("div",{staticClass:"filter-filters"},[t._m(7),t._v(" "),r("hr"),t._v(" "),r("form",{staticClass:"filters-selects"},[r("div",{staticClass:"filters-selects-div"},t._l(t.tagGroup.price,function(e,i){return r("label",{key:i,attrs:{for:e}},[r("input",{directives:[{name:"model",rawName:"v-model",value:t.filterGroup.price,expression:"filterGroup.price"}],attrs:{name:"price",id:e,type:"radio"},domProps:{value:e,checked:t._q(t.filterGroup.price,e)},on:{change:function(r){t.$set(t.filterGroup,"price",e)}}}),t._v(t._s(e)+"\n                                ")])}))])])])]),t._v(" "),r("div",{staticClass:"col-md-12 filter-filtering"},[r("button",{staticClass:"filter-remakeBtn",on:{click:function(e){t.clearFilter()}}},[r("img",{staticClass:"filter-remakeBtnImg",attrs:{src:"/img/remakeIcon.svg",alt:""}}),t._v("\n                    重製選取條件\n                ")]),t._v(" "),r("div",{staticClass:"col-md-4"})])]):t._e(),t._v(" "),"yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd"==t.type?r("div",{staticClass:"row filter",staticStyle:{"margin-top":"80px","margin-bottom":"80px"}},[r("div",{staticClass:"col-md-12 blog-filter-inner"},[r("a",{class:{active:null==t.filterGroup.categories},on:{click:function(e){t.filterGroup.categories=null}}},[t._v("全部商品")]),t._v(" "),t._l(t.tagGroup.categories,function(e,i){return r("a",{key:i,class:{active:t.filterGroup.categories==e},on:{click:function(r){t.filterGroup.categories=e}}},[t._v("\n                    "+t._s(e)+"\n                ")])})],2)]):t._e()]),t._v(" "),r("div",{staticClass:"container container-productCount",staticStyle:{position:"relative"}},[r("div",{staticClass:"row"},[r("div",{staticClass:"col-md-12 productCount"},[r("div",{staticClass:"productCount-left"},[r("div",{staticClass:"productCount-sort"},[r("span",{class:{active:"desc"==t.order},on:{click:function(e){t.order="desc"}}},[t._v("價格由高到低排列 ↓")]),t._v(" "),r("span",{class:{active:"asc"==t.order},on:{click:function(e){t.order="asc"}}},[t._v("價格由低到高排列 ↑")])])]),t._v(" "),t.isLoaded?r("div",{staticClass:"productCount-number"},[r("span",[t._v("顯示總數")]),t._v(" "),r("span",[t._v(t._s(t.pageData.data.length)+"/")]),t._v(" "),r("span",[t._v(t._s(t.pageData.total))])]):t._e()])]),t._v(" "),"yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd"!==t.type?r("button",{staticClass:"collapseBtn"},[t._v("\n            收合\n            "),r("img",{attrs:{src:"/img/collapseIcon.png",alt:""}})]):t._e()]),t._v(" "),r("div",{staticClass:"container-fulid filter-product-out"},[r("div",{staticClass:"row filter-product"},[r("div",{staticClass:"filter-product-row"},t._l(t.pageData.data,function(e,i){return r("div",{key:i,staticClass:"col-md-6"},[r("div",{staticClass:"product-inner"},[r("div",{staticClass:"product-img",style:"background-image: url('"+e.featureImage+"');"},[r("a",{attrs:{href:"/detail/"+e.productGuid}},[r("div",{staticClass:"product-img-mask"}),t._v(" "),r("p",[t._v("查看商品")])])]),t._v(" "),r("div",{staticClass:"product-innertext"},[r("div",{staticClass:"product-title"},[r("p",[t._v(t._s(e.productTitle))])]),t._v(" "),r("div",{staticClass:"product-style"},[r("div",{staticClass:"style-inner",domProps:{innerHTML:t._s(e.shortDescription)}}),t._v(" "),"simple"==e.productType?r("p",{staticClass:"product-price"},[t._v("$ "+t._s(t.numberFormat(e.price,0,".",",")))]):r("p",[t._v("多規格商品")])]),t._v(" "),r("div",{staticClass:"productHeart",attrs:{"data-id":e.productGuid},on:{click:function(r){t.addFavorite(e.productGuid)}}},[r("img",{attrs:{src:"/img/productHeart.svg",alt:""}})]),t._v(" "),"simple"==e.productType?r("button",{staticClass:"buyIt",on:{click:function(r){t.addSigleProduct(e.productGuid)}}},[r("img",{attrs:{src:"/img/cartIconWhite.svg",alt:""}}),t._v(" "),r("p",[t._v("加入購物車")])]):r("a",{staticClass:"buyIt",attrs:{href:"/detail/"+e.productGuid}},[t._v("\n                                選擇規格\n                            ")])])])])}))])])])},staticRenderFns:[function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("品牌 Brand")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("尺寸 Size")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("旅程 Trip")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("價格 Price")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("材質 Material")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("品牌 Brand")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("類型 Types")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"filters-title"},[e("p",[this._v("價格 Price")])])}]}}});
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
/******/ 	return __webpack_require__(__webpack_require__.s = 612);
/******/ })
/************************************************************************/
/******/ ({

/***/ 163:
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

var listToStyles = __webpack_require__(164)

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

/***/ 164:
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


/***/ }),

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
var normalizeComponent = __webpack_require__(8)
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
var update = __webpack_require__(163)("51fa9ddc", content, false, {});
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
exports.push([module.i, "\n.loading-mask {\n  position: fixed;\n  top: 0;\n  left: 0;\n  right: 0;\n  bottom: 0;\n  background: rgba(255, 255, 255, 0.3);\n  z-index: 100;\n}\n.loading-mask .loading-spinner {\n    position: absolute;\n    top: 50%;\n    left: 50%;\n    -webkit-transform: translate(-50%, -50%);\n            transform: translate(-50%, -50%);\n    width: 50px;\n}\n.learnmore {\n  position: relative;\n}\n.learnmore.loading::before {\n    position: absolute;\n    width: 20px;\n    height: 20px;\n    left: -25px;\n    top: 50%;\n    -webkit-transform: translateY(-50%);\n            transform: translateY(-50%);\n    background-image: url(\"/img/loading-spinner.svg\");\n    background-size: cover;\n    content: \"\";\n}\n.searchBar {\n  padding: 5px 10px;\n  width: 175px;\n  margin: 0 auto;\n  border: solid 1px #808080;\n  color: #808080;\n  border-radius: 12px;\n  font-family: Microsoft JhengHei;\n}\n.searchBar .cearch-icon input {\n    font-family: Microsoft JhengHei;\n    color: #333;\n    outline: none;\n}\n", ""]);

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

var h = __webpack_require__(296).default;
/* harmony default export */ __webpack_exports__["default"] = ({
    mounted: function mounted() {
        console.log('Component mounted.');
    },

    props: ['type'],
    data: function data() {
        var tagType = void 0,
            tagGroup = new Object(),
            filterGroup = new Object();

        switch (this.type) {
            case 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V':
                tagType = 'tag';
                tagGroup = {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                };
                filterGroup = {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                };
                break;
            case '3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe':
                tagType = 'bag_tag';
                tagGroup = {
                    brand: null,
                    type: null,
                    price: null
                };
                filterGroup = {
                    brand: null,
                    type: null,
                    price: null
                };
                break;
            case 'yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd':
                tagType = 'fitting_tag';
                tagGroup = {
                    categories: null
                };
                filterGroup = {
                    categories: null
                };
                break;
            default:
                break;
        }
        return {
            keyword: null,
            isSearch: false,
            tagType: tagType,
            isLoading: false,
            isLoadingLearnMore: false,
            order: 'desc',
            isLoaded: false,
            tagGroup: tagGroup,
            filterGroup: filterGroup,
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

    computed: {
        brandTitle: function brandTitle() {
            switch (this.type) {
                case 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V':
                    return '品牌旅行箱';
                    break;
                case 'yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd':
                    return '旅行配件';
                    break;
                case '3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe':
                    return '品牌背包';
                    break;
                default:
                    return '';
            }
        }
    },
    methods: {
        getTag: function getTag() {
            var _this = this;

            axios.get('/admin/tag/get/' + this.tagType).then(function (res) {
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

            var vo = new Object();

            if (this.isSearch) {
                vo = {
                    tag: this.filterGroup,
                    category: this.type,
                    order: this.order,
                    keyword: this.keyword
                };
            } else {
                vo = {
                    tag: this.filterGroup,
                    category: this.type,
                    order: this.order
                };
            }

            this.isLoading = true;

            axios.post('/products/tag', vo).then(function (res) {
                _this2.pageData = res.data;
                _this2.isLoaded = true;
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
            this.isSearch = false;
            switch (this.type) {
                case 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V':
                    this.filterGroup = {
                        brand: null,
                        size: null,
                        trip: null,
                        price: null,
                        material: null
                    };
                    break;
                case '3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe':
                    this.filterGroup = {
                        brand: null,
                        type: null,
                        price: null
                    };
                    break;
                case 'yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd':
                    this.filterGroup = {
                        categories: null
                    };
                    break;
                default:
                    break;
            }
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
            var self = this;
            var target = event.target;
            var tagName = target.tagName;
            var isActive = false;
            if (tagName == 'IMG') {
                isActive = $(target).parent('.productHeart').hasClass('productHeart-active');
            } else {
                isActive = $(target).hasClass('productHeart-active');
            }
            setTimeout(function () {
                if (isActive) {
                    deleteFavorite(guid, function () {
                        $('.productHeart[data-id=' + guid + ']').removeClass('productHeart-active');
                    });
                } else {
                    addFavorite(guid);
                    self.getFavorite(tagName, target);
                }
            }, 0);
        }),
        getFavorite: function getFavorite(tagName, target) {
            var self = this;
            axios.get('/favorite/get').then(function (res) {
                var wishCount = res.data.length;
                self.isFavorited(res.data);
                console.log(res);
                if (wishCount) {
                    $('.wish-icon .count').text(wishCount);
                } else {
                    $('.wish-icon .count').text('');
                }
                if (tagName == 'IMG') {
                    $(target).parent('.productHeart').addClass('productHeart-active');
                } else {
                    $(target).addClass('productHeart-active');
                }
            });
        },
        menuStyle: function menuStyle(val) {
            $('.sub-page-header .sub-page-header-inner .sub-nav-menu .sub-nav-menu-ul li:nth-child(2) a').css('opacity', '1');
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
        searchProduct: function searchProduct(e) {
            this.isSearch = true;
            this.getData();
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
      _c("div", { staticClass: "row filter" }, [
        _c("div", { staticClass: "col-md-12 filter-title" }, [
          _c("h1", { attrs: { id: "thisTitle" } }, [
            _vm._v(_vm._s(_vm.brandTitle))
          ]),
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
              "form",
              {
                on: {
                  submit: function($event) {
                    $event.preventDefault()
                    return _vm.searchProduct($event)
                  }
                }
              },
              [
                _c(
                  "i",
                  {
                    staticClass: "fa fa-search lg cearch-icon",
                    attrs: { "aria-hidden": "true" }
                  },
                  [
                    _c("input", {
                      directives: [
                        {
                          name: "model",
                          rawName: "v-model",
                          value: _vm.keyword,
                          expression: "keyword"
                        }
                      ],
                      staticStyle: {
                        "padding-left": "10px",
                        border: "none",
                        width: "90%"
                      },
                      attrs: { type: "text", placeholder: "輸入要尋找的商品" },
                      domProps: { value: _vm.keyword },
                      on: {
                        input: function($event) {
                          if ($event.target.composing) {
                            return
                          }
                          _vm.keyword = $event.target.value
                        }
                      }
                    })
                  ]
                )
              ]
            )
          ])
        ])
      ]),
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
                    _vm._m(0),
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
                    _vm._m(1),
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
                    _vm._m(2),
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
                    _vm._m(3),
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
                    _vm._m(4),
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
                    _vm._m(5),
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
                    _vm._m(6),
                    _vm._v(" "),
                    _c("hr"),
                    _vm._v(" "),
                    _c("form", { staticClass: "filters-selects" }, [
                      _c(
                        "div",
                        { staticClass: "filters-selects-div" },
                        _vm._l(_vm.tagGroup.type, function(item, index) {
                          return _c(
                            "label",
                            { key: index, attrs: { for: item } },
                            [
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.filterGroup.type,
                                    expression: "filterGroup.type"
                                  }
                                ],
                                attrs: {
                                  name: "type",
                                  id: item,
                                  type: "radio"
                                },
                                domProps: {
                                  value: item,
                                  checked: _vm._q(_vm.filterGroup.type, item)
                                },
                                on: {
                                  change: function($event) {
                                    _vm.$set(_vm.filterGroup, "type", item)
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
                    _vm._m(7),
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
            [
              _c(
                "div",
                { staticClass: "col-md-12 blog-filter-inner" },
                [
                  _c(
                    "a",
                    {
                      class: { active: _vm.filterGroup.categories == null },
                      on: {
                        click: function($event) {
                          _vm.filterGroup.categories = null
                        }
                      }
                    },
                    [_vm._v("全部商品")]
                  ),
                  _vm._v(" "),
                  _vm._l(_vm.tagGroup.categories, function(item, index) {
                    return _c(
                      "a",
                      {
                        key: index,
                        class: { active: _vm.filterGroup.categories == item },
                        on: {
                          click: function($event) {
                            _vm.filterGroup.categories = item
                          }
                        }
                      },
                      [
                        _vm._v(
                          "\n                    " +
                            _vm._s(item) +
                            "\n                "
                        )
                      ]
                    )
                  })
                ],
                2
              )
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
        _vm.type !== "yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd"
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
    return _c("div", { staticClass: "filters-title" }, [
      _c("p", [_vm._v("類型 Types")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "filters-title" }, [
      _c("p", [_vm._v("價格 Price")])
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

/***/ 8:
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


/***/ })

/******/ });
>>>>>>> 75c0548c7b0ec7ba5e04b97494c60e9767a36b21
