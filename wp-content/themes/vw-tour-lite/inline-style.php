<?php

	$vw_tour_lite_hi_first_color = get_theme_mod('vw_tour_lite_hi_first_color');

	$custom_css ='';
	/*------------------------------ Global First Color -----------*/

	if($vw_tour_lite_hi_first_color != false){
		$custom_css .='#header, .footersec, .sidebar h3,.service-text .read-more, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce span.onsale,.woocommerce button.button.alt, .woocommerce a.button.alt, .woocommerce input.button.alt,.sidebar .custom-social-icons i, input[type="submit"],.woocommerce .cart .button, .woocommerce .cart input.button,.copyright-wrapper,#slider .more-btn a:hover,nav.woocommerce-MyAccount-navigation li ,#comments input[type="submit"].submit,.sidebar input[type="submit"],.sidebar .tagcloud a:hover, #header main-navigation ul.sub-menu li a, .pagination .current, .pagination a:hover, .footersec .woocommerce-product-search button, .sidebar .widget_price_filter .price_slider_wrapper .ui-widget-content, .sidebar .woocommerce-product-search button{';
				$custom_css .='background-color: '.esc_html($vw_tour_lite_hi_first_color).';';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_first_color != false){
		$custom_css .='header.entry-header,.sidebar aside, .sidebar .custom-social-icons, .services-box,.sidebar input[type="search"],.service-text .read-more,.woocommerce-message,.footersec .custom-social-icons i:hover,.woocommerce select.orderby,li.product, #comments input[type="submit"].submit, .sidebar .woocommerce.widget_shopping_cart .buttons a, .woocommerce .widget_price_filter .price_slider_amount .button, .sidebar .woocommerce-product-search button:hover, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button{';
				$custom_css .='border-color: '.esc_html($vw_tour_lite_hi_first_color).';';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_first_color != false){
		$custom_css .='.services-box h3,.metabox .entry-date, .metabox .entry-author a, .metabox .entry-comments,.woocommerce-message::before, .woocommerce button.button.alt:hover, .woocommerce a.button.alt:hover, .woocommerce input.button.alt:hover,.footersec .custom-social-icons i:hover,h1.woocommerce-products-header__title,p.woocommerce-result-count,.woocommerce select.orderby,h2.woocommerce-loop-product__title,.woocommerce div.product .product_title, .service-text a.read-more:hover, .sidebar .custom-social-icons i:hover, .post-info .entry-date, .post-info .entry-author a, .post-info .entry-comments, .post-info .entry-date a, .post-info .entry-author i, .service-text a, .sidebar .woocommerce-product-search button:hover{';
				$custom_css .='color: '.esc_html($vw_tour_lite_hi_first_color).';';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_first_color != false){
		$custom_css .='.sidebar .woocommerce.widget_shopping_cart .buttons a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce button.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce a.button.alt:hover, .woocommerce input.button.alt:hover{';
				$custom_css .='color: '.esc_html($vw_tour_lite_hi_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_first_color != false){
		$custom_css .='li.product{
		box-shadow: 4px 4px 10px '.esc_html($vw_tour_lite_hi_first_color).';
		}';
	}

	/*------------------------------ Global Second Color -----------------*/ 

	$vw_tour_lite_hi_second_color = get_theme_mod('vw_tour_lite_hi_second_color');

	if($vw_tour_lite_hi_second_color != false){
		$custom_css .='#header main-navigation ul.sub-menu li a:hover,#slider .more-btn a,input[type="submit"]:hover,.footersec .tagcloud a:hover,.scrollup i, #comments a.comment-reply-link, .sidebar .widget_calendar tbody a, .toggle-nav i, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .footersec .woocommerce.widget_shopping_cart .buttons a:hover, .footersec .woocommerce-product-search button:hover, .footersec .widget_price_filter .ui-slider .ui-slider-range, .footersec .widget_price_filter .ui-slider .ui-slider-handle, .footersec .widget_price_filter .price_slider_amount .button:hover {';
				$custom_css .='background-color: '.esc_html($vw_tour_lite_hi_second_color).';';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_second_color != false){
		$custom_css .='#header main-navigation ul li a:hover{';
				$custom_css .='border-color: '.esc_html($vw_tour_lite_hi_second_color).';';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_second_color != false){
		$custom_css .='a, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, span.posted_in a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, #header .custom-social-icons a, #header .custom-social-icons i:hover, .woocommerce p.stars a{';
				$custom_css .='color: '.esc_html($vw_tour_lite_hi_second_color).';';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_second_color != false){
		$custom_css .='.post-navigation a:hover, .entry-content a, .sidebar p a, #comments p a, .comment-meta.commentmetadata a , span.posted_in a{';
				$custom_css .='color: '.esc_html($vw_tour_lite_hi_second_color).'!important;';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_second_color != false){
		$custom_css .='.main-navigation ul ul{';
				$custom_css .='border-top-color: '.esc_html($vw_tour_lite_hi_second_color).';';
		$custom_css .='}';
	}
	if($vw_tour_lite_hi_second_color != false){
		$custom_css .='.main-navigation ul ul{';
				$custom_css .='border-bottom-color: '.esc_html($vw_tour_lite_hi_second_color).';';
		$custom_css .='}';
	}
	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_tour_lite_width_option','Full Width');
        if($theme_lay == 'Boxed'){
			$custom_css .='body{';
				$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
			$custom_css .='}';
		}else if($theme_lay == 'Wide Width'){
			$custom_css .='body{';
				$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
			$custom_css .='}';
		}else if($theme_lay == 'Full Width'){
			$custom_css .='body{';
				$custom_css .='max-width: 100%;';
			$custom_css .='}';
		}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_tour_lite_slider_opacity_color','0.5');
        if($theme_lay == '0'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0';
			$custom_css .='}';
		}else if($theme_lay == '0.1'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.1';
			$custom_css .='}';
		}else if($theme_lay == '0.2'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.2';
			$custom_css .='}';
		}else if($theme_lay == '0.3'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.3';
			$custom_css .='}';
		}else if($theme_lay == '0.4'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.4';
			$custom_css .='}';
		}else if($theme_lay == '0.5'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.5';
			$custom_css .='}';
		}else if($theme_lay == '0.6'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.6';
			$custom_css .='}';
		}else if($theme_lay == '0.7'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.7';
			$custom_css .='}';
		}else if($theme_lay == '0.8'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.8';
			$custom_css .='}';
		}else if($theme_lay == '0.9'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:0.9';
			$custom_css .='}';
		}else if($theme_lay == '1'){
			$custom_css .='#slider img{';
				$custom_css .='opacity:1';
			$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_tour_lite_slider_content_option','Center');
	   if($theme_lay == 'Left'){
	$custom_css .='#slider .carousel-caption, #slider .inner_carousel h1{';
	$custom_css .='text-align:left; left:12%; right:45%';
	$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel h1{';
		$custom_css .='text-align:center; left:25%; right:25%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel h1{';
		$custom_css .='text-align:right; left:45%; right:12%;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_tour_lite_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.services-box{';
			$custom_css .='';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.services-box, .services-box h2, .services-box p{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top: 10px;';
		$custom_css .='}';
		$custom_css .='.sticky .services-box h2{';
			$custom_css .='display: unset;';
		$custom_css .='}';
		$custom_css .='.service-text .read-more{';
			$custom_css .='display: inline-block;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.services-box, .services-box h2, .services-box p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top: 10px;';
		$custom_css .='}';
	}
