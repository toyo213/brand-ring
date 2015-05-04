<?php
$current_options = get_option('spa_theme_options');
if(isset($_POST['spa_settings_save']))
{	if($_POST['spa_settings_save'] == 1) 
	{	if ( empty($_POST) || !wp_verify_nonce($_POST['spa_gernalsetting_nonce_customization'],'spa_customization_nonce_gernalsetting') )
		{	
			print 'Sorry, your nonce did not verify.';	exit; 
		}
		else  
		{	$current_options['upload_image']=sanitize_text_field($_POST['upload_image']);
			$current_options['height']=sanitize_text_field($_POST['height']);
			$current_options['width']=sanitize_text_field($_POST['width']);
			$current_options['upload_image_favicon']=sanitize_text_field($_POST['upload_image_favicon']);
			$current_options['color_scheme_style']=sanitize_text_field($_POST['color_scheme_style']);
			
			$current_options['spa_custom_css']=$_POST['spa_custom_css'];
			
			if($_POST['spa_bannerstrip_enable'])
			{ echo $current_options['spa_bannerstrip_enable']= "yes"; } 
			else
			{ echo $current_options['spa_bannerstrip_enable']="no"; } 
			
			update_option('spa_theme_options' , stripslashes_deep($current_options));
		}
	}
	if($_POST['spa_settings_save'] == 2) 
	{	
		$current_options['spa_bannerstrip_enable']="no";
		$current_options['upload_image']="";
		$current_options['height']=60;
		$current_options['width']=250;
		$current_options['upload_image_favicon']="";
		$current_options['color_scheme_style']="default.css";
		
		$current_options['spa_custom_css']="";
				
		update_option('spa_theme_options' , $current_options);
	}
}
?>

<div class="block ui-tabs-panel ui-widget-content ui-corner-bottom" id="option_general" aria-labelledby="ui-id-1" role="tabpanel" aria-expanded="true" aria-hidden="false">
	<form method="post" id="spa_general_setting">
		<?php wp_nonce_field('spa_customization_nonce_gernalsetting','spa_gernalsetting_nonce_customization'); ?>
		<div class="option option-select">
			<span class="option_tab_title"><?php _e('General Settings','sis_spa');?></span>
			<h3><?php _e('Color scheme','sis_spa');?></h3>
			<div class="section">
				<div class="element">				 
				<?php $color_scheme_style = $current_options['color_scheme_style']; ?>
				<select name="color_scheme_style" >
					<option   <?php echo selected($color_scheme_style, 'default.css' ); ?>> default.css</option>
					<option  <?php echo selected($color_scheme_style, 'green.css' ); ?>> green.css</option>		
					<option   <?php echo selected($color_scheme_style, 'blue.css' ); ?>> blue.css</option>
					<option  <?php echo selected($color_scheme_style, 'purple.css' ); ?>> purple.css</option>	
					<option   <?php echo selected($color_scheme_style, 'yellow.css' ); ?>> yellow.css</option>
					<option  <?php echo selected($color_scheme_style, 'orange.css' ); ?>> orange.css</option>	
				</select>
				</div>
			</div>
		</div>
		
		<div class="option option-upload">
			<h3><?php _e('Custom Logo','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" value="<?php if($current_options['upload_image']!='') { echo esc_attr($current_options['upload_image']); } ?>" id="upload_image" name="upload_image" size="36" class="upload has-file"/>
					<input type="button" id="upload_button" value="Custom Logo" class="upload_image_button" class="upload_button" /><br>
					<?php if($current_options['upload_image']!=''){ ?><img  src="<?php echo $current_options['upload_image'];?>" height="60px" width="250px" /><?php  } ?>
				</div>
				<div class="description"><?php  _e('The placeholder image that will be used as a custom logo','sis_spa');?> </div>
			</div>
		</div>
	
		<div class="option option-input">
			<h3><?php _e('Header Logo Height','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" value="<?php if($current_options['height']!='') { echo esc_attr($current_options['height']); } ?>" id="height" name="height" class="" onkeyup="this.value=this.value.replace(/\D/g,'')"/>
				</div>
				<div class="description"><?php _e('The width of the header logo image.','sis_spa'); ?></div>
			</div>
		</div>
		<div class="option option-input">
			<h3><?php _e('Header Logo width','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" value="<?php if($current_options['width']!='') { echo esc_attr($current_options['width']); } ?>" id="width" name="width" onkeyup="this.value=this.value.replace(/\D/g,'')"/>
				</div>
				<div class="description"><?php _e('The width of the header logo image.','sis_spa'); ?></div>
			</div>
		</div>
		<div class="option option-upload">
			<h3><?php _e('Custom Favicon','sis_spa'); ?></h3>																			
			<div class="section">
				<div class="element">
					<input type="text" value="<?php if($current_options['upload_image_favicon']!='') { echo esc_attr($current_options['upload_image_favicon']); } ?>" name="upload_image_favicon" size="36" class="upload has-file"/>
					<input type="button" value="Custom Logo" class="upload_image_button" id="upload_button"><br>
				</div>
				<div class="description"><?php _e('The placeholder image that will be used if a featured image isnt specified.','sis_spa')?> </div>
			</div>
		</div>
		<div class="option option-upload">
			<h3><?php _e('Enable Spa Banner strip in all pages','sis_spa'); ?></h3>																		
			<div class="section">
				<div class="element">
					<input type="checkbox" <?php if($current_options['spa_bannerstrip_enable']=='yes') echo "checked='checked'"; ?> id="spa_bannerstrip_enable" name="spa_bannerstrip_enable" > <span class="explain"><?php _e('Enable spa banner strip in all pages.','sis_spa'); ?></span>
				</div>
				
			</div>
		</div>
		<div class="option option-upload">
			<h3><?php _e('Custom CSS','sis_spa');?></h3>																	
			<div class="section">
				<div class="element">
					<textarea style="min-height:200px;width:100%;" name="spa_custom_css" id="spa_custom_css"><?php if($current_options['spa_custom_css']!= '') echo $current_options['spa_custom_css'];  ?></textarea>
				</div>				
			</div>
		</div>
	
		<input type="hidden" value="1" id="spa_settings_save" name="spa_settings_save" />
		<input type="button" class="button-framework save-options"  value= "<?php _e('Save Changes', 'sis_spa');?>" onclick="datasave_generalsetting()"/>									
		<input type="button" class="button-framework reset"  value="<?php _e('Restore Defaults','sis_spa');?>" onclick="reset_data_generalsetting()" />
		<div id="success_message_reset_general"  class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data reset sucessfully','sis_spa'); ?></div>
		<div id="success_message_save_general" class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data save sucessfully','sis_spa'); ?></div>	
	</form>
</div>