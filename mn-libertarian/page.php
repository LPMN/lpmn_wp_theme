<?php get_header(); ?>

<div class="row-fluid" style="margin-top:30px;">

	<div class="span2 center">
		<img src="<?php bloginfo('template_directory'); ?>/css/img/logo.png" />
	</div>

	<div class="span7">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		  	<h1><?php the_title(); ?></h1>
		<?php
			the_content();
			endwhile; wp_reset_query();

			if (is_page('join-the-party')) {
				// TODO fix the join form
				//register_donate_form('join'); Commenting out
			}
		?>
	</div>

	<div class="span3">
		<?php get_sidebar('page'); ?>
	</div>

</div>

<?php get_footer(); ?>