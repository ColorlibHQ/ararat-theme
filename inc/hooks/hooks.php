<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'ararat_preloader', 'ararat_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'ararat_header', 'ararat_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'ararat_footer', 'ararat_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'ararat_wrp_start', 'ararat_wrp_start_cb', 10 );
	add_action( 'ararat_wrp_end', 'ararat_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'ararat_blog_col_start', 'ararat_blog_col_start_cb', 10 );
	add_action( 'ararat_blog_col_end', 'ararat_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'ararat_blog_posts_thumb', 'ararat_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'ararat_blog_details_wrap_start', 'ararat_blog_details_wrap_start_cb', 10 );
	add_action( 'ararat_blog_details_wrap_end', 'ararat_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'ararat_blog_posts_title', 'ararat_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'ararat_blog_posts_meta', 'ararat_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'ararat_blog_posts_excerpt', 'ararat_blog_posts_excerpt_cb', 10 );
	// add_action( 'ararat_blog_posts_excerpt', 'ararat_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'ararat_blog_posts_info_link', 'ararat_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'ararat_blog_posts_content', 'ararat_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'ararat_blog_posts_share', 'ararat_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'ararat_blog_sidebar', 'ararat_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'ararat_blog_single_meta', 'ararat_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'ararat_page_content', 'ararat_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'ararat_fof', 'ararat_fof_cb', 10 );

	

?>