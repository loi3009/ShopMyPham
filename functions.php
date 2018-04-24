<?php 

function remove_width_attribute( $html ){
	$html = preg_replace('/(width|height)="\d*"\s/', "", $html);
	return $html;
}
add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function custom_excerpt_length($length){
	return 300;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function register_my_menus(){
	register_nav_menus(
		array(
			'main_nav' 	=> 'Menu chính',
			'cat_nav' 	=> 'Danh mục'
		));
}
add_option( 'init', 'register_my_menus' );

function register_widget_areas(){
	register_sidebar( 
		array(
			'name' 	=> 'Sidebar',
			'id'	=> 'sidebar'
		)
	 );
}
add_action( 'widgets_init', 'register_widget_areas' );

function teaser($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
		$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
	}
	return $excerpt;
}

function slider_post_type() {
	$label = array(
		'name'			=> 'Slider',
		'singular_name'	=> 'Slider'
	);

	$args = array(
		'labels'			=> $label,
		'description'		=> 'Slider',
		'supports'			=> array('title', 'thumbnail'),
		'hierarchical'		=> false,
		'public'			=> true,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'show_in_nav_menus'	=> true,
		'show_in_admin_bar'	=> true,
		'menu_position'		=> 5,
		'menu_icon'			=> 'dashicons-images-alt2',
		'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post'
	);

	register_post_type( 'slider', $args );
	flush_rewrite_rules();
}
add_action( 'init', 'slider_post_type', 0 );