	<section class="contain">
		<div class="middle">
			<?php
				if (have_posts()){
					the_post();
			?>
				<div id='tit'><?php the_title(); ?></div>
				<div class="banner">
					<?php
						$slide_attach= array(
							'numberposts' => '-1',
							'orderby '=> 'menu_order',  
							'order'=> 'ASC',  
							'post_mime_type' => 'image', 
							'post_parent' => $post->ID, 
							'post_status' => null, 
							'post_type' => 'attachment'
						);

						$images= get_children($slide_attach);

						if ($images){

							foreach ($images as $img) {
								
									$img_larg= wp_get_attachment_image_src($img->ID,'large');
									echo "<div style='background-image: url(\"$img_larg[0]\")'></div>";
							}
						}
					?>     
				</div>

			<?php
				}
			?>

			<?php get_template_part('inc/widget-recent'); ?>
		</div>
	</section>