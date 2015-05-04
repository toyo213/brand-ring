<?php
add_action( 'widgets_init', 'init_rcp_recent_products' );
function init_rcp_recent_products() { return register_widget('Spa_Recent_Products'); }

class Spa_Recent_Products extends WP_Widget {
	/** constructor */
	function Spa_Recent_Products() {
		parent::WP_Widget( 'rcp_recent_custom_products', $name = 'Spa Recent Products' );
		$widget_ops = array( 'classname' => 'Spa_Recent_Products', 'description' => __('The most recent products on your site','sis_spa') );
         $this->WP_Widget( 'Spa Recent Products', __('Spa Recent Products','sis_spa'), $widget_ops);
	}

	/**
	* This is our Widget
	**/
	function widget( $args, $instance ) {
		global $post;
		extract($args);

		// Widget options
		//$title 	 = apply_filters('widget_title', $instance['title'] ); // Title		
	
	    if(isset($instance['title'])){$title=$instance['title'];} else{$title="Recent Products";}		
		if(isset($instance['number'])){$number=$instance['number']; } else{$number=3;} // Number of posts to show
		
		?>
		
		<div class="span12" id="widget-title"><h4 class="spa-widget-title">
		<?php
	      if ( $title ){ echo $title; } else {echo"Recent Products";} 
		   if ( !$number ){$number=3;}
		?>
		</h4></div>	
	<div  id="custom-wzrp" class="span12" style="margin: 0px;">	
		<?php
		$product = new WP_Query(array( 'post_type' => 'spa_products', 'showposts' => $number ));
		if( $product->have_posts() )  
        { 	while ( $product->have_posts() ) : $product->the_post(); 
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
			<div class="media sidebar-thumb">
				<?php $defalt_arg =array('class' => "media-object sidebar-img"); ?>
					<?php if(has_post_thumbnail()):?>
					<a id="cw-img-border" class="pull-left" href="<?php echo $meta_value_link; ?>" <?php echo $target; ?> title="<?php the_title(); ?>"  >
					<?php the_post_thumbnail('product-widget-thumb', $defalt_arg); ?></a>
					<?php endif; ?>
				<div class="media-body">
			  <p><a   href="<?php echo $meta_value_link; ?>" <?php echo $target; ?> title="<?php the_title(); ?>"  > <?php the_title(); ?>
			  </a>
			  </p>
			  <?php $my_meta = get_post_meta($post->ID, '_my_meta', TRUE); ?>
			  <?php if(isset($my_meta['price']))?>
			  <p>  <?php if(isset($my_meta['price'])) echo $my_meta['price']; ?><p>
				<?php //echo get_the_date('M j,Y');?>
				</div>
			</div>		
			<?php endwhile; 
		} ?>
	</div>
	
		<?php
		// echo widget closing tag
		//echo $after_widget;
	}

	/** Widget control update */
	function update( $new_instance, $old_instance ) {
		$instance    = $old_instance;
		
		//Let's turn that array into something the Wordpress database can store
		$types       = implode(',', (array)$new_instance['types']);

		$instance['title']  = strip_tags( $new_instance['title'] );

		$instance['number'] = strip_tags( $new_instance['number'] );
		return $instance;
	}
	

	function form( $instance ) {	
	
		    // instance exist? if not set defaults
		    if ( $instance ) {
				$title  = $instance['title'];

		        $number = $instance['number'];
			
		    } else {
			    //These are our defaults
				$title  = 'Recent Products';
	
		        $number = '3';
		    }
			
			// The widget form
			?>
			<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __( 'Title:','sis_spa'  ); ?></label>
			<input id="<?php echo $this->get_field_id('title'); ?>" placeholder="Enter Title For WIDGET" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" class="widefat" />
			</p>
			
			<p>
			<label for="<?php echo $this->get_field_id('number'); ?>"><?php echo __( 'Number of posts to show:','sis_spa'); ?></label>
			<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
			</p>
			<br />
	<?php 
	}
} 
?>