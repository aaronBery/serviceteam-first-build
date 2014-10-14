<?php
/*
Template Name: Widepage
*/
?>
<?php get_header(); ?>
    <div id="main">
      <div class="box">
          <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
          ?>
          <div class="box--header"><?php echo the_title(); ?></div>
          <?php
            the_content();
            endwhile; endif;
          ?>
      </div>
    </div>
<?php //get_sidebar(); ?>
<?php get_footer(); ?>