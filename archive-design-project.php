<?php get_header(); ?>

<div class="container">
	<div class="content">
	<?php if ( have_posts()) :?>

		<h1><?php echo apply_filters( 'project_archive_title', 'Our Favorite Projects' ); ?></h1>

		<?php while ( have_posts()) : the_post();?>

			<?php get_template_part( 'loop', 'design-project' ); ?>

		<?php endwhile; endif; ?>

	</div><!--.content-->

<?php get_sidebar(); ?>

</div><!--.container-->

<?php get_footer(); ?>
