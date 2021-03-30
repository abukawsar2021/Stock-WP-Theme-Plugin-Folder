<?php
vc_map( array(
  "name" => __( "Stock ContactForm", "my-text-domain" ),
  "base" => "stock_contactForm",
  "category" => __( "Stock", "my-text-domain"),
  "params" => array(
	 array(
	  "type" => "textarea_html",
	  "heading" => __( "Contact Form", "my-text-domain" ),
	  "param_name" => "contactForm_box",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Add contact form shortcode", "my-text-domain" )
	 ),
  )
 ) );
