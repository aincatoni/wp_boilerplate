<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<?php bloginfo('name'); ?>
			</a>
		</div>
		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
			<?php wp_nav_menu( array( 
				'theme_location' 	=> 'header-menu',
				'depth'				=> 2,
				'container'			=> 'div',
				'container_class'	=> 'navbar-collapse collapse',
				'menu_class'		=> 'nav navbar-nav',
				'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
				'walker'			=> new wp_bootstrap_navwalker()
			) ); ?>
		<?php } ?>
	</div>
</nav>