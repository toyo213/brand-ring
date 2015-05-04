<?php if(is_active_sidebar('sidebar-primary')){ ?>
<!-- Spa-Saloon Sidebar -->
<div class="span4" id="sidebar">	
			       <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-primary') ) : ?> 
				    	   
										  
					<?php endif;?>
</div><!-- /Spa-Saloon Sidebar -->

<?php } ?>
