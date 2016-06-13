<?php get_header(); ?>
<!-- section -->
<section role="main" class="main">


    <!-- article -->

    <article id="post-404">
        <section>
            <div class="container">
                <div class="post_content" itemprop="articleBody">
                    <h1><?php _e('Page not found', 'html5blank'); ?></h1>
                    <p>
                        <strong>
                        <a href="<?php echo home_url(); ?>">
                            zurück zur Startseite
                        </a>
                            </strong>
                    </p>
                </div>
            </div>
        </section>
    </article>
</section>
<!-- /section -->


<?php get_footer(); ?>
