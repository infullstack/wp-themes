<?php
	/**
	 Template Name: links
	 */

	get_header(); 

?>
<section class="blockGroup container">
	<?php while(have_posts()) : the_post(); ?>	
	<h2 class="links-title">Friends</h2>
		<article <?php post_class("post-item"); ?>>
			<?php the_content(); ?>			
		</article>		
		<ul class="links">
			<li>
				<a target="_blank" href="https://www.amazon.cn/Hadoop%E6%9D%83%E5%A8%81%E6%8C%87%E5%8D%97-%E6%80%80%E7%89%B9/dp/B016OFNZYM/ref=sr_1_2?ie=UTF8&qid=1480858973&sr=8-2&keywords=hadoop%E6%9D%83%E5%A8%81%E6%8C%87%E5%8D%97">
					<img class="book" src="https://images-cn.ssl-images-amazon.com/images/I/81AvcmzOc%2BL.jpg"></img>
					<h4>Hadoop权威指南</h4>
				</a>
			</li>			
		
			<li>
				<a target="_blank" href="https://www.amazon.cn/Java%E7%BC%96%E7%A8%8B%E6%80%9D%E6%83%B3-%E5%9F%83%E5%8F%B2%E5%B0%94/dp/B0011F7WU4/ref=sr_1_1?ie=UTF8&qid=1480860475&sr=8-1&keywords=%E7%BC%96%E7%A8%8B%E6%80%9D%E6%83%B3">
					<img class="book" src="https://images-cn-4.ssl-images-amazon.com/images/I/51lMLob62AL.jpg"></img>
					<h4>Java编程思想</h4>
				</a>
			</li>			
	
			<li>
				<a target="_blank" href="https://www.amazon.cn/%E9%AB%98%E6%80%A7%E8%83%BDMySQL-%E6%96%BD%E7%93%A6%E8%8C%A8/dp/B00C1W58DE/ref=sr_1_1?ie=UTF8&qid=1480860506&sr=8-1&keywords=%E9%AB%98%E6%80%A7%E8%83%BDmysql">
					<img class="book" src="https://images-cn.ssl-images-amazon.com/images/I/91vcPw7neSL.jpg"></img>
					<h4>高性能MySQL</h4>
				</a>
			</li>			
		
			<li>
				<a target="_blank" href="https://www.amazon.cn/Sun-%E5%85%AC%E5%8F%B8%E6%A0%B8%E5%BF%83%E6%8A%80%E6%9C%AF%E4%B8%9B%E4%B9%A6-Effective-Java%E4%B8%AD%E6%96%87%E7%89%88-Joshua-Bloch/dp/B001PTGR52/ref=sr_1_1?ie=UTF8&qid=1480860578&sr=8-1&keywords=effective+java">
					<img class="book" src="https://images-cn.ssl-images-amazon.com/images/I/51bFt0sSAKL.jpg"></img>
					<h4>Effective Java中文版</h4>
				</a>
			</li>		
				
			<li>
				<a target="_blank" href="https://www.amazon.cn/Java%E5%B9%B6%E5%8F%91%E7%BC%96%E7%A8%8B%E5%AE%9E%E6%88%98-%E7%9B%96%E8%8C%A8/dp/B0077K9XHW/ref=sr_1_3?ie=UTF8&qid=1480860668&sr=8-3&keywords=%E6%B7%B1%E5%85%A5%E7%90%86%E8%A7%A3Java%E8%99%9A%E6%8B%9F%E6%9C%BA">
					<img class="book" src="https://images-cn.ssl-images-amazon.com/images/I/51XldrwRktL.jpg"></img>
					<h4>Java并发编程实战</h4>
				</a>
			</li>
			
			<li>
				<a target="_blank" href="https://www.amazon.cn/%E9%87%8D%E6%9E%84-%E6%94%B9%E5%96%84%E6%97%A2%E6%9C%89%E4%BB%A3%E7%A0%81%E7%9A%84%E8%AE%BE%E8%AE%A1-%E9%A9%AC%E4%B8%81%C2%B7%E7%A6%8F%E5%8B%92/dp/B011LPUB42/ref=sr_1_1?ie=UTF8&qid=1480860736&sr=8-1&keywords=%E9%87%8D%E6%9E%84%E6%94%B9%E5%96%84%E6%97%A2%E6%9C%89%E4%BB%A3%E7%A0%81">
					<img class="book" src="https://images-cn.ssl-images-amazon.com/images/I/51jUA3dnNNL.jpg"></img>
					<h4>重构:改善既有代码的设计</h4>
				</a>
			</li>
			
			<li>
				<a target="_blank" href="https://www.amazon.cn/%E7%BC%96%E7%A8%8B%E4%B9%8B%E7%BE%8E-%E5%BE%AE%E8%BD%AF%E6%8A%80%E6%9C%AF%E9%9D%A2%E8%AF%95%E5%BF%83%E5%BE%97-%E7%BC%96%E7%A8%8B%E4%B9%8B%E7%BE%8E-%E5%B0%8F%E7%BB%84/dp/B0016K8XGQ/ref=sr_1_1?ie=UTF8&qid=1480860795&sr=8-1&keywords=%E7%BC%96%E7%A8%8B%E4%B9%8B%E7%BE%8E">
					<img class="book" src="https://images-cn.ssl-images-amazon.com/images/I/51Gx0ty8JkL.jpg"></img>
					<h4>编程之美</h4>
				</a>
			</li>
		</ul>
	<?php endwhile; ?>
</section>
<style>
.links-title{font-family: Georgia, "Times New Roman", Times, Kai, "Kaiti SC", KaiTi, BiauKai, 楷体, 楷体_GB2312, serif;}
h2.links-title{
	border-bottom:thick double #eee;
	padding-bottom:20px;
	margin-bottom:20px;
}
.book{
	width:100px;
	height:100px;
}
ul.links li{
	display:inline-block;
	margin:10px;
	max-width:100px;
}
ul.links img{
	border:1px solid #ddd;
	border-radius:100%;
}
img:hover{
	-ms-transform:rotate(360deg); /* IE 9 */
    -moz-transform:rotate(360deg); /* Firefox */
    -webkit-transform:rotate(360deg); /* Safari and Chrome */
    -o-transform:rotate(360deg); /* Opera */
}
.desc{ 
	font-size:10px;
	margin:10px;
}
ul.links li h4{
	font-size:12px;	
	margin-top:5px;
	text-align:center;
	max-width:100px;
	overflow:hidden; white-space:nowrap; text-overflow:ellipsis
}
ul.links li h4:hover{color:#d54e21;}
</style>
<?php
get_footer();
