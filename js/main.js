(function ($) {
 "use strict";
    
$(document).ready(function(){
	
	
/*---------------------
 jQuery MeanMenu
--------------------- */
	jQuery('nav#dropdown').meanmenu();		
    
 /*---------------------
 tooltip
--------------------- */	
    $('[data-toggle="tooltip"]').tooltip(); 	
   
/*----------------------------
 instagram-curosel
------------------------------ */
    $(".instagram-curosel").owlCarousel({
		autoPlay: false,
		slideSpeed:2000,
		items : 5,
		pagination:false,
		navigation:true,
		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [979,3],
		itemsTablet: [768,3],
		itemsMobile : [767,1]
    });
  
/*----------------------------
 featured-post-curosel
------------------------------ */
    $(".featured-post-curosel").owlCarousel({
		autoPlay: true,
		slideSpeed:2000,
		items : 1,
		pagination:false,
		navigation:true,
		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsMobile : [767,1]
    });

/*----------------------------
 latest-comments-curosel
------------------------------ */
    $(".latest-comments-curosel").owlCarousel({
		autoPlay: true,
		slideSpeed:2000,
		items : 1,
		pagination:false,
		navigation:true,
		navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [979,1],
		itemsMobile : [767,1]
    });

/*---------------------
 countdown
--------------------- */
	$('[data-countdown]').each(function() {
		var $this = $(this), finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function(event) {
		$this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hours </p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>minutes</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>seconds</p></span>'));
		});
	}); 

/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
		animation: 'fade'
	}); 
	



});
       
})(jQuery);    