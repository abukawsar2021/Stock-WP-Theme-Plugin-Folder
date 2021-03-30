<?php
vc_map(
	  array(
	  'name' => 'Google Map',
	  'base' => 'stock_gmap',
	  'category' => 'Stock',
	  'heading' => 'Select Map Loacation',
	  'params' => array(
		   array(
                "type" => "textfield",
                "heading" => __("Map API Key", "stock-toolkit" ),
                "param_name" => "map_api",
                "std" => "AIzaSyBw-43o03x3sAq89stGgFDHVFgqi7wiEuM",
                "description" => __("Paste your google API key here.", "stock-toolkit" )
            ),
		  array(
                "type" => "textfield",
                "heading" => __("Latitude11", "xzopro-toolkit" ),
                "param_name" => "latitude",
                "admin_label" => true,
               "std" => "41.1454454",
                "description" => __("Set map height in pixel.", "xzopro-toolkit" )
            ),
			array(
                "type" => "textfield",
                "heading" => __("Longitude", "xzopro-toolkit" ),
                "param_name" => "longitude",
                "admin_label" => true,
               "std" => "-74.07848",
                "description" => __("Set map height in pixel.", "xzopro-toolkit" )
            ),
			array(
				"type" => "textarea",
				"heading" => __( "Info Text", "xzopro-toolkit" ),
				"param_name" => "desc",
				"description" => esc_html__("Text show on info window if info window is enable. Please use <br> tag for line breake.", "xzopro-toolkit" ),
				"std" => "Uttara <br> Dhaka-12<br>Bangladesh 9100",
			),
			 array(
                "type" => "textfield",
                "heading" => __("Map Height", "xzopro-toolkit" ),
                "param_name" => "height",
                "admin_label" => true,
                "std" => "500",
                "description" => __("Set map height in pixel.", "xzopro-toolkit" )
            ),

            array(
                "type" => "textfield",
                "heading" => __("Map Zoom", "xzopro-toolkit" ),
                "param_name" => "map_zoom",
                "admin_label" => true,
                "std" => "10",
                "description" => __("Set map zoom level.", "xzopro-toolkit" )
            ),
			 array(
                "type" => "attach_image",
                "heading" => __( "Map Marker Image", "xzopro-toolkit" ),
                "param_name" => "marker_image",
                "description" => __( "Upload map marker image", "xzopro-toolkit" ),
            ),
			array(
                "type" => "dropdown",
                "heading" => __("Enable Map Marker Animation?", "xzopro-toolkit" ),
                "param_name" => "marker_animate",
                "admin_label" => true,
                "std" => "1",
                "value" => array(
                    "No" => "0",
                    "Yes" => "1"
                ),
                "description" => __("Enable or disable map marker animation.", "xzopro-toolkit" )
            ),

	  )
	  )
);