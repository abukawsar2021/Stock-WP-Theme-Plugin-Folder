<?php
vc_map( array(
  "name" => __( "Stock Counter", "my-text-domain" ),
  "base" => "stock_counter",
  "category" => __( "Stock", "my-text-domain"),
	  "params" => array(
		  array(
		  "type" => "textfield",
		  "heading" => __( "Static Number", "my-text-domain" ),
		  "param_name" => "number",
		  "value" => __( "", "my-text-domain" ),
		 ),  
		 array(
		  "type" => "textfield",
		  "heading" => __( "Static Number Unit", "my-text-domain" ),
		  "param_name" => "number_unit",
		  "value" => __( "", "my-text-domain" ),
		 ),  
	   array(
		  "type" => "textfield",
		  "heading" => __( "Static Number Description", "my-text-domain" ),
		  "param_name" => "text", 
		  "value" => __( "some description", "my-text-domain" ),
	   ), 
	)
));
