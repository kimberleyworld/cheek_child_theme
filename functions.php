<?php
/**
 * Functions file for the TwentyTwentyFive child theme.
 * Functions to enqueue styles and custom functionality for the child theme.
 * 
 * @category   Theme_Functions
 * @package    TwentyTwentyFive_Child
 * @author     Display Name <kim.dobney@yahoo.co.uk>
 * @license    GPL-2.0-or-later https://www.gnu.org/licenses/gpl-2.0.html
 * @version    1.0.0
 * @link       https://cheek.design
 * @phpversion 8.3.0
 */
/**
 * Enqueue parent and child theme styles.
 *
 * Parent theme's style.css, ensures the styles of the child theme are loaded.
 *
 * @return void
 */
function Twentytwentyfive_Child_Enqueue_styles() 
{
    // Enqueue parent theme style
    wp_enqueue_style(
        'twentytwentyfive-parent-style',  // Unique handle for parent theme style
        get_template_directory_uri() . '/style.css'  // Path to parent theme's stylesheet
    );

    // Enqueue child theme style (ensure this loads after parent theme style)
    wp_enqueue_style(
        'twentytwentyfive-child-style',  // Unique handle for child theme style
        get_stylesheet_directory_uri() . '/style.css',  // Path to child theme's stylesheet
        array('twentytwentyfive-parent-style')  // Make sure child theme style loads after parent theme style
    );
}
add_action('wp_enqueue_scripts', 'twentytwentyfive_child_enqueue_styles');
