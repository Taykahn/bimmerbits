<?php
/**
* Template Name: Header
*/
?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

	<title>

	<?php wp_title( '|', true, 'right' ); ?>

	<?php bloginfo('name'); ?>

	</title>

	<!-- Google Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Oswald|Arsenal" rel="stylesheet">

	<?php wp_head() ?>

	<?php 
		global $post;
		global $mbc_img_path;
		$post_slug = isset( $post->post_name ) ? $post->post_name : null;
		$page_slug = 'page-'.$post_slug;
		$fouc      = 'fouc';
		$classes   = array( $page_slug );
	?>

	</head>

<body <?php body_class( $classes ) ?>>

	<header>

		<div class="header-bkgd-img" style="background-image: url( '<?php echo esc_url( the_field( 'header-bkgd-img', 'option' ) ); ?>' )">

			<section class="name-search">

				<div class="col-md-6">

					<h1><?php echo get_bloginfo( 'name' ); ?></h1>
					<h3><?php echo get_option('blogdescription'); ?></h3>

				</div><!-- .col-sm-6 -->

				<div class="col-md-6">

					<?php get_search_form(); ?>

				</div><!-- .col-sm-6 -->

			</section>

		<section class="mainNavigation">

			<nav class="navbar-nav navbar-lg">

					<div id="navbar" class="large-nav">

						<?php
							$args = array(
							'menu'          => 'header-menu',
							'menu_class'    => 'nav navbar-nav',
							'container'     => 'false'
						);
							wp_nav_menu( $args );
						?>

					</div><!-- #navbar -->

			</nav><!-- .navbar .navbar-fixed-top .navbar-lg-->

		</section>

			<div id="navbar-sm">

				<?php include( 'partials/navbar-sm.php' ); ?> 

			</div><!-- #navbar-sm -->

		</div><!-- .header-bkgd-img -->

	</header>











