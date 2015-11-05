<?php
/*
Template Name: welcome page
*/
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head prefix="og: http://ogp.me/ns#">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>I LITE | Code, Design &amp; Life</title>
<meta name="description" content="vivianalive personal blog &amp; portfolio on technical translation, WOW, Web Design, UI Design, SEO and Social Media." />
<meta name="keywords" content="WOW, CeeUI, vivianalive, Social Media Marketing, Web Design, SEO" />
<meta property="og:type" content="website" />
<meta property="og:title" content="I LITE | Code, Design &amp; Life" />
<meta property="og:description" content="vivianalive personal blog &amp;amp; portfolio on technical translation, WOW, Web Design, UI Design, SEO and Social Media.">
<meta property="og:image" content="<?php bloginfo( 'template_url' ); ?>/images/screenshot.png">
<meta property="og:image:width" content="300" />
<meta property="og:image:height" content="225" />
<meta name="p:domain_verify" content="37e9423aba57ae2eb197fdae2c5c1018"/> <!-- Pinterest verification -->
<meta name="wot-verification" content="e66f763f6e79d79e9ddb"/>

<link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/ico-64x64.ico" type="image/png" />
<link rel="apple-touch-icon" href="<?php bloginfo( 'template_url' ); ?>/images/touch-ico-512x512.png" type="image/png" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/intro.css" />
<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
<link href="https://plus.google.com/u/0/116704076391108813160/" rel="author" />
<script src="<?php bloginfo( 'template_url' ); ?>/scripts/jquery.min.js" type="text/javascript"></script>
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />

</head>

<body>
	<div id="main"> <!-- B #main -->
		<div id="card" class="container">
			<div id="profile" align="middle">
				<div id="avatar">
					<img width="120" height="120" src="<?php bloginfo( 'template_url' ); ?>/images/vivi.jpg">
				</div>
				<h1>Vivian Alive</h1>
				<p id="title">UX Designer<span class="divider">·</span>Developer<span class="divider">·</span>Student</p>
				<p class="bio">
					I love everything simple, real and beautiful. I do a bit web design, web<br/>
					development, technical writing, translating and marketing.
				</p>
				<p class="bio">Vancouver<span class="divider">·</span>ilite.me</p>
			</div>

			<div id="board" align="left">
				<?php
					global $wpdb;
					$user_id = $post->post_author;  //change this if not in a std post loop
					$where = 'WHERE comment_approved = 1 AND user_id = ' . $user_id ;
					$comment_count = $wpdb->get_var(
					    "SELECT COUNT( * ) AS total
							FROM {$wpdb->comments}
							{$where}
						");
					$user = get_userdata($user_id);
					$post_count = get_usernumposts($user->ID);
					echo '<ul><li><span class="num">' . $post_count . '</span><br/>ARTICLES</li><li><span class="num">' . $comment_count . '</span><br/>COMMENTS</li>';
				?>
				<li><span class="num">2009</span><br/>EVER SINCE</li>
				</ul>
				<a class="button" href="<?php bloginfo('url'); ?>/blog/">Visit my blog</a>
			</div>
		</div>

		<div id="footer" class="container">
			<ul>
				<li>&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>">I LITE</a></li>
				<li><a href="<?php bloginfo('url'); ?>/about/">About</a></li>
				<li><a href="<?php bloginfo('url'); ?>/archive/">Archive</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/code/">Code</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/design/">Design</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/market/">Market</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/photo/">Photo</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/translate/">Translate</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/write/">Write</a></li>
			</ul>
		</div>
	</div><!-- E #main -->

<script type="text/javascript">
//ga
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-23230199-3']);
_gaq.push(['_trackPageview']);
(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>

</body>

</html>
