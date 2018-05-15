<?php
/**
 *Template Name: Archives
 */

get_header(); ?>

	<div class="container">

		<div class="row">

			<div class="col-md-8">

				<div id="content" role="main">

					<?php the_post(); ?>

					<h2 class="entry-title"><?php the_title(); ?></h2>

					<?php get_search_form(); ?>

					<h2>Archives by Month:</h2>

					<ul>

						<?php wp_get_archives('type=monthly'); ?>

					</ul>

					<h2>Archives by Subject:</h2>

					<ul>

						<?php wp_list_categories(); ?>

					</ul>

				</div><!-- #content -->

			</div><!-- col-md-7 -->

			<?php get_sidebar(); ?>

		</div><!-- row -->

	</div><!-- container -->

<?php get_footer(); ?>