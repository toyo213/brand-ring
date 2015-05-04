<?php 	/*
			Template Name:Aboutus
		*/
?>
	<?php get_template_part('pink','header') ;
		$my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
<div class="container">
	<!-- Welcome to the beauty --> 	                  
		<div class="span12" id="aboutus-section">
			<div class="row">    
			<div class="span7" style=" float: left; margin-right: 60px; margin-bottom: 25px;">
				<?php the_post();?>
					<h2 class="aboutus-head"><?php _e( "Welcome to ", 'sis_spa' ); ?><?php the_title();?></h2>
					<div class="aboutus_content">
					<p><?php the_content() ?></p>
					</div>
			</div>
			<?php $defalt_arg =array('class' => "about-circle-img" )?>
				<?php if(has_post_thumbnail()):?>
				<div class="span4">
					  <a class="pull-left" href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?> </a>
				</div>
				<?php endif;?>
			</div><!-- /Welcome to the beauty -->
		</div>
	   
	<!-- Our Team -->
    <div id="our-team" class="span12">
	
	<h2 class="ourteamheading"><?php _e( "Our Team", 'sis_spa' ); ?></h2>
    
	<div class="row">
		<?php  $i++;
		       $arg = array( 'post_type' => 'spa_team', );
				$team = new WP_Query( $arg ); 
				if($team->have_posts()) {
				while ( $team->have_posts() ) : $team->the_post();?>	   
			
			<div class="span6">
			
				<div class="media">
					<?php $defalt_arg =array('class' => "aboutus-team-img" )?>
					<?php if(has_post_thumbnail()):?>
					
					<a class="about-pull-left"   title="<?php the_title(); ?>"  ><?php the_post_thumbnail('aboutus-team-thumb', $defalt_arg); ?>
					</a>
					
					<?php endif;?>
					
					<div class="media-body">
					 
					 <h2 class="about-team-head"><?php the_title(); ?></h2>
					 
					 <?php  $my_meta = get_post_meta($post->ID,'_my_meta',TRUE);?>
					 
					  <span class="designation"><?php _e( 'Designation: ', 'sis_spa' ); ?><?php if(isset($my_meta['Designation'])){echo $my_meta['Designation'];} else {echo "Please Enter Designation";}?>
					  </span>
						
					
					<div class="aboutus_content">
					   <p> <?php if(isset($my_meta['description'])) echo $my_meta['description'];?> </p>
					</div>
					
					<div class="contact-icons"> 
					<?php
					if(isset($my_meta['facebook_chkbx'])){$facebook_chkbx=1;} else{$facebook_chkbx=0;}					 
					if(isset($my_meta['twitter_chkbx'])){$twitter_chkbx=1;} else{$twitter_chkbx=0;}					 
					if(isset($my_meta['google_chkbx'])){$google_chkbx=1;} else{$google_chkbx=0;}
					
					if($facebook_chkbx==1 ): ?>
					  <a class="facebook" target="_blank" href="<?php if(isset($my_meta['facebook_url'])){ echo $my_meta['facebook_url'];} else { echo "http://facebook.com"; } ?>">&nbsp;</a>
						<?php endif ; ?>
						<?php if($twitter_chkbx==1):?>
						<a class="twitter" target="_blank" href="<?php if(isset($my_meta['twitter_url'])){ echo $my_meta['twitter_url'];} else { echo "http://twitter.com"; } ?>">&nbsp;</a>
						<?php endif ; ?>
						<?php if($google_chkbx==1):?>
						<a class="google"  target="_blank" href="<?php if(isset($my_meta['google_url'])){ echo $my_meta['google_url'];} else { echo "http://google.com"; } ?>">&nbsp;</a>
						<?php  endif ;?>
					</div>
					</div>
				</div>
			</div>
		<?php if($i%2==0) { echo '<div class="clearfix"></div>';} $i++; endwhile;  } else { 
			for($j=1; $j<=4; $j++) {		?>
			<div class="span6">
				  <div class="media">
					<a class="about-pull-left" href="#">
					  <img src="<?php echo get_template_directory_uri();?>/images/default/image_180x180.jpg" class="aboutus-team-img">
					</a>
					<div class="media-body">
					  <h2 class="about-team-head"><?php _e('Name','sis_spa');?></h2>
					  <span class="designation"><?php _e('Designation: Sr Therapist','sis_spa');?></span>
					  <div class="aboutus_content">
					  <p><?php _e('Cras sit amet nibh libero,in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.','sis_spa');?></p>
					  </div>
					  <div class="contact-icons">
						<a href="#" class="facebook">&nbsp;</a>
						 <a href="#" class="twitter">&nbsp;</a>
						<a href="#" class="google">&nbsp;</a>
					  </div>
					</div>
				  </div>
			</div>
			
			<?php if($j%2==0){ echo '<div class="clearfix"> </div>';	} } } ?>
	</div>	<!-- /closing of ul section --> 
	</div><!-- /Our Team --> 
		<!-- Popular Procedures -->
		<div class="span12" id="aboutus-service-sections">
			<h2 id="about-service-head"><?php _e( "Popular Procedures", 'sis_spa' ); ?></h2>
		</div> 
       <?php $arg = array( 'post_type' => 'spa_services','posts_per_page' => 2 );
			$loop = new WP_Query( $arg );?>
		<ul class="thumbnails" style="margin-left:-30px;">
		<?php  if ($loop->have_posts()) {
				while ( $loop->have_posts() ) : $loop->the_post(); ?>   
					<li class="span6" >
							<div class="media">
									<?php $defalt_arg =array('class' => "abouus-service-img" )?>
										<?php if(has_post_thumbnail()):?>
											<a class="about-pull-left"  href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  ><?php the_post_thumbnail('service-about-thumb', $defalt_arg); ?>
											</a>
										<?php endif;?>
											<div class="media-body">
												<h2 class="aboutus-service-head"><?php the_title();?></h2>
												<div class="aboutus_content">
												<p><?php echo aboutus_services_excerpt(); ?></p>
												</div>	
											</div>
							</div>
					</li>
					<?php endwhile; } else { ?>	
					<li  class="span6">
						<div class="media">
							<a class="about-pull-left" href="#">
								<img src="<?php echo get_template_directory_uri();?>/images/default/image_260x160.jpg" class="abouus-service-img">
							</a>
							<div class="media-body">
								<h2 class="aboutus-service-head"><?php _e('Ayurveda Spa','sis_spa');?></h2>
									<div class="aboutus_content">   
									<p><?php _e('In convallis hendrerit velit id vulputate.onvallis hendrerit velit id vulputate. Donec eget consequat urna. Pellentesque ac nibh risus. Duis scelerisque, metus ac  Donec eget consequat urna. Pellentesque ac nibh risus. Duis scelerisque, metus ac adipiscing.','sis_spa');?></p>
									</div>
							</div>
						</div>
					</li>
    
					 <li class="span6">
						  <div class="media">
							<a class="about-pull-left" href="#">
							  <img src="<?php echo get_template_directory_uri();?>/images/default/image_260x160.jpg" class="abouus-service-img">
							</a>
							<div class="media-body">
							  <h2 class="aboutus-service-head"><?php _e('Thermal Spa','sis_spa');?></h2>
							   <div class="aboutus_content">
							  <p><?php _e('In convallis hendrerit velit id vulputate.onvallis hendrerit velit id vulputate. Donec eget consequat urna. Pellentesque ac nibh risus. Duis scelerisque, metus ac  Donec eget consequat urna. Pellentesque ac nibh risus. Duis scelerisque, metus ac adipiscing.','sis_spa');?></p>
							  </div>
							</div>
						  </div>
					</li>
			<?php } ;?>
		</ul>
<!-- /Popular Procedures --> 
</div> 
<?php get_footer(); ?>