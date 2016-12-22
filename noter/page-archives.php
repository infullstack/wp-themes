<?php
/*
Template Name: archives
*/
?>
<?php get_header(); ?>
<section class="blockGroup container">
<div class="archives">
	<h1>草稿箱</h1>
	<ul>
	<?php
	$myposts = get_posts('post_status=draft&numberposts=-1&orderby=post_date&order=DESC');
	foreach($myposts as $post) :
		setup_postdata($post);
	?>
		<li>
			<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a><span class="a_date"><?php the_time('m-j'); ?></span>
		</li>
	<?php endforeach; ?>
	</ul>
	<?php
	$previous_year = $year = 0;
	$previous_month = $month = 0;
	$ul_open = false;
	$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
	foreach($myposts as $post) :
		setup_postdata($post);
		$year = mysql2date('Y', $post->post_date);
		$month = mysql2date('n', $post->post_date);
		$day = mysql2date('j', $post->post_date);

		if($year != $previous_year || $month != $previous_month) :
			if($ul_open == true) : 
				echo '</ul>';
			endif;

			echo '<h1>'; echo the_time('Y-m'); echo '</h1>';
			echo '<ul>';
			$ul_open = true;
		endif;

		$previous_year = $year; $previous_month = $month;
	?>
		<li>
			<a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a><span class="a_date"><?php the_time('m-j'); ?></span>
		</li>
	<?php endforeach; ?>
	</ul>
</div>
</section>
<style type="text/css">
.archives{
	padding-bottom:3em;
}
.archives h1{
	font-size: 1.4rem;
    color: #1F1F1F;
    font-weight: bold;
    line-height: 2.2em;
	margin:0px;
}
.archives h1:nth-child(n+2){
    padding-top: 2em;
}
.archives .a_date{
	float:right;color: #C5C5C5;
}
</style>
<?php get_footer(); ?>