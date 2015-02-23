<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" <?php language_attributes(); ?>>

<head>
	<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title('');
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>
	
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/ico-64x64.ico" type="image/png" />
    <link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/touch-ico-512x512.png" type="image/png" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/lessframework.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/scripts/smooth.pack.js"></script>

	<!--Huston, we have found more scripts!-->
	<!--menu static > fixed-->
	<script type="text/javascript">
	jQuery(document).ready(function ($) {  //using jQuery instead of $ at the beginning to fix the object not a funtion error
	  var top = $('#socials').offset().top - parseFloat($('#socials').css('marginTop').replace(/auto/, 0));
	  $(window).scroll(function (event) {
	    // what the y position of the scroll is
	    var y = $(this).scrollTop();
	  
	    // whether that's below the form
	    if (y >= top) {
	      // if so, ad the fixed class
	      $('#socials').addClass('fixed');
	    } else {
	      // otherwise remove it
	      $('#socials').removeClass('fixed');
	    }
	  });
	});
	</script>
	
	<!--improve the compatibility with IE 6,7,8-->
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie8.css" />
	<![endif]-->
	
</head>

<body <?php body_class(); ?>>
<div class="none">
	<p><a href="#content"><?php _e('Skip to Content'); ?></a></p><?php /* used for accessibility, particularly for screen reader applications */ ?>
</div><!--.none-->
<div id="title" align="center" >
	<?php if( is_front_page() || is_home() || is_404() ) { ?>
		<h1 id="logo"><a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>" name="top"><img src="<?php bloginfo( 'template_url' ); ?>/images/ilite_logo_2.png" alt="I LITE logo" /></a></h1>
		<!-- <h2 id="tagline"><?php bloginfo('description'); ?></h2> -->
	<?php } else { ?>
		<h2 id="logo"><a href="<?php bloginfo('url'); ?>/blog" title="<?php bloginfo('description'); ?>" name="top"><img src="<?php bloginfo( 'template_url' ); ?>/images/ilite_logo_2.png" alt="I LITE logo" /></a></h2>
		<!-- <h3 id="tagline"><?php bloginfo('description'); ?></h3> -->
	<?php } ?>
</div>
<div id="main"><!-- this encompasses the entire Web site except title & footer -->
	<div id="header"><header>
			<div id="nav-primary" class="nav"><nav>
				<?php if ( is_user_logged_in() ) {
				     wp_nav_menu( array( 'theme_location' => 'logged-in-menu' ) ); /* if the visitor is logged in, this primary navigation will be displayed */
				} else {
				     wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); /* if the visitor is NOT logged in, this primary navigation will be displayed. if a single menu should be displayed for both conditions, set the same menues to be displayed under both conditions through the Wordpress backend */
				} ?>
			</nav></div><!--#nav-primary-->
			<?php if ( ! dynamic_sidebar( 'Header' ) ) : ?><!-- Wigitized Header --><?php endif ?>
			<div class="clear"></div>
	</header></div><!--#header-->