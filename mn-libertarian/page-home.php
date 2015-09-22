<?php get_header(); ?>
<link rel="stylesheet" href="/wordpress/wp-content/themes/mn-libertarian/css/flexslider.css" type="text/css" media="screen" />

<!-- Modernizr -->
<script src="/wordpress/wp-content/themes/mn-libertarian/js/modernizr.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>

	.flex-prev, .flex-next {
		line-height: 40px !important;
	}
 
</style>

<!-- SLIDE SHOW -->
<div class="row-fluid">
	<div class="span9">
		<div class="flexslider">
		  <ul class="slides">
		  	<?php
				if (get_field('slide_one')) {
					echo '<li><a id="slide_1" href="' . get_field('slide_one_click_url') . '"><img src="' . get_field('slide_one') . '" /></a></li>';
				}
				if (get_field('slide_two')) {
					echo '<li><a id="slide_2" href="' . get_field('slide_two_click_url') . '"><img src="' . get_field('slide_two') . '" /></a></li>';
				}
				if (get_field('slide_three')) {
					echo '<li><a id="slide_3" href="' . get_field('slide_three_click_url') . '"><img src="' . get_field('slide_three') . '" /></a></li>';
				}
				if (get_field('slide_four')) {
					echo '<li><a id="slide_4" href="' . get_field('slide_four_click_url') . '"><img src="' . get_field('slide_four') . '" /></a></li>';
				}
			?>
		  </ul>
		</div>
	</div>
	  	
	<div class="span3">
		<div class="action-links blue-gradient" style="">
		<ul>
			<li>
				<a href="/membership/">Contribute!</a>
			</li>
			<li>
				<a href="/updates/">Get Updates</a>
			</li>

			<li>
				<a href="/volunteer/">Volunteer</a>
			</li>			
		
			<li>
				<a href="/issues/">Learn More</a>
			</li>

		</ul>
	</div>
	</div>		
</div>	


