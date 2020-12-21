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
class Barber_Pricing extends Widget_Base {

	public function get_name() {
		return 'barber-pricing';
	}

	public function get_title() {
		return __( 'Pricing Plan', 'barber' );
	}

	public function get_icon() {
		return 'eicon-price-table';
	}

	public function get_categories() {
		return [ 'barber-elements' ];
	}

	protected function _register_controls() {

		// ----------------------------------------   Pricing Plan content ------------------------------
        
        $this->start_controls_section(
            'pricing_heading',
            [
                'label' => __( 'Pricing Plan Heading', 'barber' ),
            ]
        );

        $this->add_control(
			'pricing_sec_img',
			[
				'label'         => esc_html__( 'Section Image', 'barber' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        $this->add_control(
            'pricing_header',
            [
                'label'         => esc_html__( 'Pricing Header', 'barber' ),
                'description'   => esc_html__('Use <br> tag for line break', 'barber'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Pricing Plan</h2><p>Good morning forth gathering doesn\'t god gathering man and had moveth there dry sixth dominion rule divided behold after had he did not move .</p>', 'barber' )
            ]
        );

        $this->end_controls_section(); // End section top content
        
        
        // Pricing items
        $this->start_controls_section(
			'pricing_block',
			[
				'label' => __( 'Pricing Plan', 'barber' ),
			]
		);
		$this->add_control(
            'pricing_content', [
                'label' => __( 'Create New', 'barber' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ price_title }}}',
                'fields' => [
                    [
                        'name'  => 'pricing_img',
                        'label' => __( 'Pricing Image', 'barber' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'price_title',
                        'label' => __( 'Pricing Title', 'barber' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Hair Cut', 'barber' )
                    ],
                    [
                        'name'  => 'price',
                        'label' => __( 'Price', 'barber' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( '$10.00', 'barber' )
                    ],
                    [
                        'name'      => 'short_brief',
                        'label'     => __( 'Short Brief', 'barber' ),
                        'type'      => Controls_Manager::TEXTAREA,
                        'default'   => __( 'Their days lesser and every firmament', 'barber' )
                    ]
                ]
            ]
        );

		$this->end_controls_section(); // End Pricing Plan content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

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
					'{{WRAPPER}} .priceing_part .section_tittle h2' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'sec_txt_color', [
				'label'     => __( 'Section Text Color', 'barber' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#777777',
				'selectors' => [
					'{{WRAPPER}} .priceing_part .section_tittle p' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
            'ser_sep_text',
            [
                'label'     => __( 'Pricing Content Styles', 'barber' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        
        $this->add_control(
			'price_title_color', [
				'label'     => __( 'Price Title Color', 'barber' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#30383b',
				'selectors' => [
					'{{WRAPPER}} .priceing_part .single_pricing_item .single_pricing_text h5' => 'color: {{VALUE}};',
				],
			]
		);
        
        $this->add_control(
			'price_sub_title_color', [
				'label'     => __( 'Price Sub Title Color', 'barber' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#777',
				'selectors' => [
					'{{WRAPPER}} .priceing_part .single_pricing_item .single_pricing_text p' => 'color: {{VALUE}};',
				],
			]
        );
        
        $this->end_controls_section();

	}

	protected function render() {

    $settings        = $this->get_settings();
    $sec_img         = !empty( $settings['pricing_sec_img']['id'] ) ? wp_get_attachment_image( $settings['pricing_sec_img']['id'], 'barber_section_img_29x53', '', array( 'alt' => 'pricing section image' ) ) : '';
    $pricing_header  = !empty( $settings['pricing_header'] ) ? $settings['pricing_header'] : '';
    $pricing_content = !empty( $settings['pricing_content'] ) ? $settings['pricing_content'] : '';
    ?>

    <!-- Service part start-->
    <section class="priceing_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <?php
                            // Section Image =============
                            if( $sec_img ){
                                echo wp_kses_post( $sec_img );
                            }
                            
                            // Section Header =============
                            if( $pricing_header ){
                                echo wp_kses_post( wpautop( $pricing_header ) );
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <?php   
                    if( is_array( $pricing_content ) && count( $pricing_content ) > 0 ){
                        foreach ( $pricing_content as $pricing ) {
                            $price_img   = !empty( $pricing['pricing_img']['id'] ) ? wp_get_attachment_image( $pricing['pricing_img']['id'], 'barber_widget_post_thumb_80x80', array( 'alt' => 'single pricing image' ) ) : '';
                            $price_title = !empty( $pricing['price_title'] ) ? $pricing['price_title'] : '';
                            $price       = !empty( $pricing['price'] ) ? $pricing['price'] : '';
                            $des         = !empty( $pricing['short_brief'] ) ? $pricing['short_brief'] : '';
                    ?>
                    <div class="col-md-6 col-lg-6">
                        <div class="single_pricing_item">
                            <?php
                                // Price Image =============
                                if( $price_img ){
                                    echo wp_kses_post( $price_img );
                                }

                                echo '<div class="single_pricing_text">';
                                    // Pricing Title =============
                                    if( $price_title ){
                                        echo '<h5>'. esc_html( $price_title ) . '</h5>';
                                    }

                                    // Price =============
                                    if( $price ){
                                        echo '<h6>'. esc_html( $price ) . '</h6>';
                                    }

                                    // Pricing Short Brief =============
                                    if( $des ){
                                        echo '<p>'. wp_kses_post( $des ) . '</p>';
                                    }
                                echo '</div>';
                            ?>
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
