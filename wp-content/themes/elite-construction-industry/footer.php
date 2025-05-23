<!-- Start: Footer Sidebar
============================= -->
<?php if ( is_active_sidebar( 'footer-widget-area' ) ) { ?>
    <?php if ( true == get_theme_mod( 'elite_construction_industry_footer_widgets_display_setting', 'off' ) ) : ?>
        <footer id="footer-widgets" class="footer-sidebar footer_bg">
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <?php dynamic_sidebar( 'footer-widget-area' ); ?>
                    </div>
                </div>
            </div>
        </footer>
    <?php endif; ?>
<?php } else { ?>
        <?php if ( ! is_active_sidebar( 'footer-widget-area' ) ) : ?>
        	<footer id="footer-widgets" class="footer-sidebar footer_bg">
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
					        <aside id="archives-3" class="widget widget_archive">
					            <h5 class="widget-title"><?php esc_html_e( 'Archives List', 'elite-construction-industry' ); ?></h5>
					            <span class="animate-border border-black"></span>
					            <ul>
					                <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					            </ul>
					        </aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
                        	<aside id="pages-2" class="widget widget_pages">
							    <h5 class="widget-title"><?php esc_html_e('Our Categories', 'elite-construction-industry'); ?></h5>
							    <span class="animate-border border-black"></span>
							    <ul>
							        <?php
							        wp_list_categories(array(
							            'title_li' => '',
							        ));
							        ?>
							    </ul>
							</aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
					        <aside id="recent-posts-2" class="widget widget_recent_entries">
							    <h5 class="widget-title"><?php esc_html_e('Recent Posts', 'elite-construction-industry'); ?></h5>
							    <span class="animate-border border-black"></span>
							    <ul class="wp-block-latest-posts__list">
							        <?php
							        $recent_posts = wp_get_recent_posts(array(
							            'numberposts' => 5, // Adjust the number of posts to display
							            'post_status' => 'publish',
							        ));
							        foreach ($recent_posts as $post) :
							            ?>
							            <li>
							                <a href="<?php echo esc_url(get_permalink($post['ID'])); ?>">
							                    <?php echo esc_html($post['post_title']); ?>
							                </a>
							            </li>
							        <?php endforeach; ?>
							    </ul>
							</aside>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
							<aside id="tag_cloud-2" class="widget widget_tag_cloud">
							    <h5 class="widget-title"><?php esc_html_e('Tag Cloud', 'elite-construction-industry'); ?></h5>
							    <span class="animate-border border-black"></span>
							    <?php wp_tag_cloud(array(
							        'smallest' => 10,   // Minimum font size
							        'largest' => 22,    // Maximum font size
							        'unit' => 'px',     // Font size unit (pixels)
							        'number' => 20,      // Maximum number of tags to display
							        'format' => 'array' // Display as an array for more control
							    )); ?>
							    <div class="tagcloud">
							        <?php
							        $tags = get_tags(); // Get all tags
							        foreach ($tags as $tag) :
							        ?>
							            <a href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" class="custom-tag-link">
							                <?php echo esc_html($tag->name); ?>
							            </a>
							        <?php endforeach; ?>
							    </div>
							</aside>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    <?php endif; ?>
<?php } ?>
<!-- End: Footer Sidebar
============================= -->
<?php
	if ( ! defined( 'ELITE_CONSTRUCTION_INDUSTRY_FREE_LINK' ) ) {
		define('ELITE_CONSTRUCTION_INDUSTRY_FREE_LINK',__('https://www.mishkatwp.com/themes/free-industry-wordpress-theme/','elite-construction-industry'));
	}
	$elite_construction_industry_copyright_content   = get_theme_mod('copyright_content','Copyright &copy; [current_year]  [site_title] | Powered by [theme_author]');
	$elite_construction_industry_copyright_content_text   = get_theme_mod('elite_construction_industry_copyright_content_text','Construction Industry WordPress Theme');
?>

<section id="footer-copyright">
	<div class="container">
		<div class="text-center">
			<?php if ( true == get_theme_mod( 'elite_construction_industry_copyright_on_off', 'on' ) ) : ?>
				<p class="mb-0">
					<?php 
						$elite_construction_industry_copyright_allowed_tags = array(
							'[current_year]' => date_i18n('Y'),
							'[site_title]'   => '<a href="' . esc_url( ELITE_CONSTRUCTION_INDUSTRY_FREE_LINK ) . '" target="_blank">'.$elite_construction_industry_copyright_content_text.'</a>',
							'[theme_author]' => sprintf(__('<a href="https://wordpress.org/" target="_blank">WordPress.org</a>', 'elite-construction-industry')),
						);
						echo apply_filters('elite_construction_industry_footer_copyright', wp_kses_post(elite_construction_industry_str_replace_assoc($elite_construction_industry_copyright_allowed_tags, $elite_construction_industry_copyright_content)));
					?>
				</p>
			<?php endif; ?>
			<?php if ( true == get_theme_mod( 'elite_construction_industry_scroll_to_top_setting', 'off' ) ) : ?>
				<a href="#" class="scrollup"><i class="fa fa-arrow-up"></i></a>
			<?php endif; ?>
		</div>
	</div>
</section>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>