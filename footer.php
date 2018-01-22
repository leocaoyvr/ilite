<div class="clear"></div>
	</div><!--#main-->
	<div id="footer" align="center" >
		<footer>
			<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?><!--Wigitized Footer--><?php endif ?>
			<p id="blog_info">&copy; <?php echo date("Y") ?> <a href="<?php bloginfo('url'); ?>/" title="<?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a> |
			<?php _e('Designed & Developed by'); ?> <a href="http://ilite.me" rel="author">Leo Cao</a></p>
		</footer>
	</div><!--#footer-->
<?php wp_footer(); /* this is used by many Wordpress features and plugins to work proporly */ ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23230199-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23230199-3');
</script>

</body>
</html>