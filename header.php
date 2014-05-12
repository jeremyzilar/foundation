<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php wp_title( '| Designing the Editorial Experience', true, 'right' ); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />

	<meta name="keywords" content="Web Design, Editorial Design, Newspaper Design, Publication Design, Magazine Design, Book Design, Sue Apfelbaum, Juliette Cezzar" />
	<meta name="description" content="A Primer for Print, Web, and Mobile" />

  <link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Open Graph Tags -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Designing the Editorial Experience" />
  <meta property="og:description" content="A Primer for Print, Web, and Mobile" />
  <meta property="og:url" content="http://editorialexperience.com/" />
  <meta property="og:site_name" content="Designing the Editorial Experience" />
  <meta property="og:image" content="http://editorialexperience.com/wp/wp-content/themes/editorial-experience/img/book/edex-cover.gif" />
  <meta name="twitter:site" content="@designedex" />
  <meta name="twitter:image:src" content="http://editorialexperience.com/wp/wp-content/themes/editorial-experience/img/book/edex-cover.gif" />
  <meta name="twitter:card" content="summary_large_image" />


  <!-- Typekit -->
  <!-- Registered with jc [at] juliettecezzar.com -->
	<script type="text/javascript" src="//use.typekit.net/pzy6bux.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/book/favicon.ico" />

	<!-- RSS -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />

  <?php wp_head(); ?>

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<!-- All good things start here -->

<body <?php body_class(); ?>>
  <?php include(INC . 'navbar.php'); ?>
