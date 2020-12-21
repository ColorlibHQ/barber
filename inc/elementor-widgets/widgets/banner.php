<?php
namespace Barberelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Background;
use Elementor\Utils;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;  
}


/**
 *
 * Barber elementor about us section widget.
 *
 * @since 1.0
 */
class Barber_Banner extends Widget_Base {

	public function get_name() {
		return 'barber-banner';
	}

	public function get_title() {
		return __( 'Banner', 'barber' );
	}

	public function get_icon() {
		return 'eicon-banner';
	}

	public function get_categories() {
		return [ 'barber-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  content ------------------------------
        $this->start_controls_section(
            'banner_section',
            [
                'label' => __( 'Banner Section Content', 'barber' ),
            ]
        );
        $this->add_control(
            'banner_content',
            [
                'label'         => esc_html__( 'Banner Content', 'barber' ),
                'type'          => Controls_Manager::WYSIWYG,
                'default'       => __( '<h5>Feel like home</h5><h1>Good Look Guaranteed</h1><p>Divide give Dominion wont deep he them seed thing open sixth beast don\'t yea very it meat yielding for air in without one upon it without, his creepeth tree gathering behold and, greater have given deep his</p>', 'barber' )
            ]
        );
        $this->add_control(
            'banner_btnlabel1',
            [
                'label'         => esc_html__( 'Button Label 1', 'barber' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Book Now', 'barber' )
            ]
        );
        $this->add_control(
            'banner_btnurl1',
            [
                'label'         => esc_html__( 'Button Url 1', 'barber' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
        $this->add_control(
            'banner_btnlabel2',
            [
                'label'         => esc_html__( 'Button Label 2', 'barber' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Contact Us', 'barber' )
            ]
        );
        $this->add_control(
            'banner_btnurl2',
            [
                'label'         => esc_html__( 'Button Url 2', 'barber' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );

        $this->end_controls_section(); // End content


        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Banner Content Styles', 'barber' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Main Title Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text h5' => 'color: {{VALUE}};',
                ],
            ]
        );    
        $this->add_control(
            'sub_title_color', [
                'label'     => __( 'Big Title Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text h1' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sec_texts_color', [
                'label'     => __( 'Text Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sec_sep_text',
            [
                'label'     => __( 'Button Styles 1', 'barber' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button BG Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_1' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#30383b',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_color', [
                'label'     => __( 'Button Hover Text Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_1:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_border_color', [
                'label'     => __( 'Button Hover Border Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_1:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'transparent',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_1:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'sec_sep_text2',
            [
                'label'     => __( 'Button Styles 2', 'barber' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'btn_bg_color2', [
                'label'     => __( 'Button BG Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => 'transparent',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_2' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color2', [
                'label'     => __( 'Button Text Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_border_color2', [
                'label'     => __( 'Button Border Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_2' => 'border-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_txt_color2', [
                'label'     => __( 'Button Hover Text Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#30383b',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_2:hover' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_bg_color2', [
                'label'     => __( 'Button Hover BG Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .banner_part .banner_text .banner_btn .btn_2:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        
        $this->end_controls_section();

        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Banner Background', 'barber' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'barber' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .banner_part',
            ]
        );
        $this->end_controls_section();

        // Background After Style ==============================
        $this->start_controls_section(
            'section_bg_after', [
                'label' => __( 'Banner Circle Image', 'barber' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg_after',
                'label' => __( 'Background', 'barber' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .banner_part:after',
            ]
        );

        $this->end_controls_section();

	}

	protected function render() {
        $settings = $this->get_settings();
        $ban_content = !empty( $settings['banner_content'] ) ? $settings['banner_content'] : '';
        $button_label1 = !empty( $settings['banner_btnlabel1'] ) ? $settings['banner_btnlabel1'] : '';
        $button_url1 = !empty( $settings['banner_btnurl1']['url'] ) ? $settings['banner_btnurl1']['url'] : '';
        $button_label2 = !empty( $settings['banner_btnlabel2'] ) ? $settings['banner_btnlabel2'] : '';
        $button_url2 = !empty( $settings['banner_btnurl2']['url'] ) ? $settings['banner_btnurl2']['url'] : '';
    ?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <?php
                                //Content ==============
                                if( $ban_content ){
                                    echo wp_kses_post( wpautop( $ban_content ) );
                                }
                                
                                echo '<div class="banner_btn">';
                                    // Button1 =============
                                    if( $button_label1 ){
                                        echo '<a class="btn_1" href="'. esc_url( $button_url1 ) .'">'. esc_html( $button_label1 ) .'</a>';
                                    }
                                    // Button2 =============
                                    if( $button_label2 ){
                                        echo '<a class="btn_2" href="'. esc_url( $button_url2 ) .'">'. esc_html( $button_label2 ) .'</a>';
                                    }
                                echo '</div>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part end-->      
    <?php

    }
	
}
