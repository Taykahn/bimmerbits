			<div class="clear">

				<?php

					$images = get_field('gallery');

						if( $images ): ?>

							<div class="slider-for">

								<?php foreach( $images as $image ): ?>

									<div class="slick-container">

									</div>

								<?php endforeach; ?>

							</div>

							<div class="slider-nav">

									<?php foreach( $images as $image ): ?>

										<div>

											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

										</div>

									<?php endforeach; ?>

							</div>

						<?php endif; ?>

			</div><!-- end clear -->