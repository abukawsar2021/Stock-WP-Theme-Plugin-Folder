<?php
vc_map( array(
  "name" => __( "Stock Slider", "stock" ),
  "base" => "stock_slider_sc",
  "category" => __( "Stock", "stock"),
  "params" => array(
	 array(
	  "type" => "textfield",
	  "heading" => __( "Type slider number you want to show", "stock" ),
	  "param_name" => "count",
	  "value" => __( "3", "stock" ),
	  "description" => __( "Type slider number you want to show", "stock" ),	  
	 ),
	  array(
	  "type" => "dropdown",
	  "heading" => __( "Select slider you want to show", "stock" ),
	  "param_name" => "slider_id",
	  "value" => slider_single_count_list(),
	  "description" => __( "Select slider", "stock" ),
	  "dependency" =>array(
	     "element"=>"count",
	     "value"=> array("1"),
	  ),
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Type slider height", "stock" ),
	  "param_name" => "height",
	  "value" => __( "730", "stock" ),
	  "description" => __( "Select Slider Loop", "stock" )
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable Loop", "stock" ),
	  "param_name" => "loop",
	  "std" => __( "true", "stock" ),
	  "value" => array(
	   'Yes'=>'true',
	   'No'=>'false',
	  ),
	  "description" => __( "Select Slider Loop", "stock" ),
	  "dependency" =>array(
	    "element"=>"count",
	   "value"=> array("2","3","4","5","6","7","8","9","10"),
	  ),
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable autoplay", "stock" ),
	  "param_name" => "autoplay",
	  "std" => __( "true", "stock" ),
	  "value" => array(
	   'Yes'=>'true',
	   'No'=>'false',
	  ),
	  "description" => __( "Select Slider Loop", "stock" ),
	  "dependency" =>array(
	    "element"=>"count",
	   "value"=> array("2","3","4","5","6","7","8","9","10"),
	  ),
	 ), 
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable autoplaytimeout", "stock" ),
	  "param_name" => "autoplaytimeout",
	  "std" => __( "5000", "stock" ),
	  "value" => array(
	   '1Second'=> 1000,
	   '2Seconds'=> 1000,
	   '3Seconds'=> 3000,
	   '4Seconds'=> 4000,
	   '5Seconds'=> 5000,
	   '6Seconds'=> 6000,
	  ),
	  "description" => __( "Select Slider Autoplaytimeout", "stock" ),
	  "dependency" =>array(
	     "element"=>"count",
	   "value"=> array("2","3","4","5","6","7","8","9","10"),
	  ),
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable nav", "stock" ),
	  "param_name" => "nav",
	  "std" => __( "true", "stock" ),
	  "value" => array(
	   'Yes'=>'true',
	   'No'=>'false',
	  ),
	  "description" => __( "Select Slider Nav", "stock" ),
	  "dependency" =>array(
	     'element'=>'count',
	     'value'=>array("2","3","4"),
	  ),
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Enable dots", "stock" ),
	  "param_name" => "dots",
	  "std" => __( "true", "stock" ),
	  "value" => array(
	   'Yes'=>'true',
	   'No'=>'false',
	  ),
	  "description" => __( "Select Slider Loop", "stock" ),
	  "dependency" =>array(
	    "element"=>"count",
	   "value"=> array("2","3","4","5","6","7","8","9","10"),
	  ),
	 ),	
	 array(
			'type' => 'dropdown',
			'heading' => __( 'Dots position', 'stock' ),
			'param_name' => 'dots_placement',
			'value' => array(
				__( 'Center', 'stock' ) => 'center',
				__( 'Left', 'stock' ) => 'left',
				__( 'Right', 'stock' ) => 'right',
			),
			'description' => __( 'Select dots position.', 'stock' ),
			'std' => 'center',
		),
		array(
			'type' => 'dropdown',
			'heading' => __( 'Content position', 'stock' ),
			'param_name' => 'content_placement',
			'value' => array(
				__( 'Center', 'stock' ) => 'center',
				__( 'Left', 'stock' ) => 'left',
				__( 'Right', 'stock' ) => 'right',
			),
			'description' => __( 'Select content position within section.', 'stock' ),
			'std' => 'center',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Extra class name', 'stock' ),
			'param_name' => 'el_class',
			'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'stock' ),
		),
		
		array(
			'type' => 'dropdown',
			'heading' => __( 'Width', 'stock' ),
			'param_name' => 'width',
			'value' => array(
				__( '1 column - 1/12', 'stock' ) => '1/12',
				__( '2 columns - 1/6', 'stock' ) => '1/6',
				__( '3 columns - 1/4', 'stock' ) => '1/4',
				__( '4 columns - 1/3', 'stock' ) => '1/3',
				__( '5 columns - 5/12', 'stock' ) => '5/12',
				__( '6 columns - 1/2', 'stock' ) => '1/2',
				__( '7 columns - 7/12', 'stock' ) => '7/12',
				__( '8 columns - 2/3', 'stock' ) => '2/3',
				__( '9 columns - 3/4', 'stock' ) => '3/4',
				__( '10 columns - 5/6', 'stock' ) => '5/6',
				__( '11 columns - 11/12', 'stock' ) => '11/12',
				__( '12 columns - 1/1', 'stock' ) => '1/1',
			),
			'description' => __( 'Select column width.', 'stock' ),
			'std' => '1/1',
		),
		array(
			'type' => 'column_offset',
			'heading' => __( 'Responsiveness', 'stock' ),
			'param_name' => 'offset',
			'description' => __( 'Adjust column for different screen sizes. Control width, offset and visibility settings.', 'stock' ),
		),
	 
  )
 ) );
