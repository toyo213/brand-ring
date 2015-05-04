/*Banner Customization save value 1*/
function datasave_banner(){
	
	jQuery("#spa_banner_settings").val("1");
	jQuery.ajax({
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_option_banner_header').serialize(),
		success : function(data)
		{   jQuery('#success_message_save_banner').show();
			jQuery("#success_message_save_banner").fadeOut(5000);
		}			
    });
}
/*save value 2*/
function reset_data_banner(){
	jQuery("#spa_banner_settings").val("2");
	jQuery.ajax({ 
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_option_banner_header').serialize(),
		success : function(data)
		{   jQuery('#success_message_reset_banner').show();
		   jQuery("#success_message_reset_banner").fadeOut(5000);
		}		
   });
}
/*general setting save value 1*/
function datasave_generalsetting(){
	jQuery("#spa_settings_save").val("1"); 
	jQuery.ajax({
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_general_setting').serialize(),
		success : function(data)
		{   jQuery('#success_message_save_general').show();
			jQuery("#success_message_save_general").fadeOut(5000);
		}			
    });
}
/*save value 2*/
function reset_data_generalsetting(){
	jQuery("#spa_settings_save").val("2");
	jQuery.ajax({ 
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_general_setting').serialize(),
		success : function(data)
		{   jQuery('#success_message_reset_general').show();
		   jQuery("#success_message_reset_general").fadeOut(5000);
		}		
   });
}
/*end general setting*/

/*footer customize of save value 1*/

function datasave_footer()
{   jQuery.ajax({
	url:'admin.php?page=spa',
	type:'post',
	data : jQuery('#spa_footer_form').serialize(),
	success : function(data){
			jQuery('#success_message_save_footer').show();
			jQuery("#success_message_save_footer").fadeOut(5000);
		}
	});
}

/*footer customize save value 2*/
function reset_data_footersetting() {
	jQuery("#spa_footer_customization").val("2");
    jQuery.ajax({ 
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_footer_form').serialize(),
		success : function(data){
		   jQuery('#success_message_reset_footer').show();
		   jQuery("#success_message_reset_footer").fadeOut(5000);
		}	
    });
}
/*end of footer customize*/

/*ContactPage of save value 1*/

function datasave_contact()
{   jQuery.ajax({
	url:'admin.php?page=spa',
	type:'post',
	data : jQuery('#spa_contact_form').serialize(),
	success : function(data){
			jQuery('#success_message_save_contact').show();
			jQuery("#success_message_save_contact").fadeOut(5000);
		}
	});
}

/*ContactPagesave value 2*/
function reset_data_contact() {
	jQuery("#spa_contactpage_settings").val("2");
    jQuery.ajax({ 
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_contact_form').serialize(),
		success : function(data){
		   jQuery('#success_message_reset_contact').show();
		   jQuery("#success_message_reset_contact").fadeOut(5000);
		}	
    });
}
/*end of */
/*home page slider save value 1*/
function datasave_slider() {
	jQuery("#spa_sliders_save").val("1");
	jQuery.ajax({
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_homepage_slider').serialize(),
		success : function(data){
			jQuery('#success_message_save_slider').show();
			jQuery("#success_message_save_slider").fadeOut(5000);
		}
   });
}

/*home page slider value 2*/
function reset_data_slider() {
 jQuery("#spa_sliders_save").val("2");
		jQuery.ajax({
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_homepage_slider').serialize(),
		success : function(data){
		   jQuery('#success_message_reset_slider').show();
		   jQuery("#success_message_reset_slider").fadeOut(5000);
		}
    });
}
/*typography page save value 1*/
function datasave_typography() {
	jQuery("#spa_typography_save").val("1"); 
	jQuery.ajax({
	   url:'admin.php?page=spa',
	   type:'post',
	   data : jQuery('#spa_typography_form').serialize(),
	   success : function(data)
		{	jQuery('#success_message_save_typography').show();
			jQuery("#success_message_save_typography").fadeOut(5000);
		}	
   });
}
/*typography save value 2*/
function reset_data_typography() {
 jQuery("#spa_typography_save").val("2"); 
	jQuery.ajax({ 
		url:'admin.php?page=spa',
		type:'post',
		data : jQuery('#spa_typography_form').serialize(),
		success : function(data)
		{	jQuery('#success_message_reset_typography').show();
			jQuery("#success_message_reset_typography").fadeOut(5000);
		}
   });
}
/*end of typography save value*/
/*Home setting save value 1*/
function datasave_homesetting() {
jQuery("#spa_home_settings_save").val("1");
       jQuery.ajax({	        
			url:'admin.php?page=spa',
			type:'post',
			data : jQuery('#spa_home_setting').serialize(),
			success : function(data)
			{	jQuery('#success_message_save_home').show();
				jQuery("#success_message_save_home").fadeOut(5000);
			}	
       });
}
/*save value 2*/
function reset_data_homesetting() {
 jQuery("#spa_home_settings_save").val("2"); 
       jQuery.ajax({ 
			url:'admin.php?page=spa',
			type:'post',
			data : jQuery('#spa_home_setting').serialize(),
			success : function(data)
			{   jQuery('#success_message_reset_home').show();
				jQuery("#success_message_reset_home").fadeOut(5000);
			}	
       });
}
/*end home setting*/

