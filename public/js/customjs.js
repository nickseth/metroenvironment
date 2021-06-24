/*! js-cookie v3.0.0-rc.1 | MIT */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self,function(){var n=e.Cookies,r=e.Cookies=t();r.noConflict=function(){return e.Cookies=n,r}}())}(this,function(){"use strict";function e(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)e[r]=n[r]}return e}var t={read:function(e){return e.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent)},write:function(e){return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,decodeURIComponent)}};return function n(r,o){function i(t,n,i){if("undefined"!=typeof document){"number"==typeof(i=e({},o,i)).expires&&(i.expires=new Date(Date.now()+864e5*i.expires)),i.expires&&(i.expires=i.expires.toUTCString()),t=encodeURIComponent(t).replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent).replace(/[()]/g,escape),n=r.write(n,t);var c="";for(var u in i)i[u]&&(c+="; "+u,!0!==i[u]&&(c+="="+i[u].split(";")[0]));return document.cookie=t+"="+n+c}}return Object.create({set:i,get:function(e){if("undefined"!=typeof document&&(!arguments.length||e)){for(var n=document.cookie?document.cookie.split("; "):[],o={},i=0;i<n.length;i++){var c=n[i].split("="),u=c.slice(1).join("=");'"'===u[0]&&(u=u.slice(1,-1));try{var f=t.read(c[0]);if(o[f]=r.read(u,f),e===f)break}catch(e){}}return e?o[e]:o}},remove:function(t,n){i(t,"",e({},n,{expires:-1}))},withAttributes:function(t){return n(this.converter,e({},this.attributes,t))},withConverter:function(t){return n(e({},this.converter,t),this.attributes)}},{attributes:{value:Object.freeze(o)},converter:{value:Object.freeze(r)}})}(t,{path:"/"})});
/*! roundSlider v1.6.1 | (c) 2015-2020, Soundar | MIT license | http://roundsliderui.com/licence.html */
!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof exports?t(require("jquery")):t(jQuery)}(function(p){"use strict";var o="roundSlider";function r(t,e){this.id=t.id,this.control=p(t),this.options=p.extend({},this.defaults,e)}p.fn[o]=function(t){return function(t,e){for(var i=0;i<this.length;i++){var s=this[i],a=p.data(s,o);if(a){if(p.isPlainObject(t))"function"==typeof a.option?a.option(t):s.id&&window[s.id]&&"function"==typeof window[s.id].option&&window[s.id].option(t);else if("string"==typeof t&&"function"==typeof a[t]){if(("option"===t||0===t.indexOf("get"))&&void 0===e[2])return a[t](e[1]);a[t](e[1],e[2])}}else{var n=new r(s,t);n._saveInstanceOnElement(),n._saveInstanceOnID(),!1!==n._raise("beforeCreate")?(n._init(),n._raise("create")):n._removeData()}}return this}.call(this,t,arguments)},r.prototype={pluginName:o,version:"1.6.1",options:{},control:null,defaults:{min:0,max:100,step:1,value:null,radius:85,width:18,handleSize:"+0",startAngle:0,endAngle:"+360",animation:!0,showTooltip:!0,editableTooltip:!0,readOnly:!1,disabled:!1,keyboardAction:!0,mouseScrollAction:!1,lineCap:"butt",sliderType:"default",circleShape:"full",handleShape:"round",startValue:null,svgMode:!1,borderWidth:1,borderColor:null,pathColor:null,rangeColor:null,tooltipColor:null,beforeCreate:null,create:null,start:null,beforeValueChange:null,drag:null,change:null,update:null,valueChange:null,stop:null,tooltipFormat:null},keys:{UP:38,DOWN:40,LEFT:37,RIGHT:39},_props:function(){return{numberType:["min","max","step","radius","width","borderWidth","startAngle","startValue"],booleanType:["animation","showTooltip","editableTooltip","readOnly","disabled","keyboardAction","mouseScrollAction","svgMode"],stringType:["sliderType","circleShape","handleShape","lineCap"]}},_init:function(){var t,e=this.options;e.svgMode&&(t=function(){},this._appendSeperator=t,this._refreshSeperator=t,this._updateSeperator=t,this._appendOverlay=t,this._checkOverlay=t,this._updateWidth=t),this.control.is("input")&&(this._isInputType=!0,this._hiddenField=this.control,this.control=this.$createElement("div"),this.control.insertAfter(this._hiddenField),e.value=this._hiddenField.val()||e.value),this._isBrowserSupported()&&this._onInit()},_onInit:function(){this._initialize(),this._update(),this._render()},_initialize:function(){var t=this.browserName=this.getBrowserName();t&&this.control.addClass("rs-"+t),this._isReadOnly=!1,this._checkDataType(),this._refreshCircleShape()},_render:function(){this.container=this.$createElement("div.rs-container"),this.innerContainer=this.$createElement("div.rs-inner-container"),this.container.append(this.innerContainer);var t="rs-control "+(this.options.svgMode?"rs-svg-mode":"rs-classic-mode");this.control.addClass(t).empty().append(this.container),this._createLayers(),this._createOtherLayers(),this._setContainerClass(),this._setRadius(),this._setProperties(),this._setValue(),this._updateTooltipPos(),this._bindControlEvents("_bind"),this._raiseValueChange("create"),this._updatePre()},_update:function(){this._validateSliderType(),this._updateStartEnd(),this._validateStartEnd(),this._handle1=this._handle2=this._handleDefaults(),this._analyzeModelValue(),this._validateModelValue()},_createLayers:function(){var t=this.options;if(t.svgMode)return this._createSVGElements(),this._setSVGAttributes(),this._setSVGStyles(),void this._moveSliderRange(!0);this.block=this.$createElement("div.rs-block rs-outer rs-border"),this.innerContainer.append(this.block);var e=t.width,i=this._start,s=this.$createElement("div.rs-path rs-transition");this._showRange?(this.block1=s.clone().addClass("rs-range-color").rsRotate(i),this.block2=s.clone().addClass("rs-range-color").css("opacity","0").rsRotate(i),this.block3=s.clone().addClass("rs-path-color").rsRotate(i),this.block4=s.addClass("rs-path-color").css({opacity:"1","z-index":"1"}).rsRotate(i-180),this.block.append(this.block1,this.block2,this.block3,this.block4).addClass("rs-split")):this.block.append(s.addClass("rs-path-color")),this.lastBlock=this.$createElement("span.rs-block").css({padding:e}),this.innerBlock=this.$createElement("div.rs-inner rs-bg-color rs-border"),this.lastBlock.append(this.innerBlock),this.block.append(this.lastBlock)},_createOtherLayers:function(){this._appendHandle(),this._appendSeperator(),this._appendOverlay(),this._appendHiddenField()},_setProperties:function(){var t=this.options;this._setHandleShape(),this._addAnimation(),this._appendTooltip(),t.showTooltip||this._removeTooltip(),t.disabled?this.disable():t.readOnly&&this._readOnly(!0),t.mouseScrollAction&&this._bindScrollEvents("_bind")},_updatePre:function(){this._prechange=this._predrag=this._pre_bvc=this._preValue=this.options.value},_backupPreValue:function(){this._pre_handle1=this._handle1,this._pre_handle2=this._handle2},_revertPreValue:function(){this._handle1=this._pre_handle1,this._handle2=this._pre_handle2,this._updateModelValue()},_setValue:function(){var t;this._rangeSlider?(this._setHandleValue(1),this._setHandleValue(2)):(this._minRange&&!this.options.svgMode&&this._setHandleValue(1),t=this._minRange?2:this._active||1,this._setHandleValue(t))},_appendTooltip:function(){var t;0===this.container.children(".rs-tooltip").length&&(t=this.tooltip=this.$createElement("span.rs-tooltip rs-tooltip-text"),this.container.append(t),this._setTooltipColor(t),this._tooltipEditable(),this._updateTooltip())},_removeTooltip:function(){0!=this.container.children(".rs-tooltip").length&&this.tooltip&&this.tooltip.remove()},_setTooltipColor:function(t){var e=this.options,i=e.tooltipColor,s="inherit"!==i?i:e.rangeColor;t&&null!=s&&t.css("color",s)},_tooltipEditable:function(){var t=this.options,e=this.tooltip;e&&t.showTooltip&&this[t.editableTooltip?(e.addClass("rs-edit"),"_bind"):(e.removeClass("rs-edit"),"_unbind")](e,"click",this._editTooltip)},_editTooltip:function(t){var e,i,s=this.tooltip;s.hasClass("rs-edit")&&!this._isReadOnly&&(e=2*parseFloat(s.css("border-left-width")),i=this.input=this.$createElement("input.rs-input rs-tooltip-text").css({height:s.outerHeight()-e,width:s.outerWidth()-e}),this._setTooltipColor(i),s.html(i).removeClass("rs-edit").addClass("rs-hover"),i.focus().val(this._getTooltipValue(!0)),this._bind(i,"blur change",this._focusOut))},_focusOut:function(t){var e;"change"==t.type?(","==(e=this.input.val().replace("-",","))[0]&&(e="-"+e.slice(1).replace("-",",")),this.options.value=e,this._validateValue(!0)&&(this.input.val(this._getTooltipValue(!0)),this._raiseEvent("change"))):(delete this.input,this.tooltip.addClass("rs-edit").removeClass("rs-hover"),this._updateTooltip())},_setHandleShape:function(){var t=this.options,e=t.handleShape,i=this._handles();i.removeClass("rs-handle-dot rs-handle-square"),"dot"==e?i.addClass("rs-handle-dot"):"square"==e?i.addClass("rs-handle-square"):t.handleShape="round"},_setHandleValue:function(t){this._active=t;var e=this["_handle"+t];this._minRange||(this.bar=this._activeHandleBar()),this._changeSliderValue(e.value,e.angle)},_addAnimation:function(){this.options.animation&&this.control.addClass("rs-animation")},_removeAnimation:function(){this.control.removeClass("rs-animation")},_setContainerClass:function(){var t=this.options.circleShape;"full"==t||"pie"==t||0===t.indexOf("custom")?this.container.addClass("rs-full rs-"+t):this.container.addClass("rs-"+t.split("-").join(" rs-"))},_setRadius:function(){var t,e,i,s=this.options,a=s.radius,n=2*a,r=s.circleShape,o=0,h=t=n,l=e=n,d="full"==r||"pie"==r||0===r.indexOf("custom");if(s.svgMode&&!d&&(i=this._handleBars(),"none"!=s.lineCap?(o="butt"===s.lineCap?s.borderWidth/2:s.width/2+s.borderWidth,-1!=r.indexOf("bottom")&&i.css("margin-top",o+"px"),-1!=r.indexOf("right")&&i.css("margin-right",-o+"px")):p.each(i,function(t,e){e.style.removeProperty("margin-top"),e.style.removeProperty("margin-right")})),0===r.indexOf("half"))switch(r){case"half-top":case"half-bottom":t=(h=a)+o;break;case"half-left":case"half-right":e=(l=a)+o}else 0===r.indexOf("quarter")&&(t=e=(h=l=a)+o);this.container.css({height:h,width:l}),this.control.css({height:t,width:e}),0!==o?this.innerContainer.css({height:t,width:e}):this.innerContainer.removeAttr("style"),s.svgMode&&this.svgContainer.height(n).width(n).children("svg").height(n).width(n)},_border:function(t){var e=this.options;return e.svgMode?2*e.borderWidth:t?parseFloat(this._startLine.children().css("border-bottom-width")):2*parseFloat(this.block.css("border-top-width"))},_appendHandle:function(){!this._rangeSlider&&this._minRange||this._createHandle(1),this._showRange&&this._createHandle(2)},_appendSeperator:function(){this._startLine=this._addSeperator(this._start,"rs-start"),this._endLine=this._addSeperator(this._start+this._end,"rs-end"),this._refreshSeperator()},_addSeperator:function(t,e){var i=this.$createElement("span.rs-seperator rs-border"),s=this.$createElement("span.rs-bar rs-transition "+e).append(i).rsRotate(t);return this.container.append(s),s},_refreshSeperator:function(){var t=this._startLine.add(this._endLine),e=t.children().removeAttr("style"),i=this.options,s=i.width+this._border();"round"==i.lineCap&&"full"!=i.circleShape?(t.addClass("rs-rounded"),e.css({width:s,height:s/2+1}),this._startLine.children().css("margin-top",-1).addClass(this._minRange?"rs-range-color":"rs-path-color"),this._endLine.children().css("margin-top",s/-2).addClass("rs-path-color")):(t.removeClass("rs-rounded"),e.css({width:s,"margin-top":this._border(!0)/-2}).removeClass("rs-range-color rs-path-color"))},_updateSeperator:function(){this._startLine.rsRotate(this._start),this._endLine.rsRotate(this._start+this._end)},_createHandle:function(t){var e,i=this.$createElement("div.rs-handle rs-move");"round"!=(e=this.options.handleShape)&&i.addClass("rs-handle-"+e),i.attr({index:t,tabIndex:"0"});var s=this._dataElement()[0].id,a=(s=s?s+"_":"")+"handle";this._rangeSlider&&(a+="_"+(1==t?"start":"end")),i.attr({role:"slider","aria-label":a});var n=this._handleDefaults(),r=this.$createElement("div.rs-bar rs-transition").css("z-index","7").append(i);return r.addClass(this._rangeSlider&&2==t?"rs-second":"rs-first"),r.rsRotate(n.angle),this.container.append(r),this._refreshHandle(),this.bar=r,1!=(this._active=t)&&2!=t&&(this["_handle"+t]=n),this._bind(i,"focus blur",this._handleFocus),i},_refreshHandle:function(){var t,e,i,s=this.options,a=s.handleSize,n=s.width,r=!0,o=this.isNumber;"string"==typeof a&&o(a)&&("+"===a.charAt(0)||"-"===a.charAt(0)?a=n+parseFloat(a):!a.indexOf(",")||o((i=a.split(","))[0])&&o(i[1])&&(e=parseFloat(i[0]),t=parseFloat(i[1]),r=!1)),r&&(t=e=o(a)?parseFloat(a):n);var h=(n+this._border()-e)/2;this._handles().css({height:t,width:e,margin:-t/2+"px 0 0 "+h+"px"})},_defaultValue:function(){var t=this.options,e=t.startValue;return this.isNumber(e)?this._limitValue(e):t.min},_handleDefaults:function(){var t=this._defaultValue();return{angle:this._valueToAngle(t),value:t}},_handleBars:function(){return this.container.children("div.rs-bar")},_handles:function(){return this._handleBars().find(".rs-handle")},_activeHandleBar:function(t){return this._minRange?this.bar:(t=null!=t?t:this._active,p(this._handleBars()[t-1]))},_handleArgs:function(t){var e=this["_handle"+(t=null!=t?t:this._active)]||{};return{element:this._activeHandleBar(t).children(),index:t,isActive:t==this._active,value:e.value,angle:e.angle}},_dataElement:function(){return this._isInputType?this._hiddenField:this.control},_raiseEvent:function(t){var e,i=this["_pre"+t],s=this.options.value;i!==s&&(this["_pre"+t]=s,"change"==t&&(this._predrag=s,this._updateHidden()),this._updateTooltip(),e=this._handleArgs(),this._raise(t,{value:s,preValue:i,handle:e}),s!=this._preValue&&(this._raise("update",{value:s,preValue:i,handle:e,action:t}),this._raiseValueChange(t)))},_raiseBeforeValueChange:function(t,e){void 0!==e?this._rangeSlider&&(e=this._formRangeValue(e)):e=this.options.value;var i="code"!==t;if(e===this._pre_bvc)return!i;var s={value:e,preValue:this._pre_bvc,action:t,isUserAction:i,cancelable:!0},a=0!=this._raise("beforeValueChange",s);return a&&(this._pre_bvc=e),a},_raiseValueChange:function(t){var e=this.options.value,i=[];this._minRange||i.push(this._handleArgs(1)),this._showRange&&i.push(this._handleArgs(2));var s={value:e,preValue:this._preValue,action:t,isUserAction:"code"!==t&&"create"!==t,isInvertedRange:this._isInvertedRange,handles:i};this._raise("valueChange",s),this._preValue=e},_elementDown:function(t){var e,i,s,a,n,r,o,h,l;this._isReadOnly||(p(t.target).hasClass("rs-handle")?this._handleDown(t):(e=this._getXY(t),i=this._getCenterPoint(),s=this._getDistance(e,i),(a=(this.block||this.svgContainer).outerWidth()/2)-(this.options.width+this._border())<=s&&s<=a&&(0!==(n=this.control.find(".rs-handle.rs-focus")).length&&t.preventDefault(),h=(r=this._getAngleValue(e,i)).angle,l=r.value,this._rangeSlider&&(1==n.length?(o=parseFloat(n.attr("index")),this._invertRange||(1==o&&h>this._handle2.angle?o=2:2==o&&h<this._handle1.angle&&(o=1)),this._active=o):this._active=this._handle2.angle-h<h-this._handle1.angle?2:1,this.bar=this._activeHandleBar()),this._raiseBeforeValueChange("change",l)&&(this._changeSliderValue(l,h),this._raiseEvent("change")))))},_handleDown:function(t){t.preventDefault();var e=p(t.target);e.focus(),this._removeAnimation(),this._bindMouseEvents("_bind"),this.bar=e.parent(),this._active=parseFloat(e.attr("index")),this._handles().removeClass("rs-move"),this._raise("start",{value:this.options.value,handle:this._handleArgs()})},_handleMove:function(t){t.preventDefault();var e=this._getXY(t),i=this._getCenterPoint(),s=this._getAngleValue(e,i,!0),a=s.angle,n=s.value;this._raiseBeforeValueChange("drag",n)&&(this._changeSliderValue(n,a),this._raiseEvent("drag"))},_handleUp:function(t){this._handles().addClass("rs-move"),this._bindMouseEvents("_unbind"),this._addAnimation(),this._raiseEvent("change"),this._raise("stop",{value:this.options.value,handle:this._handleArgs()})},_handleFocus:function(t){var e,i;this._isReadOnly||(this._handles().removeClass("rs-focus"),(e=this.options.keyboardAction)&&this._bindKeyboardEvents("_unbind"),"blur"!==t.type&&((i=p(t.target)).addClass("rs-focus"),this.bar=i.parent(),this._active=parseFloat(i.attr("index")),e&&this._bindKeyboardEvents("_bind"),this.control.find("div.rs-bar").css("z-index","7"),this.bar.css("z-index","8")))},_handleKeyDown:function(t){var e,i,s,a=t.keyCode,n=this.keys;27==a&&this._handles().blur(),35<=a&&a<=40&&(37<=a&&a<=40&&this._removeAnimation(),e=this["_handle"+this._active],t.preventDefault(),a==n.UP||a==n.RIGHT?i=this._round(this._limitValue(e.value+this.options.step)):a==n.DOWN||a==n.LEFT?i=this._round(this._limitValue(e.value-this._getMinusStep(e.value))):36==a?i=this._getKeyValue("Home"):35==a&&(i=this._getKeyValue("End")),s=this._valueToAngle(i),this._raiseBeforeValueChange("drag",i)&&(this._changeSliderValue(i,s),this._raiseEvent("drag")))},_handleKeyUp:function(t){this._addAnimation(),this._raiseEvent("change")},_getMinusStep:function(t){var e=this.options,i=e.min,s=e.max,a=e.step;if(t!=s)return a;var n=(s-i)%a;return 0==n?a:n},_getKeyValue:function(t){var e=this.options,i=e.min,s=e.max;return this._rangeSlider?"Home"==t?1==this._active?i:this._handle1.value:1==this._active?this._handle2.value:s:"Home"==t?i:s},_elementScroll:function(t){var e,i,s,a,n;this._isReadOnly||(t.preventDefault(),0!=(n=(e=t.originalEvent||t).wheelDelta?e.wheelDelta/60:e.detail?-e.detail/2:0)&&(this._updateActiveHandle(t),s=(i=this["_handle"+this._active]).value+(0<n?this.options.step:-this._getMinusStep(i.value)),s=this._limitValue(s),a=this._valueToAngle(s),this._raiseBeforeValueChange("change",s)&&(this._removeAnimation(),this._changeSliderValue(s,a),this._raiseEvent("change"),this._addAnimation())))},_updateActiveHandle:function(t){var e=p(t.target);e.hasClass("rs-handle")&&e.parent().parent()[0]==this.control[0]&&(this.bar=e.parent(),this._active=parseFloat(e.attr("index"))),this.bar.find(".rs-handle").hasClass("rs-focus")||this.bar.find(".rs-handle").focus()},_bindControlEvents:function(t){this[t](this.control,"mousedown touchstart",this._elementDown)},_bindScrollEvents:function(t){this[t](this.control,"mousewheel DOMMouseScroll",this._elementScroll)},_bindMouseEvents:function(t){var e=p(document);this[t](e,"mousemove touchmove",this._handleMove),this[t](e,"mouseup mouseleave touchend touchcancel",this._handleUp)},_bindKeyboardEvents:function(t){var e=p(document);this[t](e,"keydown",this._handleKeyDown),this[t](e,"keyup",this._handleKeyUp)},_changeSliderValue:function(t,e){var i=this._oriAngle(e),s=this._limitAngle(e),a=this._active,n=this.options;if(this._showRange){var r=1==a&&i<=this._oriAngle(this._handle2.angle)||2==a&&i>=this._oriAngle(this._handle1.angle),o=this._invertRange;if(this._minRange||r||o){if(this["_handle"+a]={angle:e,value:t},n.value=this._rangeSlider?this._handle1.value+","+this._handle2.value:t,this.bar.rsRotate(s),this._updateARIA(t),n.svgMode)return void this._moveSliderRange();var h=this._oriAngle(this._handle2.angle)-this._oriAngle(this._handle1.angle),l="1",d="0";h<=180&&!(h<0&&-180<h)&&(l="0",d="1"),this.block2.css("opacity",l),this.block3.css("opacity",d),(1==a?this.block4:this.block2).rsRotate(s-180),(1==a?this.block1:this.block3).rsRotate(s)}}else this["_handle"+a]={angle:e,value:t},n.value=t,this.bar.rsRotate(s),this._updateARIA(t)},_createSVGElements:function(){var t=this.$createSVG("svg"),e="path.rs-transition ",i={fill:"transparent"};this.$path=this.$createSVG(e+"rs-path",i),this.$range=this._showRange?this.$createSVG(e+"rs-range",i):null,this.$border=this.$createSVG(e+"rs-border",i),this.$append(t,[this.$path,this.$range,this.$border]),this.svgContainer=this.$createElement("div.rs-svg-container").append(t).appendTo(this.innerContainer)},_setSVGAttributes:function(){var t=this.options,e=t.radius,i=t.borderWidth,s=t.width,a=t.lineCap,n=e-i/2,r=n-s-i,o=this._start,h=this._end,l=o+h,d=this.$drawPath(e,n,o,l,r,a);this.$setAttribute(this.$border,{d:d}),p(this.$border).css("stroke-width",i);var u=e-i-s/2;this.svgPathLength=this.$getArcLength(u,h);var _={d:this.$drawPath(e,u,o,l),"stroke-width":s,"stroke-linecap":a};this.$setAttribute(this.$path,_),this._showRange&&(this.$setAttribute(this.$range,_),"round"==a||"square"==a?this.$range.setAttribute("stroke-dashoffset","0.01"):this.$range.removeAttribute("stroke-dashoffset"))},_setSVGStyles:function(){var t=this.options,e=t.borderColor,i=t.pathColor,s=t.rangeColor;e&&("inherit"==e&&(e=s),p(this.$border).css("stroke",e)),i&&(this.svgContainer["inherit"==i?"addClass":"removeClass"]("rs-path-inherited"),"inherit"==i&&(i=s),p(this.$path).css("stroke",i)),this._showRange&&s&&p(this.$range).css("stroke",s)},_moveSliderRange:function(t){var e,i,s,a,n,r,o,h,l;this._showRange&&(e=this._start,i=this._end,r=this._handle1.angle,o=this._handle2.angle,t&&(r=o=this._handleDefaults().angle),s=[],a=(r-=e)<=(o-=e),this._isInvertedRange=!a,a?s.push(0):(this._minRange&&s.push(0),n=r,r=o,o=n),h=r/i*this.svgPathLength,s.push(h),l=(o-r)/i*this.svgPathLength,s.push(l,this.svgPathLength),this.$range.style.strokeDasharray=s.join(" "))},_isPropsRelatedToSVG:function(t){return this._hasProperty(t,["radius","borderWidth","width","lineCap","startAngle","endAngle"])},_isPropsRelatedToSVGStyles:function(t){return this._hasProperty(t,["borderColor","pathColor","rangeColor"])},_hasProperty:function(t,e){return"string"==typeof t?-1!==e.indexOf(t):Object.keys(t).some(function(t){return-1!==e.indexOf(t)})},_updateARIA:function(t){var e,i=this.options,s=i.min,a=i.max;this.bar.children().attr({"aria-valuenow":t}),this._rangeSlider?((e=this._handles()).eq(0).attr({"aria-valuemin":s}),e.eq(1).attr({"aria-valuemax":a}),1==this._active?e.eq(1).attr({"aria-valuemin":t}):e.eq(0).attr({"aria-valuemax":t})):this.bar.children().attr({"aria-valuemin":s,"aria-valuemax":a})},_getDistance:function(t,e){return Math.sqrt((t.x-e.x)*(t.x-e.x)+(t.y-e.y)*(t.y-e.y))},_getXY:function(t){return-1==t.type.indexOf("mouse")&&(t=(t.originalEvent||t).changedTouches[0]),{x:t.pageX,y:t.pageY}},_getCenterPoint:function(){var t=this.block||this.svgContainer,e=t.offset();return{x:e.left+t.outerWidth()/2,y:e.top+t.outerHeight()/2}},_getAngleValue:function(t,e,i){var s=-Math.atan2(t.y-e.y,e.x-t.x)/(Math.PI/180);return s<this._start&&(s+=360),s=this._checkAngle(s,i),this._processStepByAngle(s)},_checkAngle:function(t,e){var i=this._oriAngle(t),s=this["_handle"+this._active].angle,a=this._oriAngle(s);if(i>this._end){if(!e)return s;t=this._start+(a<=this._end-a?0:this._end)}else if(e){var n=this._handleDragDistance;if(this.isNumber(n)&&Math.abs(i-a)>n)return s}return t},_processStepByAngle:function(t){var e=this._angleToValue(t);return this._processStepByValue(e)},_processStepByValue:function(t){var e=this.options,i=e.min,s=e.max,a=e.step,n=s<i,r=t-(t-i)%(a=n?-a:a),o=this._limitValue(r+a),h=this._limitValue(r-a),l=n?t<=r?r-t<t-o?r:o:h-t<t-r?r:h:r<=t?t-r<o-t?r:o:t-h<r-t?r:h;return{value:l=this._round(l),angle:this._valueToAngle(l)}},_round:function(t){var e=this.options.step.toString().split(".");return e[1]?parseFloat(t.toFixed(e[1].length)):Math.round(t)},_oriAngle:function(t){var e=t-this._start;return e<0&&(e+=360),e},_limitAngle:function(t){return t>360+this._start&&(t-=360),t<this._start&&(t+=360),t},_limitValue:function(t){var e=this.options,i=e.min,s=e.max,a=s<i;return(!a&&t<i||a&&i<t)&&(t=i),(!a&&s<t||a&&t<s)&&(t=s),t},_angleToValue:function(t){var e=this.options,i=e.min,s=e.max;return this._oriAngle(t)/this._end*(s-i)+i},_valueToAngle:function(t){var e=this.options,i=e.min;return(t-i)/(e.max-i)*this._end+this._start},_appendHiddenField:function(){var t=this._hiddenField=this._hiddenField||this.$createElement("input");t.attr({type:"hidden",name:this._dataElement()[0].id||""}),this.control.append(t),this._updateHidden()},_updateHidden:function(){var t=this.options.value;this._hiddenField.val(t)},_updateTooltip:function(){var t=this.options,e=this.tooltip;e&&(e.hasClass("rs-hover")||e.html(this._getTooltipValue()),this._updateTooltipPos()),!t.showTooltip&&t.mouseScrollAction&&this.control.height()},_updateTooltipPos:function(){var t,e,i,s=this.options,a=s.circleShape,n={};s.showTooltip&&0!==a.indexOf("quarter")&&((t=this.tooltip).is(":visible")?(t.removeClass("rs-center").addClass("rs-reset"),e=-t.outerHeight()/2,i=-t.outerWidth()/2,t.removeClass("rs-reset"),"full"==a||"pie"==a||0===a.indexOf("custom")?n={"margin-top":e,"margin-left":i}:"half-top"==a||"half-bottom"==a?n={"margin-left":i}:"half-left"!=a&&"half-right"!=a||(n={"margin-top":e})):t.addClass("rs-center"),t.css(n))},_getTooltipValue:function(t){var e=this.options.value;if(this._rangeSlider){var i=e.split(",");return t?i[0]+" - "+i[1]:this._tooltipValue(i[0],1)+" - "+this._tooltipValue(i[1],2)}return t?e:this._tooltipValue(e)},_tooltipValue:function(t,e){var i=this._raise("tooltipFormat",{value:t,handle:this._handleArgs(e)});return null!=i&&"boolean"!=typeof i?i:t},_validateStartAngle:function(){var t=this.options,e=t.startAngle;return(e=(this.isNumber(e)?parseFloat(e):0)%360)<0&&(e+=360),t.startAngle=e},_validateEndAngle:function(){var t=this.options,e=t.startAngle,i=t.endAngle,i=this.isNumber(i)?("string"!=typeof i||"+"!==i.charAt(0)&&"-"!==i.charAt(0)||(i=e+parseFloat(i)),parseFloat(i)):360;return(i%=360)<=e&&(i+=360),i},_refreshCircleShape:function(){var t=this.options,e=t.circleShape;-1==["half-top","half-bottom","half-left","half-right","quarter-top-left","quarter-top-right","quarter-bottom-right","quarter-bottom-left","pie","custom-half","custom-quarter"].indexOf(e)&&(e="half"==e?"half-top":"quarter"==e?"quarter-top-left":"full"),t.circleShape=e},_appendOverlay:function(){var t=this.options.circleShape;"pie"==t?this._checkOverlay(".rs-overlay",270):"custom-half"!=t&&"custom-quarter"!=t||(this._checkOverlay(".rs-overlay1",180),"custom-quarter"==t&&this._checkOverlay(".rs-overlay2",this._end))},_checkOverlay:function(t,e){var i=this.container.children(t);0==i.length&&(i=this.$createElement("div"+t+" rs-transition rs-bg-color"),this.container.append(i)),i.rsRotate(this._start+e)},_checkDataType:function(){var t,e,i,s=this.options,a=this._props();for(t in a.numberType)i=s[e=a.numberType[t]],this.isNumber(i)?s[e]=parseFloat(i):s[e]=this.defaults[e];for(t in a.booleanType)i=s[e=a.booleanType[t]],s[e]="false"!=i&&!!i;for(t in a.stringType)i=s[e=a.stringType[t]],s[e]=(""+i).toLowerCase()},_validateSliderType:function(){var t=this.options,e=t.sliderType.toLowerCase();this._rangeSlider=this._showRange=this._minRange=!1,"range"==e?this._rangeSlider=this._showRange=!0:e=-1!=e.indexOf("min")?(this._showRange=this._minRange=!0,"min-range"):"default",t.sliderType=e},_updateStartEnd:function(){var t=this.options,e=t.circleShape,i=t.startAngle,s=t.endAngle;"full"!=e&&(-1!=e.indexOf("quarter")?s="+90":-1!=e.indexOf("half")?s="+180":"pie"==e&&(s="+270"),t.endAngle=s,"quarter-top-left"==e||"half-top"==e?i=0:"quarter-top-right"==e||"half-right"==e?i=90:"quarter-bottom-right"==e||"half-bottom"==e?i=180:"quarter-bottom-left"!=e&&"half-left"!=e||(i=270),t.startAngle=i)},_validateStartEnd:function(){this._start=this._validateStartAngle(),this._end=this._validateEndAngle();var t=this._start<this._end?0:360;this._end+=t-this._start},_validateValue:function(t){return this._backupPreValue(),this._analyzeModelValue(),this._validateModelValue(),this._raiseBeforeValueChange(t?"change":"code")?(this._setValue(),this._backupPreValue(),!0):(this._revertPreValue(),!1)},_analyzeModelValue:function(){var t=this.options,e=t.value;e instanceof Array&&(e=e.toString());var i,s,a="string"==typeof e?e.split(","):[e];1==a.length&&this.isNumber(a[0])?a=[t.min,a[0]]:2<=a.length&&!this.isNumber(a[1])&&(a[1]=t.max),s=this._rangeSlider?[this._parseModelValue(a[0]),this._parseModelValue(a[1])].toString():(i=a.pop(),this._parseModelValue(i)),t.value=s},_parseModelValue:function(t){return this.isNumber(t)?parseFloat(t):this._defaultValue()},_validateModelValue:function(){var t,e,i,s,a=this.options,n=a.value;this._rangeSlider?(t=n.split(","),i=parseFloat(t[0]),s=parseFloat(t[1]),i=this._limitValue(i),s=this._limitValue(s),this._invertRange||(e=a.min,a.max<e?i<s&&(i=s):s<i&&(s=i)),this._handle1=this._processStepByValue(i),this._handle2=this._processStepByValue(s)):this["_handle"+(this._minRange?2:this._active||1)]=this._processStepByValue(this._limitValue(n)),this._updateModelValue()},_updateModelValue:function(){var t;t=this._rangeSlider?this._handle1.value+","+this._handle2.value:this["_handle"+(this._minRange?2:this._active||1)].value,this.options.value=t},_formRangeValue:function(t,e){e=e||this._active;var i=this._handle1.value,s=this._handle2.value;return 1==e?t+","+s:i+","+t},$createElement:function(t){var e=t.split(".");return p(document.createElement(e[0])).addClass(e[1]||"")},$createSVG:function(t,e){var i=t.split("."),s=document.createElementNS("http://www.w3.org/2000/svg",i[0]);return i[1]&&s.setAttribute("class",i[1]),e&&this.$setAttribute(s,e),s},$setAttribute:function(t,e){for(var i in e){var s,a=e[i];"class"!==i||(s=t.getAttribute("class"))&&(a+=" "+s),t.setAttribute(i,a)}return t},$append:function(e,t){return t.forEach(function(t){t&&e.appendChild(t)}),e},isNumber:function(t){return"number"==typeof(t=parseFloat(t))&&!isNaN(t)},getBrowserName:function(){var t="",e=window.navigator.userAgent;return window.opr&&opr.addons||window.opera||0<=e.indexOf(" OPR/")?t="opera":"undefined"!=typeof InstallTrigger?t="firefox":0<e.indexOf("MSIE ")||0<e.indexOf("Trident/")?t="ie":window.StyleMedia?t="edge":-1!=e.indexOf("Safari")&&-1==e.indexOf("Chrome")?t="safari":(window.chrome&&window.chrome.webstore||-1!=e.indexOf("Chrome"))&&(t="chrome"),t},_isBrowserSupported:function(){for(var t=["borderRadius","WebkitBorderRadius","MozBorderRadius","OBorderRadius","msBorderRadius","KhtmlBorderRadius"],e=0;e<t.length;e++)if(void 0!==document.body.style[t[e]])return!0;console.error(o+" : Browser not supported")},_raise:function(t,e){var i=this.options,s=i[t],a=!0;return(e=e||{value:i.value}).id=this.id,e.control=this.control,e.options=i,s&&(e.type=t,"string"==typeof s&&(s=window[s]),p.isFunction(s)&&(a=!1!==(a=s.call(this,e))&&a)),this.control.trigger(p.Event(t,e)),a},_bind:function(t,e,i){p(t).bind(e,p.proxy(i,this))},_unbind:function(t,e,i){p(t).unbind(e,p.proxy(i,this))},_getInstance:function(){return p.data(this._dataElement()[0],o)},_saveInstanceOnElement:function(){p.data(this.control[0],o,this)},_saveInstanceOnID:function(){var t=this.id;t&&void 0!==window[t]&&(window[t]=this)},_removeData:function(){var t=this._dataElement()[0];p.removeData&&p.removeData(t,o),t.id&&"function"==typeof window[t.id]._init&&delete window[t.id]},_destroyControl:function(){this._isInputType&&this._dataElement().insertAfter(this.control).attr("type","text"),this.control.empty().removeClass("rs-control").height("").width(""),this._removeAnimation(),this._bindControlEvents("_unbind"),this._bindScrollEvents("_unbind")},_updateWidth:function(){this.lastBlock.css("padding",this.options.width)},_readOnly:function(t){this._isReadOnly=t,this.container.removeClass("rs-readonly"),t&&this.container.addClass("rs-readonly")},_get:function(t){return this.options[t]},_set:function(t,e,i){var s=this._props();if(-1!=p.inArray(t,s.numberType)){if(!this.isNumber(e))return;e=parseFloat(e)}else-1!=p.inArray(t,s.booleanType)?e="false"!=e&&!!e:-1!=p.inArray(t,s.stringType)&&(e=e.toLowerCase());var a=this.options;if(this._preValue=a.value,i||a[t]!==e){switch(a[t]=e,t){case"startAngle":case"endAngle":this._validateStartEnd(),this._updateSeperator(),this._appendOverlay();case"startValue":this._minRange&&(this._handle1=this._handleDefaults());case"min":case"max":case"step":case"value":this._validateValue()&&(this._updateHidden(),this._updateTooltip(),a.value!==this._preValue&&(this._raiseValueChange("code"),this._updatePre()));break;case"radius":this._setRadius(),this._updateTooltipPos();break;case"width":this._removeAnimation(),this._updateWidth(),this._setRadius(),this._refreshHandle(),this._updateTooltipPos(),this._addAnimation(),this._refreshSeperator();break;case"borderWidth":this._setRadius(),this._refreshHandle();break;case"handleSize":this._refreshHandle();break;case"handleShape":this._setHandleShape();break;case"animation":a.animation?this._addAnimation():this._removeAnimation();break;case"showTooltip":a.showTooltip?this._appendTooltip():this._removeTooltip();break;case"editableTooltip":this._tooltipEditable(),this._updateTooltipPos();break;case"rangeColor":case"tooltipColor":this._setTooltipColor(this.tooltip),this._setTooltipColor(this.input);break;case"disabled":a.disabled?this.disable():this.enable();break;case"readOnly":a.readOnly?this._readOnly(!0):a.disabled||this._readOnly(!1);break;case"mouseScrollAction":this._bindScrollEvents(a.mouseScrollAction?"_bind":"_unbind");break;case"lineCap":this._setRadius(),this._refreshSeperator();break;case"circleShape":this._refreshCircleShape(),"full"==a.circleShape&&(a.startAngle=0,a.endAngle="+360");case"sliderType":this._destroyControl(),this._onInit();break;case"svgMode":var n=this.control,r=a;this.destroy(),n[o](r)}return this}},option:function(t,e){if(t&&this._getInstance()){var i=this.options;if(p.isPlainObject(t)){var s,a="value",n=void 0!==t.min,r=void 0!==t.max;for(var o in(n||r)&&(n&&(i.min=t.min,delete t.min),r&&(i.max=t.max,delete t.max),s=i.value,void 0!==t[a]&&(s=t[a],delete t[a]),this._set(a,s,!0)),t)this._set(o,t[o])}else if("string"==typeof t){if(void 0===e)return this._get(t);this._set(t,e)}return i.svgMode&&(this._isPropsRelatedToSVG(t)&&(this._setSVGAttributes(),this._moveSliderRange()),this._isPropsRelatedToSVGStyles(t)&&this._setSVGStyles()),this}},getValue:function(t){if(this._rangeSlider&&this.isNumber(t)){var e=parseFloat(t);if(1==e||2==e)return this["_handle"+e].value}return this._get("value")},setValue:function(t,e){var i,s;this.isNumber(t)&&(this.isNumber(e)&&(this._rangeSlider?(i=parseFloat(e),s=parseFloat(t),t=this._formRangeValue(s,i)):this._minRange||(this._active=e)),this._set("value",t))},refreshTooltip:function(){this._updateTooltipPos()},disable:function(){this.options.disabled=!0,this.container.addClass("rs-disabled"),this._readOnly(!0)},enable:function(){var t=this.options;t.disabled=!1,this.container.removeClass("rs-disabled"),t.readOnly||this._readOnly(!1)},destroy:function(){this._getInstance()&&(this._destroyControl(),this._removeData(),this._isInputType&&this.control.remove())}},p.fn.rsRotate=function(t){var e=this,i="rotate("+t+"deg)";return e.css("-webkit-transform",i),e.css("-moz-transform",i),e.css("-ms-transform",i),e.css("-o-transform",i),e.css("transform",i),e},r.prototype.$polarToCartesian=function(t,e,i){var s=(i-180)*Math.PI/180;return[t+e*Math.cos(s),t+e*Math.sin(s)].join(" ")},r.prototype.$drawArc=function(t,e,i,s,a){var n,r,o,h=s-i==360,l=Math.abs(i-s)<=180?"0":"1",d=a?1:0,u=a?s:i,_=[];return h?(n=(i+s)/2,r=this.$polarToCartesian(t,e,n),o=this.$polarToCartesian(t,e,u),_.push("A",1,1,0,0,d,r,"A",1,1,0,0,d,o)):(o=this.$polarToCartesian(t,e,u),_.push("A",e,e,0,l,d,o)),_.join(" ")},r.prototype.$drawPath=function(t,e,i,s,a,n){var r,o,h=this.$polarToCartesian(t,e,i),l=["M "+h,this.$drawArc(t,e,i,s,!0)];return a&&(r=this.$polarToCartesian(t,a,s),o=this.$drawArc(t,a,i,s,!1),"none"==n?l.push("M "+r,o):"round"==n?l.push("A 1, 1, 0, 0, 1, "+r,o,"A 1, 1, 0, 0, 1, "+h):"butt"!=n&&"square"!=n||l.push("L "+r,o,"L "+h,"Z")),l.join(" ")},r.prototype.$getArcLength=function(t,e){return void 0===e&&(e=360),2*Math.PI*t*(e/360)},p.fn[o].prototype=r.prototype});
window.onload = function(){
	setTimeout(function(){
		$('.msg_container').eq(0).addClass('animate-bubble');
	},1500)
	setTimeout(function(){
		$('.msg_container').eq(1).addClass('animate-bubble');
	},3000)
	setTimeout(function(){
		$('.msg_container').eq(2).addClass('animate-bubble');
	},4500)
	setTimeout(function(){
		$('.msg_container').eq(3).addClass('animate-bubble');
	},6000)
  crear_select();
  $('.department-options li').click(function(){
	
	if($('.department-options select').val() == '21-30' || $('.department-options select').val() == '31 and above'){
		$('.organization-team-input').removeAttr('disabled');
		$('.organization-team-input').addClass('highlight');
	}
	else{
		$('.organization-team-input').val('');
		$('.organization-team-input').attr('disabled','disabled');
		$('.organization-team-input').removeClass('highlight');
	}
})
setTimeout(function(){
	$('.personal-level-start').addClass('zoom-backrgound');
	$('.sust1-marked-element').addClass('blinking-text');
},2000);
setTimeout(function(){
	$('.personal-level-start').addClass('zoom-backrgound-new');
},3000);
$('body').addClass('hide-loader');
}

