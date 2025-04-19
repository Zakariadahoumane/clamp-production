<?php if ( true == get_theme_mod( 'elite_construction_industry_slide_on_off', 'off' ) ) : ?>

<?php $slide_count = get_theme_mod('elite_construction_industry_slide_count'); ?>

<section id="home_slider">
	<div class="owl-carousel">
		<?php for ($i=1; $i <= $slide_count; $i++) {
			
			$elite_construction_industry_slider_image = get_theme_mod('elite_construction_industry_slider_image'.$i);
			$elite_construction_industry_slider_short_heading = get_theme_mod('elite_construction_industry_slider_short_heading'.$i);
			$elite_construction_industry_slider_heading = get_theme_mod('elite_construction_industry_slider_heading'.$i);
			$elite_construction_industry_slider_heading_link = get_theme_mod('elite_construction_industry_slider_heading_link'.$i); 
			$elite_construction_industry_slider_content = get_theme_mod('elite_construction_industry_slider_content'.$i); ?>

			<div class="slider_main_box">
				<?php if ( ! empty( $elite_construction_industry_slider_image ) ) : ?>
					<img src="<?php echo esc_url( $elite_construction_industry_slider_image ); ?>">
					<div class="slider_content_box">
						<?php if ( ! empty( $elite_construction_industry_slider_short_heading ) ) : ?>
							<h5><?php echo esc_html( $elite_construction_industry_slider_short_heading ); ?></h5>
						<?php endif; ?>
						<?php if ( ! empty( $elite_construction_industry_slider_heading_link ) || ! empty( $elite_construction_industry_slider_heading ) ): ?>
							<h3><a href="<?php echo esc_url( $elite_construction_industry_slider_heading_link ); ?>"><?php echo esc_html( $elite_construction_industry_slider_heading ); ?></a></h3>
						<?php endif; ?>
						<?php if ( ! empty( $elite_construction_industry_slider_content ) ) : ?>
							<p><?php echo esc_html( $elite_construction_industry_slider_content ); ?></p>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		<?php } ?>
	</div>
</section>

<?php endif; ?>