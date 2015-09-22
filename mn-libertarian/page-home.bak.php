<?php get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- SLIDE SHOW -->
<div class="row-fluid">
<!--
	<div class="action-links blue-gradient">
		<ul>
			<li>
				<a href="/take-action/join-the-party/">Join LPMN</a>
			</li>
			<li>
				<a href="/take-action/donate/">Donate</a>
			</li>
			<li>
				<a href="/take-action/calendar-of-events/">2013 Conference</a>
			</li>
			<li>
				<a href="/take-action/volunteer/">Volunteer</a>
			</li>

			<li>
				<a href="http://www.theadvocates.org/quizp/index.html" target="_blank">Are You Libertarian?</a>
			</li>
		</ul>
	</div>
	-->
	<div class="slide-holder">
		<?php
			if (get_field('slide_one')) {
				echo '<a class="current_slide" id="slide_one" href="' . get_field('slide_one_click_url') . '"><img src="' . get_field('slide_one') . '" /></a>';
			}
			if (get_field('slide_two')) {
				echo '<a id="slide_two" href="' . get_field('slide_two_click_url') . '"><img src="' . get_field('slide_two') . '" /></a>';
			}
			if (get_field('slide_three')) {
				echo '<a id="slide_three" href="' . get_field('slide_three_click_url') . '"><img src="' . get_field('slide_three') . '" /></a>';
			}
			if (get_field('slide_four')) {
				echo '<a id="slide_four" href="' . get_field('slide_four_click_url') . '"><img src="' . get_field('slide_four') . '" /></a>';
			}
		?>
		<div class="slide-holder-controls">
			<?php
				if (get_field('slide_one')) {
					echo '<div data-slide="slide_one" class="current"></div>';
				}
				if (get_field('slide_two')) {
					echo '<div data-slide="slide_two"></div>';
				}
				if (get_field('slide_three')) {
					echo '<div data-slide="slide_three"></div>';
				}
				if (get_field('slide_four')) {
					echo '<div data-slide="slide_four"></div>';
				}
			?>	
		</div>
	</div>
</div>

<div class="row-fluid homepage-widgets" style="margin-top: 30px;">
	<div class="span9">
		<div class="row-fluid">	
			<div class="span7">
				<ul class="recent-news-slider-controls pull-right">
					<li><div data-slide="slide0" class="current"></div></li>
					<li><div data-slide="slide1"></div></li>
					<li><div data-slide="slide2"></div></li>
					<li><div data-slide="slide3"></div></li>
				</ul>
				<h2>Recent News</h2>
				<ul class="recent-news-slider-slides">
					<?php 
						$args = array(
							'numberposts'     => 4,
							'orderby'         => 'post_date',
							'order'           => 'DESC',
							'post_type'       => 'post',
							'post_status'     => 'publish'
						);

						$posts = get_posts($args);

						foreach ($posts as $i=>$p) {
							if ($i == 0) {
								echo '<li id="slide' . $i . '" class="current-slide">';
							} else {
								echo '<li style="display:none;" id="slide' . $i . '"">';
							}
							echo '<div style="max-height:160px;overflow:hidden;">' .get_the_post_thumbnail( $p->ID) . '</div>
								<h5>' . $p->post_title . '</h5>
								<p>' . $p->post_excerpt . '</p>
								<p><a href="' . get_permalink($p->ID) . '" class="btn btn-mini btn-info">Read Full Story</a></p>
							</li>';
						}
					?>
				</ul>
			</div>

			<div class="span5">
				<h2>Upcoming Events</h2>
				<?php get_sidebar('events'); ?>
			</div>
		</div>

		<div class="row-fluid">
			<h2>Videos</h2>
			<div>
			<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/Wrufd5Soq24?list=UU71BXi5AfUq2XjdchL1_Z1A" frameborder="0" allowfullscreen></iframe>
			<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/ZPWH5TlbloU" frameborder="0" allowfullscreen></iframe>
			</div>
			<div>

			</div>
			<?php 
				// disabling direct import of youtube feed - only have 3 videos to start
				//include_once('inc/youtube_feed.php'); 
			?>
		</div>
	</div>
	<div class="span3">
		<h2>Stay Connected
			<ul class="social-links-small pull-right">
				<li>
					<a href="https://www.facebook.com/LPMINNESOTA" class="opacity-50" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/css/img/facebook-blue.png" />
					</a>
				</li>
				<li>
					<a href="https://twitter.com/Libertarian_MN" class="opacity-50" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/css/img/twitter-blue.png" />
					</a>
				</li>
				<li>
					<a href="https://plus.google.com/109487346581246501254/posts" class="opacity-50" target="_blank">
						<img src="<?php bloginfo('template_directory'); ?>/css/img/google-blue.png" />
					</a>
				</li>
			</ul>
		</h2>
		<div class="row-fluid">
			<div class="span12 well">
				<h5>Facebook</h5>
				<div class="fb-like-box" data-href="http://www.facebook.com/LPMINNESOTA" data-width="230" data-height="420" data-show-faces="true" data-stream="true" data-header="false"></div>
			</div>
			<!-- Hiding twitter feed - is redundant of the facebook feed --> 
			<!-- 
			<div class="span12 well">
				<h5>Latest Tweets<img src="<?php bloginfo('template_directory'); ?>/css/img/facebook-blue.png" class="pull-right opacity-30" /></h5>
				<?php include_once('inc/twitter.php'); ?>
			</div>
			-->
		</div>
		<div class="row-fluid">
			<div class="span12 well">
				<h5>RSS</h5>
				<?php include_once('inc/rss.php'); ?>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function () {
		// featured area actions
		$('.slide-holder-controls div').click(function () {
			$('.slide-holder .current-slide').fadeOut(function () {
				if ($(this).next()) {
					$(this).removeClass('current-slide');
					$(this).next().fadeIn().addClass('current-slide');
				}
			});
		});

		// recent news clicks
		$('.recent-news-slider-controls li div').click(function () {
			var _this = $(this);
			$('.recent-news-slider-controls li div').removeClass('current');
			$(this).addClass('current');
			$('.recent-news-slider-slides .current-slide').fadeOut(function () {
				$(this).removeClass('current-slide');
				$('#' + _this.attr('data-slide')).fadeIn();
				$('#' + _this.attr('data-slide')).addClass('current-slide');
			});
		});
	});
</script>

<?php get_footer(); ?>