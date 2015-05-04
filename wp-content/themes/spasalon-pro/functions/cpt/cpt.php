<?php
/*code for custom post type and meta box*/
			
			
			function create_post_type_spa_slider() {
			$current_options = get_option('spa_theme_options');
			$spa_slider_slug = $current_options['spa_slider_slug'];
			register_post_type( 'spa_slider',
			array(
				'labels' => array(
				'name' => 'Featured Services / Slider',
				'singular_name' => 'Featured Services',
				'add_new' => __('Add New Service', 'sis_spa'),
				'add_new_item' => __('Add New Service','sis_spa'),
				'edit_item' => __('Add New Service','sis_spa'),
				'new_item' => __('New Link','sis_spa'),
				'all_items' => __('All Featured Services','sis_spa'),
				'view_item' => __('View Link','sis_spa'),
				'search_items' => __('Search Links','sis_spa'),
				'not_found' =>  __('No Links found','sis_spa'),
				'not_found_in_trash' => __('No Links found in Trash','sis_spa'), 
				),
				'supports' => array('title','thumbnail','editor'),
				'show_in_nav_menus' => false,
				'public' => true,
				'menu_position' => 11,
				'rewrite' => array('slug' => $spa_slider_slug),
				'public' => true,
				'menu_icon' => get_template_directory_uri() . '/images/slides.png',
				)
			);
		}
		add_action( 'init', 'create_post_type_spa_slider' );
		// code for custom post type  team
		add_action( 'init', 'create_post_type_team' );
		
		function create_post_type_team() {
		$current_options = get_option('spa_theme_options');
		$spa_team_slug = $current_options['spa_team_slug'];
		register_post_type( 'spa_team',
		array(
			'labels' => array(
			'name' => 'Our Team',
			'singular_name' => 'Our Team',
			'add_new' => __('Add New ', 'sis_spa'),
			'add_new_item' => __('Enter member name','sis_spa'),
			'edit_item' => __('Add member name','sis_spa'),
			'new_item' => __('New Link','sis_spa'),
			'all_items' => __('All Member','sis_spa'),
			'view_item' => __('View Link','sis_spa'),
			'search_items' => __('Search Links','sis_spa'),
			'not_found' =>  __('No Links found','sis_spa'),
			'not_found_in_trash' => __('No Links found in Trash','sis_spa'), 
								),
			'supports' => array('title','thumbnail',),
			'show_in_nav_menus' => false,
			'public' => true,
			'rewrite' => array('slug' => $spa_team_slug),
			'menu_position' => 11,
			'menu_icon' => get_template_directory_uri() . '/images/services.png',
		)
		);
		}
 
		// code for custom post type  services
		  add_action( 'init', 'create_post_type_services' );

		function create_post_type_services() {
		$current_options = get_option('spa_theme_options');
			$spa_services_slug = $current_options['spa_services_slug'];
			register_post_type( 'spa_services',
				array(
					'labels' => array(
						'name' => 'Basic Services',
						'singular_name' => 'Basic Services',
						'add_new' => __('Add New Service', 'sis_spa'),
						'add_new_item' => __('Add new service','sis_spa'),
						'edit_item' => __('Add new service','sis_spa'),
						'new_item' => __('New Link','sis_spa'),
						'all_items' => __('All Services','sis_spa'),
						'view_item' => __('View Link','sis_spa'),
						'search_items' => __('Search Links','sis_spa'),
						'not_found' =>  __('No Links found','sis_spa'),
						'not_found_in_trash' => __('No Links found in Trash','sis_spa'), 
						
					),
						'supports' => array('title','editor','thumbnail','comments'),
						'show_in_nav_menus' => false,
					'public' => true,
					'menu_position' => 11,
					'rewrite' => array('slug' => $spa_services_slug),
					'menu_icon' => get_template_directory_uri() . '/images/services.png',
					
				)
			);
		}
		function create_services_taxonomy() 
		{	$current_options = get_option('spa_theme_options');
			$spa_service_category_slug = $current_options['spa_service_category_slug'];
			register_taxonomy(
				'services_categories',
				'spa_services',
				array(
					'hierarchical' => true,
					'show_in_nav_menus' => false,
					'label' => 'Services Categories',
					'show_in_nav_menus' => true,
					'query_var' => true,
					'rewrite' => array('slug' => $spa_service_category_slug )
					)
			);
			/*wp_insert_term('Misc','services_categories',array(
			'description'=> 'Default Category',
			'slug' => 'Misc',
			));*/
			//Default category id		
			$defualt_tex_service_id = get_option('custom_texo_service_id');
			//quick update category
			if((isset($_POST['action'])) && (isset($_POST['taxonomy']))){		
				wp_update_term($_POST['tax_ID'], 'services_categories', array(
				  'name' => $_POST['name'],
				  'slug' => $_POST['slug']
				));	
				update_option('custom_texo_service_id', $defualt_tex_service_id);
			} 
			else 
			{ 	//insert default category 
				if(!$defualt_tex_service_id){
					wp_insert_term('Misc','services_categories', array('description'=> 'Default Category','slug' => 'Misc'));
					$Current_text_id = term_exists('Misc', 'services_categories');
					update_option('custom_texo_service_id', $Current_text_id['term_id']);
				}
			}
			//update category
			if(isset($_POST['submit']) && isset($_POST['action']) )
			{	wp_update_term($_POST['tag_ID'], 'services_categories', array(
				  'name' => $_POST['name'],
				  'slug' => $_POST['slug'],
				  'description' =>$_POST['description']
				));
			}
			// Delete default category
			if(isset($_POST['action']) && isset($_POST['tag_ID']) )
			{	if(($_POST['tag_ID'] == $defualt_tex_service_id) && $_POST['action']	 =="delete-tag")
				{	
					delete_option('custom_texo_service_id'); 
				} 
			}
		}
		add_action( 'init', 'create_services_taxonomy' );
		add_action( 'save_post', 'set_default_category' );
		function set_default_category( $post_id ) 
		{	$terms = wp_get_post_terms( $post_id, 'services_categories');
			// Only set default if no terms are set yet
			if (!$terms) {
			// Assign the default category
			$default_term = get_term_by('slug', 'misc', 'services_categories','ARRAY_A');
			wp_set_post_terms( $post_id, $default_term, 'services_categories' );
			}
		}
		// code for product post type
		add_action( 'init', 'create_post_type_product' );
		function create_post_type_product() {
		$current_options = get_option('spa_theme_options');
			$spa_products_slug = $current_options['spa_products_slug'];
			register_post_type( 'spa_products',
				array(
					'labels' => array(
						'name' => 'Product',
						'singular_name' => 'Product',
						'add_new' => __('Add New Product', 'sis_spa'),
						'add_new_item' => __('Enter Product Name','sis_spa'),
						'edit_item' => __('Enter Product Name ','sis_spa'),
						'new_item' => __('New Link','sis_spa'),
						'all_items' => __('All Product','sis_spa'),
						'view_item' => __('View Link','sis_spa'),
						'search_items' => __('Search Links','sis_spa'),
						'not_found' =>  __('No Links found','sis_spa'),
						'not_found_in_trash' => __('No Links found in Trash','sis_spa'), 
						
					),
					'supports' => array('title','thumbnail'),
					'show_in_nav_menus' => false,
					'public' => true,
					'menu_position' => 11,
					'rewrite' => array('slug' => $spa_products_slug),
					'menu_position' => 5,			 
					
				)
			);
		}
		function create_product_taxonomy() {
		$current_options = get_option('spa_theme_options');
		$spa_products_category_slug = $current_options['spa_products_category_slug'];
			register_taxonomy(
				'product_categories',
				'spa_products',
				array(
					'hierarchical' => true,
					'show_in_nav_menus' => false,
					'label' => 'Product Categories',
					'query_var' => true,
					'show_in_nav_menus' => true,
					'rewrite' => array('slug' => $spa_products_category_slug )
				));
				/*wp_insert_term('Uncategorized','product_categories',array(
				'description'=> 'Default Category',
				'slug' => 'Uncategorized',		   
			  ));*/
			  
			//Default category id		
			$defualt_tex_id = get_option('custom_texo_product_id');
			//quick update category
			if((isset($_POST['action'])) && (isset($_POST['taxonomy']))){		
				wp_update_term($_POST['tax_ID'], 'product_categories', array(
				  'name' => $_POST['name'],
				  'slug' => $_POST['slug']
				));	
				update_option('custom_texo_product_id', $defualt_tex_id);
			} 
			else 
			{ 	//insert default category 
				if(!$defualt_tex_id){
					wp_insert_term('Uncategorized','product_categories', array('description'=> 'Default Category','slug' => 'Uncategorized'));
					$Current_text_id = term_exists('Uncategorized', 'product_categories');
					update_option('custom_texo_product_id', $Current_text_id['term_id']);
				}
			}
			//update category
			if(isset($_POST['submit']) && isset($_POST['action']) )
			{	wp_update_term($_POST['tag_ID'], 'product_categories', array(
				  'name' => $_POST['name'],
				  'slug' => $_POST['slug'],
				  'description' =>$_POST['description']
				));
			}
			// Delete default category
			if(isset($_POST['action']) && isset($_POST['tag_ID']) )
			{	if(($_POST['tag_ID'] == $defualt_tex_id) && $_POST['action']	 =="delete-tag")
				{	
					delete_option('custom_texo_product_id'); 
				} 
			}	
		}
		add_action( 'init', 'create_product_taxonomy' );
		
		add_action( 'save_post', 'set_default_product_category' );	
		function set_default_product_category( $post_id ) {
		$terms = wp_get_post_terms( $post_id, 'product_categories');
			// Only set default if no terms are set yet
			if (!$terms) {
				// Assign the default category
				$default_term = get_term_by('slug', 'uncategorized', 'product_categories','ARRAY_A');
				wp_set_post_terms( $post_id, $default_term, 'product_categories' );
			}
		}	
?>