<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elite Construction Industry
 */

get_header(); ?>
<section id="service-page">
	<div class="featured-img">
		<div class="post-thumbnail">
			<?php
		        if ( has_post_thumbnail() ) : ?>
		            <a  href="<?php the_permalink(); ?>" class="img-responsive center-block" ><?php the_post_thumbnail(); ?></a>
		        <?php endif;
			?>
		</div>
		<div class="single-meta-box">
			<h2 class="my-3"><?php the_title(); ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="row">		 
			<div class="col-lg-8 col-md-8">
				<div class="site-content">
					<?php 
						if( have_posts()) :  the_post(); ?>
						
						<?php the_content(); 
						endif;
						if( $post->comment_status == 'open' ) { 
							comments_template( '', true ); // show comments 
						}
						wp_link_pages(
	                        array(
	                          	'before' => '<div class="section-pagination">',
                          		'after' => '</div>',
	                          	'link_before' => '<span class="inner-pagination">',
	                          	'link_after' => '</span>'
	                        )
                      	);
					?>
				</div><!-- /.posts -->		
			</div><!-- /.col -->
			<!--/End of Blog Detail-->
			<div class="col-lg-4 col-md-4 sidebar">
				<?php get_sidebar(); ?>	
			</div>
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>

<?php get_footer(); ?>

