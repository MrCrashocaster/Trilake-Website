<?php

// ADD NAVIGATION
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


// ADD FEATURED IMAGE CAPABILITY
add_theme_support( 'post-thumbnails' ); 


// DISABLE TAGS
function mab_unregister_tags() {
    unregister_taxonomy_for_object_type( 'post_tag', 'post' );
}
add_action( 'init', 'mab_unregister_tags' );


// INCLUDE JQUERY
if (!is_admin()) {
  wp_deregister_script('jquery');
  wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"), false);
  wp_enqueue_script('jquery');
}


// REMOVE ADMIN THEME EDITOR
function remove_editor_menu() {
  remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'remove_editor_menu', 1);


// REMOVE WORDPRESS VERSION NUMBER
function wpb_remove_version() {
  return '';
}
add_filter('the_generator', 'wpb_remove_version');


// REMOVE JUNK IN HEAD
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


// HIDE LOGIN ERRORS
function no_wordpress_errors(){
  return 'An error has occurred.';
}
add_filter( 'login_errors', 'no_wordpress_errors' );


// REMOVE WORDPRESS WELCOME WIDGET
remove_action('welcome_panel', 'wp_welcome_panel');


// ALLOW DIFFERENT FILE TYPE UPLOADS
function cc_mime_types($mime_types){
    $mime_types['svg'] = 'image/svg+xml'; // SVG
    $mime_types['json'] = 'application/json'; // JSON
    return $mime_types;
}
add_filter('upload_mimes', 'cc_mime_types');


// ALLOW HIDE/SHOW FOR GRAVITY FORMS LABELS
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


// DISABLE SUPPORT FOR COMMENTS AND TRACKBACKS IN POST TYPES
function df_disable_comments_post_types_support() {
$post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if(post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
}
add_action('admin_init', 'df_disable_comments_post_types_support');


// CLOSE COMMENTS ON THE FRONTEND
function df_disable_comments_status() {
    return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);


// HIDE EXISTING COMMENNTS
function df_disable_comments_hide_existing_comments($comments) {
    $comments = array();
    return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);


// REMOVE COMMENTS PAGE IN MENU
function df_disable_comments_admin_menu() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');


// REDIRECT ANY ATTEMPT TO NAVIGATE TO COMMENTS
function df_disable_comments_admin_menu_redirect() {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url()); exit;
    }
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');


// REMOVE COMMENTS FROM METABOXES
function df_disable_comments_dashboard() {
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');


// REMOVE COMMENTS LINK FROM ADMIN MENU
function df_disable_comments_admin_bar() {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
}
add_action('init', 'df_disable_comments_admin_bar');


// ENABLE EXCERPTS
add_action( 'init', 'wpse325327_add_excerpts_to_pages' );
function wpse325327_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}


// EXCERPT LENGTH
function excerpt( $limit ) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).' […]';
    } 

    else {
        $excerpt = implode(" ",$excerpt);
    }

    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

    return $excerpt;
}


// CONTENT LENGTH
function content( $limit ) {
    $content = explode(' ', get_the_content(), $limit);

    if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).' […]';
    } 

    else {
        $content = implode(" ",$content);
    }

    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);

    return $content;
}

?>