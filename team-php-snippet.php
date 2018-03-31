<?php 


	$args = array (
		'post_status'            => 'publish',
		'cat'                    => '101',
		'posts_per_page'         => '1',		
		'p'                => $var1
		);
	$query = new WP_Query( $args );
		if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
		$query->the_post(); 
		

		$thumb_id = get_post_thumbnail_id();
		$the_link = get_permalink();
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		
		$position = get_post_meta(get_the_ID(), 'member_position', true); 
		$email = get_post_meta(get_the_ID(), 'member_email', true); 
		?>

				
		<style type = 'text/css'>.wpautbox-below { display: none !important; }</style>				
		<div style="text-align:center;"><a href="#inline-content-<?php echo $var1; ?>" rel="lightbox" data-gall="gall-frame" data-lightbox-type="inline"><img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?> a financial advisor in Kansas City"></a> </div>
		<p style="text-align:center;"><strong><?php echo $position;?></strong></p>
		<p style="text-align: center;"><a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey" href="#inline-content-<?php echo $var1; ?>" rel="lightbox" data-gall="gall-frame" data-lightbox-type="inline">Read Bio</a></p>
		<div class="team-member" id="inline-content-<?php echo $var1; ?>" >
			<div class="row">
				<div>
		<?php if ($image) { ?>
                <img class="homepage-blog-thumbnail" src="<?php echo $image[0]; ?>" style="float:left;padding: 0 15px 15px 0;" alt="<?php the_title(); ?> a financial advisor in Kansas City"/>		
		<?php } else { } ?>
				</div>
		<h2 class="primarycolor-text"><?php the_title(); ?></h2>
		<h4 class="position" style="font-weight:700;"> <?php echo $position;?></h4> 
		<a href="mailto:<?php echo $email; ?>">
			<em><?php echo $email; ?> </em>
		</a>

            <?php 
                $excerpt_value = get_the_content(); 
                $new_excerpt = preg_replace("/<h1>[^>]+>/","",$excerpt_value);
                $new_excerpt = preg_replace("/<h2>[^>]+>/","",$new_excerpt);
                $new_excerpt = preg_replace("/<h3>[^>]+>/","",$new_excerpt);
                $new_excerpt = preg_replace("/<h4>[^>]+>/","",$new_excerpt);
				$new_excerpt = substr($new_excerpt,strpos($new_excerpt,'</strong>'),900);
				$new_excerpt = strip_tags($new_excerpt);
				$new_excerpt = substr($new_excerpt,0,strpos($new_excerpt,' ',225));
                echo $new_excerpt."...";
            ?>
				<p><a class="more-link vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey" href="<?php echo $the_link; ?>">Learn more</a></p>
			</div><!-- .row -->
		</div><!--.team-member-->
                        
		<?php } } else { ?>
			no posts found
		<?php }
wp_reset_postdata();
?> 
<div class="clearfix"></div>
