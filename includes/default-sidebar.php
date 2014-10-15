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
      $multiTradeDifferenceId = 55;//this month
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
   <div class="box promo">
	<?php
      $multiTradeDifferenceId = 63;//refer and reward
      $multiTradeDifference  = get_page($multiTradeDifferenceId);
    ?>
    <div class="box--header"><?php echo $multiTradeDifference->post_title; ?></div>
    <?php
      echo $multiTradeDifference->post_content;
    ?>
  </div>
	<!--<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="primary" class="widget-area box">
			<ul class="xoxo">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>
		</div>
	<?php endif; ?>-->