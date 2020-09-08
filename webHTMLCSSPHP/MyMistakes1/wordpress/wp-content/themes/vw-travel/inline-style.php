<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_travel_first_color = get_theme_mod('vw_travel_first_color');

	$custom_css = '';

	if($vw_travel_first_color != false){
		$custom_css .='.box ul.post-categories li, .search-box i, .more-btn a, span.carousel-control-prev-icon i:hover, #footer .custom-social-icons i:hover, span.carousel-control-next-icon i:hover, .more-btn a:hover, .scrollup i, .pagination span, .pagination a, #sidebar .custom-social-icons i:hover, #footer .custom-social-icons i:hover, .main-navigation a:hover, .toggle-nav i{';
			$custom_css .='background-color: '.esc_html($vw_travel_first_color).';';
		$custom_css .='}';
	}
	if($vw_travel_first_color != false){
		$custom_css .='.lower-header i, .logo h1 a, h6.phone-no, #footer h3{';
			$custom_css .='color: '.esc_html($vw_travel_first_color).';';
		$custom_css .='}';
	}
	if($vw_travel_first_color != false){
		$custom_css .='span.carousel-control-prev-icon i:hover, span.carousel-control-next-icon i:hover{';
			$custom_css .='border-color: '.esc_html($vw_travel_first_color).';';
		$custom_css .='}';
	}
	if($vw_travel_first_color != false){
		$custom_css .='.main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($vw_travel_first_color).';';
		$custom_css .='}';
	}
	if($vw_travel_first_color != false){
		$custom_css .='#footer h3:after, .header-fixed, .main-navigation ul ul{';
			$custom_css .='border-bottom-color: '.esc_html($vw_travel_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_travel_second_color = get_theme_mod('vw_travel_second_color');

	if($vw_travel_second_color != false){
		$custom_css .='#header, .more-btn a i.fas.fa-long-arrow-alt-right, input[type="submit"], #footer-2, #footer .custom-social-icons i, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebar h3, #comments input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .more-btn a:hover, .pagination .current, .pagination a:hover, #sidebar .tagcloud a:hover, #sidebar .custom-social-icons i, #footer .custom-social-icons i, #footer .tagcloud a:hover, .header-fixed, #comments a.comment-reply-link{';
			$custom_css .='background-color: '.esc_html($vw_travel_second_color).';';
		$custom_css .='}';
	}
	if($vw_travel_second_color != false){
		$custom_css .='.post-navigation a:hover .post-title, .post-navigation a:focus .post-title, a, .post-main-box:hover h3, #sidebar ul li a:hover, #footer li a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a{';
			$custom_css .='color: '.esc_html($vw_travel_second_color).';';
		$custom_css .='}';
	}
	if($vw_travel_second_color != false){
		$custom_css .='.home-page-header{';
			$custom_css .='border-bottom-color: '.esc_html($vw_travel_second_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_travel_width_option','Full Width');
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

	$theme_lay = get_theme_mod( 'vw_travel_slider_opacity_color','0.5');
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
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_travel_slider_content_option','Center');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel h2{';
			$custom_css .='text-align:left; left:10%; right:45%';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel h2{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel h2{';
			$custom_css .='text-align:right; left:45%; right:10%;';
		$custom_css .='}';
	}