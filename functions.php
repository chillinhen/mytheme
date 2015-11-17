<?php 
add_action('after_setup_theme', 'myTheme_setup');

function myTheme_setup() {
function get_all_subpages($page, $args = '', $output = OBJECT) {
    // Validate 'page' parameter
    if (! is_numeric($page))
        $page = 0;

    // Set up args
    $default_args = array(
        'post_type' => 'page',
    );
    if (empty($args))
        $args = array();
    elseif (! is_array($args))
        if (is_string($args))
            parse_str($args, $args);
        else
            $args = array();
    $args = array_merge($default_args, $args);
    $args['post_parent'] = $page;

    // Validate 'output' parameter
    $valid_output = array(OBJECT, ARRAY_A, ARRAY_N);
    if (! in_array($output, $valid_output))
        $output = OBJECT;

    // Get children
    $subpages = array();
    $children = get_children($args, $output);
    foreach ($children as $child) {
        $subpages[] = $child;

        if (OBJECT === $output)
            $page = $child->ID;
        elseif (ARRAY_A === $output)
            $page = $child['ID'];
        else
            $page = $child[0];

        // Get subpages by recursion
        $subpages = array_merge($subpages, get_all_subpages($page, $args, $output));
    }

    return $subpages;
}

}
?>