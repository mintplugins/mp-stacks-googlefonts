<?php
/**
 * Add to the Array which stores all info about the new metabox
 *
 */
function mp_stacks_text1_google_font_metabox_items($items_array) {
	
	$counter = 0;
	
	//Loop through passed-in metabox fields
	foreach ( $items_array as $item ){
		
		//If the current loop is for the brick_bg_image
		if ($item['field_id'] == 'brick_line_1_font_size'){
			
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
	
		//Add new option to array  for main image lightbox
		array_push($return_items_array,
		  array(
				'field_id'			=> 'brick_line_1_google_font',
				'field_title' 	=> __( 'Google Font Name<br />', 'mp_stacks'),
				'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div  style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
				'field_type' 	=> 'textbox',
				'field_value' => '',
				'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
				'field_class' => 'mp_brick_text_option'
			)
		);
		
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
		if ($item['field_id'] == 'brick_line_2_font_size'){
			
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
	
		//Add new option to array  for main image lightbox
		array_push($return_items_array,
		  array(
				'field_id'			=> 'brick_line_2_google_font',
				'field_title' 	=> __( 'Google Font Name<br />', 'mp_stacks'),
				'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
				'field_type' 	=> 'textbox',
				'field_value' => '',
				'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
				'field_class' => 'mp_brick_text_option'
			)
		);
		
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
	
		//Add new option to array  for main image lightbox
		array_push($return_items_array,
		  array(
				'field_id'			=> 'brick_second_line_1_google_font',
				'field_title' 	=> __( 'Google Font Name<br />', 'mp_stacks'),
				'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div  style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
				'field_type' 	=> 'textbox',
				'field_value' => '',
				'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
				'field_class' => 'mp_brick_text_option'
			)
		);
		
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
	
		//Add new option to array  for main image lightbox
		array_push($return_items_array,
		  array(
				'field_id'			=> 'brick_second_line_2_google_font',
				'field_title' 	=> __( 'Google Font Name<br />', 'mp_stacks'),
				'field_description' 	=> 'Enter the name of the Google Font to use for this Text <br /><a class="button" href="https://www.google.com/fonts" target="_blank">Browse Google Fonts<div style="margin-top: 3.3px; margin-left: 5px;" class="dashicons dashicons-share-alt2"></div></a>',
				'field_type' 	=> 'textbox',
				'field_value' => '',
				'field_placeholder' => __( 'Google Font Name', 'mp_stacks_googlefonts' ),
				'field_class' => 'mp_brick_text_option'
			)
		);
		
		foreach ($options_after as $option){
			//Add all fields that came after
			array_push($return_items_array, $option);
		}
		
	}
		
    return $return_items_array;
}
add_filter('mp_stacks_second_text_items_array','mp_stacks_second_text2_google_font_metabox_items');

