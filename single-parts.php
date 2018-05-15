<?php
/**
 * Template Name: Parts Single 
 */

get_header();

global $post;

$post_id = $post->ID;

?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="container single-parts-container">

		<div class="sgl-part-title">

			<h3><?php the_title(); ?></h3>

		</div><!-- .sgl-part-title -->

		<div class="col-sm-5">

			<div class="sgl-left-col">

				<div class="post-thumbnail">

					<?php the_post_thumbnail(); ?>

				</div><!-- .post-thumbnail -->

				<div class="img-gallery">

					<?php include( 'partials/image-gallery.php' ); ?>

				</div><!-- .img-gallery -->

			</div><!-- .sgl-left-col -->

		</div><!-- .col-sm-5 -->

		<div class="col-sm-7">

			<div class="sgl-right-col">

				<p><?php the_content(); ?></p>

				<h2>Price: <?php the_field( 'part_price', $post_id ); ?></h2>

			</div><!-- .sgl-right-col -->

		</div><!-- .col-sm-7 -->

	</div><!-- .container -->

<?php endwhile; ?>

<?php get_footer(); ?>