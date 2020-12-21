<?php 
/**
 * @Packge     : Barber
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'barber_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'barber' ),
        'description' => esc_html__( 'Select the theme color.', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_general_section',
        'default'     => '#f81c1c',
    )
);

 // Theme box shadow color field
Epsilon_Customizer::add_field(
    'barber_theme_box_shadow_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Box Color', 'barber' ),
        'description' => esc_html__( 'Select the theme color.', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_general_section',
        'default'     => 'rgba(248, 28, 28, 0.1)',
    )
);

 
// Header background color field
Epsilon_Customizer::add_field(
    'barber_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'barber' ),
        'description' => esc_html__( 'Select the header background color.', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_header_section',
        'default'     => '#f81c1c',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'barber_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'barber_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_header_section',
        'default'     => '#000000',
    )
);

// Other Page Header menu hover color field
Epsilon_Customizer::add_field(
    'barber_ohter_page_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Other Page Header menu hover color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_header_section',
        'default'     => '#f81c1c',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'barber_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_header_section',
        'default'     => '#ffffff',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'barber_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_header_section',
        'default'     => '#ffffff',
    )
);


/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'barber_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'barber' ),
        'description' => esc_html__( 'Set post excerpt length.', 'barber' ),
        'section'     => 'barber_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'barber_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'barber' ),
        'section'     => 'barber_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'barber_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'barber' ),
        'section'     => 'barber_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'barber_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'barber' ),
        'section'     => 'barber_blog_section',
        'default'     => true
    )
);

/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'barber_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'barber' ),
        'section'           => 'barber_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'barber_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'barber' ),
        'section'           => 'barber_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'barber_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'barber_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'barber_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'barber' ),
        'section'     => 'barber_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'barber_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'barber' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'barber' ),
        'section'     => 'barber_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'barber_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'barber' ),
        'section'     => 'barber_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'barber' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'barber_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'barber' ),
        'section'     => 'barber_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget/top background color field
Epsilon_Customizer::add_field(
    'barber_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Top Background Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_footer_section',
        'default'     => '#161f23',
    )
);

// Footer bottom background color field
Epsilon_Customizer::add_field(
    'barber_footer_copy_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Copyright Background Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_footer_section',
        'default'     => '#121b1f',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'barber_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_footer_section',
        'default'     => '#999999',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'barber_footer_widget_title_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'barber_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_footer_section',
        'default'     => '#f81c1c',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'barber_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'barber' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'barber_footer_section',
        'default'     => '#f81c1c',
    )
);

