<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php	$spa_current_options=get_option('spa_theme_options'); ?>
		
	<?php if($spa_current_options['upload_image_favicon']!=''){?>
		<link rel="shortcut icon" href="<?php  echo $spa_current_options['upload_image_favicon']; ?>" /> 
		<?php }?>
		<?php if($spa_current_options['color_scheme_style'])
			{ $default = $spa_current_options['color_scheme_style']; } else { $default="default.css"; } ?>
		
		<!--<link rel="stylesheet" href="<?php echo get_template_directory_uri()."/css/".$default; ?>" type="text/css" media="screen" />		-->
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />		
		<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="container">
	<div style="position: static;" class="navbar navbar-inverse">
              <div class="navbar-inner">
				<div class="container">
					  <a data-target=".navbar-inverse-collapse" data-toggle="collapse" class="btn btn-navbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </a>
					<?php 	if($spa_current_options['upload_image']!='') { ?>
			        <a href="<?php echo home_url( '/' ); ?>" class="brand">
					<img src="<?php echo $spa_current_options['upload_image']; ?>" style="height:<?php echo $spa_current_options['height'].'px' ?>; width:<?php echo $spa_current_options['width'].'px'; ?>;" alt="Spa Logo" class="logo-img" />
					</a>
					<?php  } else { ?>
					<a href="<?php echo home_url( '/' ); ?>" class="brand">
					<img src="<?php echo get_template_directory_uri();?>/images/spa_logo.png" alt="spasalon" /></a>
					<?php } ?>
                <div class="nav-collapse collapse navbar-inverse-collapse">
                    <?php
						wp_nav_menu( array(  
						   'theme_location' => 'header-menu',
						  'container'  => 'nav-collapse collapse navbar-inverse-collapse',
						   'menu_class' => 'nav',
						   'fallback_cb' => 'spa_fallback_page_menu',
						   'walker' => new spasalon_nav_walker()
							)
							);
						?> 
				</div><!-- /.nav-collapse -->
				</div>
              </div><!-- /navbar-inner -->
    </div>
</div>