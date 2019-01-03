<?php
function theme_options() {

	// Active le support des miniatures (thumbnails) pour les articles et les pages
	add_theme_support('post-thumbnails');

	// Définis les emplacements (locations) pour les menus
	register_nav_menus(array('top' => 'Header', 'bottom' => 'Footer'));

};


add_action('after_setup_theme', 'theme_options');

?>