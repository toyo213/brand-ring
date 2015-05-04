 jQuery(window).load(function(){ 
	jQuery('.tab-pane:first-child').addClass('active');    
}); 
 
 /*jQuery use for main slider use on home page.*/
 jQuery(window).load(function(){
 
	//jQuery(function() {  $jQuery('#about').addClass('active'); });
	//jQuery('.tab-content:first-child').addClass('active');
    
      alert('sdfsdfsd');
       jQuery('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          jQuery('body').removeClass('loading');
        }
      });
    });



	
/*jQuery for products thumbnail slider use on home page.*/
	 jQuery(window).load(function(){
       jQuery('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
		slideshow:false,
        itemWidth: 233,
		itemMargin: 0,
		scroll: 1,
		min: 2,
		max: 5,
        start: function(slider){
           jQuery('body').removeClass('loading');
        }
      });
    });