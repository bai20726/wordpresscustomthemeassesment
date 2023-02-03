<?php

// Register navigation menu
function register_my_menu() {
	register_nav_menu( 'header-menu', __( 'Header Menu' ) );
}
add_action( 'init', 'register_my_menu' );

// Register sidebar
function register_my_sidebar() {
	register_sidebar( array(
		'id' => 'sidebar-1',
		'name' => __( 'Sidebar1' ),
		'description' => __( 'The main sidebar.' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'register_my_sidebar' );



