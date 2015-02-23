<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

<div id="archives" class="page-fw">
	<h2>Archives</h2>
	<p>Yesterday once more.</p>
	<div id="cat_list">
		<h3>Categories</h3>
		<?php wp_list_categories('orderby=name&show_count=1&style=none&hierarchical=1'); ?>
	</div>
	<div id="tag_cloud">
		<h3>Tags</h3>
		<?php wp_tag_cloud(''); ?>
	</div>
	<div id="article_list">
		<h3>Article List</h3>
		<?php
			$previous_year = $year = 0;
			$previous_month = $month = 0;
			$ul_open = false;
			$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
		?>
		<?php foreach($myposts as $post) : ?>
		<?php
			setup_postdata($post);
			$year = mysql2date('Y', $post->post_date);
			$month = mysql2date('n', $post->post_date);
			$day = mysql2date('j', $post->post_date);
		?>
		<?php /*  if($year != $previous_year || $month != $previous_month) :  */ ?>
		<?php if($year != $previous_year) : ?>
			<?php if($ul_open == true) : ?>
			</ul>
			<?php endif; ?>
			<h3><?php the_time('Y'); ?></h3>
		<ul>
			<?php $ul_open = true; ?>
			<?php endif; ?>
			<?php $previous_year = $year; $previous_month = $month; ?>
		<li><span class="post_date"><?php the_time('m-d '); ?></span>&nbsp;<span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
		<?php endforeach; ?>
		</ul>
	</div>
</div>
<div class="paper1"></div>
<div class="paper2"></div>

<?php get_footer(); ?>

