<?php
/**
 * Template name: Search Page
 */

get_header() 

?>

	<section id="search-page" class="container">

		<div class="inner-wrapper row">

			<div class="search-content col-md-12">

				<div class="inner-content">

					<?php if( have_posts() ) : ?>

						<?php get_template_part( 'partials/excerpt-loop' ) ?>

					<?php else : ?>

						<?php get_template_part( 'partials/404-partial' ) ?>

					<div class="col-md-12 options border-bottom">

						<?php do_action( 'mbc_pagination' ) ?>

					</div><!-- .col-md-12 .options .border-bottom -->

					<?php endif ?>

				</div>

			</div><!--.content-->

		</div><!--.row-->

	</section><!--.container-->

<?php get_footer() ?>