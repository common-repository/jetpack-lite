<?php
/*
 * Plugin Name: Jetpack Lite
 * Plugin URI: http://wordpress.org/extend/plugins/jetpack-lite/
 * Description: Disables all Jetpack modules except for Stats and WP.me Shortlinks modules. Jetpack is required!
 * Author: Samuel Aguilera
 * Version: 3.0.3
 * Author URI: http://www.samuelaguilera.com
 * License: GPL2+
 */

/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License version 2 as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function jetpack_lite_init() {

	if ( class_exists('Jetpack', false ) ) {

			function leave_only_jetpackLite_modules ( $modules ) {
			    $jetpackLite_modules = array();
			    $jetpackLite_modules['stats'] = $modules['stats'];
			    $jetpackLite_modules['shortlinks'] = $modules['shortlinks'];
			    
			    return $jetpackLite_modules;
			}

			add_filter( 'jetpack_get_available_modules', 'leave_only_jetpackLite_modules' );

			function activate_only_jetpackLite_modules() {
			    return array( 'stats', 'shortlinks' );
			}

			add_filter( 'jetpack_get_default_modules', 'activate_only_jetpackLite_modules' );		

			// Turn off Jetpack Ads
			add_filter( 'jetpack_just_in_time_msgs', '__return_false', 99 );

	} else {

			function no_jetpack_found() {
			    ?>
			    <div class="error">
			        <p><?php _e( '<b>This version of Jetpack Lite requires <a href="http://wordpress.org/plugins/jetpack/" title="Jetpack">Jetpack</a>!</b> Please <b>install and activate Jetpack</b>.', 'jetpack-lite' ); ?></p>
			    </div>
			    <?php
			}
			add_action( 'admin_notices', 'no_jetpack_found' );

	}

}

add_action( 'plugins_loaded', 'jetpack_lite_init' );
