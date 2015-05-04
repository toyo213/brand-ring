<!---Pink Strip----->
<?php get_template_part('pink','header')?>
<div class="container">
		<div class="_blank"></div>
		 <!-- Main --> 
			<div class="row-fluid">
			  <!-- Spa-Saloon main Content --> 
				<div class="<?php if(!is_active_sidebar('sidebar-primary')){ echo 'span12'; }else { echo 'span8'; } ?>" > 
					<h2 class="blog_detail_head">
						<?php  _e( "Category  Archives:", 'sis_spa' ); echo single_cat_title( '', false ); ?>
					</h2>
						<?php  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$category_id=get_query_var('cat');
						$args = array( 'post_type' => 'post','paged'=>$paged, 'cat'=> $category_id); 	
					    query_posts( $args );
						while(have_posts()): the_post();?>
					<div class="media" id="blog-media">
							<div class="blog-icon-media"> 
								<?php $defalt_arg =array('class' => "blog-img" )?>
									<?php if(has_post_thumbnail()):?>
										<a class="pull-left" href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_post_thumbnail('', $defalt_arg); ?></a>
									<?php endif;?>
					  		  <ul class="spa-blog-icon clearfix">
								<li class="admin-icon"> <a href="#"><?php the_author();?></a></li>
								<li class="calendar-icon"><a href="#"><?php the_date('M j,Y');?> </a></li>
								<li class="comment-icon">  <?php  comments_popup_link( __( 'Leave a comment', 'sis_spa' ),__( '1 Comment', 'sis_spa' ), __( '% Comments', 'sis_spa' ),'name' ); ?></li>
								</ul>
							</div>
					    <div class="media-body">
						 <h4><a  class="blog-heading" href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_title(); ?></a>
						 </h4>
					     <div class="blog_content"> <p><?php echo get_the_other_excerpt();?></p></div><br>
							<?php if(wp_link_pages(array('echo'=>0))):?>
								<div class="pagi pagi-large">
									<ul class="pager">
									<?php // $args=array('before' => '<li>'.__('Pages:','sis_spa'),'after' => '</li>' );
										$args=array('before' =>'<li>'.__('Pages:','sis_spa'),'type'=> 'list','after'=>'</li>' );
										wp_link_pages($args); ?>
									</ul>
								</div>
							<?php endif;?> 
						</div>
					</div><?php endwhile;?>		 
					<?php pagination(); ?>
				</div><?php get_sidebar();?>
			</div>
</div><?php  get_footer(); ?>