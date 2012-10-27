	<section class="contain-news">
		<div class="middle">
			<div class="title" id='tit'></div>
			<div class="news">
				<?php
					while (have_posts()) {
						the_post();
					
				?>

					<div class="date-pic">
						<div class="date">
							<div class="month">01</div>
							<div class="day">18</div>
							<div class="year">2012</div>
							<div class="clear"></div>
						</div>
						<div class="pic"><img src='./images/slide/slider1.jpg' /></div>
						<div class="clear"></div>
					</div>
					<div class="title-text">
						<div class="title"><h2><?php the_title(); ?></h2></div>
						<div class="text"><p><?php the_content(); ?></p></div>
					</div>	

				<?php
					}
				?>
			</div>
		</div>
	</section>