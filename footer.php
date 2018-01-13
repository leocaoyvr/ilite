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

<script><!-- Google Analytics begin -->
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23230199-3', 'auto');
  ga('send', 'pageview');
</script><!-- Google Analytics end -->

</body>
</html>