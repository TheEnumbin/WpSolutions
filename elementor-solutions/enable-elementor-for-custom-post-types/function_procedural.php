<?php


// Hook called when the plugin is activated.
register_activation_hook( 'plugin-name', 'function_called_on_activation' );

/**
 * This function is called on plugin activation.
 *
 * @return void
 */
function function_called_on_activation() {
	function_elem_cpt_support();
}

/**
 * Function_elem_cpt_support adds cpt support for elementor.
 *
 * @return void
 */
function function_elem_cpt_support() {
	$cpt_support = get_option( 'elementor_cpt_support' );

	if ( ! $cpt_support ) {

		// First check if the option is not available already in the database. It not then create the array with all default post types including yours and save the settings.

		$cpt_support = array( 'page', 'post', 'your_post_type' );
		update_option( 'elementor_cpt_support', $cpt_support );
	} elseif ( ! in_array( 'your_post_type', $cpt_support ) ) {

		// If the option is available then just append the array and update the settings.

		$cpt_support[] = 'your_post_type';
		update_option( 'elementor_cpt_support', $cpt_support );
	}
}

