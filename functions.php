<?php
/**
 * Luckybear
 * @author         Oscar Samaniego
 * @version        Release: 1.0
 */
/**  Establecer las opciones predeterminadas: Configuración del tema  */

function tm_set_default_options_child()
{ 
    	
}

add_action('init', 'tm_set_default_options_child');
function tm_child_scripts() {
    wp_enqueue_style( 'tm-child-style', get_template_directory_uri(). '/style.css' );	
}
add_action( 'wp_enqueue_scripts', 'tm_child_scripts' );

function favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="https://s.w.org/favicon.ico" />';    
}
add_action( 'wp_head', 'favicon_link' );

?>