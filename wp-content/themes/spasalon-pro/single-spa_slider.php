<?php get_template_part('pink','header')?>
<div class="container">
 	    <div class="_blank"></div>
		<div class="row-fluid">
           <div class="<?php if(!is_active_sidebar('sidebar-primary')){ echo 'span12'; }else { echo 'span8'; } ?>">
			<!-- Spa-Saloon main Content --> 
            <?php the_post();?>
			 <h2 class="service_detail_head"><?php the_title();?></h2>
			<?php $spa_detailed_content=get_the_content();
			 $spaslider_filtered_content=preg_replace('/<img[^>]+./','',$spa_detailed_content); 			 
        	$image_query = new WP_Query( array( 'post_type' => 'attachment','post_status' => 'inherit', 'post_mime_type' => 'image',  'post_parent' => get_the_ID() ) );
			if($image_query->have_posts()):?>  
			<div class="pikachoose">
			<ul id="pikame" >
	    		<?php 	
					while( $image_query->have_posts() ) {
           			 $image_query->the_post();
					 $image_attributes = wp_get_attachment_image_src( get_the_ID(),'' );?>  
					<li><a href="#"><img  src="<?php echo $image_attributes[0]; ?>" alt=" alt"/></a><span></span></li>
				<?php } ?>
			</ul>
			</div><?php endif;?>
			<div class="service-detail-content"><p><?php echo $spaslider_filtered_content;	?></p></div>
			<?php comments_template( '', true );?><!-- /Spa-Saloon main Content -->
	</div>	
<div class="sidebar-topspacer"></div>	
<?php get_sidebar();?></div>
</div>
</div><!-- /Container for products -->
<?php get_footer();?>