<?php
/**
 * The Sidebar containing the main widget area.
 */

?>
<div class="col s12 m3 l4">
		<div id="secondary" class="widget-area <?php if ( in_category('our-team') ) {?>team-widget-area<?php } ?>" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
</div><!--col_4 last-->

