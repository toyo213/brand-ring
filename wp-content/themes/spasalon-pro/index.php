<?php 
	get_header();
	$current_options=get_option('spa_theme_options');
	$data = $current_options['front_page_data'];	
	if($data) 
	{
		
		foreach($data as $key=>$value)
			{
				switch($value) 
				{
					case 'slider':
					get_template_part('index', 'slider');
					echo '<div class="for_mobile">';
					break;
					
					case 'Service Section':	?>
					<div class="container">			
						  <div class="jumbotron">
							 <?php if($current_options['tagline_title']!=''){?>
							 <h1 class="home_tagline"><?php echo $current_options['tagline_title'] ?></h1>
							<p><?php echo $current_options['tagline_contents'] ?> </p>
							<?php } ?>
						  </div>
					</div>
					<?php get_template_part('index', 'services'); 
					break;
					
					case 'Service Section':	?>
					<div class="container">			
						  <div class="jumbotron">
							 <?php if($current_options['tagline_title']!=''){?>
							 <h1 class="home_tagline"><?php echo $current_options['tagline_title'] ?></h1>
							<p><?php echo $current_options['tagline_contents'] ?> </p>
							<?php } ?>
						  </div>
					</div>
					<?php get_template_part('index', 'services'); 
					break;
					
					case 'product section':	?>
					<div class="container-fluid">
						<div class="container">		
						<div class="jumbotron">
							<h1 class="home_product_tagline"><?php echo $current_options['product_title'] ?></h1>
							<p><?php echo $current_options['product_contents'] ?></p>
						</div>
						<?php get_template_part('index','product')?>
						</div>
					</div>
					<?php 
					break;
				}
			}
	}
	?>		
<?php get_footer();?>