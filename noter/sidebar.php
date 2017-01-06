<div id="sidebar" class="widget-area" role="complementary">
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>
		<div class="social-links">
			<li id="categories" class="widget widget_categories"><h2 class="widgettitle">findMe</h2></li>
			<ul class="links">
				<?php if(get_the_author_meta('github',1)){ ?>
					<li><a href="<?php the_author_meta('github',1);?>" target="_blank"><i class="fa fa-github"></i></a></li>
				<?php };?>
				<?php if(get_the_author_meta('weibo',1)){ ?>
					<li><a href="<?php the_author_meta('weibo',1);?>" target="_blank"><i class="fa fa-weibo"></i></a></li>
				<?php };?>
				<?php if(get_the_author_meta('twitter',1)){ ?>
					<li><a href="<?php the_author_meta('twitter',1);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
				<?php };?>
				<?php if(get_the_author_meta('douban',1)){ ?>
					<li><a href="<?php the_author_meta('douban',1);?>" target="_blank"><i class="fa fa-douban"></i></a></li>
				<?php };?>
				<?php if(get_the_author_meta('zhihu',1)){ ?>
					<li><a href="<?php the_author_meta('zhihu',1);?>" target="_blank"><i class="fa fa-zhihu"></i></a></li>
				<?php };?>
				<li><a href="<?php bloginfo('url'); ?>/feed" target="_blank"><i class="fa fa-rss-square"></i></a></li>
			</ul>
		</div>		
	</div><!-- #secondary -->
<?php endif; ?>
</div><!-- #sidebar .widget-area -->