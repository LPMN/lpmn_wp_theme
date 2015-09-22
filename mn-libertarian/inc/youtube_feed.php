<?php
	// get the libertarian party youtube feed
	$feed = 'https://gdata.youtube.com/feeds/api/users/lpminnesota/uploads/?alt=json&max-results=6';
	$json = json_decode(file_get_contents($feed));
	
	foreach ($json->feed->entry as $i=>$vid) {
		if ($i == 0 || $i == 3) {
			echo '<div class="row-fluid" style="margin-bottom: 20px;">';
		}
		
		echo '<div class="span4 youtube-holder"><a target="_blank" href="' . $vid->link[0]->href . '" class="youtube-link opacity-80"><img src="' . $vid->{'media$group'}->{'media$thumbnail'}[0]->url . '" /><div class="youtube-icon"></div>' . $vid->title->{'$t'} . '</a></div>';
		
		if ($i == 2 || $i == 5) {
			echo '</div>';
		} 
	}
?>