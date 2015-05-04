<?php 
$current_options=get_option('spa_theme_options');
if(isset($_POST['spa_sliders_save']))
{	if($_POST['spa_sliders_save'] == 1)
	{	if(!empty($_POST)) 
		{	/*nonce field implement in gernal setting*/
			if ( empty($_POST) || !wp_verify_nonce($_POST['spa_homepageslider_nonce_customization'],'spa_customization_nonce_homepageslider') )
			{  
				print 'Sorry, your nonce did not verify.';	 exit;
			}
			 else 
			{	
				$current_options['slider_entries_main']=sanitize_text_field($_POST['slider_entries_main']);
				$current_options['slide_effect_main']=sanitize_text_field($_POST['slide_effect_main']);
				$current_options['animation_speed_main']=sanitize_text_field($_POST['animation_speed_main']);
				$current_options['auto_slide_interval_main']=sanitize_text_field($_POST['auto_slide_interval_main']);
				$current_options['slider_bannerstrip_enable']=sanitize_text_field($_POST['slider_bannerstrip_enable']);
				$current_options['slider_thumbnails_enable']=sanitize_text_field($_POST['slider_thumbnails_enable']);
				
				update_option('spa_theme_options' , stripslashes_deep($current_options));						
			}/*nonce field finish*/
		}
	}
	if($_POST['spa_sliders_save'] == 2)
	{		
		$current_options['slider_bannerstrip_enable']="yes";
		$current_options['slider_thumbnails_enable']="yes";
		$current_options['slider_entries_main']=10;
		$current_options['slide_effect_main']="slide";
		$current_options['animation_speed_main']=1000;
		$current_options['auto_slide_interval_main']=2000;		
		update_option('spa_theme_options' , $current_options);
	}
} ?>
<div class="block ui-tabs-panel ui-widget-content ui-corner-bottom" id="option_logo_header" aria-labelledby="ui-id-3" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
	<form method="post"  action = "" id="spa_homepage_slider" name="spa_homepage_slider">
		<?php wp_nonce_field('spa_customization_nonce_homepageslider','spa_homepageslider_nonce_customization'); ?>
		<div class="option option-select">
			<h3><?php _e('Slider Banner Enable in home page','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<?php $slider_bannerstrip_enable = $current_options['slider_bannerstrip_enable']; ?>
					<select name="slider_bannerstrip_enable" >
						<option value="yes"  <?php echo selected($slider_bannerstrip_enable, 'yes' );; ?>><?php _e('Yes','sis_spa');?></option>
						<option value="no" <?php echo selected($slider_bannerstrip_enable, 'no' ); ?>><?php _e('No','sis_spa');?></option>			
					</select>					
				</div>
			</div>
		</div>
		<div class="option option-select">
			<h3><?php _e('Slider Thumbnails Enable in home page','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<?php $slider_thumbnails_enable = $current_options['slider_thumbnails_enable']; ?>
					<select name="slider_thumbnails_enable" >
						<option value="yes"  <?php echo selected($slider_thumbnails_enable, 'yes' );; ?>><?php _e('Yes','sis_spa');?></option>
						<option value="no" <?php echo selected($slider_thumbnails_enable, 'no' ); ?>><?php _e('No','sis_spa');?></option>			
					</select>					
				</div>
			</div>
		</div>
		<div class="option option-select">
			<h3><?php _e('Slider Entries','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<?php $slider_entries_main = $current_options['slider_entries_main']; ?>
					<select name="slider_entries_main">
						<option><?php _e('Select a number','sis_spa');?></option>
						<?php for ($i = 1; $i <= 15; $i++) {?>							 
						<option value="<?php echo $i; ?>" <?php if ( $slider_entries_main == $i ) echo selected($slider_entries_main, $i ); ?>>
						 <?php echo $i; ?>
						 </option>
					   <?php } ?>						   
					</select>
				</div>
			</div>
		</div>
		<div class="option option-select">
			<h3><?php _e('Slider Effect','sis_spa');?></h3>
			<div class="section">
				<div class="element">				 
				<?php $slide_effect_main = $current_options['slide_effect_main']; ?>
				<select name="slide_effect_main" >
					<option value="fade"  <?php echo selected($slide_effect_main, 'fade' );; ?>><?php _e('fade','sis_spa');?></option>
					<option value="slide" <?php echo selected($slide_effect_main, 'slide' ); ?>><?php _e('slide','sis_spa');?></option>			
				</select>
				</div>
			</div>
		</div>
		<div class="option option-select">
			<h3><?php _e('Animation Speed','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<select name="animation_speed_main" >
						<?php $animation_speed_main = $current_options['animation_speed_main']; ?>
						<option value="500" <?php selected($animation_speed_main, '1000' ); ?>>0.5</option>
						<option value="1000" <?php selected($animation_speed_main, '1000' ); ?>>1.0</option>
						<option value="1100" <?php selected($animation_speed_main, '1100' ); ?>>1.1</option>
						<option value="1200" <?php selected($animation_speed_main, '1200' ); ?>>1.2</option>
						<option value="1300" <?php selected($animation_speed_main, '1300' ); ?>>1.3</option>
						<option value="1400" <?php selected($animation_speed_main, '1400' ); ?>>1.4</option>
						<option value="1500" <?php selected($animation_speed_main, '1500' ); ?>>1.5</option>
						<option value="1600" <?php selected($animation_speed_main, '1600' ); ?>>1.6</option>
						<option value="1700" <?php selected($animation_speed_main, '1700' ); ?>>1.7</option>
						<option value="1800" <?php selected($animation_speed_main, '1800' ); ?>>1.8</option>
						<option value="1900" <?php selected($animation_speed_main, '1900' ); ?>>1.9</option>
				   </select>
				</div>
			</div>
		</div>
		<div class="option option-select">
			<h3><?php _e('Auto Slide Interval','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<select name="auto_slide_interval_main" >
						<?php $auto_slide_interval_main = $current_options['auto_slide_interval_main']; ?>
						<option value="1000" <?php selected($auto_slide_interval_main, '2000' ); ?>>1</option>
						<option value="2000" <?php selected($auto_slide_interval_main, '2000' ); ?>>2</option>
						<option value="3000" <?php selected($auto_slide_interval_main, '3000' ); ?>>3</option>
						<option value="4000" <?php selected($auto_slide_interval_main, '4000' ); ?>>4</option>
						<option value="5000" <?php selected($auto_slide_interval_main, '5000' ); ?>>5</option>
						<option value="6000" <?php selected($auto_slide_interval_main, '6000' ); ?>>6</option>
						<option value="7000" <?php selected($auto_slide_interval_main, '7000' ); ?>>7</option>
						<option value="8000" <?php selected($auto_slide_interval_main, '8000' ); ?>>8</option>
						<option value="9000" <?php selected($auto_slide_interval_main, '9000' ); ?>>9</option>
						<option value="10000" <?php selected($auto_slide_interval_main, '10000' ); ?>>10</option>
					</select>
				</div>
			</div>
		</div>
		<input type="hidden" value="1" name="spa_sliders_save" id="spa_sliders_save"> 
		<input type="button" class="button-framework save-options"  value= "<?php _e('Save Changes', 'sis_spa');?>" onclick="datasave_slider()"/>									
		<input type="button" class="button-framework reset"  value="<?php _e('Restore Defaults','sis_spa');?>" onclick="reset_data_slider()" />
		<div id="success_message_reset_slider"  class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data reset sucessfully','sis_spa'); ?></div>
		<div id="success_message_save_slider" class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data save sucessfully','sis_spa'); ?></div>	
	</form>						
</div>