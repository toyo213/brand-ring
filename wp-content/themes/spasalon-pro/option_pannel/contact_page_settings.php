<?php
if(isset($_POST['spa_contactpage_settings']))
{	if($_POST['spa_contactpage_settings'] == 1)
	{	if(!empty($_POST))
		{	/*nonce field implement*/
			if ( empty($_POST) || !wp_verify_nonce($_POST['spa_contact_nonce_customization'],'spa_customization_nonce_contact') )
			{  print 'Sorry, your nonce did not verify.';
			   exit;
			} else {
				$clean=array();
				$current_options = get_option('spa_theme_options');
				$current_options['map']=sanitize_text_field($_POST['map']);
				$current_options['contact_address_title']=sanitize_text_field($_POST['contact_address_title']);$current_options['adress_line_one']=sanitize_text_field($_POST['adress_line_one']);
				$current_options['adress_line_two']=sanitize_text_field($_POST['adress_line_two']);
				$current_options['adress_line_three']=sanitize_text_field($_POST['adress_line_three']);
				$current_options['phone_number_one']=sanitize_text_field($_POST['phone_number_one']);
				$current_options['phone_number_two']=sanitize_text_field($_POST['phone_number_two']);
				$current_options['fax_number']=sanitize_text_field($_POST['fax_number']);
				$current_options['email_address']=sanitize_text_field($_POST['email_address']);
				$current_options['open_hours_title']=sanitize_text_field($_POST['open_hours_title']);
				$current_options['weekends_time']=sanitize_text_field($_POST['weekends_time']);
				$current_options['weekdays_time']=sanitize_text_field($_POST['weekdays_time']);			
				update_option('spa_theme_options' , stripslashes_deep($current_options));
			}
		}
	}
	// restore defualt data 
	if($_POST['spa_contactpage_settings'] == 2) 
	{	$current_options=get_option('spa_theme_options');	
		$current_options['contact_address_title']='Spa Salon';
		$current_options['adress_line_one']='8901 Marmora Road';
		$current_options['adress_line_two']='Rajasthan';
		$current_options['adress_line_three']='India';
		$current_options['phone_number_one']='+1800559658';
		$current_options['phone_number_two']='+1800559658';
		$current_options['fax_number']='+1800559658';
		$current_options['email_address']='themes@webriti.com';
		$current_options['open_hours_title']='Opening Hours';
		$current_options['weekends_time']='11:00 AM - 17:30 PM ';
		$current_options['weekdays_time']='11:00 AM - 17:30 PM ';
		$current_options['map']="https://maps.google.co.in/?ll=25.395753,76.074692&spn=0.743101,1.674042&t=m&z=10";
		update_option('spa_theme_options' , $current_options);
	}	
} ?>
<div class="block ui-tabs-panel ui-widget-content ui-corner-bottom" id="option_color_header1" aria-labelledby="ui-id-6" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
	<input type="hidden" value="Header" name="header">
	<form method="post" action = "" style="width:751px;" id="spa_contact_form">		
		<?php wp_nonce_field('spa_customization_nonce_contact','spa_contact_nonce_customization'); ?> <!--nonce check form-->
		<div class="option option-input">
			<span class="option_tab_title"><?php _e('Contact Page Setting','sis_spa');?></span>
		
			<h3><?php _e('Add Google Link Here for Goolge Map','sis_spa')?></h3>
			<div class="section">
				<div class="element">
					<input type="text" name="map"  value="<?php if($current_options['map'] !='') { echo esc_textarea($current_options['map']); } ?>" />
				</div>
				<div class="description"><?php _e('Put Your Google Map Url above','sis_spa');?> <br/> <?php _e('To know your Google Map Location Visit URL','sis_spa');?> <a href="https://maps.google.co.in/" target="_blank" > https://maps.google.co.in/ </a>
				</div>
			</div>
		
			
			<h3><?php _e('Company Name','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="contact_address_title" id="subfooter_left_text" value="<?php if($current_options['contact_address_title']!='') { echo esc_attr($current_options['contact_address_title']); } ?>"/>
			   </div>
			</div>
		</div>	
		<div class="option option-input">
		<h3><?php _e('Address Line One','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="adress_line_one" id="subfooter_left_text" value="<?php if($current_options['adress_line_one']!='') { echo esc_attr($current_options['adress_line_one']); } ?>"/>
			   </div>
			</div>
		</div> 
		<div class="option option-input">
		<h3><?php _e('Address Line Two','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="adress_line_two" id="subfooter_left_text" value="<?php if($current_options['adress_line_two']!='') { echo esc_attr($current_options['adress_line_two']); } ?>"/>
			   </div>
			</div>
		</div>
		<div class="option option-input">
		<h3><?php _e('Address Line Three','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="adress_line_three" id="subfooter_left_text" value="<?php if($current_options['adress_line_three']!='') { echo esc_attr($current_options['adress_line_three']); } ?>"/>
			   </div>
			</div>
		</div>
		<div class="option option-input">
		<h3><?php _e('Telephone Number','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="phone_number_one" id="subfooter_left_text" value="<?php if($current_options['phone_number_one']!='') { echo esc_attr($current_options['phone_number_one']); } ?>"/>
			   </div>
			</div>
		</div>
		<div class="option option-input">
		<h3><?php _e('Altenative Telephone Number','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="phone_number_two" id="subfooter_left_text" value="<?php if($current_options['phone_number_two']!='') { echo esc_attr($current_options['phone_number_two']); } ?>"/>
			   </div>
			</div>
		</div>
		<div class="option option-input">
		<h3><?php _e('Fax Number','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="fax_number" id="subfooter_left_text" value="<?php if($current_options['fax_number']!='') { echo esc_attr($current_options['fax_number']); } ?>"/>
			   </div>
			</div>
		</div>
		<div class="option option-input">
		<h3><?php _e('E-Mail Address','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="email_address" id="subfooter_left_text" value="<?php if($current_options['email_address']!='') { echo esc_attr($current_options['email_address']); } ?>"/>
			   </div>
			</div>
		</div>
		<div class="option option-input">
		<h3><?php _e('Opening Hours','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="open_hours_title" id="subfooter_left_text" value="<?php if($current_options['open_hours_title']!='') { echo esc_attr($current_options['open_hours_title']); } ?>"/>
			   </div>
			</div>
		</div>
		<div class="option option-input">
		<h3><?php _e('Weekdays Timings','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="weekdays_time" id="subfooter_left_text" value="<?php if($current_options['weekdays_time']!='') { echo esc_attr($current_options['weekdays_time']); } ?>"/>
			   </div>
			</div>
		</div>
		<div class="option option-input">
		<h3><?php _e('Weekends Timings','sis_spa');?></h3>
			<div class="section">
				<div class="element">
					<input type="text" class="" name="weekends_time" id="subfooter_left_text" value="<?php if($current_options['weekends_time']!='') { echo esc_attr($current_options['weekends_time']); } ?>"/>
			   </div>
			</div>
		</div>	
		<input type="hidden" value="1" id="spa_contactpage_settings" name="spa_contactpage_settings" /> 
		<input type="button" class="button-framework save-options"  value= "<?php _e('Save Changes', 'sis_spa');?>" onclick="datasave_contact()">
		<input type="button" class="button-framework reset" value="<?php _e('Restore Defaults','sis_spa');?>" onclick="reset_data_contact()" />
		<div id="success_message_reset_contact"  class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data reset sucessfully','sis_spa'); ?></div>
		<div id="success_message_save_contact" class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data save sucessfully','sis_spa'); ?></div>	
	</form>
</div>