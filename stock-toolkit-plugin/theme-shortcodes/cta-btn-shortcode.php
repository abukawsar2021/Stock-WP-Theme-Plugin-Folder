<?php

function stock_cta_btn_shortcode($atts, $content = null){
	extract(shortcode_atts(array(
	'link_text'=>'Start a project',
	'link_type'=>'',
	'page_type'=>'',
	'external_link'=>'',
	
	),$atts));

		if($link_type == 'page'){
		   $cta_link = get_page_link($page_type);		
		}else{
			$cta_link = $external_link;
		}

   $stock_cta_markup='
   <div class="stock-cta-wrapper">			
		<a href="'.$cta_link.'">'.$link_text.'</a>		
   </div>';

return $stock_cta_markup; 
	
}
add_shortcode('stock_cta_btn','stock_cta_btn_shortcode');