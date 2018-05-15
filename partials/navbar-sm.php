<div id="small-navbar">

	<div id="wrapper">

		<div class="overlay"></div>

		<nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">

			<ul class="nav sidebar-nav">

				<li>

					<?php 
						$args = array(
						'menu'          => 'header-menu',
						'menu_class'    => 'nav navbar-nav',
						'container'     => 'false'
					);
						wp_nav_menu( $args );
					?>

				</li>

			</ul><!-- .nav .sidebar-nav -->

		</nav><!-- .navbar .navbar-inverse .navbar-fixed-top #sidebar-wrapper -->

		<div id="page-content-wrapper">

			<button type="button" class="hamburger is-closed" data-toggle="offcanvas">

				<span class="hamb-top"></span>
				<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>

			</button><!-- .hamburger .is-closed -->

		</div><!-- #page-content-wrapper -->

	</div><!-- #wrapper -->

</div><!-- #small-nav -->