<?php

vc_map( array(
  "name" => __( "Stock Services", "my-text-domain" ),
  "base" => "stock_service_section",
  "class" => "",
  "category" => __( "Stock", "my-text-domain"),
  "params" => array(
	 array(
	  "type" => "textfield",
	  "heading" => __( "Title", "my-text-domain" ),
	  "param_name" => "title",
	  "value" => __( "Type title name", "my-text-domain" ),
	  "description" => __( "Type title name", "my-text-domain" )
	 ),
	  array(
	  "type" => "textarea",
	  "heading" => __( "Desc", "my-text-domain" ),
	  "param_name" => "desc",
	  "value" => __( "Type Content", "my-text-domain" ),
	  "description" => __( "Type Content", "my-text-domain" )
	 ),
	  array(
	  "type" => "dropdown",
	  "heading" => __( "Link Type", "my-text-domain" ),
	  "param_name" => "link_type",
	  "value" => __( " ", "my-text-domain" ),
	  "description" => __( " ", "my-text-domain" ),
		  "value"=>array(
		   'Link Type Page'=>'page',
		   'External Link'=>'link',	  
		  ),
	),
	array(
	  "type" => "dropdown",
	  "heading" => __( "Link To Page", "my-text-domain" ),
	  "param_name" => "link_to_page",
	  "value" => stock_service_page_as_list() ,
	  "description" => __( "Select Page ", "my-text-domain" ),
		"dependency"=>array(
		   'element'=>'link_type',
		   'value'=>'page',	  
		  ),
	),
	array(
	  "type" => "textfield",
	  "heading" => __( "External link", "my-text-domain" ),
	  "param_name" => "external_link",
	  "description" => __( "Select Link ", "my-text-domain" ),
		"dependency"=>array(
		   'element'=>'link_type',
		   'value'=>'link',	  
		  ),
	),
	array(
	  "type" => "textfield",
	  "heading" => __( "Link Text", "my-text-domain" ),
	  "param_name" => "link_text",
	  "description" => __( "Link Text ", "my-text-domain" ),
	),
	array(
	  "type" => "dropdown",
	  "heading" => __( "Select Icon", "my-text-domain" ),
	  "param_name" => "icon_type",
	  "description" => __( "Select Icon Type ", "my-text-domain" ),
		"value"=>array(
		   'Upload Icon'=>'image',
		   'Font Awesome Icon'=>'icon',	  
		  ),
	),
	array(
	  "type" => "attach_image",
	  "heading" => __( "Select Image", "my-text-domain" ),
	  "param_name" => "upload_icon",
	  "description" => __( "Select Icon Type ", "my-text-domain" ),
		"dependency"=>array(
		   'element'=>'icon_type',
		   'value'=>'image',	  
		  ),
	),
	array(
	  "type" => "iconpicker",
	  "heading" => __( "Select Icon", "my-text-domain" ),
	  "param_name" => "icon",
	  "description" => __( "Select Icon ", "my-text-domain" ),
		"dependency"=>array(
		   'element'=>'icon_type',
		   'value'=>'icon',	  
		  ),
	),
	array(
	  "type" => "attach_image",
	  "heading" => __( "Box Background Image", "my-text-domain" ),
	  "param_name" => "box_background",
	  "description" => __( "Select Background Color ", "my-text-domain" ),
	),	 			
   )
 ));
