	<section class="contain">
		<div class="middle">
			<div class="title"></div>
			<div class="banner">
				<?php
					$images_path = bloginfo('template_url')."/images/slide";
					$images      = scandir($images_path);
					
					foreach ($images as $img) {
						$img_exp = explode('.' , $img);
						$img_exp_end = end($img_exp);
						$img_type = strtolower($img_exp_end);
						
						if($img_type == 'jpg' || $img_type == 'png'){

							echo "<div style=\"background-image : url('$images_path/$img');\"></div>";
						}
					}
				?>         
			</div>
			<?php get_template_part('inc/widget-recent'); ?>
			<div class="recentwork">
				<div class="first">
					<img src="<?php bloginfo('template_url'); ?>/images/tanboor.jpg" />
					<p>درباره ی تنبـــور</p>
					<div class="back">
						<h4>درباره ی تنبـــور</h4>
						<h6>در این قسمت به گردآوری مقالات و نظرات اساتید و پیشکسوتان و هر آنچه در مورد تنبــور گفته شده میپردازیم .</h6>	
					</div>
				</div>
				<div class="second">
					<img src="<?php bloginfo('template_url'); ?>/images/album.jpg" />
					<p>آلبوم های تنبـــور</p>
					<div class="back">
						<h4>آلبوم های تنبـــور</h4>
						<h6>هدف این قسمت یادآوری آثار ماندگار تنبــور و معرفی آلبوم های جدید تنبــور میباشد .</h6>
					</div>
				</div>
				<div class="third">
					<img src="<?php bloginfo('template_url'); ?>/images/books.jpg" />
					<p>کتابهای تنبــــور</p>
					<div class="back">
						<h4>کتابهای تنبــــور</h4>
						<h6>در این قسمت کتب و جزواتی را که درباره تنبور به چاپ رسیده باشد را به نمایش میگزاریم .</h6>
					</div>
				</div>
				<div class="forth">
					<img src="<?php bloginfo('template_url'); ?>/images/bozorgan.jpg" />
					<p>بزرگان تنبـــور</p>
					<div class="back">
						<h4>بزرگان تنبـــور</h4>
						<h6>هنردوستــان عزیز در این قسمت شما میتوانید با نوازندگان نامدار تنبـــور آشنا شوید و سرگذشت<br /> و آثار آنان را مطالعه نمائید .</h6>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</section>