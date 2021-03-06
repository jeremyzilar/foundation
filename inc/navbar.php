<?php
	$args = array(
		'theme_location'  => 'main-menu',
		'menu'            => 'main',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'nav navbar-nav navbar-right',
		'menu_id'         => '',
		'echo'            => true,
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
	);
?>


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
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<?php wp_nav_menu( $args ); ?>
<!--       <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Resources</a></li>
        <li><a href="#">Blog</a></li>
				<li><a href="#" class="btn btn-buy btn-xs btn-success">Buy the Book</a></li>
      </ul> -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
