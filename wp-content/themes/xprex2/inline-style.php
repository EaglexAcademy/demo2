<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_hair_salon_first_color = get_theme_mod('vw_hair_salon_first_color');

	$vw_hair_salon_custom_css = '';

	if($vw_hair_salon_first_color != false){
		$vw_hair_salon_custom_css .='.extra-top, .top-bar i, .search-box i, .slider .carousel-control-prev-icon, .slider .carousel-control-next-icon, .slider .carousel-control-prev-icon:hover, .slider .carousel-control-next-icon:hover, .more-btn a, .scrollup i, input[type="submit"], .footer-2, .sidebar input[type="submit"], nav.woocommerce-MyAccount-navigation ul li, .woocommerce .cart .button, .woocommerce .cart input.button:hover, .woocommerce a.button:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover button.single_add_to_cart_button.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .date-monthwrap, .hvr-sweep-to-right:before, .pagination span, .pagination a,.sidebar .tagcloud a:hover,.footer .tagcloud a:hover, .toggle-nav i, .sidebar .woocommerce-product-search button, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .footer a.custom_read_more, .sidebar a.custom_read_more:hover, .footer .custom-social-icons i:hover, .sidebar .custom-social-icons i:hover, .nav-previous a, .nav-next a, .woocommerce nav.woocommerce-pagination ul li a{';
			$vw_hair_salon_custom_css .='background-color: '.esc_html($vw_hair_salon_first_color).';';
		$vw_hair_salon_custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$vw_hair_salon_custom_css .='.socialbox i:hover, .sidebar ul li::before, span.onsale, #comments input[type="submit"].submit, .sidebar ul.cart_list li::before, .sidebar ul.product_list_widget li::before{';
			$vw_hair_salon_custom_css .='background-color: '.esc_html($vw_hair_salon_first_color).'!important;';
		$vw_hair_salon_custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$vw_hair_salon_custom_css .='a, .phone i, .need h2, .footer h3, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.sidebar th,.sidebar td,.sidebar td#prev a,.sidebar caption, .footer li a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .footer a.custom_read_more:hover, .footer .custom-social-icons i, .sidebar .custom-social-icons i{';
			$vw_hair_salon_custom_css .='color: '.esc_html($vw_hair_salon_first_color).';';
		$vw_hair_salon_custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$vw_hair_salon_custom_css .='.footer .search-form .search-field, .woocommerce a.button:hover, .woocommerce ul.products li.product .button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover button.single_add_to_cart_button.button.alt:hover, .post-main-box:hover, .toggle-nav i, .footer a.custom_read_more:hover, .footer .custom-social-icons i, .sidebar .custom-social-icons i, .footer .custom-social-icons i:hover, .sidebar .custom-social-icons i:hover{';
			$vw_hair_salon_custom_css .='border-color: '.esc_html($vw_hair_salon_first_color).';';
		$vw_hair_salon_custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$vw_hair_salon_custom_css .='.slider, .main-navigation ul ul{';
			$vw_hair_salon_custom_css .='border-top-color: '.esc_html($vw_hair_salon_first_color).';';
		$vw_hair_salon_custom_css .='}';
	}
	if($vw_hair_salon_first_color != false){
		$vw_hair_salon_custom_css .='.slider, .main-navigation ul ul{';
			$vw_hair_salon_custom_css .='border-bottom-color: '.esc_html($vw_hair_salon_first_color).';';
		$vw_hair_salon_custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_width_option','Full Width');
    if($vw_hair_salon_theme_lay == 'Boxed'){
		$vw_hair_salon_custom_css .='body{';
			$vw_hair_salon_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$vw_hair_salon_custom_css .='}';
	}else if($vw_hair_salon_theme_lay == 'Wide Width'){
		$vw_hair_salon_custom_css .='body{';
			$vw_hair_salon_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_hair_salon_custom_css .='}';
	}else if($vw_hair_salon_theme_lay == 'Full Width'){
		$vw_hair_salon_custom_css .='body{';
			$vw_hair_salon_custom_css .='max-width: 100%;';
		$vw_hair_salon_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_slider_opacity_color','0.5');
	if($vw_hair_salon_theme_lay == '0'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.1'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.1';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.2'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.2';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.3'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.3';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.4'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.4';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.5'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.5';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.6'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.6';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.7'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.7';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.8'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.8';
		$vw_hair_salon_custom_css .='}';
		}else if($vw_hair_salon_theme_lay == '0.9'){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='opacity:0.9';
		$vw_hair_salon_custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_slider_content_option','Left');
    if($vw_hair_salon_theme_lay == 'Left'){
		$vw_hair_salon_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_hair_salon_custom_css .='text-align:left; left:17%; right:45%;';
		$vw_hair_salon_custom_css .='}';
	}else if($vw_hair_salon_theme_lay == 'Center'){
		$vw_hair_salon_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$vw_hair_salon_custom_css .='text-align:center; left:20%; right:20%;';
		$vw_hair_salon_custom_css .='}';
	}else if($vw_hair_salon_theme_lay == 'Right'){
		$vw_hair_salon_custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1 {';
			$vw_hair_salon_custom_css .='text-align:right; left:45%; right:17%;';
		$vw_hair_salon_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$vw_hair_salon_slider_height = get_theme_mod('vw_hair_salon_slider_height');
	if($vw_hair_salon_slider_height != false){
		$vw_hair_salon_custom_css .='.slider img{';
			$vw_hair_salon_custom_css .='height: '.esc_html($vw_hair_salon_slider_height).';';
		$vw_hair_salon_custom_css .='}';
	}

	/*--------------------------- Slider -------------------*/

	$vw_hair_salon_slider = get_theme_mod('vw_hair_salon_slider_hide_show');
	if($vw_hair_salon_slider == false){
		$vw_hair_salon_custom_css .='.page-template-custom-home-page .home-page-header{';
			$vw_hair_salon_custom_css .='margin-bottom: 20px;';
		$vw_hair_salon_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_hair_salon_theme_lay = get_theme_mod( 'vw_hair_salon_blog_layout_option','Default');
    if($vw_hair_salon_theme_lay == 'Default'){
		$vw_hair_salon_custom_css .='.service-box{';
			$vw_hair_salon_custom_css .='';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.post-main-box h2{';
			$vw_hair_salon_custom_css .='padding:0;';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.new-text p{';
			$vw_hair_salon_custom_css .='margin-top:10px;';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.blogbutton-small{';
			$vw_hair_salon_custom_css .='margin: 0; display: inline-block;';
		$vw_hair_salon_custom_css .='}';
	}else if($vw_hair_salon_theme_lay == 'Center'){
		$vw_hair_salon_custom_css .='.service-box, .post-main-box h2, .new-text p, .metabox, .content-bttn, .post-main-box h3{';
			$vw_hair_salon_custom_css .='text-align:center;';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.service-box{';
			$vw_hair_salon_custom_css .='border: 1px dashed #ccc; padding: 15px; margin-bottom: 5%;';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.new-text p{';
			$vw_hair_salon_custom_css .='margin-top:10px;';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.metabox{';
			$vw_hair_salon_custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.blogbutton-small{';
			$vw_hair_salon_custom_css .='margin: 0; display: inline-block;';
		$vw_hair_salon_custom_css .='}';
	}else if($vw_hair_salon_theme_lay == 'Left'){
		$vw_hair_salon_custom_css .='.service-box, .post-main-box h2, .new-text p, .content-bttn{';
			$vw_hair_salon_custom_css .='text-align:Left;';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.service-box{';
			$vw_hair_salon_custom_css .='border: 1px dashed #ccc; padding: 15px; margin-bottom: 5%;';
		$vw_hair_salon_custom_css .='}';
		$vw_hair_salon_custom_css .='.metabox{';
			$vw_hair_salon_custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$vw_hair_salon_custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$vw_hair_salon_resp_topbar = get_theme_mod( 'vw_hair_salon_resp_topbar_hide_show',false);
    if($vw_hair_salon_resp_topbar == true){
    	$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.extra-top{';
			$vw_hair_salon_custom_css .='display:block;';
		$vw_hair_salon_custom_css .='} }';
	}else if($vw_hair_salon_resp_topbar == false){
		$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.extra-top{';
			$vw_hair_salon_custom_css .='display:none;';
		$vw_hair_salon_custom_css .='} }';
	}

	$vw_hair_salon_resp_stickyheader = get_theme_mod( 'vw_hair_salon_stickyheader_hide_show',false);
    if($vw_hair_salon_resp_stickyheader == true){
    	$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.header-fixed{';
			$vw_hair_salon_custom_css .='display:block;';
		$vw_hair_salon_custom_css .='} }';
	}else if($vw_hair_salon_resp_stickyheader == false){
		$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.header-fixed{';
			$vw_hair_salon_custom_css .='display:none;';
		$vw_hair_salon_custom_css .='} }';
	}

	$vw_hair_salon_resp_slider = get_theme_mod( 'vw_hair_salon_resp_slider_hide_show',false);
    if($vw_hair_salon_resp_slider == true){
    	$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.slider{';
			$vw_hair_salon_custom_css .='display:block;';
		$vw_hair_salon_custom_css .='} }';
	}else if($vw_hair_salon_resp_slider == false){
		$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.slider{';
			$vw_hair_salon_custom_css .='display:none;';
		$vw_hair_salon_custom_css .='} }';
	}

	$vw_hair_salon_resp_metabox = get_theme_mod( 'vw_hair_salon_metabox_hide_show',true);
    if($vw_hair_salon_resp_metabox == true){
    	$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.datebox, .metabox{';
			$vw_hair_salon_custom_css .='display:block;';
		$vw_hair_salon_custom_css .='} }';
	}else if($vw_hair_salon_resp_metabox == false){
		$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.datebox, .metabox{';
			$vw_hair_salon_custom_css .='display:none;';
		$vw_hair_salon_custom_css .='} }';
	}

	$vw_hair_salon_resp_sidebar = get_theme_mod( 'vw_hair_salon_sidebar_hide_show',true);
    if($vw_hair_salon_resp_sidebar == true){
    	$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.sidebar{';
			$vw_hair_salon_custom_css .='display:block;';
		$vw_hair_salon_custom_css .='} }';
	}else if($vw_hair_salon_resp_sidebar == false){
		$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.sidebar{';
			$vw_hair_salon_custom_css .='display:none;';
		$vw_hair_salon_custom_css .='} }';
	}

	$vw_hair_salon_resp_scroll_top = get_theme_mod( 'vw_hair_salon_resp_scroll_top_hide_show',true);
    if($vw_hair_salon_resp_scroll_top == true){
    	$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.scrollup i{';
			$vw_hair_salon_custom_css .='display:block;';
		$vw_hair_salon_custom_css .='} }';
	}else if($vw_hair_salon_resp_scroll_top == false){
		$vw_hair_salon_custom_css .='@media screen and (max-width:575px) {';
		$vw_hair_salon_custom_css .='.scrollup i{';
			$vw_hair_salon_custom_css .='display:none !important;';
		$vw_hair_salon_custom_css .='} }';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_hair_salon_topbar_padding_top_bottom = get_theme_mod('vw_hair_salon_topbar_padding_top_bottom');
	if($vw_hair_salon_topbar_padding_top_bottom != false){
		$vw_hair_salon_custom_css .='.extra-top{';
			$vw_hair_salon_custom_css .='padding-top: '.esc_html($vw_hair_salon_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_hair_salon_topbar_padding_top_bottom).';';
		$vw_hair_salon_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$vw_hair_salon_sticky_header_padding = get_theme_mod('vw_hair_salon_sticky_header_padding');
	if($vw_hair_salon_sticky_header_padding != false){
		$vw_hair_salon_custom_css .='.header-fixed{';
			$vw_hair_salon_custom_css .='padding: '.esc_html($vw_hair_salon_sticky_header_padding).';';
		$vw_hair_salon_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_hair_salon_search_padding_top_bottom = get_theme_mod('vw_hair_salon_search_padding_top_bottom');
	$vw_hair_salon_search_padding_left_right = get_theme_mod('vw_hair_salon_search_padding_left_right');
	$vw_hair_salon_search_font_size = get_theme_mod('vw_hair_salon_search_font_size');
	$vw_hair_salon_search_border_radius = get_theme_mod('vw_hair_salon_search_border_radius');
	if($vw_hair_salon_search_padding_top_bottom != false || $vw_hair_salon_search_padding_left_right != false || $vw_hair_salon_search_font_size != false || $vw_hair_salon_search_border_radius != false){
		$vw_hair_salon_custom_css .='.search-box i{';
			$vw_hair_salon_custom_css .='padding-top: '.esc_html($vw_hair_salon_search_padding_top_bottom).'; padding-bottom: '.esc_html($vw_hair_salon_search_padding_top_bottom).';padding-left: '.esc_html($vw_hair_salon_search_padding_left_right).';padding-right: '.esc_html($vw_hair_salon_search_padding_left_right).';font-size: '.esc_html($vw_hair_salon_search_font_size).';border-radius: '.esc_html($vw_hair_salon_search_border_radius).'px;';
		$vw_hair_salon_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_hair_salon_button_padding_top_bottom = get_theme_mod('vw_hair_salon_button_padding_top_bottom');
	$vw_hair_salon_button_padding_left_right = get_theme_mod('vw_hair_salon_button_padding_left_right');
	if($vw_hair_salon_button_padding_top_bottom != false || $vw_hair_salon_button_padding_left_right != false){
		$vw_hair_salon_custom_css .='.blogbutton-small{';
			$vw_hair_salon_custom_css .='padding-top: '.esc_html($vw_hair_salon_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_hair_salon_button_padding_top_bottom).';padding-left: '.esc_html($vw_hair_salon_button_padding_left_right).';padding-right: '.esc_html($vw_hair_salon_button_padding_left_right).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_button_border_radius = get_theme_mod('vw_hair_salon_button_border_radius');
	if($vw_hair_salon_button_border_radius != false){
		$vw_hair_salon_custom_css .='.blogbutton-small, .hvr-sweep-to-right:before{';
			$vw_hair_salon_custom_css .='border-radius: '.esc_html($vw_hair_salon_button_border_radius).'px;';
		$vw_hair_salon_custom_css .='}';
	}

	/*------------- Single Blog Page------------------*/

	$vw_hair_salon_single_blog_post_navigation_show_hide = get_theme_mod('vw_hair_salon_single_blog_post_navigation_show_hide',true);
	if($vw_hair_salon_single_blog_post_navigation_show_hide != true){
		$vw_hair_salon_custom_css .='.post-navigation{';
			$vw_hair_salon_custom_css .='display: none;';
		$vw_hair_salon_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_hair_salon_copyright_alingment = get_theme_mod('vw_hair_salon_copyright_alingment');
	if($vw_hair_salon_copyright_alingment != false){
		$vw_hair_salon_custom_css .='.copyright p{';
			$vw_hair_salon_custom_css .='text-align: '.esc_html($vw_hair_salon_copyright_alingment).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_copyright_padding_top_bottom = get_theme_mod('vw_hair_salon_copyright_padding_top_bottom');
	if($vw_hair_salon_copyright_padding_top_bottom != false){
		$vw_hair_salon_custom_css .='.footer-2{';
			$vw_hair_salon_custom_css .='padding-top: '.esc_html($vw_hair_salon_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_hair_salon_copyright_padding_top_bottom).';';
		$vw_hair_salon_custom_css .='}';
	}

	/*----------------Sroll to top Settings ------------------*/

	$vw_hair_salon_scroll_to_top_font_size = get_theme_mod('vw_hair_salon_scroll_to_top_font_size');
	if($vw_hair_salon_scroll_to_top_font_size != false){
		$vw_hair_salon_custom_css .='.scrollup i{';
			$vw_hair_salon_custom_css .='font-size: '.esc_html($vw_hair_salon_scroll_to_top_font_size).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_scroll_to_top_padding = get_theme_mod('vw_hair_salon_scroll_to_top_padding');
	$vw_hair_salon_scroll_to_top_padding = get_theme_mod('vw_hair_salon_scroll_to_top_padding');
	if($vw_hair_salon_scroll_to_top_padding != false){
		$vw_hair_salon_custom_css .='.scrollup i{';
			$vw_hair_salon_custom_css .='padding-top: '.esc_html($vw_hair_salon_scroll_to_top_padding).';padding-bottom: '.esc_html($vw_hair_salon_scroll_to_top_padding).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_scroll_to_top_width = get_theme_mod('vw_hair_salon_scroll_to_top_width');
	if($vw_hair_salon_scroll_to_top_width != false){
		$vw_hair_salon_custom_css .='.scrollup i{';
			$vw_hair_salon_custom_css .='width: '.esc_html($vw_hair_salon_scroll_to_top_width).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_scroll_to_top_height = get_theme_mod('vw_hair_salon_scroll_to_top_height');
	if($vw_hair_salon_scroll_to_top_height != false){
		$vw_hair_salon_custom_css .='.scrollup i{';
			$vw_hair_salon_custom_css .='height: '.esc_html($vw_hair_salon_scroll_to_top_height).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_scroll_to_top_border_radius = get_theme_mod('vw_hair_salon_scroll_to_top_border_radius');
	if($vw_hair_salon_scroll_to_top_border_radius != false){
		$vw_hair_salon_custom_css .='.scrollup i{';
			$vw_hair_salon_custom_css .='border-radius: '.esc_html($vw_hair_salon_scroll_to_top_border_radius).'px;';
		$vw_hair_salon_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_hair_salon_social_icon_font_size = get_theme_mod('vw_hair_salon_social_icon_font_size');
	if($vw_hair_salon_social_icon_font_size != false){
		$vw_hair_salon_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_hair_salon_custom_css .='font-size: '.esc_html($vw_hair_salon_social_icon_font_size).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_social_icon_padding = get_theme_mod('vw_hair_salon_social_icon_padding');
	if($vw_hair_salon_social_icon_padding != false){
		$vw_hair_salon_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_hair_salon_custom_css .='padding: '.esc_html($vw_hair_salon_social_icon_padding).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_social_icon_width = get_theme_mod('vw_hair_salon_social_icon_width');
	if($vw_hair_salon_social_icon_width != false){
		$vw_hair_salon_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_hair_salon_custom_css .='width: '.esc_html($vw_hair_salon_social_icon_width).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_social_icon_height = get_theme_mod('vw_hair_salon_social_icon_height');
	if($vw_hair_salon_social_icon_height != false){
		$vw_hair_salon_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_hair_salon_custom_css .='height: '.esc_html($vw_hair_salon_social_icon_height).';';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_social_icon_border_radius = get_theme_mod('vw_hair_salon_social_icon_border_radius');
	if($vw_hair_salon_social_icon_border_radius != false){
		$vw_hair_salon_custom_css .='.sidebar .custom-social-icons i, .footer .custom-social-icons i{';
			$vw_hair_salon_custom_css .='border-radius: '.esc_html($vw_hair_salon_social_icon_border_radius).'px;';
		$vw_hair_salon_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_hair_salon_products_padding_top_bottom = get_theme_mod('vw_hair_salon_products_padding_top_bottom');
	if($vw_hair_salon_products_padding_top_bottom != false){
		$vw_hair_salon_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_hair_salon_custom_css .='padding-top: '.esc_html($vw_hair_salon_products_padding_top_bottom).'!important; padding-bottom: '.esc_html($vw_hair_salon_products_padding_top_bottom).'!important;';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_products_padding_left_right = get_theme_mod('vw_hair_salon_products_padding_left_right');
	if($vw_hair_salon_products_padding_left_right != false){
		$vw_hair_salon_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_hair_salon_custom_css .='padding-left: '.esc_html($vw_hair_salon_products_padding_left_right).'!important; padding-right: '.esc_html($vw_hair_salon_products_padding_left_right).'!important;';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_products_box_shadow = get_theme_mod('vw_hair_salon_products_box_shadow');
	if($vw_hair_salon_products_box_shadow != false){
		$vw_hair_salon_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_hair_salon_custom_css .='box-shadow: '.esc_html($vw_hair_salon_products_box_shadow).'px '.esc_html($vw_hair_salon_products_box_shadow).'px '.esc_html($vw_hair_salon_products_box_shadow).'px #ddd;';
		$vw_hair_salon_custom_css .='}';
	}

	$vw_hair_salon_products_border_radius = get_theme_mod('vw_hair_salon_products_border_radius');
	if($vw_hair_salon_products_border_radius != false){
		$vw_hair_salon_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_hair_salon_custom_css .='border-radius: '.esc_html($vw_hair_salon_products_border_radius).'px;';
		$vw_hair_salon_custom_css .='}';
	}

