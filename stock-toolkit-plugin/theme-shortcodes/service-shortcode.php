<?php

function stock_service_shortcode_info($atts,$content = null){
	extract(shortcode_atts(array(	
	 'title'=>'',
	 'desc'=>'',
	 'link_type'=>'',
	 'link_to_page'=>'',
	 'external_link'=>'',
	 'link_text'=>'Read More',
	 'icon_type'=>'',
	 'upload_icon'=>'',
	 'icon'=>'',
	 'box_background'=>'',
	 
	),$atts));
	
	 $box_bg = wp_get_attachment_image_src($box_background,'medium');
	 $upload_icon_img = wp_get_attachment_image_src($upload_icon,'thumbnail');
	 
	 $service_section_markup = '
	 <div class="single-service-wrapper">
	    <div style="background-image:url('.$box_bg[0].')" class="service-icon-wrapper">
		   <div class="single-service-outer-wrapper-table">
		   	<div class="single-service-inner-wrapper-table-cell">';
			
			if($icon_type == 'icon'){	
			   $service_section_markup .= '<i class="'.$icon.'"></i>';	
			}else{
			   $service_section_markup .= '<img src="'.$upload_icon_img[0].'" alt="" />';		 
			}
			 $service_section_markup .= ' 
		   </div>
		  </div>
	    </div>	    
		<div class="single-service-content-wrapper">
		 <h2>'.$title.'</h2>
		 '.wpautop($desc).'';
			  if($link_type == 'page'){
				 $read_more_link = get_page_link($link_to_page);
			 }elseif($link_type == 'link'){
				 $read_more_link = $external_link;
			 }else{
				  $read_more_link = get_permalink( get_the_ID() );
			 }
		 $service_section_markup .= '<a href="'.$read_more_link.'">'.$link_text.'</a>
		</div>
	 </div>';
	 	 
return  $service_section_markup;
}
add_shortcode('stock_service_section','stock_service_shortcode_info');