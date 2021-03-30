<?php

function stock_logo_sliders($atts){
 extract(shortcode_atts(array(
 'logo_sliders'=>'',
 'desktop_count'=>'5',
 'tablet_count'=>'3',
 'mobile_count'=>'2',
 'loop'=>'true',
 'autoplay'=>'true',
 'autoplaytimeout'=>'5000',
 'nav'=>'true',
 'dots'=>'true',
 ),$atts));
 
 $logo_images = explode(',',$logo_sliders);

$stock_logo_carousel_markup ='
<script type="text/javascript">
jQuery(window).on("load",function($){
	jQuery(".logo-carousel").owlCarousel({
		 items:5,
		 margin:15,
		 loop:'.$loop.',
		 autoplay:'.$autoplay.',
		 autoplayTimeout:'.$autoplaytimeout.',
		 nav:'.$nav.',
		 dots:'.$dots.',
			responsive:{
				0:{
					items:'.$mobile_count.',
				},
				600:{
					items:'.$tablet_count.',
				},
				1000:{
					items:'.$desktop_count.',
				}
			}
		
	});	
	
})

</script>';
$stock_logo_carousel_markup.='
<div class="logo-carousel">';
foreach($logo_images as $logo){
$logo_image= wp_get_attachment_image_src($logo,'large');
$stock_logo_carousel_markup.='
<div class="logo-slider-outer table">
	<div class="logo-slider-inner table-cell">
      <img src="'.$logo_image[0].'" alt="" />
	</div>
</div>';			
}

$stock_logo_carousel_markup.='
</div>';

$stock_logo_carousel_markup.='';


return $stock_logo_carousel_markup;	
}

add_shortcode('logo_carousel','stock_logo_sliders');