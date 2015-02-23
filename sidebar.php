<div id="sidebar">
	<div id="socials" class="widget-area widget-sidebar">
		<h3>Follow Me!</h3>
		<a href="http://ilite.me/feed/" target="_blank" title="Subscribe to I LITE" class="socialicon rss">rss</a>
		<a href="mailto://vivianalive.hotmail.com" title="Write email to me" class="socialicon mail">email</a>
		<a href="skype:vivianalive?call" title="Call me via Skype" class="socialicon skype">skype</a>
		<a href="https://plus.google.com/116704076391108813160/" target="_blank"  title="Visit my Google+ page" class="socialicon gp">google+</a>
		<a href="http://twitter.com/vivianalive" target="_blank" title="Follow my Twitter" class="socialicon twitter">twitter</a>
		<a href="#top" id="mtop">TOP ↑</a>
	</div>

	<?php if ( ! dynamic_sidebar( 'Sidebar' )) : ?>
	<ul>
		<li id="sidebar-search" class="widget">
			<h3><?php _e('Search'); ?></h3>
			<?php get_search_form(); ?>
		</li>

		<li id="sidebar-nav" class="widget menu">
			<h3><?php _e('Navigation'); ?></h3>
			<ul>
				<?php wp_nav_menu( array( 'theme_location' => 'sidebar-menu' ) ); /* editable within the Wordpress backend */ ?>
			</ul>
		</li>

		<li id="sidebar-archives" class="widget">
			<h3><?php _e('Archives') ?></h3>
			<ul>
				<?php wp_get_archives( 'type=monthly' ); ?>
			</ul>
		</li>

		<li id="sidebar-meta" class="widget">
			<h3><?php _e('Meta') ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</li>
	</ul>
	<?php endif; ?>

</div><!--sidebar-->