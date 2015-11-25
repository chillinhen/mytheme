<div id="panel-<?php the_ID(); ?>" <?php post_class('panel'); ?>>
    <header id="heading-<?php the_ID(); ?>">
        <h2 class="panel-title" role="tab" itemprop="headline" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php the_ID(); ?>" aria-expanded="false" aria-controls="collapse-<?php the_ID(); ?>">
            <?php the_title(); ?>
        </h2>
    </header><!-- end article header -->
    <div id="collapse-<?php the_ID(); ?>" class="panel-content panel-collapse collapse" role="tabpanel" itemprop="articleBody" aria-labelledby="heading-<?php the_ID(); ?>">
        <?php the_content(); ?>
        <?php get_template_part('partials/conditions'); ?>
    </div> <!-- end article section -->
    <footer><!-- Todo edit button --></footer> <!-- end article footer -->
</div>