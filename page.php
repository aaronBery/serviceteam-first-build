<?php get_header(); ?>
    <div id="main">
      <div class="box">
        <div class="box--header">A professional for every job</div>
        <h1>Plumbers, gas engineers, electricians, gardeners, property and facilities maintenance in London</h1>
          <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            the_content();
            endwhile; endif;
          ?>
      </div>
      <div class="box">
        <?php
          $multiTradeDifferenceId = 38;
          $multiTradeDifference  = get_page($multiTradeDifferenceId);
        ?>
        <div class="box--header"><?php echo $multiTradeDifference->post_title; ?></div>
        <?php
          echo $multiTradeDifference->post_content;
        ?>
      </div>
      <div class="box">
        <?php
          $multiTradeDifferenceId = 9;
          $multiTradeDifference  = get_page($multiTradeDifferenceId);
        ?>
        <div class="box--header"><?php echo $multiTradeDifference->post_title; ?></div>
        <?php
          echo $multiTradeDifference->post_content;
        ?>
      </div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>