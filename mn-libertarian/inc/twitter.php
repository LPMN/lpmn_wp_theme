<?php
	// custom twitter feed
	$twitter_feeds = json_decode(file_get_contents('http://api.twitter.com/1/statuses/user_timeline.json?screen_name=Libertarian_MN&count=2'));

	echo '<ul class="twitter_feeds">';
	
	foreach ($twitter_feeds as $t) {
		echo '<li>
				<div class="row-fluid">
					<div class="span3">
						<img src="' . $t->user->profile_image_url . '" />
					</div>
					<div class="span9">
						<h6 style="margin:0;padding:0;">' . $t->user->name . '</h6>
						<p>' . $t->text . '</p>
					</div>
				</div>
			</li>';
	}

	echo '</ul>';
?>