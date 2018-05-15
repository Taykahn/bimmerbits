<?php 
/**
 * About Page
 */

get_header(); ?>

<div id="nav-change">

	<div class="container about-page">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="about-page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- end page-header -->

						<div class="col-md-6">

							<div class="about-img">

								<?php the_post_thumbnail(); ?>

							</div><!-- end contact-img -->

						</div><!-- end col-md-6 -->

						<div class="col-md-6">

							<div class="about-content">

								<?php the_content(); ?>

							</div><!-- end contact-content -->

						</div><!-- end col-md-6 -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-9 -->

		</div><!-- end row -->

	</div><!-- end container -->

</div><!-- end nav-change -->

<?php get_footer(); ?>