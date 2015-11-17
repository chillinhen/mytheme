<!-- test version -->
<?php get_header(); ?>
        <!-- here the child pages -->
        <?php
        global $post;
        $children = get_pages(array('child_of' => $post->ID));
        ?>

        <?php if (is_page() && $post->post_parent) : ?>

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                		<?php the_title();?>
                        <h2>This is a child-page</h2>
                    <?php endwhile; ?>	
                    <?php wp_reset_query(); ?>

                <?php endif; ?>



        <?php elseif (is_page() && count($children) > 0) : ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2>This is a parent-page (with one or more children)</h2>
                        <?php the_title(); ?>
                    <?php endwhile; ?>	
                    <?php wp_reset_query(); ?>
                <?php else : ?>
                <?php endif; ?>


        <?php else : ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2>This is a parent page without children</h2>
                        <?php the_title(); ?>
                    <?php endwhile; ?>	
                    <?php wp_reset_query(); ?>
                <?php else : ?>
                <?php endif; ?>


        <?php endif; ?>
<?php get_footer(); ?>