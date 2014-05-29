<?php 

/**
 * Create objects of the MP Core Google Font class
 */
function mp_stacks_googlefonts_class_for_text_content_types( $post_id ){
	
	//Get Google Font name for overall Brick
	$bricks_overall_google_font_name = get_post_meta( $post_id, 'brick_overall_google_font', true);
	
	//If a font has been entered for second text line 2
	if ( !empty( $bricks_overall_google_font_name ) ){
		
		//Load the Google Font using the Google Font Class in MP Core
		new MP_CORE_Font( $bricks_overall_google_font_name, $bricks_overall_google_font_name );
	
	}
	
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
	$brick_overall_google_font_name = get_post_meta( $post_id, 'brick_overall_google_font', true);
	
	//If a font has been entered for the overall brick
	if ( !empty( $brick_overall_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all standard potential childrem
		$return_css .=  '#mp-brick-' . $post_id . ' div, #mp-brick-' . $post_id . ' span, #mp-brick-' . $post_id . ' applet, #mp-brick-' . $post_id . ' object, #mp-brick-' . $post_id . ' iframe, #mp-brick-' . $post_id . ' h1, #mp-brick-' . $post_id . ' h2, #mp-brick-' . $post_id . ' h3, #mp-brick-' . $post_id . ' h4, #mp-brick-' . $post_id . ' h5, #mp-brick-' . $post_id . ' h6, #mp-brick-' . $post_id . ' p, #mp-brick-' . $post_id . ' blockquote, #mp-brick-' . $post_id . ' pre, #mp-brick-' . $post_id . ' a, #mp-brick-' . $post_id . ' abbr, #mp-brick-' . $post_id . ' acronym, #mp-brick-' . $post_id . ' address, #mp-brick-' . $post_id . ' big, #mp-brick-' . $post_id . ' cite, #mp-brick-' . $post_id . ' code, #mp-brick-' . $post_id . ' del, #mp-brick-' . $post_id . ' dfn, #mp-brick-' . $post_id . ' em, #mp-brick-' . $post_id . ' font, #mp-brick-' . $post_id . ' ins, #mp-brick-' . $post_id . ' kbd, #mp-brick-' . $post_id . ' q, #mp-brick-' . $post_id . ' s, #mp-brick-' . $post_id . ' samp, #mp-brick-' . $post_id . ' small, #mp-brick-' . $post_id . ' strike, #mp-brick-' . $post_id . ' strong, #mp-brick-' . $post_id . ' sub, #mp-brick-' . $post_id . ' sup, #mp-brick-' . $post_id . ' tt, #mp-brick-' . $post_id . ' var, #mp-brick-' . $post_id . ' dl, #mp-brick-' . $post_id . ' dt, #mp-brick-' . $post_id . ' dd, #mp-brick-' . $post_id . ' ol, #mp-brick-' . $post_id . ' ul, #mp-brick-' . $post_id . ' li, #mp-brick-' . $post_id . ' fieldset, #mp-brick-' . $post_id . ' form, #mp-brick-' . $post_id . ' label, #mp-brick-' . $post_id . ' legend, #mp-brick-' . $post_id . ' table, #mp-brick-' . $post_id . ' caption, #mp-brick-' . $post_id . ' tbody, #mp-brick-' . $post_id . ' tfoot, #mp-brick-' . $post_id . ' thead, #mp-brick-' . $post_id . ' tr, #mp-brick-' . $post_id . ' th, #mp-brick-' . $post_id . ' td{ font-family: \'' . $brick_overall_google_font_name . '\';}';
		
	}
	
	//Get Google Font name saved in brick
	$line_1_google_font_name = get_post_meta( $post_id, 'brick_line_1_google_font', true);
	
	//If a font has been entered for text content type line 1
	if ( !empty( $line_1_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all paragraph tags
		$return_css .=  '#mp-brick-' . $post_id . ' .mp-brick-text-line-1  div, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  span, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  applet, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  object, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  iframe, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  h1, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  h2, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  h3, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  h4, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  h5, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  h6, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  p, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  blockquote, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  pre, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  a, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  abbr, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  acronym, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  address, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  big, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  cite, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  code, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  del, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  dfn, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  em, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  font, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  ins, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  kbd, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  q, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  s, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  samp, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  small, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  strike, #mp-brick-' . $post_id . ' .mp-brick-text-line-1 strong, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  sub, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  sup, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  tt, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  var, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  dl, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  dt, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  dd, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  ol, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  ul, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  li, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  fieldset, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  form, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  label, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  legend, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  table, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  caption, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  tbody, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  tfoot, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  thead, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  tr, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  th, #mp-brick-' . $post_id . ' .mp-brick-text-line-1  td{ font-family: \'' . $line_1_google_font_name . '\';}';
		
	}
	
	//Get Google Font name saved in brick
	$line_2_google_font_name = get_post_meta( $post_id, 'brick_line_2_google_font', true);
	
	//If a font has been entered for text content type line 2
	if ( !empty( $line_2_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all paragraph tags
		$return_css .=  '#mp-brick-' . $post_id . ' .mp-brick-text-line-2  div, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  span, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  applet, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  object, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  iframe, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  h1, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  h2, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  h3, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  h4, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  h5, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  h6, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  p, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  blockquote, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  pre, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  a, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  abbr, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  acronym, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  address, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  big, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  cite, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  code, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  del, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  dfn, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  em, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  font, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  ins, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  kbd, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  q, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  s, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  samp, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  small, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  strike, #mp-brick-' . $post_id . ' .mp-brick-text-line-2 strong, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  sub, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  sup, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  tt, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  var, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  dl, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  dt, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  dd, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  ol, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  ul, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  li, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  fieldset, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  form, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  label, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  legend, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  table, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  caption, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  tbody, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  tfoot, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  thead, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  tr, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  th, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  td{ font-family: \'' . $line_2_google_font_name . '\';}';
		
	}
	
	//Get Google Font name saved in brick
	$second_line_1_google_font_name = get_post_meta( $post_id, 'brick_second_line_1_google_font', true);
	
	//If a font has been entered for text content type line 1
	if ( !empty( $second_line_1_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all paragraph tags	
		$return_css .=  '#mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  div, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  span, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  applet, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  object, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  iframe, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  h1, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  h2, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  h3, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  h4, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  h5, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  h6, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  p, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  blockquote, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  pre, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  a, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  abbr, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  acronym, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  address, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  big, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  cite, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  code, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  del, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  dfn, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  em, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  font, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  ins, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  kbd, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  q, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  s, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  samp, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  small, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  strike, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1 strong, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  sub, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  sup, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  tt, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  var, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  dl, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  dt, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  dd, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  ol, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  ul, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  li, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  fieldset, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  form, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  label, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  legend, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  table, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  caption, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  tbody, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  tfoot, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  thead, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  tr, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-1  th, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  td{ font-family: \'' . $second_line_1_google_font_name . '\';}';
		
	}
	
	//Get Google Font name saved in brick
	$second_line_2_google_font_name = get_post_meta( $post_id, 'brick_second_line_2_google_font', true);
	
	//If a font has been entered for text content type line 2
	if ( !empty( $second_line_2_google_font_name ) ){
		
		//Return the incoming css string plus css to apply this font family to all paragraph tags
		$return_css .=  '#mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  div, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  span, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  applet, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  object, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  iframe, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  h1, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  h2, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  h3, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  h4, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  h5, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  h6, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  p, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  blockquote, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  pre, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  a, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  abbr, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  acronym, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  address, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  big, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  cite, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  code, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  del, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  dfn, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  em, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  font, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  ins, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  kbd, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  q, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  s, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  samp, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  small, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  strike, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2 strong, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  sub, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  sup, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  tt, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  var, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  dl, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  dt, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  dd, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  ol, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  ul, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  li, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  fieldset, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  form, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  label, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  legend, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  table, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  caption, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  tbody, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  tfoot, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  thead, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  tr, #mp-brick-' . $post_id . ' .mp-brick-second-text.mp-brick-text-line-2  th, #mp-brick-' . $post_id . ' .mp-brick-text-line-2  td{ font-family: \'' . $second_line_2_google_font_name . '\';}';
		
	}
	
	return $return_css;	

}
add_filter( 'mp_brick_additional_css', 'mp_stacks_apply_googlefonts_to_text_content_types', 10, 2);