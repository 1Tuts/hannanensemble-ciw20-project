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

                                            $img_larg= wp_get_attachment_image($pic->ID , 'large');

                                            echo "$img_larg";

                                        echo "</div>";

                                    }


                                }
                        
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
