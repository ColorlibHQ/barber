<?php
namespace Barberelementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
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
 * Barber elementor Team Member section widget.
 *
 * @since 1.0
 */
class Barber_Services extends Widget_Base {

	public function get_name() {
		return 'barber-services';
	}

	public function get_title() {
		return __( 'Services', 'barber' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'barber-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Service Section ------------------------------
        $this->start_controls_section(
            'services_heading',
            [
                'label' => __( 'Service Heading', 'barber' ),
            ]
        );

        $this->add_control(
			'service_sec_img',
			[
				'label'         => esc_html__( 'Section Image', 'barber' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        $this->add_control(
            'service_header',
            [
                'label'         => esc_html__( 'Service Header', 'barber' ),
                'description'   => esc_html__('Use <br> tag for line break', 'barber'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Service Expectation</h2><p>Good morning forth gathering doesn\'t god gathering man and had moveth there dry sixth dominion rule divided behold after had he did not move .</p>', 'barber' )
            ]
        );

        $this->end_controls_section(); // End section top content
        
		// ----------------------------------------   Services content ------------------------------
		$this->start_controls_section(
			'services_block',
			[
				'label' => __( 'Services', 'barber' ),
			]
		);
		$this->add_control(
            'services_content', [
                'label' => __( 'Create Service', 'barber' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ label }}}',
                'fields' => [
                    [
                        'name'  => 'ser_img',
                        'label' => __( 'Service Image', 'barber' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'label',
                        'label' => __( 'Title', 'barber' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Stylish Hair Cut', 'barber' )
                    ],
                    [
                        'name'      => 'desc',
                        'label'     => __( 'Short Brief', 'barber' ),
                        'type'      => Controls_Manager::TEXTAREA,
                        'default'   => __( 'Good morning forth gathering does god gathering man and had moveth there dry so dominion rule divided had', 'barber' )
                    ],
                    [
                        'name'  => 'btn_lbl',
                        'label' => __( 'Button Label', 'barber' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Read More', 'barber' )
                    ],
                    [
                        'name'      => 'btn_url',
                        'label'     => __( 'Button URL', 'barber' ),
                        'type'      => Controls_Manager::URL,
                        'show_external' => false,
                        'default'   => [
                            'url'   => '#',
                        ]
                    ]
                ]
            ]
        );

		$this->end_controls_section(); // End Services content

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
					'{{WRAPPER}} .service_part .section_tittle h2' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'sec_txt_color', [
				'label'     => __( 'Text Color', 'barber' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#777777',
				'selectors' => [
					'{{WRAPPER}} .service_part .section_tittle p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
            'ser_sep_text',
            [
                'label'     => __( 'Service Styles', 'barber' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'ser_border_color', [
                'label'     => __( 'Service Border Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#e3e6ea',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'ser_title_color', [
                'label'     => __( 'Service Title Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#30383b',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part .single_service_text h4' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'ser_txt_color', [
                'label'     => __( 'Service Text Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part .single_service_text p' => 'color: {{VALUE}};',
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
                    '{{WRAPPER}} .service_part .single_service_part .single_service_text .btn_3' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part .single_service_text .btn_3' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hvr_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f81c1c',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part .single_service_text .btn_3:hover' => 'background-color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .service_part',
            ]
        );

        $this->end_controls_section();
        
	}

	protected function render() {

    $settings = $this->get_settings();
    $sec_img  = !empty( $settings['service_sec_img']['id'] ) ? wp_get_attachment_image( $settings['service_sec_img']['id'], 'barber_section_img_29x53', '', array( 'alt' => 'section image' ) ) : '';
    $service_header = !empty( $settings['service_header'] ) ? $settings['service_header'] : '';
    $services = !empty( $settings['services_content'] ) ? $settings['services_content'] : '';
    ?>

    <!-- Service part start-->
    <section class="service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <?php
                            // Section Image =============
                            if( $sec_img ){
                                echo wp_kses_post( $sec_img );
                            }
                            
                            // Service Header =============
                            if( $service_header ){
                                echo wp_kses_post( wpautop( $service_header ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                if( is_array( $services ) && count( $services ) > 0 ){
                    foreach ( $services as $service ) {
                        $ser_img  = !empty( $service['ser_img']['id'] ) ? wp_get_attachment_image( $service['ser_img']['id'], 'barber_service_img_324x267', array( 'alt' => 'single service image' ) ) : '';
                        $service_title = !empty( $service['label'] ) ? $service['label'] : '';
                        $service_desc  = !empty( $service['desc'] ) ? $service['desc'] : '';
                        $btn_lbl       = !empty( $service['btn_lbl'] ) ? $service['btn_lbl'] : '';
                        $btn_url       = !empty( $service['btn_url']['url'] ) ? $service['btn_url']['url'] : '';
                ?>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <?php
                            if( $ser_img ){
                                echo wp_kses_post( $ser_img );
                            }
                        ?>
                        <div class="single_service_text">                            
                            <h4><?php echo esc_html( $service_title );?></h4>
                            <?php   
                                if( $service_desc ){
                                    echo '<p>'. wp_kses_post( $service_desc ) . '</p>';
                                }

                                if( $btn_lbl ){
                                    echo '<a class="btn_3" href="'. esc_url( $btn_url ) .'">'. esc_html( $btn_lbl ) . '</a>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Service part end-->
    <?php
    }
}
