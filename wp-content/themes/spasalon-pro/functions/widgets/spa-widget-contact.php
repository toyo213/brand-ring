<?php
add_action( 'widgets_init', 'WP_spa_contact' );
function WP_spa_contact() {
	register_widget( 'WP_spa_contact' );
}
class WP_spa_contact extends WP_Widget {
	function WP_spa_contact() {
		$widget_ops = array( 'classname' => 'Contact', 'description' => __('A widget that displays the authors contacts ', 'sis_spa') );
		
		$control_ops = array( 'width' => 200, 'height' => 300, 'id_base' => 'example-widget' );
		
		$this->WP_Widget( 'example-widget', __('Spa Contact Widget', 'sis_spa'), $widget_ops, $control_ops );
	}
	function widget( $args, $instance ) {
		extract( $args );
    
		//$title = apply_filters('widget_title', $instance['title'] );
        if(isset($instance['title'])){$title=$instance['title'];} else{$title="Contact Us";}
          if(isset($instance['contactno'])){$contactno=$instance['contactno'];} else{$contactno="18001234567";}	
  if(isset($instance['email'])){$email=$instance['email'];} else{$email="XYZ@XYZ.com";}	
  if(isset($instance['city'])){$city=$instance['city'];} else{$city="NY'USA";}?>
	
<div class="span12" id="widget-title">
	<h4 class="spa-widget-title">
			<?php if ( $title ){  echo  $title ;}?>
	</h4>
</div>
<div class="span12" style="margin: 0px;">
    <span class="sidebar-phone">
		   <?php if ($contactno){ ?>  <?php echo $contactno;}?> 
    </span>
	<span class="sidebar-mail">
	<?php 	if ( $email ){ ?> <a href="mailto:<?php echo $email ;?>"><?php echo $email ; }?></a> 
    </span>
	<span class="sidebar-city">
    <?php	if ($city ){ ?>  <?php echo $city ;}?> 
     </span>
</div><?php //echo $after_widget;
}
function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		//Strip tags from title and name to remove HTML 
		$instance['title'] = strip_tags( $new_instance['title'] );
		//$instance['name'] = strip_tags( $new_instance['name'] );
		$instance['contactno'] = strip_tags( $new_instance['contactno'] );
		$instance['email'] = strip_tags( $new_instance['email'] );
		$instance['city'] = strip_tags( $new_instance['city'] );
		return $instance;
	}
function form( $instance ) {
		
	//Set up some default widget settings.
	$defaults = array( 'title' => __('Contact Us', 'sis_spa'), 'contactno' =>'18001234567' ,'email' => 'XYZ@XYZ.com','city' => 'NY,USA');
	$instance = wp_parse_args( (array) $instance, $defaults );  ?>
	<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'sis_spa'); ?></label>
			<input id="<?php echo $this->get_field_id( 'title' ); ?>" placeholder="Contact Us" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" style="width:100%;" />
	</p>
	<p>
			<label for="<?php echo $this->get_field_id('contactno'); ?>"><?php _e('Your Contact Number','sis_spa');?></label>
			<input id="<?php echo $this->get_field_id('contactno'); ?>" placeholder="Enter Contact Number" name="<?php echo $this->get_field_name('contactno'); ?>" value="<?php echo $instance['contactno']; ?>" style="width:100%;" />
	</p>
	<p>
			<label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Your  email','sis_spa');?></label>
			<input  id="<?php echo $this->get_field_id('email'); ?>"  placeholder="Enter Email" name="<?php echo $this->get_field_name('email'); ?>" value="<?php echo $instance['email']; ?>" style="width:100%;" />
	</p>
	<p>
			<label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('Your  city','sis_spa');?></label>
			<input id="<?php echo $this->get_field_id('city'); ?>" placeholder="Enter City" name="<?php echo $this->get_field_name('city'); ?>" value="<?php echo $instance['city']; ?>" style="width:100%;" />
	</p>
<?php 	} } ?>