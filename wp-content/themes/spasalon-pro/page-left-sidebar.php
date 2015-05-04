<?php  //Template Name: Left Sidebar Page ?>
<?php get_template_part('pink','header')?>
<!-- Container for products -->
<div class="container">
		 <!-- Main --> 
		 <div class="_blank"></div>
			<div class="row-fluid" style="margin: 0px;">
			<?php get_sidebar();?>
				
					<div class="<?php if(!is_active_sidebar('sidebar-primary')){ echo 'span12'; }else { echo 'span8'; } ?>">
						<?php the_post();?>
							<h2 class="blog_detail_head"><?php the_title(); ?></h2>
							<?php //$defalt_arg =array('class' => "full-width-img" )?>
							<?php //if(has_post_thumbnail()):?>
								<!--<div class="media" >
									<a href="<?php //the_permalink(); ?>"title="<?php //the_title(); ?>"><?php //the_post_thumbnail('', $defalt_arg); ?></a>
								</div>-->
							<?php //endif;?> 
								<div class="media"><div class="media-body">
									 <div class="blog-detail-content"><p><?php the_content(); ?> </p></div>
								</div></div>
					</div>
			</div>
</div><?php get_footer();?>