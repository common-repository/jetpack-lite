<?php
/*
 * Plugin Name: Jetpack Lite
 * Plugin URI: http://wordpress.org/extend/plugins/jetpack-lite/
 * Description: Disables all Jetpack modules except for Stats and WP.me Shortlinks modules. Jetpack is required!
 * Author: Samuel Aguilera
 * Version: 3.0
 * Author URI: http://www.samuelaguilera.com
 * License: GPL2+
 */

if ( is_plugin_active( 'jetpack/jetpack.php' ) ) {

		function Leave_only_JetpackLite_modules ( $modules ) {
		    $return = array();
		    $return['stats'] = $modules['stats'];
		    $return['shortlinks'] = $modules['shortlinks'];
		    return $return;
		}

		add_filter( 'jetpack_get_available_modules', 'Leave_only_JetpackLite_modules' );

		function Activate_only_JetpackLite_modules() {
		    return array( 'stats', 'shortlinks' );
		}

		add_filter( 'jetpack_get_default_modules', 'Activate_only_JetpackLite_modules' );

		function Make_JetpackLite_Menu_Magic() {

			// First removing Jetpack subpages and menu
			remove_submenu_page( 'jetpack', 'stats' );
			remove_submenu_page( 'jetpack', 'akismet-key-config' );
			remove_submenu_page( 'jetpack', 'akismet-stats-display' );
			remove_menu_page ('jetpack');

			// Now adds subpages where they used to be without Jetpack. NOTE: Pending to check a warning
			add_options_page( 'Jetpack', 'Jetpack', 'manage_options', 'jetpack', 'Jetpack::admin_page()', '' );

		    // Workaround for Akismet menu if plugin is active
		    if ( function_exists( 'akismet_admin_init' ) ) {
		    	add_submenu_page('plugins.php', __('Akismet Configuration'), __('Akismet Configuration'), 'manage_options', 'akismet-key-config', 'akismet_conf');
		    	add_submenu_page('index.php', __('Akismet Stats'), __('Akismet Stats'), 'manage_options', 'akismet-stats-display', 'akismet_stats_display');
		    }	

		}

		//add_action( 'admin_menu', 'Make_JetpackLite_Menu_Magic', 100000 );

}

?>