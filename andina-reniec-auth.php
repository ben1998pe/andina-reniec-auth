<?php
/**
 * Plugin Name: Andina RENIEC Auth
 * Description: Autenticación con RENIEC - IDAAS Perú
 * Version: 1.0
 * Author: ben1998pe
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ANDINA_RENIEC_AUTH_PATH', plugin_dir_path(__FILE__));
define('ANDINA_RENIEC_AUTH_URL', plugin_dir_url(__FILE__));

// SDK autoloader (composer)
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    require_once __DIR__ . '/vendor/autoload.php';
}

// Includes
require_once ANDINA_RENIEC_AUTH_PATH . 'inc/settings-page.php';
require_once ANDINA_RENIEC_AUTH_PATH . 'inc/auth-reniec.php';

// Estilos
function andina_reniec_enqueue_styles() {
    wp_enqueue_style('andina-reniec-style', ANDINA_RENIEC_AUTH_URL . 'assets/style.css');
}
add_action('wp_enqueue_scripts', 'andina_reniec_enqueue_styles');