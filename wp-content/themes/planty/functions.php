<?php


// Action qui permet de charger des scripts dans le thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du thème parent Astra
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Chargement du css/theme.css pour les personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/assets/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/theme.css'));
}

// HOOK FILTERS

// Hook pour ajouter un lien Admin dans le menu du header
add_filter('wp_nav_menu_items', function ($items, $args) {
    if (is_user_logged_in()) {
        $items .= '<li id="menu-item-23" class="menu-item">'
            . '<a href="' . get_dashboard_url() . '" class="menu-link"> Admin</a>'
            . '</li>';
    }

    return $items;
}, 10, 2);
