<?php
add_action('admin_menu', 'spa_admin_menu_pannel'); 
function spa_admin_menu_pannel()
{	$page=add_theme_page( 'spa', 'Option Panel', 'edit_theme_options', 'spa', 'spa_option_panal_function' ); 
 	add_action('admin_print_styles-'.$page, 'spa_admin_enqueue_script');
}
function spa_option_panal_function()
{ ?>

<div class="wrap" id="framework_wrap">
	<div class="icon32" id="icon-options-general"></div>
    <h2><?php _e('Spa Theme Options','sis_spa');?>
		<span  style="float:right;">
		<a target="_blank" href="http://webriti.com/themes/documentation/spasalon/" id="theme_documentation" ><?php _e('Check the Documentation ','sis_spa');?></a></span>
	</h2>
	 
    <div id="content_wrap">
        <div class="info top-info is-option-page"><a class="toggle_tabs" href=""><?php _e('Tabs','sis_spa');?></a>
			<div class="top-layout-bar"></div>
        </div><div class="ajax-message"></div>
		<div id="content">
			<div id="options_tabs" class="ui-tabs ">
				<ul class="options_tabs ui-tabs-nav" role="tablist">
					<li class="active" role="tab" tabindex="0" aria-controls="option_general_default" aria-labelledby="ui-id-1" aria-selected="true"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1"><?php _e('General','sis_spa');?></a><span></span></li>
					<li role="tab" tabindex="-1" aria-controls="option_color_header" aria-labelledby="ui-id-5" aria-selected="false"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-5"><?php _e('Home','sis_spa');?></a><span></span></li>
					<li  role="tab" tabindex="-1" aria-controls="option_logo_header" aria-labelledby="ui-id-3" aria-selected="false"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-3"><?php _e('Home Page Slider','sis_spa');?></a><span></span></li>
					<li role="tab" tabindex="-1" aria-controls="option_layout_settings" aria-labelledby="ui-id-8" aria-selected="false"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-8"><?php _e('Home Layout Settings','sis_spa');?></a><span></span></li>					
					<li  role="tab" tabindex="-1" aria-controls="option_demo_header" aria-labelledby="ui-id-2" aria-selected="true"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2"><?php _e('Typography','sis_spa');?></a><span></span></li>  
					<li role="tab" tabindex="-1" aria-controls="option_color_header1" aria-labelledby="ui-id-6" aria-selected="false"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-6"><?php _e('Contact Page Settings','sis_spa');?></a><span></span></li>
					<li role="tab" tabindex="-1" aria-controls="option_slug_settings" aria-labelledby="ui-id-7" aria-selected="false"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-7"><?php _e('Post Type Slug Settings','sis_spa');?></a><span></span></li>
					<li  role="tab" tabindex="-1" aria-controls="option_header" aria-labelledby="ui-id-4" aria-selected="false"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-4"><?php _e('Footer Customization','sis_spa');?> </a><span></span></li> 
					<li  role="tab" tabindex="-1" aria-controls="option_banner_header" aria-labelledby="ui-id-9" aria-selected="false"><a href="#" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-9"><?php _e('Banner Customization','sis_spa');?> </a><span></span></li> 
					
				</ul>				
				<?php require_once('general_settings.php'); ?>
				<?php require_once('typography.php'); ?>
				<?php require_once('homepage_slider.php'); ?>
				<?php require_once('footer_customization.php'); ?>
				<?php require_once('home.php');?>
				<?php require_once('contact_page_settings.php');?>
				<?php require_once('option_sucess_css.php'); ?>
				<?php require_once('post_type_slug_settings.php'); ?>
				<?php require_once('home_layout_setting.php'); ?>
				<?php require_once('banner.php'); ?>
				<br class="clear">
			</div>
		</div>
    </div>
</div>
<?php  } ?>