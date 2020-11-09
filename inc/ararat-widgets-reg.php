<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Ararat
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function ararat_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'ararat' ),
        'id'            => 'ararat-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer One', 'ararat' ),
        'id'            => 'footer-1',
        'before_widget' => '<div class="col-xl-4 col-12 col-md-4"><div id="%1$s" class="single-footer-widget footer_widget widget footer_1 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_heading">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'ararat' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-xl-4 col-12 col-md-4"><div id="%1$s" class="single-footer-widget footer_widget widget footer_2 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_heading">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'ararat' ),
        'id'            => 'footer-3',
        'before_widget' => '<div class="col-xl-4 col-12 col-md-4"><div id="%1$s" class="single-footer-widget footer_widget widget footer_3 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_heading">',
        'after_title'   => '</h3>',
    ) );   
    
}
add_action( 'widgets_init', 'ararat_widgets_init' );
