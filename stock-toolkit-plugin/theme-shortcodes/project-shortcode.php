<?php
function stock_project_sc_info($atts){
	extract(shortcode_atts(array(
	  'count'=>'5',
	  'enable_masonary'=> 1,
	  'col_width'=>'',
	  'show_pagination'=> 1,
	  'filter_options'=> 1,
	  'btn_text'=>'read more',
	  'css'=>'',	
	),$atts));	
	  if(empty($col_width)){
		  $default_col ='col-lg-4 col-md-6 col-xs-12';
	  }else{
		  $default_col =' ';
	  }	  
	  if($enable_masonary == 1){
		  $enable_masonary ='total-projects-masnry';
	  }else{
		  $enable_masonary =' ';
	  }	  	
	$dynamic_num = rand(124534,235698);	
   $stock_project_markup='
	  <script type="text/javascript">	  
	  jQuery(window).on("load",function(){
		jQuery(".project-items-'.$dynamic_num.'").isotope({
			itemSelector: ".single-element-item",
				  percentPosition: true,
				  masonry: {
					columnWidth: 1
				  }
			});     	  
	  });';	  
	  if($filter_options == 1){
		$stock_project_markup.='
			 jQuery(document).ready(function($){ 
				$(".project-list-item li").on("click",function() {				
				 $(".project-list-item li").removeClass("selected");
					 $(this).addClass("selected");					
				  var selector = $(this).attr("data-filter");
				  jQuery(".project-items-'.$dynamic_num.'").isotope({
					  filter: selector
					  });
				}); 			
			});';
		 } 
		$stock_project_markup.='
     </script>
   <div class="project-items-wrapper clearfix">';
   if($filter_options == 1 ){	   
	$stock_project_markup.='
	   <div class="row">
			<div class="col-md-12">		
			    <ul class="project-list-item">
					<li class="selected" data-filter="*"> All </li>';
					$project_cat_list = get_terms("project_category");
					if( $project_cat_list && !is_wp_error( $project_cat_list )){
						 foreach($project_cat_list as $project_cat){
							$stock_project_markup.='<li data-filter=".'.$project_cat->slug.'">'.$project_cat->name.'</li>';
						 }	
					}
					$stock_project_markup.='
			    </ul>
			</div>
		</div>';
	}	
	$stock_project_markup.='
	<div class="row">
		<div class="col-md-12">
		   <div class="row project-items-'.$dynamic_num.' '.$enable_masonary.' show-'.$count.'">';
			if($show_pagination == 1){			 
                $stock_projects = new WP_Query(array(
				   'posts_per_page'=> $count,
				   'post_type'=>'project',
				   'paged' => get_query_var( 'paged'),
				));
			}else{
			   $stock_projects = new WP_Query(array(
				   'posts_per_page'=> $count,
				   'post_type'=>'project',
				));			   
		    }
			$project_count=0;
			while($stock_projects->have_posts()):$stock_projects->the_post();
			$project_count++;
			$post_terms = get_the_terms(get_the_ID(),'project_category');
		    if($post_terms && !is_wp_error($post_terms)){
				$post_term_links = array();
				foreach($post_terms as $post_term){
					$post_term_links[] = $post_term-> slug;					
				}
				$post_term_list = join(" ",$post_term_links);
			}
			$stock_project_markup.='  
		   	<div class="'.$default_col.' ' .$col_width. ' single-element-item ' .$post_term_list. ' project-num-'.$project_count.'">
				<div class="single-project-wrapper">
					<div style="background-image:url('.get_the_post_thumbnail_url(get_the_ID(),'large').');" class="item-bg">
						<div class="single-project-item-outer table">
							<div class="single-project-item-inner table-cell">				 
								 <p>'.get_the_title().'</p>
								 <a href="'.get_permalink().'" class="read-more-btn">'.$btn_text.'</a>
							 </div>			
						 </div>			
					 </div>			
				 </div>			
			</div>';			
			endwhile;
			$stock_project_markup.='			
		   </div>
		</div>
        </div>'; 
		$stock_project_markup.='
		<div class="row paginat-wrapper clearfix">
				<div class="col-md-12">
					<div class="project-paginate-link">';	
						if($show_pagination == 1){								
							$total_pages = $stock_projects->max_num_pages;
							$big = 999999999; // need an unlikely integer						
							if($total_pages > 1){
								$current_page = max( 1, get_query_var('paged') );
								$stock_project_markup.= paginate_links( array(
									'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format'  => '?paged=%#%',				
									'prev_text' => '<i class ="fa fa-long-arrow-left"></i>',
									'next_text' => '<i class ="fa fa-long-arrow-right"></i>',
									'current' => $current_page,
									'total'   => $total_pages
								) );
							}
						}else{	
						}
				 $stock_project_markup.='		 
				 </div>
			 </div>
		 </div>
   </div>';
wp_reset_query();
 return $stock_project_markup;
}
add_shortcode('stock_projects','stock_project_sc_info');