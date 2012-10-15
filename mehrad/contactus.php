<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" href="reset.css" />
<link type="text/css" rel="stylesheet" href="1styles.css" />
<link type="text/css" rel="stylesheet" href="style.css" />
<script type="text/javascript" src="zepto.js"></script>
<script type="text/javascript" src="scripts.js"></script>
</head>
<style>
body{
	background-image:url('images/bg-1.png');
	background-repeat: repeat;
}
</style>

<body>
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
	<article class="middle">
		<div class="title">
			برای آشنایی بیشتر با ما تماس بگیرید
		</div>
		<div class="contact-ways">
			<div class="send-message">
				<h4>ارسال پیام</h4>
				<form action="mail.php" id="contact" method="post">
					<input type="text" class="text" name="name" id="name" placeholder="نام" />
					<input type="text" class="text" name="email" id="email" placeholder="ایمیل" />
					<textarea name="message" id="message" cols="65" rows="16" placeholder="پیام"></textarea>
					<input type="submit" value="ارسال" class="button" id="submit" name="submit" />
				</form>
			</div>
			<div class="contact-info">
				<h4>اطلاعات تماس</h4>
				<div class="map"></div>
				<p>
					برای تماس با سرپرست، تنظیم اجرا، همکاری، حمایت و یا هرگونه نظر و انتقاد از راه های زیر استفاده کنید و یا از طریق فرم مقابل برای ما ایمیل بفرستید.

				</p>
				<span class="address">
					آدرس : کارخانه پپسی سعادت ۲۲ آزادی ۹۵ پلاک ۱۹
				</span>
				<span class="tell">
					email:etp1212@gmail.com<br />
					تلفن: ۰۹۱۵۵۵۵۵۵۵۵۵
				</span>

			</div>
		</div>
	</article>
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
</body>
</html>
