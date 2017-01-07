		<footer id="footer">
			<section class="links_adlink">
			<?php wp_nav_menu(array('theme_location' => 'header_nav', 'echo' => true)); ?>
			</section>
			<div class="copyright"><a target="_blank" href="https://infullstack.com">Designed by 全栈笔记, </a><a target="_blank" href="http://www.wordpress.cn">Proudly published with Wordpress</a></div>
		</footer>		
		</div>
	</div>
</div>
<div class="clearer"></div>
<div class="back2top"><svg class="icon" viewBox="0 0 1229 1024" xmlns:xlink="http://www.w3.org/1999/xlink" width="19.203125" height="16"><defs><style type="text/css"></style></defs><path d="M955.765399 614.591058v408.726594h-682.348237V614.591058h-273.416939l614.591057-614.591058 614.591058 614.591058H955.765399z" fill="" ></path></svg></div>
<script type='text/javascript' src="//cdn.bootcss.com/jquery/3.0.0-beta1/jquery.min.js"></script>
<?php wp_footer();?>
<link href="<?php bloginfo('template_directory'); ?>/prism.css" rel="stylesheet">
<script src="<?php bloginfo('template_directory'); ?>/prism.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/instantclick.min.js" data-no-instant></script>
<script data-no-instant>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
$(function() {
    $("a:not([href*='" + site_url + "'])").attr("target", "_blank");
    $(window).on("scroll",
		function() {
			var t = $(this).scrollTop();
			t > 200 ? $(".back2top").addClass("is-active") : $(".back2top").removeClass("is-active")
		}),
    $(document).on("click", ".back2top",
		function() {
			$("html,body").animate({
				scrollTop: 0
			},
			800)
		});
    try {
        if (window.console && window.console.log) {
            console.info("%c I am Ray , Stay hungry , Stay foolish !", "line-height:120px;padding:50px 300px;font-size:20px;color:#33b796");
        }
    } catch(e) {}
	InstantClick.on('change', function() {
	  b=(window.bdShare||window._bd_share_main);b?b.init():'';
	});
	InstantClick.init();
});
</script>
</body>
</html>