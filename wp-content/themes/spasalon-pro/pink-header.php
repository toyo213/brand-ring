<?php 
get_header();
$current_options=get_option('spa_theme_options');
$call_us=$current_options['call_us'];
$call_us_text=$current_options['call_us_text']; 
$my_meta = get_post_meta($post->ID,'_my_meta',TRUE); 
	if(is_category()){
	$bd=$current_options['banner_description_category'];
	$h1=$current_options['banner_title_one_category'];
	$h2=$current_options['banner_title_two_category'];
	}
	else if(is_archive())
	{
	$bd=$current_options['banner_description_author'];
	$h1=$current_options['banner_title_one_author'];
	$h2=$current_options['banner_title_two_author'];
	}
	else if(is_404())
	{
	$bd=$current_options['banner_description_404'];
	$h1=$current_options['banner_title_one_404'];
	$h2=$current_options['banner_title_two_404'];
	}
	else if(is_tag())
	{
	$bd=$current_options['banner_description_tag'];
	$h1=$current_options['banner_title_one_tag'];
	$h2=$current_options['banner_title_two_tag'];
	}
	else if(is_search())
	{
	$bd=$current_options['banner_description_tag'];
	$h1=$current_options['banner_title_one_tag'];
	$h2=$current_options['banner_title_two_tag']; 
	}
	else
	{
	if($my_meta){
	$h1=$my_meta['heading_one'];
	$h2=$my_meta['heading_two'];
	$bd=$my_meta['banner_description'];
	}}
$spa_bannerstrip_enable=$current_options['spa_bannerstrip_enable'];
if($spa_bannerstrip_enable == 'yes')
{ 	?>
<!--   pink strip--> 
<div class="container">
		 <div class="pink-container">		 
			<div class="row-fluid">
				<div class="span3" style="margin-top:20px;margin-left:5px; width:auto;">
				<dl class="pink_title">
					<dt><?php if(isset($h1)){ echo $h1; } else{ echo "GET YOURSELF"; } ?>		</dt>
					<dt><h1 class="pink-head"><?php if(isset($h2)) { echo $h2; } else{	echo "REFRESHED"; } ?></h1>
					</dt>
					</dl>
				</div>
				<div class="span6" style="margin-top:20px"><p><?php if(isset( $bd)){ echo $bd;}  else{ 
				  echo " Banner Description Donec justo odio, lobortis eget congue sed, rutrum sit amet mauris. Curabitur sed lectus nulla. Curabitur sed lectus nulla.lobortis eget congue sed, rutrum sit amet mauris. Curabitur sed lectus nulla rutrum sit amet mauris ";}?></p>
				</div>
				<div class="spa_tag">
				<span>
				<?php if($call_us_text){ echo $call_us_text; ?>
				<p><?php echo $call_us ?></p>
				<?php } ?>
				</span>
				</div> 
			</div>
		</div>
</div>
<?php }  ?>