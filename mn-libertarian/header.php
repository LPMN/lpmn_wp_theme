<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
  <?php
    if( ! is_home() ):
      wp_title( '|', true, 'right' );
    endif;
    bloginfo( 'name' );
  ?>
</title>
<link href='//fonts.googleapis.com/css?family=Kelly+Slab' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-55257bde5d394ad2" async="async"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-8671803-1', 'auto');
  ga('send', 'pageview');

</script>

<?php include_once('inc/contact-form.php'); ?>

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner orange-gradient">
        <div class="container">
        	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>
			<?php 
			  wp_nav_menu(
			  	array(
			  		'menu' => 'Main',
			  		'menu_class' => 'nav site-nav',
			  		'container_class' => 'nav-collapse collapse'
			  	)
			  );
			?>
		</div>
	</div>
</div>

<div class="container" style="margin-top:40px;min-height:650px;">