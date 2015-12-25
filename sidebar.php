<aside id="page-sidebar">
<?php 

// $categories = get_categories('child_of=10'); 
// foreach ($categories as $category) {
	// print(SimpMenuItem($category->cat_name, get_category_link( $category->term_id )));
// }

?>

<div class="">
<?php 
	if (is_page()) {

		global $post;
		$subId = ($post->post_parent > 0) ? $post->post_parent : $post->ID;
		$querySub = new WP_Query( array( 'post_parent' => $subId, 'post_type' => 'page' ) );

		while ( $querySub->have_posts() ) {
			$querySub->the_post();
			print(SimpMenuItem(get_the_title(), get_the_permalink()));
			
		}
		wp_reset_postdata();
	}
	?>
</div>


	<ul>
		<?php if ( ! dynamic_sidebar( 'main-sidebar' ) ) : ?>

		<?php endif; ?>
	</ul>
	
</aside>
