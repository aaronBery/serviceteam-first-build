<?php
/*
Template Name: Business
*/
?>
<?php get_header(); ?>
    <div id="main">
      <div class="box">
          <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>
          <div class="box--header"><?php //the_title(); ?>Complete Solutions to businesses</div>
          <?php
            the_content();
            endwhile; endif;
          ?>
      </div>
      <div class="box box-custom--fixedMaintenance">
          <?php 
            $fixedMaintenanceId = 172;//this month
            $fixedMaintenance  = get_page($fixedMaintenanceId);
          ?>
          <div class="box--header"><?php echo $fixedMaintenance->post_title; ?></div>
          <?php
            echo $fixedMaintenance->post_content;
          ?>
      </div>
      <div class="box box-custom--plannedMaintenance">
          <?php 
            $plannedMaintenanceId = 174;//this month
            $plannedMaintenance  = get_page($plannedMaintenanceId);
          ?>
          <div class="box--header"><?php echo $plannedMaintenance->post_title; ?></div>
          <?php
            echo $plannedMaintenance->post_content;
          ?>
      </div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>