<?php
/**
 * FusionPress functions and definitions
 * 
 * @package FusionPress
 * @since FusionPress 1.0
 */
register_nav_menus (
    array ('primary-menu'=>'Top Menu')
);
// Register Sidebar
function my_custom_sidebar(){
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'FusionPress' ),
        'id'            => 'primary-sidebar',
        'description'   => __( 'This is the primary sidebar.', 'FusionPress' ),
        'before_widget' => '<div class="widget-container">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'my_custom_sidebar' );

