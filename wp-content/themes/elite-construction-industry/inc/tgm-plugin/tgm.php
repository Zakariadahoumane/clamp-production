<?php
	
require get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function elite_construction_industry_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'elite-construction-industry' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	elite_construction_industry_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'elite_construction_industry_register_recommended_plugins' );