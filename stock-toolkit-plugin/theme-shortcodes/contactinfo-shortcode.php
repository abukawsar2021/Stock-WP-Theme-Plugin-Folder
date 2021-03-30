<?php

function  stock_contact_info_sc($atts){
	
	extract(shortcode_atts(array(
	 'contact_info'=>'',
	 'icon'=>'',
	 'title_small'=>'',
	 'title_big_or_tel_num'=>'',
	
	),$atts));
	
	if(!empty($contact_info )){
		$contact_info = vc_param_group_parse_atts( $atts['contact_info'] ); 
	}
	
	
	
	$contact_info_list_markup ='
	
	<div class="contact-info-list-itme">
	 <ul class="list-unstyled inline-block">';
		foreach($contact_info as $contact_infos){
				if(!empty($contact_infos['icon']) && !empty( $contact_infos['title_small']) && !empty($contact_infos['title_big_or_tel_num']) ){ 				 
			 $contact_info_list_markup.='	 
			<li>
			 <span class="icon icon-border"><i class="'.$contact_infos['icon'].'"></i></span>
				<h5 class="small-title">'.$contact_infos['title_small'].'</h5>
				<h4 class="big-title">'.$contact_infos['title_big_or_tel_num'].'</h4>
			</li>';
			}
		}
	$contact_info_list_markup.='		
	 </ul>	
	</div>';

	
	return $contact_info_list_markup;
}

add_shortcode('stock_contactinfo','stock_contact_info_sc');