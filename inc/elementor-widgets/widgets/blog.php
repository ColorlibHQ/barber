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
 * Barber elementor few words section widget.
 *
 * @since 1.0
 */

class Barber_Blog extends Widget_Base {

	public function get_name() {
		return 'barber-blog';
	}

	public function get_title() {
		return __( 'Blog', 'barber' );
	}

	public function get_icon() {
		return 'eicon-post-list';
	}

	public function get_categories() {
		return [ 'barber-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Blog content ------------------------------
        $this->start_controls_section(
            'blog_content',
            [
                'label' => __( 'Latest Blog Header Setting', 'barber' ),
            ]
        );
        
        $this->add_control(
			'sec_img',
			[
				'label'         => esc_html__( 'Section Image', 'barber' ),
                'type'          => Controls_Manager::MEDIA,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
			]
		);
        $this->add_control(
            'sec_header',
            [
                'label'         => esc_html__( 'Blog Heading Text', 'barber' ),
                'description'   => esc_html__('Use <br> tag for line break', 'barber'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Latest Style News</h2><p>Good morning forth gathering doesn\'t god gathering man and had moveth there dry sixth dominion rule divided behold after had he did not move .</p>', 'barber' )
            ]
        );

        $this->end_controls_section(); // End few words content

        // Blog post settings
        $this->start_controls_section(
            'blog_post_sec',
            [
                'label' => __( 'Blog Post Settings', 'barber' ),
            ]
        );
		$this->add_control(
			'post_num',
			[
				'label'         => esc_html__( 'Post Item', 'barber' ),
				'type'          => Controls_Manager::NUMBER,
				'label_block'   => false,
                'default'       => absint(3),
                'min'           => 1,
                'max'           => 6,
			]
		);
		$this->add_control(
			'post_exc',
			[
				'label'         => esc_html__( 'Post Excerpt Length', 'barber' ),
				'type'          => Controls_Manager::NUMBER,
				'label_block'   => false,
                'default'       => absint(13),
                'min'           => 5,
                'max'           => 20
			]
		);
		$this->add_control(
			'post_order',
			[
				'label'         => esc_html__( 'Post Order', 'barber' ),
				'type'          => Controls_Manager::SWITCHER,
				'label_block'   => false,
				'label_on'      => 'ASC',
				'label_off'     => 'DESC',
                'default'       => 'yes',
                'options'       => [
                    'no'        => 'ASC',
                    'yes'       => 'DESC'
                ]
			]
		);

        $this->end_controls_section(); // End few words content

        //------------------------------ Style Section ------------------------------
        $this->start_controls_section(
            'style_section', [
                'label' => __( 'Style Section Heading', 'barber' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#30383b',
                'selectors' => [
                    '{{WRAPPER}} .blog_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'color_sec_sub_title', [
                'label'     => __( 'Section Sub Title Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .blog_part .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'blog_styles_sep',
            [
                'label'     => __( 'Blog Styles', 'barber' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'item_border_color', [
                'label'     => __( 'Item Border Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#e3e6ea',
                'selectors' => [
                    '{{WRAPPER}} .service_part .single_service_part' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'post_excerpt_color', [
                'label'     => __( 'Post Excerpt Color', 'barber' ),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#777',
                'selectors' => [
                    '{{WRAPPER}} .blog_part .single_service_part .single_service_text p:not(:first-child)' => 'color: {{VALUE}};',
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
                'selector' => '{{WRAPPER}} .blog_part',
            ]
        );

        $this->end_controls_section();
	}

	protected function render() {

    $settings   = $this->get_settings();
    $sec_img    = !empty( $settings['sec_img']['id'] ) ? wp_get_attachment_image( $settings['sec_img']['id'], 'barber_section_img_29x53', '', array( 'alt' => 'pricing section image' ) ) : '';
    $sec_header = !empty( $settings['sec_header'] ) ? $settings['sec_header'] : '';
    $post_num   = !empty( $settings['post_num'] ) ? $settings['post_num'] : '';
    $post_exc   = !empty( $settings['post_exc'] ) ? $settings['post_exc'] : '';
    $post_order = !empty( $settings['post_order'] ) ? $settings['post_order'] : '';
    $post_order = $post_order == 'yes' ? 'DESC' : 'ASC';
    ?>

    <!-- blog part start-->
    <section class="blog_part service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <?php
                            // Section Image =============
                            if( $sec_img ){
                                echo wp_kses_post( $sec_img );
                            }
                            
                            // Section Header =============
                            if( $sec_header ){
                                echo wp_kses_post( wpautop( $sec_header ) );
                            }
                        ?> 
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php
                    if( function_exists( 'barber_latest_blog' ) ) {
                        barber_latest_blog( $post_num, $post_exc, $post_order );
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- blog_part part end-->
    <?php
	}
}
