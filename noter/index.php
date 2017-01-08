<?php get_header(); ?>
<section class="blockGroup container">
	<?php if (is_single()||is_page()) { ?>
		<?php if (is_single()) { ?>
			<h2 itemprop="name headline" class="title"><?php the_title();?>
				<p style="float: right;">
					<?php if (get_next_post()) { next_post_link('%link',"<i title='上一篇 : %title' class='snav fa fa-arrow-left'></i>");} ?>
					<?php if (get_previous_post()) {previous_post_link('%link',"<i title='下一篇 : %title' class='snav fa fa-arrow-right'></i>");}?>
				</p>
			</h2>
			<div class="p_time"><?php $location = get_post_meta($post->ID, 'location', true);if (!empty ( $location )) {	?><i class="fa fa-map-marker"></i>&nbsp;&nbsp;<?php echo $location ?><?php }?><i class="fa fa-sun-o"></i>&nbsp;&nbsp;<?php the_time('Y-m-d') ?><i class="fa fa-empire"></i>&nbsp;&nbsp;<?php the_category(' &bull; '); ?>
			<i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo fa_get_post_readtime();?> 分钟
			</div>
			<article class="post single" itemscope itemtype="http://schema.org/BlogPosting">
				<?php if (have_posts()) { while (have_posts()) {
					the_post();
					the_content();
				} }; ?>
				
				<div class="meta">
					<p>— 转载本站文章请注明作者和出处<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> ，请勿用于任何商业用途</p>
					<p>— 于 <?php the_time('Y年m月d日') ?> ，共写了 <?php echo count_words(get_the_content())?> 字；</p>
					<p>— 本文共有 <?php echo count(get_the_tags(),0);?> 个<?php the_tags(); ?></p>
				</div>
				<div class="bdsharebuttonbox"><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a><a href="#" class="bds_twi" data-cmd="twi" title="分享到Twitter"></a><a href="#" class="bds_linkedin" data-cmd="linkedin" title="分享到linkedin"></a><a href="#" class="bds_evernotecn" data-cmd="evernotecn" title="分享到印象笔记"></a><a href="#" class="bds_douban" data-cmd="douban" title="分享到豆瓣网"></a><a href="#" class="bds_copy" data-cmd="copy" title="分享到复制网址"></a><a href="#" class="bds_print" data-cmd="print" title="分享到打印"></a></div>
			</article>
			<?php if(get_the_author_meta('alipay')||get_the_author_meta('wechatpay')){ ?>
				<div class="reward">
				赏
				<ul>
				<?php if(get_the_author_meta('alipay')){ ?>
				<li><img src="<?php the_author_meta('alipay');?>">用支付宝打我</li>
				<?php }; if(get_the_author_meta('wechatpay')){ ?>
				<li><img src="<?php the_author_meta('wechatpay');?>">用微信打我</li>
				<?php };?>
				</ul>
				</div>
			<?php }?>
		<?php } else { ?>
			<article class="page single" itemscope itemtype="http://schema.org/BlogPosting">
				<?php if (have_posts()) { while (have_posts()) {
					the_post();
					the_content();
				} }; ?>
			</article>
		<?php } ?>
		<?php setPostViews(get_the_ID()); ?>
		
		<section class="ending">
		<div class="about">
		<a><?php echo get_avatar(get_the_author_email(),'80');?></a>
		<span><?php the_author_meta('description');?></span>
		</div>
		<?php if(get_the_author_meta('weibo')||get_the_author_meta('tencent')||get_the_author_meta('douban')||get_the_author_meta('zhihu')||get_the_author_meta('github')){ ?>
		<ul class="sns">
		<?php if(get_the_author_meta('weibo')){ ?>
		<li class="weibo"><a href="<?php the_author_meta('weibo');?>" target="_blank"><i class="fa fa-weibo"></i></a></li>
		<?php }; if(get_the_author_meta('tencent')){ ?>
		<li class="tencent"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?php the_author_meta('tencent');?>&site=qq&menu=yes" target="_blank"><i class="fa fa-qq"></i></a></li>
		<?php }; if(get_the_author_meta('douban')){ ?>
		<li class="douban"><a href="<?php the_author_meta('douban');?>" target="_blank"><i class="fa fa-douban"></i></a></li>
		<?php }; if(get_the_author_meta('zhihu')){ ?>
		<li class="zhihu"><a href="<?php the_author_meta('zhihu');?>" target="_blank"><i class="fa fa-zhihu"></i></a></li>
		<?php }; if(get_the_author_meta('github')){ ?>
		<li class="github"><a href="<?php the_author_meta('github');?>" target="_blank"><i class="fa fa-github"></i></a></li>
		<?php };?>
		<?php if(get_the_author_meta('twitter')){ ?>
			<li class="twitter"><a href="<?php the_author_meta('twitter');?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
		<?php };?>
			<li class="rss"><a href="<?php bloginfo('url'); ?>/feed" target="_blank"><i class="fa fa-rss-square"></i></a></li>
		</ul>
		<?php };?>
		</section>        
	<?php comments_template(); 
	} else { 
	
if (is_archive()){
		the_archive_title( '<h2 class="page-title">', '</h2>' );
		the_archive_description( '<h4 class="taxonomy-description">', '</h4>' );

	}elseif (is_search()) { ?>
	<h2><?php echo get_search_query(); ?>的搜索结果</h2><?php }

	
	if (have_posts()): $x=0; while (have_posts()): the_post(); $x=$x+1;?>
		<?php if($x==1){?>
			<article class="post post-list" itemscope="" itemtype="http://schema.org/BlogPosting">
				<h2 itemprop="name headline" class="title"><a href="<?php the_permalink();?>"><i class="fa fa-star" style="font-size: 16px;"></i>&nbsp;&nbsp;<?php the_title();?></a></h2>
				<p><?php echo mb_strimwidth(strip_shortcodes(strip_tags(apply_filters('the_content', $post->post_content))), 0, 500,"...");?></p>
				<div class="p_time"><i class="fa fa-sun-o"></i>&nbsp;&nbsp;<?php the_time('Y-m-d') ?><i class="fa fa-empire"></i>&nbsp;&nbsp;<?php the_category(' &bull; '); ?><a class="title-more" href="<?php the_permalink();?>">阅读更多</a></div>
			</article>
			<div class="tags">
			<?php wp_tag_cloud(array('number'=>25)); ?>
			</div>
			<ul class="post-list">
		<?php } else { ?>
			<li class="post-title">
				<span class="time"><?php the_time('Y-m-d') ?></span>
				<small> &bull; </small>
				<span class="title"><a href="<?php the_permalink();?>"><?php the_title();?></a></span>
				<span class="category"><?php the_category(' &bull; '); ?></span>
			</li>
		<?php }?>
	<?php endwhile; ?></ul>
	<div class="nav">
		<nav class="navigator">
			<?php if ( get_previous_posts_link() ) {
				previous_posts_link("上一页");
			} else {
				echo '<span>上一页</span>';
			} ?><?php echo '<span class="pagenum">' . max( 1, get_query_var('paged') ) . '/' . $wp_query->max_num_pages . '</span>'; ?><?php if ( get_next_posts_link() ) {
				next_posts_link("下一页");
			} else {
				echo '<span>下一页</span>';
			} ?>
		</nav>
	</div>
	<?php endif; };?>
</section>
<?php get_footer(); ?>