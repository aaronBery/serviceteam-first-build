<div class="box promo">
	<?php
      $ourServicesId = 67;//our services
      $ourServices  = get_page($ourServicesId);
    ?>
    <div class="box--header"><?php echo $ourServices->post_title; ?></div>
    <?php
      echo $ourServices->post_content;
    ?>
  </div>
  <div class="box promo">
	<?php
      $cosumurCaseStudyId = 164;//case study cosmur
      $cosumurCaseStudy  = get_page($cosumurCaseStudyId);
    ?>
    <div class="box--header"><?php echo $cosumurCaseStudy->post_title; ?></div>
    <?php
      echo $cosumurCaseStudy->post_content;
    ?>
  </div>
  <div class="box promo">
  <?php
      $crystalCaseStudyId = 170;//case study crystal
      $crystalCaseStudy  = get_page($crystalCaseStudyId);
    ?>
    <div class="box--header"><?php echo $crystalCaseStudy->post_title; ?></div>
    <?php
      echo $crystalCaseStudy->post_content;
    ?>
  </div>