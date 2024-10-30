<?php
/*
Plugin Name: Custom Accordion
Plugin URI: https://imajade.com/
Description: A custom accordion shortcode for WordPress.
Version: 1.3.0
Author: Mouner Imajade
Author URI: https://imajade.com
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function ca_accordion_shortcode($atts, $content = null) {
    $output = '<div class="ca-accordion">';
    $output .= do_shortcode($content);
    $output .= '</div>';
    return $output;
}
add_shortcode('ca-accordion', 'ca_accordion_shortcode');

function ca_accordion_item_shortcode($atts, $content = null) {
    $title = isset($atts['title']) ? esc_html($atts['title']) : '';
    $output = '<div class="ca-accordion-item">';
    $output .= '<div class="ca-accordion-header">';
    $output .= '<h3 class="ca-accordion-title">' . $title . '</h3>';
    $output .= '<span class="ca-accordion-toggle-sign">&#43;</span>';
    $output .= '</div>';
    $output .= '<div class="ca-accordion-content">' . do_shortcode($content) . '</div>';
    $output .= '</div>';
    return $output;
}
add_shortcode('ca-accordion-item', 'ca_accordion_item_shortcode');

function ca_register_scripts() {
    wp_register_style(
        'ca-accordion-style',
        plugins_url('assets/css/accordion.min.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'assets/css/accordion.min.css')
    );
    wp_register_script(
        'ca-accordion-script',
        plugins_url('assets/js/accordion.min.js', __FILE__),
        array('jquery'),
        filemtime(plugin_dir_path(__FILE__) . 'assets/js/accordion.min.js'),
        true
    );
}
add_action('init', 'ca_register_scripts');

function ca_enqueue_scripts() {
    global $post;
    // Check if it's a singular post or page
    if (is_singular() && isset($post->post_content)) {
        // Checking the post content and excerpt for the shortcode
        $has_accordion_shortcode = has_shortcode($post->post_content, 'ca-accordion') ||
            has_shortcode($post->post_content, 'ca-accordion-item') ||
            has_shortcode($post->post_excerpt, 'ca-accordion') ||
            has_shortcode($post->post_excerpt, 'ca-accordion-item');
        if ($has_accordion_shortcode) {
            ca_enqueue_accordion_scripts();
        }
    }
    // Check if it's a widget
    if (is_active_widget(false, false, 'text', true)) {
        $widget_content = get_option('widget_text');
        foreach ($widget_content as $widget) {
            if (isset($widget['text']) && (has_shortcode($widget['text'], 'ca-accordion') || has_shortcode($widget['text'], 'ca-accordion-item'))) {
                ca_enqueue_accordion_scripts();
                break;
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'ca_enqueue_scripts');

function ca_enqueue_accordion_scripts() {
    wp_enqueue_style(
        'ca-accordion-style',
        plugins_url('assets/css/accordion.min.css', __FILE__),
        array(),
        filemtime(plugin_dir_path(__FILE__) . 'assets/css/accordion.min.css')
    );
    wp_enqueue_script(
        'ca-accordion-script',
        plugins_url('assets/js/accordion.min.js', __FILE__),
        array('jquery'),
        filemtime(plugin_dir_path(__FILE__) . 'assets/js/accordion.min.js'),
        true
    );
}