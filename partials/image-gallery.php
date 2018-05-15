<?php
/**
* Image Gallery 
*/
?>

<?php $images = get_field('images'); ?>

<?php if( $images ): ?>

	<ul>

		<?php foreach( $images as $image ): ?>

		<div class="col-xs-3 img-gallery">

			<li>

				<a href="<?php echo esc_url( $image['url'] ); ?>">

				<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_html( $image['alt'] ); ?>" /></a>

				<p><?php echo esc_html( $image['caption'] ); ?></p>

				<p><?php echo esc_html( $image['description'] ); ?></p>

			</li>

		</div><!-- .col-xs-3 .img-gallery -->

		<?php endforeach; ?>

	</ul>

<?php endif; ?>