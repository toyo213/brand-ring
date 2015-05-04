<?php
$count_posts = wp_count_posts( 'spa_products')->publish;				
$arg = array( 'post_type' => 'spa_products','posts_per_page' =>$count_posts );					  
	 $loop = new WP_Query( $arg );				
	 if($loop->have_posts() ){
?>
<div id="main" role="main">
    <section class="slider" style="padding:0px;">
        <div class="flexslider carousel product_manage">         
		  <ul class="slides" id="flex_new">
			<?php  while ( $loop->have_posts() ) : $loop->the_post();?>
			<?php  $my_meta = get_post_meta($post->ID,'_my_meta',TRUE);
			if(isset($my_meta['link']))
			{	$meta_value_link = $my_meta['link'];	}
			else
			{	 $meta_value_link = get_permalink(); } 
			if(isset($my_meta['check']))
			{	$target ='target="_blank"';  } else { $target ='target="_self"';  } ?>	
		    <li><?php $defalt_arg =array('class' => "product_flex_img" )?>
                <?php if(has_post_thumbnail()):?>
	            <a href="<?php echo $meta_value_link; ?>" <?php echo $target; ?> title="<?php the_title(); ?>"><?php the_post_thumbnail('product-home-image', $defalt_arg); ?></a>
                <?php endif;?>
                <h4><a  href="<?php echo $meta_value_link; ?>" <?php echo $target; ?> title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
				<?php  $my_meta = get_post_meta($post->ID,'_my_meta',TRUE);  ?>
				<p><?php if(isset($my_meta['description']))
				echo $my_meta['description'];?></p>
            </li><?php endwhile; ?>
	       </ul>
	    </div>
	</section>
</div>
<?php } else { require_once('default_products.php'); }?>