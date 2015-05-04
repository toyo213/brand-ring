<?php $current_options=get_option('spa_theme_options'); ?>
<div class="container">	  
	<div class="row">
		<?php 	$i=1;
				$total_tagline_items = $current_options['tagline_item'];
				$arg = array( 'post_type' => 'spa_services','posts_per_page' => $total_tagline_items );
				$loop = new WP_Query( $arg );
				if($loop->have_posts() ){
				while ( $loop->have_posts() ) : $loop->the_post();
				$my_meta = get_post_meta($post->ID,'_my_meta',TRUE);
				if(isset($my_meta['link']))
				{	$meta_value_link = $my_meta['link'];	}
				else
				{	 $meta_value_link = get_permalink(); } 
				if(isset($my_meta['check']))
				{	$target ='target="_blank"';  } else { $target ='target="_self"';  } ?>
			<div class="span3">			
			<h4 class="home_service"><a  href="<?php echo $meta_value_link; ?>" <?php echo $target; ?> title="<?php the_title(); ?>"><?php the_title(); ?></a> </h4>
				<div class="thumbnail">
				<?php $defalt_arg =array('class' => "home_service_img" )?>
				<?php if(has_post_thumbnail()):?>
				<a   href="<?php echo $meta_value_link; ?>" <?php echo $target; ?> title="<?php the_title(); ?>"  ><?php the_post_thumbnail('service-home-thumb', $defalt_arg); ?></a>
				<?php endif;?>
				<div class="home_service_para">
					<p><?php echo services_excerpt();?> </p>				        		  
				</div>
				</div>
				<div class="spacer"></div>
			</div><?php if($i%4==0){ echo "<div class='clearfix'></div>"; } $i++; endwhile; ?><?php }  else { //if close ?>
		<?php  require_once('default_services.php')?><?php } ?>		   
	</div>	
</div>