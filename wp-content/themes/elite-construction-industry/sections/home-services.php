<?php if ( true == get_theme_mod( 'elite_construction_industry_services_on_off', 'off' ) ) : ?>

<?php 

$services_count = get_theme_mod('elite_construction_industry_services_count'); 

$elite_construction_industry_services_main_heading = get_theme_mod('elite_construction_industry_services_main_heading');

$elite_construction_industry_services_short_heading = get_theme_mod('elite_construction_industry_services_short_heading');

?>

<section id="home_services" class="py-5">
  <div class="container">

    <?php if ( ! empty( $elite_construction_industry_services_short_heading ) ): ?>
      <h6 class="text-center"><?php echo esc_html( $elite_construction_industry_services_short_heading ); ?></h6>
    <?php endif; ?>
    <?php if ( ! empty( $elite_construction_industry_services_main_heading ) ): ?>
      <h3 class="text-center"><?php echo esc_html( $elite_construction_industry_services_main_heading ); ?></h3>
    <?php endif; ?>


    <div class="row">
      <?php for ($i=1; $i <= $services_count; $i++) {
        
        $elite_construction_industry_services_image = get_theme_mod('elite_construction_industry_services_image'.$i);
        $elite_construction_industry_services_heading = get_theme_mod('elite_construction_industry_services_heading'.$i);
        $elite_construction_industry_services_heading_link = get_theme_mod('elite_construction_industry_services_heading_link'.$i);
        $elite_construction_industry_services_amount = get_theme_mod('elite_construction_industry_services_amount'.$i); 
        $elite_construction_industry_services_icon = get_theme_mod('elite_construction_industry_services_icon'.$i); 
        ?>

        <div class="col-lg-4 col-md-6 col-sm-6 align-self-center">
          <div class="services_main_box my-5">
            <?php if ( ! empty( $elite_construction_industry_services_image ) ) : ?>
              <img src="<?php echo esc_url( $elite_construction_industry_services_image ); ?>">
              <div class="services_content_box">
                <?php if ( ! empty( $elite_construction_industry_services_icon ) ): ?>
                  <i class="<?php echo esc_html( $elite_construction_industry_services_icon ); ?>"></i>
                <?php endif; ?>
                <?php if ( ! empty( $elite_construction_industry_services_amount ) ): ?>
                  <p><?php echo esc_html( $elite_construction_industry_services_amount ); ?></p>
                <?php endif; ?>
                <?php if ( ! empty( $elite_construction_industry_services_heading_link ) || ! empty( $elite_construction_industry_services_heading ) ): ?>
                  <h3><a href="<?php echo esc_url( $elite_construction_industry_services_heading_link ); ?>"><?php echo esc_html( $elite_construction_industry_services_heading ); ?></a></h3>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>

<?php endif; ?>