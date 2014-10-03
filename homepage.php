<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
    <div id="slideshow">
      <?php
          $photoSlideshowId = 76;
          $photoSlideshow  = get_page($photoSlideshowId);
          echo $photoSlideshow->post_content;
      ?>
    </div>
    <script>
      var $j = jQuery;
      var currentSlide = 0;
      var slideIterator= 0;
      var w = window;
      var slideInterval = 7000;
      var slideCount = 0;

      function hideAllSlides(){
        $j('#slideshow a').each(function() {
          $j(this).hide();
        })
      }
      function showNextSlide(){
        hideAllSlides();
        if(currentSlide==slideCount){
          currentSlide = 1;
        }else{
          currentSlide++;
        }
        $j('#slideshow .slide.slide--' + currentSlide).show();
      }
      $j('#slideshow a').each(function(){
        slideIterator++;
        $j(this).addClass("slide slide--" + slideIterator);
      });
      slideCount = slideIterator;
      showNextSlide();
      w.setInterval(function(){
          showNextSlide();
      },slideInterval);
    </script>
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
          $workingWithUsId = 9;
          $workingWithUs  = get_page($workingWithUsId);
        ?>
        <div class="box--header"><?php echo $multiTradeDifference->post_title; ?></div>
        <?php
          echo $workingWithUs->post_content;
        ?>
      </div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>