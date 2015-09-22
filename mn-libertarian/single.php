<?php get_header(); ?>

<div class="row-fluid" style="margin-top:30px;">

	<div class="span2 center">
		<img src="<?php bloginfo('template_directory'); ?>/css/img/logo.png" />
	</div>

	<div class="span7">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		  <h1><?php the_title(); ?></h1>
		  <?php the_content(); ?>
		<?php endwhile; wp_reset_query(); ?>
		<?php comments_template( '', true ); ?>
	</div>

	<div class="span3">
		<?php get_sidebar(); ?>
	</div>

</div>

<?php get_footer(); ?>