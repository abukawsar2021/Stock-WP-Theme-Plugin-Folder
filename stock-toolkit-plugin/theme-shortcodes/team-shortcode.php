<?php

function team_members_sc($atts,$content = null){
extract(shortcode_atts(array(
 'team_image' =>'',
  'title'=>'',
  'sub_title'=>'',
  'members_icons'=>'',
  'social_icons'=>'',
  'link_url'=>'',
),$atts));

$image = wp_get_attachment_image_src($team_image,'thumbnail');
$members_icons = vc_param_group_parse_atts( $atts['members_icons'] ); 


$stock_team_member_markup ='
<div class="team-wrapper">
	<div style="background-image:url('.$image[0].');" class="single-team-image"></div>
      <h2 class="team-title">'.$title.'</h2>
      <h4 class="team-sub-title">'.$sub_title.'</h4>
      <ul class="team-social-icons">';
	    if(!empty($members_icons)){
			foreach($members_icons as $icons){
				if(!empty($icons)){
				 $stock_team_member_markup.='<li><a href="'.$icons['link_url'].'"><i class="'.$icons['social_icons'].'"></i></a></li>';
				} 
			} 
	      }
		$stock_team_member_markup.='
      </ul>
</div>';

return $stock_team_member_markup;	
}
add_shortcode('stock_team','team_members_sc');