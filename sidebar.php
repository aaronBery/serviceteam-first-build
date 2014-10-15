<aside class="rightCol">
	<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    $postId = get_the_ID();
    endwhile; endif;
    $sideBarInclude = "default-sidebar";
    switch($postId){
      case(32):
          $sideBarInclude = "contact-us-sidebar";
          break;
    }
    include "includes/" . $sideBarInclude . ".php";
  ?>
</aside>