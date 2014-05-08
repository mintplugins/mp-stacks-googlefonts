<?php 

/**
 * Create objects of the MP Core Google Font class
 */
function mp_stacks_googlefonts_class_for_text_content_types( $post_id){
	
	//Get Google Font name for text line 1
	$line_1_google_font_name = get_post_meta( $post_id, 'brick_line_1_google_font', true);
	
	//If a font has been entered for text line 1
	if ( !empty( $line_1_google_font_name ) ){
		
		//Load the Google Font using the Google Font Class in MP Core
		new MP_CORE_Font( $line_1_google_font_name, $line_1_google_font_name );
	
	}
	
	//Get Google Font name for text line 2
	$line_2_google_font_name = get_post_meta( $post_id, 'brick_line_2_google_font', true);
	
	//If a font has been entered for text line 2
	if ( !empty( $line_2_google_font_name ) ){
		
		//Load the Google Font using the Google Font Class in MP Core
		new MP_CORE_Font( $line_2_google_font_name, $line_2_google_font_name );
	
	}
	
	//Get Google Font name for second text line 1
	$second_line_1_google_font_name = get_post_meta( $post_id, 'brick_second_line_1_google_font', true);
	
	//If a font has been entered for second text line 1
	if ( !empty( $second_line_1_google_font_name ) ){
		
		//Load the Google Font using the Google Font Class in MP Core
		new MP_CORE_Font( $second_line_1_google_font_name, $second_line_1_google_font_name );
	
	}
	
	//Get Google Font name for second text line 2
	$second_line_2_google_font_name = get_post_meta( $post_id, 'brick_second_line_2_google_font', true);
	
	//If a font has been entered for second text line 2
	if ( !empty( $second_line_2_google_font_name ) ){
		
		//Load the Google Font using the Google Font Class in MP Core
		new MP_CORE_Font( $second_line_2_google_font_name, $second_line_2_google_font_name );
	
	}
	

}
add_action( 'mp_stacks_brick_meta_action', 'mp_stacks_googlefonts_class_for_text_content_types' );

/**
 * Add the font family specific to this brick to this brick
 */
function mp_stacks_apply_googlefonts_to_text_content_types( $css_output, $post_id ){
	
	//Set return css string var
	$return_css = $css_output;
	
	//Get Google Font name saved in brick
	$line_1_google_font_name = get_post_meta( $post_id, 'brick_line_1_google_font', true);
	
	//If a font has been entered for text content type line 1
	if ( !empty( $line_1_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all paragraph tags
		$return_css .=  '#mp-brick-' . $post_id . ' .mp-brick-text-line-1 p{ font-family: \'' . $line_1_google_font_name . '\';}';
		
	}
	
	//Get Google Font name saved in brick
	$line_2_google_font_name = get_post_meta( $post_id, 'brick_line_2_google_font', true);
	
	//If a font has been entered for text content type line 2
	if ( !empty( $line_2_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all paragraph tags
		$return_css .=  '#mp-brick-' . $post_id . ' .mp-brick-text-line-2 p{ font-family: \'' . $line_2_google_font_name . '\';}';
		
	}
	
	//Get Google Font name saved in brick
	$second_line_1_google_font_name = get_post_meta( $post_id, 'brick_second_line_1_google_font', true);
	
	//If a font has been entered for text content type line 1
	if ( !empty( $second_line_1_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all paragraph tags
		$return_css .=  '#mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1 p{ font-family: \'' . $second_line_1_google_font_name . '\';}';
		
	}
	
	//Get Google Font name saved in brick
	$second_line_2_google_font_name = get_post_meta( $post_id, 'brick_second_line_2_google_font', true);
	
	//If a font has been entered for text content type line 2
	if ( !empty( $second_line_2_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all paragraph tags
		$return_css .=  '#mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2 p{ font-family: \'' . $second_line_2_google_font_name . '\';}';
		
	}
	
	return $return_css;	

}
add_filter( 'mp_brick_additional_css', 'mp_stacks_apply_googlefonts_to_text_content_types', 10, 2);