function isMobileDevice() {
    return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
};

 
var li = new Array();
function crear_select(){
var div_cont_select = document.querySelectorAll("[data-mate-select='active']");
var select_ = '';
for (var e = 0; e < div_cont_select.length; e++) {
div_cont_select[e].setAttribute('data-indx-select',e);
div_cont_select[e].setAttribute('data-selec-open','false');
var ul_cont = document.querySelectorAll("[data-indx-select='"+e+"'] > .cont_list_select_mate > ul");
 select_ = document.querySelectorAll("[data-indx-select='"+e+"'] >select")[0];
 if (isMobileDevice()) { 
select_.addEventListener('change', function () {
 _select_option(select_.selectedIndex,e);
});
 }
var select_optiones = select_.options;
document.querySelectorAll("[data-indx-select='"+e+"']  > .selecionado_opcion ")[0].setAttribute('data-n-select',e);
document.querySelectorAll("[data-indx-select='"+e+"']  > .icon_select_mate ")[0].setAttribute('data-n-select',e);
for (var i = 0; i < select_optiones.length; i++) {
li[i] = document.createElement('li');
if (select_optiones[i].selected == true || select_.value == select_optiones[i].innerHTML ) {
li[i].className = 'active';
document.querySelector("[data-indx-select='"+e+"']  > .selecionado_opcion ").innerHTML = select_optiones[i].innerHTML;
};
li[i].setAttribute('data-index',i);
li[i].setAttribute('data-selec-index',e);
// funcion click al selecionar 
li[i].addEventListener( 'click', function(){  _select_option(this.getAttribute('data-index'),this.getAttribute('data-selec-index')); });

li[i].innerHTML = select_optiones[i].innerHTML;
ul_cont[0].appendChild(li[i]);

    }; // Fin For select_optiones
  }; // fin for divs_cont_select
} // Fin Function 
var cont_slc = 0;
function open_select(idx){
var idx1 =  idx.getAttribute('data-n-select');
$('.selecionado_opcion').each(function(){
	if($(this).attr('data-n-select') != idx1){
		$(this).parent().removeClass('active-dropdown');
		document.querySelectorAll("[data-indx-select='"+$(this).attr('data-n-select')+"']")[0].setAttribute('data-selec-open','false');
		document.querySelectorAll("[data-indx-select='"+$(this).attr('data-n-select')+"'] > .icon_select_mate")[0].style.transform = 'rotate(0deg)';
		document.querySelectorAll("[data-indx-select='"+$(this).attr('data-n-select')+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
		document.querySelectorAll("[data-indx-select='"+$(this).attr('data-n-select')+"'] > .cont_list_select_mate > ul")[0].style.opacity = "0";
	}
})
$(document).click(function(e){
    var container = $(".active-dropdown");
	
    // If the target of the click isn't the container
    if(!container.is(e.target) && container.has(e.target).length === 0){
        $('.selecionado_opcion').each(function(){
		$(this).parent().removeClass('active-dropdown');
		document.querySelectorAll("[data-indx-select='"+$(this).attr('data-n-select')+"']")[0].setAttribute('data-selec-open','false');
		document.querySelectorAll("[data-indx-select='"+$(this).attr('data-n-select')+"'] > .icon_select_mate")[0].style.transform = 'rotate(0deg)';
		document.querySelectorAll("[data-indx-select='"+$(this).attr('data-n-select')+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
		document.querySelectorAll("[data-indx-select='"+$(this).attr('data-n-select')+"'] > .cont_list_select_mate > ul")[0].style.opacity = "0";
})
    }
	
});
  var ul_cont_li = document.querySelectorAll("[data-indx-select='"+idx1+"'] .cont_select_int > li");
var hg = 0;
var slect_open = document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].getAttribute('data-selec-open');
var slect_element_open = document.querySelectorAll("[data-indx-select='"+idx1+"'] select")[0];
 if (isMobileDevice()) { 
  if (window.document.createEvent) { // All
  var evt = window.document.createEvent("MouseEvents");
  evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);
	slect_element_open.dispatchEvent(evt);
} else if (slect_element_open.fireEvent) { // IE
  slect_element_open.fireEvent("onmousedown");
}else {
  slect_element_open.click();
}
}else {

  
  for (var i = 0; i < ul_cont_li.length; i++) {
hg += ul_cont_li[i].offsetHeight;
}; 
 if (slect_open == 'false') {  
 document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','true');
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = hg+20+"px";
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.opacity = "1";
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(180deg)';
}else{
 document.querySelectorAll("[data-indx-select='"+idx1+"']")[0].setAttribute('data-selec-open','false');
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .icon_select_mate")[0].style.transform = 'rotate(0deg)';
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
 document.querySelectorAll("[data-indx-select='"+idx1+"'] > .cont_list_select_mate > ul")[0].style.opacity = "0";
 }
}

} // fin function open_select

