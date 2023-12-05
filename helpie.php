<?php

/**
 * The main plugin file.
 *
 *
 * @link              http://helpiewp.com/
 * @since             1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:       Helpie - WordPress KB Wiki Plugin
 * Plugin URI:        http://helpiewp.com/
 * Description:       Helpie is a WordPress KB Wiki plugin.
 * Version:           1.9.5
 * Author:            20script
 * Author URI:        http://www.20script.ir
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pauple-helpie
 * Domain Path:       /languages
 */
if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

if (!defined('HELPIE_PLUGIN_VERSION')) {
    define('HELPIE_PLUGIN_VERSION', '1.9.5');
}

if (!defined('HELPIE_PLUGIN_FILE_PATH')) {
    define('HELPIE_PLUGIN_FILE_PATH', __FILE__);
}

if (!defined('HELPIE_PLUGIN_PATH')) {
    define('HELPIE_PLUGIN_PATH', plugin_dir_path(__FILE__));
}

if (!defined('HELPIE_DIR_PATH')) {
    define('HELPIE_DIR_PATH', plugin_dir_path(__FILE__) . '../');
}

if (!defined('HELPIE_PLUGIN_URL')) {
    define('HELPIE_PLUGIN_URL', plugin_dir_url(__FILE__));
}

if (!defined('HELPIE_DOMAIN')) {
    define('HELPIE_DOMAIN', 'pauple-helpie');
}

if (!defined('HELPIE_POST_TYPE')) {
    define('HELPIE_POST_TYPE', 'pauple_helpie');
}

if (!defined('HELPIE_TAXONOMY')) {
    define('HELPIE_TAXONOMY', 'helpdesk_category');
}

define('HELPIE_KB_VENDOR', 'envato');


if (!defined('HELPIE_MODE')) {
    define('HELPIE_MODE', 'live_mode');
}

if (!defined('HELPIE_FOLDER_NAME')) {
    define('HELPIE_FOLDER_NAME', wp_basename(__DIR__));
}

/* Translation */
function pauple_helpie_load_textdomain()
{
    load_plugin_textdomain(HELPIE_DOMAIN, false, basename(dirname(__FILE__)) . '/languages');
}

add_action('plugins_loaded', 'pauple_helpie_load_textdomain');

if (!class_exists('\Helpie_Kb')) {
    class Helpie_Kb
    {
        public function __construct()
        {

            require HELPIE_PLUGIN_PATH . 'includes/plugin.php';
        }
    } // END CLASS
}

$helpie_kb = new Helpie_Kb();

// add_action('plugins_loaded', array($helpie_kb, 'run_plugin_name' ));
