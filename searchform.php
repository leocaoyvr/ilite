<?php ?>
	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="text" class="field" name="s" id="search" />
		<input type="image" id="searchsubmit" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" title="<?php esc_attr_e( 'Search ' ); ?><?php bloginfo('url'); ?>" />
	</form>
