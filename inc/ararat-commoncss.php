<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : ARARAT
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function ararat_common_custom_css(){
    
    wp_enqueue_style( 'ararat-common', get_template_directory_uri().'/assets/css/common.css' );

		$whiteColor     		  	= '#ffffff';
		$themeColor     		  	= ararat_opt( 'ararat_theme_color' ) != '#131313' ? ararat_opt( 'ararat_theme_color' ) : '';
		$themeSecColor     		  	= '';
		$bookBtnColor       		= ararat_opt( 'ararat_book_btn_color' ) != '#131313' ? ararat_opt('ararat_book_btn_color') : '';
		$bookBtnHoverBgColor     	= ararat_opt( 'ararat_book_btn_hvr_bg_color' ) != '#131313' ? ararat_opt('ararat_book_btn_hvr_bg_color') : $themeColor;
		$hoverColor     	  	  = ararat_opt( 'ararat_quote_btn_hvr_text_color');

		$headerTop_bg     		  = '';
		$navbarBgColor     		  = ararat_opt( 'ararat_navbar_bg_color' ) != '#082b49' ? ararat_opt( 'ararat_navbar_bg_color') : '';
		$headerTop_col     		  = ararat_opt( 'ararat_top_header_color' );

		$headerTopBg      		  = ararat_opt( 'ararat_top_header_bg_color');
		$headerBg          		  = ararat_opt( 'ararat_header_bg_color') != '#ffffff' ? ararat_opt( 'ararat_header_bg_color') : '';
		$menuColor          	  = ararat_opt( 'ararat_header_menu_color' ) != '#131313' ? ararat_opt('ararat_header_menu_color') : '';
		$menuHoverColor           = ararat_opt( 'ararat_header_menu_hover_color' ) != '#808080' ? ararat_opt('ararat_header_menu_hover_color') : $themeColor;
		$menuFixedHoverColor      = ararat_opt( 'ararat_header_menu_fixed_hover_color' );
		$dropMenuBgColor          = ararat_opt( 'ararat_header_drop_menu_bg_color' ) != '#ffffff' ? ararat_opt('ararat_header_drop_menu_bg_color') : $themeColor;
		$dropMenuColor            = ararat_opt( 'ararat_dropdown_menu_color' ) != '#131313' ? ararat_opt('ararat_dropdown_menu_color') : '';
		$dropMenuHovColor         = ararat_opt( 'ararat_dropdown_menu_hover_color' ) != '#808080' ? ararat_opt('ararat_dropdown_menu_hover_color') : $themeColor;

		$footerwbgColor     	  = ararat_opt( 'ararat_footer_widget_bg_color' );
		$footerwHeadColor   	  = ararat_opt('ararat_footer_widget_heading_color');
		$footerwTextColor   	  = ararat_opt('ararat_footer_widget_text_color');
		$footerwanchorcolor 	  = ararat_opt('ararat_footer_widget_anchor_color') != '#ffffff' ? ararat_opt('ararat_footer_widget_anchor_color') : '';
		$footerwanchorhovcolor    = ararat_opt('ararat_footer_widget_anchor_hover_color') != '#ffffff' ? ararat_opt('ararat_footer_widget_anchor_hover_color') : '';
		
		$fofbg					  = ararat_opt('ararat_fof_bg_color');
		$foftonecolor			  = ararat_opt('ararat_fof_textone_color');
		$fofttwocolor			  = ararat_opt('ararat_fof_texttwo_color');

		$bannerBtnHeaderSpanColor = $themeColor != '#ff5e13' ? $themeColor : '';
		$footerAncDefColor 		  = ararat_opt('ararat_footer_widget_anchor_color') != '#9e9e9e' ? ararat_opt('ararat_footer_widget_anchor_color') : '';
		$footerAncDefHovColor 	  = $footerwanchorhovcolor != '#bababa' ? $footerwanchorhovcolor : $themeColor;

		$customcss ="			
			.sub_menu
			{
				background-color: {$headerTopBg};
			}
			.hero-banner, .banner_part .banner_text .btn_1, .abopt_number_counter .btn_1
			{
				background-color: {$themeColor};
			}
			.main_menu
			{
				background-color: {$navbarBgColor};
			}
			
			.sub_menu .sub_menu_right_content span, .sub_menu .sub_menu_social_icon a:hover, .sub_menu .sub_menu_social_icon span i, .top_place .single_place .hover_Text .place_review a, .event_part .event_slider_content h5, .event_part .owl-nav button i, .about_us .about_text h5, .main_menu .social_icon i:hover, .about_part .about_text h4, .about_part h4, .portfolio_part .btn_2, .service_part .single_service_part .single_service_text .learn_btn, .review_part .section_tittle p, .footer_Part .footer_text span, .philosophy_part .philophy_text h5, .banner_part .banner_text h5
			{
				color: {$themeSecColor};
			}
			
			.dropdown .dropdown-menu, .dropdown .dropdown-menu .dropdown-item
			{
				background-color: {$dropMenuBgColor};
			}

			.banner_part .banner_text h1 span
			{
				color: {$bannerBtnHeaderSpanColor} !important;
			}

			.cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .review_part .slick_right:hover, .review_part .slick_left:hover, .blog_part .single-home-blog .time, .blog_part .single-home-blog li span, .single_single_service span.fa, section.cta_area a.cta_btn:hover, .sub_menu .sub_menu_right_content i, .banner-breadcrumb .breadcrumb-item a, .banner_part .banner_text h5 span, .service_part .single_service_part i, .our_industries .single_industries h3 a:hover, .portfolio_part .card-columns .portfolio_btn, .see_more_project .btn_1:hover, .post_2 .post_text_1 h3:hover, .post_2 .category_post_img .category_btn, .subscribe_area .subscribe_iner .btn_2:hover, .sl-button span:hover, .blog_right_sidebar .widget_ararat_recent_widget .post_item .media-body h3:hover, .project_details .project_details_widget .single_project_details_widget span, .blog_right_sidebar .widget_ararat_newsletter .btn_1, .gallery_part .single_gallery_item .single_gallery_item_iner .gallery_item_text p, .banner_part .banner_text h1 span, .catagory_post .single_catagory_post:hover h3, nav.navigation.pagination .next span:hover, .single-post-area .navigation-area h4:hover, .about_part .about_part_text ul li span, .our_service .single_service span, .our_service .btn_3:hover, .experiance_part .about_text_iner .about_text_counter h2, .our_project .project_menu_item ul li:hover, .our_project .project_menu_item .active, .our_project .single_our_project .single_offer .hover_text p, .member_counter .single_member_counter span, .review_part .owl-nav button span:hover, .about_part .about_part_text h5, .our_project .section_tittle p, .our_project .more_btn_iner, .footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover, .sub_menu .sub_menu_right_content a, .sub_menu .sub_menu_social_icon a, .sub_menu .sub_menu_social_icon span, .event_part .event_slider_content h2, .event_part .event_slider_content p span, .hotel_list .single_ihotel_list .hotel_text_iner h3 a, .best_services .single_ihotel_list h3 a, .about_us .about_text h2, .breadcrumb-item, .breadcrumb-item.active, li.breadcrumb-item a, .service_part .single_service_part .single_service_text span, .service_part .single_service_part .single_service_text h2, .blog_right_sidebar .widget_ararat_blog_widget .post_item .media-body h3:hover, .philosophy_part .philophy_text h2, .project_details ul li a, .slider-area .single-slider .slider-content p, .section-title span, .service-area .single-service a:hover, .project-active.owl-carousel:hover .owl-nav div:hover, .project-area .project-active .single-project .project-info span, .underline-hover, .underline-hover:hover, .about-area .about-thumb a.video-icon i, .team-area .single-team .team-thumb .team-hover .team-link ul li a:hover, .main-project-area .single-project .project-info span, li.breadcrumb-item.active a, li.breadcrumb-item a, .details-banner-area .details-banner-text a, .hero-banner p.ararat_project_date, .service-details .details-nav ul li a.active.show, .section_title span, .line-button:hover, .offers_area .single_offers a, .video_area .video_area_inner a, .features_room .rooms_here .single_rooms .room_thumb .room_heading a:hover, .forQuery .Query_border .phone_num a:hover, .voulantier_part .social_icon a:hover, .service_area .single_service .service_icon i, .order_area .single_order .order_thumb .order_prise, .order_area .single_order .order_thumb .order_prise span::before, .popular_cource .single_popular_cource h3 span, .footer-area .input-group i, .team_area .single_team .thumb .author_links ul li a:hover {
				color: {$themeColor};
			}			
			.portfolio_part .card-columns .portfolio_btn path{
				fill: {$themeColor};
			}
			.blog_area a:hover h3, .blog_area a:hover p, .blog_area a:hover, .blog_area a:hover h2, .blog_details a:hover, .nav-links .page-numbers:not(.current):hover {
				-webkit-text-fill-color: {$themeColor};
				-moz-text-fill-color: {$themeColor};
				-o-text-fill-color: {$themeColor};
				text-fill-color: {$themeColor};
			}
			.blog_item_img .blog_item_date:hover h3, .blog_item_img .blog_item_date:hover p {
				-webkit-text-fill-color: {$whiteColor};
				-moz-text-fill-color: {$whiteColor};
				-o-text-fill-color: {$whiteColor};
				text-fill-color: {$whiteColor};
			}
			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .post_2 .category_post_img .category_btn:hover, .gallery_part .portfolio-filter .active, .our_service .single_offer_text .btn_1:hover, li.breadcrumb-item a:hover, .form-contact .form-group .btn_1, .voulantier_part .social_icon a:hover, .gallery_area .load_more_button .load_more_btn:hover {
				color: {$themeColor}!important;
			}

			.review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .single_sidebar_widget .tagcloud a:hover, .pre_icon :after, .next_icon :after, section.cta_area, .service_part .single_service_part .line:after, .about_part .about_text .btn_2:hover, .section_tittle h2:after, .our_industries .single_industries h3:after, .faq_part .faq_content .active .accordion-header h2:before, .portfolio_part .card-columns .blockquote h2:after, .see_more_project .btn_1, .contact-section .btn_2:hover, .banner_part .banner_text .btn_1:hover:before, .banner_part .banner_text .btn_1:hover:after, .about_us .about_us_text .btn_2:hover, .our_service .single_offer_text .btn_1:hover:before, .our_service .single_offer_text .btn_1:hover:after, .main_menu nav .btn_1, .our_service .btn_3:hover:after, .blog_part .single-home-blog .card .card-body a:hover:after, .about_part .about_part_text .btn_1, .our_project .more_btn_iner:hover, .cta_part .btn_1, .booking_part .form-row .btn_1:hover, .top_place .single_place:after, .top_place .btn_1:hover, .event_part .btn_1:hover, .intro_video_bg .video-play-button:before, .intro_video_bg .video-play-button:after, .slider-area .slider-content .boxed-btn2, .about-area .section-title .boxed-btn, .about-area .about-review .project-review, .cta-area .cta-content, .blog_right_sidebar .single_sidebar_widget.widget_ararat_newsletter .btn, .search-page .backtohome .btn_1, .service-details .details-nav ul li a.active.show::before, .line-button:hover::before, .owl-carousel .owl-nav div.owl-next:hover, .owl-carousel .owl-nav div.owl-prev:hover, .offers_area .single_offers a:hover, .forQuery .Query_border .phone_num a, .form-contact .form-group .btn_1:hover, .contact-section .button-contactForm:hover, .sub_header .sub_header_social_icon a i, .about_part .about_text .btn_1, .blog_right_sidebar .single_sidebar_widget .btn_1, .blog_right_sidebar .single_sidebar_widget .btn_1:hover, .service_area .single_service:hover, .video_area .video_text .icon_video a, .order_area .single_order .order_info .boxed_btn:hover, .testmonial_area .testmonial_active .owl-dots .owl-dot.active, .single_about_area .single_about_text .boxed_btn:hover, .gallery_area .load_more_button .load_more_btn, .comment-form .form-group .boxed-btn:hover, .shedule_part table thead, .become_member .btn_1, .cource_details .btn_1, .single_sidebar_widget.widget_search .boxed-btn:hover, .f0f-content .btn_1, .project_details .project_share .project-sharer li a:hover
			{
				background: {$themeColor}
			}

			.about_part .about_part_text .btn_1:hover, .our_service .single_service:hover, .creative .creative_part_text a i, .cta_part:after, .cta_part .btn_1:hover, .top_place .single_place .hover_Text .place_btn, .top_place .btn_1, .event_part .btn_1, .about_part .about_text .btn_3:hover, .footer_Part .footer_btn .btn_1, .blog_right_sidebar .single_sidebar_widget.widget_ararat_newsletter .btn, .form-contact .form-group .btn_1, .about_part .about_text .btn_1:hover, .abopt_number_counter .btn_1:hover, .client_review .owl-dots .owl-dot.active, .footer_area .subscribe_part_text .subscribe_form .btn_1
			{
				background: {$themeSecColor};
			}

			.banner_part .banner_text .btn_1:hover
			{
				background: {$themeSecColor}!important;
			}

			.portfolio_part .btn_2, .blog_area a h2:hover
			{
				border-color: {$themeSecColor};
			}

			.blog_area a h2:hover
			{
				color: {$themeSecColor} !important;
			}

			.btn_4, .our_Professional .single_industries_text:hover, .pricing_part .single_pricing_part .pricing_content .btn_2:hover, .comment-form .comment-respond .btn_2:hover, .popular_cource .single_popular_cource .btn_2:hover, .gallery_part .btn_2:hover, .about_area .about_info a:hover{
				border-color: {$themeColor};
				background-color: {$themeColor};
			}
			.btn_4:hover, .about-area .section-title .boxed-btn:hover, .about_area .about_info a, .lastest_project .section_title .boxed-btn, .messege_area .messege .boxed-btn, .single_sidebar_widget.widget_search .boxed-btn, .comment-form .form-group .boxed-btn, .contact-section .button-contactForm {
				color: {$themeColor}!important;
			}
			.about_us .about_us_text .btn_2:hover, .blog_right_sidebar .widget_search .btn_2, .about-area .section-title .boxed-btn:hover, .form-contact .form-group .btn_1:hover {
				border-color: {$themeColor}!important;
			}
			.about-area .section-title .boxed-btn:hover, .blog_item_img .blog_item_date:hover {
				background: transparent;
			}

			.service_part .single_service_part:hover .single_service_part_iner span, .footer_Part .footer_btn .btn_1:hover, .blog_item_img .blog_item_date, .client_review .owl-dots .owl-dot.active
			{
				background: {$themeColor}!important;
			}

			.btn_2:hover,
			.copyright_part .footer-social a:hover
			{
				background: {$hoverColor}!important;
			}

			.blog_part .single-home-blog .card h5:hover
			{
				color: {$hoverColor};
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a, .contact-section .btn_2:hover, .our_project .more_btn_iner, .food_menu .single_food_item, .review_part .center .client_review_text p, .offers_area .single_offers a, .forQuery .Query_border .phone_num a:hover, .form-contact .form-group .btn_1, .blog_right_sidebar .single_sidebar_widget .btn_1, .order_area .single_order .order_info .boxed_btn, .single_about_area .single_about_text .boxed_btn, .gallery_area .load_more_button .load_more_btn:hover, .about_area .about_info a, .lastest_project .section_title .boxed-btn, .messege_area .messege .boxed-btn, .messege_area .messege .boxed-btn:hover, .single_sidebar_widget.widget_search .boxed-btn, .comment-form .form-group .boxed-btn, .contact-section .button-contactForm
			{
				border-color: {$themeColor}
			}

			.review_part .center .client_review_text p:after
			{
				border-top-color: {$themeColor}
			}
			
			.sub_header{
				background: {$headerTop_bg}
			}
			.sub_header .sub_header_social_icon a,
			.sub_header .sub_header_social_icon .register_icon
			{
				color: {$headerTop_col}
			}

			.main_menu.menu_fixed, .header-area .main-header-area.sticky
			{
				background: {$headerBg};
			}
			.header-area .main-header-area .main-menu ul li a, .header-area .main-header-area.sticky .main-menu ul li a {
				color: {$menuColor};
			}
			.main_menu .main-menu-item ul li .nav-link, .main_menu .main-menu-item ul li.active .nav-link, .main_menu:not(.menu_fixed) ul.navbar-nav > li > a
			{
			   color: {$menuColor};
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):hover, .header-area .main-header-area .main-menu ul li  a.dropdown-item:hover, .main_menu:not(.menu_fixed) ul.navbar-nav > li > a:hover
			{
			   color: {$menuHoverColor};
			}
			.main_menu ul li a:hover:before, .main_menu ul.navbar-nav li a::before, .header-area .main-header-area .main-menu ul li a:hover, .header-area .main-header-area.sticky .main-menu ul li a::before {
				color: {$menuHoverColor}	
			}
			.main_menu.menu_fixed .main-menu-item ul li .nav-link:not(.dropdown-item):hover
			{
			   color: {$menuFixedHoverColor} !important;
			}
			
			.main_menu .main-menu-item ul.dropdown-menu li .nav-link, .dropdown .dropdown-menu .dropdown-item, li.menu-item-has-children .sub-menu li a, .header-area .main-header-area .main-menu ul li .submenu li a, .header-area .main-header-area.sticky .main-menu ul li .submenu li a
			{
			   color: {$dropMenuColor};
			}
			.header-area .main-header-area .main-menu ul li .submenu li a:hover, .header-area .main-header-area.sticky .main-menu ul li .submenu li a:hover {
				color: {$dropMenuHovColor};
			}
			.main_menu .main-menu-item ul.dropdown-menu li .nav-link:hover, .dropdown .dropdown-menu .dropdown-item:hover, li.menu-item-has-children .sub-menu li a:hover
			{
			   color: {$dropMenuHovColor} !important;
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):before
			{
				background: {$headerBg};
			}

			.footer-area, .footer_Part, .footer_Part:before, .footer_Part:after, .footer {
				background: {$footerwbgColor};
			}

			.footer-area .single-footer-widget h4, .footer-area .single-footer-widget .office-location ul li strong, .footer .footer_top .footer_widget .footer_title, .footer_area .subscribe_part_text h2, .footer_area .single-footer-widget h4, .footer_area .footer_widget h3, .footer .footer_top .footer_widget .footer_heading, .footer .footer_top .footer_header h3
			{
				color: {$footerwHeadColor}
			}
			.footer-area .single-footer-widget p, .footer-area .widget_ararat_newsletter .input-group input, .footer-area .copyright_part_text p, .footer_Part .copyright_part p, .footer-area .footer_2 .social_icon a, .footer_Part .footer_text h2, .footer-area .single-footer-widget .office-location ul li p, .footer .footer_top .footer_widget p, .footer .footer_top .footer_widget .newsletter_text, .footer .copy-right_text .copy_right, .footer_area .copyright_text p, .footer_area .footer_widget .offer_text, .footer_area .footer-bottom .copyright .footer-text, .footer-area .single-footer-widget h2, .footer .footer_top .footer_header p, .footer .footer_copy_right p
			{
				color: {$footerwTextColor}
			}
			.footer-area .copyright_part_text {
				border-color: {$footerwTextColor}
			}

			.footer-area .social_icon a, .footer-area .single-footer-widget ul li a, .footer_Part .footer_menu a, .footer_Part .social_icon a, .footer .footer_top .footer_widget ul li a, .footer .footer_top .footer_widget:not(.widget_nav_menu) a, .footer_area .footer-bottom .social_links ul li a, .footer_area .footer_widget form button
			{
			   color: {$footerwanchorcolor};
			}
			.footer_Part .footer_menu a:hover, .footer_Part .social_icon a:hover, .footer .footer_top .footer_widget ul li a:hover, .footer .footer_top .footer_widget:not(.widget_nav_menu) a:hover, .footer_area .single-footer-widget ul li a:hover, .footer_area .footer_widget form button
			{
			   color: {$footerwanchorhovcolor};
			}
			.footer_area .footer-bottom .social_links ul li a:hover {
				background: {$footerwanchorhovcolor};
			}
			.footer-area .copyright_part_text .footer-text > a, .footer_Part .copyright_part p > a, .footer .copy-right_text .copy_right a, .footer_area .copyright_text p a, .footer_area .footer-bottom .copyright .footer-text a, .footer .footer_copy_right p a
			{
			   color: {$footerAncDefColor};
			}

			.footer .copy-right_text .copy_right a:hover, .footer_area .single-footer-widget ul li a
			{
			   color: {$footerwanchorcolor};
			}
			.footer-area .btn {
				background: {$footerwanchorcolor};
			}
			.footer-area .single-footer-widget .btn, .footer .footer_top .footer_widget .ararat_mailchimp_newsletter_widget button, .footer .footer_top .footer_widget .ararat_mailchimp_newsletter_widget button
			{
			   background: {$footerAncDefColor};
			}
			.footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover
			{
			   color: {$footerAncDefHovColor}!important;
			}
			.footer-area .footer_2 .social_icon a:hover, .footer-area .single-footer-widget p span
			{
			   color: {$footerAncDefHovColor}!important;
			}

			#f0f {
				background-color: {$fofbg};
			}
			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

			.comment_form .btn_1.button:hover, .search-page .button.button-contactForm:hover, .f0f-content .button.button-contactForm:hover, .gallery_area .load_more_button .load_more_btn:hover {
				background: {$whiteColor};
			}

			.offers_area .single_offers a:hover, .blog_item_img .blog_item_date:hover, .service_area .single_service:hover .service_icon i {
				color: {$whiteColor};
			}

			.form-contact .form-group .btn_1:hover, .about_area .about_info a:hover, .lastest_project .section_title .boxed-btn:hover, .messege_area .messege .boxed-btn:hover, .single_sidebar_widget.widget_search .boxed-btn:hover, .comment-form .form-group .boxed-btn:hover, .contact-section .button-contactForm:hover {
				color: {$whiteColor} !important;
			}

			.header-area .get_in_tauch a
			{
				color: {$bookBtnColor};
				border-color: {$bookBtnColor};
			}
			.header-area .get_in_tauch a:hover
			{
				border-color: {$bookBtnHoverBgColor};
				background: {$bookBtnHoverBgColor};
			}
			.header-area .main-header-area.sticky .boxed_btn_white
			{
				color: {$bookBtnHoverBgColor};
				border-color: {$bookBtnHoverBgColor};
			}
			.slider_area .single_slider .slider_text a
			{
				color: {$themeColor};
				border-color: {$themeColor};
			}
			.slider_area .single_slider .slider_text a:hover, .lastest_project .section_title .boxed-btn:hover, .messege_area .messege .boxed-btn:hover
			{
				background: {$themeColor};
			}

        ";
       
    wp_add_inline_style( 'ararat-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'ararat_common_custom_css', 50 );