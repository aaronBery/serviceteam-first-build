<?php get_header(); ?>
    <div id="main">
      <div class="box">
        <div class="box--header">404</div>
        <h1><?php _e( 'Not Found', 'serviceteam' ); ?></h1>
			<p><?php _e( 'Nothing found for the requested page. Try a search instead?', 'blankslate' ); ?></p>
			<?php get_search_form(); ?>
      </div>
    </div>
<?php get_footer(); ?>