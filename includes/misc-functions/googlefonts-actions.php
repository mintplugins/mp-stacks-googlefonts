<?php 

/**
 * Create objects of the MP Core Google Font class
 */
function mp_stacks_googlefonts_class_for_text_content_types( $css_output, $post_id ){
	
	global $mp_stacks_footer_inline_css, $mp_core_font_families;
	
	//Default settings for the MP Core Google Font Class
	$mp_core_google_font_args = array( 'echo_google_font_css' => false, 'wrap_in_style_tags' => false );
	
	//Get Google Font name for overall Brick
	$bricks_overall_google_font_name = get_post_meta( $post_id, 'brick_overall_google_font', true);
	
	//If a font has been entered for the overall brick
	if ( !empty( $bricks_overall_google_font_name ) ){
		
		//Check if a font extra (weight) has been selected and add it if so.
		$bricks_overall_google_font_weight = get_post_meta( $post_id, 'brick_overall_google_font_weight_style', true);
		$bricks_overall_google_font_weight_style = !empty($bricks_overall_google_font_weight) ? ':' . $bricks_overall_google_font_weight : NULL;
		$bricks_overall_google_font_name = $bricks_overall_google_font_name . $bricks_overall_google_font_weight_style;
					
		//Load the Google Font using the Google Font Class in MP Core
		new MP_CORE_Font( $bricks_overall_google_font_name, $bricks_overall_google_font_name, $mp_core_google_font_args );
		$mp_stacks_footer_inline_css[$bricks_overall_google_font_name] = $mp_core_font_families[$bricks_overall_google_font_name];
	
	}
	
	$first_content_type = mp_core_get_post_meta( $post_id, 'brick_first_content_type' );
	$second_content_type = mp_core_get_post_meta( $post_id, 'brick_second_content_type' );
	
	//If the first or second content-type is set to be singletext
	if ( $first_content_type == 'singletext' || $second_content_type == 'singletext'){
		
		//Get singletext repeater
		$singletext_areas_vars = get_post_meta($post_id, 'mp_stacks_singletext_content_type_repeater', true);	
		
		$repeat_count = 0;
			
		//Loop through each text area
		if ( is_array( $singletext_areas_vars ) ){
			foreach( $singletext_areas_vars as $text_area_vars ){
				
				//Get Google Font name for this text area
				$singletext_google_font_name = isset($text_area_vars['brick_text_google_font']) ? $text_area_vars['brick_text_google_font'] : NULL;
				
				//If a font name has been entered
				if ( !empty( $singletext_google_font_name ) ){
					
					//Check if a font extra (weight) has been selected and add it if so.
					$singletext_google_font_weight_style = isset($text_area_vars['brick_text_google_font_weight_style']) && !empty( $text_area_vars['brick_text_google_font_weight_style'] ) ? ':' . $text_area_vars['brick_text_google_font_weight_style'] : NULL;
					$singletext_google_font_name = $singletext_google_font_name . $singletext_google_font_weight_style;
				
					//Load the Google Font using the Google Font Class in MP Core
					new MP_CORE_Font( $singletext_google_font_name, $singletext_google_font_name, $mp_core_google_font_args );
					$mp_stacks_footer_inline_css[$singletext_google_font_name] = $mp_core_font_families[$singletext_google_font_name];
				
				}
				
				$repeat_count = $repeat_count + 1;
				
			}
		}
	}
	
	//If the first or second content-type is set to be second_singletext
	if ( $first_content_type == 'second_text' || $second_content_type == 'second_text'){
		
		//Get singletext repeater for 'second_text' add on
		$second_singletext_areas_vars = get_post_meta($post_id, 'mp_stacks_second_singletext_content_type_repeater', true);	
		
		$repeat_count = 0;
			
		//Loop through each text area
		if ( is_array( $second_singletext_areas_vars ) ){
			foreach( $second_singletext_areas_vars as $text_area_vars ){
				
				//Get Google Font name for text line 1
				$second_singletext_google_font_name = isset($text_area_vars['brick_second_text_google_font']) ? $text_area_vars['brick_second_text_google_font'] : NULL;
				
				//If a font has been entered for this text area
				if ( !empty( $second_singletext_google_font_name ) ){
					
					//Check if a font extra (weight) has been selected and add it if so.
					$second_singletext_google_font_weight_style = isset($text_area_vars['brick_second_text_google_font_weight_style']) && !empty( $text_area_vars['brick_second_text_google_font_weight_style'] ) ? ':' . $text_area_vars['brick_second_text_google_font_weight_style'] : NULL;
					$second_singletext_google_font_name = $second_singletext_google_font_name . $second_singletext_google_font_weight_style;
			
					//Load the Google Font using the Google Font Class in MP Core
					new MP_CORE_Font( $second_singletext_google_font_name, $second_singletext_google_font_name, $mp_core_google_font_args );
					$mp_stacks_footer_inline_css[$second_singletext_google_font_name] = $mp_core_font_families[$second_singletext_google_font_name];
				
				}
				
				$repeat_count = $repeat_count + 1;
				
			}
		}
	}
	
	//Get text repeater for "old" double text style
	$text_areas_vars = get_post_meta($post_id, 'mp_stacks_text_content_type_repeater', true);	
	
	$repeat_count = 0;
		
	//Loop through each text area
	if ( is_array( $text_areas_vars ) ){
		foreach( $text_areas_vars as $text_area_vars ){
			
			//Get Google Font name for text line 1
			$line_1_google_font_name = isset($text_area_vars['brick_line_1_google_font']) ? $text_area_vars['brick_line_1_google_font'] : NULL;
			
			//If a font has been entered for text line 1
			if ( !empty( $line_1_google_font_name ) ){
				
				//Load the Google Font using the Google Font Class in MP Core
				new MP_CORE_Font( $line_1_google_font_name, $line_1_google_font_name, $mp_core_google_font_args );
				$mp_stacks_footer_inline_css[$line_1_google_font_name] = $mp_core_font_families[$line_1_google_font_name];
			
			}
			
			//Get Google Font name for text line 2
			$line_2_google_font_name = isset($text_area_vars['brick_line_2_google_font']) ? $text_area_vars['brick_line_2_google_font'] : NULL;
			
			//If a font has been entered for text line 2
			if ( !empty( $line_2_google_font_name ) ){
				
				//Load the Google Font using the Google Font Class in MP Core
				new MP_CORE_Font( $line_2_google_font_name, $line_2_google_font_name, $mp_core_google_font_args );
				$mp_stacks_footer_inline_css[$line_2_google_font_name] = $mp_core_font_families[$line_2_google_font_name];
			
			}
			
			$repeat_count = $repeat_count + 1;
		}
	}
	
	return $css_output;

}
add_action( 'mp_brick_additional_css', 'mp_stacks_googlefonts_class_for_text_content_types', 10, 2 );

