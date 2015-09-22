<?php get_header(); ?>

<div class="row-fluid" style="margin-top:30px;">

  <div class="span2 center">
    <img src="<?php bloginfo('template_directory'); ?>/css/img/logo.png" />
  </div>

  <div class="span7">
    <h1>Recent News</h1>
    <?php if ( have_posts() ): ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br /><span class="label label-info"><?php the_date(); ?> | By: <?php the_author(); ?></span>
        </h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class="btn btn-mini">Read More</a>
        <hr />
      <?php endwhile; wp_reset_query(); ?>
    <?php else: ?>
      <h2>No posts found</h2>
    <?php endif; ?>

    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
      <div class="prev">
        <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
      </div>
      <div class="next">
        <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
      </div>
    <?php endif; ?>
  </div>

  <div class="span3">
    <?php get_sidebar(); ?>
  </div>

</div>

<?php get_footer(); ?>