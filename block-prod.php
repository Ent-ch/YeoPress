<div class="">
   <ul class="">
<?php
$query1 = new WP_Query( array( 'category_name' => 'produktsiya+front', 'posts_per_page' => -1 ) );

while ( $query1->have_posts() ) {
	$query1->the_post();
?>
	<li class="">
	   <div class="">
		 <a href="<?php the_permalink() ?>" class="lh1 font-16 block marg-bot-5"><?php the_title() ?></a>
			<?php (is_single()) ? the_content() : the_excerpt() ?>
		 </div>
		<?php if (has_post_thumbnail()): ?>
				<?php the_post_thumbnail('front-size', array(
						//'src' => $src,
						'class' => '',
						//'alt' => trim( strip_tags( $wp_postmeta->_wp_attachment_image_alt ) ),
						//'title' => trim( strip_tags( $attachment->post_title ) )
					)) ?>
		<?php endif; ?>
	</li>
<?php 
}
wp_reset_postdata();
?>
</ul>
</div>
