<?php get_template_part('inc/header'); ?>
	<section class="contain-news">
		<div class="middle">
			<div class="title" id='tit'></div>
			
				<?php
					while (have_posts()) {
						the_post();
				?>
				<div class="news">
					<div class="date-pic">
						<div class="date">
							<?php the_date(); ?>
						</div>
						<div class="pic"><?php the_post_thumbnail(); ?></div>
						<div class="clear"></div>
					</div>
					<div class="title-text">
						<div class="title"><h2><?php the_title(); ?></h2></div>
						<div class="text"><p><?php the_content(); ?></p></div>
					</div>	
				</div>
				<?php
					}
				?>
		</div>
	</section>
<?php get_template_part('inc/footer'); ?>