<?php
namespace Barberelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 *
 * barber elementor about page section widget.
 *
 * @since 1.0
 */
class Barber_Contact extends Widget_Base {

    public function get_name() {
        return 'barber-contact';
    }

    public function get_title() {
        return __( 'Contact', 'barber' );
    }

    public function get_icon() {
        return 'eicon-mail';
    }

    public function get_categories() {
        return [ 'barber-elements' ];
    }

    protected function _register_controls() {


        // ----------------------------------------  Contact Info  ------------------------------
        
        $this->start_controls_section(
            'contact_info',
            [
                'label' => __( 'Contact Info', 'barber' ),
            ]
        );

        $this->add_control(
            'info', [
                'label'         => __( 'Create Contact Info', 'barber' ),
                'type'          => Controls_Manager::REPEATER,
                'title_field'   => '{{{ label }}}',
                'fields'  => [
                    [
                        'name'        => 'label',
                        'label'       => __( 'Contact Info', 'barber' ),
                        'label_block' => true,
                        'type'        => Controls_Manager::TEXT,
                        'default'     => esc_html__( 'Dhaka, Bangladesh', 'barber' )
                    ],
                    [
                        'name'    => 'desc',
                        'label'   => __( 'Contact Descriptions', 'barber' ),
                        'type'    => Controls_Manager::TEXTAREA,
                        'default' => esc_html__( 'Write something...', 'barber' )
                    ],
                    [
                        'name'  => 'icon',
                        'label' => __( 'Icon', 'barber' ),
                        'type'  => Controls_Manager::ICON,
                        'options' => barber_themify_icon()
                    ]

                ],
            ]
        );

        $this->end_controls_section(); // End Contact Info

        // ----------------------------------------  Contact Form  ------------------------------
        $this->start_controls_section(
            'contact_form',
            [
                'label' => __( 'Contact Form', 'barber' ),
            ]
        );
        $this->add_control(
            'contact_form_title',
            [
                'label'     => esc_html__( 'Contact Form Title', 'barber' ),
                'type'      => Controls_Manager::TEXT,
                'label_block' => true,
                'default'   => esc_html__('Get in Touch', 'barber')
            ]
        );
        $this->add_control(
            'contact_formshortcode',
            [
                'label'     => esc_html__( 'Form Shortcode', 'barber' ),
                'type'      => Controls_Manager::TEXT,
                'label_block' => true
            ]
        );
        $this->end_controls_section(); // End Contact Form


        /**
         * Style Tab
         * ------------------------------ Style ------------------------------
         *
         */
        $this->start_controls_section(
            'style_content_color', [
                'label' => __( 'Style Content Color', 'barber' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'right_first_line', [
                'label'     => __( 'Right First Line Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#2a2a2a',
                'selectors' => [
                    '{{WRAPPER}} .contact-info .media-body h3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'right_sec_line', [
                'label'     => __( 'Right Second Line Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#8a8a8a',
                'selectors' => [
                    '{{WRAPPER}} .contact-info .media-body p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_icon', [
                'label'     => __( 'Icon Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#8f9195',
                'selectors' => [
                    '{{WRAPPER}} .contact-info__icon i, .contact-info__icon span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();


    }

    protected function render() {

    $settings = $this->get_settings();


    ?>
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php
                    if( !empty( $settings['contact_form_title'] ) ) {
	                    echo '<h2 class="contact-title">' . esc_html( $settings['contact_form_title'] ) . '</h2>';
                    }
                    ?>

                </div>
                <div class="col-lg-8">
                    <?php 
                        if( !empty( $settings['contact_formshortcode'] ) ){
                            echo do_shortcode( $settings['contact_formshortcode'] );
                        }
                    ?>
                </div>

                <div class="col-lg-4">
                    <?php 
                    if( is_array( $settings[ 'info' ] ) && count( $settings[ 'info' ] ) > 0 ):
                        foreach( $settings[ 'info' ] as $info ):
                        ?>
                            <div class="media contact-info">
                                <span class="contact-info__icon"><i class="<?php echo esc_attr( $info['icon'] ) ?>"></i></span>
                                <div class="media-body">
                                <h3><?php echo esc_html( $info['label'] ) ?></h3>
                                <p><?php echo esc_html( $info['desc'] ) ?></p>
                                </div>
                            </div>
                            <?php 
                        endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    }
    
}
