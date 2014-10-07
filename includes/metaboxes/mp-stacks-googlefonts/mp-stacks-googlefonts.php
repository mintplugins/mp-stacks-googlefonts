<?php
/**
 * Overall Google Font metabox for the brick
 *
 */
function mp_stacks_overall_google_fonts_metabox(){	
	/**
	 * Array which stores all info about the new metabox
	 *
	 */
	$mp_stacks_googlefonts_add_meta_box = array(
		'metabox_id' => 'mp_brick_overall_google_fonts_metabox', 
		'metabox_title' => __( 'Brick\'s Google Font', 'mp_stacks'), 
		'metabox_posttype' => 'mp_brick', 
		'metabox_context' => 'side', 
		'metabox_priority' => 'default' 
	);
	
	/**
	 * Array which stores all info about the options within the metabox
	 *
	 */
	$mp_stacks_googlefonts_items_array = array(
		array(
			'field_id'			=> 'brick_overall_google_font',
			'field_title' 	=> __( 'Google Font Name', 'mp_stacks'),
			'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div  style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
			'field_type' 	=> 'textbox',
			'field_value' => '',
			'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
		)
	);
	
	
	/**
	 * Custom filter to allow for add-on plugins to hook in their own data for add_meta_box array
	 */
	$mp_stacks_googlefonts_add_meta_box = has_filter('mp_stacks_googlefonts_meta_box_array') ? apply_filters( 'mp_stacks_googlefonts_meta_box_array', $mp_stacks_googlefonts_add_meta_box) : $mp_stacks_googlefonts_add_meta_box;
	
	//Globalize the and populate mp_stacks_googlefonts_items_array (do this before filter hooks are run)
	global $global_mp_stacks_googlefonts_items_array;
	$global_mp_stacks_googlefonts_items_array = $mp_stacks_googlefonts_items_array;
	
	/**
	 * Custom filter to allow for add on plugins to hook in their own extra fields 
	 */
	$mp_stacks_googlefonts_items_array = has_filter('mp_stacks_googlefonts_items_array') ? apply_filters( 'mp_stacks_googlefonts_items_array', $mp_stacks_googlefonts_items_array) : $mp_stacks_googlefonts_items_array;
	
	
	/**
	 * Create Metabox class
	 */
	global $mp_stacks_meta_box;
	$mp_stacks_meta_box = new MP_CORE_Metabox($mp_stacks_googlefonts_add_meta_box, $mp_stacks_googlefonts_items_array);
}
add_action('mp_brick_metabox', 'mp_stacks_overall_google_fonts_metabox');

/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_text1_google_font_metabox_items($items_array) {
	
	$counter = 0;
	
	//Loop through passed-in metabox fields
	foreach ( $items_array as $item ){
		
		//If the current loop is for the brick_bg_image
		if ($item['field_id'] == 'brick_line_1_line_height'){
			
			//Split the array after the array with the field containing 'brick_bg_image'
			$options_prior = array_slice($items_array, 0, $counter+1, true);
			$options_after = array_slice($items_array, $counter+1);
			
			break;
						
		}
		
		//Increment Counter
		$counter = $counter + 1;
	
	}
	
	if ( !empty($options_prior) ){
		
		//Add the first options to the return array
		$return_items_array = $options_prior;
		
		$google_font_option_for_line_1 = array(
			'field_id'			=> 'brick_line_1_google_font',
			'field_title' 	=> __( 'Google Font Name', 'mp_stacks'),
			'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div  style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
			'field_type' 	=> 'textbox',
			'field_value' => '',
			'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
			'field_container_class' => 'mp_brick_text_option',
			'field_repeater' => 'mp_stacks_text_content_type_repeater'
		);
		
		//Globalize the and populate the mp_stacks_googlefonts_items_array (do this before filter hooks are run)
		global $global_google_font_option_for_line_1;
		$global_google_font_option_for_line_1 = $google_font_option_for_line_1;
	
		//Add new option to array  for main image lightbox
		array_push($return_items_array, $google_font_option_for_line_1);
		
		foreach ($options_after as $option){
			//Add all fields that came after
			array_push($return_items_array, $option);
		}
		
	}
		
    return $return_items_array;
}
add_filter('mp_stacks_text_items_array','mp_stacks_text1_google_font_metabox_items');

