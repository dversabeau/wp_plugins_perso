<?php
/*
Plugin Name: Button Perso
Description: Ensemble de bouton de navigation réutilisable
Author: Dan-Alexandre Développement
Version: 1.0
Author URI: https://www.dan-alexandre-developpement.fr
*/


/*
 * Button sous forme de shortcode
 */
function button($atts) {

    $a = shortcode_atts([
        'href' => '#',
        'contenu' => 'Call-to-action'
    ], $atts );

    ?>

    <a class="call-to-action-1" href="<?= $a['href'] ?>"><?= $a['contenu'] ?></a>

    <?php
}
add_shortcode('button', 'button');


/*
 * Ajout du style et du js pour les buttons
 */
function button_add_css_and_script() {
    wp_enqueue_style( 'button-styles',  plugin_dir_url( __FILE__ ) . 'inc/button.css' );
    wp_enqueue_script( 'button-script', plugin_dir_url( __FILE__ ) . '/inc/button.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'button_add_css_and_script' );