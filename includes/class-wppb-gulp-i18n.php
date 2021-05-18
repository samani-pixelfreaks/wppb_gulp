<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://pixelfreaks.agency/
 * @since      1.0.0
 *
 * @package    Wppb_Gulp
 * @subpackage Wppb_Gulp/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wppb_Gulp
 * @subpackage Wppb_Gulp/includes
 * @author     Saeid Samani <saeid.samani@pixelfreaks.agency>
 */
class Wppb_Gulp_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wppb-gulp',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
