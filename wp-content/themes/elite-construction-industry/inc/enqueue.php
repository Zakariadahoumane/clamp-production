<?php
 /**
 * Enqueue scripts and styles.
 */
function elite_construction_industry_scripts() {
	
	// Styles

	wp_enqueue_style('dashicons' );

	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css');

	wp_enqueue_style('owl-carousel',get_template_directory_uri().'/css/owl.carousel.css');
	
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/fonts/font-awesome/css/font-awesome.min.css');
	
	wp_enqueue_style('elite-construction-industry-widget',get_template_directory_uri().'/css/widget.css');
	
	wp_enqueue_style('elite-construction-industry-color-default',get_template_directory_uri().'/css/colors/default.css');
	
	wp_enqueue_style('elite-construction-industry-wp-test',get_template_directory_uri().'/css/wp-test.css');
	
	wp_enqueue_style('elite-construction-industry-menu',get_template_directory_uri().'/css/menu.css');
	
	wp_enqueue_style('elite-construction-industry-style', get_stylesheet_uri() );

	wp_style_add_data('elite-construction-industry-style', 'rtl', 'replace');
	
	wp_enqueue_style('elite-construction-industry-gutenberg',get_template_directory_uri().'/css/gutenberg.css');
	
	wp_enqueue_style('elite-construction-industry-responsive',get_template_directory_uri().'/css/responsive.css');
	
	// Scripts
	wp_enqueue_script('jquery-ui-core');
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.3.1', true); 

	wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), true); 
	
	wp_enqueue_script('elite-construction-industry-custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), false, true);

	wp_enqueue_script('elite-construction-industry-navigation-focus', get_template_directory_uri() . '/js/navigation-focus.js', array(), true );

	wp_enqueue_script('skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'elite_construction_industry_scripts' );

//Admin Enqueue for Admin
function elite_construction_industry_admin_enqueue_scripts(){	
	wp_enqueue_style('elite-construction-industry-style-customizer',get_template_directory_uri(). '/css/style-customizer.css');

	wp_enqueue_style( 'elite-construction-industry-admin-style', get_template_directory_uri().'/inc/started/main.css' );

	wp_enqueue_script( 'elite-construction-industry-admin-script', get_template_directory_uri() . '/inc/admin-notice/admin.js', array( 'jquery' ), '', true );
}
add_action( 'admin_enqueue_scripts', 'elite_construction_industry_admin_enqueue_scripts' );

?>