<?php

vc_map( array(
  "name" => __( "Team Members", "my-text-domain" ),
  "base" => "stock_team",
  "category" => __( "Stock", "my-text-domain"),
  "params" => array(
	 array(
	  "type" => "attach_image",
	  "heading" => __( "Team Image", "my-text-domain" ),
	  "param_name" => "team_image",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Attach Team Image", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Team Member Title", "my-text-domain" ),
	  "param_name" => "title",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Team Member Name", "my-text-domain" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Team Member Subtitle", "my-text-domain" ),
	  "param_name" => "sub_title",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Team Member Subtitle", "my-text-domain" )
	 ),
	 array(
	  'type' => 'param_group',
	  'param_name' => 'members_icons',
		  'params' => array(
			  array(
			  'type' => 'iconpicker',
			  'heading' => 'Team Members Social Icon',
			  'param_name' => 'social_icons',
			  ),
		   array(
		  "type" => "textfield",
		  "heading" => __( "Team Member Icon Link URL", "my-text-domain" ),
		  "param_name" => "link_url",
		  "value" => __( "", "my-text-domain" ),
		  "description" => __( "Team Member Icon Link URL", "my-text-domain" )
		 ),
		 
		 ),
	 ),
	  array(
	  "type" => "css_editor",
	  "heading" => __( "Css Editor", "my-text-domain" ),
	  "param_name" => "css",
	  "group" => __( "Design Groups", "my-text-domain" )
	 ),
	
  )
 ) );
