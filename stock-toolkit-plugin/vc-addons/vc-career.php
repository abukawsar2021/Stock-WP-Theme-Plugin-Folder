<?php
 vc_map( array(
  "name" => __( "Career", "my-text-domain" ),
  "base" => "stock_career_box",
  "category" => __( "Stock", "my-text-domain"),
	  "params" => array(
		 array(
		  "type" => "textfield",
		  "heading" => __( "Type the title", "my-text-domain" ),
		  "param_name" => "title",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "This is title", "my-text-domain" )
		 ),
		  array(
		  "type" => "textarea",
		  "heading" => __( "Type the content", "my-text-domain" ),
		  "param_name" => "desc",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "This is desc", "my-text-domain" )
		 ),
		  array(
		  "type" => "textfield",
		  "heading" => __( "This is button link", "my-text-domain" ),
		  "param_name" => "btn_link",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "This is link", "my-text-domain" )
		 ),
		  array(
		  "type" => "textfield",
		  "heading" => __( "Type button link text", "my-text-domain" ),
		  "param_name" => "btn_text",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "This is button text", "my-text-domain" )
		 ),	 
	  )
 ));
