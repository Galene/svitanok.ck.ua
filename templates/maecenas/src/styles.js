/*
---
name: Youjoomla Mouseover Effect

description: allows mouseover/out effects on image stories

author: Youjoomla

license: This file is NOT licensed under any BSD or MIT style license.
         Unauthorised use, editing, distribution is not allowed.

copyright: Youjoomla LLC 2012

version: 1.0
*/
window.onload=function(){
	var mainDiv   	= document.getElementById('main_bg');
	var getHeight 	= mainDiv.offsetHeight;
	if (getHeight < 400){
		mainDiv.className = mainDiv.className + "small_bg_2";
	}
	else if(getHeight < 800 ){
		mainDiv.className = mainDiv.className + "small_bg";
	}
}
window.addEvent('load', function(){
$$('.mym .bot_thumb').each(function (el) {
    el.setStyles({
	  'opacity': '0.5'
	});
	var fx = new Fx.Morph(el, {
      duration: 200,
      'link': 'cancel'
    });
    el.addEvents({
      mouseenter: function () {
        fx.start({
		  'opacity': '1'
        });
      },
      mouseleave: function () {
        fx.start({
		  'opacity': '0.5'
        });
      }
    });
 });
/***HOVER EFFECT***/
$$('span.hover_effect img').each(function (el) {
	var height = el.getSize().y;
	var width = el.getSize().x;
	var fx = new Fx.Morph(el, {
      duration: 700,
      'link': 'cancel'
    });
    el.addEvents({
      mouseenter: function () {
        fx.start({
		  'width':width + width/8,
        });
      },
      mouseleave: function () {
        fx.start({
		  'width':width,
        });
      }
    });
 });
}); //------doom end
