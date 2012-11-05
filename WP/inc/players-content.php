
		<div class="middle">
			<?php
				if (have_posts()){
					the_post();
			?>

			<div id='tit'><?php the_title(); ?></div>
			<div class="players">

			<?php

				$players_attachments= array(
					'numberposts' => '-1',
					'orderby '=> 'menu_order',  
					'order'=> 'ASC',  
					'post_mime_type' => 'image', 
					'post_parent' => $post->ID, 
					'post_status' => null, 
					'post_type' => 'attachment'
				);

				$images= get_children($players_attachments);

				if ($images){

					foreach ($images as $img) {

						echo "<div>";

							$img_face = wp_get_attachment_image($img->ID,'thumbnail');
							
							echo $img_face;

							echo "<p> $img->post_content </p>";

                   				    		
						echo "</div>";			

					}
				}
			?>
		
			</div>
	

			<?php
				}
			?>
		</div>
