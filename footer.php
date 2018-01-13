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
</body>
</html>