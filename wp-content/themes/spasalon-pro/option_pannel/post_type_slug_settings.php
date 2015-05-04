<?php
$current_options = get_option('spa_theme_options');
if(isset($_POST['spa_slug_settings_save']))
{	if($_POST['spa_slug_settings_save'] == 1) 
	{	if ( empty($_POST) || !wp_verify_nonce($_POST['spa_gernalsetting_nonce_customization'],'spa_customization_nonce_gernalsetting') )
		{	
			print 'Sorry, your nonce did not verify.';	exit; 
		}
		else  
		{	$current_options['spa_slider_slug']=sanitize_text_field($_POST['spa_slider_slug']);
			$current_options['spa_services_slug']=sanitize_text_field($_POST['spa_services_slug']);
			$current_options['spa_team_slug']=sanitize_text_field($_POST['spa_team_slug']);
			$current_options['spa_products_slug']=sanitize_text_field($_POST['spa_products_slug']);
			$current_options['spa_service_category_slug']=sanitize_text_field($_POST['spa_service_category_slug']);
			$current_options['spa_products_category_slug']=sanitize_text_field($_POST['spa_products_category_slug']);
			
			update_option('spa_theme_options' , stripslashes_deep($current_options));
		}
	}
	if($_POST['spa_slug_settings_save'] == 2) 
	{	
		
		$current_options['spa_slider_slug']="spa-slider";
		$current_options['spa_services_slug']="spa-service";
		$current_options['spa_team_slug']="spa-team";
		$current_options['spa_products_slug']="spa-products";
		$current_options['spa_products_category_slug']="product-categories";
		$current_options['spa_service_category_slug']="service-categories";
			
				
		update_option('spa_theme_options' , $current_options);
	}
}
?>

<div class="block ui-tabs-panel ui-widget-content ui-corner-bottom" id="option_slug_settings" aria-labelledby="ui-id-7" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
	<form method="post" id="slug_settings">
		<?php wp_nonce_field('spa_customization_nonce_gernalsetting','spa_gernalsetting_nonce_customization'); ?>
		<div class="option option-upload">
			<span class="option_tab_title"><?php _e('Post Type Slug Settings','sis_spa');?></span>
		</div>
		<div class="option option-input">
			<h3><?php _e('Slider Slug','sis_spa');?></h3>
			<div class="section">
				<div class="element">
				<input type="text" class="" name="spa_slider_slug" id="subfooter_left_text" value="<?php if($current_options['spa_slider_slug']!='') { echo esc_attr($current_options['spa_slider_slug']); } ?>"/>
				</div>
				<div class="description"><?php _e('Enter a custom slug for your Slider. Go save your permalinks after changing this.','sis_spa'); ?></div>
			</div>
		</div>
		<div class="option option-input">
			<h3><?php _e('Service Slug','sis_spa');?></h3>
			<div class="section">
				<div class="element">
				<input type="text" class="" name="spa_services_slug" id="subfooter_left_text" value="<?php if($current_options['spa_services_slug']!='') { echo esc_attr($current_options['spa_services_slug']); } ?>"/>
				</div>
				<div class="description"><?php _e('Enter a custom slug for your Services. Go save your permalinks after changing this.','sis_spa'); ?></div>
			</div>
		</div>
		<div class="option option-input">
			<h3><?php _e('Service Category Slug','sis_spa');?></h3>
			<div class="section">
				<div class="element">
				<input type="text" class="" name="spa_service_category_slug" id="spa_service_category_slug" value="<?php if($current_options['spa_service_category_slug']!='') { echo esc_attr($current_options['spa_service_category_slug']); } ?>"/>
				</div>
				<div class="description"><?php _e('Enter a custom slug for your services category slug. Go save your permalinks after changing this.','sis_spa'); ?></div>
			</div>
		</div>
		<div class="option option-input">
			<h3><?php _e('Our Team Slug','sis_spa');?></h3>
			<div class="section">
				<div class="element">
				<input type="text" class="" name="spa_team_slug" id="subfooter_left_text" value="<?php if($current_options['spa_team_slug']!='') { echo esc_attr($current_options['spa_team_slug']); } ?>"/>
				</div>
				<div class="description"><?php _e('Enter a custom slug for your Team. Go save your permalinks after changing this.','sis_spa'); ?></div>
			</div>
		</div>
		<div class="option option-input">
			<h3><?php _e('Products Slug','sis_spa');?></h3>
			<div class="section">
				<div class="element">
				<input type="text" class="" name="spa_products_slug" id="subfooter_left_text" value="<?php if($current_options['spa_products_slug']!='') { echo esc_attr($current_options['spa_products_slug']); } ?>"/>
				</div>
				<div class="description"><?php _e('Enter a custom slug for your Products. Go save your permalinks after changing this.','sis_spa'); ?></div>
			</div>
		</div>
		<div class="option option-input">
			<h3><?php _e('Products Category Slug','sis_spa');?></h3>
			<div class="section">
				<div class="element">
				<input type="text" class="" name="spa_products_category_slug" id="spa_products_category_slug" value="<?php if($current_options['spa_products_category_slug']!='') { echo esc_attr($current_options['spa_products_category_slug']); } ?>"/>
				</div>
				<div class="description"><?php _e('Enter a custom slug for your Products category slug. Go save your permalinks after changing this.','sis_spa'); ?></div>
			</div>
		</div>
		
		<input type="hidden" value="1" id="spa_slug_settings_save" name="spa_slug_settings_save" />
		<input type="button" class="button-framework save-options"  value= "<?php _e('Save Changes', 'sis_spa');?>" onclick="datasave_slugsetting()"/>									
		<input type="button" class="button-framework reset"  value="<?php _e('Restore Defaults','sis_spa');?>" onclick="reset_data_slugsetting()" />
		<div id="success_message_reset_slug"  class="success_message" ><img style="padding-right:5px;" src="<?php echo get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data reset sucessfully','sis_spa'); ?></div>
		<div id="success_message_save_slug" class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data save sucessfully','sis_spa'); ?></div>	
	</form>
</div>