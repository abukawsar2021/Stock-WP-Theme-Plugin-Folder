<?php
function stock_getFreeQuote_shortcode($atts){
	extract(shortcode_atts(array(
	
	 'contactForm_box'=>'',
	
	),$atts));
	
	
	$stock_contactForm_markup = '
	<div class="contactForm-box">	
	    '.$contactForm_box.'
	</div>';
	
return 	$stock_contactForm_markup;
}
add_shortcode('stock_getFreeQuote','stock_getFreeQuote_shortcode');