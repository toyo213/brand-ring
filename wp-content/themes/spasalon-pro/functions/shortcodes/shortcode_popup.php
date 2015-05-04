<?php
// registers the buttons for use
function spa_register_buttons($buttons) {
	array_push($buttons, "spa_shortcodes");
	return $buttons;
}

// filters the tinyMCE buttons and adds our custom buttons
function spa_shortcode_buttons() {
	// Don't bother doing this stuff if the current user lacks permissions
	if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
		return;
	 
	// Add only in Rich Editor mode
	if ( get_user_option('rich_editing') == 'true') {
		// filter the tinyMCE buttons and add our own
		add_filter("mce_external_plugins", "spa_add_tinymce_plugin");
		add_filter('mce_buttons', 'spa_register_buttons');
	}
}
// init process for button control
add_action('init', 'spa_shortcode_buttons');

// add the button to the tinyMCE bar
function spa_add_tinymce_plugin($plugin_array) {
	$plugin_array['spa_shortcodes'] = WEBR_FRAMEWORK_DIR .'/shortcodes/shortcodes_popup.js';
	return $plugin_array;
}
?>