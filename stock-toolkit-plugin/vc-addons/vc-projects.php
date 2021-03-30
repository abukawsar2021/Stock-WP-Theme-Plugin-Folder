<?php

vc_map( array(
  "name" => __( "Projects", "stock-wp-theme" ),
  "base" => "stock_projects",
  "category" => __( "Stock", "stock-wp-theme"),
	  "params" => array(
		 array(
		  "type" => "dropdown",
		  "heading" => __( "Project Count", "stock-wp-theme" ),
		  "param_name" => "count",
		  "std" => __( "5", "stock-wp-theme" ),
		  "value" => array(
		  __( 'All Projects', "stock-wp-theme" )=> '-1',
		  __( '1', "stock-wp-theme" )	=> '1',
		  __( '2', "stock-wp-theme" )	=> '2',
		  __( '3', "stock-wp-theme" )	=> '3',
		  __( '4', "stock-wp-theme" )	=> '4',
		  __( '5', "stock-wp-theme" )	=> '5',
		  __( '6', "stock-wp-theme" )	=> '6',
		  __( '7', "stock-wp-theme" )	=> '7',
		  __( '8', "stock-wp-theme" )	=> '8',
		  __( '9', "stock-wp-theme" )	=> '9',
		  __( '10', "stock-wp-theme" )	=> '10',
		  ),
		  "description" => __( "Select how many project you want to show", "stock-wp-theme" )
		 ),
		 array(
			  "type" => "dropdown",
			  "heading" => __( "Enable Masonary?", "stock-wp-theme" ),
			  "param_name" => "enable_masonary",
			  "std" => __(1, "stock-wp-theme" ),
			  "value" => array(
			  __( 'Yes', "stock-wp-theme" )	=> 1,
			  __( 'No', "stock-wp-theme" )	=> 2,
			  ),
			  "description" => __( "Enable or disable masonary", "stock-wp-theme" )
		 ),
		 array(
			  "type" => "dropdown",
			  "heading" => __( "Project Column Width", "stock-wp-theme" ),
			  "param_name" => "col_width",
			  "std" =>"",
			  "value" => array(
			   __( '2 Columns', "stock-wp-theme" ) => 'col-lg-6 col-md-6',
			   __( '3 Columns', "stock-wp-theme" ) => 'col-lg-4 col-md-6',
			   __( '4 Columns', "stock-wp-theme" ) => 'col-lg-3 col-md-6',		 
			  ),
			  "description" => __( "Set project item column width", "stock-wp-theme" ),
			  "dependency"=> array(
			   "element"=>"enable_masonary",
			   "value"=> array("2"),		  
			  ),
		 ),
		 array(
			  "type" => "dropdown",
			  "heading" => __( "Enable Pagination?", "stock-wp-theme" ),
			  "param_name" => "show_pagination",
			  "std" => __(1, "stock-wp-theme" ),
			  "value" => array(
			  __( 'Yes', "stock-wp-theme" )	=> 1,
			  __( 'No', "stock-wp-theme" )	=> 2,
			  ),
			  "description" => __( "If total projects number is greater than project count and you want to show other projects in next page select yes. ", "stock-wp-theme" )
		 ),
		 array(
			  "type" => "dropdown",
			  "heading" => __( "Enable Filter Options?", "stock-wp-theme" ),
			  "param_name" => "filter_options",
			  "std" => __(1, "stock-wp-theme" ),
			  "value" => array(
			  __( 'Yes', "stock-wp-theme" )	=> 1,
			  __( 'No', "stock-wp-theme" )	=> 2,
			  ),
			  "description" => __( "If total projects number is greater than project count and you want to show other projects in next page select yes. ", "stock-wp-theme" )
		 ),
		  array(
			  "type" => "textfield",
			  "heading" => __( "Button Text", "stock-wp-theme" ),
			  "param_name" => "btn_text",
			  "std" => __("Read more", "stock-wp-theme" ),
			  "description" => __( " Type button text here. ", "stock-wp-theme" )
		 ),
		 array(
			  "type" => "css_editor",
			  "heading" => __( "Css Box", "stock-wp-theme" ),
			  "param_name" => "css",
			  "group" => __( "Design Options", "stock-wp-theme" )
			 ),
		 
	  )
 ));
