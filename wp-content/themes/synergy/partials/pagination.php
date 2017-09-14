
<?php

  $pagination = get_the_posts_pagination( array(
    'mid_size' => 1,
  ));

  echo $pagination;

?>
