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
		<div id="crm_cpid_9" class="crm-contribute-widget">
		    <h5 id="crm_cpid_9_title"></h5>
		    <div class="crm-amounts">
			<div id="crm_cpid_9_amt_hi" class="crm-amount-high"></div>
			<div id="crm_cpid_9_amt_low" class="crm-amount-low"></div>
			<div id="crm_cpid_9_percentage" class="crm-percentage"></div>
		    </div>
		    <div class="crm-amount-bar">
			<div class="crm-amount-fill" id="crm_cpid_9_amt_fill"></div>
		    </div>
		    <div class="crm-amount-raised-wrapper">
			<span id="crm_cpid_9_amt_raised" class="crm-amount-raised"></span>
		    </div>
			    <div class="crm-logo"><img src="https://www.lpmn.org/wordpress/wp-content/uploads/2013/03/andy_burns-150x150.jpg" alt=Logo></div>
			<div id="crm_cpid_9_donors" class="crm-donors"></div>
		    <div id="crm_cpid_9_comments" class="crm-comments"></div>
		    <div id="crm_cpid_9_campaign" class="crm-campaign"></div>
		    <div class="crm-contribute-button-wrapper" id="crm_cpid_9_button">
			<a href='https://www.lpmn.org/wordpress/?page=CiviCRM&q=civicrm/contribute/transact&reset=1&id=9' class="crm-contribute-button"><span class="crm-contribute-button-inner" id="crm_cpid_9_btn_txt"></span></a>
		    </div>
		</div>
	</div>

</div>

<?php get_footer(); ?>
