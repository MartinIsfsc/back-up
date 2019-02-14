<?php
function theme_options() {

	// Active le support des miniatures (thumbnails) pour les articles et les pages
	add_theme_support('post-thumbnails');

	// Définis les emplacements (locations) pour les menus
	register_nav_menus(array('top' => 'Header', 'bottom-map' => 'Mapping du site', 'sub-bottom' => 'Sub-Footer', 'bottom-contact' => 'Contact'));

};


add_action('after_setup_theme', 'theme_options');

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'News', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'News', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'News'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les news'),
		'view_item'           => __( 'Voir les news'),
		'add_new_item'        => __( 'Ajouter une nouvelle news'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la news'),
		'update_item'         => __( 'Modifier la news'),
		'search_items'        => __( 'Rechercher une news'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'news'),
		'description'         => __( 'Des News'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'news'),

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'news', $args );

}

// add_action( 'init', 'wpm_custom_post_type', 0 );

// add_action( 'init', 'wpm_add_taxonomies', 0 );

//On crée 3 taxonomies personnalisées: Année, Réalisateurs et Catégories de série.

function wpm_add_taxonomies() {
		// Catégorie de série

		$labels_cat_serie = array(
			'name'                       => _x( 'Catégories de news', 'taxonomy general name'),
			'singular_name'              => _x( 'Catégories de news', 'taxonomy singular name'),
			'search_items'               => __( 'Rechercher une catégorie'),
			'popular_items'              => __( 'Catégories populaires'),
			'all_items'                  => __( 'Toutes les catégories'),
			'edit_item'                  => __( 'Editer une catégorie'),
			'update_item'                => __( 'Mettre à jour une catégorie'),
			'add_new_item'               => __( 'Ajouter une nouvelle catégorie'),
			'new_item_name'              => __( 'Nom de la nouvelle catégorie'),
			'add_or_remove_items'        => __( 'Ajouter ou supprimer une catégorie'),
			'choose_from_most_used'      => __( 'Choisir parmi les catégories les plus utilisées'),
			'not_found'                  => __( 'Pas de catégories trouvées'),
			'menu_name'                  => __( 'Catégories de news'),
		);
	
		$args_cat_serie = array(
		// Si 'hierarchical' est défini à true, notre taxonomie se comportera comme une catégorie standard
			'hierarchical'          => true,
			'labels'                => $labels_cat_serie,
			'show_ui'               => true,
			'show_admin_column'     => true,
			'query_var'             => true,
			'rewrite'               => array( 'slug' => 'category' ),
		);
	
		register_taxonomy( 'category', 'news', $args_cat_serie );
}



function wpc_cat_pages() {
	register_taxonomy_for_object_type('category', 'page');
	}
	// add_action('init', 'wpc_cat_pages');

?>