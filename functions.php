<?php

	// Disable wp Open Sans.
	class Disable_Google_Fonts {
	    public function __construct() {
	        add_filter( 'gettext_with_context', array( $this, 'disable_open_sans' ), 888, 4 );
	    }
	    public function disable_open_sans( $translations, $text, $context, $domain ) {
	        if ( 'Open Sans font: on or off' == $context && 'on' == $text ) {
	            $translations = 'off';
	        }
	        return $translations;
	    }
	}
	$disable_google_fonts = new Disable_Google_Fonts;

	// enables wigitized sidebars
	if ( function_exists('register_sidebar') )

	// Sidebar Widget
	// Location: the sidebar
	register_sidebar(array('name'=>'Sidebar',
		'before_widget' => '<div class="widget-area widget-sidebar"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
	// Header Widget
	// Location: right after the navigation
	register_sidebar(array('name'=>'Header',
		'before_widget' => '<div class="widget-area widget-header"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// Footer Widget
	// Location: at the top of the footer, above the copyright
	register_sidebar(array('name'=>'Footer',
		'before_widget' => '<div class="widget-area widget-footer"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	// The Alert Widget
	// Location: displayed on the top of the home page, right after the header, right before the loop, within the content area
	register_sidebar(array('name'=>'Alert',
		'before_widget' => '<div class="widget-area widget-alert"><ul>',
		'after_widget' => '</ul></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));

	// post thumbnail support
	add_theme_support( 'post-thumbnails' );
	// adds the post thumbnail to the RSS feed
	function cwc_rss_post_thumbnail($content) {
	    global $post;
	    if(has_post_thumbnail($post->ID)) {
	        $content = '<p>' . get_the_post_thumbnail($post->ID) .
	        '</p>' . get_the_content();
	    }
	    return $content;
	}
	add_filter('the_excerpt_rss', 'cwc_rss_post_thumbnail');
	add_filter('the_content_feed', 'cwc_rss_post_thumbnail');

	// custom menu support
	add_theme_support( 'menus' );
	if ( function_exists( 'register_nav_menus' ) ) {
	  	register_nav_menus(
	  		array(
	  		  'header-menu' => 'Header Menu',
	  		  'sidebar-menu' => 'Sidebar Menu',
	  		  'footer-menu' => 'Footer Menu',
	  		  'logged-in-menu' => 'Logged In Menu'
	  		)
	  	);
	}

	// custom background support
	add_custom_background();

	// adds Post Format support
	// learn more: http://codex.wordpress.org/Post_Formats
	// add_theme_support( 'post-formats', array( 'aside', 'gallery','link','image','quote','status','video','audio','chat' ) );

	// removes detailed login error information for security
	add_filter('login_errors',create_function('$a', "return null;"));
	
	// removes the WordPress version from your header for security
	function wb_remove_version() {
		return '<!--built on the Whiteboard Framework-->';
	}
	add_filter('the_generator', 'wb_remove_version');
	
	
	// Removes Trackbacks from the comment cout
	add_filter('get_comments_number', 'comment_count', 0);
	function comment_count( $count ) {
		if ( ! is_admin() ) {
			global $id;
			$comments_by_type = &separate_comments(get_comments('status=approve&post_id=' . $id));
			return count($comments_by_type['comment']);
		} else {
			return $count;
		}
	}

	// invite rss subscribers to comment
	function rss_comment_footer($content) {
		if (is_feed()) {
			if (comments_open()) {
				$content .= 'Comments are open! <a href="'.get_permalink().'">Add yours!</a>';
			}
		}
		return $content;
	}

	// custom excerpt ellipses for 2.9+
	function custom_excerpt_more($more) {
		return 'Read More &raquo;';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');
	// no more jumping for read more link
	function no_more_jumping($post) {
		return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'&nbsp; Continue Reading &raquo;'.'</a>';
	}
	add_filter('excerpt_more', 'no_more_jumping');
	
	// category id in body and post class
	function category_id_class($classes) {
		global $post;
		foreach((get_the_category($post->ID)) as $category)
			$classes [] = 'cat-' . $category->cat_ID . '-id';
			return $classes;
	}
	add_filter('post_class', 'category_id_class');
	add_filter('body_class', 'category_id_class');

	// adds a class to the post if there is a thumbnail
	function has_thumb_class($classes) {
		global $post;
		if( has_post_thumbnail($post->ID) ) { $classes[] = 'has_thumb'; }
			return $classes;
	}
	add_filter('post_class', 'has_thumb_class');

	// add_action( 'admin_init', 'theme_options_init' );
	// add_action( 'admin_menu', 'theme_options_add_page' );
	
	// Init plugin options to white list our options
	// function theme_options_init(){
	// 	register_setting( 'tat_options', 'tat_theme_options', 'theme_options_validate' );
	// }
	
	// Load up the menu page
	// function theme_options_add_page() {
	// 	add_theme_page( __( 'Theme Options', 'tat_theme' ), __( 'Theme Options', 'tat_theme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
	// }
	
?>