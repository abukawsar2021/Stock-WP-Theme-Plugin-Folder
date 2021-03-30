<?php

function career_shortcode($atts, $content= null){
extract(shortcode_atts(array(
	'title'=>'',
	'desc'=>'',
	'btn_link'=>'',
	'btn_text'=>'Apply Now',
),$atts));


 $stock_career_box_markup= '
    <div class="single-career-box">
	    <h3 class="career-box-title">'.$title.'</h3>
		'.wpautop($desc).'
	 	<a class="btn_link" href="'.$btn_link.'">'.$btn_text.'</a>	
    </div>';

return $stock_career_box_markup;
}
add_shortcode('stock_career_box','career_shortcode');