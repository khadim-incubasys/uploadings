$(document).ready(function() {
	
	var win_width = $(window).width();
	//console.log(win_width);
	//if( win_width <= 767 ){
		//alert("heloooo");
		//$('#header #nav ul li').on("click" ,function(e){
			//e.preventDefault();
			//setTimeout(function(){
				//alert("heloo");
			  
			//}, 1000);
			
		//});
	//}
	
	
	
	
	//FOR SAME HEIGHT
	var class_name = $('#services ul a, .categories li img');
	var max_height = 0;
	$(class_name).each(function(index, data){
		if($(data).height() > max_height){
			max_height = $(data).height();
		}
	});
	$(class_name).height(max_height);
    
	//FOR SAME HEIGHT
	var class_name = $('#misc .twocols .txt-holder');
	var max_height = 0;
	$(class_name).each(function(index, data){
		if($(data).height() > max_height){
			max_height = $(data).height();
		}
	});
	$(class_name).height(max_height);
	
	
	//TO PREVENT DEFAULT BEHAVIOR
	$('.filter-nav a').click(function(e){
		e.preventDefault();
	});

	//FOR SMOOTH SCROLLING
	var header_height = $('#header').height();
	$('.header-slider').css('padding-top', header_height);
	$('#header a.scroll').click(function(){
		$('#header li').removeClass('active');
		$(this).closest('li').addClass('active');
		$('html, body').animate({
			scrollTop: $( $(this).attr('href') ).offset().top - header_height
		}, 500);
		if( win_width <= 767 ){
			$(".nav-opener").trigger('click');	
		}
		
		return false;
	});
	
	//FOR BURGER MENU
	$('.nav-opener').click(function(e){
		e.preventDefault();
		$(this).toggleClass('active');
		$('#nav ul').slideToggle(500);
	});
		
	//FOR CHANGING HEADER COLOR
		var sections = $('section')
	  , nav = $('nav')
	  , nav_height = $('#header').outerHeight();
	
	$(window).on('scroll', function () {
	  var cur_pos = $(this).scrollTop();
	
	  sections.each(function() {
		var top = $(this).offset().top - nav_height,
			bottom = top + $(this).outerHeight();
	
		if (cur_pos >= top && cur_pos <= bottom) {
		  console.log($(this).offset().top );
		  	var v = $(this).attr('id');
			
			$('#header').removeClass(function(index, klass) { 
			  return klass.replace(/(^|\s)+staticClass\s+/, ''); 
			});
			if(v == "header-area"){
				$('#header').addClass('header-area');
				
			}
			if(v == "about"){
				$('#header').addClass('about-header');
			}
			if(v == "services"){
				$('#header').addClass('services-header');
			}
			if(v == "case-studies"){
				$('#header').addClass('case-studies-header');
			}
			if(v == "gallery"){
				$('#header').addClass('gallery-header');
			}
			if(v == "contact"){
				$('#header').addClass('contact-header');
			}
		}
		else{
			var first = jQuery('.about').height();
			console.log('position:'+cur_pos);
			if(cur_pos <= first)
			{
				$('#header').removeClass(function(index, klass) { 
				  return klass.replace(/(^|\s)+staticClass\s+/, ''); 
				});
				$('#header').addClass('header-area');
			}
		}
	  });
	  
	});
	
	
	
	
//FOR POPUPS
	$('.btn-popup').click(function(event){
		event.preventDefault();
		var btn_popup_id =  $(this).attr('href');
		$(btn_popup_id).addClass('open');
		$('#wrapper').addClass('fixed');
		$('#wrapper').css({
			'filter' : 'blur(5px)',
			'-webkit-filter' : 'blur(5px)',
			'-moz-filter' : 'blur(5px)',
			'-ms-filter' : 'blur(5px)',
			'-o-filter' : 'blur(5px)'
		});
	});
	$('.btn-close').click(function(event){
		event.preventDefault(event);
		$('#wrapper').removeClass('fixed');
		$('.popup').removeClass('open');
		$('.popup-holder').css('transform', 'translate(0,-100%)')
		$('.popup-holder').css({'transform': 'translate(0,-100%)', 'opacity': '0', 'z-index': '-1'});
		$('#wrapper').css({
			'filter' : 'blur(0)',
			'-webkit-filter' : 'blur(0)',
			'-moz-filter' : 'blur(0)',
			'-ms-filter' : 'blur(0)',
			'-o-filter' : 'blur(0)'
		});
	});
	
//FOR PRODUCTS SLIDER IN POPUP ON RENTALS PAGE
	var slide_numbs = $('.products-slider .slide').length;
	var slide_width = $('.products-slider .slide').innerWidth();
	var total_width_of_slides = slide_numbs * slide_width;
	$('.products-slideset').width(total_width_of_slides);
	$('.next-btn').click(function(e){
		e.preventDefault();
		var slideset_attr = $('.products-slideset').attr('margin-left');
		var sliding_margin = parseInt( slideset_attr)+parseInt(slide_width);
		if(sliding_margin >= total_width_of_slides){
				sliding_margin = 0;
			}
		$('.products-slideset').attr('margin-left', sliding_margin);
		$('.products-slideset').css({
			'margin-left' : '-'+sliding_margin+'px'
		});
	});
	$('.prev-btn').click(function(e){
		e.preventDefault();
		var slideset_attr = $('.products-slideset').attr('margin-left');
		var sliding_margin = parseInt( slideset_attr)-parseInt(slide_width);
		if(sliding_margin >= total_width_of_slides){
				sliding_margin = 0;
		}
		$('.products-slideset').attr('margin-left', sliding_margin);
		$('.products-slideset').css({
			'margin-left' : '-'+sliding_margin+'px'
		});
	});
	
});