<?php
function elite_construction_industry_premium_setting( $wp_customize ) {
	
	/*=========================================
	Page Layout Settings Section
	=========================================*/
	$wp_customize->add_section(
        'upgrade_premium',
        array(
            'title' 		=> __('Upgrade to Pro','elite-construction-industry'),
			'priority'      => 1,
		)
    );
	
	/*=========================================
	Add Buttons
	=========================================*/
	
	class Elite_Construction_Industry_WP_Button_Customize_Control extends WP_Customize_Control {
	public $type = 'upgrade_premium';

	   function render_content() {
		?>
			<div class="premium_info">
				<ul>
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Upgrade to Pro','elite-construction-industry' ); ?> </a></li>
				</ul>
			</div>
			<div class="premium_info">
				<ul>
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo','elite-construction-industry' ); ?> </a></li>
				</ul>
			</div>
			<div class="premium_info">
				<ul>
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_DOCS_FREE ); ?>" target="_blank"><?php esc_html_e( 'Free Documentation','elite-construction-industry' ); ?> </a></li>
				</ul>
			</div>
			<div class="premium_info discount-box">
				<ul>
					<li class="discount-text"><?php esc_html_e( 'Special Discount of 35% Use Code “winter35”','elite-construction-industry' ); ?></li>
					<li><a class="upgrade-to-pro" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Wordpress Theme Bundle','elite-construction-industry' ); ?> </a></li>
				</ul>
			</div>
		<?php
	   }
	}
	
	$wp_customize->add_setting('premium_info_buttons', array(
	   'capability'     => 'edit_theme_options',
		'sanitize_callback' => 'elite_construction_industry_sanitize_text',
	));
		
	$wp_customize->add_control( new Elite_Construction_Industry_WP_Button_Customize_Control( $wp_customize, 'premium_info_buttons', array(
		'section' => 'upgrade_premium',
    ))
);
}
add_action( 'customize_register', 'elite_construction_industry_premium_setting' );