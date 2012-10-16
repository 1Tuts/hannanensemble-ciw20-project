<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="reset.css" />
<link type="text/css" rel="stylesheet" href="1styles.css" />
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="scripts.js"></script>
<script type="text/javascript" src="slide.js"></script>
</head>

<body>
	<div class="header-container">
		<header class="head">
			<div class="grayline">
			</div>  
			<section class="header">
				<nav class="normal">
					<menu>
						<li><a href="#">صفحه اصلی<span>|</span></a></li>
						<li><a href="#">درباره گروه<span>|</span></a></li>
						<li><a href="#">اعضا<span>|</span></a></li>
						<li><a href="#">اخبار<span>|</span></a></li>
						<li><a href="#">تماس با ما<span>|</span></a></li>
						<li class="clear"></li>
					</menu>
				</nav>
				<nav class="action">
					<menu>
						<li><a href="#">صفحه اصلی<span>|</span></a></li>
						<li><a href="#">درباره گروه<span>|</span></a></li>
						<li><a href="#">اعضا<span>|</span></a></li>
						<li><a href="#">اخبار<span>|</span></a></li>
						<li><a href="#">تماس با ما<span>|</span></a></li>
						<li class="clear"></li>
					</menu>
				</nav>
				<div class="logo"></div>
				<div class="clear"></div>
			</section>
		</header>
	</div>
	<div class="content-container">
		<article class="middle">
				<div class="title"></div>
				<div class="banner">
					<?php

						$images_path = './images/slide';
						$images      = scandir($images_path);

						foreach ($images as $img) {
							$img_exp = explode( '.' , $img );

							$img_exp_end = end( $img_exp );

							$img_type = strtolower( $img_exp_end );

							if($img_type == 'jpg' || $img_type == 'png'){

								echo "<div style=\"background-image : url('$images_path/$img');\"></div>";
							}
						}
					?>
				</div>
				<div class="boxess">
					<div class="first" id="boxone"></div>
					<div class="second" id="boxone"></div>
					<div class="third" id="boxone"></div>
					<div class="forth"></div>
					<div class="clear"></div>
				</div>
				<div class="recentwork">
					<div class="first" id="boxtwo"></div>
					<div class="second" id="boxtwo"></div>
					<div class="third" id="boxtwo"></div>
					<div class="forth"></div>
					<div class="clear"></div>
				</div>
		</article>
	</div>
	<div class="footer-container">
		<footer class="foot">
			<section class="contain">
				<div class="bigfooter">
					<div class="first" id="boxthree"></div>
					<div class="second" id="boxthree"></div>
					<div class="third" id="boxthree"></div>
					<div class="forth"></div>
					<div class="clear"></div>
				</div>
				<div class="footer">
					<div class="copyright"></div>
					<div class="facebook"></div>
					<div class="clear"></div>
				</div>
				
			</section>
			<div class="darkline"></div>
		</footer>
	</div>
</body>
</html>
