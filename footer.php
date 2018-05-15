<?php 
/**
 * Footer
 */ 
?>

</main>

	<footer>

		<div class="col-md-6">

			<div class="bottomMenu">

				<?php 
					$args = array(
					'theme_location' => 'footer-menu',
					'container'      => 'false'
				);
					wp_nav_menu( $args );
				?>

				</div><!-- .bottomMenu -->

		</div><!-- .col-md-6 -->

		<div class="col-md-6">

			<div class="copyright">

				<p>&copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>  Built By: Marshall Carter</p>

			</div><!-- .copyright -->

		</div><!-- .col-md-6 -->

	</footer>

	<?php wp_footer(); ?>

</body>

</html>