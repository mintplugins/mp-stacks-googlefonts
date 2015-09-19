<?php
/**
 * This file contains the enqueue scripts function for the MP Stacks + GoogleFonts Addon plugin
 *
 * @since 1.0.0
 *
 * @package    MP Stacks GoogleFonts
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2015, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */

/**
 * Enqueue Admin CSS for Ajax
 *
 * @since    1.0.0
 * @link     http://mintplugins.com/doc/
 * @see      function_name()
 * @param  	 array $stylesheets An array containing the urls for each stylesheet as a key>value pair. Each key is what you'd use as the 'handle' in a wp_enqueue_scripts
 * @return   array $stylesheets The incoming array with our additional stylesheet urls added. These will be added to the Brick Editor <head> upon ajax completion.
 */
function mp_stacks_googlefonts_ajax_admin_css( $stylesheets, $metabox_id ){
	
	if ( $metabox_id == 'mp_stacks_singletext_metabox' || $metabox_id == 'mp_stacks_second_singletext_metabox' || $metabox_id == 'mp_stacks_text_metabox' ){
	
		//Enqueue Admin CSS
		$stylesheets['mp_stacks_googlefonts_admin_css'] = plugins_url( 'css/mp-stacks-googlefonts-admin.css?ver=' . MP_STACKS_GOOGLEFONTS_VERSION, dirname( __FILE__ ) );
		
	}
	
	return $stylesheets;

}
add_filter( 'mp_core_metabox_ajax_admin_css_stylesheets', 'mp_stacks_googlefonts_ajax_admin_css', 10, 2 );