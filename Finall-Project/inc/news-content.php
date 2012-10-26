		<section class="contain-news">
			<div class="middle">
				<div class="title" id='tit'>اخبار</div>
				
				<?php
					while (have_posts()) {
						the_post();
					
				?>
				
					<div class="news">
						<div class="pic"><?php the_post_thumbnail(); ?></div>
						<div class="date-text">
							<div class="date"></div>
							<div class="title-text">
								<div class="title"><?php the_title(); ?></div>
								<div class="text"><?php the_content(); ?></div>
								<div class="clear"></div>
							</div>
						</div>
					</div>

				<?php
					}
				?>

			</div>
		</section>