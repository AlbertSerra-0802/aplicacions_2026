function asv_add_theme_scripts() {
    wp_enqueue_style( 'main-styles', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'asv_add_theme_scripts' );