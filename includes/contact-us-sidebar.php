<div class="box promo">
	<?php
      $multiTradeDifferenceId = 67;//this month
      $multiTradeDifference  = get_page($multiTradeDifferenceId);
    ?>
    <div class="box--header"><?php echo $multiTradeDifference->post_title; ?></div>
    <?php
      echo $multiTradeDifference->post_content;
    ?>
  </div>
  <div class="box promo">
	<?php
      $multiTradeDifferenceId = 58;//landord services
      $multiTradeDifference  = get_page($multiTradeDifferenceId);
    ?>
    <div class="box--header"><?php echo $multiTradeDifference->post_title; ?></div>
    <?php
      echo $multiTradeDifference->post_content;
    ?>
  </div>