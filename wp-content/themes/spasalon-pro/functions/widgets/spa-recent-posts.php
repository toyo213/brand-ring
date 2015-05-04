<?php 
// Register 'Recent Custom Posts' widget
add_action( 'widgets_init', 'init_rcp_recent_posts' );
function init_rcp_recent_posts() { return register_widget('Spa_Recent_Posts'); }

class Spa_Recent_Posts extends WP_Widget {
	/** constructor */
	function Spa_Recent_Posts() {
		parent::WP_Widget( 'rcp_recent_custom_posts', $name = 'Spa Recent Posts' );
		 $widget_ops = array( 'classname' => 'Spa_Recent_Posts','name'=>__('Spa Recent Posts','sis_spa' ) ,'description' => __('The most recent posts on your site','sis_spa') );
        $this->WP_Widget( 'Spa Recent Posts', __('Spa Recent Posts','sis_spa'), $widget_ops);	
	}

	function widget( $args, $instance ) {
		global $post;
		extract($args);
		
		//print_r($instance);
	    // $number=$instance['number'];
		//$title 	 = apply_filters('widget_title', $instance['title'] ); // Title	
         if(isset($instance['title'])){$title=$instance['title'];} else{$title="Recent Blog Posts";}		
		if(isset($instance['number'])){$number=$instance['number'];} else{$number=3;} // Number of posts to show
	// echo $before_widget; ?>

		<div class="span12" id="widget-title"><h4 class="spa-widget-title">
		<?php
	    if ( $title ){ echo  $title; } else{ echo "Recent Blog Posts" ;}
		 if ( !$number ){$number=3;}
		?>
		</h4></div>	
		<div id="custom-wzrp" class="span12" style="margin: 0px;" >	
		<?php
		$loop = new WP_Query(array( 'post_type' => 'post', 'showposts' => $number ));
		if( $loop->have_posts() ) : 
          while ( $loop->have_posts() ) : $loop->the_post();?>
				
					<div class="media sidebar-thumb">
                        <?php $defalt_arg =array('class' => "media-object sidebar-img" )?>
							<?php if(has_post_thumbnail()):?>
							<a id="cw-img-border" class="pull-left" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"  ><?php the_post_thumbnail('blog-widget-thumb', $defalt_arg); ?></a>
							<?php endif;?>
                        <div class="media-body ">
                        <p><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></p>
						<p> <?php //the_date('M j,Y');
						 echo  get_the_date( 'M j,Y' );
						 ?></p>
                        </div>
                    </div>
					
			<?php endwhile; ?>
	
			
		<?php endif; ?>
   </div>

<?php	
	//echo $after_widget	
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
	
	/**
	* Widget settings
	**/
	function form( $instance ) {	
	
		    // instance exist? if not set defaults
		    if ( $instance ) {
				$title  = $instance['title'];
	
		        $number = $instance['number'];
				
		    } 
			else {
			    //These are our defaults
				$title  = 'Recent Blog Posts';
		        $number = '3';
		    }
			
			// The widget form
			?>
			<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php echo __( 'Title:','sis_spa'); ?></label>
			<input id="<?php echo $this->get_field_id('title'); ?>" placeholder="Enter Title For WIDGET" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" class="widefat" />
			</p>
			
			<p>
			<label for="<?php echo $this->get_field_id('number'); ?>"><?php echo __( 'Number of posts to show:','sis_spa'  ); ?></label>
			<input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" />
			</p>
			<br />
	<?php 
	}

} // class rcp_recent_posts
?>