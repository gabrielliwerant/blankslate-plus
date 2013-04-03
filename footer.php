<div class="clear"></div>

</div>

<footer>
	<?php if ( is_active_sidebar('footer-widget-area') ) : ?>
		<div id="footer-widget-area" class="widget-area">
			<ul class="sid">
				<?php dynamic_sidebar('footer-widget-area'); ?>
			</ul>
		</div>
	<?php endif; ?>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>