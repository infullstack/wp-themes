<?php if($_GET["link"]) header("location:".base64_decode($_GET["link"]));?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link type="image/vnd.microsoft.icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico?2" rel="shortcut icon">
<title><?php if (function_exists('is_tag') && is_tag()) {
	single_tag_title('Tag Archive for "'); echo '" - ';
}elseif (is_archive()) {
	wp_title(''); echo ' Archive - ';
}elseif (is_search()) {
	echo 'Search for "'.wp_specialchars($s).'" - ';
}elseif (!(is_404()) && (is_single()) || (is_page())) {
	wp_title(''); echo ' - ';
}elseif (is_404()) {
	echo 'Not Found - ';
}
bloginfo('name');
if ($paged > 1) {
	echo ' - page '. $paged;
} ?>
</title>
<meta name="keywords" content="siinger,singer">
<meta name="description" content="singer,a full stack engineer!">
<link href="<?php bloginfo('template_url'); ?>/style.css?20161115" type="text/css" rel="stylesheet"/>

<!--[if lt IE 9]>
<script src="//cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?9e5f1a064e329ad7c500707d4babdfa1";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
var site_url="<?php bloginfo('url'); ?>";
</script>
<link href="//cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div>
<div class="pjax animated fadeIn">
<header id="header">
<div class="logo">
	<a href="<?php bloginfo('url'); ?>" class="header-avatar"><img src="<?php bloginfo('template_url'); ?>/bg_7.jpg"></a>
	<h3><a href="<?php bloginfo('url'); ?>" class="header-title" ><?php bloginfo('name'); ?></a></h3>
	<p class="description"><?php bloginfo('description'); ?></p>
</div>
<?php get_sidebar(); ?>
</header>
<div id="main">