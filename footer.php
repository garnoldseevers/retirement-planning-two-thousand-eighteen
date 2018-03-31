				<div class="clear"></div>
			</div><!--row-->
		</div><!--container-->
		<div class="footer_cta" id="trpg-default-cta">
			<div class="container">
				<img src="<?php echo get_template_directory_uri(); ?>/images/trpg-emblem-white.png" alt="emblem"/>
				<div class="call_to_action call_to_action_footer">
					<h2>
						Is The Retirement Planning Group right for you?
					</h2>
					<a class="red_button_center" href="<?php bloginfo( 'url' ); ?>/are-we-right-for-you/">Find Out Here</a>
				</div>
				<div class="clear">
				</div>
			</div><!--container-->
		</div><!--prefooter-->
		<footer class="mainfooter">
			<div class="container">
				<div class="row">
					<div class="col s12 m4 l4">
						<?php dynamic_sidebar( 'sidebar-3' ); ?>
					</div><!--col-->
					<div class="col s12 m4 l4">
						<?php dynamic_sidebar( 'sidebar-4' ); ?>
					</div><!--col-->
					<div class="col s12 m4 l4">
						<?php dynamic_sidebar( 'sidebar-5' ); ?>
					</div><!--col-->
				</div>
			</div><!--container-->
		</footer>
		<div class="sub_footer">
			<div class="container">
					<div class="row">
						<div class="col s12 m12 l12">
							<p>
								<img src="<?php echo get_template_directory_uri(); ?>/images/trpg-logo.png" alt="the retirement planning group"/><br/><br/>
								&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.<br/>
								<a href="<?php bloginfo( 'url' ); ?>/privacy-policy/"><strong>Privacy Policy</strong></a><br/>
								Site development:  <a href="http://wwww.hyperdo.com" target="_blank"><strong>Hyperdo Media</strong></a>
							</p>
						</div>
					</div>
			</div><!--sub_footer-->
		</div><!--primarycolor-->
		<?php wp_footer(); ?>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
	</body>
</html>