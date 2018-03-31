<?php
/**
 * Template Name: Full Page Template
 * Description: A Page Template that has no sidebar
 */

get_header(); ?>
	<div class="col l12"> 
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!--col_12-->
<?php //get_sidebar(); ?>
<?php get_footer(); ?> 