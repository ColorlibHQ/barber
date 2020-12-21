<?php
namespace Barberelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Barber elementor section widget.
 *
 * @since 1.0
 */
class Barber_About extends Widget_Base {

	public function get_name() {
		return 'barber-about';
	}

	public function get_title() {
		return __( 'About', 'barber' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'barber-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'about_content',
			[
				'label' => __( 'About Section', 'barber' ),
			]
		);
        
        $this->add_control(
			'left_shade_img',
			[
				'label'         => esc_html__( 'Left Shade Image', 'barber' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        $this->add_control(
			'center_img',
			[
				'label'         => esc_html__( 'Center Small Image', 'barber' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        $this->add_control(
			'right_img',
			[
				'label'         => esc_html__( 'Right Image', 'barber' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        $this->add_control(
            'content',
            [
                'label'         => esc_html__( 'Content', 'barber' ),
                'description'   => esc_html__('Use <br> tag for line break', 'barber'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h5>About us</h5><h2>Connect with your dream style</h2><p>Seed spirit replenish cattle one moved air created. Them fill dont be fed isnt to he shall god good spirit they are the. Hath Itself their second ifruitful a moving their creature living every i replenish land and had hen lesser for their good quality products</p><p>Seed spirit replenish cattle one moved air created. Them fill dont be fed isnt to he shall god good spirit they are the. Hath Itself their second ifruitful a moving their creature living every</p>', 'barber' )
            ]
        );
        $this->add_control(
            'btnlabel',
            [
                'label'         => esc_html__( 'Button Label', 'barber' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Read More', 'barber' )
            ]
        );
        $this->add_control(
            'btnurl',
            [
                'label'         => esc_html__( 'Button Url', 'barber' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false
            ]
        );
		$this->end_controls_section(); // End about content

        // Color Settings ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Color Settings', 'barber' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_control(
			'big_title', [
				'label'     => __( 'Big Title Color', 'barber' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#30383b',
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text h2' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'right_txt_color', [
				'label'     => __( 'Text Color', 'barber' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#777777',
				'selectors' => [
					'{{WRAPPER}} .about_part .about_text p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
            'sec_sep_text',
            [
                'label'     => __( 'Button Styles', 'barber' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button BG Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#30383b',
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_3' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f81c1c',
                'selectors' => [
                    '{{WRAPPER}} .about_part .about_text .btn_3:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

        /**
         * Style Tab
         * ------------------------------ Background Style ------------------------------
         *
         */
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'barber' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        
        $this->add_control(
            'section_bgheading',
            [
                'label'     => __( 'Background Settings', 'barber' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'barber' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part',
            ]
        );

        $this->end_controls_section();


	}

	protected function render() {
        $settings     = $this->get_settings();
        $left_shade_img  = !empty( $settings['left_shade_img']['id'] ) ? wp_get_attachment_image( $settings['left_shade_img']['id'], 'barber_about_section_353x383', false, array( 'class' => 'about_img_1', 'alt' => 'left shade image' ) ) : '';
        $center_img  = !empty( $settings['center_img']['id'] ) ? wp_get_attachment_image( $settings['center_img']['id'], 'barber_about_section_339x397', false, array( 'class' => 'about_img_2', 'alt' => 'center image' ) ) : '';
        $right_img  = !empty( $settings['right_img']['id'] ) ? wp_get_attachment_image( $settings['right_img']['id'], 'barber_about_section_529x601', false, array( 'class' => 'about_img_3', 'alt' => 'right image' ) ) : '';
        $content      = !empty( $settings['content'] ) ? $settings['content'] : '';
        $button_label = !empty( $settings['btnlabel'] ) ? $settings['btnlabel'] : '';
        $button_url   = !empty( $settings['btnurl']['url'] ) ? $settings['btnurl']['url'] : '';
        ?>

    <!-- about part start-->
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4 col-lg-6">
                    <div class="about_img ">
                        <?php
                            if( $left_shade_img ){
                                echo wp_kses_post( $left_shade_img );
                            }
                            if( $center_img ){
                                echo wp_kses_post( $center_img );
                            }
                            if( $right_img ){
                                echo $right_img;
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-7 offset-md-1 col-lg-3 offset-lg-1">
                    <div class="about_text">
                        <?php
                            //Content ==============
                            if( $content ){
                                echo wp_kses_post( wpautop( $content ) );
                            }
                            // Button =============
                            if( $button_label ){
                                echo '<a class="btn_3" href="'. esc_url( $button_url ) .'">'. esc_html( $button_label ) . '</a>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about part end-->
    <?php

    }

}
