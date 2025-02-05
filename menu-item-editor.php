<?php
/**
 *
 * @link              https://www.jbdev.co.uk
 * @since             1.0.0
 * @package           Menu_Item_Editor
 *
 * @wordpress-plugin
 * Plugin Name:       Menu Item Editor
 * Plugin URI:        
 * Description:       Within the Menu Editor tab you will be able to hide each of the default WordPress menu items to your liking.
 * Version:           1.0.0
 * Author:            Jon Bennett
 * Author URI:        https://www.jbdev.co.uk
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       menu-item-editor
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MENU_ITEM_EDITOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-menu-item-editor-activator.php
 */
function activate_menu_item_editor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-menu-item-editor-activator.php';
	Menu_Item_Editor_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-menu-item-editor-deactivator.php
 */
function deactivate_menu_item_editor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-menu-item-editor-deactivator.php';
	Menu_Item_Editor_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_menu_item_editor' );
register_deactivation_hook( __FILE__, 'deactivate_menu_item_editor' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-menu-item-editor.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_menu_item_editor() {

	$plugin = new Menu_Item_Editor();
	$plugin->run();

}
run_menu_item_editor();
