<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

class Elementor_Card_Widget extends \Elementor\Widget_Base
{
    public function get_name() {
        return 'card';
    }

    public function get_title() {
        return esc_html__( 'Card Widget Test', 'elementor-widget' );
    }

    public function get_icon() {
        return 'eicon-header';
    }

    public function get_categories() {
        return [ 'general' ];
    }

    public function get_keywords() {
        return [ 'card', 'custom' ];
    }

    protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            [
            'label' => esc_html__( 'Content', 'elementor-widget' ),
            'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'card_title',
            [
            'label' => esc_html__( 'Card title', 'elementor-widget' ),
            'type' => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
            'placeholder' => esc_html__( 'Your card title here', 'elementor-widget' ),
            ]
        );

        $this->add_control(
            'card_description',
            [
            'label' => esc_html__( 'Card Description', 'essential-elementor-widget' ),
            'type' => \Elementor\Controls_Manager::TEXTAREA,
            'label_block'   => true,
            'placeholder' => esc_html__( 'Your card description here', 'essential-elementor-widget' ),
            ]
        );

        $this->add_control(
            'card_image',
            [
                'label' => __( 'Add Image', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [],
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
		$settings = $this->get_settings_for_display();
        include __DIR__ . '/blocks/card.php';
	}
}
