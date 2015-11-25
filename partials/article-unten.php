
    </section>
    <?php $quote = get_field('quotes'); ?>
        
        <?php
        if($quote) :
        // override $post
        $post = $quote;
        setup_postdata($post);
        get_template_part('partials/article', 'quote');
        wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly
        endif;
        ?>
</article>