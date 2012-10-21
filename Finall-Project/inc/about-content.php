    <section class="about">
            <div class="aboutus">

                <?php
                    if (have_posts()){
                        the_post();
                        $meta= get_post_custom();
                    
                ?>
                    <article>
                        <div class="title">
                        <h2><?php the_title(); ?></h2>
                        </div>

                        <div class="text">
                            <p><?php the_content(); ?></p>  
                        </div>  

                        <div class="pic">
                            <?php
                                if (count($meta['img']>0)){
                                    echo "<div class='about-img'>";
                                    foreach ($meta['img'] as $img_id) {
                                        $img_small= wp_get_attachment_image($img_id,'thumbnail');
                                        $img_larg= wp_get_attachment_image_src($img_id,'large');
                                        echo "<img src='$img_larg[0]' width='250' />";
                                    }
                                    echo "</div>";
                                }
                            ?>
                        </div>

                        <div class="clear"></div>
                    </article>
                    
                <?php
                    }
                ?>

            </div>
    </section>