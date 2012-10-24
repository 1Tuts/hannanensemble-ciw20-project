	<section class="contain-gallery">
		<div class="middle">
			<div class="title" id="tit">گالری</div>
			
			<?php
				if (have_posts()){
					the_post();
			?>

				
				<div class="text"><?php the_title(); ?></div>
				<div class="gallery">
				
						<?php

							$gall_attach= array(
								'numberposts' => '-1',
								'orderby '=> 'menu_order',  
								'order'=> 'ASC',  
								'post_mime_type' => 'image', 
								'post_parent' => $post->ID, 
								'post_status' => null, 
								'post_type' => 'attachment'
							);

							$images= get_children($gall_attach);

							if ($images){

								foreach ($images as $img) {

									echo "<div class='gallery-img'>";

									$img_med= wp_get_attachment_image($img->ID,'medium');
									$img_larg= wp_get_attachment_image_src($img->ID,'large');
									
									echo "<a rel='lightbox[group1]' href=\"$img_larg[0]\">$img_med</a>";

									echo "<p> $img->post_content </p>";
									
									echo "</div>";
								}
								echo "<div class='clear'></div>";

								

							}
							else 
								echo "<p class='no-image'>نمونه کاری یافت نشد</p>";
							
						?>
					
				</div>
	

			<?php
				}
			?>
			
		</div>
	</section>