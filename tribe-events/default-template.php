<?php
/**
 * Default Events Template
 * This file is the basic wrapper template for all the views if 'Default Events Template'
 * is selected in Events -> Settings -> Template -> Events Template.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/default-template.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

get_header();
?>
<div class="title_outer title_without_animation with_image"  data-animation="yes"  data-height="70" style="margin-bottom: 60px;">
	<div class="title title_size_medium  position_left " style="height:70px;">
	<div class="image responsive"><img itemprop="image" src="http://scott.brightorangethread.com/wp-content/uploads/2017/06/bkgd-image-band-6.jpg" alt="&nbsp;" /> 
	</div>
		<div class="title_holder"  data-0="opacity:1" data-300="opacity:0" >
			<div class="container">
				<div class="container_inner clearfix">
					<div class="title_subtitle_holder" style="padding-top:0;">
						<div class="title_subtitle_holder_inner">
							<span>Events</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="tribe-events-pg-template" class="tribe-events-pg-template">
	<?php tribe_events_before_html(); ?>
	<?php tribe_get_view(); ?>
	<?php tribe_events_after_html(); ?>
</div> <!-- #tribe-events-pg-template -->
<?php
get_footer();
