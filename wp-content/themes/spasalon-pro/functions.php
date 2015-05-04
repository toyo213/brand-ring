<?php 
	define('WEBRITI_TEMPLATE_DIR',get_template_directory());
	define('WEBRITI_THEME_FUNCTIONS_PATH',WEBRITI_TEMPLATE_DIR.'/functions');
	
	
	//code for shoercode .....................
	define( 'WEBR_FRAMEWORK_DIR', get_template_directory_uri().'/functions' ); 

require_once('functions/webr_framework.php');
//wp title tag starts here
	function spa_head( $title, $sep )
	{	global $paged, $page;		
		if ( is_feed() )
			return $title;
		// Add the site name.
		$title .= get_bloginfo( 'name' );
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( _e( 'Page', 'sis_spa' ), max( $paged, $page ) );
		return $title;
	}	
	add_filter( 'wp_title', 'spa_head', 10, 2 );
// code for default data 

if ( ! isset( $content_width ) ) $content_width = 900;

		require_once ( WEBRITI_THEME_FUNCTIONS_PATH . '/Menu_Walker/default_menu_walker.php' );//default menu 
		require_once ( WEBRITI_THEME_FUNCTIONS_PATH. '/Menu_Walker/spasalon_nav_walker.php' );//custom menu
		require_once ( WEBRITI_THEME_FUNCTIONS_PATH . '/Excerpt/excerpt_length.php' );// code for limit the length of excerpt
		require_once ( WEBRITI_THEME_FUNCTIONS_PATH. '/Pagination/pagination.php' );
		require_once ( WEBRITI_THEME_FUNCTIONS_PATH . '/resize_image/resize_image.php' );
		require_once(WEBRITI_THEME_FUNCTIONS_PATH .'/scripts/scripts.php');
		require_once(get_template_directory() .'/default_data.php');
		require_once(WEBRITI_THEME_FUNCTIONS_PATH .'/cpt/cpt.php');
		require_once(WEBRITI_THEME_FUNCTIONS_PATH.'/meta-box/metabox.php');
		require_once(WEBRITI_THEME_FUNCTIONS_PATH.'/comments/commentbox.php');
		require_once(WEBRITI_THEME_FUNCTIONS_PATH.'/woo/woocommerce.php');
		 
			function spa_widgets_init() {
			/*sidebar*/
			register_sidebar( array(
					'name' => __( ' Sidebar', 'sis_spa' ),
					'id' => 'sidebar-primary',
					'description' => __( 'The primary widget area', 'sis_spa' ),
					'before_widget' => ' <div>',
					'after_widget' => '</div>',
					'before_title' => ' <div id="widget-title" class="span12"><h4 class="spa-widget-title">',
					'after_title' => '</h4></div>',
				) );
			register_sidebar( array(
					'name' => __( 'Footer Widget Area', 'sis_spa' ),
					'id' => 'footer-widget-area',
					'description' => __( 'footer widget area', 'sis_spa' ),
					'before_widget' => '<div class="span3 footer_widget">',
					'after_widget' => '</div>',
					'before_title' => '<div class="widget_title"><h2>',
					'after_title' => '</h2></div>',					
				) );				
			}	                     
			add_action( 'widgets_init', 'spa_widgets_init' );


			//enqueue  Scripts---------------------------------------------------------------------------------
			add_action('wp_enqueue_scripts','spa_enqueue_script'); 
			function spa_enqueue_script() {

				$current_options=get_option('spa_theme_options');				
				$default=get_template_directory_uri().'/css/'.$current_options['color_scheme_style'];
				wp_enqueue_style('spa-color-css', $default);				
				
				
				require_once('option_pannel/custom_style.php');				
				wp_enqueue_style('spa_custom-responsive', get_template_directory_uri().'/css/custom-responsive.css');
				wp_enqueue_style('spa_bootstrap', get_template_directory_uri().'/css/bootstrap.css');
				wp_enqueue_style('spa_bootstrap-responsive', get_template_directory_uri().'/css/bootstrap-responsive.css');
				wp_enqueue_style('spa_docs', get_template_directory_uri().'/css/docs.css');
				wp_enqueue_style('spa_flexslider', get_template_directory_uri().'/css/flexslider.css'); 
				wp_enqueue_style('spa_flexsliderdemo', get_template_directory_uri().'/css/flexslider-demo.css');  
				wp_enqueue_style('spa_font', get_template_directory_uri().'/css/font/font.css'); 
					 
				wp_enqueue_script('spa_menu', get_template_directory_uri().'/js/menu/menu.js',array('jquery'));
				wp_enqueue_script('spa-boot-menus', get_template_directory_uri().'/js/menu/bootstrap.min.js'); 
				wp_enqueue_script('flexmain', get_template_directory_uri().'/js/flex/jquery.flexslider.js');
				wp_enqueue_script('flexslider-setting', get_template_directory_uri().'/js/flex/flexslider-setting.php');
				wp_enqueue_script('flexslider-setting', get_template_directory_uri().'/js/flex/flexslider-setting.js');			
				// webriti tab js 
				wp_enqueue_script('webriti-tab-js', get_template_directory_uri().'/js/webriti-tab-js.js'); 
				
				/******** style switcher js and css *********/
				wp_enqueue_style('switcher', get_template_directory_uri().'/css/switcher/switcher.css');
				wp_enqueue_style('font-awesome', get_template_directory_uri().'/font-awesome-4.0.0/css/font-awesome.css');				
				wp_enqueue_script('switcherjs', get_template_directory_uri().'/js/color_scheme/switcher.js'); 
				wp_enqueue_script('spectrumjs', get_template_directory_uri().'/js/color_scheme/spectrum.js'); 
				/******** style switcher js and css end *********/				  
				 
             if(('spa_services' == get_post_type())||('spa_slider'==get_post_type())||('post'==get_post_type())){
			   wp_enqueue_script('pikachoose', get_template_directory_uri().'/js/pikachoose/jquery.pikachoose.min.js');
			   wp_enqueue_script('pikachoose1', get_template_directory_uri().'/js/pikachoose/pikachoose.js');
			   }
			}
?>