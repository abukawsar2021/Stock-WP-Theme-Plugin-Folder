<?php
vc_map( array(
	  "name" => __( "Video Popup", "my-text-domain" ),
	  "base" => "stock_video_popup",
	  "category" => __( 'Stock', 'my-text-domain' ),
	  "params" => array(
		   array(
			  "type" => "textfield",
			  "param_name" => "title",
			  "value" => "",
			  "description" => __( "Type Popup Title", 'my-text-domain' ),
		  ),
		   array(
			  "type" => "textarea",
			  "param_name" => "desc",
			  "value" => "",
			  "description" => __( "Type Popup Content", 'my-text-domain' ),
		  ),
		  array(
			  "type" => "textfield",
			  "param_name" => "url",
			  "value" => "https://www.youtube.com/watch?v=5ovp0e_bRP4",
			  "description" => __( "Type Popup Video Url", 'my-text-domain' ),
		  ),
		  array(
			  "type" => "textfield",
			  "param_name" => "width",
			  "value" => "500px",
			  "description" => __( "Type Video Width", 'my-text-domain' ),
		  ),
		  array(
			  "type" => "textfield",
			  "param_name" => "height",
			  "value" => "500px",
			  "description" => __( "Type Video Height", 'my-text-domain' ),
		  ),
		   array(
			  "type" => "css_editor",
			  "param_name" => "css",
			  "group" => __( "Design Options", 'my-text-domain' ),
		  ),
		),
  ) );
