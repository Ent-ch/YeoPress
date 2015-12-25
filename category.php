<?php get_header(); ?>
<div class="">
<?php get_sidebar(); ?>
	<h1 class=""><?php single_cat_title(); ?></h1>
	
	<?php if (have_posts()): ?>
		<ul class="clear-ul wib">
		<?php while (have_posts()) : the_post() ?>
		
	<li class="">   
		<a href="<?php the_permalink() ?>" class=""><?php the_post_thumbnail('medium', array('class' => '')) ?></a>
		<a href="<?php the_permalink() ?>" class=""><?php the_title() ?></a>
    </li>
	
		<?php endwhile; ?>
		</ul>
	<?php else: ?>
		<p>Nothing found</p>
	<?php  endif; ?>

</div>
<?php get_footer(); ?> 