<?php 
/* Template Name:Contact */ 
	get_template_part('pink','header');
	$current_options=get_option('spa_theme_options'); 
	$mapsrc= $current_options['map']; 
	$mapsrc=$mapsrc.'&amp;output=embed';
	$call_us=$current_options['call_us'];
 ?>
  <!-- Contact US -->  
<div class="container">
	<div class="row-fluid">	
		<?php  if($current_options['map'] != '' ) { ?>		
			<div class="span12"><h2 class="contact-header"><?php _e( "CONTACT INFO", 'sis_spa' ); ?></h2></div> 
			<div id="contact-container"" >
				<iframe width="100%" height="335" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $mapsrc;?>"></iframe><br /><small><a href="<?php echo $mapsrc ; ?>" style="color:#0000FF;text-align:left"><?php _e( "View Larger Map", 'sis_spa' ); ?> </a></small>
			</div>
		<?php  } //end of map condition ?> 
		<div class="span12" style="margin-left:0px;" ><h2 class="contact-header-getin"><?php _e( "GET IN TOUCH", 'sis_spa' ); ?></h2></div>  
		<div class="span12" id="contact-section" style="margin-left:0px;" >
			<div class="span5" style="margin-left:0px;">
				<?php if(!isset($_POST['submit'])) { ?> 
				<form class="" method="post" id="contactus_form">
					<fieldset>				
						<?php wp_nonce_field('webriti_name_nonce_check','webriti_name_nonce_field'); ?>						
						<label class="form_name"><?php _e( "Your Name", 'sis_spa' ); ?></label>
						<p><input type="text" name="yourname" placeholder="Your Name" id="yourname" class="contact-input-fields" rows="1" value="<?php if(isset($_POST['yourname'])) echo esc_attr( $_POST['yourname'] );?>"></textarea></p> 
						<label class="form_name"><?php _e( "Email*", 'sis_spa' ); ?></label> 
						<p><input type="text" name="email" placeholder="E-mail" id="email" class="contact-input-fields" rows="1" value="<?php if(isset($_POST['email'])) echo esc_attr( $_POST['email'] );?>"></textarea></p>
						<label class="form_name"><?php _e( "Subject", 'sis_spa' ); ?></label>
						<p><input type="text" name="subject" id="subject" placeholder="Subject" class="contact-input-fields" rows="1" value="<?php if(isset($_POST['subject'])) echo esc_attr( $_POST['subject'] );?>"></p>				 
						<label class="form_name"><?php _e( "Your Message", 'sis_spa' ); ?></label>
						<p><textarea  name="message" id="message"  placeholder="Messages" class="contact-input-fields"  ><?php if(isset($_POST['message'])) { echo esc_textarea( $_POST['message'] ); } ?></textarea></p>
						<input  type="submit" name="submit"   class="contact-form-submit" value="SUBMIT" />					
					</fieldset>
				</form>
				<?php  } ?>
				<div style="color:#302D2E; font-size:24px;">
						<?php 
						if(isset($_POST['submit']))
						{	$flag=1;
							if($_POST['yourname']=='')
							{	$flag=0;					
								echo "Please Enter Your Name<br>";
							}				
							else if(!preg_match('/[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/',$_POST['yourname']))
							{	$flag=0;
								echo "Please Enter Valid Name<br>";
							}				
							if($_POST['email']=='')
							{	$flag=0;
								echo "Please Enter E-mail<br>";
							}else if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST['email']))
								{	$flag=0;
									echo "Please Enter Valid E-Mail<br>";
								}
							if($_POST['subject']=='')
							{	$flag=0;
								echo "Please Enter Subject<br>";
							}
							if($_POST['message']=='')
							{	$flag=0;
								echo "Please Enter Message";
							}														
							if(empty($_POST) || !wp_verify_nonce($_POST['webriti_name_nonce_field'],'webriti_name_nonce_check') )
							{
								 print 'Sorry, your nonce did not verify.';	   exit;
							}
							else
							{	if($flag==1)
								{	
							$to = get_option('admin_email');
							$subject = trim($_POST['subject']);
							$massage = stripslashes(trim($_POST['message']))."Message sent from:: ".trim($_POST['email']);
							$headers = "From: ".trim($_POST['yourname'])." <".trim($_POST['email']).">\r\nReply-To:".trim($_POST['email']);
							$maildata =wp_mail($to, $subject, $massage, $headers);
							//wp_mail(sanitize_email(get_option("admin_email")),trim($_POST['yourname'])." sent you a message from ".get_option("blogname"),stripslashes(trim($_POST['message'])),"From: ".trim($_POST['yourname'])." <".trim($_POST['email']).">\r\nReply-To:".trim($_POST['email'])); 
							echo "Mail Successfully Sent";
							}
							}
						}?></div>
			</div>
			<div class="span7" style="margin-top: 10px margin-left:0px;">
			<div class="span5" id="contact-info" >
					<h2 class="contact-add"><?php echo $current_options['contact_address_title'] ; ?></h2>
					<br />
					<div class="address-detail">
					<?php if($current_options['adress_line_one'] != '') { echo $current_options['adress_line_one'];}?><br>
					<?php if($current_options['adress_line_two'] != '') { echo $current_options['adress_line_two']; }?><br>
					<?php if($current_options['adress_line_two'] != '') { echo $current_options['adress_line_three'];}?><br><br>
					<abbr title="Free Phone"><?php if($current_options['phone_number_one'] != '') {?><?php _e("Free phone:",'sis_spa')?></abbr><?php echo $current_options['phone_number_one']; }?><br>
					<abbr title="Telephone"><?php if($current_options['phone_number_two'] != '') {?><?php _e("Telephone:",'sis_spa')?></abbr><?php echo $current_options['phone_number_two'];}?><br><br>
					<abbr title="Fax"><?php if($current_options['fax_number'] != '') {?><?php _e("Fax:",'sis_spa')?></abbr><?php echo $current_options['fax_number'];}?><br>
					</div>
					<div class="address-detail">
					<a href="mailto:#"><?php if($current_options['email_address'] != '') {?><?php _e("Email:",'sis_spa')?><?php echo $current_options['email_address'];}?></a>
					</div>
				</div>   
				<div class="span5" id="contact-info">
					<h2 class="contact-add"><?php if($current_options['open_hours_title'] != '') { echo $current_options['open_hours_title'];}?></h2>
					<br />
				   <div class="address-detail">
					<?php if($current_options['weekdays_time'] != '') { ?><?php _e("Week-Days",'sis_spa');?><?php echo $current_options['weekdays_time']; }?><br><br>
					<?php if($current_options['weekends_time'] != '') { ?><?php _e("Week-Ends",'sis_spa');?><?php echo $current_options['weekends_time']; }?><br><br>
					</div>
				</div>
			    
				<div class="span11" id="phone">
					<span class="call-us"><?php _e( "Call us on", 'sis_spa' ); ?></span>
					<div class="info-arrange"><img class="phone-icon" src="<?php echo get_template_directory_uri();?>/images/telephone.png"><h1 class="phone-no"><?php echo $call_us;?></h1></div>
				</div>    
			</div><!-- Get in touch -->
		</div>
	</div>
</div><!-- /Contact Us -->   
<?php get_footer();?>