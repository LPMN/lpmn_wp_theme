<?php get_header(); ?>

<div class="row-fluid" style="margin-top:30px;">

	<div class="span2 center">
		<img src="<?php bloginfo('template_directory'); ?>/css/img/logo.png" />
	</div>

	<div class="span10">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		  	<h1><?php the_title(); ?></h1>
		  	<?php the_content(); ?>
		<?php endwhile; wp_reset_query(); ?>

		<div class="row-fluid">
			<div class="span4">
				<ul class="nav nav-pills nav-stacked platform-nav">
					<?php
						$nav_args = array(
			  				'sort_column' => 'post_title',
							'hierarchical' => 0,
							'parent' => $post->ID,
							'post_type' => 'page',
							'post_status' => 'publish'
						); 
						
						$nav_pages = get_pages($nav_args);

						foreach ($nav_pages as $j=>$np) {
							echo '<li><a href="#" data-post-id="' . $np->ID . '">' . $np->post_title . '</a>';

							$child_pages = get_pages(array(
								'sort_column' => 'ID',
								'hierarchical' => 0,
								'parent' => $np->ID,
								'post_type' => 'page',
								'post_status' => 'publish'
							));

							if (count($child_pages) > 0) {
								echo '<ul class="nav nav-pills nav-stacked platform-nav-one">';
								foreach ($child_pages as $k=>$cp) {
									echo '<li><a href="#" data-post-id="' . $cp->ID . '">' . $cp->post_title . '</a>';
									$nested_child_pages = get_pages(array(
										'sort_column' => 'ID',
										'hierarchical' => 0,
										'parent' => $cp->ID,
										'post_type' => 'page',
										'post_status' => 'publish'
									));

									if (count($nested_child_pages) > 0) {
										echo '<ul class="nav nav-pills nav-stacked platform-nav-two">';
										foreach ($nested_child_pages as $h=>$ncp) {
											echo '<li><a href="#" data-post-id="' . $ncp->ID . '">' . $ncp->post_title . '</a>';
										}
										echo '</ul>';
									}
								}
								echo '</ul>';
							}

							echo '</li>';
						}
					?>
				</ul>
			</div>
			<div class="span8" id="platform-content">
				<?php 
					$args = array(
		  				'sort_column' => 'post_title',
						'hierarchical' => 0,
						'child_of' => get_the_ID(),
						'post_type' => 'page',
						'post_status' => 'publish'
					); 
					
					$pages = get_pages($args);

					foreach ($pages as $i=>$p) {
						if ($p->post_content) {
							echo '<div class="platform-item" id="plank_' . $p->ID . '">
								<h3 class="orange-border-bottom">' . $p->post_title . '</h3>
								<p>' . $p->post_content . '</p>
							</div>';
						}
					}
				?>
			</div>
		</div>

	</div>

</div>

<script type="text/javascript">
	$(function () {
		if ($('.platform-nav-one')) {
			$('.platform-nav-one').parent().addClass('has-sub-nav');
		}

		if ($('.platform-nav-two')) {
			$('.platform-nav-two').parent().addClass('has-sub-nav');
		}

		$('.platform-nav a').on('click', function (evt) {
			evt.preventDefault();
			if ($(this).parent().hasClass('has-sub-nav')) {
				$('.platform-nav li').removeClass('active');
				$(this).parent().addClass('active');
				$('.platform-nav-one ul').hide().removeClass('open');
				$(window).scrollTop(0);
				if ($('>ul', $(this).parent()).hasClass('open')) {
					$('>ul', $(this).parent()).hide().removeClass('open');
				} else {
					$('>ul', $(this).parent()).show().addClass('open');
				}
			} else {
				$('.platform-nav li').removeClass('active');
				$(this).parent().addClass('active');
			}
			if ($('#plank_' + $(this).attr('data-post-id')).length > 0) {
				$(window).scrollTop(0);
				$('.current-plank').hide();
				$('#plank_' + $(this).attr('data-post-id')).show().addClass('current-plank');
			}
		});

		$('.platform-nav a').each(function (i) {
			if (i === 0) {
				$(this).trigger('click');
			}
		})

	});
</script>

<?php get_footer(); ?>