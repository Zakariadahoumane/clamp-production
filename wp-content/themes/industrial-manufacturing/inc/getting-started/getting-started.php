<?php
//about theme info
add_action( 'admin_menu', 'industrial_manufacturing_gettingstarted' );
function industrial_manufacturing_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'industrial-manufacturing'), esc_html__('Get Started', 'industrial-manufacturing'), 'edit_theme_options', 'industrial_manufacturing_guide', 'industrial_manufacturing_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function industrial_manufacturing_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'industrial_manufacturing_admin_theme_style');

//guidline for about theme
function industrial_manufacturing_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'industrial-manufacturing' );
?>
<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Industrial Manufacturing WordPress Theme', 'industrial-manufacturing' ); ?></h3>
		</div>
		<div class="color_bg_blue">
			<p>Version: <?php echo esc_html($theme['Version']);?></p>
				<p class="intro_version"><?php esc_html_e( 'Congratulations! You are about to use the most easy to use and felxible WordPress theme.', 'industrial-manufacturing' ); ?></p>
				<div class="blink">
					<h4><?php esc_html_e( 'Theme Created By Themesglance', 'industrial-manufacturing' ); ?></h4>
				</div>
			<div class="intro-text"><img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/themesglance-logo.png" alt="" /></div>
			<div class="coupon-code"><?php esc_html_e( 'Get', 'industrial-manufacturing' ); ?> <span><?php esc_html_e( '20% off', 'industrial-manufacturing' ); ?></span> <?php esc_html_e( 'on Premium Theme with the discount code: ', 'industrial-manufacturing' ); ?> <span><?php esc_html_e( '" Get20 "', 'industrial-manufacturing' ); ?></span></div>
		</div>
		<div class="started">
			<h3><?php esc_html_e( 'Lite Theme Info', 'industrial-manufacturing' ); ?></h3>
			<p><?php esc_html_e( 'The Industrial Manufacturing theme is for manufacturing, industry, factory, laboratory, or construction company websites. Who wants their small businesses to get expand. This theme has a variety of new features that makes this theme unique and amazing. The features like a One-click demo importer, Global color option, Responsive design, Favicon, logo, title, tagline customization, Advanced color options, color pallets, and 100+ font family options. No matter what you want to showcase, this theme will be a perfect solution for everything. It has to enable/disable options on all the sections. The Industrial Manufacturing theme is customizable, so users can change their fonts, background, images, or anything according to their choice and taste. It is a powerful theme on all industry or construction company websites. Loaded with stunning templates and minimal effects to give high light to your products and services. It is a great choice if you are looking to boost your site and engage more traffic on your site. The theme can change its language as it comes with omnilingual functionality. It is a responsive and retina-ready theme.', 'industrial-manufacturing')?></p>
			<hr>
			<div class="service">
				<div class="col-lg-3 col-md-3">
					<h3><span class="dashicons dashicons-media-document"></span> <?php esc_html_e('Get Support', 'industrial-manufacturing'); ?></h3>
					<ol>
						<li>
							<a href="<?php echo esc_url( INDUSTRIAL_MANUFACTURING_THEMESGLANCE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'industrial-manufacturing'); ?></a>
						</li>
					</ol>
				</div>
				<div class="col-lg-3 col-md-3">
					<h3><span class="dashicons dashicons-welcome-widgets-menus"></span> <?php esc_html_e('Getting Started', 'industrial-manufacturing'); ?></h3>
					<ol>
						<li> <?php esc_html_e('Start', 'industrial-manufacturing'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'industrial-manufacturing'); ?></a> <?php esc_html_e('your website.', 'industrial-manufacturing'); ?></li>
					</ol>
				</div>
				<div class="col-lg-3 col-md-3">
					<h3><span class="dashicons dashicons-star-filled"></span> <?php esc_html_e('Rate This Theme', 'industrial-manufacturing'); ?></h3>
					<ol>
						<li>
							<a href="<?php echo esc_url( INDUSTRIAL_MANUFACTURING_THEMESGLANCE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Rate it here', 'industrial-manufacturing'); ?></a>
						</li>
					</ol>
				</div>
				<div class="col-lg-3 col-md-3">
					<h3><span class="dashicons dashicons-editor-help"></span> <?php esc_html_e( 'Help Docs', 'industrial-manufacturing' ); ?></h3>
					<ol>
						<li><?php esc_html_e( 'Industrial Manufacturing Lite', 'industrial-manufacturing' ); ?> <a href="<?php echo esc_url( INDUSTRIAL_MANUFACTURING_THEMESGLANCE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'industrial-manufacturing' ); ?></a></li>
					</ol>
				</div>
			</div>
	
			<h3><?php esc_html_e( 'Get started with Industrial Manufacturing Theme', 'industrial-manufacturing' ); ?></h3>
			<div class="col-left-inner"> 
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/free-screenshot.png" alt="" />
			</div>		
			<div class="col-right-inner">
				<p><?php esc_html_e( 'Go to', 'industrial-manufacturing' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'industrial-manufacturing' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'industrial-manufacturing' ); ?></p>
				<ul>
					<li><?php esc_html_e( 'Easily customizable ', 'industrial-manufacturing' ); ?> </li>
					<li><?php esc_html_e( 'Absolutely free', 'industrial-manufacturing' ); ?> </li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'industrial-manufacturing'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/responsive.png" alt="" />
			<hr class="firsthr">
			<a href="<?php echo esc_url( INDUSTRIAL_MANUFACTURING_THEMESGLANCE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'industrial-manufacturing'); ?></a>
			<a href="<?php echo esc_url( INDUSTRIAL_MANUFACTURING_THEMESGLANCE_PRO_THEME_URL ); ?>"><?php esc_html_e('Buy Pro', 'industrial-manufacturing'); ?></a>
			<a href="<?php echo esc_url( INDUSTRIAL_MANUFACTURING_THEMESGLANCE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'industrial-manufacturing'); ?></a>
			<hr class="secondhr">
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'industrial-manufacturing'); ?></h3>
		<ul>
		 	<li><?php esc_html_e( 'Slider with unlimited slides', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "courses" listing', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Events" listing', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Video Section', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Search courses', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Courses categories listing', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Gallery Plugin with shortcode', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Custom Posttype for "Instructor" listing', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Social Icon widget', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Blog Post section on home', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Newsletter with contact form 7', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Woocommerce Product section on home', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Record Section', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Contact widget for footer', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Contact page Template', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Recent Post Widget with thumbnails', 'industrial-manufacturing'); ?></li>
		 	<li><?php esc_html_e( 'Blog full width, With Left and Right sidebar Template', 'industrial-manufacturing'); ?></li>
		</ul>
	</div>
	
</div>
<?php } ?>