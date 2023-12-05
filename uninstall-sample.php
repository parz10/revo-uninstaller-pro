<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       http://pauple.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// delete_option( 'helpie_core_options_main' );
//
// $roles = get_editable_roles();
// foreach ($roles as $role_key => $value) {
//     $option_name = $role_key.'_allowed_helpie_terms';
//     delete_option($option_name);
// }
//
// delete_option( 'helpie_components_options' );
//
// $post_id_del     = get_option( 'helpdesk_search_page_id' );
// wp_delete_post( $post_id_del );
//
// delete_option( 'helpdesk_search_page_id' );
