$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});function copyToClipboard(e){var tempItem=document.createElement('input');tempItem.setAttribute('type','text');tempItem.setAttribute('display','none');let content=e;if(e instanceof HTMLElement){content=e.innerHTML;}
tempItem.setAttribute('value',content);document.body.appendChild(tempItem);tempItem.select();document.execCommand('Copy');tempItem.parentElement.removeChild(tempItem);swal({icon:'success',title:'Success',text:'คัดลอกชื่อไอดีเรียบร้อยแล้ว'})}
function copyToClipboardlink(e){var tempItem=document.createElement('input');tempItem.setAttribute('type','text');tempItem.setAttribute('display','none');let content=e;if(e instanceof HTMLElement){content=e.innerHTML;}
tempItem.setAttribute('value',content);document.body.appendChild(tempItem);tempItem.select();document.execCommand('Copy');tempItem.parentElement.removeChild(tempItem);swal({icon:'success',title:'Success',text:'คัดลอกลิ้งค์แนะนำเรียบร้อยแล้ว'})}
(function($){"use strict";var windows=$(window);var sticky=$('.header-sticky');windows.on('scroll',function(){var scroll=windows.scrollTop();if(scroll<50){sticky.removeClass('is-sticky');}else{sticky.addClass('is-sticky');}});var $headerSearchToggle=$('.header-search-toggle');var $headerSearchForm=$('.header-search-form');$headerSearchToggle.on('click',function(){var $this=$(this);if(!$this.hasClass('open')){$this.addClass('open').find('i').removeClass('ion-ios-search-strong').addClass('ion-android-close');$headerSearchForm.slideDown();}else{$this.removeClass('open').find('i').removeClass('ion-android-close').addClass('ion-ios-search-strong');$headerSearchForm.slideUp();}});var $backgroundImage=$('.bg-image');$backgroundImage.each(function(){var $this=$(this),$bgImage=$this.data('bg');$this.css('background-image','url('+$bgImage+')');});$('#mobile-menu-trigger').on('click',function(){$('#offcanvas-mobile-menu').removeClass('inactive').addClass('active');});$('#offcanvas-menu-close-trigger').on('click',function(){$('#offcanvas-mobile-menu').removeClass('active').addClass('inactive');});var $offCanvasNav=$('.offcanvas-navigation'),$offCanvasNavSubMenu=$offCanvasNav.find('.submenu2');$offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>');$offCanvasNavSubMenu.slideUp();$offCanvasNav.on('click','li a, li .menu-expand',function(e){var $this=$(this);if(($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/))&&($this.attr('href')==='#'||$this.hasClass('menu-expand'))){e.preventDefault();if($this.siblings('ul:visible').length){$this.parent('li').removeClass('active');$this.siblings('ul').slideUp();}else{$this.parent('li').addClass('active');$this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');$this.closest('li').siblings('li').find('ul:visible').slideUp();$this.siblings('ul').slideDown();}}});var $elementCarousel=$('.tf-element-carousel');var $html=$('html');var $body=$('body');var slickInstances=[];if($html.attr("dir")=="rtl"||$body.attr("dir")=="rtl"){$elementCarousel.attr("dir","rtl");}
$elementCarousel.each(function(index,element){var $this=$(this);var $options=typeof $this.data('slick-options')!=='undefined'?$this.data('slick-options'):'';var $spaceBetween=$options.spaceBetween?parseInt($options.spaceBetween,10):0,$rowSpace=$options.rowSpace?parseInt($options.rowSpace,10):0,$isCustomArrow=$options.isCustomArrow?$options.isCustomArrow:false,$customPrev=$isCustomArrow===true?($options.customPrev?$options.customPrev:''):'',$customNext=$isCustomArrow===true?($options.customNext?$options.customNext:''):'',$vertical=$options.vertical?$options.vertical:false,$focusOnSelect=$options.focusOnSelect?$options.focusOnSelect:false,$asNavFor=$options.asNavFor?$options.asNavFor:'',$fade=$options.fade?$options.fade:false,$autoplay=$options.autoplay?$options.autoplay:false,$autoplaySpeed=$options.autoplaySpeed?$options.autoplaySpeed:5000,$swipe=$options.swipe?$options.swipe:true,$swipeToSlide=$options.swipeToSlide?$options.swipeToSlide:true,$verticalSwiping=$options.verticalSwiping?$options.verticalSwiping:false,$arrows=$options.arrows?$options.arrows:false,$dots=$options.dots?$options.dots:false,$infinite=$options.infinite?$options.infinite:false,$centerMode=$options.centerMode?$options.centerMode:false,$centerPadding=$options.centerPadding?$options.centerPadding:'',$speed=$options.speed?parseInt($options.speed,10):1000,$appendArrows=$options.appendArrows?$options.appendArrows:$this,$prevArrow=$arrows===true?($options.prevArrow?'<span class="'+$options.prevArrow.buttonClass+'"><i class="'+$options.prevArrow.iconClass+'"></i></span>':'<button class="slick-prev">prev</span>'):'',$nextArrow=$arrows===true?($options.nextArrow?'<span class="'+$options.nextArrow.buttonClass+'"><i class="'+$options.nextArrow.iconClass+'"></i></span>':'<button class="slick-next">next</span>'):'',$rows=$options.rows?parseInt($options.rows,10):1,$rtl=$options.rtl||$html.attr('dir="rtl"')||$body.attr('dir="rtl"')?true:false,$slidesToShow=$options.slidesToShow?parseInt($options.slidesToShow,10):1,$slidesToScroll=$options.slidesToScroll?parseInt($options.slidesToScroll,10):1;var $responsiveSetting=typeof $this.data('slick-responsive')!=='undefined'?$this.data('slick-responsive'):'',$responsiveSettingLength=$responsiveSetting.length,$responsiveArray=[];for(var i=0;i<$responsiveSettingLength;i++){$responsiveArray[i]=$responsiveSetting[i];}
$this.addClass('slick-carousel-'+index);$this.parent().find('.slick-dots').addClass('dots-'+index);$this.parent().find('.slick-btn').addClass('btn-'+index);if($spaceBetween!=0){$this.addClass('slick-gutter-'+$spaceBetween);}
var $slideCount=null;$this.on('init',function(event,slick){$slideCount=slick.slideCount;if($slideCount<=$slidesToShow){$this.children('.slick-dots').hide();}});$this.slick({slidesToShow:$slidesToShow,slidesToScroll:$slidesToScroll,asNavFor:$asNavFor,autoplay:$autoplay,autoplaySpeed:$autoplaySpeed,speed:$speed,infinite:$infinite,rows:$rows,arrows:$arrows,dots:$dots,vertical:$vertical,focusOnSelect:$focusOnSelect,centerMode:$centerMode,centerPadding:$centerPadding,swipe:$swipe,swipeToSlide:$swipeToSlide,fade:$fade,appendArrows:$appendArrows,prevArrow:$prevArrow,nextArrow:$nextArrow,rtl:$rtl,responsive:$responsiveArray,});$('body').on('shown.bs.tab','a[data-toggle="tab"], a[data-toggle="pill"]',function(e){$this.slick('setPosition');});$('body').on('shown.bs.modal',function(e){$this.slick('setPosition');});});$('#price-range').slider({range:true,min:0,max:1000,values:[0,900],slide:function(event,ui){$('#price-amount').val('$'+ui.values[0]+' - $'+ui.values[1]);}});$('#price-amount').val('$'+$('#price-range').slider('values',0)+
' - $'+$('#price-range').slider('values',1));$('[data-countdown]').each(function(){var $this=$(this),finalDate=$(this).data('countdown');$this.countdown(finalDate,function(event){$this.html(event.strftime('<div class="single-countdown"><span class="single-countdown-time">%D</span><span class="single-countdown-text">Days</span></div><div class="single-countdown"><span class="single-countdown-time">%H</span><span class="single-countdown-text">Hours</span></div><div class="single-countdown"><span class="single-countdown-time">%M</span><span class="single-countdown-text">Mins</span></div><div class="single-countdown"><span class="single-countdown-time">%S</span><span class="single-countdown-text">Secs</span></div>'));});});$("#close-newsletter-popup").on("click",function(){$("#newsletter-popup-area").addClass("d-none");});$('select').niceSelect();$('.venobox').venobox({border:'10px',titleattr:'data-title',numeratio:true,infinigall:true});$('#sticky-sidebar').theiaStickySidebar({additionalMarginTop:120})
$('[data-shipping]').on('click',function(){if($('[data-shipping]:checked').length>0){$('#shipping-form').slideDown();}else{$('#shipping-form').slideUp();}})
$('.card-header a').on('click',function(){$('.card').removeClass('actives');$(this).parents('.card').addClass('actives');});$('[name="payment-method"]').on('click',function(){var $value=$(this).attr('value');$('.single-method p').slideUp();$('[data-method="'+$value+'"]').slideDown();})
$('#mc-form').ajaxChimp({language:'en',callback:mailChimpResponse,url:'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'});function mailChimpResponse(resp){if(resp.result==='success'){$('.mailchimp-success').html(''+resp.msg).fadeIn(900);$('.mailchimp-error').fadeOut(400);}else if(resp.result==='error'){$('.mailchimp-error').html(''+resp.msg).fadeIn(900);}}
if($('.contact-map').length){function initialize(){var mapOptions={zoom:14,scrollwheel:false,center:new google.maps.LatLng(40.730610,-73.935242)};var map=new google.maps.Map(document.getElementById('contact-map'),mapOptions);var marker=new google.maps.Marker({position:map.getCenter(),map:map,animation:google.maps.Animation.BOUNCE});}
google.maps.event.addDomListener(window,'load',initialize);}})(jQuery);