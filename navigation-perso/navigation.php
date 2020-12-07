<?php
/*
Plugin Name: Navigation Perso
Description: Ensemble de menu de navigation réutilisable
Author: Dan-Alexandre Développement
Version: 1.0
Author URI: https://www.dan-alexandre-developpement.fr
*/


/*
 * Navigation sous forme de shortcode
 */
function menu_mobile_right() {
    ?>

        <div class="menu-burger">
            <img src="<?php bloginfo('template_directory' ); ?>/images/burger-black.png" alt="">
        </div>

        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu'           => 'Menu principal'
                )
            );
        ?>

    <?php
}
add_shortcode('menu_mobile_right', 'menu_mobile_right');


/*
 * Ajout du style et du js pour la navigation
 */
function navigation_add_css_and_script() {
    wp_enqueue_style( 'navigation-styles',  plugin_dir_url( __FILE__ ) . 'inc/navigation.css' );
    wp_enqueue_script( 'navigation-script', plugin_dir_url( __FILE__ ) . '/inc/navigation.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'navigation_add_css_and_script' );