/*Slug Settings for Posts Type*/
function datasave_slugsetting() {
jQuery("#spa_slug_settings_save").val("1");
       jQuery.ajax({	        
			url:'admin.php?page=spa',
			type:'post',
			data : jQuery('#slug_settings').serialize(),
			success : function(data)
			{	jQuery('#success_message_save_slug').show();
				jQuery("#success_message_save_slug").fadeOut(5000);
			}	
       });
}
/*save value 2*/
function reset_data_slugsetting() {
 jQuery("#spa_slug_settings_save").val("2"); 
       jQuery.ajax({ 
			url:'admin.php?page=spa',
			type:'post',
			data : jQuery('#slug_settings').serialize(),
			success : function(data)
			{   jQuery('#success_message_reset_slug').show();
				jQuery("#success_message_reset_slug").fadeOut(5000);
			}	
       });
}

/*menu navigation color picker js */
 jQuery(document).ready(function() {
    var f = jQuery.farbtastic('#picker_navigation');
    var p = jQuery('#picker_navigation').css('opacity', 0.25);
    var selected;
    jQuery('.colorwell')
      .each(function () { f.linkTo(this); jQuery(this).css('opacity', 0.75); })
      .focus(function() {
        if (selected) {
         jQuery(selected).css('opacity', 0.75).removeClass('colorwell-selected');
        }
        f.linkTo(this);
        p.css('opacity', 1);
        jQuery(selected = this).css('opacity', 1).addClass('colorwell-selected');		
      });
	jQuery(document).mousedown( function() { jQuery('#picker_navigation').hide(); });
	jQuery("input[name='color_navigation']").click(function(){ jQuery('#picker_navigation').show(); });
});

/*Post Title color picker js */
 jQuery(document).ready(function() {    
    var f = jQuery.farbtastic('#picker_post_title');
    var p = jQuery('#picker_post_title').css('opacity', 0.25);
    var selected;
    jQuery('.colorwell')
      .each(function () { f.linkTo(this); jQuery(this).css('opacity', 0.75); })
      .focus(function() {
        if (selected) {
         jQuery(selected).css('opacity', 0.75).removeClass('colorwell-selected');
        }
        f.linkTo(this);
        p.css('opacity', 1);
        jQuery(selected = this).css('opacity', 1).addClass('colorwell-selected');
      });	  
	jQuery(document).mousedown( function() {jQuery('#picker_post_title').hide(); });
	jQuery("input[name='color_post_title']").click(function(){ jQuery('#picker_post_title').show(); });
});
/*end of Post Title typographi*/

/*Post Excerpt typography color picker */
jQuery(document).ready(function() { 
    var f = jQuery.farbtastic('#picker_post_entry');
    var p = jQuery('#picker_post_entry').css('opacity', 0.25);
    var selected;
    jQuery('.colorwell')
      .each(function () { f.linkTo(this); jQuery(this).css('opacity', 0.75); })
      .focus(function() {
        if (selected) {
         jQuery(selected).css('opacity', 0.75).removeClass('colorwell-selected');
        }
        f.linkTo(this);
        p.css('opacity', 1);
        jQuery(selected = this).css('opacity', 1).addClass('colorwell-selected');
      });
	jQuery(document).mousedown( function() { jQuery('#picker_post_entry').hide(); });
	jQuery("input[name='color_post_entry']").click(function(){ jQuery('#picker_post_entry').show(); });
});
/*end of Post Excerpt typography*/