/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_text2_google_font_metabox_items($items_array) {
	
	$counter = 0;
	
	//Loop through passed-in metabox fields
	foreach ( $items_array as $item ){
		
		//If the current loop is for the brick_bg_image
		if ($item['field_id'] == 'brick_line_2_line_height'){
			
			//Split the array after the array with the field containing 'brick_bg_image'
			$options_prior = array_slice($items_array, 0, $counter+1, true);
			$options_after = array_slice($items_array, $counter+1);
			
			break;
						
		}
		
		//Increment Counter
		$counter = $counter + 1;
	
	}
	
	if ( !empty($options_prior) ){
		
		//Add the first options to the return array
		$return_items_array = $options_prior;
		
		$google_font_option_for_line_2 = array(
			'field_id'			=> 'brick_line_2_google_font',
			'field_title' 	=> __( 'Google Font Name', 'mp_stacks'),
			'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
			'field_type' 	=> 'textbox',
			'field_value' => '',
			'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
			'field_container_class' => 'mp_brick_text_option',
			'field_repeater' => 'mp_stacks_text_content_type_repeater'
		);
			
		//Globalize the and populate the mp_stacks_googlefonts_items_array (do this before filter hooks are run)
		global $global_google_font_option_for_line_2;
		$global_google_font_option_for_line_2 = $google_font_option_for_line_2;
	
		//Add new option to array  for main image lightbox
		array_push($return_items_array,	$google_font_option_for_line_2 );
		
		foreach ($options_after as $option){
			//Add all fields that came after
			array_push($return_items_array, $option);
		}
		
	}
		
    return $return_items_array;
}
add_filter('mp_stacks_text_items_array','mp_stacks_text2_google_font_metabox_items');

/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_second_text1_google_font_metabox_items($items_array) {
	
	$counter = 0;
	
	//Loop through passed-in metabox fields
	foreach ( $items_array as $item ){
		
		//If the current loop is for the brick_bg_image
		if ($item['field_id'] == 'brick_second_line_1_font_size'){
			
			//Split the array after the array with the field containing 'brick_bg_image'
			$options_prior = array_slice($items_array, 0, $counter+1, true);
			$options_after = array_slice($items_array, $counter+1);
			
			break;
						
		}
		
		//Increment Counter
		$counter = $counter + 1;
	
	}
	
	if ( !empty($options_prior) ){
		
		//Add the first options to the return array
		$return_items_array = $options_prior;
		
		$google_font_option_for_second_line_1 = array(
			'field_id'			=> 'brick_second_line_1_google_font',
			'field_title' 	=> __( 'Google Font Name', 'mp_stacks'),
			'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div  style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
			'field_type' 	=> 'textbox',
			'field_value' => '',
			'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
			'field_container_class' => 'mp_brick_text_option'
		);
			
		//Globalize the and populate the mp_stacks_googlefonts_items_array (do this before filter hooks are run)
		global $global_google_font_option_for_second_line_1;
		$global_google_font_option_for_second_line_1 = $google_font_option_for_second_line_1;
		
		//Add new option to array  for main image lightbox
		array_push($return_items_array, $google_font_option_for_second_line_1 );
		
		foreach ($options_after as $option){
			//Add all fields that came after
			array_push($return_items_array, $option);
		}
		
	}
		
    return $return_items_array;
}
add_filter('mp_stacks_second_text_items_array','mp_stacks_second_text1_google_font_metabox_items');

/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_second_text2_google_font_metabox_items($items_array) {
	
	$counter = 0;
	
	//Loop through passed-in metabox fields
	foreach ( $items_array as $item ){
		
		//If the current loop is for the brick_bg_image
		if ($item['field_id'] == 'brick_second_line_2_font_size'){
			
			//Split the array after the array with the field containing 'brick_bg_image'
			$options_prior = array_slice($items_array, 0, $counter+1, true);
			$options_after = array_slice($items_array, $counter+1);
			
			break;
						
		}
		
		//Increment Counter
		$counter = $counter + 1;
	
	}
	
	if ( !empty($options_prior) ){
		
		//Add the first options to the return array
		$return_items_array = $options_prior;
	
		$google_font_option_for_second_line_2 = array(
				'field_id'			=> 'brick_second_line_2_google_font',
				'field_title' 	=> __( 'Google Font Name', 'mp_stacks'),
				'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
				'field_type' 	=> 'textbox',
				'field_value' => '',
				'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
				'field_container_class' => 'mp_brick_text_option'
			);
			
		//Globalize the and populate the mp_stacks_googlefonts_items_array (do this before filter hooks are run)
		global $global_google_font_option_for_second_line_2;
		$global_google_font_option_for_second_line_2 = $google_font_option_for_second_line_2;
		
		//Add new option to array  for main image lightbox
		array_push($return_items_array, $google_font_option_for_second_line_2 );
		
		foreach ($options_after as $option){
			//Add all fields that came after
			array_push($return_items_array, $option);
		}
		
	}
		
    return $return_items_array;
}
add_filter('mp_stacks_second_text_items_array','mp_stacks_second_text2_google_font_metabox_items');

