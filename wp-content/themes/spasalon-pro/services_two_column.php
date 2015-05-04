<?php  	/*
		Template Name:Services Two Column
		*/
?>
<?php get_template_part('pink','header')?>
<!-- Service -->  
	<div class="container"> 
		<div class="row">
			<?php $categories = get_categories('taxonomy=services_categories&hide_empty=1'); ?>
				  <?php
				  $j=1;
				  foreach($categories as $category) { ?>
				   <div class="span12 service-2c-xpt">
				   <h2 class="services-two-heading" ><?php echo $category->name; ?></h2>
				   </div>
				<?php  $args = array(
				'post_type' => 'spa_services',
				'tax_query' => array(
					array(
					'taxonomy' => 'services_categories',
					'field' => 'slug',
					'terms' => $category->slug,
					)
				)
				);
				$query = new WP_Query( $args );?>
			<ul class="thumbnails">
			<?php  while($query->have_posts()): $query->the_post();?>
			 <li class="span6" style="margin-bottom:60px;" >
				<div class="media"  >
				  <?php $defalt_arg =array('class' => "service_two_img" )?>
					<?php if(has_post_thumbnail()):?>
					<a class="pull-left" href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('service-two-thumb', $defalt_arg); ?></a>
					 <?php endif;?>
						<div class="media-body">
						<h4 id="service-media-heading">
						<a class="service-media-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="services-content"><p><?php echo get_service_two_excerpt(); ?></p></div>
						<?php  $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
						</div>
				</div>
			</li><?php if($j%2==0){ echo "<div class='clearfix'></div>"; } $j++; endwhile;
			echo "</ul>";
		} ;?>
</div>
</div><?php get_footer();?>