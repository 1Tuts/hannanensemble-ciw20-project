<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8" />
	<title>Untitled Document</title>
	<link type="text/css" rel="stylesheet" href="./1styles.css" />
	<link type="text/css" rel="stylesheet" href="./style.css" />
	<script type="text/javascript" src="./js/zepto.js"></script>
	<script type="text/javascript" src="./js/scripts.js"></script>
	<script type="text/javascript" src="./js/slide.js"></script>
	<!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
	<div class="grayline"></div>
	<div class="content-container">
		<header class="normal">	
			<section class="header">
				<nav>
					<menu>
						<li><a href="./">صفحه اصلی<span>|</span></a></li>
						<li><a href="./aboutus.php">درباره گروه<span>|</span></a></li>
						<li><a href="#">اعضا<span>|</span></a></li>
						<li><a href="#">اخبار<span>|</span></a></li>
						<li><a href="./contactus.php">تماس با ما<span></span></a></li>
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
						<li><a href="./">صفحه اصلی<span>|</span></a></li>
						<li><a href="./aboutus.php">درباره گروه<span>|</span></a></li>
						<li><a href="#">اعضا<span>|</span></a></li>
						<li><a href="#">اخبار<span>|</span></a></li>
						<li><a href="./contactus.php">تماس با ما<span></span></a></li>
						<li class="clear"></li>
					</menu>
				</nav>
				<div class="logo"></div>
				<div class="clear"></div>
			</section>
		</header>
		<!-- ---------------- Middle ------------------- -->
		<section class="contain">
			<div class="middle">
				<div class="title" id="tit"></div>
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
					<div class="first">
						<h3>نوازندگــان</h3>
						<img src="images/navazande.png">
						<p>معرفی نوازنده گان تنبور نوازان حنان</p>
					</div>
					<div class="second">
						<h3>اخبــار</h3>
						<img src="images/akhbar.png">
						<p>اخبار کنسرتها و جشنواره های موسیقی</p>
					</div>
					<div class="third">
						<h3>نمایه هــا</h3>
						<img src="images/navazande.png">
						<p>نمایش نمایه های حنـــان</p>
					</div>
					<div class="forth">
						<h3>برنامه ها</h3>
						<img src="images/navazande.png">
						<p>نوازهای اجرا شده ی حنـــان</p>
					</div>
					<div class="clear"></div>
				</div>
				<div class="recentwork">
					<div class="first">
						<a href="./alinejad.php">
							<img src="images/alinejad.jpg" />
							<p>استاد سید خلیل عالی نژاد</p>
						</a>
					</div>
					<div class="second">
						<a href="./hayati.php">
							<img src="images/hayati.jpg" />
							<p>استاد امیر حیاتی</p>
						</a>
					</div>
					<div class="third">
						<a href="./yarveysi.php">
							<img src="images/yarveysi.jpg" />
							<p>استاد طاهر یارویسی</p>
						</a>
					</div>
					<div class="forth">
						<a href="./ebrahimi.php">
							<img src="images/ebrahimi.jpg" />
							<p>استاد سید امرالله شاه ابراهیمی</p>
						</a>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</section>
	</div>
	<div class="footer-container">
		<footer class="foot">
			<section class="contain">
				<div class="bigfooter">
					<div class="first">
						<h3>درباره ما</h3>
						   <p><a href="contactus.html">شما هنردوستان میتوانید با ارسال فرم در صفحه تماس با ما با تنبورنوازان در ارتباط باشید.</a></p><br />
						   <p>لینکهای ارتباطی تنبورنوازان در شبکه های اجتماعی</p>
						   <br /><br />
						   <ul>
							   <li class="fb" id="trans"><a href="http://www.facebook.com/TanboornavazaneHanan" target="_blank"></a></li>
							   <li class="twitter" id="trans"><a href="https://twitter.com/HananEnsemble" target="_blank"></a></li>
							   <li class="flickr" id="trans"><a href="http://www.flickr.com/photos/hananensemble/" target="_blank"></a></li>
							   <li class="rss" id="trans"><a href="" target="_blank"></a></li>
						   </ul>
					</div>
					<div class="second">
						<h3>آخرین پست ها</h3>
						<p><a>دیدار با استاد طاهر یارویسی</a></p>
					</div>
					<div class="third">
						<h3>آخرین اخبار</h3>
						<p><a>آلبوم جدید حسام الدین سراج</a></p>
						<p><a>کنسرت بزرگ از غرب تا شرق در مشهد</a></p>
					</div>
					<div class="forth">
						<h3>عضویت در خبرنامه</h3>
						<p>لطفا ایمیل خود را وارد کنید</p>
						<input type="input">
						<input class="button" type="submit" value="ارسال">
					</div>
					<div class="clear"></div>
				</div>
				<div class="footer">
					<div class="copyright">
						<p class="rights">Copyright © 2012 By HananEnsemble.</p>
					</div>
					<div class="designteam">
						<p class="Design">Follow Designing Team "DibaDev" On <span><a>Twitter, </a>a></span> <span><a>Facebook,</a></span> <span><a href="https://github.com/DibaDev">Github </a></span></p>
					</div>
					<div class="clear"></div>
				</div>
			</section>
		</footer>
		<div class="darkline"></div>
	</div>
</body>
</html>
