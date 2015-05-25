<?php
function vito_widgets_init() {
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => __( 'Sidebar Widgets', 'vito' ),
            'id'   => 'sidebar-widgets',
            'description'   => __( 'These are widgets for the sidebar.', 'vito' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4>',
            'after_title'   => '</h4>'
        ));
    }//End
}
add_action( 'widgets_init', 'vito_widgets_init' );
?>