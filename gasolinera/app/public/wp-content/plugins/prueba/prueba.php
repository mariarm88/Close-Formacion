<?php

/**
 * Plugin Name: Pluging prueba
 * Plugin URI:  localhost
 * Description: Esto es una prueba de un plugin.
 * Version:     1.0.0
 * Author:      Mari Romero
 * Author URI:  Author URL
 * Text Domain: demo
 * Domain Path: /languages
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * @package     Demo
 * @author      Mari Romero
 * @copyright   2023
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 *
 * Aquí el prefijo en minúsculas, 4 caracteres
 * Prefix:      decl
 */

defined('ABSPATH') || exit;

// Prefijo en MAYÚSCULAS para las constantes
define('DECL_VERSION', '1.0.0');
define('DECL_PLUGIN', __FILE__);
define('DECL_PLUGIN_URL', plugin_dir_url(__FILE__));
define('DECL_PLUGIN_PATH', plugin_dir_path(__FILE__));

// Prefijo en minúsculas
add_action('plugins_loaded', 'decl_plugin_init');
/**
 * Load localization files
 *
 * @return void
 */

// Prefijo en minúsculas
function decl_plugin_init()
{
	load_plugin_textdomain('demo', false, dirname(plugin_basename(__FILE__)) . '/languages');
}

// wp_enqueue_script para agregar un archivo
// Include files.
 require_once DECL_PLUGIN_PATH . 'includes/theme/post-types/servicios.php';
 require_once DECL_PLUGIN_PATH . 'includes/theme/post-types/combustibles.php';