function salir_select(indx){
var select_ = document.querySelectorAll("[data-indx-select='"+indx+"'] > select")[0];
 document.querySelectorAll("[data-indx-select='"+indx+"'] > .cont_list_select_mate > ul")[0].style.height = "0px";
document.querySelector("[data-indx-select='"+indx+"'] > .icon_select_mate").style.transform = 'rotate(0deg)';
 document.querySelectorAll("[data-indx-select='"+indx+"']")[0].setAttribute('data-selec-open','false');
}


function _select_option(indx,selc){
 if (isMobileDevice()) { 
selc = selc -1;
}
    var select_ = document.querySelectorAll("[data-indx-select='"+selc+"'] > select")[0];

  var li_s = document.querySelectorAll("[data-indx-select='"+selc+"'] .cont_select_int > li");
  var p_act = document.querySelectorAll("[data-indx-select='"+selc+"'] > .selecionado_opcion")[0].innerHTML = li_s[indx].innerHTML;
var select_optiones = document.querySelectorAll("[data-indx-select='"+selc+"'] > select > option");
for (var i = 0; i < li_s.length; i++) {
if (li_s[i].className == 'active') {
li_s[i].className = '';
};
li_s[indx].className = 'active';

};
select_optiones[indx].selected = true;
  select_.selectedIndex = indx;
  select_.onchange();
  salir_select(selc); 
}

