<?php
add_action( 'after_setup_theme', 'spa_the_theme_setup' );
//if (!function_exists('spa_the_theme_setup')):

function spa_the_theme_setup() /*function declear*/
{
	
	load_theme_textdomain( 'sis_spa', get_template_directory() . '/languages' );

	$spa_theme_options=
	array(	
			//Banner strip
			'slider_thumbnails_enable' =>'yes',
			'slider_bannerstrip_enable'=>'yes',
			'spa_bannerstrip_enable'=>'yes',
			'color_scheme_style'=>'default.css',
			

			
			//settings for main slider 
			'slider_entries_main'=> 10,
			'slide_effect_main'=>'slide',
			'animation_speed_main'=>'1000',
			'auto_slide_interval_main'=>'2000',
			'footer_tagline' => __('Copyright 2013. All Rights Reserved by','sis_spa'),
			'upload_image'=>'',
			'height'=>'70',
			'width'=>'150',
			'upload_image_favicon'=>'',
			'call_us'=>'18001234567',
			'call_us_text'=>'Call us on',
			'contact_address_title'=>__('Spa Salon','sis_spa'),
			'adress_line_one'=>__('8901 Marmora Road,','sis_spa'),
			'adress_line_two'=>__('Rajasthan,','sis_spa'),
			'adress_line_three'=>__('India.','sis_spa'),
			'phone_number_one'=>'+1800559658',
			'phone_number_two'=>'+1800559658',
			'fax_number'=>'+1800559658',
			'email_address'=>'themes@webriti.com',
			'open_hours_title'=>__('Opening Hours','sis_spa'),
			'tagline_title'=>__('Treatment we are offering','sis_spa'),
			'tagline_contents'=>__('In commodo pulvinar metus, id tristique massa ultrices at. Nulla auctor turpis ut mi pulvinar eu accumsan risus sagittis. Mauris nunc ligula, ullamcorper vitae accumsan eu, 
congue in nulla. Cras hendrerit mi quis nisi semper in sodales nisl faucibus. Sed quis quam eu ante ornare hendrerit.','sis_spa'),
			'tagline_item'=>4,
			
			'product_title'=>__('Spasalon Our product rang','sis_spa'),
			'product_contents'=>__('A SpaSalon Produc Heading Title In commodo pulvinar metus, id tristique massa ultrices at. Nulla auctor turpis ut mi pulvinar eu accumsan risus sagittis. Mauris nunc ligula, ullamcorper vitae accumsan eu, congue in nulla. Cras hendrerit mi quis nisi semper in sodales nisl faucibus. Sed quis quam eu ante ornare hendrerit. ','sis_spa'), 
			'spa_product_Title'=>array(	
			                    'product_title_px' => '42',
								'product_font_family' => 'MarketingScript',
								'product_font_style' => 'Normal',
								),
			'spa_menu_typography'=>array(	
			                    'navigation_px' => '13',
								'color_navigation' =>'#72797b',
								'font_family_navigation' =>'Raleway-Medium',
								'font_style_navigation' => 'Normal'
								),
			
			'spa_post_title_typography'=>array(	
			                    'post_title_px' => '24',
								'color_post_title' => '#353C3F',
								'font_family_post_title' => 'roboto',
								'font_style_post_title' => 'Normal'
								),
			'spa_post_entry_typography'=>array(
                    			'post_entry_px' => '12',
								'color_post_entry' => '#989495',
								'font_family_post_entry' => 'roboto',
								'font_style_post_entry' => 'Normal'
					            ),
			
			'spa_post_meta_typography'=>array(	
								'post_meta_px' => '12',
								'color_post_meta' => '#9a9a9a',
								'font_family_post_meta' => 'roboto',
								'font_style_post_meta' => 'Normal'
								),
		                       
		   'spa_sidebar_widget_titles'=>array(	
								'sidebar_widget_titles_px' => '18',
								'color_sidebar_widget_titles' => '#4A4849',
								'font_family_sidebar_widget_titles' => 'roboto',
								'font_style_sidebar_widget_titles' => 'Normal'
								),
			'spa_custom_css'=>'',
			'weekdays_time'=>'11:00 AM &ndash; 18:00 PM',
			'weekends_time'=>'11:00 AM &ndash; 18:00 PM',
			'map'=>"https://maps.google.co.in/?ll=25.395753,76.074692&spn=0.743101,1.674042&t=m&z=10",
			'spa_slider_slug' => 'spa-slider',
			'spa_services_slug' => 'spa-service',
			'spa_service_category_slug' => 'service-categories',
			'spa_team_slug' => 'spa-team',
			'spa_products_slug' => 'spa-products',
			'spa_products_category_slug' => 'product-categories',
			'front_page_data'=>array('slider','Service Section','product section'),
			);
		
		$current_theme_options = get_option('spa_theme_options'); 		
		if($current_theme_options)
		{ 	
			$spa_theme_options = array_merge($spa_theme_options, $current_theme_options);
			update_option('spa_theme_options',$spa_theme_options);				
		}
		else
		{
			add_option('spa_theme_options',$spa_theme_options); 
		}
		
		//add_option('spa_theme_options',$spa_theme_options); 
	

	// code for option pannel
	require_once('option_pannel/option_pannel.php' );
	register_nav_menus(
			array( 'header-menu' => __('Header Menu','sis_spa'),
				   'footer-menu' => __('Footer Menu','sis_spa')
				 ));

	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );	
	add_editor_style();

}
?>