<?php get_header(); ?>
<div class="row">
	<div class="span<?php wpstrap_col_width( 'main' ); ?>" id="main-col">
		<h1>Blog Category: <?php echo single_cat_title( '', false ); ?></h1>
		<hr class="page-title-sep">
		<?php get_template_part( 'loop' ); ?>
	</div>	
	<div class="span<?php wpstrap_col_width( 'sidebar' ); ?>" id="sidebar">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>