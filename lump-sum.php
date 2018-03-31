<?php
/**
 * Template Name: Lump Sum Template
 * Description: A Page Template that has no sidebar
 */

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
<script>
  (function(d) {
    var config = {
      kitId: 'cpc8vlt',
      scriptTimeout: 3000,
      async: false
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/sass/materialize.css?version=<?php echo rand(5, 125); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/custom.css?version=<?php echo rand(5, 125); ?>" type="text/css" rel="stylesheet" media="screen,projection"/>



<?php
	wp_head();
?>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1204122426277794'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1204122426277794&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?>>
<div class="white masthead">
    <div class="container">
        <div class="row" style="margin-bottom: 0;">
            <div class="col s12 m4 l4 ">
                       		<a href="<?php bloginfo( 'url' ); ?>" class="brand-logo"><img class="site_logo pv-15 <?php the_field('logo_align', 'option'); ?>" src="<?php the_field('site_logo', 'option'); ?>"  alt=""/></a>

            </div><!--col-->
            <div class="col s12 m8 l8">
            	<div class="number-wrap">
					<span class="phone-number">866-498-8898</span>
				</div>
            </div><!--col-->
        </div><!--row-->
    </div><!--container-->
</div><!--white-->


<div class="container content_container">
	<div class="row" style="overflow: visible;">
    
    
    
    



	<div class="col l12"> 
		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>


				
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
        <div class="clear"></div>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->				
				
				
				
				

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
	</div><!--col_12-->
<?php //get_sidebar(); ?>
<?php get_footer(); ?> 