<?php
vc_map( array(
  "name" => __( "Pricing Table", "my-text-domain" ),
  "base" => "stock_pricing",
  "category" => __( "Stock", "my-text-domain"),
  "params" => array(
   array(
	  "type" => "textfield",
	  "heading" => __( "Table Title", "my-text-domain" ),
	  "param_name" => "title",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Table Title", "my-text-domain" )
	 ),
	 array(
	  "type" => "textfield",
	  "heading" => __( "Table Tag", "my-text-domain" ),
	  "param_name" => "tbl_tag",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Table tag i.e popular, advanced, basic", "my-text-domain" )
	 ),
	  array(
	  "type" => "dropdown",
	  "heading" => __( "Icon Type", "my-text-domain" ),
	  "param_name" => "icon_type",
	  "std" => __( "", "my-text-domain" ),
	  "value" => array(
	    __("FontAwesome",'stock-wordwrap-theme') =>'fontawesome',
	    __("Flaticon",'stock-wordwrap-theme') =>'flaticon',
	  ),
	  "description" => __( "Select Icon", "my-text-domain" )
	 ),
	 array(
	  "type" => "iconpicker",
	  "heading" => __( "FontAwesome", "my-text-domain" ),
	  "param_name" => "icon_fontawesome",
	  "std" => __( "<i class='fa fa-cog'></i>", "my-text-domain" ),
	  "dependency" => array(
	   'element' =>'icon_type',
	   'value' =>'fontawesome',
	  ),
	  "description" => __( " Select fontawesome", "my-text-domain" )
	 ),
	 array(
	  "type" => "param_group",
	  "heading" => __( "Click + symble & Add more items", "my-text-domain" ),
	  "param_name" => "table_item_list",
	  "description" => __( "Select Flaticon, basic", "my-text-domain" ),
		 "params"=>array(
			 array(
			   "type" => "textfield",
			  "heading" => __( "Single  Table Item", "my-text-domain" ),
			  "param_name" => "single_list_item",
			 ),	
		 )	
	  ),
	   array(
	  "type" => "textfield",
	  "heading" => __( "Currency ", "my-text-domain" ),
	  "param_name" => "currency",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Table Currency", "my-text-domain" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Table Price", "my-text-domain" ),
	  "param_name" => "price",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Table Pricing", "my-text-domain" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Button Text", "my-text-domain" ),
	  "param_name" => "btn_text",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Button Text", "my-text-domain" )
	 ),
	  array(
	  "type" => "textfield",
	  "heading" => __( "Button Link", "my-text-domain" ),
	  "param_name" => "btn_link",
	  "value" => __( "", "my-text-domain" ),
	  "description" => __( "Button Link", "my-text-domain" )
	 ),
	   array(
	  "type" => "css_editor",
	  "heading" => __( "Css Editor", "my-text-domain" ),
	  "param_name" => "css",
	  "description" => __( "Button Link", "my-text-domain" ),
	  'group' => __( 'Design Options', 'xzopro-toolkit' ),
	 ),

  )
 ) );
