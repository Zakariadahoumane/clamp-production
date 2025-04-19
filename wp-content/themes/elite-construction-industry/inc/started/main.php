<?php

add_action( 'admin_menu', 'elite_construction_industry_getting_started' );
function elite_construction_industry_getting_started() {
	add_theme_page( esc_html__('Theme Info', 'elite-construction-industry'), esc_html__('Theme Info', 'elite-construction-industry'), 'edit_theme_options', 'elite-construction-industry-guide-page', 'elite_construction_industry_test_guide', 1);
}

if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_DOCS_FREE' ) ) {
define('ELITE_CONSTRUCTION_INDUSTRY_DOCS_FREE',__('https://www.mishkatwp.com/instruction/elite-construction-industry-free-docs/','elite-construction-industry'));
}
if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_DOCS_PRO' ) ) {
define('ELITE_CONSTRUCTION_INDUSTRY_DOCS_PRO',__('https://www.mishkatwp.com/instruction/elite-construction-industry-pro-docs/','elite-construction-industry'));
}
if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW' ) ) {
define('ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW',__('https://www.mishkatwp.com/themes/construction-wordpress-theme/','elite-construction-industry'));
}
if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_SUPPORT_FREE' ) ) {
define('ELITE_CONSTRUCTION_INDUSTRY_SUPPORT_FREE',__('https://wordpress.org/support/theme/elite-construction-industry','elite-construction-industry'));
}
if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_REVIEW_FREE' ) ) {
define('ELITE_CONSTRUCTION_INDUSTRY_REVIEW_FREE',__('https://wordpress.org/support/theme/elite-construction-industry/reviews/#new-post','elite-construction-industry'));
}
if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_DEMO_PRO' ) ) {
define('ELITE_CONSTRUCTION_INDUSTRY_DEMO_PRO',__('https://www.mishkatwp.com/pro/elite-construction-industry/','elite-construction-industry'));
}
if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_BUNDLE' ) ) {
define('ELITE_CONSTRUCTION_INDUSTRY_BUNDLE',__('https://www.mishkatwp.com/themes/wordpress-theme-bundle/','elite-construction-industry'));
}

