<?php
vc_map( array(
  "name" => __( "Stock CTA Btn", "my-text-domain" ),
  "base" => "stock_cta_btn",
  "category" => __( "Stock", "my-text-domain"),
  "params" => array(
	 array(
	  "type" => "textfield",
	  "heading" => __( "Link Text", "my-text-domain" ),
	  "param_name" => "link_text",
	  "value" => __( "Start a project", "my-text-domain" ),
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Link Type", "my-text-domain" ),
	  "param_name" => "link_type",
	  "std" => "page",
	  "value" =>array(
	   "Page Type" => "page",
	   "External Link Type" => "link"),
	 ),
	 array(
	  "type" => "dropdown",
	  "heading" => __( "Page Type", "my-text-domain" ),
	  "param_name" => "page_type",
	  "value" => stock_service_page_as_list(),
	  "dependency" =>array(
	   "element" => "link_type",
	   "value" => "page"),
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "External Link", "my-text-domain" ),
	  "param_name" => "external_link",
	  "dependency" =>array(
	   "element" => "link_type",
	   "value" => "link"),
	 ),
	 
   )  
));