<div class="row-fluid homepage-widgets">

	<div class="span9" style="padding-right:50px;">	
			<h2>Recent News <a href="about-us/recent-news/" style="font-size:14px;">[View All]</a></h2>
			<ul class="recent-news-slider-slides">
				<?php 
					$args = array(
						'numberposts'     => 5,
						'orderby'         => 'post_date',
						'order'           => 'DESC',
						'post_type'       => 'post',
						'post_status'     => 'publish'
					);

					$posts = get_posts($args);

					foreach ($posts as $i=>$p) { echo '<li id="slide' . $i . '" class="current-slide">';
						/*
						if ($i == 0) {
							echo '<li id="slide' . $i . '" class="current-slide">';
						} else {
							echo '<li style="display:none;" id="slide' . $i . '"">';
						}
						*/
						
						$idealwidth = "100%"; echo '<div style="clear:both;margin-bottom:25px;">';
							
						if(has_post_thumbnail($p->ID)){ 
							$idealwidth = "65%";
							echo '<div style="width:30%;max-height:200px;max-width:160px;overflow:hidden;float:right;display:block;">' .get_the_post_thumbnail( $p->ID) . '</div>';
							}
						echo 
							'<div style="float:left;display:block;width:' .  $idealwidth .'">
							<h5><a href="'. get_permalink($p->ID) . '">'. $p->post_title . '</a></h5>
							<div>' . mysql2date('F j, Y', $p->post_date) . '</div>
							<p>' . $p->post_excerpt . '<br><a href="' . get_permalink($p->ID) . '">Read Full Story</a></p>
							</div>
						</div></li>';
					}
				?>
				<li>			<h3><a href="about-us/recent-news/" style="font-size:14px;">View All News Articles</a></h3></li>
			</ul>


	</div>
		<div class="span3">
			<h2>Upcoming Events</h2>
				<?php get_sidebar('events'); ?>
		
			<div style="padding-top:40px;"></div>
			<div style="background-image:url('/wordpress/wp-content/uploads/2013/04/follow-on-fb.png');background-repeat:no-repeat;background-size:cover;margin:0;padding:0;float:right;width:100%;max-width:300px;">
				<div style="padding:90px 90px 10px 50px;"><div class="fb-like" data-href="https://www.facebook.com/LPMINNESOTA" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false"></div>		
				</div>
			</div>
			<div style="clear:both;padding-top:20px;"></div>
			<div style="background-image:url('/wordpress/wp-content/uploads/2013/04/follow-on-twitter.png');background-repeat:no-repeat;background-size:cover;margin:0;padding:0;float:right;width:100%;max-width:300px;">
				<div style="padding:90px 0px 10px 20px;">
				<a class="twitter-follow-button" href="https://twitter.com/Libertarian_MN" data-show-count="false" data-lang="en" data-size="large">Follow @Libertarian_MN</a><script type="text/javascript">// <![CDATA[
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	// ]]></script></div>
			</div>		
		</div>
		<div style="clear:both;"></div>
		<div class="row-fluid">
		<div class="span9">
			<h2>Must-See Videos</h2>
							<iframe width="325" height="183" src="https://www.youtube.com/embed/XN5XrGKoW3o?rel=0" frameborder="0" allowfullscreen></iframe>

				<iframe width="325" height="183" src="https://www.youtube.com/embed/M9srplWe_QQ?rel=0" frameborder="0" allowfullscreen></iframe>

				<iframe width="325" height="183" src="https://www.youtube.com/embed/CsXxUKjklt8" frameborder="0" allowfullscreen></iframe>			

				<iframe width="325" height="183" src="https://www.youtube.com/embed/wQs5hoHW_Qc?rel=0" frameborder="0" allowfullscreen></iframe>

			<?php 
				// disabling direct import of youtube feed - only have 3 videos to start
				//include_once('inc/youtube_feed.php'); 
			?>		
		</div>	
		<div class="span3">			<!--
			<div style="width:270px;float:right;">			<h2>Receive Email Updates</h2><form id="feedburner_email_widget_sbef" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=LibertarianPartyOfMinnesota', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow"><label>Type your email address below to receive an email update when we post a new article.</label><input name="email" id="feedburner_email_widget_sbef_email" onclick="javascript:if(this.value=='Type your email address'){this.value= '';}" type="text" value="Type your email address"><input name="uri" type="hidden" value="LibertarianPartyOfMinnesota"><input name="loc" type="hidden" value="en_US"><input id="feedburner_email_widget_sbef_submit" type="submit" value="Sign Up"></form>			</div>			-->
			<h3>ECOMINOES</h3>
			<?php include_once(ABSPATH.WPINC.'/feed.php');
			$rss = fetch_feed('http://feeds.feedburner.com/blogspot/jPcqaA');
			$maxitems = $rss->get_item_quantity(5);
			$rss_items = $rss->get_items(0, $maxitems);
			?>
			<ul>
			<?php if ($maxitems == 0) echo '<li>No items.</li>';
			else
			// Loop through each feed item and display each item as a hyperlink.
			foreach ( $rss_items as $item ) : ?>
			<li>
			<a href='<?php echo $item->get_permalink(); ?>'
			title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
			<?php echo $item->get_title(); ?></a>
			</li>
			<?php endforeach; ?>
			</ul>

			<h3>Reason.com</h3>
			<?php include_once(ABSPATH.WPINC.'/feed.php');
			$rss = fetch_feed('http://feeds.feedburner.com/reason/AllArticles	');
			$maxitems = $rss->get_item_quantity(5);
			$rss_items = $rss->get_items(0, $maxitems);
			?>
			<ul>
			<?php if ($maxitems == 0) echo '<li>No items.</li>';
			else
			// Loop through each feed item and display each item as a hyperlink.
			foreach ( $rss_items as $item ) : ?>
			<li>
			<a href='<?php echo $item->get_permalink(); ?>'
			title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>'>
			<?php echo $item->get_title(); ?></a>
			</li>
			<?php endforeach; ?>
			</ul>
			
		
			<!--

			<div class="fb-like-box" data-href="https://www.facebook.com/LPMINNESOTA" data-width="220" data-show-faces="true" data-stream="true" data-header="true"></div>			
			
			<h2>Connect With Us
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
			-->
			
		</div>
	</div>
	<div>

	</div>
</div>

		<!-- Hiding twitter feed - is redundant of the facebook feed --> 
		<!-- 
		<div class="span12 well">
			<h5>Latest Tweets<img src="<?php bloginfo('template_directory'); ?>/css/img/facebook-blue.png" class="pull-right opacity-30" /></h5>
			<?php include_once('inc/twitter.php'); ?>
		</div>
		-->
		<!-- RSS not yet available at launch -->
		<!--
		<div class="row-fluid">
			<div class="span12 well">
				<h5>RSS</h5>
				<?php include_once('inc/rss.php'); ?>
			</div>
		</div>
		-->


<?php get_footer(); ?>

	  <!-- FlexSlider -->
	  <script defer src="/wordpress/wp-content/themes/mn-libertarian/js/jquery.flexslider.js"></script>
	
	  <script type="text/javascript">
	    $(window).load(function(){
	      $('.flexslider').flexslider({
	        animation: "slide",
	        start: function(slider){
	          $('body').removeClass('loading');
	        }
	      });
	    });
	  </script>
