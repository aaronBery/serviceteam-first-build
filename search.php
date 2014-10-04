<?php get_header(); ?>
    <div id="main">
      <div class="box">
        <div class="box--header">A professional for every job</div>
       	  	<?php if ( have_posts() ) : ?>
				<h1>
					<?php printf( __( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?>
				</h1>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'entry' ); ?>
				<?php endwhile; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
				<?php else : ?>
				<h2><?php _e( 'Nothing Found', 'blankslate' ); ?></h2>
				<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
				<?php get_search_form(); ?>
			<?php endif; ?>
      </div>
    </div>
<?php get_footer(); ?>