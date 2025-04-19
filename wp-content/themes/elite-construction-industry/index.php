<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Elite Construction Industry
 */

get_header(); ?>

<section id="blog-content">
	<div class="featured-img">
		<div class="post-thumbnail">
			<?php
		        if ( has_post_thumbnail() ) : ?>
		            <a  href="<?php the_permalink(); ?>" class="img-responsive center-block" ><?php the_post_thumbnail(); ?></a>
		        <?php endif;
			?>
		</div>
		<div class="single-meta-box">
			<h2 class="my-3"><?php esc_html_e('Blog Page', 'elite-construction-industry'); ?></h2>
		</div>
	</div>
	<div class="container">
		<div class="row">			
			<?php
				get_template_part( 'template-parts/layouts');
		    ?>
		</div>	
	</div>
</section>

<?php get_footer(); ?>