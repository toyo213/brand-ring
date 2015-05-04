<?php
//get shortcodes pop-up editor == in the dashboard only, would be silly to load on the front end
if(defined('WP_ADMIN') && WP_ADMIN ) {	require_once('shortcode_popup.php'); }
/*--------------------------------------*/

/*--button--*/
function button_shortcode( $atts,$content = null ){	
   $atts = shortcode_atts(
    array(
      	'style' => '',
      	'size' => 'small',		
		'target'=> 'self',
		'url' => '#',
		'textdata' => 'Button'
		),
      $atts );
	 
	 
	$size = $atts['size'];
	$style = $atts['style'];
	
	$url = $atts['url'];
	$target = $atts['target'];	
		
		
		$target = ($target == 'blank') ? ' target="_blank"' : '';
		
		$style = ($style) ? ' '.$style : '';
	     
	  
	$out = '<a' .$target. ' class="' .$style.' '. $size.'  " href="' .$url. '" target="' .$target. '">' .do_shortcode($content). '</a>';
	

	
	return $out;
}
add_shortcode('button', 'button_shortcode');


/*heading--------------------------------------*/
function heading_shortcode( $atts, $content = null  ) {

	extract( shortcode_atts(
		array(
			'title' => __('Heading Title', 'sis_spa'),
			'heading_style' => 'h1',
		
      	), $atts ));
	// print_r($atts);
     $heading_style=$atts['heading_style'];
	 $title=$atts['title'];
	$out='';

	$out.='<'.$heading_style.' class="heading'.$heading_style.'">'.$title.'</'.$heading_style.'>';

	return $out;
}

add_shortcode( 'heading', 'heading_shortcode' );

/*--------------------------------------*/
/*-----------Tabs short code-----------*/

if (!function_exists('tabgroup')) {
	function tabgroup( $atts, $content = null ) 
	{	 $tabs_style = $atts['tabs_style'];
		if($tabs_style=='Vartical')
		{  $tabs_style='tabbable tabs-left'; }
		else
		{ $tabs_style='tabbable'; }
		
		// Extract the tab titles for use in the tab shortcode
		preg_match_all( '/tabs_title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$output = '';	
		if( count($tab_titles) )
		{	$output .= '<div class="'.$tabs_style.'"><ul class="nav nav-tabs" >';			
			$count=0;
			foreach( $tab_titles as $tabs_title )
			{   if($count==0) {
				$tabs_title[0] = str_replace(' ', '_', $tabs_title[0]);
				$output .= '<li class="active"><a data-toggle="tab" href="#'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $tabs_title[0]).'">'.$tabs_title[0].'</a></li>';
				 } else 
				 {$tabs_title[0] = str_replace(' ', '_', $tabs_title[0]);
					$output .= '<li class=""><a data-toggle="tab" href="#'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $tabs_title[0]).'">'.$tabs_title[0].'</a></li>';
				}
				$count++;
			}
			
		    $output .= '</ul><div class="tab-content" >';			
		    $output .= do_shortcode( $content );			
		}	 
		$output .= '</div></div>';
		return $output;	
	}
	add_shortcode( 'tabgroup', 'tabgroup' );
}

function tabs_shortcode( $atts, $content = null ){
	$atts = shortcode_atts(array(
		'tabs_title' => 'This is tabs heading',
		'tabs_text' => 'Description',
		'tabs_style'=> 'style'
	), $atts );	   
	$tabs_title = $atts['tabs_title'];
	$tabs_text = $atts['tabs_text'];
	$tabs_style = $atts['tabs_style'];
	$tabs_title = str_replace(' ', '_', $tabs_title);	
	$out='<div id="'.preg_replace('~[^A-Za-z\d\s-]+~u', 'wr', $tabs_title).'" class="tab-pane"><p>'.do_shortcode( $tabs_text ).'</p>'.do_shortcode( $content ).'</div>';		  
	return $out;	
}
add_shortcode( 'tabs', 'tabs_shortcode' );	



/* list shortcodes--------------------------------------*/
function list_shortcode_unorder( $atts, $content = null  ) {
	extract( shortcode_atts(
	array(	'list_style' => __('1', 'sis_spa'),
		    'list_type'=>__('order','sis_spa'),
		), $atts ));	
    $list_style=$atts['list_style'];
	$list_type=$atts['list_type'];
    if($list_type=='unorder')
	{
		$output='';
		$output='<ul class="typolist" >';
		$output .= do_shortcode( $content );
		$output.='</ul>';
		return $output;
	}
	else
	{  	$output='';
		$output='<ul class="typo-integer">';
		$output .= do_shortcode( $content );
		$output.='</ul>';	
		return $output;	
	}
}

add_shortcode( 'list', 'list_shortcode_unorder' );

function list_shortcodes( $atts, $content = null ) {
	extract( shortcode_atts( array( 'list_text' => ''), $atts ) );
	$list_text=$atts['list_text'];		
	$output='<li>'.$list_text.'</li>';
	return $output;
}
add_shortcode('list_item', 'list_shortcodes');

/*-----------Alert short code-----------*/

