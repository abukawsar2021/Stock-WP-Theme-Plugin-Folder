<?php


vc_map( array(
  "name" => __( "Recent Post", "my-text-domain" ),
  "base" => "stock_recent_post",
  "category" => __( "Stock", "my-text-domain"),
	  "params" => array(
		 array(
		  "type" => "dropdown",
		  "heading" => __( " Select The Post", "my-text-domain" ),
		  "param_name" => "count",
		  "std" => "3",
		  "value" =>array(
			  __( "All Posts ", "my-text-domain" )=> '-1',
			  __( "1 Post",  "my-text-domain" )=> '1',
			  __( "2 Posts", "my-text-domain" )=> '2',
			  __( "3 Posts", "my-text-domain" )=> '3',
			  __( "4 Posts", "my-text-domain" )=> '4',
			  __( "5 Posts", "my-text-domain" )=> '5',
			  __( "6 Posts", "my-text-domain" )=> '6',
			  __( "7 Posts", "my-text-domain" )=> '7',
			  __( "8 Posts", "my-text-domain" )=> '8',
			  __( "9 Posts", "my-text-domain" )=> '9',
			  __( "10 Posts", "my-text-domain" )=> '10',
		  ),
		  "description" => __( "Select the  post", "my-text-domain" )
		 ),
		 
	  )
 ));

