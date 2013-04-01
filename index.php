<?php get_header(); ?>

<?php if ( is_active_sidebar('blog-page-widget-area') ) : ?>
<div id="banner-widget-area" class="widget-area">
	<ul class="sid">
		<?php dynamic_sidebar('blog-page-widget-area'); ?>
	</ul>
</div>
<?php endif; ?>

<div id="page-container">
	<div id="content">
		<?php while ( have_posts() ) : the_post() ?>
			<div class="post">
				<h3><a href="<?php echo home_url(); ?>/<?php echo $post->post_name; ?>" target="_self"><?php the_title(); ?></a></h3>
				<?php the_content('Read More &#187;'); ?>
				<?php comments_template(); ?>
			</div>

		<?php endwhile; ?>

		<?php get_template_part( 'nav', 'below' ); ?>
	</div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>