<?php

//================Vc block load code ==============================
	if( ! defined('ABSPATH' ) ) {
 		exit;
 	}
 	// Class started
 	Class stock_VCExtend_Addon_Class{
 		function __construct(){
 			// we safely integrate with VC with this hook
 			add_action('init', array( $this, 'stock_Integrate_WithVC'));
 		}

 		public function stock_Integrate_WithVC() {
 			if( ! defined( 'WPB_VC_VERSION' ) ){
 				add_action('admin_notices', array( $this, 'stock_ShowVc_Version_Notice' ));
 				return;
 			}
 			// visual composer addons
 			include  STOCK_ACC_PATH . '/vc-addons/vc-stock-sliders.php';			
 			include  STOCK_ACC_PATH . '/vc-addons/logo-carousel.php';			
 			include  STOCK_ACC_PATH . '/vc-addons/vc-service.php';			
 			include  STOCK_ACC_PATH . '/vc-addons/vc-cta-btn.php';			
 			include  STOCK_ACC_PATH . '/vc-addons/vc-behindTheStory-btn.php';			
 			include  STOCK_ACC_PATH . '/vc-addons/vc-counter.php';					
 			include  STOCK_ACC_PATH . '/vc-addons/vc-testimonial.php';			
 			include  STOCK_ACC_PATH . '/vc-addons/vc-googleMap.php';
 			include  STOCK_ACC_PATH . '/vc-addons/vc-promo-box.php';
 			include  STOCK_ACC_PATH . '/vc-addons/vc-projects.php';
 			include  STOCK_ACC_PATH . '/vc-addons/vc-pricingtable.php';
 			include  STOCK_ACC_PATH . '/vc-addons/vc-team.php';
 			include  STOCK_ACC_PATH . '/vc-addons/vc-video-popup.php';	
 			include  STOCK_ACC_PATH . '/vc-addons/vc-progressBar.php';	
 			include  STOCK_ACC_PATH . '/vc-addons/vc-contactinfo.php';	
 			include  STOCK_ACC_PATH . '/vc-addons/vc-recentPost.php';	
 			include  STOCK_ACC_PATH . '/vc-addons/vc-career.php';	
 			}

 		// show visual composer version
 		public function stock_ShowVc_Version_Notice(){
 			$theme_data = wp_get_theme();
 			echo '
	 			<div class="notice notice-warning">
				    <p>'.sprintf(__('<strong>%s</strong> requires <strong><a href="http://bit.ly/vcomposer" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'vc_extend'), $plugin_data['Name']).'</p>
				</div>
 			';
 		}
 	}

// Finally initialize code
new stock_VCExtend_Addon_Class();