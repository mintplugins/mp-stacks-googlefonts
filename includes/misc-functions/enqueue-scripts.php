<?php
/**
 * This file contains the enqueue scripts function for the MP Stacks + GoogleFonts Addon plugin
 *
 * @since 1.0.0
 *
 * @package    MP Stacks GoogleFonts
 * @subpackage Functions
 *
 * @copyright  Copyright (c) 2014, Mint Plugins
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @author     Philip Johnston
 */


/**
 * Enqueue css and js for admin
 *
 */
function mp_stacks_googlefonts_admin_enqueue_scripts(){
	
	//Enqueue Admin Google Fonts css
	wp_enqueue_style( 'mp_stacks_googlefonts_admin_css', plugins_url( 'css/mp-stacks-googlefonts-admin.css', dirname( __FILE__ ) ) );

}
add_action( 'admin_enqueue_scripts', 'mp_stacks_googlefonts_admin_enqueue_scripts' );