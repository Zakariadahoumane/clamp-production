<?php 
/*******************************************************************************
 *  Get Started Notice
 *******************************************************************************/

add_action( 'wp_ajax_elite_construction_industry_dismissed_notice_handler', 'elite_construction_industry_ajax_notice_handler' );

/** * AJAX handler to record dismissible notice status. */
function elite_construction_industry_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function elite_construction_industry_admin_notice_deprecated_hook() {
        $current_screen = get_current_screen();
        if ($current_screen->id !== 'appearance_page_elite-construction-industry-guide-page') {
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>
            <div class="updated notice notice-get-started-class is-dismissible" data-notice="get_started">
                <div class="elite-construction-industry-getting-started-notice clearfix">
                    <div class="elite-construction-industry-theme-notice-content">
                        <h2 class="elite-construction-industry-notice-h2">
                            <?php
                            echo esc_html__( 'Let\'s Create Your website With', 'elite-construction-industry' ) . ' <strong>' . esc_html( wp_get_theme()->get('Name') ) . '</strong>';
                            ?>
                        </h2>
                        <span class="st-notification-wrapper">
                            <span class="st-notification-column-wrapper">
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Feature Rich WordPress Theme','elite-construction-industry'); ?></h2>
                                    <ul class="st-notification-column-list">
                                        <li><?php echo esc_html('Live Customize','elite-construction-industry'); ?></li>
                                        <li><?php echo esc_html('Detailed theme Options','elite-construction-industry'); ?></li>
                                        <li><?php echo esc_html('Cleanly Coded','elite-construction-industry'); ?></li>
                                        <li><?php echo esc_html('Search Engine Friendly','elite-construction-industry'); ?></li>
                                    </ul>
                                    <a href="<?php echo esc_url( admin_url( 'themes.php?page=elite-construction-industry-guide-page' ) ); ?>" target="_blank" class="button-primary button"><?php echo esc_html('Theme Info','elite-construction-industry'); ?></a>
                                </span>
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Customize Your Website','elite-construction-industry'); ?></h2>
                                    <ul>
                                        <li><a href="<?php echo esc_url( admin_url( 'customize.php' ) ) ?>" target="_blank" class="button button-primary"><?php echo esc_html('Customize','elite-construction-industry'); ?></a></li>
                                        <li><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ) ?>" class="button button-primary"><?php echo esc_html('Add Widgets','elite-construction-industry'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_SUPPORT_FREE ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('Get Support','elite-construction-industry'); ?></a> </li>
                                    </ul>
                                </span>
                                <span class="st-notification-column">
                                    <h2><?php echo esc_html('Get More Options','elite-construction-industry'); ?></h2>
                                    <ul>
                                        <li><a href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_DEMO_PRO ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('View Live Demo','elite-construction-industry'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_BUY_NOW ); ?>" class="button button-primary"><?php echo esc_html('Purchase Now','elite-construction-industry'); ?></a></li>
                                        <li><a href="<?php echo esc_url( ELITE_CONSTRUCTION_INDUSTRY_DOCS_FREE ); ?>" target="_blank" class="button button-primary"><?php echo esc_html('Free Documentation','elite-construction-industry'); ?></a> </li>
                                    </ul>
                                </span>
                            </span>
                        </span>

                        <style>
                        </style>
                    </div>
                </div>
            </div>
        <?php }
    }
}

add_action( 'admin_notices', 'elite_construction_industry_admin_notice_deprecated_hook' );

function elite_construction_industry_switch_theme_function () {
    delete_option('dismissed-get_started', FALSE );
}

add_action('after_switch_theme', 'elite_construction_industry_switch_theme_function');