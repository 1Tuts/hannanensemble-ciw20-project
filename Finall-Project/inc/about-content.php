    <section class="contain">
        <div class="middle">
                <?php

                    if (have_posts()){
                        the_post();

                ?>
                    <article>
                        <div class="title" id="tit">
                        <h2><?php the_title(); ?></h2>
                        </div>

                        <div class="text">
                            <p><?php the_content(); ?></p>  
                        </div>  

                        <div class="pic">
                           
                            <?php
                                
                                $about_pics= array(
                                    'numberposts' => '-1',
                                    'orderby '=> 'menu_order',  
                                    'order'=> 'ASC',  
                                    'post_mime_type' => 'image', 
                                    'post_parent' => $post->ID, 
                                    'post_status' => null, 
                                    'post_type' => 'attachment'
                                );

                                $pics= get_children($about_pics);

                                if ($pics){

                                    foreach ($pics as $pic) {
                                        
                                        echo "<div class='about-pic'>";

                                            $img_med= wp_get_attachment_image($pic->ID , 'medium');
                                            $img_larg= wp_get_attachment_image_src($pic->ID , 'large');

                                            echo "<a rel='lightbox[group1]' hreft=\"$img_larg[0]\" title=\"$pic->post_content\">$img_med</a>";

                                        echo "</div>";

                                    }


                                }else echo "<p class='no-image'>تصویری یافت نشد</p>";
                        
                            ?>

                            <div class="clear"></div>
                        </div>

                        <div class="clear"></div>
                    </article>
                    
                <?php
                    }
                ?>
                </div>
    </section>
