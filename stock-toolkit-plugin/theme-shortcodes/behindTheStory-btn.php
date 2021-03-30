<?php

function stock_behind_the_story_shortcode($atts){
	extract(shortcode_atts(array(
	'link_text'=>'Read more about us',
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
add_shortcode('stock_behindthestory_btn','stock_behind_the_story_shortcode');
