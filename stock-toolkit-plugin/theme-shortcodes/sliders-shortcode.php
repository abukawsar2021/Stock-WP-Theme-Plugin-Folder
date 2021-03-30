<?php

function stock_theme_slider_shortcode($atts){

  extract(shortcode_atts(array( 
      'count'=> 3,
      'loop'=> 'true',
      'autoplay'=> 'true',
      'autoplayTimeout'=> 5000,
      'nav'=> 'true',
      'dots'=> 'true',
      'slider_id'=>'',
      'height'=> '730',
      'width'=> '',
      'offset'=> '',
      'content_placement'=> 'center',

  ),$atts));
  
  

if($count == 1){
	$slider_query = new WP_Query(array('post_type'=>'slider','posts_per_page'=> $count, 'p'=> $slider_id));	
}else{
	$slider_query = new WP_Query(array('post_type'=>'slider','posts_per_page'=> $count));
}

if($count == 1){
	$slider_markup ='';	
}else{	
$slider_markup='
<script type="text/javascript">
	jQuery(window).on("load",function(){		
	 var heroSlider = jQuery(".stock-sliders");		
	  heroSlider.owlCarousel({
		   items:1,
		   loop:'.$loop.',
		   autoplay:'.$autoplay.',
		   autoplayTimeout:'.$autoplayTimeout.',
		   nav:'.$nav.',
		   dots:'.$dots.',			  
		   navText:["<i class=\'fa fa-chevron-left\'></i>","<i class=\'fa fa-chevron-right\'></i>"]
  
	});';
		  
  $slider_markup.='
  
   heroSlider.on("translate.owl.carousel", function(){
			var layer = jQuery("[data-animation]");
			layer.each(function() {
				var anim_name = jQuery(this).data("animation");
				jQuery(this).removeClass("animated " + anim_name).css("opacity", "0");
			});
		});

		jQuery("[data-delay]").each(function () {
			var anim_del = jQuery(this).data("delay");
			jQuery(this).css("animation-delay", anim_del);
		});

		jQuery("[data-duration]").each(function () {
			var anim_dur = jQuery(this).data("duration");
			jQuery(this).css("animation-duration", anim_dur);
		});

		heroSlider.on("translated.owl.carousel", function () {
			var layer = heroSlider.find(".owl-item.active").find("[data-animation]");
			layer.each(function () {
				var anim_name = jQuery(this).data("animation");
				jQuery(this).addClass("animated " + anim_name).css("opacity", "1");
			});
		});
	
	});

</script>';

}

$slider_markup.='

<div class="stock-sliders">';
while($slider_query ->have_posts()) : $slider_query ->the_post();
$post_id = get_the_ID();
$post_title =  get_the_title();
$post_content =  get_the_content();
$slider_meta = get_post_meta($post_id,'stock_slider_meta',true);

if(array_key_exists('slider_overlay',$slider_meta)){
$slider_overlay= $slider_meta['slider_overlay'];		
}

if(array_key_exists('slider_overlay_opacity',$slider_meta)){
$slider_overlay_opacity= $slider_meta['slider_overlay_opacity'];		
}

if(array_key_exists('slider_overlay_opacity_color',$slider_meta)){
$slider_overlay_opacity_color= $slider_meta['slider_overlay_opacity_color'];		
}

$slider_markup .='

<div style="background-image:url('.get_the_post_thumbnail_url($post_id,'large').')" class="single-slider-item">';

if($slider_overlay == 'true'){
 $slider_markup .='<div style="opacity:'.$slider_overlay_opacity.';background-color:'.$slider_overlay_opacity_color.';height:'.$height.'px" class="slider-overlay"></div>';		
}

$slider_markup .='
	<div class="slider-outer-wrapper table">
		<div class="slider-inner-wrapper table-cell">
			<div class="container">
				<div class="row">
					<div class="'.$offset.' text-'.$content_placement.'">					
					<h2 class="slider-title" data-animation="fadeInUp" data-duration=".5s">'.get_the_title().'</h2>
					<div class="slider-content" data-animation="fadeInUp" data-duration=".9s">'.wpautop($post_content).'</div>';
					
						 if($slider_meta['slider_buttons']){
							 $slider_markup .='
							 <div class="slider-buttons"  data-animation="fadeInUp" data-duration="1.3s">';				 
							 foreach($slider_meta['slider_buttons'] as $button){
								 if($button['button_type']=='page'){
									$button_link = get_page_link($button['button_link_type_page']); 
								 } else{
									 $button_link = $button['button_link_type_link']; 
								 }					 
								  $slider_markup .='<a href="'.$button_link.'" class="'.$button['button_type'].'-btn hero-button">'.$button['button_text'].'</a>';
							 }			    
							 $slider_markup .='</div>';	
						 }
$slider_markup .='					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>';
endwhile;
$slider_markup .='</div>';
wp_reset_query();
return $slider_markup;	
}
add_shortcode('stock_slider_sc','stock_theme_slider_shortcode');