/*Post Meta typographi color picker js  */
jQuery(document).ready(function() {  
    var f = jQuery.farbtastic('#picker_post_meta');
    var p = jQuery('#picker_post_meta').css('opacity', 0.25);
    var selected;
    jQuery('.colorwell')
      .each(function () { f.linkTo(this); jQuery(this).css('opacity', 0.75); })
      .focus(function() {
        if (selected) {
         jQuery(selected).css('opacity', 0.75).removeClass('colorwell-selected');
        }
        f.linkTo(this);
        p.css('opacity', 1);
        jQuery(selected = this).css('opacity', 1).addClass('colorwell-selected');
      });
	jQuery(document).mousedown( function() { jQuery('#picker_post_meta').hide(); });
	jQuery("input[name='color_post_meta']").click(function(){jQuery('#picker_post_meta').show();});
});
/*end of Post Meta*/

/*Sidebar Widget Titles typographi color picker js */
jQuery(document).ready(function() {   
    var f = jQuery.farbtastic('#picker_sidebar_widget_titles');
    var p = jQuery('#picker_sidebar_widget_titles').css('opacity', 0.25);
    var selected;
    jQuery('.colorwell')
      .each(function () { f.linkTo(this); jQuery(this).css('opacity', 0.75); })
      .focus(function() {
        if (selected) {
         jQuery(selected).css('opacity', 0.75).removeClass('colorwell-selected');
        }
        f.linkTo(this);
        p.css('opacity', 1);
        jQuery(selected = this).css('opacity', 1).addClass('colorwell-selected');
      });
	jQuery(document).mousedown( function() {jQuery('#picker_sidebar_widget_titles').hide();	});
	jQuery("input[name='color_sidebar_widget_titles']").click(function(){ jQuery('#picker_sidebar_widget_titles').show(); });
});

/*end of Sidebar Widget Titles*/
/*typographi Footer Widget Titles color picker js 
jQuery(document).ready(function(){   
		var f = jQuery.farbtastic('#picker_footer_widget_titles');
		var p = jQuery('#picker_footer_widget_titles').css('opacity', 0.25);
		var selected;
		jQuery('.colorwell')
		  .each(function () { f.linkTo(this); jQuery(this).css('opacity', 0.75); })
		  .focus(function() {
			if (selected) {
			 jQuery(selected).css('opacity', 0.75).removeClass('colorwell-selected');
			}
			f.linkTo(this);
			p.css('opacity', 1);
			jQuery(selected = this).css('opacity', 1).addClass('colorwell-selected');
		  });
		jQuery(document).mousedown( function() {jQuery('#picker_footer_widget_titles').hide();});
		jQuery("input[name='home_color_title']").click(function(){jQuery('#picker_footer_widget_titles').show();});
});
/*end typographi Footer Widge*/

/*general option color picker js 

 jQuery(document).ready(function() {  
		var f = jQuery.farbtastic('#picker_title');
		var p = jQuery('#picker_title').css('opacity', 0.25);
		var selected;
		jQuery('.colorwell')
		  .each(function () { f.linkTo(this); jQuery(this).css('opacity', 0.75); })
		  .focus(function() {
			if (selected) {
			 jQuery(selected).css('opacity', 0.75).removeClass('colorwell-selected');
			}
			f.linkTo(this);
			p.css('opacity', 1);
			jQuery(selected = this).css('opacity', 1).addClass('colorwell-selected');
		  });
		jQuery(document).mousedown( function() {jQuery('#picker_title').hide();	});
		jQuery("input[name='color_title']").click(function(){ jQuery('#picker_title').show();});
	});
/*end of site title*/
/*typographi Footer Widget Titles color picker js 
jQuery(document).ready(function(){   
		var f = jQuery.farbtastic('#picker_footer_widget_titles');
		var p = jQuery('#picker_footer_widget_titles').css('opacity', 0.25);
		var selected;
		jQuery('.colorwell')
		  .each(function () { f.linkTo(this); jQuery(this).css('opacity', 0.75); })
		  .focus(function() {
			if (selected) {
			 jQuery(selected).css('opacity', 0.75).removeClass('colorwell-selected');
			}
			f.linkTo(this);
			p.css('opacity', 1);
			jQuery(selected = this).css('opacity', 1).addClass('colorwell-selected');
		  });
		jQuery(document).mousedown( function() { jQuery('#picker_footer_widget_titles').hide();	});	  
		jQuery("input[name='home_color_title']").click(function(){ jQuery('#picker_footer_widget_titles').show(); });
	}); */
	
	 jQuery(function() {
    jQuery( "#accordion" ).accordion({
	heightStyle: "content",
	collapsible: true
	});
  });
	