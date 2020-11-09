<?php 
/**
 * @Packge     : Ararat
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'ararat_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'ararat' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'ararat_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'ararat' ),
            'panel'    => 'ararat_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'ararat_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'ararat' ),
            'panel'    => 'ararat_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'ararat_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'ararat' ),
            'panel'    => 'ararat_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'ararat_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'ararat' ),
            'panel'    => 'ararat_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'ararat_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'ararat' ),
            'panel'    => 'ararat_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'ararat_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'ararat' ),
            'panel'    => 'ararat_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'ararat_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'ararat' ),
            'panel'    => 'ararat_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'ararat_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'ararat' ),
            'panel'    => 'ararat_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>