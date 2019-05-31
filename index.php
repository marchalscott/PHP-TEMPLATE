<?php 
include '_top.php';
 ?>

	<div class="thing" id="wrapper">
		<picture class="cruise"><source media="(max-width:35em)" srcset="img/cruise-1.jpg"> <source srcset="img/cruise-1.jpg"> <img alt="slider image" srcset="img/cruise-1.jpg"></picture> <picture class="cruise"><source media="(max-width:35em)" srcset="img/cruise-2.jpg"> <source srcset="img/cruise-2.jpg"> <img alt="slider image" srcset="img/cruise-2.jpg"></picture> <picture class="cruise"><source media="(max-width:35em)" srcset="img/cruise-3.jpg"> <source srcset="img/cruise-3.jpg"> <img alt="slider image" srcset="img/cruise-3.jpg"></picture> <picture class="cruise"><source media="(max-width:35em)" srcset="img/cruise-4.jpg"> <source srcset="img/cruise-4.jpg"> <img alt="slider image" srcset="img/cruise-4.jpg"></picture>
	</div>
	<section>
		<div class="newArticles">
			<h1>Recent Blog Articles!</h1>
		</div>
		<div class="blogArticles">
			<a href="#">
			<div class="article1">
				<div class="description">
					<h2>Article Title Goes Here and may wrap
						to two lines.</h2>
				</div>
				<div class="date">
					<time datetime="2018-03-16 20:00">March 16, 2018</time>
				</div>
			</div></a> <a href="#">
			<div class="article2">
				<div class="description">
					<h2>Article Title Goes Here and may wrap
						to two lines.</h2>
				</div>
				<div class="date">
					<time datetime="2018-05-10 20:00">May 10, 2018</time>
				</div>
			</div></a> <a href="#">
			<div class="article3">
				<div class="description">
					<h2>Article Title Goes Here and may wrap
						to two lines.</h2>
				</div>
				<div class="date">
					<time datetime="2018-07-04 20:00">July 4, 2018</time>
				</div>
			</div></a> <a href="#">
			<div class="article4">
				<div class="description">
					<h2>Article Title Goes Here and may wrap
						to two lines.</h2>
				</div>
				<div class="date">
					<time datetime="2018-08-01 20:00">August 1, 2018</time>
				</div>
			</div></a>
		</div>
	</section>
	
	<?php 
		include '_bottom.php';
	 ?>