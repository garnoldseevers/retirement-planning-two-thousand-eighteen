<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>
	<div class="col s12 m9 l8">
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<nav id="nav-single" style="display: none;">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
					</nav><!-- #nav-single -->

					<?php  if( in_category('our-team')){ 
						 get_template_part( 'content-our-team', get_post_format() );
						 
					 } else {
										
					 get_template_part( 'content-single', get_post_format() ); 
					 
					 } ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!--col_8-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
