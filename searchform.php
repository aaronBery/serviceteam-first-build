<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<?php 
			$hideSearchLabel = true;
			if(!$hideSearchLabel){ ?>
				<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
			<?php } ?>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	</label>
	<input type="image" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" src="<?php echo $_SERVER['themeAssetPath']; ?>migrated/searchmag.gif" />
</form>