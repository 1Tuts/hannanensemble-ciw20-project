<section class="contain">
		<div class="middle">

			<?php
				if (have_posts()){
					the_post();
					$meta= get_post_custom();
			?>

				<div class="title">
					<h2><?php the_title(); ?><h2>
				</div>

				<div class="contact-ways">
					<div class="send-message">
						<h2>ارسال پیام</h2>
						<form action="sendmail.php" id="contact" method="post">
							<input type="text" class="text" name="name" id="name" placeholder="نام" />
							<input type="text" class="text" name="email" id="email" placeholder="ایمیل" />
							<textarea name="message" id="message" cols="65" rows="16" placeholder="پیام"></textarea>
							<input type="submit" value="ارسال" class="button" id="submit" name="submit" />
						</form>
					</div>

					<div class="contact-info">
						<h2>اطلاعات تماس</h2>
						<div class="text">
							<p>
								<?php the_content(); ?>
							</p>
						</div>
					</div>

					<div class="clear"></div>
				</div>

			<?php
				}
			?>

		</div>
	</section>