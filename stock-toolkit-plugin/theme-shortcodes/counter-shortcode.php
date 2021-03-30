<?php
function stock_static_box_shortcode($atts){
	extract(shortcode_atts(array(
	'number'=>'',
	'number_unit'=>'',
	'text'=>'',	
	),$atts));
   $stock_static_box_markup ='  	 
	   <div class="stock-static-box-wrapper">	
		<div class="number-info">
			<span class="counter-num">'.$number.'</span>
			<span class="counter-num-unit">'.$number_unit.'</span>								
		</div> 
		<p class="counter-text">'.$text.'</span>							
	   </div>';
return $stock_static_box_markup; 
}
add_shortcode('stock_counter','stock_static_box_shortcode');
