<?php
/**
 * elite-construction-industry Theme Customizer.
 *
 * @package elite-construction-industry
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function elite_construction_industry_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting('custom_logo')->transport = 'refresh';	
}
add_action( 'customize_register', 'elite_construction_industry_customize_register' );

if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1' ) ) {
define('ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1',__('https://www.mishkatwp.com/themes/construction-wordpress-theme/','elite-construction-industry'));
}

if ( class_exists("Kirki")){

	/* Logo */

	/* Logo Size limit Option End */
	new \Kirki\Field\Slider(
		[
			'settings'    => 'elite_construction_industry_logo_resizer_setting',
			'label'       => esc_html__( 'Logo Size Limit', 'elite-construction-industry' ),
			'section'     => 'title_tagline',
			'default'     => 70,
			'choices'     => [
				'min'  => 10,
				'max'  => 300,
				'step' => 10,
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_site_title_setting',
			'label'       => esc_html__( 'Site Title On / Off', 'elite-construction-industry' ),
			'section'     => 'title_tagline',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_tagline_setting',
			'label'       => esc_html__( 'Tagline On / Off', 'elite-construction-industry' ),
			'section'     => 'title_tagline',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'title_tagline',
    ] );

	/* Logo End */

	//Home page Setting Panel
	new \Kirki\Panel(
		'elite_construction_industry_home_page_section',
		[
			'priority'    => 10,
			'title'       => esc_html__( 'Home Page Sections', 'elite-construction-industry' ),
		]
	);

	/* Header Button */

	new \Kirki\Section(
		'elite_construction_industry_header_button_section',
		[
			'title'       => esc_html__( 'Header Button', 'elite-construction-industry' ),
			'description' => esc_html__( 'Here you can add header button text and link.', 'elite-construction-industry' ),
			'panel'		  => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_construction_industry_header_button_text',
			'label'    => esc_html__( 'Add Button Text', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_construction_industry_header_button_link',
			'label'    => esc_html__( 'Add Button Link', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_construction_industry_header_icon',
			'label'    => esc_html__( 'Add Header Icon', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_header_button_section',
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'elite_construction_industry_header_icon_link',
			'label'    => esc_html__( 'Add Header Icon Link', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'elite_construction_industry_header_button_section',
    ] );

	/* Home Slider */

	new \Kirki\Section(
		'elite_construction_industry_home_slider_section',
		[
			'title'       => esc_html__( 'Home Slider', 'elite-construction-industry' ),
			'description' => esc_html__( 'Here you can add slider image, title and text.', 'elite-construction-industry' ),
			'panel'		  => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_slide_on_off',
			'label'       => esc_html__( 'Slider On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_home_slider_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'elite_construction_industry_slide_count',
			'label'    => esc_html__( 'Slider Number Control', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_home_slider_section',
			'default'  => '',
			'choices'  => [
				'min'  => 1,
				'max'  => 2,
				'step' => 1,
			],
		]
	);

	$slide_count = get_theme_mod('elite_construction_industry_slide_count');

	for ($i=1; $i <= $slide_count; $i++) { 
		
		new \Kirki\Field\Image(
			[
				'settings'    => 'elite_construction_industry_slider_image'.$i,
				'label'       => esc_html__( 'Slider Image 0', 'elite-construction-industry' ).$i,
				'section'     => 'elite_construction_industry_home_slider_section',
				'default'     => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_construction_industry_slider_short_heading'.$i,
				'label'    => esc_html__( 'Short Heading 0', 'elite-construction-industry' ).$i,
				'section'  => 'elite_construction_industry_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_construction_industry_slider_heading'.$i,
				'label'    => esc_html__( 'Main Heading 0', 'elite-construction-industry' ).$i,
				'section'  => 'elite_construction_industry_home_slider_section',
			]
		);

		new \Kirki\Field\URL(
			[
				'settings' => 'elite_construction_industry_slider_heading_link'.$i,
				'label'    => esc_html__( 'Heading Url 0', 'elite-construction-industry' ).$i,
				'section'  => 'elite_construction_industry_home_slider_section',
				'default'  => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_construction_industry_slider_content'.$i,
				'label'    => esc_html__( 'Content Text 0', 'elite-construction-industry' ).$i,
				'section'  => 'elite_construction_industry_home_slider_section',
			]
		);		

	}

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'elite_construction_industry_home_slider_section',
    ] );

    /* Pro Search */

    new \Kirki\Section(
		'elite_construction_industry_search_section',
		[
			'title'       => esc_html__( 'Search Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_search_section',
        'description' => __( '<p>a. Add more Search Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Search Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Search End */

	/* Pro About Us */

    new \Kirki\Section(
		'elite_construction_industry_about_us_section',
		[
			'title'       => esc_html__( 'About Us Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_about_us_section',
        'description' => __( '<p>a. Add more About Us Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For About Us Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro About Us End */

	/* Home Services */

	new \Kirki\Section(
		'elite_construction_industry_home_services_section',
		[
			'title'       => esc_html__( 'Home Services', 'elite-construction-industry' ),
			'description' => esc_html__( 'Here you can add services related text to display services.', 'elite-construction-industry' ),
			'panel'		  => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_services_on_off',
			'label'       => esc_html__( 'Services On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_home_services_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_construction_industry_services_short_heading',
			'label'    => esc_html__( 'Short Heading', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_home_services_section',
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_construction_industry_services_main_heading',
			'label'    => esc_html__( 'Main Heading', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_home_services_section',
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'elite_construction_industry_services_count',
			'label'    => esc_html__( 'Services Number Control', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_home_services_section',
			'default'  => '',
			'choices'  => [
				'min'  => 1,
				'max'  => 3,
				'step' => 1,
			],
		]
	);

	$service_count = get_theme_mod('elite_construction_industry_services_count');

	for ($i=1; $i <= $service_count; $i++) { 
		
		new \Kirki\Field\Image(
			[
				'settings'    => 'elite_construction_industry_services_image'.$i,
				'label'       => esc_html__( 'Services Image 0', 'elite-construction-industry' ).$i,
				'section'     => 'elite_construction_industry_home_services_section',
				'default'     => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_construction_industry_services_amount'.$i,
				'label'    => esc_html__( 'Amount 0', 'elite-construction-industry' ).$i,
				'section'  => 'elite_construction_industry_home_services_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_construction_industry_services_icon'.$i,
				'label'    => esc_html__( 'Icon 0', 'elite-construction-industry' ).$i,
				'section'  => 'elite_construction_industry_home_services_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'elite_construction_industry_services_heading'.$i,
				'label'    => esc_html__( 'Heading 0', 'elite-construction-industry' ).$i,
				'section'  => 'elite_construction_industry_home_services_section',
			]
		);

		new \Kirki\Field\URL(
			[
				'settings' => 'elite_construction_industry_services_heading_link'.$i,
				'label'    => esc_html__( 'Heading Url 0', 'elite-construction-industry' ).$i,
				'section'  => 'elite_construction_industry_home_services_section',
				'default'  => '',
			]
		);

	}

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'elite_construction_industry_home_services_section',
    ] );

    /* Pro Quote */

    new \Kirki\Section(
		'elite_construction_industry_quote_section',
		[
			'title'       => esc_html__( 'Quote Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_quote_section',
        'description' => __( '<p>a. Add more Quote Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Quote Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Quote End */

	/* Pro Process */

    new \Kirki\Section(
		'elite_construction_industry_process_section',
		[
			'title'       => esc_html__( 'Process Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_process_section',
        'description' => __( '<p>a. Add more Process Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Process Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Process End */

	/* Pro Appoinment */

    new \Kirki\Section(
		'elite_construction_industry_appoinment_section',
		[
			'title'       => esc_html__( 'Appoinment Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_appoinment_section',
        'description' => __( '<p>a. Add more Appoinment Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Appoinment Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Appoinment End */

	/* Pro Our Project */

    new \Kirki\Section(
		'elite_construction_industry_project_section',
		[
			'title'       => esc_html__( 'Our Project Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_project_section',
        'description' => __( '<p>a. Add more Our Project Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Our Project Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Our Project End */

	/* Pro Sponsor */

    new \Kirki\Section(
		'elite_construction_industry_sponsor_section',
		[
			'title'       => esc_html__( 'Sponsor Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_sponsor_section',
        'description' => __( '<p>a. Add more Sponsor Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Sponsor Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Sponsor End */

	/* Pro Newsletter */

    new \Kirki\Section(
		'elite_construction_industry_newsletter_section',
		[
			'title'       => esc_html__( 'Newsletter Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_newsletter_section',
        'description' => __( '<p>a. Add more Newsletter Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Newsletter Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Team End */


    new \Kirki\Section(
		'elite_construction_industry_team_section',
		[
			'title'       => esc_html__( 'Team Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_team_section',
        'description' => __( '<p>a. Add more Team Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Team Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Contact Banner End */


    new \Kirki\Section(
		'elite_construction_industry_banner_section',
		[
			'title'       => esc_html__( 'Contact Banner Section', 'elite-construction-industry' ),
			'panel'       => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'section'     => 'elite_construction_industry_banner_section',
        'description' => __( '<p>a. Add more Contact Banner Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Contact Banner Section</p>', 'elite-construction-industry' ),
    ] );

	/* Pro Contact Banner End */


	/* Footer */

	new \Kirki\Section(
		'elite_construction_industry_footer_section',
		[
			'title'       => esc_html__( 'Footer', 'elite-construction-industry' ),
			'panel'		  => 'elite_construction_industry_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_footer_widgets_on_off',
			'label'       => esc_html__( 'Footer Widgets On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_footer_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_copyright_on_off',
			'label'       => esc_html__( 'Footer Copyright On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_footer_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_construction_industry_copyright_content_text',
			'label'    => esc_html__( 'Copyright Text', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_footer_section',
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'elite_construction_industry_footer_section',
    ] );
	/* Footer End */

	/* Single Post Options */

	new \Kirki\Section(
		'elite_construction_industry_single_post_options',
		[
			'title'       => esc_html__( 'Single Post Options', 'elite-construction-industry' ),
			'priority'    => 30,
		]
	);
    
    /* Single Post Heading Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_single_post_heading_on_off',
			'label'       => esc_html__( 'Single Post Heading On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Single Post Content Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_single_post_content_on_off',
			'label'       => esc_html__( 'Single Post Content On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Single Post Meta Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_single_meta_on_off',
			'label'       => esc_html__( 'Single Post Meta On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Single Post Feature Image Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_single_post_image_on_off',
			'label'       => esc_html__( 'Single Post Feature Image On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Single Post Pagination Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_single_post_pagination_on_off',
			'label'       => esc_html__( 'Single Post Pagination On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'elite_construction_industry_single_post_options',
    ] );

	/* Post Options */

	new \Kirki\Section(
		'elite_construction_industry_post_options',
		[
			'title'       => esc_html__( 'Post Options', 'elite-construction-industry' ),
			'priority'    => 30,
		]
	);
    
    /* Post Image Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_post_image_on_off',
			'label'       => esc_html__( 'Post Image On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Post Heading Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_post_heading_on_off',
			'label'       => esc_html__( 'Post Heading On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Post Content Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_post_content_on_off',
			'label'       => esc_html__( 'Post Content On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Post Date Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_post_date_on_off',
			'label'       => esc_html__( 'Post Date On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Post Comments Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_post_comment_on_off',
			'label'       => esc_html__( 'Post Comments On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Post Author Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_post_author_on_off',
			'label'       => esc_html__( 'Post Author On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Post Categories Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_post_categories_on_off',
			'label'       => esc_html__( 'Post Categories On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* Post limit Option End */
	new \Kirki\Field\Slider(
		[
			'settings'    => 'elite_construction_industry_post_content_limit',
			'label'       => esc_html__( 'Post Content Limit', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_options',
			'default'     => 15,
			'choices'     => [
				'min'  => 0,
				'max'  => 50,
				'step' => 1,
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'elite_construction_industry_post_options',
    ] );

	/* Post Options End */

	/* Post Options */

	new \Kirki\Section(
		'elite_construction_industry_post_layouts_section',
		[
			'title'       => esc_html__( 'Post Layout Options', 'elite-construction-industry' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Radio_Image(
		[
			'settings'    => 'elite_construction_industry_post_layout',
			'label'       => esc_html__( 'Blog Layout', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_post_layouts_section',
			'default'     => 'two_column_right',
			'priority'    => 10,
			'choices'     => [
				'one_column'   => get_template_directory_uri().'/images/1column.png',
				'two_column_right' => get_template_directory_uri().'/images/right-sidebar.png',
				'two_column_left'  => get_template_directory_uri().'/images/left-sidebar.png',
				'three_column'  => get_template_directory_uri().'/images/3column.png',
				'four_column'  => get_template_directory_uri().'/images/4column.png',
				'grid_post'  => get_template_directory_uri().'/images/grid.png',
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'elite_construction_industry_post_layouts_section',
    ] );

	/* Post Options End */

	/* 404 Page */

	new \Kirki\Section(
		'elite_construction_industry_404_page_section',
		[
			'title'       => esc_html__( '404 Page', 'elite-construction-industry' ),
			'description' => esc_html__( 'Here you can add 404 Page information.', 'elite-construction-industry' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_construction_industry_404_page_heading',
			'label'    => esc_html__( 'Add Heading', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_404_page_section',
			'default'  => esc_html__( '404', 'elite-construction-industry' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_construction_industry_404_page_content',
			'label'    => esc_html__( 'Add Content', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_404_page_section',
			'default'  => esc_html__( 'Ops! Something happened...', 'elite-construction-industry' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'elite_construction_industry_404_page_button',
			'label'    => esc_html__( 'Add Button', 'elite-construction-industry' ),
			'section'  => 'elite_construction_industry_404_page_section',
			'default'  => esc_html__( 'Home', 'elite-construction-industry' ),
			'priority' => 10,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'elite-construction-industry' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'elite-construction-industry' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'elite_construction_industry_404_page_section',
    ] );

	/* 404 Page End */

	/* General Options */

	new \Kirki\Section(
		'elite_construction_industry_general_options_section',
		[
			'title'       => esc_html__( 'General Options', 'elite-construction-industry' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_preloader_setting',
			'label'       => esc_html__( 'Preloader On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_general_options_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'elite_construction_industry_scroll_to_top_setting',
			'label'       => esc_html__( 'Scroll To Top On / Off', 'elite-construction-industry' ),
			'section'     => 'elite_construction_industry_general_options_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'elite-construction-industry' ),
				'off' => esc_html__( 'Disable', 'elite-construction-industry' ),
			],
		]
	);

	/* General Options End */

}