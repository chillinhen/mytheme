<?php
$sub_posts = array();
for ($label = 1; $label <= 6; $label++) :
    $sub_posts[] = get_field('sub-post_0' . $label);

endfor;
?>

<?php
foreach ($sub_posts as $post) :
    if ($post) :
        setup_postdata($post);
        get_template_part('partials/accordion');
    endif;
endforeach;
?>