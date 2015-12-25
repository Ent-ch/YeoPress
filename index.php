<?php get_header() ?>
<?php	
	if (is_front_page() && isset($slider)){
		$fpost = get_page_by_path('slider', OBJECT, 'page');
		print($fpost->post_content); 
	}
?>

<div id="page-content">
	<?php get_template_part('loop', 'index') ?>
</div>
<?php get_sidebar() ?>
<?php get_footer() ?>
