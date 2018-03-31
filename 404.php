<?php get_header(); ?>
	<div class="col s12 m9 l8">
	<div id="primary">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title" style="text-align: center;">Sorry, this page doesn't exist</h1>
				</header>

				<div class="entry-content">
                
                
                <img class="aligncenter" src="<?php bloginfo( 'stylesheet_directory' ); ?>/images/404.png"  alt=""/>
                
					<p style="text-align: center;">You can try using the search bar below to find what you're looking for.</p>

					<?php get_search_form(); ?>

<!--					<?php the_widget( 'WP_Widget_Recent_Posts', array( 'number' => 10 ), array( 'widget_id' => '404' ) ); ?>

					<div class="widget">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'twentyeleven' ); ?></h2>
						<ul>
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 1, 'title_li' => '', 'number' => 10 ) ); ?>
						</ul>
					</div>

					<?php
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'twentyeleven' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', array('count' => 0 , 'dropdown' => 1 ), array( 'after_title' => '</h2>'.$archive_content ) );
					?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>-->

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->
</div><!--col_8-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>