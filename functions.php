<?php

define('THEME_URL', get_stylesheet_directory());
define('CORE', THEME_URL . '/core');
define('WIDGET', THEME_URL . '/widget');
define('SIDEBARTEMPLADE', THEME_URL . '/templates/rightbar');
define('THEMETEMPLADE', THEME_URL . '/templates');


require_once(CORE . '/init.php');
require_once(THEME_URL . '/inc/demo.php');
require_once(THEME_URL . '/inc/register_sidebar.php');
require_once(THEME_URL . '/inc/ajax.php');
require_once(THEME_URL . '/inc/front.php');
require_once(WIDGET . '/wg_ophim_categories.php');
require_once(WIDGET . '/wg_ophim_footer.php');
require_once(WIDGET . '/wg_ophim_sidebar.php');
require_once(WIDGET . '/wg_ophim_text_header.php');

function custom_pre_get_posts($query) {
    if (!is_admin() && $query->is_main_query()) {
        $query->set('post_type', array('post', 'ophim'));
    }
}
add_action('pre_get_posts', 'custom_pre_get_posts');

function flush_rules_on_activation() {
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_rules_on_activation');