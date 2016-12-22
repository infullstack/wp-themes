<div id="sidebar" class="widget-area" role="complementary">
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div><!-- #secondary -->
<?php endif; ?>
</div><!-- #sidebar .widget-area -->