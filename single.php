<?php get_header(); ?>

<?php if ( is_active_sidebar('blog-page-widget-area') ) : ?>
<div id="banner-widget-area" class="widget-area">
	<ul class="sid">
		<?php dynamic_sidebar('blog-page-widget-area'); ?>
	</ul>
</div>
<?php endif; ?>

<div id="page-container">
	<article id="content">
		<?php //get_template_part( 'nav', 'above-single' ); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><a href="<?php echo home_url(); ?>/<?php echo $post->post_name; ?>" target="_self"><?php the_title(); ?></a></h1>
			<?php the_content('Read More &#187;'); ?>
			<?php //get_template_part( 'entry' ); ?>
			<?php comments_template('', true); ?>

		<?php endwhile; endif; ?>

		<?php get_template_part( 'nav', 'below-single' ); ?>
	</article>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>