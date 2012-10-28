	<section class="contain">
		<div class="middle">
			<div class="title" id='tit'></div>
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
		</div>
	</section>