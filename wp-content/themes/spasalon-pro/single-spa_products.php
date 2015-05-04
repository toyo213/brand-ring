<?php get_header();
		$current_options=get_option('spa_theme_options');
		$call_us=$current_options['call_us']; 
		$my_meta = get_post_meta($post->ID,'_my_meta',TRUE);?> 
	<!-- Sevice-Caption -->
	<?php get_template_part('pink','header')?>
	<!-- /Service-Caption-->
<!-- Container for products -->
<div class="container">
 <!-- Main --> 
		<div class="_blank"></div>
			<div class="row-fluid">
				<!-- Spa-Saloon main Content --> 
				 <div class="<?php if(!is_active_sidebar('sidebar-primary')){ echo 'span12'; }else { echo 'span8'; } ?>" >
					<div class="media" id="media-article">
					  <?php the_post(); 
						$product_terms = wp_get_object_terms($post->ID, 'product_categories');
						$id=$post->ID;
						$defalt_arg =array('class' => "product-detail-img" )?>
						<?php if(has_post_thumbnail()):?>
							 <a class="pull-left" href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
							<?php endif;?>
						<div class="media-body">
							<h4  class="Product-detail-heading"><?php the_title(); ?></h4>
							<a href="<?php the_permalink(); ?>" class="price-tag" >
							<?php if(isset($my_meta['price'])) echo $my_meta['price']; ?></a>
							<div class="product-content"><p><?php if(isset($my_meta['description'])) echo $my_meta['description'];?> </p></div><br />
						</div>
					</div>
					<?php if(isset($product_terms[0]) && $product_terms[0]->count >1 ) { ?>
					<h4 class="heading-related-products"><?php _e( "Related Products", 'sis_spa' ); ?> <?php  echo  $product_terms[0]->name ;?></h4> 
					<div  class="spa-Products">
						<div class="item">
						<?php  $args = array(
							'post_type' => 'spa_products',			
							'post__not_in'   => array($id),
							'tax_query' => array(
							array(
							'taxonomy' => 'product_categories',
							'field' => 'name',
							'terms' =>  $product_terms[0]->name,
							)
							)
						);  
						$query = new WP_Query( $args );
						while($query->have_posts()): $query->the_post();?>
							<span class="spa-products-thumbnail">
								<?php $defalt_arg =array('class' => "spa-products-img" )?>
								  <?php if(has_post_thumbnail()):?>
									<a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
									<?php endif;?>
									<h4> <a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_title(); ?></a>
									</h4>
									<?php  $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
									<p><?php if(isset($my_meta['description'])) echo $my_meta['description'];?></p>
									<br />
									<a href=" " class="spa-products-btn"><?php if(isset($my_meta['price'])) echo $my_meta['price'];?>
									</a>
							</span>
<?php endwhile; ?></div></div> <?php }?>
</div><?php get_sidebar();?></div></div>	
<?php get_footer();?>