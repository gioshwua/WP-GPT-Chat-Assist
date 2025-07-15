<?php
/**
 * Plugin Name: WP-PromptBridge-AI
 * Plugin URI:https://github.com/gioshwua/WP-PromptBridge-AI
 * Description: Adds an AI chat box to your WordPress site using a shortcode and secure backend API calls. Supports OpenAI, Hugging Face, and OpenRouter.
 * Version: 1.1
 * Author: Kenneth Joshua Reaño
 * Author URI: https://github.com/gioshwua
 * License: MIT
 * License URI: https://opensource.org/licenses/MIT
 * Text Domain: ai-shortcode-chat
 * Domain Path: /languages
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}


define('AI_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('AI_PLUGIN_URL', plugin_dir_url(__FILE__));


add_action('plugins_loaded', 'ai_plugin_init');

function ai_plugin_init() {
    require_once AI_PLUGIN_DIR . 'admin-settings.php';
    require_once AI_PLUGIN_DIR . 'frontend-ui.php';

   
    add_action('wp_enqueue_scripts', 'ai_plugin_enqueue_assets');
}