function getFormData($form){
    var unindexed_array = $form.serializeArray();
    var indexed_array = {};

    $.map(unindexed_array, function(n, i){
        indexed_array[n['name']] = n['value'];
    });

    return indexed_array;
}
$(document).ready(function(){
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
if(!$('body').hasClass('language-page')){
	if(Cookies.get('language_selected') == undefined || Cookies.get('language_selected') == ''){
				window.location.href = $('html').attr('data-base-path')+'/language';
		}
}
$('.selected_language').val(Cookies.get('language_selected'))
	$('.translate-btn').click(function(e){
		e.preventDefault();
		Cookies.set('language_selected',$(this).attr('data-language'), { expires: 1 });
		window.location.href = $(this).attr('href');
	})
	$('.select_mate').click(function(){
		$(this).toggleClass('active-dropdown');
	})
	$('.search-clear').click(function(){
		$('#search-input').val('');
	})
	$('.agree-btn').click(function(e){
		e.preventDefault();
		Cookies.set('surveyAgree','true', { expires: 1 });
		        $("body").fadeOut(500); 
		window.location.href = $(this).attr('href');
	})
	if($('body').hasClass('index-page')){
		Cookies.set('formdetails','');
		Cookies.set('surveyAgree','');
	}
	else{
		if(!$('body').hasClass('language-page')){
			if(Cookies.get('language_selected') != undefined && Cookies.get('language_selected') != ''){
				if(Cookies.get('surveyAgree') == undefined || Cookies.get('surveyAgree') == ''){
					if(Cookies.get('language_selected') == 'de'){
						window.location.href = $('html').attr('data-base-path')+'/de';
					}else{
					window.location.href = $('html').attr('data-base-path');
					}
				}
			}
			else{
				window.location.href = $('html').attr('data-base-path')+'/language'
			}
		}
	}
	if($('body').hasClass('badge-calculation-screen')){
		Cookies.set('formdetails','');
		Cookies.set('surveyAgree','');
		var badge_score = parseInt(Cookies.get('badge_score'));
		if(badge_score <= 24 ){
			$('.badge-grid').not($('.bronze-badge')).remove();
			$('.bronze-badge').removeClass('hide');
		}
		else if(badge_score > 24 && badge_score <= 39){
			$('.badge-grid').not($('.silver-badge')).remove();
			$('.silver-badge').removeClass('hide');
		}
		else if(badge_score > 39 && badge_score <= 55 ){
			$('.badge-grid').not($('.gold-badge')).remove();
			$('.gold-badge').removeClass('hide');
		}
		else{
			window.location.href = $('html').attr('data-base-path');
		}
	}
	$('#allsame').click(function(){
		setTimeout(function(){
			if($('#allsame').is(':checked')){
				$('.bio-options-wrapper input').prop('checked', false)
				$('.organic-options-wrapper input').prop('checked', false)
				var parsed_json = JSON.parse(Cookies.get('formdetails'))
				try{
				parsed_json['personal_level_step2_organic'] = '';
				parsed_json['personal_level_step2_bio'] = '';
				Cookies.set('formdetails',JSON.stringify(parsed_json), { expires: 1 })
				}
				catch(err){}
			}
		},100)
	})
	$('.age-field').on('blur', function(){
		if($(this).val() < $(this).attr('min') &&  $(this).val() != ''){
			$(this).val($(this).attr('min'))
		}
	})
	$('.bio-options-wrapper input,.organic-options-wrapper input').click(function(){
		var elem = $(this)
		setTimeout(function(){
			if(elem.is(':checked')){
				$('#allsame').prop('checked', false);
				var parsed_json = JSON.parse(Cookies.get('formdetails'))
				try{
				parsed_json['personal_level_step2_allsame'] = '';
				Cookies.set('formdetails',JSON.stringify(parsed_json), { expires: 1 })
				}
				catch(err){}
			}
		},100)
	})
	$('.emoji-option-js').click(function(){
		if($('.hidden-smiley-data').length > 0){
			$('.emoji-option-js').not($(this)).removeClass('active-option');
			$(this).addClass('active-option');
			$('.hidden-smiley-data').val($(this).attr('data-value'));
		}
	})
	var target = '';
	$('#sust1-group .sust-item').click(function(){
		$('.sust1-marked-element').removeClass('blinking-text');
	 target = $(this).attr('id');
		$('.popup-ques-container').removeClass('active-popover');
		$('.'+target).addClass('active-popover')
	})
	$('#sust2-svg .sust-item').click(function(){
		$('.sust1-marked-element').removeClass('blinking-text');
		target = $(this).attr('id');
		$('.popup-ques-container').removeClass('active-popover');
		$('.'+target).addClass('active-popover')
	})
	$('.popup-ques-container .emoji-option-js').click(function(){
			$('.popup-ques-container.active-popover .emoji-option-js').not($(this)).removeClass('active-option');
			$(this).addClass('active-option');
			$('.popup-ques-container.active-popover input').val($(this).attr('data-value'));
			//$('.popup-ques-container').removeClass('active-popover');
	})
	$('.popover-btn').click(function(){
		var target_popover = $(this).attr('data-target');
		if($('.'+target_popover).find('.active-option').length == 0){
			return false;
		}
		$('#'+target_popover).addClass('next-to-active');
		$('#'+target_popover).removeClass('blinking-text');
		if(!$('#'+target_popover).next().hasClass('next-to-active') && $('#sust1-group .sust-item').length != $('#sust1-group .next-to-active').length){
			$('#'+target_popover).next().addClass('blinking-text');
		}
		else{
			if(!$('#sust2-svg .sust-item').eq(0).hasClass('next-to-active')){
				$('#sust2-svg .sust-item').eq(0).addClass('blinking-text');
			}
			if(!$('#sust2-svg #'+target_popover).next().hasClass('next-to-active')){
				$('#sust2-svg #'+target_popover).next().addClass('blinking-text')
			}
		}
		if($('.next-to-active').length == 8 ){
			$('.question-wrapper').removeClass('col-sm-6').addClass('col-sm-12');
			$('.answers-wrapper').addClass('hide');
		}
		$('.popup-ques-container').removeClass('active-popover');
	})
	$('.user-rating li').click(function(){
		$('.user-rating li').not($(this)).removeClass('active-icon');
		$(this).addClass('active-icon')
		var rating = $(this).attr('data-value');
		$('.hidden-survey-rating').val(rating);
	})
	$('.never-selection-checkbox').click(function(){
		var elem = $(this);
		setTimeout(function(){
		if(elem.is(':checked')){
			$('.range-labels li').eq(0).click();
			$('.rangle-slider').addClass('disabled');
		}
		else{
			$('.rangle-slider').removeClass('disabled');
		}
		},100)
		
	})
	$('.back-navigate-btn').click(function(e){
		e.preventDefault();

		window.history.back();
	})
	$('.reset-btn').click(function(e){
		e.preventDefault();
		location.reload();
	})
	$('#none_of_these').click(function(){
		var elem = $(this);
		setTimeout(function(){
			if(elem.is(':checked')){
				$('.drag-input-details').val(elem.val())
				$('.plate-item').removeClass('usedDraggable').css('pointer-events','auto');
				$('.empty-plate').html('')
			}
			else{
				
				$('.drag-input-details').val('');
				//$('.reset-btn').click();
			}
		},150)
		
	})
	$('.survey-form .grid-item').click(function(){
		$(this).next().find('input').click();
	})
	$('.correct-answer').click(function(){
		$('.error-message').remove();
		$('.button-wrapper').append('<p class="error-message correct-message animate__animated animate__fadeIn gray-text">'+$('.survey-form').attr('data-correct-answers')+'</p>')
	})
	// storing form data in cookie //
	$('.get-survey-details').click(function(e){
		e.preventDefault();
		// form validation //
		if($('.required-field').length > 0 ){
			$('.select_mate ').removeClass('field-is-required')
			$('.required-field').removeClass('field-is-required')
			try{
			$('.required-field').each(function(){
				if($(this).val()!= undefined && $(this).val() != '' ){
					$(this).addClass('validated');
				}
			})
			var required_class_added = false;
			$('.required-field').each(function(){
				if(!$(this).hasClass('validated') && required_class_added == false){
					if($(this).find('option').length != 0){
						$(this).parent().addClass('field-is-required');
					}
					else{
					$(this).addClass('field-is-required');
					}
					required_class_added = true;
				}
			})
			if($('.required-field').length != $('.validated').length){
				return false;
			}
			}
			catch(err){}
		}
		// form validation //
		
		// storing multiple checkbox data into single field //
		var checkbox_all_data = '';
		$('.multiple-checkbox-data:checked').each(function(i){
			if(i != $('.multiple-checkbox-data:checked').length-1)
				checkbox_all_data += $(this).val()+'|';
			else
				checkbox_all_data += $(this).val();
		})
		$('.multiple-checkbox-hidden').val(checkbox_all_data);
		// storing multiple checkbox data into single field //
		 
		 // removing unchecked keys from json //
		 
		 if(!$('.never-selection-checkbox').is(':checked')){
				var key = $('.never-selection-checkbox').attr('name');
				try{
					var parsed_json = JSON.parse(Cookies.get('formdetails'))
				parsed_json[key] = '';
				Cookies.set('formdetails',JSON.stringify(parsed_json), { expires: 1 })
				}
				catch(err){}
			}
		 // removing unchecked keys from json //
		 
		 // getting dragged elements order //
		 if($(this).hasClass('get-drag-input-details')){
			 var dragged_elements_order = '';
			 $('.mid-drag .grid-icons').each(function(i){
				 if($(this).attr('data-text') != undefined && $(this).attr('data-text') != ''){
					 if(i != $('.mid-drag .grid-icons').length-1){
						dragged_elements_order += $(this).attr('data-text')+',';
					 }
					 else{
						dragged_elements_order += $(this).attr('data-text')
					 }
				 }
			 })
			 $('.drag-input-details').val(dragged_elements_order);
		 }
		 else if($(this).hasClass('get-veg-input-details')){
			 var dragged_elements_order = '';
			 $('.empty-plate img').each(function(i){
				  if($(this).attr('data-text') != undefined && $(this).attr('data-text') != ''){
					 if(i != $('.empty-plate img').length-1){
						dragged_elements_order += $(this).attr('data-text')+',';
					 }
					 else{
						dragged_elements_order += $(this).attr('data-text')
					 }
				 }
			 })
			 if(!$('#none_of_these').is(':checked')){
				$('.drag-input-details').val(dragged_elements_order);
			 }
		 }
		 // getting dragged elements order //
		 
		 // disable submit button if user did not choosed any option //
		 if($('.survey-form').hasClass('required-validation')){
			if($('.survey-form').attr('data-validation-type') == 'radio' ){
				if($('.survey-form input:checked').length == 0){
					$('.error-message').remove();
					$('.button-wrapper').append('<p class="error-message animate__animated animate__fadeIn gray-text">Please select an option to proceed.</p>')
					return false;
				}
			}
			else if($('.survey-form').attr('data-validation-type') == 'circular-slider' ){
				if($('.survey-form .hidden-circular-slider-input').val() == 0){
					$('.button-wrapper').append('<p class="error-message animate__animated animate__fadeIn gray-text">Please select an option to proceed.</p>')
					return false;
				}
			}
			else if($('.survey-form').attr('data-validation-type') == 'single-input-field' ){
				if($('.survey-form input').val() == ''){
					$('.error-message').remove();
					$('.button-wrapper').append('<p class="error-message animate__animated animate__fadeIn gray-text">Please select an option to proceed.</p>')

					return false;
				}
			}
			else if($('.survey-form').attr('data-validation-type') == 'custom' ){
				if(!$('#allsame').is(':checked')){
					if($('.bio-options-wrapper input:checked').length == 0 || $('.organic-options-wrapper input:checked').length == 0){
											$('.error-message').remove();
					$('.button-wrapper').append('<p class="error-message animate__animated animate__fadeIn gray-text">Please select an option to proceed.</p>')

						return false;
					}
				}
			}
			else if($('.survey-form').attr('data-validation-type') == 'multiple-inputs' ){
				var input_numbers = $('.survey-form input').length;
				var filled_inputs = 0;
				$('.survey-form input').each(function(){
					if($(this).val() != ''){
						filled_inputs +=1; 
					}
				})
				if(filled_inputs != input_numbers){
					$('.error-message').remove();
					$('.button-wrapper').append('<p class="error-message animate__animated animate__fadeIn gray-text">Please select an option to proceed.</p>')

					return false;
				}
			}
		}
		 // disable submit button if user did not choosed any option //
		 
		var $form = $(".survey-form");
		var all_forms_data = '';
		var data = getFormData($form);
		if(Cookies.get('formdetails') != undefined && Cookies.get('formdetails') != ''){
			var previous_forms_data = JSON.parse(Cookies.get('formdetails'));
			var new_form_data = $.extend({},previous_forms_data, data);
			all_forms_data = new_form_data;
		}
		else{
			all_forms_data = data;
		}
		Cookies.set('formdetails', JSON.stringify(all_forms_data), { expires: 1 });
		 $("body").fadeOut(500);
		if($(this).hasClass('submit-details')){
			dataSubmission(JSON.stringify(all_forms_data),$('html').attr('data-base-path')+'/survey_submission',$(this).attr('href'))
		}
		else{
			window.location.href = $(this).attr('href');
		}
	})
	// storing form data in cookie //
	
	$('.download-zip-btn').click(function(){
		setTimeout(function(){
			Cookies.set('badge_score',0, { expires: 1 });
			window.location.href = $('html').attr('data-base-path');
		},1000)
	})
	// circular range slider //
	$(".circular-range-slider").roundSlider({
		sliderType: "min-range",
		width: 20,
		radius: 100,
		value: "0",
		startAngle: 90,
		min: 0,
		max: "5",
		lineCap: "square",
		handleSize: "+15",
		editableTooltip: false,
		showTooltip: false,
		drag: function (args) {
			//var min_value = args.value.split(',')[0]
			var max_value = args.value
			for(var i=0;i<=5;i++){
				$(".circular-range-slider").removeClass('current-step-'+i);
				$('.rs-first .rs-handle').removeClass('stepmove'+i);
			}
			$('.rs-first .rs-handle').addClass('stepmove'+max_value);
			$(".circular-range-slider").addClass('current-step-'+max_value);
			$('.hidden-circular-slider-input').val(max_value)
		},
		change: function (args) {
			//var min_value = args.value.split(',')[0]
			var max_value = args.value
			for(var i=0;i<=5;i++){
				$(".circular-range-slider").removeClass('current-step-'+i);
				$('.rs-first .rs-handle').removeClass('stepmove'+i);
			}
			$('.rs-first .rs-handle').addClass('stepmove'+max_value);
			$(".circular-range-slider").addClass('current-step-'+max_value);
			$('.hidden-circular-slider-input').val(max_value)
		},
		start:function(args){
			console.log(args);
		}
	});
	$(".circular-range-slider").addClass('current-step-0');
	$('.rs-handle').addClass('stepmove0');
	
	// circular range slider //
	var sheet = document.createElement('style'),  
  $rangeInput = $('.range input'),
  prefs = ['webkit-slider-runnable-track', 'moz-range-track', 'ms-track'];

document.body.appendChild(sheet);
//$('.range').append('<div class="custom-slider-div"></div>')
var getTrackStyle = function (el,elem) {  
  var curVal = el.value,
      val = (curVal-1) * 25,
      style = '';
  if(curVal == 1){
	 val = 0; 
  }
  if(curVal == 2){
	  val = 25;
  }
  if(curVal == 3){
	  val = 50;
  }
  if(curVal == 4){
	  val = 75;
  }
  if(curVal == 5){
	  val = 100;
  }
  //elem.next().css('width',val+'%');
  // Set active label
  elem.parent().next().find('li').removeClass('active selected');
  
  var curLabel = elem.parent().next().find('li:nth-child(' + curVal + ')');
  
  curLabel.addClass('active selected');
  curLabel.prevAll().addClass('selected');
  
  // Change background gradient
  if($('.clmn-grid-slider').length > 0 ){
	  var target_id = elem.parent().parent().attr('id');
	  console.log(target_id)
	  if($('#'+target_id).hasClass('orange')){
		  class_name = 'green';
			  color_code = '#4c9f38';
	  } 
		  for (var i = 0; i < prefs.length; i++) {
			style += '#'+target_id +' .range {background: linear-gradient(to right, '+color_code+' 0%, '+color_code+' ' + val + '%, #E6E6E6 ' + val + '%, #E6E6E6 100%)}';
			style += '#'+target_id +' .range input::-' + prefs[i] + '{background: linear-gradient(to right, '+color_code+' 0%, '+color_code+' ' + val + '%, #E6E6E6 ' + val + '%,#E6E6E6 100%)}';
			}
  }
  else{
	  for (var i = 0; i < prefs.length; i++) {
		style += '.rangle-slider .range {background: linear-gradient(to right, #6C353B 0%, #6C353B ' + val + '%, #E6E6E6 ' + val + '%, #E6E6E6 100%)}';
		style += '.rangle-slider .range input::-' + prefs[i] + '{background: linear-gradient(to right, #6C353B 0%, #6C353B ' + val + '%, #E6E6E6 ' + val + '%,#E6E6E6 100%)}';
	  }
  }
  return style;
}

$rangeInput.on('input', function () {
  //sheet.textContent = getTrackStyle(this,$(this));
  $('body').append('<style>'+getTrackStyle(this,$(this))+'</style>')
});

// Change input value on label click
$('.range-labels li').on('click', function () {
  var index = $(this).index();
  
  $(this).parent().prev().find('input').val(index + 1).trigger('input');
  
});


$('.draggable').draggable({
  start:handleDragStart,
  revert: "invalid",
  stack: ".draggable",
  helper: 'clone',
    cursorAt: {left: 50}
});
$('.mid-drag ul li').droppable({
  accept: ".draggable",
  drop: function(event, ui) {
    var droppable = $(this);
    var draggable = ui.draggable;
	$('.top-prompt').addClass('element-dropped')
    if (droppable.find('.grid-icons').length) {
	    draggable.draggable('option', 'revert', true);
	    return false;
    }
    // Move draggable into droppable
    droppable.html('');
    draggable.clone().appendTo(droppable);
    draggable.css({pointerEvents:'none'});
    draggable.addClass('usedDraggable');
  }
});
$('.vegi-group .plate-item').draggable({
  start:handleDragStartvegi,
  revert: "invalid",
  stack: ".draggable",
  helper: 'clone',
  cursorAt: {left: 50}
});
$('.empty-plate').droppable({
  accept: ".plate-item",
  drop: function(event, ui) {
    var droppable = $(this);
    var draggable = ui.draggable;

    // if (droppable.find('.grid-icons').length) {
	   //  draggable.draggable('option', 'revert', true);
	   //  return false;
    // }
    // Move draggable into droppable
    // droppable.html('');
    // droppable.find('.plate-item').css({zIndex:'99'});
	$('#none_of_these').prop('checked',false)
    draggable.clone().appendTo(droppable);
    draggable.css({pointerEvents:'none'});
    draggable.addClass('usedDraggable');
  }
});

}); //END ready

