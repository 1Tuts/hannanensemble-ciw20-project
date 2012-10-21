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

                        <div class="pic"></div>
                        
                        <div class="clear"></div>
                    </article>
                    
                <?php
                    }
                ?>

            </div>
    </section>