<?php $current_options = get_option('spa_theme_options');
	if(isset($_POST['reset_webriti_front_data']))
	{
		if($_POST['reset_webriti_front_data']) 
		{
			$current_options['front_page_data']=array('slider','Service Section','product section');	
			update_option('spa_theme_options',$current_options);
		}
	}
	
	if(isset($_POST['webriti_front_data']))
	{
		if($_POST['webriti_front_data'] ) 
		{		
				/*send data hold*/
				$webritidatashow = $_POST['webriti_front_data'];
				$hold = strstr($webritidatashow,'|');
				$webritidatashow = str_replace('|', '' ,$hold);				
				$data = explode(",",$webritidatashow);				
				/*data save*/
				$current_options['front_page_data']=$data;
				/*update all field*/
				update_option('spa_theme_options' , stripslashes_deep($current_options));
				
		}
	}
	?>

<div class="block ui-tabs-panel ui-widget-content ui-corner-bottom" id="home_layout_setting" aria-labelledby="ui-id-8" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
	<form method="post" id="webriti_layout_settings_save" name="webriti_layout_settings_save">	
		<?php wp_nonce_field('spa_customization_nonce_gernalsetting','spa_gernalsetting_nonce_customization'); ?>
		<span class="option_tab_title"><?php _e('Front page Layout','sis_spa');?></span>
		
		<div class="section">
			<table  class="form-table">						
				<div class="dhe-example-section-content"><!---dhe-example-section-content--->
					<div id="webriti_frontpage"><!--redify_frontpage--->
						<div class="column left first">
							<font color="#333333" size="+2"> <?php _e('Disabled','sis_spa');?></font><p></p>							
							<div class="sortable-list" id="disable">
								<?php 	
									$data = $current_options['front_page_data'];									
									$defaultenableddata=array('slider','Service Section','product section');
									$todisable=array_diff($defaultenableddata,$data);
									if($todisable != '')
									{	foreach($todisable as $value)
										{ ?>
											<div class="sortable-item" id="<?php echo $value ?>"><?php _e($value,'sis_spa'); ?></div>
								<?php 	}		 
									} ?>
							</div>
						</div>
						<div class="column left">
							<font color="#333333" size="+2"> <?php _e('Enabled','sis_spa'); ?></font><p></p>
							<div class="sortable-list" id="enable">
								<?php 
								$enable =$current_options['front_page_data'];								
								if($enable[0]!="")
								{	foreach($enable as $value)
									{ ?>
										<div class="sortable-item" id="<?php echo $value ?>"><?php _e($value,'sis_spa'); ?></div> <?php 
									} 
								}								
								?>
							</div>
						</div>
					</div>			
				</div><!--end redify_frontpage--->
			</table>				
		</div>
		<div class="section">
		<p> <b><?php _e('Slider section always top on the home page','rambo'); ?></b></p>
		<p> <b><?php _e('Note:','rambo'); ?> </b> <?php _e('By default all the section are enable on homepage. If you do not want to display any section just drag that section to the disabled box.','rambo'); ?><p>
		</div>
		<div id="button_section">
			
			<input type="button" id="webriti_front_enable_save" class="button-framework save-options"  value= "<?php _e('Save Changes', 'sis_spa');?>" />									
			<input type="button" id="webriti_front_enable_reset" class="button-framework reset"  value="<?php _e('Restore Defaults','sis_spa');?>" />
			<div id="webriti_layout_reset_message"  class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data reset sucessfully','sis_spa'); ?></div>
			<div id="webriti_layout_save_message" class="success_message" ><img style="padding-right:5px;" src="<?php echo  get_template_directory_uri();?>/option_pannel/images/icon_check.png" /><?php _e('Data save sucessfully','sis_spa'); ?></div>	
	
		</div>
	</form>
	
<script type="text/javascript">
jQuery(document).ready(function(){	
	//drag drop tabs
	jQuery('#webriti_frontpage .sortable-list').sortable({ connectWith: '#webriti_frontpage .sortable-list' });	
	
	// Get items id you can chose
	function ramboproItems(rambopro)
	{
		var columns = [];
		jQuery(rambopro + ' div.sortable-list').each(function(){
			columns.push(jQuery(this).sortable('toArray').join(','));
		});
		return columns.join('|');
	}
	
	//onclick check id
	jQuery('#webriti_front_enable_save').click(function(){ 
		var aa = ramboproItems('#webriti_frontpage');		
		 var dataStringfirst = 'webriti_front_data='+ aa;
		 
			 var url = '?page=spa';
     
			 	jQuery.ajax({
					dataType : 'html',
					type: 'POST',
					url : url,
			   		data : dataStringfirst,
					complete : function() {  },
					success: function(data) 
				  	{	
						jQuery("#webriti_layout_save_message").show();
						jQuery("#webriti_layout_save_message").fadeOut(5000);
					}
			 	});
	});	
	//onclick check id
	jQuery('#webriti_front_enable_reset').click(function(){ 
	
		 var dataStringfirst = 'reset_webriti_front_data='+ "all";		 
			 var url = '?page=spa';     
			 	jQuery.ajax({
					dataType : 'html',
					type: 'POST',
					url : url,
			   		data : dataStringfirst,
					complete : function() {  },
					success: function(data) 
				  	{	
						jQuery("#webriti_layout_reset_message").show();
						jQuery("#webriti_layout_reset_message").fadeOut(5000);
					}
			 	});
	});	
});
</script>
</div>