<?php
/**
 * Plugin Name:     Pitchfork People
 * Plugin URI:      https://github.com/asuengineering/pitchfork-people
 * Description:     Build a directory of people that is automatically maintained by data from ASU Search.
 * Author:          Steve Ryan
 * Author URI:      https://engineering.asu.edu
 * Text Domain:     pitchfork_people
 * Version:         0.1
 *
 * @package         pitchfork_people
 *
 * GitHub Plugin URI: https://github.com/asuengineering/pitchfork-people
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Variable for root directory of this plugin.
define( 'PITCHFORK_PEOPLE_BASE_PATH', plugin_dir_path( __FILE__ ) );

// Function: Activate.
// Function: Deactivate.
// Function: Execute plugin.

// TGM Plugin Activation Script. Checks for Advanced Custom Fields.
require_once PITCHFORK_PEOPLE_BASE_PATH . '/tgmpa/class-tgm-plugin-activation.php';
require_once PITCHFORK_PEOPLE_BASE_PATH . '/tgmpa/dependency-check.php';

// Enqueue scripts.
require_once PITCHFORK_PEOPLE_BASE_PATH . '/inc/enqueue-scripts.php';

// Create CPT for Pitchfork People
require_once PITCHFORK_PEOPLE_BASE_PATH . '/inc/cpt-people.php';

// ACF configurations.
// require_once PITCHFORK_PEOPLE_BASE_PATH . '/inc/acf-config.php';
// require_once PITCHFORK_PEOPLE_BASE_PATH . '/inc/acf-register-blocks.php';

// https://www.advancedcustomfields.com/resources/acf-update_value/
// function pfpeople_lookup_from_search( $value, $post_id, $field, $original ) {
// 	do_action('qm/debug', $value);
// 	return $value;
// }
// add_filter('acf/validate_value/name=pfpeople_asurite', 'pfpeople_lookup_from_search', 10, 4);

// function pfpeople_lookup_from_search() {
//     ?>
//     <script type="text/javascript">
//     jQuery(document).ready(function ($) {

// 		$(".acf-field-63d4433b4c456 input").focusout(function(){

// 			console.log( "Steve: " + $(this).val() );

// 			var value = $(this).val();
// 			var asuSearchAPI = "https://search.asu.edu/api/v1/webdir-profiles/faculty-staff?size=1&query=" + value;
// 			$.getJSON( asuSearchAPI, {
// 				format: "json"
// 			})
// 			.done(function( data ) {
// 				console.log(data);
// 			});
// 		})

//     });
//     </script>
//     <?php
// }

// add_action('acf/input/admin_footer', 'pfpeople_lookup_from_search');