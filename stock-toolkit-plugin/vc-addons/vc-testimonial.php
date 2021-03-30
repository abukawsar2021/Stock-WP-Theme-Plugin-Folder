<?php
vc_map( array(
  "name" => __( "Stock Testimonial", "my-text-domain" ),
  "base" => "stock_testimonial",
  "category" => __( "Stock", "my-text-domain"),
  "params" => array(
	 array(
	  "type" => "attach_image",
	  "heading" => __( "Testimonial Image", "my-text-domain" ),
	  "param_name" => "testimonial_image",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Add testimonial image", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Testimonial Title", "my-text-domain" ),
	  "param_name" => "testimonial_title",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Type testimonial title", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Testimonial Subtitle", "my-text-domain" ),
	  "param_name" => "testimonial_subtitle",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Type testimonial subtitle", "my-text-domain" )
	 ),
	 array(
	  "type" => "textarea",
	  "heading" => __( "Testimonial Content", "my-text-domain" ),
	  "param_name" => "testimonial_desc",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Type testimonial description", "my-text-domain" )
	 ),
  )
 ) );
