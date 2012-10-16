<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>Untitled Document</title>
	<link type="text/css" rel="stylesheet" href="reset.css" />
	<link type="text/css" rel="stylesheet" href="1styles.css" />
	<link type="text/css" rel="stylesheet" href="style.css" />
	<script type="text/javascript" src="js/zepto.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/slide.js"></script>

	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
	<header class="normal">
		<div class="grayline"></div>	
		<section class="header">
			<nav>
				<menu>
					<li><a href="#">صفحه اصلی<span>|</span></a></li>
					<li><a href="#">درباره گروه<span>|</span></a></li>
					<li><a href="#">اعضا<span>|</span></a></li>
					<li><a href="#">اخبار<span>|</span></a></li>
					<li><a href="#">تماس با ما<span></span></a></li>
					<li class="clear"></li>
				</menu>
			</nav>
			<div class="logo"></div>
			<div class="clear"></div>
		</section>
	</header>
	<header class="action">
		<div class="grayline"></div>	
		<section class="header">
			<nav>
				<menu>
					<li><a href="#">صفحه اصلی<span>|</span></a></li>
					<li><a href="#">درباره گروه<span>|</span></a></li>
					<li><a href="#">اعضا<span>|</span></a></li>
					<li><a href="#">اخبار<span>|</span></a></li>
					<li><a href="#">تماس با ما<span></span></a></li>
					<li class="clear"></li>
				</menu>
			</nav>
			<div class="logo"></div>
			<div class="clear"></div>
		</section>
	</header>
	<section class="contain">
		<div class="middle">
			<div class="title"></div>
			<div class="banner">
				<?php

					$images_path = './images/slide';
					$images      = scandir($images_path);

					foreach ($images as $img) {

						$img_exp = explode('.' , $img);

						$img_exp_end = end($img_exp );

						$img_type = strtolower($img_exp_end );

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
		</div>
	</section>
	<footer class="foot">
		<section class="contain">
			<div class="bigfooter">
				<div class="first" id="boxthree">
					<h3>درباره ما</h3>
					   <p><a href="contactus.html">شما هنردوستان میتوانید با ارسال فرم در صفحه تماس با ما با تنبورنوازان در ارتباط باشید.</a></p><br />
					   <p>لینکهای ارتباطی تنبورنوازان در شبکه های اجتماعی</p>
					   <br /><br />
					   <ul>
						   <li class="fb" id="trans"><a target="_blank"></a></li>
						   <li class="twitter" id="trans"><a target="_blank"></a></li>
						   <li class="flickr" id="trans"><a target="_blank"></a></li>
						   <li class="rss" id="trans"><a target="_blank"></a></li>
					   </ul>
				</div>
				<div class="second" id="boxthree"></div>
				<div class="third" id="boxthree"></div>
				<div class="forth"></div>
				<div class="clear"></div>
			</div>
			<div class="footer">
				<div class="copyright">
					<p class="rights">Copyright © 2012 HananEnsemble.</p>
				</div>
				<div class="designteam">
					<p class="Design">Follow Designing Team "DibaDev" On <span><a>Twitter, <a/></span> <span><a>Facebook,</a></span> <span><a href="https://github.com/DibaDev">Github </a></span></p>
				</div>
				<div class="clear"></div>
			</div>
			
		</section>
		<div class="darkline"></div>
	</footer>
	<div class="darkline"></div>
</body>
</html>
