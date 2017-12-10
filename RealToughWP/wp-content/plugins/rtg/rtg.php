<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              realtoughcandy.com
 * @since             1.0.0
 * @package           Rtg
 *
 * @wordpress-plugin
 * Plugin Name:       RealToughGradient
 * Plugin URI:        https://realtoughcandy.github.io/WPPlugin/
 * Description:       This plugin does some crazy stuff that is pretty crazy. Dynamically add new images sizes. Customize the login page. Optionally clean up the head section. Optionally remove injected CSS for the comment widget. Optionally remove injected CSS for galleries. Optionally add a Post slug to the body class. Optionally load jQuery from a CDN. . .And many other useful options!
 * Version:           1.0.0
 * Author:            RealToughCandy
 * Author URI:        realtoughcandy.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       rtg
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently pligin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rtg-activator.php
 */
function activate_rtg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rtg-activator.php';
	Rtg_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rtg-deactivator.php
 */
function deactivate_rtg() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rtg-deactivator.php';
	Rtg_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_rtg' );
register_deactivation_hook( __FILE__, 'deactivate_rtg' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rtg.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_rtg() {

	$plugin = new Rtg();
	$plugin->run();

}
run_rtg();
