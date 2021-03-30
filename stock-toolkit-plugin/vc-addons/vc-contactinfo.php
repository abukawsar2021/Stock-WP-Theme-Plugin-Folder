<?php
vc_map(
  array(
  'name' => 'Contact Info',
  'base' => 'stock_contactinfo',
  'category' => 'Stock',
	  'params' => array(
	  // params group
		  array(
		  'type' => 'param_group',
		  'value' => '',
		  'param_name' => 'contact_info',
		  // Note params is mapped inside param-group:
			  'params' => array(
				  array(
				  'type' => 'iconpicker',
				  'value' => '',
				  'heading' => 'Select Icon',
				  'param_name' => 'icon',
				  ),
				   array(
				  'type' => 'textfield',
				  'value' => '',
				  'heading' => 'Type Small Heading',
				  'param_name' => 'title_small',
				  ),
				  array(
				  'type' => 'textfield',
				  'value' => '',
				  'heading' => 'Type Big Heading or Tel Number',
				  'param_name' => 'title_big_or_tel_num',
				  ),
			  )
		  )
	  )
  )
);