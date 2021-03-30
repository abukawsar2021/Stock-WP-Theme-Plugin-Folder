<?php

function video_popup_sc($atts){
	extract(shortcode_atts(array(
	 'title'=>'',
	 'desc'=>'',
	 'width'=>'500',
	 'height'=>'500',
	 'url'=>'https://www.youtube.com/watch?v=5ovp0e_bRP4',
	 'css'=>'',
	
	),$atts));
	
	if(function_exists('vc_shortcode_custom_css_class')){
		$custom_css = vc_shortcode_custom_css_class($css);
	}else{
		$custom_css = '';
	}
	
	$stock_video_popup_markup='	
	
	<script type="text/javascript">
	
		jQuery(document).ready(function($){
			$(".videoPopupLink").fancybox({
				video  : {
					css : {
						width : "'.$width.'px",
						height : "'.$height.'px",						
					}
				}
					
			});
			});
	</script>';
	$stock_video_popup_markup.='	
	
	<div style="height:'.$height.'px" class="video-popup-wrapper '.$custom_css.' ">
	 <div class="video-popup-content-wrapper-table">
	 	<div class="content-table-cell">
		 <a class="videoPopupLink data-fancybox" href="'.$url.'">
				<i class="fa fa-play"></i>
		</a>					
		  <h2 class="title">'.$title.'</h2>
		  '.wpautop($desc).'
		</div>
	 </div>

	</div>
	
	';
	
return $stock_video_popup_markup;	
	
}
add_shortcode('stock_video_popup','video_popup_sc');