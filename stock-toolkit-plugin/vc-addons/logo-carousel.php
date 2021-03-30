<?php
vc_map( array(
  "name" => __( "Stock Logo Slider", "my-text-domain" ),
  "base" => "logo_carousel",
  "category" => __( "Stock", "my-text-domain"),
  "params" => array(
	 array(
	  "type" => "attach_images",
	  "heading" => __( "Upload Logo Sliders", "my-text-domain" ),
	  "param_name" => "logo_sliders",
	  "description" => __( "Upload Logo Sliders", "my-text-domain" ),	  
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Desktop count", "my-text-domain" ),
	  "param_name" => "desktop_count",
	  "value" => __( "5", "my-text-domain" ),
	  "description" => __( "Select Logo Slider For Desktop", "my-text-domain" ),
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Tablet count", "my-text-domain" ),
	  "param_name" => "tablet_count",
	  "value" => __( "3", "my-text-domain" ),
	  "description" => __( "Select Logo Slider For Tablet", "my-text-domain" ),
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Mobile count", "my-text-domain" ),
	  "param_name" => "mobile_count",
	  "value" => __( "2", "my-text-domain" ),
	  "description" => __( "Select Logo Slider For Mobile", "my-text-domain" ),
	 ), 
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable Loop", "my-text-domain" ),
	  "param_name" => "loop",
	  "std" => __( "true", "my-text-domain" ),
	  "value" => array(
	   'Yes'=>'true',
	   'No'=>'false',
	  ),
	  "description" => __( "Select Slider Loop", "my-text-domain" ),
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable autoplay", "my-text-domain" ),
	  "param_name" => "autoplay",
	  "std" => __( "true", "my-text-domain" ),
	  "value" => array(
	   'Yes'=>'true',
	   'No'=>'false',
	  ),
	  "description" => __( "Select Slider Loop", "my-text-domain" ),
	 ), 
		 array(
		  "type" => "dropdown",
		  "heading" => __( "Enable autoplaytimeout", "my-text-domain" ),
		  "param_name" => "autoplaytimeout",
		  "std" => __( "5000", "my-text-domain" ),
		  "value" => array(
		   '1 Second'=> 1000,
		   '2 Seconds'=> 1000,
		   '3 Seconds'=> 3000,
		   '4 Seconds'=> 4000,
		   '5 Seconds'=> 5000,
		   '6 Seconds'=> 6000,
		  ),
		  "description" => __( "Select Logo Sliders Autoplaytimeout", "my-text-domain" ),
		  "dependency" =>array(
		   "element"=> "autoplay",
		   "value"=> array("true"),
		  ),
		 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable nav", "my-text-domain" ),
	  "param_name" => "nav",
	  "std" => __( "true", "my-text-domain" ),
	  "value" => array(
	   'Yes'=>'true',
	   'No'=>'false',
	  ),
	  "description" => __( "Select Logo Sliders Nav", "my-text-domain" ),
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable dots", "my-text-domain" ),
	  "param_name" => "dots",
	  "std" => __( "true", "my-text-domain" ),
	  "value" => array(
	   'Yes'=>'true',
	   'No'=>'false',
	  ),
	  "description" => __( "Select Logo Sliders Dots", "my-text-domain" ),
	 ),	 
  )
 ) );
