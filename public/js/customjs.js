/*! js-cookie v3.0.0-rc.1 | MIT */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self,function(){var n=e.Cookies,r=e.Cookies=t();r.noConflict=function(){return e.Cookies=n,r}}())}(this,function(){"use strict";function e(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)e[r]=n[r]}return e}var t={read:function(e){return e.replace(/(%[\dA-F]{2})+/gi,decodeURIComponent)},write:function(e){return encodeURIComponent(e).replace(/%(2[346BF]|3[AC-F]|40|5[BDE]|60|7[BCD])/g,decodeURIComponent)}};return function n(r,o){function i(t,n,i){if("undefined"!=typeof document){"number"==typeof(i=e({},o,i)).expires&&(i.expires=new Date(Date.now()+864e5*i.expires)),i.expires&&(i.expires=i.expires.toUTCString()),t=encodeURIComponent(t).replace(/%(2[346B]|5E|60|7C)/g,decodeURIComponent).replace(/[()]/g,escape),n=r.write(n,t);var c="";for(var u in i)i[u]&&(c+="; "+u,!0!==i[u]&&(c+="="+i[u].split(";")[0]));return document.cookie=t+"="+n+c}}return Object.create({set:i,get:function(e){if("undefined"!=typeof document&&(!arguments.length||e)){for(var n=document.cookie?document.cookie.split("; "):[],o={},i=0;i<n.length;i++){var c=n[i].split("="),u=c.slice(1).join("=");'"'===u[0]&&(u=u.slice(1,-1));try{var f=t.read(c[0]);if(o[f]=r.read(u,f),e===f)break}catch(e){}}return e?o[e]:o}},remove:function(t,n){i(t,"",e({},n,{expires:-1}))},withAttributes:function(t){return n(this.converter,e({},this.attributes,t))},withConverter:function(t){return n(e({},this.converter,t),this.attributes)}},{attributes:{value:Object.freeze(o)},converter:{value:Object.freeze(r)}})}(t,{path:"/"})});
window.onload = function(){
  crear_select();
  $('.department-options li').click(function(){
	
	if(parseInt($('.department-options select').val()) > 10){
		$('.organization-team-input').removeAttr('disabled');
	}
	else{
		$('.organization-team-input').val('');
		$('.organization-team-input').attr('disabled','disabled');
	}
})
setTimeout(function(){
	$('.personal-level-start').addClass('zoom-backrgound');
},2000);

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
	$('.select_mate').click(function(){
		$(this).toggleClass('active-dropdown');
	})
	$('.search-clear').click(function(){
		$('#search-input').val('');
	})
	$('.agree-btn').click(function(e){
		e.preventDefault();
		Cookies.set('surveyAgree','true', { expires: 1 });
		window.location.href = $(this).attr('href');
	})
	if($('body').hasClass('index-page')){
		Cookies.set('formdetails','');
		Cookies.set('surveyAgree','');
	}
	else{
		if(Cookies.get('surveyAgree') == undefined || Cookies.get('surveyAgree') == ''){
			window.location.href = $('html').attr('data-base-path');
		}
	}
	// storing form data in cookie //
	
	$('.get-survey-details').click(function(e){
		e.preventDefault();
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
		window.location.href = $(this).attr('href');
	})
	// storing form data in cookie //
})
