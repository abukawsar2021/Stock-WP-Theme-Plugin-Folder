<?php

 function stock_skillbar_shortcode($atts){
	extract(shortcode_atts(array(	
	'skill_bars_info'=>'',
	'title'=>'',
	'title_bg_color'=>'',
	'skillbar_bg_color'=>'',
	'skillbar_line_bg_color'=>'',
	'skill_bar_percent_text_bg_color'=>'',
	'skill_bar_percent_text'=>'',
	'skill_bar_percent_unit'=>'',
	'css'=>'',
	
	),$atts)); 
	
	 if(function_exists('vc_param_group_parse_atts') && !empty($skill_bars_info)){
		 $skill_bars_info = vc_param_group_parse_atts( $atts['skill_bars_info'] ); 	
	}else{
		 $skill_bars_info= array();
	} 
	

	
    $stock_skillbar_markup ='
	   <div id="skills" class="barWrapper">';
	   
	   foreach($skill_bars_info as  $skill_bar){
		   
		   if(!empty($skill_bar['title_bg_color'] && $skill_bar['skill_bar_percent_text'] && $skill_bar['skill_bar_percent_text_bg_color'] && $skill_bar['skill_bar_percent_unit'] && $skill_bar['title'] && $skill_bar['skillbar_bg_color']  && $skill_bar['skillbar_line_bg_color'])){
			     $stock_skillbar_markup .='
				<div style="background-color:'.$skill_bar['skillbar_bg_color'].'" class="skillbar clearfix "data-percent="'.$skill_bar['skill_bar_percent_text'].''.$skill_bar['skill_bar_percent_unit'].'">
				<h5 style="background-color:'.$skill_bar['title_bg_color'].'" class="skillbar-title"> '.$skill_bar['title'].' </h5>
				<div style="background-color:'.$skill_bar['skillbar_line_bg_color'].'" class="skillbar-line"></div>
				<div style="background-color:'.$skill_bar['skill_bar_percent_text_bg_color'].'" class="skill-bar-percent">'.$skill_bar['skill_bar_percent_text'].''.$skill_bar['skill_bar_percent_unit'].'</div> 				
                </div>'; 
		   }		 			
	   }		
		$stock_skillbar_markup.='						
		
        </div>';
return $stock_skillbar_markup; 
}
add_shortcode('stock_skillbar','stock_skillbar_shortcode');
 