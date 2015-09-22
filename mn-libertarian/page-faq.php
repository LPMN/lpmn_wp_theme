<?php get_header(); ?>

<div class="row-fluid" style="margin-top:30px;">

	<div class="span2 center">
		<img src="<?php bloginfo('template_directory'); ?>/css/img/logo.png" />
	</div>

	<div class="span10">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="row-fluid">
				<div class="span9">
			  		<h1><?php the_title(); ?></h1>
			  		<?php the_content(); ?>
			  	</div>
			  	<div class="span3">
			  		<h3 class="orange-border-bottom">Topics</h3>
			  		<ul class="faq-topics">
			  		<?php
			  			$child_content = array();

			  			$args = array(
			  				'sort_column' => 'ID',
							'hierarchical' => 0,
							'parent' => get_the_ID(),
							'post_type' => 'page',
							'post_status' => 'publish'
						); 
						
						$pages = get_pages($args);

						foreach ($pages as $i=>$p) {
							if ($i == 0) {
								echo '<li data-page-id="' . $p->ID . '" class="current">' . $p->post_title . '</li>';
							} else {
								echo '<li data-page-id="' . $p->ID . '">' . $p->post_title . '</li>';
							}

							$c = get_pages(array(
								'sort_column' => 'ID',
								'hierarchical' => 0,
								'parent' => $p->ID,
								'post_type' => 'page',
								'post_status' => 'publish'
							));

							$d = array(
								'name' => $p->post_title,
								'id' => $p->ID,
								'pages' => $c
							);

							array_push($child_content, $d);
						}
			  		?>
			  		</ul>
			  	</div>
		  	</div>
		<?php endwhile; wp_reset_query(); ?>
		
		<div class="faq-page-content row-fluid">
			<div class="span9">
			<?php
				// render child page content
				foreach ($child_content as $ci=>$cp) {
					if ($ci == 0) {
						echo '<div class="faq-item-holder current" id="faq_' . $cp['id'] . '">';
					} else {
						echo '<div class="faq-item-holder" id="faq_' . $cp['id'] . '">';
					}

					echo '<h3>' . $cp['name'] . '</h3>';

					foreach ($cp['pages'] as $pp) {
						echo '<div class="row-fluid orange-border-top faq-item">
								<div class="span8">
									<p class="lead">' . $pp->post_title . '</p>
								</div>
								<div class="span4">
									<button data-content-id="' . $pp->ID . '" class="btn pull-right hide-show-button">Show Answer</button>
								</div>
								<div class="row-fluid faq-answer" id="content_' . $pp->ID . '"><p>' . $pp->post_content . '</p></div>
							</div>';
					}

					echo '</div>';
				}
			?>
			</div>
			<div class="span3" style="margin-top:20px;">
				<?php get_sidebar('page'); ?>
			</div>
		</div>

	</div>

	<div class="center" style="margin-top:40px;clear:both;float:left;width:100%;"><a href="#" id="top-of-page">- Top of Page -</a></div>

</div>

<script type="text/javascript">
	$(function () {
		$('#top-of-page').click(function (evt) {
			evt.preventDefault();
			$(window).scrollTop(0);
		});
		$('.faq-topics li').click(function () {
			var pid = $(this).attr('data-page-id');
			$('.faq-topics li').removeClass('current');
			$(this).addClass('current');
			$('.faq-item-holder.current').removeClass('current').fadeOut(function () {
				$('#faq_' + pid).fadeIn().addClass('current');
			});
		});
		$('.hide-show-button').click(function () {
			if ($('#content_' + $(this).attr('data-content-id')).hasClass('open')) {
				$('#content_' + $(this).attr('data-content-id')).fadeOut().removeClass('open');
				$(this).html('Show Answer');
			} else {
				$('#content_' + $(this).attr('data-content-id')).fadeIn().addClass('open');
				$(this).html('Hide Answer');
			}
		});
	});
</script>

<?php get_footer(); ?>