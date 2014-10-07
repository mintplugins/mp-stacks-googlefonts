<?php 
/**
 * Add Google Font Text Area 1 options to the all_mp_stacks_meta array for MP Stacks
 */
function mp_stacks_googlefonts_add_all_mp_stacks_meta( $all_mp_stacks_meta ){
	
	global $global_google_font_option_for_line_1;
	global $global_google_font_option_for_line_2;
	global $global_google_font_option_for_second_line_1;
	global $global_google_font_option_for_second_line_2;
	global $mp_stacks_googlefonts_items_array;
	
	if ( !is_array( $mp_stacks_googlefonts_items_array ) ){
		$mp_stacks_googlefonts_items_array = array();	
	}
	
	//Merge our global meta options
	$google_font_options = array_merge( $global_google_font_option_for_line_1, $global_google_font_option_for_line_2, $global_google_font_option_for_second_line_1, $global_google_font_option_for_second_line_2, $mp_stacks_googlefonts_items_array );
	
	//If mp_stack_googlefonts hasn't been added to the all plugins options array yet
	if ( empty( $all_mp_stacks_meta['mp_stacks_googlefonts'] ) ){
		
		//Add it. For the title we use plugin_title_4325819681 so that if a meta key happens to be 'plugin'title' they don't get lost. 
		//4325819681 is just a random string to make this unique
		$all_mp_stacks_meta['mp_stacks_googlefonts'] = array('plugin_title_4325819681' => 'MP Stacks + GoogleFonts');
	}
	
	//Loop through each field and add it to the mp_stacks_googlefonts array of options
	foreach ( $google_font_options as $meta_option ){
		//Add all of these options to the mp_stacks_googlefonts options array
		array_push( $all_mp_stacks_meta['mp_stacks_googlefonts'], $meta_option );	
	}
	
	return $all_mp_stacks_meta;
}
add_filter( 'mp_stacks_all_mp_stacks_meta', 'mp_stacks_googlefonts_add_all_mp_stacks_meta' );