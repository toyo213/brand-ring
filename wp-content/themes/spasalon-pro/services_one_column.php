 <?php  /*
		Template Name:Services One Column
		*/
?>
<?php get_template_part('pink','header')?>
<?php $categories = get_categories('taxonomy=services_categories&hide_empty=1'); ?>
<!-- Service -->  
<div class="container"> 
     <div class="row">
		<?php 
		$j=1;
		foreach($categories as $category) { 
			$args = array(
			'post_type' => 'spa_services',
			'tax_query' => array(
			array(
			'taxonomy' => 'services_categories',
			'field' => 'slug',
			'terms' => $category->slug,
			)));
		$query = new WP_Query( $args );?>
			<div class="span12 service-1c-xpt">
				<h2 class="services-one-heading"><?php echo $category->name; ?></h2>
				<?php while($query->have_posts()): $query->the_post();?>
				<div class="media service-1c">
					<?php $defalt_arg =array('class' => "service_one_img" )?>
					<?php if(has_post_thumbnail()):?>
					   <a class="pull-left" href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('service-one-thumb', $defalt_arg); ?></a>
						<?php endif;?>
						<div class="media-body">
							<h4 class="service-media-heading"><a class="service-media-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
							<div class="services-content"><p><?php echo get_the_other_excerpt(); ?></p></div><br/>
								 <?php  $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
						</div>
				</div><?php if($j%1==0){ echo "<div class='clearfix'></div>"; } $j++; endwhile;
				echo "</div>";	
				} ?>
	</div>
</div>
<?php  get_footer(); ?>