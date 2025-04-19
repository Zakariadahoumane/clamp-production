<!-- Start: Header
============================= -->
<?php

$elite_construction_industry_header_button_link = get_theme_mod('elite_construction_industry_header_button_link');
$elite_construction_industry_header_button_text = get_theme_mod('elite_construction_industry_header_button_text');

$elite_construction_industry_header_icon = get_theme_mod('elite_construction_industry_header_icon');
$elite_construction_industry_header_icon_link = get_theme_mod('elite_construction_industry_header_icon_link');

?>

<header id="header" role="banner" <?php if ( get_header_image() ) { ?> style="background-image: url( <?php header_image(); ?> ); background-size: 100%;" <?php } ?> >
	<div class="container">
		<div class="navbar-area">
			<div class="row">
				<div class="col-lg-3 col-md-4 align-self-center">
					<div class="logo main">
						<?php if ( function_exists( 'elite_construction_industry_logo_title_description' ) ) :	elite_construction_industry_logo_title_description(); endif; ?>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 align-self-center text-md-end text-center">
					<?php if ( ! empty( $elite_construction_industry_header_button_link ) || ! empty( $elite_construction_industry_header_button_text ) ): ?>
						<a class="header_button" href="<?php echo esc_url( $elite_construction_industry_header_button_link ); ?>">
							<?php echo esc_html( $elite_construction_industry_header_button_text ); ?><i class="fa fa-calendar ms-3"></i>
						</a>
					<?php endif; ?>
				</div>
				<div class="col-lg-6 col-md-3 align-self-center">
					<div class="toggle-menu gb_menu mb-2 mb-md-0">
						<button onclick="elite_construction_industry_navigation_open()" class="gb_toggle py-2 px-3"><p class="mb-0"><?php esc_html_e('Menu','elite-construction-industry'); ?></p></button>
					</div>
					<div id="gb_responsive" class="nav side_gb_nav">
						<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'elite-construction-industry' ); ?>">
							<?php 
							    wp_nav_menu( array( 
									'theme_location' => 'primary_menu',
									'container_class' => 'gb_navigation clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav mb-0 px-0">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
							    ) ); 
							?>
							<a href="javascript:void(0)" class="closebtn gb_menu" onclick="elite_construction_industry_navigation_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','elite-construction-industry'); ?></span></a>
						</nav>
					</div>
				</div>
				<div class="col-lg-1 col-md-1 align-self-center text-center text-md-end">
					<?php if ( ! empty( $elite_construction_industry_header_icon_link ) || ! empty( $elite_construction_industry_header_icon ) ): ?>
						<a class="header_icon" href="<?php echo esc_url( $elite_construction_industry_header_icon_link ); ?>">
							<i class="<?php echo esc_html( $elite_construction_industry_header_icon ); ?>"></i>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>