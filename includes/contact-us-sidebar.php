<div class="box promo">
	<?php
      $ourServicesId = 67;//this month
      $ourServices  = get_page($ourServicesId);
    ?>
    <div class="box--header"><?php echo $ourServices->post_title; ?></div>
    <?php
      echo $ourServices->post_content;
    ?>
  </div>
  <div class="box promo">
	<?php
      $landlordServicesId = 58;//landord services
      $landlordServices  = get_page($landlordServicesId);
    ?>
    <div class="box--header"><?php echo $landlordServices->post_title; ?></div>
    <?php
      echo $landlordServices->post_content;
    ?>
  </div>