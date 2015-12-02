        <div class="container">
         
            <div class="post_content" itemprop="articleBody">
                <?php the_content(); ?>
                <!-- Proof ob Konditionen oder nicht -->
                <?php if (get_field('konditionen_eintragen')) : ?>
                    <div class="panel">
                        <header id="heading-<?php the_ID(); ?>">
                            <h3 role="button" data-toggle="collapse" href="#collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse-<?php the_ID(); ?>">
                                <?php _e("Konditionen", "html5blank"); ?>
                            </h3>
                        </header>
                        <div class="collapse" id="collapse-<?php the_ID(); ?>">
                            <?php
                            get_template_part('partials/conditions');
                            ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_template_part('partials/quote'); ?>
            
            <div class="post_content full" itemprop="articleBody">
                <?php get_template_part('partials/contact'); ?>
            </div>
            
        </div>