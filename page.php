<?php get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>

					<?php while ( have_posts() ) : the_post(); ?>

						<div class="page-header">

							<h1><?php the_title(); ?></h1>

						</div><!-- end page-header -->

						<?php the_content(); ?>

					<?php endwhile; ?>

				<?php endif; ?>

			</div><!-- end col-md-9 -->

		</div><!-- end row -->

	</div><!-- end container -->

<?php get_footer(); ?>