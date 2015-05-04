 <?php 	/*
			Template Name:Product
		*/ ?>
<?php 
	get_template_part('pink','header');
	$categories = get_categories('taxonomy=product_categories&hide_empty=1'); 
	?>
<div class="container">
	<?php foreach($categories as $category) 
	{ ?><h2 class="spa-products-heading"><?php echo $category->name; ?>	</h2> 
		<div  class="spa-Products">
			<div class="item">
				<?php 
				$args = array('post_type' => 'spa_products','tax_query' => array(array('taxonomy' => 'product_categories',	'field' => 'slug','terms' => $category->slug )));				
				$query = new WP_Query( $args );
				while($query->have_posts()): $query->the_post();		
				$my_meta = get_post_meta($post->ID,'_my_meta',TRUE);
				if(isset($my_meta['link']))
				{	$meta_value_link = $my_meta['link']; }
				else
				{	$meta_value_link = get_permalink(); } 
				
				if(isset($my_meta['check']))
				{ $target ='target="_blank"';  }
				else 
				{ $target ='target="_self"';  }
				?>
				<span class="spa-products-thumbnail">
					<?php $defalt_arg =array('class' => "spa-products-img" )?>
					<?php if(has_post_thumbnail()):?>
							<a <?php echo $target; ?> href="<?php echo $meta_value_link; ?>"title="<?php the_title(); ?>">
							<?php the_post_thumbnail('', $defalt_arg); ?>
							</a>
					<?php endif; ?>
					<h4><a <?php echo $target; ?> href="<?php echo $meta_value_link; ?>"><?php the_title(); ?></a></h4>
					<p><?php if(isset($my_meta['description']))echo $my_meta['description'];?></p><br />
					<a  class="spa-products-btn"><?php if(isset($my_meta['price'])) echo $my_meta['price']; ?></a>
				</span>
				<?php endwhile; ?>
			</div>
		</div><?php
	} ?>
</div><!--  container of products-->
<?php  get_footer(); ?>