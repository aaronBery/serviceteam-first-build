<?php 
	$menuDefaults = array(
		'theme_location'  => 'header-menu',
		/*'menu'            => '',
		'container'       => 'div',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'menu',*/
		'menu_id'         => 'global-menu',
		/*'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',*/
		'depth'           => 1,
		//'walker'          => ''
	);

	wp_nav_menu($menuDefaults); 
?>