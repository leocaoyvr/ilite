<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="content" class="search">

	<h1><?php the_search_query(); ?></h1>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<p class="upper_sml"><?php the_time('F j, Y'); ?></p>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
	
			<div class="post-excerpt">
				<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
			</div><!--.post-excerpt-->
		</div><!--.post-single-->
	<?php endwhile; else: ?>
		<div class="no-results">
			<h2><?php _e('No Results'); ?></h2>
			<p><?php _e('Please feel free try again!'); ?></p>
		</div><!--no-results-->
	<?php endif; ?>

	<div class="oldernewer">
		<span class="older"><?php next_posts_link('&laquo; Older Entries') ?></span>
		<span class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></span>
	</div><!--.oldernewer-->
	
</div><!-- #content -->
<div class="paper1"></div>
<div class="paper2"></div>

<?php get_footer(); ?>