function alert_shortcode( $atts, $content = null ){
      $atts = shortcode_atts(
    array(
      	'alert_heading' => 'Please enter alert heading',     
		'alert_text' => 'Please enter text in alert text',
		'alert_style'=>'',
		'alert_color'=>'af706f'
		),
      $atts );
	$alert_heading = $atts['alert_heading'];
	$alert_text = $atts['alert_text'];
	$alert_style = $atts ['alert_style'];
	$alert_color = $atts ['alert_color'];
	
	

	$out='<div class="'.$alert_style.'">
	       <button data-dismiss="alert" class="close" type="button" style="color:#'.$alert_color.'" >x</button>
		   <strong>'.$alert_heading.'</strong>'.$alert_text. do_shortcode($content).'</div>';
	
	return $out;
}
add_shortcode( 'alert', 'alert_shortcode' );

function webriti_shortcode_row($params, $content = null) {
    extract(shortcode_atts(array(
        'class' => ''
    ), $params));	
    $result = '<div class="row-fluid">';
    $content = str_replace("]<br />", ']', $content);
    $content = str_replace("<br />\n[", '[', $content);
    $result .= do_shortcode($content);
    $result .= '</div>';

    return $result;
}
add_shortcode('row', 'webriti_shortcode_row');

/*--------------------------------------*/
/*	Columns
/*--------------------------------------*/
function column_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array('offset' =>'','size' => 'span6' ), $atts ) );	
	$atts = shortcode_atts( array(	'offset' => '','size' => 'span6'), $atts );
	$out = '<div class="'.$size.'">' . do_shortcode($content). '</div>';
	return $out;
}
add_shortcode('column', 'column_shortcode');

/*-----------Services short code-----------*/

function service_shortcode( $atts )
{	extract(shortcode_atts( array('category' => 'misc','style' =>'one-column'), $atts ));
	if($atts['style']=="one-column")
	{	$args = array(
		'post_type' => 'spa_services',
		'tax_query' => array(
		array(
			'taxonomy' => 'services_categories',
			'field' => 'slug',
			'terms' => $atts['category'],
		)));
	$query = new WP_Query( $args ); ?>
	<div class="span12 service-1c-xpt shortcode-service-heading"><hr>
	<?php	while($query->have_posts()): $query->the_post(); ?>
		<div class="media service-1c">
                <?php $defalt_arg =array('class' => "service_one_img" )?>
               <?php if(has_post_thumbnail()):?>
	            <a class="pull-left" href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('service-one-thumb', $defalt_arg); ?></a>
                <?php endif; ?>
              <div class="media-body">
                <h4 class="service-media-heading"><a class="service-media-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <div class="services-content"><p><?php echo get_the_other_excerpt(); ?></p></div><br/>
			  </div>
        </div> <?php   
	endwhile;
	echo "</div>";
	}
	
	if($atts['style']=="two-column")
	{ ?>
	<div class="row">
		<div class="span12 service-2c-xpt shortcode-service-heading"><hr></div>
		<?php	$args = array(
				'post_type' => 'spa_services',
				'tax_query' => array(
				array(	'taxonomy' => 'services_categories',
						'field' => 'slug',
						'terms' => $atts['category'],
					)));
					
		$query = new WP_Query( $args ); ?>
		<ul class="thumbnails">
		<?php 
		while($query->have_posts()): $query->the_post();?>
			<li class="span6" style="margin-bottom:60px;margin-left:0px;" >
				<div class="media"  >
						<?php $defalt_arg =array('class' => "service_two_img"); ?>
						<?php if(has_post_thumbnail()): ?>
						<a class="pull-left" href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('service-two-thumb', $defalt_arg); ?></a>
					   <?php endif; ?>
					<div class="media-body">
						<h4 id="service-media-heading">
						<a class="service-media-heading" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="services-content"><p><?php echo get_service_two_excerpt(); ?></p></div>
					</div>
				 </div>
			</li><?php 
		endwhile;
		echo "</ul>"; ?>
	</div>
<?php } 
}

add_shortcode( 'service', 'service_shortcode' );
/*-----------Product short code-----------*/
function product_shortcode( $atts )
{	global $post;
	extract(shortcode_atts(array('category' => 'misc'),$atts ));
?>
<div  class="spa-Products">
	<div class="item">
	<?php	$args = array(
				'post_type' => 'spa_products',
				'tax_query' => array(
				array(
					'taxonomy' => 'product_categories',
					'field' => 'slug',
					'terms' => $atts['category'])));
		$query = new WP_Query( $args );
		while($query->have_posts()): $query->the_post(); ?>
			<span class="spa-products-thumbnail" style="padding-left:10px;padding-right:10px;padding-top:10px">
				<?php $defalt_arg =array('class' => "spa-products-img"); ?>
				<?php if(has_post_thumbnail()): ?>
				<a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a><?php endif; ?>
				<h4 style="margin-top:10px"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				<?php  $my_meta = get_post_meta($post->ID,'_my_meta',TRUE); ?>
				<p style="line-height:12px;font-size:12px"><?php if(isset($my_meta['description']))echo $my_meta['description']; ?></p><br />
				<a  class="spa-products-btn"><?php if(isset($my_meta['price'])) echo $my_meta['price']; ?></a>
			</span>
		<?php endwhile; ?>
	</div>	
</div><!-- end container--->
<?php
}
add_shortcode( 'product', 'product_shortcode' );
?>