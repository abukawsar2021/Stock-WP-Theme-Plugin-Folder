<?php

function recent_post_shortcode($atts, $cotent = null){
	extract(shortcode_atts(array(
	
	  'count'=>'3',
	  'category'=>'',
	
	
	),$atts));
	
	
		 $stock_recent_post = new WP_Query(array(
	     'post_type'=>'post',
	     'posts_per_page'=> $count,
		  'ignore_sticky_posts' => 1,
		  
	   ));
	$stock_recent_post_markup='';
	
	while( $stock_recent_post->have_posts()) : $stock_recent_post->the_post();
	$id =  get_the_id();
	$title =  get_the_title();
	/* $content =  get_the_content(); */
	
	$stock_recent_post_markup.='
	<div class="col-lg-4 col-md-6 col-sm-12">
	 <div class="single-recent-post">
	  <a href="'.get_the_permalink().'"><img src="'.get_the_post_thumbnail_url($id,'large').'" alt="" /></a>
	   <h3><a href="'.get_the_permalink().'">'.$title.'</h3></a>
	   <ul class="recent-post-header list-unstyled inline-block">
	   	<li class="post-admin"><i class="fa fa-user"></i>'.get_the_author_posts_link($id).'</li>
	   	<li class="post-date"><i class="fa fa-calendar"></i>'.get_the_date('F,j,Y').'</li>
	   </ul>
	   '.wpautop(wp_trim_words( get_the_content(), 35)).'
		 <ul class="recent-post-bottom list-unstyled inline-block">
			<li class="post-readmore-btn"><a href="'.get_the_permalink($id).'">'.esc_html__('Read More','stock').'</a></li>
			<li class="post-comments"><i class="fa fa-comment-o"></i>'.get_comments_number().'</li>
	   </ul>
</div>	   
	</div>';	
	
	endwhile;
	wp_reset_query();
	
	return $stock_recent_post_markup;	
}
add_shortcode('stock_recent_post','recent_post_shortcode');