function handleDragStart (event, ui) {
	// $(this).css({zIndex:'99'});
    // $(this).addClass('');
} 
function handleDragStartvegi (event, ui) {
	// $(this).css({zIndex:'99'});
    // $(this).addClass('');
} 
setTimeout(function(){
	$('.range-labels li').eq(0).click();
},1000)


function dataSubmission(data,url,redirect){
	  $.ajax({
          url: url,
          type:"POST",
          data:data,
		  contentType: "application/json",
          success:function(response){
			try{
				var parsed_response = JSON.parse(response);
				Cookies.set('badge_score', parsed_response.badge_score, { expires: 1 });
			}
			catch(err){}
            window.location.href = redirect;
          },
		  error:function(err){
			//alert('Something went wrong.');
			window.location.href = redirect;
		  }
         });
}

function randOrder() {
    return ( Math.round(Math.random())-0.5 ); 
} 

setInterval(function() {
    $('.st86').removeClass('st86__active').sort( randOrder ).slice(0,3).addClass('st86__active')
}, 1000);
window.addEventListener( "pageshow", function ( event ) {
  var historyTraversal = event.persisted || ( typeof window.performance != "undefined" && window.performance.navigation.type === 2 );
  if ( historyTraversal ) {
    // Handle page restore.
    //alert('refresh');
    $('body').fadeIn(500)
  }
});