<?php
function stock_testimonial_shortcode($atts){
	extract(shortcode_atts(array(
	
	 'testimonial_image'=>'',
	 'testimonial_title'=>'',
	 'testimonial_subtitle'=>'',
	 'testimonial_desc'=>'',
	
	),$atts));
	
	$testi_bg = wp_get_attachment_image_src($testimonial_image, 'medium');
	
	$stock_testimonial_markup = '
	<div class="single-testimonial-wrapper">	
        <img src="'.$testi_bg[0].'" alt="'.$testimonial_title.'" />	
	   <h4>'.$testimonial_title.'</h4>
	   <h5>'.$testimonial_subtitle.'</h5>
	   '.wpautop($testimonial_desc).'
	</div>';
	
return 	$stock_testimonial_markup;
}
add_shortcode('stock_testimonial','stock_testimonial_shortcode');