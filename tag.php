<?php get_header(); ?>
<?php get_sidebar(); ?>

<div id="content">

	<h1><?php printf( __( 'Tag Archives: %s' ), '<span>' . single_tag_title( '', false ) . '</span>' ); ?></h1>
	<?php echo tag_description(); /* displays the tag's description from the Wordpress admin */ ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post-single">
			<p class="upper_sml"><?php the_time('M j Y'); ?></p>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
			<div class="post-excerpt">
				<?php the_excerpt(); /* the excerpt is loaded to help avoid duplicate content issues */ ?>
			</div>
	
			<div class="post-meta">
				<p class="comments"><?php _e('Comments: '); comments_popup_link('No Raindrop', '1 Raindrop', '% Raindrops'); ?>
				<p class="cats"><?php _e('Categories: '); the_category(', ') ?></p>
				<p class="tags"><?php if (the_tags('Tags: ', ', ', ' ')); ?></p>
			</div><!--.postMeta-->
		</div><!--.1`post-single-->
	<?php endwhile; else: ?>
		<div class="no-results">
			<p><strong><?php _e('There has been an error.'); ?></strong></p>
			<p><?php _e('We apologize for any inconvenience, please hit back on your browser or use the search form below.'); ?></p>
			<?php get_search_form(); /* outputs the default Wordpress search form */ ?>
		</div><!--noResults-->
	<?php endif; ?>
		
	<div class="oldernewer">
		<span class="older"><?php next_posts_link('&laquo; Older Entries') ?></span>
		<span class="newer"><?php previous_posts_link('Newer Entries &raquo;') ?></span>
	</div><!--.oldernewer-->
	
</div><!--#content-->
<div class="paper1"></div>
<div class="paper2"></div>

<?php get_footer(); ?>