function elite_construction_industry_test_guide() { ?>
	<?php $elite_construction_industry_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="righty">
			<div class="getstart-postbox donate">
				<h4><?php esc_html_e( 'Discount Upto 25%', 'elite-construction-industry' ); ?> <span><?php esc_html_e( '"Special25"', 'elite-construction-industry' ); ?></span></h4>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'elite-construction-industry' ); ?></h3>
				<div class="getstart-inside">
					<p><?php esc_html_e('Click to upgrade to see the enhanced pro features available in the premium version.','elite-construction-industry'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'elite-construction-industry' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'elite-construction-industry' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'elite-construction-industry' ) ?></a>
					</div>
				</div>
				<div class="d-table">
				    <ul class="d-column">
				      <li class="feature"><?php esc_html_e('Features','elite-construction-industry'); ?></li>
				      <li class="free"><?php esc_html_e('Pro','elite-construction-industry'); ?></li>
				      <li class="plus"><?php esc_html_e('Free','elite-construction-industry'); ?></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('24hrs Priority Support','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('LearnPress Campatiblity','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Kirki Framework','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Posttype','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('One Click Demo Import','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Section Reordering','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Enable / Disable Option','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Multiple Sections','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Color Pallete','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Advance Widgets','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
				    </ul>
				    <ul class="d-row">
				      <li class="points"><?php esc_html_e('Page Templates','elite-construction-industry'); ?></li>
				      <li class="right"><span class="dashicons dashicons-yes"></span></li>
				      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
				    </ul>
		  		</div>
			</div>
		</div>
		<div id="lefty">
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','elite-construction-industry'); ?><?php echo esc_html( $elite_construction_industry_theme ); ?>  <span><?php esc_html_e('Version: ', 'elite-construction-industry'); ?><?php echo esc_html($elite_construction_industry_theme['Version']);?></span></h3>
				<h4><?php esc_html_e('Begin with our theme features','elite-construction-industry'); ?></span></h4>
				<div class="customizer-inside">
					<div class="elite-construction-industry-theme-setting-item">
                        <div class="elite-construction-industry-theme-setting-item-header">
                            <?php esc_html_e( 'Add Menus', 'elite-construction-industry' ); ?>                            
                       	</div>
                        <div class="elite-construction-industry-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>"><?php esc_html_e('Go to Menu', 'elite-construction-industry'); ?></a>
                     	</div>
                	</div>
                	<div class="elite-construction-industry-theme-setting-item">
                        <div class="elite-construction-industry-theme-setting-item-header">
                            <?php esc_html_e( 'Add Logo', 'elite-construction-industry' ); ?>                            
                       	</div>
                        <div class="elite-construction-industry-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>"><?php esc_html_e('Go to Site Identity', 'elite-construction-industry'); ?></a>
                     	</div>
                	</div>
                	<div class="elite-construction-industry-theme-setting-item">
                        <div class="elite-construction-industry-theme-setting-item-header">
                            <?php esc_html_e( 'Home Page Section', 'elite-construction-industry' ); ?>                            
                       	</div>
                        <div class="elite-construction-industry-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=elite_construction_industry_home_page_section') ); ?>"><?php esc_html_e('Go to Home Page Section', 'elite-construction-industry'); ?></a>
                     	</div>
                	</div>
                	<div class="elite-construction-industry-theme-setting-item">
                        <div class="elite-construction-industry-theme-setting-item-header">
                            <?php esc_html_e( 'Post Options', 'elite-construction-industry' ); ?>                            
                       	</div>
                        <div class="elite-construction-industry-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=elite_construction_industry_post_image_on_off') ); ?>"><?php esc_html_e('Go to Post Options', 'elite-construction-industry'); ?></a>
                     	</div>
                	</div>
                	<div class="elite-construction-industry-theme-setting-item">
                        <div class="elite-construction-industry-theme-setting-item-header">
                            <?php esc_html_e( 'Post Layout Options', 'elite-construction-industry' ); ?>                            
                       	</div>
                        <div class="elite-construction-industry-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=elite_construction_industry_post_layout') ); ?>"><?php esc_html_e('Go to Post Layout Options', 'elite-construction-industry'); ?></a>
                     	</div>
                	</div>

                	<div class="elite-construction-industry-theme-setting-item">
                        <div class="elite-construction-industry-theme-setting-item-header">
                            <?php esc_html_e( 'General Options Options', 'elite-construction-industry' ); ?>                            
                       	</div>
                        <div class="elite-construction-industry-theme-setting-item-content">
                        	<a target="_blank" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=elite_construction_industry_preloader_setting') ); ?>"><?php esc_html_e('Go to General Options', 'elite-construction-industry'); ?></a>
                     	</div>
                	</div>
                	
                	<a target="_blank" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" class="elite-construction-industry-theme-setting-item elite-construction-industry-theme-setting-item-unavailable">
					    <div class="elite-construction-industry-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Customize All Fonts", "elite-construction-industry"); ?></span> <span><?php esc_html_e("Premium", "elite-construction-industry"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" class="elite-construction-industry-theme-setting-item elite-construction-industry-theme-setting-item-unavailable">
					    <div class="elite-construction-industry-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Customize All Color", "elite-construction-industry"); ?></span> <span><?php esc_html_e("Premium", "elite-construction-industry"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" class="elite-construction-industry-theme-setting-item elite-construction-industry-theme-setting-item-unavailable">
					    <div class="elite-construction-industry-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Section Reorder", "elite-construction-industry"); ?></span> <span><?php esc_html_e("Premium", "elite-construction-industry"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" class="elite-construction-industry-theme-setting-item elite-construction-industry-theme-setting-item-unavailable">
					    <div class="elite-construction-industry-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Typography Options", "elite-construction-industry"); ?></span> <span><?php esc_html_e("Premium", "elite-construction-industry"); ?></span>
					    </div>
					</a>

					<a target="_blank" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" class="elite-construction-industry-theme-setting-item elite-construction-industry-theme-setting-item-unavailable">
					    <div class="elite-construction-industry-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("One Click Demo Import", "elite-construction-industry"); ?></span> <span><?php esc_html_e("Premium", "elite-construction-industry"); ?></span>
					    </div>
					</a>
					<a target="_blank" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" class="elite-construction-industry-theme-setting-item elite-construction-industry-theme-setting-item-unavailable">
					    <div class="elite-construction-industry-theme-setting-item-header pro-option">
					        <span><?php esc_html_e("Background  Settings", "elite-construction-industry"); ?></span> <span><?php esc_html_e("Premium", "elite-construction-industry"); ?></span>
					    </div>
					</a>
					
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="elite-construction-industry-theme-setting-sidebar-item">
		        <div class="elite-construction-industry-theme-setting-sidebar-header"><?php esc_html_e( 'Free Documentation', 'elite-construction-industry' ) ?></div>
		        <div class="elite-construction-industry-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Our guide is available if you require any help configuring and setting up the theme.', 'elite-construction-industry' ) ?></p>
		            <div id="admin_links">
		            	<a href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Free Documentation', 'elite-construction-industry' ) ?></a>
		            </div>
		        </div>
		    </div>
		    <div class="elite-construction-industry-theme-setting-sidebar-item">
		        <div class="elite-construction-industry-theme-setting-sidebar-header"><?php esc_html_e( 'Support', 'elite-construction-industry' ) ?></div>
		        <div class="elite-construction-industry-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Visit our website to contact us if you face any issues with our lite theme!', 'elite-construction-industry' ) ?></p>
		            <div id="admin_links">
		            	<a class="blue-button-2" href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'elite-construction-industry' ) ?></a>
		            </div>
		        </div>
		    </div>
		    <div class="elite-construction-industry-theme-setting-sidebar-item">
		        <div class="elite-construction-industry-theme-setting-sidebar-header"><?php esc_html_e( 'Review', 'elite-construction-industry' ) ?></div>
		        <div class="elite-construction-industry-theme-setting-sidebar-content">
		            <p class="m-0"><?php esc_html_e( 'Are you having fun with Elite Construction Industry? Review us on WordPress.org to show your support!', 'elite-construction-industry' ) ?></p>
		            <div id="admin_links">
		            	<a href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_REVIEW_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Review', 'elite-construction-industry' ) ?></a>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

<?php } ?>
