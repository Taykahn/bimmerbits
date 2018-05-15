<?php 
/**
 * Template Name: Front Page
 */

get_header(); 

global $post;

$post_id = $post->ID;

$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;

$args=array(
	'post_type'   => 'parts',
	'paged'       => $paged
);

query_posts($args);

$parts = new WP_Query($args);

?>

<section id="frontpage">

	<?php if ( $paged < 2 ) : ?>

		<div class="container">

			<div class="about">

				<h2><?php the_field( 'about_title', $post_id ); ?></h2>

				<p><?php the_field( 'about_content', $post_id ); ?></p>

			</div><!-- .about -->

		</div><!-- .container --><hr>

		<?php else : ?>

	<?php endif; ?>

	<div class="container">

		<div class="parts-title">

			<h1>Available Parts</h1>

		</div><!-- .parts-title -->

		<?php if( $parts->have_posts() ) { ?>

		<?php $i = 0; ?>

			<?php while ($parts->have_posts()) : $parts->the_post(); ?>

			<?php if($i % 3 == 0) { ?> 

				<div class="row">

				<?php } ?>

					<div class="parts-fp-content">

						<div class="col-sm-4">

							<div class="part-title">

								<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

							</div><!-- .part-title -->

							<div class="part-image">

								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

							</div><!-- .part-image -->

							<div class="fp-excerpt">

								<?php the_excerpt(); ?>

							</div><!-- .fp-excerpt -->

						</div><!-- .parts-fp-content -->

					</div><!-- .col-md-4 -->  

				<?php $i++; ?>

				<?php if($i != 0 && $i % 3 == 0) { ?>

				</div><!-- .row-->

				<div class="clearfix"></div>

				<?php } ?>

			<?php endwhile; ?>

			</div><!-- .container -->

		<div class="options border-bottom">

			<?php the_posts_pagination(); ?>

		</div><!-- .options .border-bottom -->

		<?php } wp_reset_query(); ?>

</section><!-- #frontpage -->

<?php get_footer() ?>