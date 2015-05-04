<?php 	
$current_options=get_option('spa_theme_options');
$call_us=$current_options['call_us'];
$slider_entries_main=$current_options['slider_entries_main'];
$slider_bannerstrip_enable=$current_options['slider_bannerstrip_enable'];
?>
<?php 	$args = array( 'post_type' => 'spa_slider', 'posts_per_page'=>$slider_entries_main );
		$loop = new WP_Query( $args );		
		if( $loop->have_posts() ) { ?>
		<div id="container" class="cf">
			<div id="main" role="main">
				<div class="slider">
					<div id="slider" class="flexslider">
						<ul class="slides"><?php while ( $loop->have_posts() ) : $loop->the_post();	
								$my_meta = get_post_meta($post->ID,'_my_meta',TRUE);		
								if(isset($my_meta['link']))
								{	$meta_value_link = $my_meta['link'];	}
								else
								{	 $meta_value_link = get_permalink(); }
								
								if(has_post_thumbnail()):
								$title = get_post(get_post_thumbnail_id())->post_title;
								$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(),array(1770,800)); 
								$alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>
								<li style="height: auto; position:relative;">								
								<?php							
								if(isset($my_meta['check']))
								{	$target ='target="_blank"';  } else { $target ='target="_self"';  } ?>							
								<a href="<?php echo $meta_value_link ; ?>" <?php echo $target; ?> >							
								 <img alt="<?php echo $alt_text ?>" src="<?php echo $large_image_url[0]; ?>" title="<?php echo $title ?>" class="main-sliderimg"/>
								</a>
								<?php  
								if($slider_bannerstrip_enable=='yes')
								{	?>
									<div class="slidesDescription container" >
										<div class="row-fluid">
										<div class="span3" id="slider-Pink">      
										<dl class="pink_title"> <dt><?php if(isset($my_meta['heading_one'])){echo $my_meta['heading_one'];}else{ echo _e("Get yourself","sis_spa") ; } ?></dt>
										<dt><h1 class="pink-head"> <?php if(isset($my_meta['heading_two'])) { echo $my_meta['heading_two'];} else { echo _e("REFRESHED","sis_spa") ; } ?></h1>
										</dt>
										</dl>
										</div>
										<div class="span6"  style="margin-top:20px;">
										 <p><?php if(isset($my_meta['banner_description'])){ echo $my_meta['banner_description']; } else { echo _e("Slider Banner Description Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting ","sis_spa") ;}?></p>
										 </div>
										 <div class=" spa_tag"><span><?php echo $current_options['call_us_text']; ?><p><?php echo $call_us?></p></span>
										 </div> 
										</div>
									</div>
									<?php 
								} ?>
								</li><?php endif;
								endwhile; ?>
						</ul>
					<!--slider Thumbnails images -->
					<?php if($current_options['slider_thumbnails_enable']=='yes') 
					{	$loop = new WP_Query ( array('post_type' => 'spa_slider', 'posts_per_page'=>3 ));							
					?>	<div class="slider-thumb-container container">							
						<?php
							if( $loop->have_posts() )
							{ 	while ( $loop->have_posts() ) : $loop->the_post();
									$my_meta = get_post_meta($post->ID, '_my_meta', TRUE);
									if(has_post_thumbnail()):
										$title = get_post(get_post_thumbnail_id())->post_title;
										$thumb_bread_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(),array(366,155)); 
										$alt_text = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>
								<div class="thumb-img-container">							   
									<img alt="<?php echo $alt_text ?>" src="<?php echo $thumb_bread_image_url[0]; ?>" title="<?php echo $title ?>" class="slider-thumb"/>
									<div class="flex-thumbnal-area">
										<span><?php 
											if(isset($my_meta['heading_one']))
											{ echo $my_meta['heading_one']; }
											else
											{ echo _e("PRODUCING","sis_spa") ; } ?>
											<h4>
											<?php if(isset($my_meta['heading_two']))
											{ echo $my_meta['heading_two']; }
											else
											{ echo _e("QUALITY","sis_spa") ; } ?>
											</h4>
										</span>
										<?php if(isset($my_meta['link']))
										{	$meta_value_link = $my_meta['link'];	}
										else
										{	 $meta_value_link = get_permalink(); }										
										
										if(isset($my_meta['check']))
										{	$target ='target="_blank"';  } else { $target ='target="_self"';  } ?>							
										<a href="<?php echo $meta_value_link; ?>" class="flex-btn" <?php echo $target; ?> ><?php _e("Explore More",'sis_spa');?> </a>
									</div>
							  </div>
							  <?php endif;
							  endwhile;
							} ?>
				   		</div>
					<?php } ?>
				    </div>
				</div>
			</div>
		</div><?php } else {  ?>
		 <!-- Slider -->
		<div id="container" class="cf">
			<div id="main" role="main">
				<div class="slider">
					<div id="slider" class="flexslider">
						<ul class="slides">
							<?php for($i=1; $i<=3; $i++) {?>
						<li style="height:800px;position:relative">
							<img src="<?php echo get_template_directory_uri();?>/images/default/270x157.jpg" class="main-sliderimg"/>
							<?php if($slider_bannerstrip_enable=='yes') { ?>
							<div class="slidesDescription container" >
								<div class="row-fluid">
											<div class="span3" style="margin-top:15px; width:auto; margin-left:20px;">
											  <dl class="pink_title">    <dt><?php _e( "our", 'sis_spa' ); ?></dt>
											  <dt><h1 class="pink-head"><?php _e( "refreshed", 'sis_spa' ); ?></h1></dt>	</dl>
											</div>
									<div class="span6"  style="margin-top:20px"><p><?php _e('Donec justo odio, lobortis eget congue sed, rutrum sit amet mauris. Curabitur sed lectus nulla. Curabitur sed lectus nulla.lobortis eget congue sed, rutrum sit amet mauris. Curabitur sed lectus nulla rutrum sit amet mauris','sis_spa'); ?></p>
									</div>
									<div class=" spa_tag"><span><?php echo $current_options['call_us_text']; ?><p><?php echo $call_us?></p></span></div> 
								</div>
							</div>
							<?php } ?>
							
						</li><?php } ?>
						</ul>
						<div class="slider-thumb-container container">	
							<div class="thumb-img-container">
								<img class="slider-thumb" src="<?php echo get_template_directory_uri();?>/images/default/image_260x160.jpg">
									<div class="flex-thumbnal-area">
										<span><?php _e( "Producing", 'sis_spa' ); ?><h4><?php _e( "Quality", 'sis_spa' ); ?></h4></span>
										<input type="submit" value="Explore More" class="flex-btn" name="button">
									</div>
							</div>
							<div class="thumb-img-container">
								<img class="slider-thumb" src="<?php echo get_template_directory_uri();?>/images/default/image_260x160.jpg">
									<div class="flex-thumbnal-area">
										<span><?php _e( "Cool", 'sis_spa' ); ?><h4><?php _e( "Experience", 'sis_spa' ); ?></h4></span>
										<input type="submit" value="Explore More" class="flex-btn" name="button">
									</div>
							</div>
							<div class="thumb-img-container">
								<img class="slider-thumb" src="<?php echo get_template_directory_uri();?>/images/default/image_260x160.jpg">
									<div class="flex-thumbnal-area">
										<span><?php _e( 'Feel', 'sis_spa' ); ?><h4><?php _e( "Amazing", 'sis_spa' ); ?></h4></span>
										<input type="submit" value="Explore More" class="flex-btn" name="button">
									</div>
							</div>
						</div>
					 <!--end of slider Thumbnails images-->
					</div>
				</div>
		</div>
	</div>
 <!-- /Slider-->
<?php }  ?>