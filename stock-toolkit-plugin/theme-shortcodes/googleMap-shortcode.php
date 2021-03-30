<?php
function stock_gmap_shortcode($atts){
extract(shortcode_atts(array(

'map_api'=>'AIzaSyBw-43o03x3sAq89stGgFDHVFgqi7wiEuM',
'longitude'=>'90.399452',
'latitude'=>'23.777176',
'desc'=>'Uttara, Dhaka-1230,Bangladesh',
'height'=>'500',
'map_zoom'=>'10',
'marker_image'=>'',
'marker_animate'=>'1',

),$atts));	
	
	 $marker_img_array = wp_get_attachment_image_src($marker_image,'thumbmnail');
	
	$stock_gmap_markup = '	
    <div id="googleMap" style="width:100%;height:'.$height.'px;"></div>	
	<script src="https://maps.googleapis.com/maps/api/js?key='.$map_api.'"></script>
    <script>
		 jQuery(document).ready(function($){
			var mapcenter = {lat:'.$latitude.',lng:'.$longitude.'};		
			 jQuery("#googleMap")
			  .gmap3({
				zoom:'.$map_zoom.',
				center: mapcenter,
				 mapTypeId:google.maps.MapTypeId.ROADMAP
			  })
			  .marker({
				position: mapcenter,
				icon:"'.$marker_img_array[0].'",';
				
				if($marker_animate == '1'){
					$stock_gmap_markup .= 'animation:google.maps.Animation.BOUNCE';
				}			
				$stock_gmap_markup .= '
				
			  })
			  .infowindow({
				content: "'.$desc.'",
				maxWidth: 160,
			  })
			  .then(function (infowindow) {
				var map = this.get(0);
				var marker = this.get(1);
				marker.addListener("click", function() {
				  infowindow.open(map, marker);
				});
			  });  
		  });  
    </script>
	  
	  ';	
return $stock_gmap_markup;	

}
add_shortcode('stock_gmap','stock_gmap_shortcode');