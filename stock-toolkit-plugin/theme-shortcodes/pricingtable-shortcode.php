<?php
function pricing_table_sc($atts){
   extract(shortcode_atts(array(
	   'tbl_tag'=>'',
	   'title'=>'',
	   'icon_type'=>'',
	   'icon_fontawesome'=>'',
	   'table_item_list'=>'',
	   'single_list_item'=>'',
	   'currency'=>'',
	   'price'=>'',
	   'btn_text'=>'',
	   'btn_link'=>'',     
	   'css'=>'',     
   ),$atts));

    if($icon_type == 'fontawesome'){
		$icon_type = $icon_fontawesome;
	}else{
		$icon_type = $icon_flaticon;
	}
	if(!empty($table_item_list)){
		$table_item_list = vc_param_group_parse_atts( $atts['table_item_list'] );
	}else{
		$table_item_list = '';
	}
	

	$stock_pricing_table_markup ='
	<div class="pricing-table-wrapper">	
	   <div class="pricing-table-inner">';
	    $stock_pricing_table_markup.='';
		   if(!empty($tbl_tag)){
				 $stock_pricing_table_markup.='<span class="table-tag">'.$tbl_tag.'</span>';
		   }
       
		
		$stock_pricing_table_markup.='		
        <span class="icon"><i class="'.$icon_type.'"></i></span>
		<div class="table-innter-content-table">
			<div class="table-innter-content-table-cell">
			<h2 class="pricing-table-title">'.$title.'</h2>
			  <ul class="list-group">';
			  foreach($table_item_list as $list){
				  if(!empty($list['single_list_item'])){
					   $stock_pricing_table_markup.='			  
			  	      <li>'.$list['single_list_item'].'</li>';
				  }			 
			   }		   
			  $stock_pricing_table_markup.=' 
			  </ul>
			</div>
		</div>
		<span class="curreny-symble">'.$currency.'</span>
		<span class="price">'.$price.'</span>
		<p><a href="'.$btn_link.'" class="table-pricing-plan-button">'.$btn_text.'</a></p>	
	   </div>
	</div>';
	
return $stock_pricing_table_markup; 	
}
add_shortcode('stock_pricing','pricing_table_sc');
?>