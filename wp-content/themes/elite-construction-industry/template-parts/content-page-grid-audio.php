<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package elite-construction-industry
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
    <?php
        // Check if there is audio embedded in the post content
        $post_id = get_the_ID(); // Add this line to get the post ID
        $post = get_post($post_id);
        $content = do_shortcode(apply_filters('the_content', $post->post_content));
        $embeds = get_media_embedded_in_content($content);

        if (!empty($embeds)) {
            // Loop through embedded media and display audio
            foreach ($embeds as $embed) {
                // Check if the embed code contains an audio tag or specific audio providers like SoundCloud
                if (strpos($embed, 'audio') !== false || strpos($embed, 'soundcloud') !== false) {
                    echo '<div class="embedded-audio">' . $embed . '</div>';
                }
            }
        }
    ?>
    <div class="post-content">
        <?php if ( true == get_theme_mod( 'elite_construction_industry_post_heading_on_off', 'on' ) ) : ?>
        <?php  
            if ( is_single() ) :
                the_title('<h4 class="post-title">', '</h4>' );
            else:
                the_title( sprintf( '<h4 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' );
            endif; 
        ?>
        <?php endif; ?>
        <?php if ( true == get_theme_mod( 'elite_construction_industry_post_content_on_off', 'on' ) ) : ?>
            <p><?php echo wp_trim_words( get_the_content(), get_theme_mod('elite_construction_industry_post_content_limit',15) );?></p>
        <?php endif; ?>
    </div>
    <ul class="meta-info">
        <?php if ( true == get_theme_mod( 'elite_construction_industry_post_date_on_off', 'on' ) ) : ?>
            <li class="post-date"><a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>"><i class="fa fa-calendar"></i><?php echo esc_html(get_the_date('j M, Y')); ?></a></li>
        <?php endif; ?>
        <?php if ( true == get_theme_mod( 'elite_construction_industry_post_comment_on_off', 'on' ) ) : ?>
            <li class="comments-quantity"><a href="<?php echo esc_url(get_comments_link( $post->ID )); ?>"><i class="fa fa-wechat"></i> (<?php echo get_comments_number($post->ID); ?>) <?php esc_html_e('Comments','elite-construction-industry'); ?></a></li>
        <?php endif; ?>
        <?php if ( true == get_theme_mod( 'elite_construction_industry_post_author_on_off', 'on' ) ) : ?>
            <li class="posted-by"><i class="fa  fa-user"></i> <?php esc_html_e('By','elite-construction-industry'); ?> <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><?php the_author(); ?></a></li>
        <?php endif; ?>
        <?php if ( true == get_theme_mod( 'elite_construction_industry_post_categories_on_off', 'on' ) ) : ?>
            <li class="post-category"><i class="fa fa-folder-open"></i><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></li>
        <?php endif; ?>
    </ul>
</article>