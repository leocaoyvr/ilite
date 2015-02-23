<?php get_header(); ?>
<?php get_sidebar(); ?>

<!-- fancybox -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_url' ); ?>/fancybox/jquery.fancybox.css" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/fancybox/jquery.fancybox.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_url' ); ?>/fancybox/helpers/jquery.fancybox-buttons.css" />
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/fancybox/helpers/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'template_url' ); ?>/fancybox/helpers/jquery.fancybox-thumbs.css" />

<script type="text/javascript">
    jQuery(document).ready(function() {

    	jQuery("a[href$='.jpg'],a[href$='.jpeg'],a[href$='.png'],a[href$='.gif']").attr('rel', 'fancybox').fancybox();
    	jQuery("a[href$='.jpg'],a[href$='.jpeg'],a[href$='.png'],a[href$='.gif']").attr('class', 'fancybox').fancybox();

		jQuery('.fancybox').fancybox({
			padding: 10,
			openEffect  : 'elastic',
			closeEffect : 'elastic',
			prevEffect : 'elastic',
			nextEffect : 'elastic',
			closeBtn  : true,
			arrows    : true,
			nextClick : true,
			helpers : {
				title : {
					type : 'over'
				},
				thumbs : {
				width : 50,
				height : 50
			}
			},
			beforeLoad: function() {
				this.title = jQuery(this.element).next(".wp-caption-text").html(); //use img caption as desc
        }
		});
    });
</script>


<div id="content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

			<article>
				<p class="upper_sml"><?php the_time('M j Y'); ?></p>
				<h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php if ( has_post_thumbnail() ) { /* loades the post's featured thumbnail, requires Wordpress 3.0+ */ echo '<div class="featured-thumbnail">'; the_post_thumbnail(); echo '</div>'; } ?>
				<div class="post-content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="pagination">&after=</div>'); ?>
				</div><!--.post-content-->
			</article>

			<div id="post-meta">
				<p class="cats"><?php _e(' Categories: '); the_category(', ') ?></p>
				<p class="tags"><?php the_tags('Tags: ', ', ', ' '); ?></p>
			</div><!--#post-meta-->

		</div><!-- #post-## -->

		<ul class="newer-older">
			<li><span class="upper_sml">Older Post > : </span><?php previous_post_link('%link')?></li>
			<li><span class="upper_sml">Newer Post > : </span><?php next_post_link('%link') ?></li>
		</ul><!--.newer-older-->

		<?php comments_template( '', true ); ?>

	<?php endwhile; /* end loop */ ?>
</div><!--#content-->
<div class="paper1"></div>
<div class="paper2"></div>

<?php get_footer(); ?>
