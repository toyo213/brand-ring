<?php
function spa_admin_enqueue_script() {
	if ( is_singular() ) wp_enqueue_script( "comment-reply" ); 
	
	wp_enqueue_style('font', get_template_directory_uri().'/css/font/font.css');		
	wp_enqueue_style('classic',get_template_directory_uri().'/option_pannel/css/style-classic.css');
	wp_enqueue_style('option',get_template_directory_uri().'/option_pannel/css/style-option.css');		
	wp_enqueue_style('thickbox');	
	wp_enqueue_style('farbtasticss',get_template_directory_uri().'/option_pannel/css/farbtasticss.css');
	wp_enqueue_style('optionpanal-dragdrop',get_template_directory_uri().'/option_pannel/css/optionpanal-dragdrop.css');
	
   /*enque jquery of option panal*/
	wp_enqueue_script('tab',get_template_directory_uri().'/option_pannel/js/spa-tab.js');
	wp_enqueue_script('prime',get_template_directory_uri().'/option_pannel/js/prime-plugin-base.js');
	wp_enqueue_script('my-upload',get_template_directory_uri().'/option_pannel/js/media-upload-script.js',array('media-upload','jquery-ui-sortable','farbtastic'));
	wp_enqueue_script('spa-optionpanal-jquery',get_template_directory_uri().'/option_pannel/js/spa-optionpanal-jquery.js');
	
	wp_enqueue_script('jquery-ui-accordion');
	wp_enqueue_style('jquery-ui-css',get_template_directory_uri('template_directory').'/option_pannel/css/jquery-ui.css');
	//wp_enqueue_script('jquery-ui-js',get_template_directory_uri('template_directory').'/option_pannel/js/jquery-ui.js');
}
?>