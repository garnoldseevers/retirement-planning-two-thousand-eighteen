

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="category-entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'twentyeleven' ); ?></h3>
				</hgroup>
			<?php else : ?>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'twentyeleven' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php endif; ?>


			<div class="entry-meta" style="display: none;">
				<?php //twentyeleven_posted_on(); ?>
                <?php the_date(); ?> - by <?php the_author() ?>
			</div><!-- .entry-meta -->
			<div class="homepage-entry-meta">
				<span><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_date(); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <span><i class="fa fa-user" aria-hidden="true"></i> <span class="author vcard"><span class="fn"><?php the_author() ?></span></span></span>
			</div><!-- .entry-meta -->


			<?php if ( comments_open() && ! post_password_required() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Reply', 'twentyeleven' ) . '</span>', _x( '1', 'comments number', 'twentyeleven' ), _x( '%', 'comments number', 'twentyeleven' ) ); ?>
			</div>
			<?php endif; ?>
		</header><!-- .category-entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php //the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
        <?php if ( has_post_thumbnail() ) { ?>
		<?php $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'square-feature', true);
                $thumb_url = $thumb_url_array[0]; ?>
                <img class="featured_post_thumbnail" src="<?php echo $thumb_url; ?>" alt="<?php the_title(); ?>"/>		
		<?php } else { ?> <img class="featured_post_thumbnail" src="<?php bloginfo( 'url' ); ?>/wp-content/uploads/2017/04/default-featured-image-300x300.jpg"> <?php } ?>
            <?php the_excerpt(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>

<div class="clearfix"></div>
	</article><!-- #post-<?php the_ID(); ?> -->
	<div class="clearfix"></div>
