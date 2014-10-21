<div class="box promo">
	<?php
      $ourServicesId = 67;//our Services
      $ourServices  = get_page($ourServicesId);
    ?>
    <div class="box--header"><?php echo $ourServices->post_title; ?></div>
    <?php
      echo $ourServices->post_content;
    ?>
  </div>
  <div class="box promo">
	<?php
      $thisMonthId = 55;//this month
      $thisMonth  = get_page($thisMonthId);
    ?>
    <div class="box--header"><?php echo $thisMonth->post_title; ?></div>
    <?php
      echo $thisMonth->post_content;
    ?>
  </div>
  <div class="box promo">
	<?php
      $landLordServicesId = 58;//landord services
      $landLordServices  = get_page($landLordServicesId);
    ?>
    <div class="box--header"><?php echo $landLordServices->post_title; ?></div>
    <?php
      echo $landLordServices->post_content;
    ?>
  </div>
   <div class="box promo">
	<?php
      $referRewardId = 63;//refer and reward
      $referReward  = get_page($referRewardId);
    ?>
    <div class="box--header"><?php echo $referReward->post_title; ?></div>
    <?php
      echo $referReward->post_content;
    ?>
  </div>
	<!--<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="primary" class="widget-area box">
			<ul class="xoxo">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>
		</div>
	<?php endif; ?>-->