/**
 * Add the font family specific to this brick to this brick
 */
function mp_stacks_apply_googlefonts_to_text_content_types( $css_output, $post_id ){
	
	//Set return css string var
	$return_css = $css_output;
	
	//Get Google Font name saved in brick
	$brick_overall_google_font_name = get_post_meta( $post_id, 'brick_overall_google_font', true);
	
	//If a font has been entered for the overall brick
	if ( !empty( $brick_overall_google_font_name ) ){
		
		//Check if any font weight has been selected
		$bricks_overall_google_font_weight = get_post_meta( $post_id, 'brick_overall_google_font_weight_style', true);
		$bricks_overall_google_font_weight_style = !empty($bricks_overall_google_font_weight) ? ':' . $bricks_overall_google_font_weight : NULL;
		$brick_overall_google_font_name = $brick_overall_google_font_name . $bricks_overall_google_font_weight_style;
		
		//Return the incoming css string plus css to apply this font family to all standard potential childrem
		$return_css .=  '#mp-brick-' . $post_id . ' *{ font-family: \'' . $brick_overall_google_font_name . '\';}';
		
	}

	/**
	 * Handle for the new 'singletext' style text areas
	 */
 
	//Get text repeater for the singletext type
	$singletext_areas_vars = get_post_meta($post_id, 'mp_stacks_singletext_content_type_repeater', true);	
	
	//If something is saved in the repeater
	if ( !empty( $singletext_areas_vars ) ){
	
		//Set text area counter
		$counter = 1;
		
		//Loop through each text area
		foreach( $singletext_areas_vars as $text_area_vars ){
			
			//Line 1's google font name
			$text_google_font_name = isset( $text_area_vars['brick_text_google_font'] ) ? $text_area_vars['brick_text_google_font'] : NULL;
			
			//If a font has been entered for text content type line 1
			if ( !empty( $text_google_font_name ) ){
			
				//Add the font weight to the font family name (if one has been selected)
				$text_google_font_weight_style = isset($text_area_vars['brick_text_google_font_weight_style']) && !empty( $text_area_vars['brick_text_google_font_weight_style'] ) ? ':' . $text_area_vars['brick_text_google_font_weight_style'] : NULL;
				$text_google_font_name = $text_google_font_name . $text_google_font_weight_style;
	
				//Return the incoming css string plus css to apply this font family to all paragraph tags
				$return_css .=  '#mp-brick-' . $post_id . ' .mp-stacks-text-area-' . $counter . ' .mp-brick-text  * { font-family: \'' . $text_google_font_name . '\';}';
				
			}
				
			//Increment Counter
			$counter = $counter  + 1;
			
		}
	}
	
	/**
	 * Handle for the second_text addon 'singletext' style text areas
	 */
 
	//Get text repeater for the singletext type
	$second_singletext_areas_vars = get_post_meta($post_id, 'mp_stacks_second_singletext_content_type_repeater', true);	
	
	//If something is saved in the repeater
	if ( !empty( $second_singletext_areas_vars ) ){
	
		//Set text area counter
		$counter = 1;
		
		//Loop through each text area
		foreach( $second_singletext_areas_vars as $text_area_vars ){
			
			//Second Text google font name
			$text_google_font_name = isset( $text_area_vars['brick_second_text_google_font'] ) ? $text_area_vars['brick_second_text_google_font'] : NULL;
			
			//If a font has been entered for this Second Text
			if ( !empty( $text_google_font_name ) ){
				
				//Add the font weight to the font family name (if one has been selected)
				$text_google_font_weight_style = isset( $text_area_vars['brick_second_text_google_font_weight_style'] ) && !empty( $text_area_vars['brick_second_text_google_font_weight_style'] ) ? ':' . $text_area_vars['brick_second_text_google_font_weight_style'] : NULL;
				$text_google_font_name = $text_google_font_name . $text_google_font_weight_style;
				
				//Return the incoming css string plus css to apply this font family to all paragraph tags
				$return_css .=  '#mp-brick-' . $post_id . ' .mp-stacks-second-text-area-' . $counter . ' .mp-brick-text  * { font-family: \'' . $text_google_font_name . '\';}';
								
			}
				
			//Increment Counter
			$counter = $counter  + 1;
			
		}
	}
	
	/**
	 * Handle for the old 'doubletext' style text areas
	 */
	 
	//Get text repeater
	$text_areas_vars = get_post_meta($post_id, 'mp_stacks_text_content_type_repeater', true);	
	
	//If something is saved in the repeater
	if ( !empty( $text_areas_vars ) ){
	
		//Set text area counter
		$counter = 1;
		
		//Loop through each text area
		foreach( $text_areas_vars as $text_area_vars ){
			
			//Line 1's google font name
			$line_1_google_font_name = isset( $text_area_vars['brick_line_1_google_font'] ) ? $text_area_vars['brick_line_1_google_font'] : NULL;
		
			//If a font has been entered for text content type line 1
			if ( !empty( $line_1_google_font_name ) ){
				
				//Return the incoming css string plus css to apply this font family to all paragraph tags
				$return_css .=  '#mp-brick-' . $post_id . ' .mp-stacks-text-area-' . $counter . ' .mp-brick-text-line-1  * { font-family: \'' . $line_1_google_font_name . '\';}';
				
			}
			
			//Get Google Font name saved in brick
			$line_2_google_font_name = isset( $text_area_vars['brick_line_2_google_font'] ) ? $text_area_vars['brick_line_2_google_font'] : NULL;
			
			//If a font has been entered for text content type line 2
			if ( !empty( $line_2_google_font_name ) ){
				
				//Return the incoming css string plus css to apply this font family to all paragraph tags
				$return_css .=  '#mp-brick-' . $post_id . ' .mp-stacks-text-area-' . $counter . ' .mp-brick-text-line-2  * { font-family: \'' . $line_2_google_font_name . '\';}';
				
			}
			
			//Increment Counter
			$counter = $counter  + 1;
			
		}
	}
	
	return $return_css;

}
add_filter( 'mp_brick_additional_css', 'mp_stacks_apply_googlefonts_to_text_content_types', 10, 2);