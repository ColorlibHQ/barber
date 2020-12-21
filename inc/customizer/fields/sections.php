<?php 
/**
 * @Packge     : Barber
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
        'id'   => 'barber_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'barber' ),
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
        'id'   => 'barber_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'barber' ),
            'panel'    => 'barber_theme_options_panel',
            'priority' => 1,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'barber_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'barber' ),
            'panel'    => 'barber_theme_options_panel',
            'priority' => 2,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'barber_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'barber' ),
            'panel'    => 'barber_theme_options_panel',
            'priority' => 3,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'barber_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'barber' ),
            'panel'    => 'barber_theme_options_panel',
            'priority' => 6,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'barber_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'barber' ),
            'panel'    => 'barber_theme_options_panel',
            'priority' => 7,
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