<?php

vc_map( array(
  "name" => __( "Stock Skill Bar", "my-text-domain" ),
  "base" => "stock_skillbar",
  "category" => __( "Stock", "my-text-domain"),
  "params" => array(
 array(
  'type' => 'param_group',
   "heading" => __( "Type bar number", "my-text-domain" ),
	"param_name" => "skill_bars_info",
 "params" => array(
	  array(
	  "type" => "textfield",
	  "heading" => __( "Title", "my-text-domain" ),
	  "param_name" => "title",
	  "value" => __( "HTML", "my-text-domain" ),
	  "description" => __( "Description for foo param.", "my-text-domain" )
	 ),
	array(
	  "type" => "colorpicker",
	  "heading" => __( "Select Title Bg Color", "my-text-domain" ),
	  "param_name" => "title_bg_color",
	  "value" => __( "#000000", "my-text-domain" ),
	  "description" => __( "Title Bg color", "my-text-domain" )
	 ),
	 
	 array(
	  "type" => "colorpicker",
	  "heading" => __( "Select Skillbar Bg Color", "my-text-domain" ),
	  "param_name" => "skillbar_bg_color",
	  "value" => __( "#eeeeee", "my-text-domain" ),
	  "description" => __( "Skillbar Bg color", "my-text-domain" )
	 ),
	  array(
	  "type" => "colorpicker",
	  "heading" => __( "Select skillbar Line Bg Color", "my-text-domain" ),
	  "param_name" => "skillbar_line_bg_color",
	  "value" => __( "#000000", "my-text-domain" ),
	  "description" => __( "Skillbar line bg color", "my-text-domain" )
	 ),	 
	 array(
	  "type" => "textfield",
	  "heading" => __( "Skillbar Percent Text", "my-text-domain" ),
	  "param_name" => "skill_bar_percent_text",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Skillbar percent text", "my-text-domain" )
	 ),
	 array(
	  "type" => "colorpicker",
	  "heading" => __( "Skillbar Percent Text Bg Color", "my-text-domain" ),
	  "param_name" => "skill_bar_percent_text_bg_color",
	  "value" => __( "#000000", "my-text-domain" ),
	  "description" => __( "Skillbar percent text color", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Skillbar percent unit", "my-text-domain" ),
	  "param_name" => "skill_bar_percent_unit",
	  "value" => __( "%", "my-text-domain" ),
	  "description" => __( "Skillbar percent unit", "my-text-domain" )
	 ),
  ),
  ),
  array(
	  "type" => "css_editor",
	  "heading" => __( "Skillbar percent bg color", "my-text-domain" ),
	  "param_name" => "css",
	  "value" => __( "", "my-text-domain" ),
	  "group" => __( "Design Groups", "my-text-domain" )
	 ),

  )
   )
  );
  
