<?php
/**
 * The template part for displaying post
 * @package Industrial Manufacturing
 * @subpackage industrial_manufacturing
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article class="blog-sec text-center animated fadeInDown p-2 mb-4">
  <?php
    if ( ! is_single() ) {
      // If not a single post, highlight the gallery.
      if ( get_post_gallery() ) {
        echo '<div class="entry-gallery">';
          echo ( get_post_gallery() );
        echo '</div>';
      }
    }; 
  ?>
  <h2><a href="<?php echo esc_url(get_permalink() ); ?>"><?php the_title(); ?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
  <?php if( get_theme_mod( 'industrial_manufacturing_metafields_date',true) != '' || get_theme_mod( 'industrial_manufacturing_metafields_author',true) != '' || get_theme_mod( 'industrial_manufacturing_metafields_comment',true) != '' || get_theme_mod( 'industrial_manufacturing_metafields_time',true) != '') { ?>
    <div class="post-info p-2 mb-2">
      <?php if( get_theme_mod( 'industrial_manufacturing_metafields_date',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('industrial_manufacturing_postdate_icon',"fa fa-calendar pe-2" )); ?>"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><span class="entry-date pe-3"><?php echo esc_html( get_the_date() ); ?></span><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'industrial_manufacturing_metafields_author',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('industrial_manufacturing_postauthor_icon',"fa fa-user pe-2" )); ?>"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><span class="entry-author pe-3"> <?php the_author(); ?></span><span class="screen-reader-text"><?php the_author(); ?></span></a>
      <?php }?>
      <?php if( get_theme_mod( 'industrial_manufacturing_metafields_comment',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('industrial_manufacturing_postcomment_icon',"fa fa-comments pe-2" )); ?>"></i><span class="entry-comments pe-3"> <?php comments_number( __('0 Comments','industrial-manufacturing'), __('0 Comments','industrial-manufacturing'), __('% Comments','industrial-manufacturing') ); ?></span> 
      <?php }?>
      <?php if( get_theme_mod( 'industrial_manufacturing_metafields_time',true) != '') { ?>
        <i class="<?php echo esc_attr(get_theme_mod('industrial_manufacturing_posttime_icon',"fa fa-clock pe-2" )); ?>"></i> <span class="entry-comments pe-3"> <?php echo esc_html( get_the_time() ); ?></span>
      <?php }?>
    </div>
  <?php }?>
  <?php if(get_theme_mod('industrial_manufacturing_blog_post_content') == 'Full Content'){ ?>
    <?php the_content(); ?>
  <?php }
  if(get_theme_mod('industrial_manufacturing_blog_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
    <?php if(get_the_excerpt()) { ?>
      <div class="entry-content"><p><?php $industrial_manufacturing_excerpt = get_the_excerpt(); echo esc_html( industrial_manufacturing_string_limit_words( $industrial_manufacturing_excerpt, esc_attr(get_theme_mod('industrial_manufacturing_post_excerpt_number','20')))); ?> <?php echo esc_html( get_theme_mod('industrial_manufacturing_button_excerpt_suffix','...') ); ?></p></div>
    <?php }?>
  <?php }?>
  <?php if ( get_theme_mod('industrial_manufacturing_blog_button_text','Read Full') != '' ) {?>
    <div class="blogbtn my-3">
      <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small"><?php echo esc_html( get_theme_mod('industrial_manufacturing_blog_button_text',__('Read Full', 'industrial-manufacturing')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('industrial_manufacturing_blog_button_text',__('Read Full', 'industrial-manufacturing')) ); ?></span></a>
    </div>
  <?php }?>
</article>