<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url(get_bloginfo( 'pingback_url' )); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>
	

<body <?php body_class('elite-construction-industry elite-construction-industry-btn'); ?>>
<?php wp_body_open(); ?>

<?php if ( true == get_theme_mod( 'elite_construction_industry_preloader_setting' ) ) : ?>
	<div class="loading">
		<div class="loader">
		    <div class="line-1"></div>
		    <div class="line-2"></div>
		    <div class="loader-text">
		        <p><?php esc_html_e( 'LOADING', 'elite-construction-industry' ); ?></p>
		    </div>
		</div>
	</div>
<?php endif; ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'elite-construction-industry' ); ?></a>
	<?php
		get_template_part('sections/header');
	?>
	<div id="content">