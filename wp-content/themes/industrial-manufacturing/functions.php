<?php
/**
 * Industrial Manufacturing functions and definitions
 * @package Industrial Manufacturing
 */

/* Breadcrumb Begin */
function industrial_manufacturing_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url( home_url() );
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
					the_title();
				echo "</span> ";
			}
		} 	elseif (is_page()) {
			echo "<span> ";
			the_title();
		}
	}
}

/* Theme Setup */
if ( ! function_exists( 'industrial_manufacturing_setup' ) ) :

function industrial_manufacturing_setup() {

	$GLOBALS['content_width'] = apply_filters( 'industrial_manufacturing_content_width', 640 );
	load_theme_textdomain( 'industrial-manufacturing', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'html5', array( 'comment-list', 'search-form', 'comment-form', ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('industrial-manufacturing-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'industrial-manufacturing' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array('image','video','gallery','audio',) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css',industrial_manufacturing_font_url() ) );

}
endif;
add_action( 'after_setup_theme', 'industrial_manufacturing_setup' );

/* Theme Widgets Setup */
function industrial_manufacturing_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'industrial-manufacturing' ),
		'description'   => __( 'Appears on blog page sidebar', 'industrial-manufacturing' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'industrial-manufacturing' ),
		'description'   => __( 'Appears on page sidebar', 'industrial-manufacturing' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'industrial-manufacturing' ),
		'description'   => __( 'Appears on page sidebar', 'industrial-manufacturing' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s p-2 mb-4">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title mb-2 py-2 px-1 text-center">',
		'after_title'   => '</h3>',
	) );

	$industrial_manufacturing_footer_columns = get_theme_mod('industrial_manufacturing_footer_widget', '4');
	for ($i=1; $i<=$industrial_manufacturing_footer_columns; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer ', 'industrial-manufacturing' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s py-3">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title pb-2 mb-2">',
			'after_title'   => '</h3>',
		) );
	}
	register_sidebar( array(
			'name'          => __( 'Shop Page Sidebar', 'industrial-manufacturing' ),
			'description'   => __( 'Appears on shop page', 'industrial-manufacturing' ),	
			'id'            => 'woocommerce_sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'industrial-manufacturing' ),
		'description'   => __( 'Appears on shop page', 'industrial-manufacturing' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'industrial_manufacturing_widgets_init' );

/* Theme Font URL */
function industrial_manufacturing_font_url(){
	$font_family   = array(
		'ABeeZee:ital@0;1',
		'Abril Fatfac',
		'Acme',
		'Allura',
		'Amatic SC:wght@400;700',
		'Anton',
		'Architects Daughter',
		'Archivo:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Arsenal:ital,wght@0,400;0,700;1,400;1,700',
		'Arvo:ital,wght@0,400;0,700;1,400;1,700',
		'Alegreya:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Asap:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Assistant:wght@200;300;400;500;600;700;800',
		'Alfa Slab One',
		'Averia Serif Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Bangers',
		'Boogaloo',
		'Bad Script',
		'Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Barlow Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Berkshire Swash',
		'Bitter:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Bree Serif',
		'BenchNine:wght@300;400;700',
		'Cabin:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cardo:ital,wght@0,400;0,700;1,400',
		'Courgette',
		'Caveat:wght@400;500;600;700',
		'Caveat Brush',
		'Cherry Swash:wght@400;700',
		'Cormorant Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700',
		'Crimson Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700',
		'Cuprum:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Cookie',
		'Coming Soon',
		'Charm:wght@400;700',
		'Chewy',
		'Days One',
		'DM Serif Display:ital@0;1',
		'Dosis:wght@200;300;400;500;600;700;800',
		'EB Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800',
		'Economica:ital,wght@0,400;0,700;1,400;1,700',
		'Epilogue:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Exo 2:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Familjen Grotesk:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Fira Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Fredoka One',
		'Fjalla One',
		'Francois One',
		'Frank Ruhl Libre:wght@300;400;500;700;900',
		'Gabriela',
		'Gloria Hallelujah',
		'Great Vibes',
		'Handlee',
		'Hammersmith One',
		'Heebo:wght@100;200;300;400;500;600;700;800;900',
		'Hind:wght@300;400;500;600;700',
		'Inconsolata:wght@200;300;400;500;600;700;800;900',
		'Indie Flower',
		'Inter:wght@100;200;300;400;500;600;700;800;900',
		'IM Fell English SC',
		'Julius Sans One',
		'Jomhuria',
		'Josefin Slab:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Josefin Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700',
		'Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaisei HarunoUmi:wght@400;500;700',
		'Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Kaushan Script',
		'Krub:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700',
		'Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900',
		'Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700',
		'Libre Baskerville:ital,wght@0,400;0,700;1,400',
		'Lobster',
		'Lobster Two:ital,wght@0,400;0,700;1,400;1,700',
		'Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900',
		'Monda:wght@400;700',
		'Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Marck Script',
		'Marcellus',
		'Merienda One',
		'Monda:wght@400;700',
		'Noto Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Nunito Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900',
		'Open Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800',
		'Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Overpass Mono:wght@300;400;500;600;700',
		'Oxygen:wght@300;400;700',
		'Oswald:wght@200;300;400;500;600;700',
		'Orbitron:wght@400;500;600;700;800;900',
		'Patua One',
		'Pacifico',
		'Padauk:wght@400;700',
		'Playball',
		'Playfair Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'PT Sans:ital,wght@0,400;0,700;1,400;1,700',
		'PT Serif:ital,wght@0,400;0,700;1,400;1,700',
		'Philosopher:ital,wght@0,400;0,700;1,400;1,700',
		'Permanent Marker',
		'Poiret One',
		'Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Prata',
		'Quicksand:wght@300;400;500;600;700',
		'Quattrocento Sans:ital,wght@0,400;0,700;1,400;1,700',
		'Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Roboto Condensed:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700',
		'Rokkitt:wght@100;200;300;400;500;600;700;800;900',
		'Ropa Sans:ital@0;1',
		'Russo One',
		'Righteous',
		'Saira:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Satisfy',
		'Sen:wght@400;700;800',
		'Slabo 13px',
		'Slabo 27px',
		'Source Sans Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900',
		'Shadows Into Light Two',
		'Shadows Into Light',
		'Sacramento',
		'Sail',
		'Shrikhand',
		'League Spartan:wght@100;200;300;400;500;600;700;800;900',
		'Staatliches',
		'Stylish',
		'Tangerine:wght@400;700',
		'Titillium Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700',
		'Trirong:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700',
		'Unica One',
		'VT323',
		'Varela Round',
		'Vampiro One',
		'Vollkorn:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900',
		'Volkhov:ital,wght@0,400;0,700;1,400;1,700',
		'Work Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900',
		'Yanone Kaffeesatz:wght@200;300;400;500;600;700',
		'Yeseva One',
		'ZCOOL XiaoWei'
	);

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

/*radio button sanitization*/
 function industrial_manufacturing_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function industrial_manufacturing_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

function industrial_manufacturing_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );
  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'industrial_manufacturing_loop_columns');
	if (!function_exists('industrial_manufacturing_loop_columns')) {
	function industrial_manufacturing_loop_columns() {
		return get_theme_mod( 'industrial_manufacturing_products_per_row', '3' ); // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'industrial_manufacturing_products_per_page' );
function industrial_manufacturing_products_per_page( $cols ) {
  	return  get_theme_mod( 'industrial_manufacturing_products_per_page',9);
}

/* Theme enqueue scripts */
function industrial_manufacturing_scripts() {
	wp_enqueue_style( 'industrial-manufacturing-font',industrial_manufacturing_font_url(), array() );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.css' );
	wp_enqueue_style( 'industrial-manufacturing-basic-style', get_stylesheet_uri() );
	wp_style_add_data( 'industrial-manufacturing-style', 'rtl', 'replace' );
	wp_enqueue_style( 'industrial-manufacturing-block-patterns-frontend', get_template_directory_uri().'/block-patterns/css/block-frontend.css' );
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/css/fontawesome-all.css' );
	wp_enqueue_style( 'industrial-manufacturing-block-style', get_theme_file_uri('/css/blocks-style.css') );
	// Paragraph
    $industrial_manufacturing_paragraph_color = get_theme_mod('industrial_manufacturing_paragraph_color', '');
    $industrial_manufacturing_paragraph_font_family = get_theme_mod('industrial_manufacturing_paragraph_font_family', '');
    $industrial_manufacturing_paragraph_font_size = get_theme_mod('industrial_manufacturing_paragraph_font_size', '');
	// "a" tag
	$industrial_manufacturing_atag_color = get_theme_mod('industrial_manufacturing_atag_color', '');
    $industrial_manufacturing_atag_font_family = get_theme_mod('industrial_manufacturing_atag_font_family', '');
	// "li" tag
	$industrial_manufacturing_li_color = get_theme_mod('industrial_manufacturing_li_color', '');
    $industrial_manufacturing_li_font_family = get_theme_mod('industrial_manufacturing_li_font_family', '');
	// H1
	$industrial_manufacturing_h1_color = get_theme_mod('industrial_manufacturing_h1_color', '');
    $industrial_manufacturing_h1_font_family = get_theme_mod('industrial_manufacturing_h1_font_family', '');
    $industrial_manufacturing_h1_font_size = get_theme_mod('industrial_manufacturing_h1_font_size', '');
	// H2
	$industrial_manufacturing_h2_color = get_theme_mod('industrial_manufacturing_h2_color', '');
    $industrial_manufacturing_h2_font_family = get_theme_mod('industrial_manufacturing_h2_font_family', '');
    $industrial_manufacturing_h2_font_size = get_theme_mod('industrial_manufacturing_h2_font_size', '');
	// H3
	$industrial_manufacturing_h3_color = get_theme_mod('industrial_manufacturing_h3_color', '');
    $industrial_manufacturing_h3_font_family = get_theme_mod('industrial_manufacturing_h3_font_family', '');
    $industrial_manufacturing_h3_font_size = get_theme_mod('industrial_manufacturing_h3_font_size', '');
	// H4
	$industrial_manufacturing_h4_color = get_theme_mod('industrial_manufacturing_h4_color', '');
    $industrial_manufacturing_h4_font_family = get_theme_mod('industrial_manufacturing_h4_font_family', '');
    $industrial_manufacturing_h4_font_size = get_theme_mod('industrial_manufacturing_h4_font_size', '');
	// H5
	$industrial_manufacturing_h5_color = get_theme_mod('industrial_manufacturing_h5_color', '');
    $industrial_manufacturing_h5_font_family = get_theme_mod('industrial_manufacturing_h5_font_family', '');
    $industrial_manufacturing_h5_font_size = get_theme_mod('industrial_manufacturing_h5_font_size', '');
	// H6
	$industrial_manufacturing_h6_color = get_theme_mod('industrial_manufacturing_h6_color', '');
    $industrial_manufacturing_h6_font_family = get_theme_mod('industrial_manufacturing_h6_font_family', '');
    $industrial_manufacturing_h6_font_size = get_theme_mod('industrial_manufacturing_h6_font_size', '');

	$industrial_manufacturing_custom_css ='
		p,span{
		    color:'.esc_html($industrial_manufacturing_paragraph_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_paragraph_font_family).';
		    font-size: '.esc_html($industrial_manufacturing_paragraph_font_size).';
		}
		a{
		    color:'.esc_html($industrial_manufacturing_atag_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_atag_font_family).';
		}
		li{
		    color:'.esc_html($industrial_manufacturing_li_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_li_font_family).';
		}
		h1{
		    color:'.esc_html($industrial_manufacturing_h1_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_h1_font_family).'!important;
		    font-size: '.esc_html($industrial_manufacturing_h1_font_size).'!important;
		}
		h2{
		    color:'.esc_html($industrial_manufacturing_h2_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_h2_font_family).'!important;
		    font-size: '.esc_html($industrial_manufacturing_h2_font_size).'!important;
		}
		h3{
		    color:'.esc_html($industrial_manufacturing_h3_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_h3_font_family).'!important;
		    font-size: '.esc_html($industrial_manufacturing_h3_font_size).'!important;
		}
		h4{
		    color:'.esc_html($industrial_manufacturing_h4_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_h4_font_family).'!important;
		    font-size: '.esc_html($industrial_manufacturing_h4_font_size).'!important;
		}
		h5{
		    color:'.esc_html($industrial_manufacturing_h5_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_h5_font_family).'!important;
		    font-size: '.esc_html($industrial_manufacturing_h5_font_size).'!important;
		}
		h6{
		    color:'.esc_html($industrial_manufacturing_h6_color).'!important;
		    font-family: '.esc_html($industrial_manufacturing_h6_font_family).'!important;
		    font-size: '.esc_html($industrial_manufacturing_h6_font_size).'!important;
		}
	';

	wp_add_inline_style( 'industrial-manufacturing-basic-style',$industrial_manufacturing_custom_css );
	
	wp_enqueue_script( 'industrial-manufacturing-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', array('jquery') );

	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/js/jquery.superfish.js', array('jquery') ,'',true);
	require get_parent_theme_file_path( '/inc/color-option.php' );
	wp_add_inline_style( 'industrial-manufacturing-basic-style',$industrial_manufacturing_custom_css );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'industrial_manufacturing_scripts' );

/*** Enqueue block editor style */
function industrial_manufacturing_block_editor_styles() {
	wp_enqueue_style( 'industrial-manufacturing-font', industrial_manufacturing_font_url(), array() );
    wp_enqueue_style( 'industrial-manufacturing-block-patterns-style-editor', get_theme_file_uri( '/block-patterns/css/block-editor.css' ), false, '1.0', 'all' );
    wp_enqueue_style( 'bootstrap-style', get_template_directory_uri().'/assets/css/bootstrap.css' );
    wp_enqueue_style('font-awesome-style', get_template_directory_uri().'/css/fontawesome-all.css');
}
add_action( 'enqueue_block_editor_assets', 'industrial_manufacturing_block_editor_styles' );

/* Theme Credit link */
define('INDUSTRIAL_MANUFACTURING_THEMESGLANCE_PRO_THEME_URL',__('https://www.themesglance.com/products/manufacturing-wordpress-theme','industrial-manufacturing'));
define('INDUSTRIAL_MANUFACTURING_THEMESGLANCE_THEME_DOC',__('https://preview.themesglance.com/demo/docs/industrial-manufacturing-pro/','industrial-manufacturing'));
define('INDUSTRIAL_MANUFACTURING_THEMESGLANCE_LIVE_DEMO',__('https://preview.themesglance.com/tg-industrial-pro/','industrial-manufacturing'));
define('INDUSTRIAL_MANUFACTURING_THEMESGLANCE_FREE_THEME_DOC',__('https://preview.themesglance.com/demo/docs/free-industrial-manufacturing/','industrial-manufacturing'));
define('INDUSTRIAL_MANUFACTURING_THEMESGLANCE_SUPPORT',__('https://wordpress.org/support/theme/industrial-manufacturing/','industrial-manufacturing'));
define('INDUSTRIAL_MANUFACTURING_THEMESGLANCE_REVIEW',__('https://wordpress.org/support/theme/industrial-manufacturing/reviews/#new-post','industrial-manufacturing'));
define('INDUSTRIAL_MANUFACTURING_LITE_SITE_URL',__('https://www.themesglance.com/products/free-industry-wordpress-theme','industrial-manufacturing'));

function industrial_manufacturing_credit_link() {
    echo "<a href=".esc_url(INDUSTRIAL_MANUFACTURING_LITE_SITE_URL)." target='_blank'>".esc_html__('Manufacturing WordPress Theme','industrial-manufacturing')."</a>";
}

/*----- Related Posts Function ------*/
if ( ! function_exists( 'industrial_manufacturing_related_posts_function' ) ) {
	function industrial_manufacturing_related_posts_function() {
		wp_reset_postdata();
		global $post;

		// Define shared post arguments
		$args = array(
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
			'ignore_sticky_posts'    => 1,
			'orderby'                => 'rand',
			'post__not_in'           => array( $post->ID ),
			'posts_per_page'    => absint( get_theme_mod( 'industrial_manufacturing_related_post_count', '3' ) ),
		);
		// Related by categories
		if ( get_theme_mod( 'industrial_manufacturing_post_shown_by', 'categories' ) == 'categories' ) {

			$cats = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $cats ) {
				$cats                 = wp_get_post_categories( $post->ID, array( 'fields' => 'ids' ) );
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Related by tags
		if ( get_theme_mod( 'industrial_manufacturing_post_shown_by', 'categories' ) == 'tags' ) {

			$tags = get_post_meta( $post->ID, 'related-posts', true );

			if ( ! $tags ) {
				$tags            = wp_get_post_tags( $post->ID, array( 'fields' => 'ids' ) );
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode( ',', $tags );
			}
			if ( ! $tags ) {
				$break = true;
			}
		}

		$query = ! isset( $break ) ? new WP_Query( $args ) : new WP_Query();

		return $query;
	}
}

function industrial_manufacturing_blog_image_dimension(){
	if(get_theme_mod('industrial_manufacturing_blog_image_dimension') == 'custom' ) {
		return true;
	}
	return false;
}

function industrial_manufacturing_excerpt_enabled(){
	if(get_theme_mod('industrial_manufacturing_blog_post_content') == 'Excerpt Content' ) {
		return true;
	}
	return false;
}
function industrial_manufacturing_button_enabled(){
	if(get_theme_mod('industrial_manufacturing_blog_button_text') != '' ) {
		return true;
	}
	return false;
}

function industrial_manufacturing_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function industrial_manufacturing_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function industrial_manufacturing_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* Starter Content */
	add_theme_support( 'starter-content', array(
		'widgets' => array(
			'footer-1' => array(
				'categories',
			),
			'footer-2' => array(
				'archives',
			),
			'footer-3' => array(
				'meta',
			),
			'footer-4' => array(
				'search',
			),
		),
    ));

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Implement the Block Pattern. */
require get_template_directory() . '/block-patterns/block-patterns.php';

/* Implement the Get Started. */
require get_template_directory() . '/inc/getting-started/getting-started.php';

/* webfont */
require get_template_directory() . '/inc/wptt-webfont-loader.php';

/* TGM Plugin Activation */
require get_template_directory() . '/inc/tgm/tgm.php';