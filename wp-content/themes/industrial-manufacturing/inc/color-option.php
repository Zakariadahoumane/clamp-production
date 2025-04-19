<?php

	$industrial_manufacturing_first_theme_color = get_theme_mod('industrial_manufacturing_first_theme_color');

	$industrial_manufacturing_second_theme_color = get_theme_mod('industrial_manufacturing_second_theme_color');

	$industrial_manufacturing_custom_css = '';

	if($industrial_manufacturing_first_theme_color != false){
		$industrial_manufacturing_custom_css .='input[type="submit"],a.button,.nav-menu ul ul a,.quote-btn a,#slider .read-more a:hover ,.about-btn a,.post-info,h1.page-title, h1.search-title,.blogbtn a,.back-to-top,#footer input[type="submit"],.footerinner .tagcloud a:hover,.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, a.added_to_cart.wc-forward,nav.woocommerce-MyAccount-navigation ul li,.woocommerce-product-search button,.woocommerce .widget_shopping_cart .buttons a:hover, .woocommerce.widget_shopping_cart .buttons a:hover, .woocommerce .widget_price_filter .price_slider_amount .button:hover,.woocommerce .widget_price_filter .ui-slider-horizontal .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,.bradcrumbs a,.bradcrumbs span,#comments input[type="submit"].submit,#comments a.comment-reply-link,#sidebar h3,#sidebar input[type="submit"],#sidebar .tagcloud a:hover,.more-button a,.pagination a:hover,.pagination .current ,.navigation .nav-previous a, .navigation .nav-next a,.tags a:hover,.post-categories li a, span.page-links-title,.page-links .current .page-number,.page-links a span:hover,#maincontent .wp-block-button a:hover,#sidebar h2, #sidebar .wp-block-tag-cloud a:hover,#sidebar .wp-block-search .wp-block-search__label, button.wp-block-search__button.wp-element-button, .wp-block-tag-cloud a:hover, a.wc-block-components-totals-coupon-link, a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained, a.wc-block-components-checkout-return-to-cart-button, .wc-block-components-totals-coupon__button.contained, button.wc-block-components-checkout-place-order-button,.post-info, .grid-post-info, a.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained,.bradcrumbs a, .woocommerce-account .addresses .title .edit {';
			$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_first_theme_color).'';
		$industrial_manufacturing_custom_css .='}';
	}
	if($industrial_manufacturing_first_theme_color != false){
		$industrial_manufacturing_custom_css .='.nav-menu ul.sub-menu li a :hover,.top-bar a, .top-bar span,.quote-btn a i, .read-more a i, .about-btn a i,.header-search form input[type="search"]::placeholder,#slider .inner_carousel h1,.read-more a:hover i ,#about-section .about-content h2,.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span,.woocommerce-message::before,.social-links i,span.post-title,.tags a i,.nav-menu ul li a{';
			$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_first_theme_color).'';
		$industrial_manufacturing_custom_css .='}';
	}
	if($industrial_manufacturing_first_theme_color != false){
		$industrial_manufacturing_custom_css .='.nav-menu ul ul,.blog-sec,.woocommerce nav.woocommerce-pagination ul li a, .woocommerce nav.woocommerce-pagination ul li span,.woocommerce-message,#sidebar .widget,.pagination a:hover,.pagination .current,.tags a:hover,.page-links .current .page-number,span.page-links-title,.page-links a span:hover,#sidebar .tagcloud a:hover,  .wp-block-tag-cloud a:hover,#sidebar .wp-block-tag-cloud a:hover, .wp-block-tag-cloud a:hover,#maincontent .wp-block-button a:hover{';
			$industrial_manufacturing_custom_css .='border-color: '.esc_attr($industrial_manufacturing_first_theme_color).';';
		$industrial_manufacturing_custom_css .='}';
	}
	if($industrial_manufacturing_first_theme_color != false){
		$industrial_manufacturing_custom_css .='a.wc-block-components-totals-coupon-link, a.components-button.wc-block-components-button.wp-element-button.wc-block-cart__submit-button.contained, a.wc-block-components-checkout-return-to-cart-button, .wc-block-components-totals-coupon__button.contained, button.wc-block-components-checkout-place-order-button{';
			$industrial_manufacturing_custom_css .='border-color: '.esc_attr($industrial_manufacturing_first_theme_color).'!important;';
		$industrial_manufacturing_custom_css .='}';
	}
	if($industrial_manufacturing_first_theme_color != false){
		$industrial_manufacturing_custom_css .='.nav-menu ul ul a:hover,.nav-menu ul li a:hover{';
	 		$industrial_manufacturing_custom_css .='border-left-color: '.esc_attr($industrial_manufacturing_first_theme_color).';';
	 	$industrial_manufacturing_custom_css .='}';
	 }
	 if($industrial_manufacturing_first_theme_color != false){
		$industrial_manufacturing_custom_css .='.creer-faq a{';
	 		$industrial_manufacturing_custom_css .='border-right-color: '.esc_attr($industrial_manufacturing_first_theme_color).';';
	 	$industrial_manufacturing_custom_css .='}';
	 }
	 if($industrial_manufacturing_first_theme_color != false){
		$industrial_manufacturing_custom_css .='.back-to-top::before{';
	 		$industrial_manufacturing_custom_css .='border-bottom-color: '.esc_attr($industrial_manufacturing_first_theme_color).';';
	 	$industrial_manufacturing_custom_css .='}';
	 }
	  if($industrial_manufacturing_first_theme_color != false){
		$industrial_manufacturing_custom_css .='.inner {';
	 		$industrial_manufacturing_custom_css .='border-top-color: '.esc_attr($industrial_manufacturing_first_theme_color).';';
	 	$industrial_manufacturing_custom_css .='}';
	 }

	 if($industrial_manufacturing_second_theme_color != false){
		$industrial_manufacturing_custom_css .='.logo,.quote-btn a:hover, .about-btn a:hover,#slider .read-more a,#about-section .about-img:before,#about-section .about-img span,.blogbtn a:hover,.woocommerce span.onsale,.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover,#maincontent .wp-block-button a,.nav-menu ul ul a:hover{';
			$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_second_theme_color).'';
		$industrial_manufacturing_custom_css .='}';
	 }

	 if($industrial_manufacturing_second_theme_color != false){
		$industrial_manufacturing_custom_css .='.wc-block-grid__product-onsale{';
			$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_second_theme_color).'!important';
		$industrial_manufacturing_custom_css .='}';
	 }
	 if($industrial_manufacturing_second_theme_color != false){
		$industrial_manufacturing_custom_css .='.wc-block-grid__product-onsale{';
			$industrial_manufacturing_custom_css .='border-color: '.esc_attr($industrial_manufacturing_second_theme_color).'!important;';
		$industrial_manufacturing_custom_css .='}';
	}

	if($industrial_manufacturing_second_theme_color != false){
		$industrial_manufacturing_custom_css .='.nav-menu ul li.current_page_item a,.top-bar span i,.social-icons i:hover ,.quote-btn a:hover i, .about-btn a:hover i,#slider .carousel-caption span i,.read-more a i,#about-section strong,#footer h3,#footer h3 a.rsswidget, .comment-content a, #sidebar .textwidget a, .woocommerce-product-details__short-description a, #footer .textwidget a,.woocommerce .star-rating span::before,.wp-calendar-nav a,.wp-block-calendar td a,.wp-block-latest-comments__comment-meta a,#footer h2, #footer label,#footer .wp-block-search__label,.wp-block-archives a, .wp-block-categories a,.wp-block-latest-posts a,.wp-block-page-list a, .wp-block-rss a{';
			$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_second_theme_color).'';
		$industrial_manufacturing_custom_css .='}';
	}
	if($industrial_manufacturing_second_theme_color != false){
		$industrial_manufacturing_custom_css .='#slider .carousel-control-next-icon, #slider .carousel-control-prev-icon{';
			$industrial_manufacturing_custom_css .='border-color: '.esc_attr($industrial_manufacturing_second_theme_color).';';
		$industrial_manufacturing_custom_css .='}';
	}

	// Layout Options
	$industrial_manufacturing_theme_layout = get_theme_mod( 'industrial_manufacturing_theme_layout_options','Default Theme');
    if($industrial_manufacturing_theme_layout == 'Default Theme'){
		$industrial_manufacturing_custom_css .='body{';
			$industrial_manufacturing_custom_css .='max-width: 100%;';
		$industrial_manufacturing_custom_css .='}';
	}else if($industrial_manufacturing_theme_layout == 'Container Theme'){
		$industrial_manufacturing_custom_css .='body{';
			$industrial_manufacturing_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$industrial_manufacturing_custom_css .='}';
	}else if($industrial_manufacturing_theme_layout == 'Box Container Theme'){
		$industrial_manufacturing_custom_css .='body{';
			$industrial_manufacturing_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$industrial_manufacturing_custom_css .='}';
	}
	
	/*--------- Preloader Color Option -------*/
	$industrial_manufacturing_preloader_color = get_theme_mod('industrial_manufacturing_preloader_color');

	if($industrial_manufacturing_preloader_color != false){
		$industrial_manufacturing_custom_css .=' .tg-loader{';
			$industrial_manufacturing_custom_css .='border-color: '.esc_attr($industrial_manufacturing_preloader_color).';';
		$industrial_manufacturing_custom_css .='} ';
		$industrial_manufacturing_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_preloader_color).';';
		$industrial_manufacturing_custom_css .='} ';
	}

	$industrial_manufacturing_preloader_bg_color = get_theme_mod('industrial_manufacturing_preloader_bg_color');

	if($industrial_manufacturing_preloader_bg_color != false){
		$industrial_manufacturing_custom_css .=' #overlayer, .preloader{';
			$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_preloader_bg_color).';';
		$industrial_manufacturing_custom_css .='} ';
	}

	$industrial_manufacturing_preloader_bg_img = get_theme_mod('industrial_manufacturing_preloader_bg_img');
	if($industrial_manufacturing_preloader_bg_img != false){
		$industrial_manufacturing_custom_css .=' #overlayer, .preloader{';
			$industrial_manufacturing_custom_css .='background: url('.esc_attr($industrial_manufacturing_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*------------ Button Settings option-----------------*/

	$industrial_manufacturing_top_button_padding = get_theme_mod('industrial_manufacturing_top_button_padding');
	$industrial_manufacturing_bottom_button_padding = get_theme_mod('industrial_manufacturing_bottom_button_padding');
	$industrial_manufacturing_left_button_padding = get_theme_mod('industrial_manufacturing_left_button_padding');
	$industrial_manufacturing_right_button_padding = get_theme_mod('industrial_manufacturing_right_button_padding');
	if($industrial_manufacturing_top_button_padding != false || $industrial_manufacturing_bottom_button_padding != false || $industrial_manufacturing_left_button_padding != false || $industrial_manufacturing_right_button_padding != false){
		$industrial_manufacturing_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
			$industrial_manufacturing_custom_css .='padding-top: '.esc_attr($industrial_manufacturing_top_button_padding).'px; padding-bottom: '.esc_attr($industrial_manufacturing_bottom_button_padding).'px; padding-left: '.esc_attr($industrial_manufacturing_left_button_padding).'px; padding-right: '.esc_attr($industrial_manufacturing_right_button_padding).'px; display:inline-block;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_button_border_radius = get_theme_mod('industrial_manufacturing_button_border_radius');
	$industrial_manufacturing_custom_css .='.blogbtn a, .read-more a, #comments input[type="submit"].submit{';
		$industrial_manufacturing_custom_css .='border-radius: '.esc_attr($industrial_manufacturing_button_border_radius).'px;';
	$industrial_manufacturing_custom_css .='}';

	// button font weight
	$industrial_manufacturing_button_font_weight = get_theme_mod('industrial_manufacturing_button_font_weight', '500');
  	$industrial_manufacturing_custom_css .='.blogbtn a{';
    $industrial_manufacturing_custom_css .='font-weight: '.esc_attr($industrial_manufacturing_button_font_weight).';';
  	$industrial_manufacturing_custom_css .='}';


  	// button text transform
  	$industrial_manufacturing_button_text_transform = get_theme_mod('industrial_manufacturing_button_text_transform');
  	if($industrial_manufacturing_button_text_transform == 'uppercase' ){
    	$industrial_manufacturing_custom_css .='.blogbtn a{';
      	$industrial_manufacturing_custom_css .=' text-transform: uppercase;';
    	$industrial_manufacturing_custom_css .='}';
  	}elseif($industrial_manufacturing_button_text_transform == 'capitalize' ){
    	$industrial_manufacturing_custom_css .='.blogbtn a{';
      	$industrial_manufacturing_custom_css .=' text-transform: capitalize;';
    	$industrial_manufacturing_custom_css .='}';
  	}elseif($industrial_manufacturing_button_text_transform == 'lowercase' ){
    	$industrial_manufacturing_custom_css .='.blogbtn a{';
      	$industrial_manufacturing_custom_css .=' text-transform: lowercase;';
    	$industrial_manufacturing_custom_css .='}';
  	}

  	// widgets heading font size
	$industrial_manufacturing_widgets_heading_fontsize = get_theme_mod('industrial_manufacturing_widgets_heading_fontsize',25);
	if($industrial_manufacturing_widgets_heading_fontsize != false){
		$industrial_manufacturing_custom_css .='#footer h3, #footer h2, #footer .wp-block-search__label{';
			$industrial_manufacturing_custom_css .='font-size: '.esc_attr($industrial_manufacturing_widgets_heading_fontsize).'px; ';
		$industrial_manufacturing_custom_css .='}';
	}

	// widgets heading font weight
	$industrial_manufacturing_widgets_heading_font_weight = get_theme_mod('industrial_manufacturing_widgets_heading_font_weight', '600');
  	$industrial_manufacturing_custom_css .='#footer h3, #footer h2, #footer .wp-block-search__label{';
    $industrial_manufacturing_custom_css .='font-weight: '.esc_attr($industrial_manufacturing_widgets_heading_font_weight).';';
  	$industrial_manufacturing_custom_css .='}';

	/*----------- Footer widgets heading alignment -----*/
	$industrial_manufacturing_footer_widgets_heading = get_theme_mod( 'industrial_manufacturing_footer_widgets_heading','Left');
    if($industrial_manufacturing_footer_widgets_heading == 'Left'){
		$industrial_manufacturing_custom_css .='#footer h3{';
		$industrial_manufacturing_custom_css .='text-align: left;';
		$industrial_manufacturing_custom_css .='}';
	}else if($industrial_manufacturing_footer_widgets_heading == 'Center'){
		$industrial_manufacturing_custom_css .='#footer h3{';
			$industrial_manufacturing_custom_css .='text-align: center;';
		$industrial_manufacturing_custom_css .='}';
	}else if($industrial_manufacturing_footer_widgets_heading == 'Right'){
		$industrial_manufacturing_custom_css .='#footer h3{';
			$industrial_manufacturing_custom_css .='text-align: right;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_footer_widgets_content = get_theme_mod( 'industrial_manufacturing_footer_widgets_content','Left');
    if($industrial_manufacturing_footer_widgets_content == 'Left'){
		$industrial_manufacturing_custom_css .='#footer .widget ul{';
		$industrial_manufacturing_custom_css .='text-align: left;';
		$industrial_manufacturing_custom_css .='}';
	}else if($industrial_manufacturing_footer_widgets_content == 'Center'){
		$industrial_manufacturing_custom_css .='#footer .widget ul{';
			$industrial_manufacturing_custom_css .='text-align: center;';
		$industrial_manufacturing_custom_css .='}';
	}else if($industrial_manufacturing_footer_widgets_content == 'Right'){
		$industrial_manufacturing_custom_css .='#footer .widget ul{';
			$industrial_manufacturing_custom_css .='text-align: right;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*----------- Copyright css -----*/
	$industrial_manufacturing_copyright_top_padding = get_theme_mod('industrial_manufacturing_top_copyright_padding');
	$industrial_manufacturing_copyright_bottom_padding = get_theme_mod('industrial_manufacturing_bottom_copyright_padding');
	if($industrial_manufacturing_copyright_top_padding != '' || $industrial_manufacturing_copyright_bottom_padding != ''){
		$industrial_manufacturing_custom_css .='.inner{';
			$industrial_manufacturing_custom_css .='padding-top: '.esc_attr($industrial_manufacturing_copyright_top_padding).'px; padding-bottom: '.esc_attr($industrial_manufacturing_copyright_bottom_padding).'px; ';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_copyright_alignment = get_theme_mod('industrial_manufacturing_copyright_alignment', 'center');
	if($industrial_manufacturing_copyright_alignment == 'center' ){
		$industrial_manufacturing_custom_css .='#footer .copyright p{';
			$industrial_manufacturing_custom_css .='text-align: '. $industrial_manufacturing_copyright_alignment .';';
		$industrial_manufacturing_custom_css .='}';
	}elseif($industrial_manufacturing_copyright_alignment == 'left' ){
		$industrial_manufacturing_custom_css .='#footer .copyright p{';
			$industrial_manufacturing_custom_css .=' text-align: '. $industrial_manufacturing_copyright_alignment .';';
		$industrial_manufacturing_custom_css .='}';
	}elseif($industrial_manufacturing_copyright_alignment == 'right' ){
		$industrial_manufacturing_custom_css .='#footer .copyright p{';
			$industrial_manufacturing_custom_css .='text-align: '. $industrial_manufacturing_copyright_alignment .';';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_copyright_font_size = get_theme_mod('industrial_manufacturing_copyright_font_size');
	$industrial_manufacturing_custom_css .='#footer .copyright p{';
		$industrial_manufacturing_custom_css .='font-size: '.esc_attr($industrial_manufacturing_copyright_font_size).'px;';
	$industrial_manufacturing_custom_css .='}';

	$industrial_manufacturing_copyright_color = get_theme_mod('industrial_manufacturing_copyright_color');
	$industrial_manufacturing_custom_css .='#footer .copyright p,#footer .copyright a{';
		$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_copyright_color).'!important;';
	$industrial_manufacturing_custom_css .='}';

	$industrial_manufacturing_back_to_top_text_color = get_theme_mod('industrial_manufacturing_back_to_top_text_color');
	$industrial_manufacturing_custom_css .='.back-to-top{';
		$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_back_to_top_text_color).'!important;';
	$industrial_manufacturing_custom_css .='}';

	/*------ Topbar padding ------*/
	$industrial_manufacturing_top_topbar_padding = get_theme_mod('industrial_manufacturing_top_topbar_padding');
	$industrial_manufacturing_bottom_topbar_padding = get_theme_mod('industrial_manufacturing_bottom_topbar_padding');
	if($industrial_manufacturing_top_topbar_padding != false || $industrial_manufacturing_bottom_topbar_padding != false){
		$industrial_manufacturing_custom_css .='.top-bar, .page-template-custom-front-page .top-bar{';
			$industrial_manufacturing_custom_css .='padding-top: '.esc_attr($industrial_manufacturing_top_topbar_padding).'px !important; padding-bottom: '.esc_attr($industrial_manufacturing_bottom_topbar_padding).'px !important; ';
		$industrial_manufacturing_custom_css .='}';
	}

	// Header Social Icons Font Size
    $industrial_manufacturing_header_icons_font_size = get_theme_mod('industrial_manufacturing_header_icons_font_size', '16');
    $industrial_manufacturing_custom_css .='.top-bar a,.top-bar span i{';
        $industrial_manufacturing_custom_css .='font-size: '.esc_attr($industrial_manufacturing_header_icons_font_size).'px;';
    $industrial_manufacturing_custom_css .='}';

	/*------ Woocommerce ----*/
	$industrial_manufacturing_product_border = get_theme_mod('industrial_manufacturing_product_border',true);

	if($industrial_manufacturing_product_border == false){
		$industrial_manufacturing_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$industrial_manufacturing_custom_css .='border: 0;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_product_top = get_theme_mod('industrial_manufacturing_product_top_padding',10);
	$industrial_manufacturing_product_bottom = get_theme_mod('industrial_manufacturing_product_bottom_padding',10);
	$industrial_manufacturing_product_left = get_theme_mod('industrial_manufacturing_product_left_padding',10);
	$industrial_manufacturing_product_right = get_theme_mod('industrial_manufacturing_product_right_padding',10);
	if($industrial_manufacturing_product_top != false || $industrial_manufacturing_product_bottom != false || $industrial_manufacturing_product_left != false || $industrial_manufacturing_product_right != false){
		$industrial_manufacturing_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$industrial_manufacturing_custom_css .='padding-top: '.esc_attr($industrial_manufacturing_product_top).'px; padding-bottom: '.esc_attr($industrial_manufacturing_product_bottom).'px; padding-left: '.esc_attr($industrial_manufacturing_product_left).'px; padding-right: '.esc_attr($industrial_manufacturing_product_right).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_product_border_radius = get_theme_mod('industrial_manufacturing_product_border_radius');
	if($industrial_manufacturing_product_border_radius != false){
		$industrial_manufacturing_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$industrial_manufacturing_custom_css .='border-radius: '.esc_attr($industrial_manufacturing_product_border_radius).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*----- WooCommerce button css --------*/
	$industrial_manufacturing_product_button_top = get_theme_mod('industrial_manufacturing_product_button_top_padding',10);
	$industrial_manufacturing_product_button_bottom = get_theme_mod('industrial_manufacturing_product_button_bottom_padding',10);
	$industrial_manufacturing_product_button_left = get_theme_mod('industrial_manufacturing_product_button_left_padding',12);
	$industrial_manufacturing_product_button_right = get_theme_mod('industrial_manufacturing_product_button_right_padding',12);
	if($industrial_manufacturing_product_button_top != false || $industrial_manufacturing_product_button_bottom != false || $industrial_manufacturing_product_button_left != false || $industrial_manufacturing_product_button_right != false){
		$industrial_manufacturing_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
			$industrial_manufacturing_custom_css .='padding-top: '.esc_attr($industrial_manufacturing_product_button_top).'px; padding-bottom: '.esc_attr($industrial_manufacturing_product_button_bottom).'px; padding-left: '.esc_attr($industrial_manufacturing_product_button_left).'px; padding-right: '.esc_attr($industrial_manufacturing_product_button_right).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_product_button_border_radius = get_theme_mod('industrial_manufacturing_product_button_border_radius');
	if($industrial_manufacturing_product_button_border_radius != false){
		$industrial_manufacturing_custom_css .='.woocommerce ul.products li.product .button, .woocommerce div.product form.cart .button, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, a.checkout-button.button.alt.wc-forward, .woocommerce #payment #place_order, .woocommerce-page #payment #place_order, button.woocommerce-button.button.woocommerce-form-login__submit{';
			$industrial_manufacturing_custom_css .='border-radius: '.esc_attr($industrial_manufacturing_product_button_border_radius).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*----- WooCommerce product sale css --------*/
	$industrial_manufacturing_product_sale_top = get_theme_mod('industrial_manufacturing_product_sale_top_padding');
	$industrial_manufacturing_product_sale_bottom = get_theme_mod('industrial_manufacturing_product_sale_bottom_padding');
	$industrial_manufacturing_product_sale_left = get_theme_mod('industrial_manufacturing_product_sale_left_padding');
	$industrial_manufacturing_product_sale_right = get_theme_mod('industrial_manufacturing_product_sale_right_padding');
	if($industrial_manufacturing_product_sale_top != false || $industrial_manufacturing_product_sale_bottom != false || $industrial_manufacturing_product_sale_left != false || $industrial_manufacturing_product_sale_right != false){
		$industrial_manufacturing_custom_css .='.woocommerce span.onsale {';
			$industrial_manufacturing_custom_css .='padding-top: '.esc_attr($industrial_manufacturing_product_sale_top).'px; padding-bottom: '.esc_attr($industrial_manufacturing_product_sale_bottom).'px; padding-left: '.esc_attr($industrial_manufacturing_product_sale_left).'px; padding-right: '.esc_attr($industrial_manufacturing_product_sale_right).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_product_sale_border_radius = get_theme_mod('industrial_manufacturing_product_sale_border_radius',0);
	if($industrial_manufacturing_product_sale_border_radius != false){
		$industrial_manufacturing_custom_css .='.woocommerce span.onsale {';
			$industrial_manufacturing_custom_css .='border-radius: '.esc_attr($industrial_manufacturing_product_sale_border_radius).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_menu_case = get_theme_mod('industrial_manufacturing_product_sale_position', 'Right');
	if($industrial_manufacturing_menu_case == 'Right' ){
		$industrial_manufacturing_custom_css .='.woocommerce ul.products li.product .onsale{';
			$industrial_manufacturing_custom_css .=' left:auto; right:0;';
		$industrial_manufacturing_custom_css .='}';
	}elseif($industrial_manufacturing_menu_case == 'Left' ){
		$industrial_manufacturing_custom_css .='.woocommerce ul.products li.product .onsale{';
			$industrial_manufacturing_custom_css .=' left:-10px; right:auto;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_product_sale_font_size = get_theme_mod('industrial_manufacturing_product_sale_font_size',13);
	$industrial_manufacturing_custom_css .='.woocommerce span.onsale {';
		$industrial_manufacturing_custom_css .='font-size: '.esc_attr($industrial_manufacturing_product_sale_font_size).'px;';
	$industrial_manufacturing_custom_css .='}';


	/*---- Comment form ----*/
	$industrial_manufacturing_comment_width = get_theme_mod('industrial_manufacturing_comment_width', '100');
	$industrial_manufacturing_custom_css .='#comments textarea{';
		$industrial_manufacturing_custom_css .=' width:'.esc_attr($industrial_manufacturing_comment_width).'%;';
	$industrial_manufacturing_custom_css .='}';

	$industrial_manufacturing_comment_submit_text = get_theme_mod('industrial_manufacturing_comment_submit_text', 'Post Comment');
	if($industrial_manufacturing_comment_submit_text == ''){
		$industrial_manufacturing_custom_css .='#comments p.form-submit {';
			$industrial_manufacturing_custom_css .='display: none;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_comment_title = get_theme_mod('industrial_manufacturing_comment_title', 'Leave a Reply');
	if($industrial_manufacturing_comment_title == ''){
		$industrial_manufacturing_custom_css .='#comments h2#reply-title {';
			$industrial_manufacturing_custom_css .='display: none;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*------ Footer background css -------*/
	$industrial_manufacturing_footer_bg_color = get_theme_mod('industrial_manufacturing_footer_bg_color');
	if($industrial_manufacturing_footer_bg_color != false){
		$industrial_manufacturing_custom_css .='.footerinner{';
			$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_footer_bg_color).';';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_footer_bg_image = get_theme_mod('industrial_manufacturing_footer_bg_image');
	if($industrial_manufacturing_footer_bg_image != false){
		$industrial_manufacturing_custom_css .='.footerinner{';
			$industrial_manufacturing_custom_css .='background: url('.esc_attr($industrial_manufacturing_footer_bg_image).');';
		$industrial_manufacturing_custom_css .='}';
	}

	/*----- Featured image css -----*/
	$industrial_manufacturing_feature_image_border_radius = get_theme_mod('industrial_manufacturing_feature_image_border_radius');
	if($industrial_manufacturing_feature_image_border_radius != false){
		$industrial_manufacturing_custom_css .='.blog-sec img{';
			$industrial_manufacturing_custom_css .='border-radius: '.esc_attr($industrial_manufacturing_feature_image_border_radius).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_feature_image_shadow = get_theme_mod('industrial_manufacturing_feature_image_shadow');
	if($industrial_manufacturing_feature_image_shadow != false){
		$industrial_manufacturing_custom_css .='.blog-sec img{';
			$industrial_manufacturing_custom_css .='box-shadow: '.esc_attr($industrial_manufacturing_feature_image_shadow).'px '.esc_attr($industrial_manufacturing_feature_image_shadow).'px '.esc_attr($industrial_manufacturing_feature_image_shadow).'px #aaa;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*------ Sticky header padding ------------*/
	$industrial_manufacturing_top_sticky_header_padding = get_theme_mod('industrial_manufacturing_top_sticky_header_padding');
	$industrial_manufacturing_bottom_sticky_header_padding = get_theme_mod('industrial_manufacturing_bottom_sticky_header_padding');
	$industrial_manufacturing_custom_css .=' .fixed-header{';
		$industrial_manufacturing_custom_css .=' padding-top: '.esc_attr($industrial_manufacturing_top_sticky_header_padding).'px; padding-bottom: '.esc_attr($industrial_manufacturing_bottom_sticky_header_padding).'px';
	$industrial_manufacturing_custom_css .='}';

		// featured image dimention
	$industrial_manufacturing_blog_image_dimension = get_theme_mod('industrial_manufacturing_blog_image_dimension', 'default');
	$industrial_manufacturing_feature_image_custom_width = get_theme_mod('industrial_manufacturing_feature_image_custom_width',250);
	$industrial_manufacturing_feature_image_custom_height = get_theme_mod('industrial_manufacturing_feature_image_custom_height',250);
	if($industrial_manufacturing_blog_image_dimension == 'custom'){
		$industrial_manufacturing_custom_css .='.blog-sec img{';
			$industrial_manufacturing_custom_css .='width: '.esc_attr($industrial_manufacturing_feature_image_custom_width).'px; height: '.esc_attr($industrial_manufacturing_feature_image_custom_height).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*------ Related products ---------*/
	$industrial_manufacturing_related_products = get_theme_mod('industrial_manufacturing_single_related_products',true);
	if($industrial_manufacturing_related_products == false){
		$industrial_manufacturing_custom_css .=' .related.products{';
			$industrial_manufacturing_custom_css .='display: none;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*-------- Menu Font Size --------*/
	$industrial_manufacturing_menu_font_size = get_theme_mod('industrial_manufacturing_menu_font_size',13);
	if($industrial_manufacturing_menu_font_size != false){
		$industrial_manufacturing_custom_css .='.nav-menu li a{';
			$industrial_manufacturing_custom_css .='font-size: '.esc_attr($industrial_manufacturing_menu_font_size).'px;';
		$industrial_manufacturing_custom_css .='}';
	}

	$industrial_manufacturing_menu_font_weight = get_theme_mod('industrial_manufacturing_menu_font_weight');
	$industrial_manufacturing_custom_css .='.nav-menu li a{';
		$industrial_manufacturing_custom_css .='font-weight: '.esc_attr($industrial_manufacturing_menu_font_weight).';';
	$industrial_manufacturing_custom_css .='}';

	// Featured image header
	$header_image_url = industrial_manufacturing_banner_image( $image_url = '' );
	$industrial_manufacturing_custom_css .='#page-site-header{';
		$industrial_manufacturing_custom_css .='background-image: url('. esc_url( $header_image_url ).'); background-size: cover;';
	$industrial_manufacturing_custom_css .='}';

	$industrial_manufacturing_post_featured_image = get_theme_mod('industrial_manufacturing_post_featured_image', 'in-content');
	if($industrial_manufacturing_post_featured_image == 'banner' ){
		$industrial_manufacturing_custom_css .='.single #wrapper h1, .page #wrapper h1, .page #wrapper img{';
			$industrial_manufacturing_custom_css .=' display: none;';
		$industrial_manufacturing_custom_css .='}';
		$industrial_manufacturing_custom_css .='.page-template-custom-front-page #page-site-header{';
			$industrial_manufacturing_custom_css .=' display: none;';
		$industrial_manufacturing_custom_css .='}';
	}

	// Woocommerce Shop page pagination
	$industrial_manufacturing_shop_page_navigation = get_theme_mod('industrial_manufacturing_shop_page_navigation',true);
	if ($industrial_manufacturing_shop_page_navigation == false) {
		$industrial_manufacturing_custom_css .='.woocommerce nav.woocommerce-pagination{';
			$industrial_manufacturing_custom_css .='display: none;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*----- Blog Post display type css ------*/
	$industrial_manufacturing_blog_post_display_type = get_theme_mod('industrial_manufacturing_blog_post_display_type', 'blocks');
	if($industrial_manufacturing_blog_post_display_type == 'without blocks' ){
		$industrial_manufacturing_custom_css .='.blog .blog-sec, .blog #sidebar .widget{';
			$industrial_manufacturing_custom_css .='border: 0;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*---------- Responsive style ---------*/
	$industrial_manufacturing_toggle_button_bg_color_settings = get_theme_mod('industrial_manufacturing_toggle_button_bg_color_settings');
	$industrial_manufacturing_custom_css .='.toggle-menu {';
	$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_toggle_button_bg_color_settings).';';
	$industrial_manufacturing_custom_css .='} ';
	
	if (get_theme_mod('industrial_manufacturing_hide_topbar_responsive',true) == true && get_theme_mod('industrial_manufacturing_top_header',false) == false) {
		$industrial_manufacturing_custom_css .='.top-bar{';
			$industrial_manufacturing_custom_css .=' display: none;';
		$industrial_manufacturing_custom_css .='} ';
	}

	if (get_theme_mod('industrial_manufacturing_sticky_header_responsive') == false) {
		$industrial_manufacturing_custom_css .='@media screen and (max-width: 575px){
			.sticky{';
			$industrial_manufacturing_custom_css .=' position: static;';
		$industrial_manufacturing_custom_css .='} }';
	}

	if (get_theme_mod('industrial_manufacturing_hide_topbar_responsive',true) == false) {
		$industrial_manufacturing_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$industrial_manufacturing_custom_css .=' display: none;';
		$industrial_manufacturing_custom_css .='} }';
	} else if(get_theme_mod('industrial_manufacturing_hide_topbar_responsive',true) == true){
		$industrial_manufacturing_custom_css .='@media screen and (max-width: 575px){
			.top-bar{';
			$industrial_manufacturing_custom_css .=' display: block;';
		$industrial_manufacturing_custom_css .='} }';
	}

	$industrial_manufacturing_resp_sidebar = get_theme_mod( 'industrial_manufacturing_sidebar_hide_show',true);
    if($industrial_manufacturing_resp_sidebar == true){
    	$industrial_manufacturing_custom_css .='@media screen and (max-width:575px) {';
		$industrial_manufacturing_custom_css .='#sidebar{';
			$industrial_manufacturing_custom_css .='display:block;';
		$industrial_manufacturing_custom_css .='} }';
	}else if($industrial_manufacturing_resp_sidebar == false){
		$industrial_manufacturing_custom_css .='@media screen and (max-width:575px) {';
		$industrial_manufacturing_custom_css .='#sidebar{';
			$industrial_manufacturing_custom_css .='display:none;';
		$industrial_manufacturing_custom_css .='} }';
	}

	// Site title Font Size
	$industrial_manufacturing_site_title_font_size = get_theme_mod('industrial_manufacturing_site_title_font_size', '25');
	$industrial_manufacturing_custom_css .='.logo h1, .logo p.site-title{';
		$industrial_manufacturing_custom_css .='font-size: '.esc_attr($industrial_manufacturing_site_title_font_size).'px;';
	$industrial_manufacturing_custom_css .='}';

	// Site tagline Font Size
	$industrial_manufacturing_site_tagline_font_size = get_theme_mod('industrial_manufacturing_site_tagline_font_size', '14');
	$industrial_manufacturing_custom_css .='.logo p.site-description{';
		$industrial_manufacturing_custom_css .='font-size: '.esc_attr($industrial_manufacturing_site_tagline_font_size).'px;';
	$industrial_manufacturing_custom_css .='}';

	/*---- Slider Content Position -----*/
	$industrial_manufacturing_top_position = get_theme_mod('industrial_manufacturing_slider_top_position');
	$industrial_manufacturing_bottom_position = get_theme_mod('industrial_manufacturing_slider_bottom_position');
	$industrial_manufacturing_left_position = get_theme_mod('industrial_manufacturing_slider_left_position');
	$industrial_manufacturing_right_position = get_theme_mod('industrial_manufacturing_slider_right_position');
	if($industrial_manufacturing_top_position != false || $industrial_manufacturing_bottom_position != false || $industrial_manufacturing_left_position != false || $industrial_manufacturing_right_position != false){
		$industrial_manufacturing_custom_css .='#slider .carousel-caption{';
			$industrial_manufacturing_custom_css .='top: '.esc_attr($industrial_manufacturing_top_position).'%; bottom: '.esc_attr($industrial_manufacturing_bottom_position).'%; left: '.esc_attr($industrial_manufacturing_left_position).'%; right: '.esc_attr($industrial_manufacturing_right_position).'%;';
		$industrial_manufacturing_custom_css .='}';
	}

	// Slider Arrows hover color
	$industrial_manufacturing_slider_arrows_hover_color = get_theme_mod('industrial_manufacturing_slider_arrows_hover_color','#FF5E14');
	$industrial_manufacturing_custom_css .='#slider .carousel-control-prev-icon:hover,#slider .carousel-control-next-icon:hover{';
			$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_slider_arrows_hover_color).' !important;';
	$industrial_manufacturing_custom_css .='}';

	// Slider Button color
	$industrial_manufacturing_slider_btn_color = get_theme_mod('industrial_manufacturing_slider_btn_color','#fff');
	$industrial_manufacturing_custom_css .='.read-more a{';
			$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_slider_btn_color).' !important;';
	$industrial_manufacturing_custom_css .='}';

	// Slider button bg color
	$industrial_manufacturing_slider_btn_bg_color = get_theme_mod('industrial_manufacturing_slider_btn_bg_color','#FF5E14');
	$industrial_manufacturing_custom_css .='.read-more a{';
			$industrial_manufacturing_custom_css .='background: '.esc_attr($industrial_manufacturing_slider_btn_bg_color).' !important;';
	$industrial_manufacturing_custom_css .='}';

	// Slider button lable hover color
	$industrial_manufacturing_slider_btn_lable_hover_color = get_theme_mod('industrial_manufacturing_slider_btn_lable_hover_color','#fff');
	$industrial_manufacturing_custom_css .='.read-more a:hover{';
			$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_slider_btn_lable_hover_color).' !important;';
	$industrial_manufacturing_custom_css .='}';

	// Slider button bg hover color
	$industrial_manufacturing_slider_btn_bg_hover_color = get_theme_mod('industrial_manufacturing_slider_btn_bg_hover_color','#0E2B5C');
	$industrial_manufacturing_custom_css .='.read-more a:hover{';
			$industrial_manufacturing_custom_css .='background: '.esc_attr($industrial_manufacturing_slider_btn_bg_hover_color).' !important;';
	$industrial_manufacturing_custom_css .='}';

	/*---- Slider Height ------*/
	$industrial_manufacturing_slider_height = get_theme_mod('industrial_manufacturing_slider_height');
	$industrial_manufacturing_custom_css .='#slider img{';
		$industrial_manufacturing_custom_css .='height: '.esc_attr($industrial_manufacturing_slider_height).'px;';
	$industrial_manufacturing_custom_css .='}';
	$industrial_manufacturing_custom_css .='@media screen and (max-width: 768px){
		#slider img{';
		$industrial_manufacturing_custom_css .='height: auto;';
	$industrial_manufacturing_custom_css .='} }';

	// Metabox Seperator Blog post
	$industrial_manufacturing_metabox_seperator = get_theme_mod('industrial_manufacturing_metabox_seperator','|');
	if($industrial_manufacturing_metabox_seperator != '' ){
		$industrial_manufacturing_custom_css .='.blog-sec .post-info span:after{';
			$industrial_manufacturing_custom_css .=' content: "'.esc_attr($industrial_manufacturing_metabox_seperator).'"; padding-left:10px;';
		$industrial_manufacturing_custom_css .='}';
		$industrial_manufacturing_custom_css .='.blog-sec .post-info span:last-child:after{';
			$industrial_manufacturing_custom_css .=' content: none;';
		$industrial_manufacturing_custom_css .='}';
	}

	// Metabox Seperator Single post
	$industrial_manufacturing_single_post_metabox_seperator = get_theme_mod('industrial_manufacturing_single_post_metabox_seperator','|');
	if($industrial_manufacturing_single_post_metabox_seperator != '' ){
		$industrial_manufacturing_custom_css .='.post-info span:after{';
			$industrial_manufacturing_custom_css .=' content: "'.esc_attr($industrial_manufacturing_single_post_metabox_seperator).'"; padding-left:10px;';
		$industrial_manufacturing_custom_css .='}';
		$industrial_manufacturing_custom_css .='.post-info span:last-child:after{';
			$industrial_manufacturing_custom_css .=' content: none;';
		$industrial_manufacturing_custom_css .='}';
	}

	// Metabox Seperator Grid post
	$industrial_manufacturing_grid_post_metabox_seperator = get_theme_mod('industrial_manufacturing_grid_post_metabox_seperator','|');
	if($industrial_manufacturing_grid_post_metabox_seperator != '' ){
		$industrial_manufacturing_custom_css .='.grid-post-info span:after{';
			$industrial_manufacturing_custom_css .=' content: "'.esc_attr($industrial_manufacturing_grid_post_metabox_seperator).'"; padding-left:10px;';
		$industrial_manufacturing_custom_css .='}';
		$industrial_manufacturing_custom_css .='.grid-post-info span:last-child:after{';
			$industrial_manufacturing_custom_css .=' content: none;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*----- grid Post display type css ------*/
	$industrial_manufacturing_grid_post_display_type = get_theme_mod('industrial_manufacturing_grid_post_display_type', 'blocks');
	if($industrial_manufacturing_grid_post_display_type == 'without blocks' ){
		$industrial_manufacturing_custom_css .='.grid-sec{';
			$industrial_manufacturing_custom_css .='border: 0;';
		$industrial_manufacturing_custom_css .='}';
	}

	/*-------- Blog Post Alignment ------*/
	$industrial_manufacturing_post_alignment = get_theme_mod('industrial_manufacturing_blog_post_alignment', 'center');
	if($industrial_manufacturing_post_alignment == 'left' ){
		$industrial_manufacturing_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$industrial_manufacturing_custom_css .=' text-align: '. $industrial_manufacturing_post_alignment .'!important;';
		$industrial_manufacturing_custom_css .='}';
	}elseif($industrial_manufacturing_post_alignment == 'right' ){
		$industrial_manufacturing_custom_css .='.blog-sec, .blog-sec h2, .post-info, .blogbtn{';
			$industrial_manufacturing_custom_css .='text-align: '. $industrial_manufacturing_post_alignment .'!important;';
		$industrial_manufacturing_custom_css .='}';
	}	

	// responsive settings
	if (get_theme_mod('industrial_manufacturing_preloader_responsive',false) == true && get_theme_mod('industrial_manufacturing_preloader',false) == false) {
		$industrial_manufacturing_custom_css .='@media screen and (min-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$industrial_manufacturing_custom_css .=' visibility: hidden;';
		$industrial_manufacturing_custom_css .='} }';
	}
	if (get_theme_mod('industrial_manufacturing_preloader_responsive',false) == false) {
		$industrial_manufacturing_custom_css .='@media screen and (max-width: 575px){
			.preloader, #overlayer, .tg-loader{';
			$industrial_manufacturing_custom_css .=' visibility: hidden;';
		$industrial_manufacturing_custom_css .='} }';
	}

	// scroll to top
	$industrial_manufacturing_scroll = get_theme_mod( 'industrial_manufacturing_backtotop_responsive',true);
	if (get_theme_mod('industrial_manufacturing_backtotop_responsive',true) == true && get_theme_mod('industrial_manufacturing_hide_scroll',true) == false) {
    	$industrial_manufacturing_custom_css .='.show-back-to-top{';
			$industrial_manufacturing_custom_css .='visibility: hidden !important;';
		$industrial_manufacturing_custom_css .='} ';
	}
    if($industrial_manufacturing_scroll == true){
    	$industrial_manufacturing_custom_css .='@media screen and (max-width:575px) {';
		$industrial_manufacturing_custom_css .='.show-back-to-top{';
			$industrial_manufacturing_custom_css .='visibility: visible !important;';
		$industrial_manufacturing_custom_css .='} }';
	}else if($industrial_manufacturing_scroll == false){
		$industrial_manufacturing_custom_css .='@media screen and (max-width:575px) {';
		$industrial_manufacturing_custom_css .='.show-back-to-top{';
			$industrial_manufacturing_custom_css .='visibility: hidden !important;';
		$industrial_manufacturing_custom_css .='} }';
	}

	/*------ Footer background css -------*/
	$industrial_manufacturing_copyright_bg_color = get_theme_mod('industrial_manufacturing_copyright_bg_color');
	if($industrial_manufacturing_copyright_bg_color != false){
		$industrial_manufacturing_custom_css .='.inner{';
			$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_copyright_bg_color).';';
		$industrial_manufacturing_custom_css .='}';
	}

	/*------Slider css -------*/
	$industrial_manufacturing_show_slider = get_theme_mod('industrial_manufacturing_show_slider',false);
	if($industrial_manufacturing_show_slider == false){
		$industrial_manufacturing_custom_css .='.page-template-custom-front-page #header {';
			$industrial_manufacturing_custom_css .='border-bottom: 2px solid #CCCCCC;';
		$industrial_manufacturing_custom_css .='}';
	}

	// responsive slider
	if (get_theme_mod('industrial_manufacturing_slider_responsive',true) == true && get_theme_mod('industrial_manufacturing_show_slider',false) == false) {
		$industrial_manufacturing_custom_css .='@media screen and (min-width: 575px){
			#slider{';
			$industrial_manufacturing_custom_css .=' display: none;';
		$industrial_manufacturing_custom_css .='} }';
	}
	if (get_theme_mod('industrial_manufacturing_slider_responsive',true) == false) {
		$industrial_manufacturing_custom_css .='@media screen and (max-width: 575px){
			#slider{';
			$industrial_manufacturing_custom_css .=' display: none;';
		$industrial_manufacturing_custom_css .='} }';
	}

	// slider button
	if (get_theme_mod('industrial_manufacturing_slider_button_responsive',true) == true && get_theme_mod('industrial_manufacturing_slider_button',true) == false) {
		$industrial_manufacturing_custom_css .='@media screen and (min-width: 575px){
			.read-more{';
			$industrial_manufacturing_custom_css .=' display: none;';
		$industrial_manufacturing_custom_css .='} }';
	}
	if (get_theme_mod('industrial_manufacturing_slider_button_responsive',true) == false) {
		$industrial_manufacturing_custom_css .='@media screen and (max-width: 575px){
			.read-more{';
			$industrial_manufacturing_custom_css .=' display: none;';
		$industrial_manufacturing_custom_css .='} }';
		$industrial_manufacturing_custom_css .='@media screen and (max-width: 575px){
			#slider .carousel-caption{';
			$industrial_manufacturing_custom_css .=' padding: 0px;';
		$industrial_manufacturing_custom_css .='} }';
	}

	// menu padding
	$industrial_manufacturing_menu_padding = get_theme_mod('industrial_manufacturing_menu_padding',10);
	$industrial_manufacturing_custom_css .='.nav-menu ul li a, .sf-arrows ul .sf-with-ul, .sf-arrows .sf-with-ul{';
		$industrial_manufacturing_custom_css .='padding: '.esc_attr($industrial_manufacturing_menu_padding).'px;';
	$industrial_manufacturing_custom_css .='}';

	$industrial_manufacturing_menu_case = get_theme_mod('industrial_manufacturing_menu_case', 'Capitalize');
	if($industrial_manufacturing_menu_case == 'uppercase' ){
		$industrial_manufacturing_custom_css .='.nav-menu ul li a{';
			$industrial_manufacturing_custom_css .=' text-transform: uppercase;';
		$industrial_manufacturing_custom_css .='}';
	}elseif($industrial_manufacturing_menu_case == 'lowercase' ){
		$industrial_manufacturing_custom_css .='.nav-menu ul li a{';
			$industrial_manufacturing_custom_css .=' text-transform: lowercase;';
		$industrial_manufacturing_custom_css .='}';
	}

	// menu color
	$industrial_manufacturing_menu_color = get_theme_mod('industrial_manufacturing_menu_color');
	$industrial_manufacturing_custom_css .='.nav-menu a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a{';
			$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_menu_color).' !important;';
	$industrial_manufacturing_custom_css .='}';

	// menu hover color
	$industrial_manufacturing_menu_hover_color = get_theme_mod('industrial_manufacturing_menu_hover_color');
	$industrial_manufacturing_custom_css .='.nav-menu a:hover, .nav-menu ul li a:hover{';
			$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_menu_hover_color).' !important;';
	$industrial_manufacturing_custom_css .='}';

	// Submenu color
	$industrial_manufacturing_submenu_menu_color = get_theme_mod('industrial_manufacturing_submenu_menu_color');
	$industrial_manufacturing_custom_css .='.nav-menu ul.sub-menu a, .nav-menu ul.sub-menu li a,.nav-menu ul.children a, .nav-menu ul.children li a{';
			$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_submenu_menu_color).' !important;';
	$industrial_manufacturing_custom_css .='}';

	// submenu hover color
	$industrial_manufacturing_submenu_hover_color = get_theme_mod('industrial_manufacturing_submenu_hover_color');
	$industrial_manufacturing_custom_css .='.nav-menu ul.sub-menu a:hover, .nav-menu ul.sub-menu li a:hover.nav-menu ul.children a:hover, .nav-menu ul.children li a:hover{';
			$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_submenu_hover_color).' !important;';
	$industrial_manufacturing_custom_css .='}';


	// Breadcrumb color option
	$industrial_manufacturing_breadcrumb_color = get_theme_mod('industrial_manufacturing_breadcrumb_color');
	$industrial_manufacturing_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_breadcrumb_color).'!important;';
	$industrial_manufacturing_custom_css .='}';

	// Breadcrumb bg color option
	$industrial_manufacturing_breadcrumb_background_color = get_theme_mod('industrial_manufacturing_breadcrumb_background_color');
	$industrial_manufacturing_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_breadcrumb_background_color).'!important';
	$industrial_manufacturing_custom_css .='}';

	// Breadcrumb hover color option
	$industrial_manufacturing_breadcrumb_hover_color = get_theme_mod('industrial_manufacturing_breadcrumb_hover_color');
	$industrial_manufacturing_custom_css .='.bradcrumbs a:hover{';
		$industrial_manufacturing_custom_css .='color: '.esc_attr($industrial_manufacturing_breadcrumb_hover_color).'!important;';
	$industrial_manufacturing_custom_css .='}';

	// Breadcrumb hover bg color option
	$industrial_manufacturing_breadcrumb_hover_bg_color = get_theme_mod('industrial_manufacturing_breadcrumb_hover_bg_color');
	$industrial_manufacturing_custom_css .='.bradcrumbs a:hover{';
		$industrial_manufacturing_custom_css .='background-color: '.esc_attr($industrial_manufacturing_breadcrumb_hover_bg_color).'!important;';
	$industrial_manufacturing_custom_css .='}';

	// Single post image border radious
	$industrial_manufacturing_single_post_img_border_radius = get_theme_mod('industrial_manufacturing_single_post_img_border_radius', 0);
	$industrial_manufacturing_custom_css .='.feature-box img{';
		$industrial_manufacturing_custom_css .='border-radius: '.esc_attr($industrial_manufacturing_single_post_img_border_radius).'px;';
	$industrial_manufacturing_custom_css .='}';

	// Single post image box shadow
	$industrial_manufacturing_single_post_img_box_shadow = get_theme_mod('industrial_manufacturing_single_post_img_box_shadow',0);
	$industrial_manufacturing_custom_css .='.feature-box img{';
		$industrial_manufacturing_custom_css .='box-shadow: '.esc_attr($industrial_manufacturing_single_post_img_box_shadow).'px '.esc_attr($industrial_manufacturing_single_post_img_box_shadow).'px '.esc_attr($industrial_manufacturing_single_post_img_box_shadow).'px #ccc;';
	$industrial_manufacturing_custom_css .='}';

	
	// Button Font Size
	$industrial_manufacturing_button_font_size = get_theme_mod('industrial_manufacturing_button_font_size', '16');
	$industrial_manufacturing_custom_css .='.blogbtn a{';
		$industrial_manufacturing_custom_css .='font-size: '.esc_attr($industrial_manufacturing_button_font_size).'px;';
	$industrial_manufacturing_custom_css .='}';
