<?php
  $children = get_pages(array('child_of' => $post->ID));
  if ($children) { ?>
  <ul>
  <?php echo 'test': ?>
  </ul>
  <?php } ?>