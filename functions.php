<?php
/**
 * Theme Setup Functions
 */
require get_template_directory() . '/_functions/theme-setup.php';

/**
 * Widget Setup Functions
 */
require get_template_directory() . '/_functions/widget-setup.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/_functions/scripts-setup.php';


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/*======================================
=            MOOSE INCLUDES            =
======================================*/

/**
 * Bootstrap 4 Nav Walker
 */
// require get_template_directory() . '/_functions/bootstrap-navwalker.php';
// require get_template_directory() . '/_functions/moose-navwalker.php';
/**
 * Helper Functions
 */
require get_template_directory() . '/_functions/helpers-setup.php';

/**
 *
 * React App Setup
 *
 */
// require get_template_directory() . '/_functions/react-setup.php';

/**
 *
 * Adding Breadcrums
 *
 */

// require get_template_directory() . '/_functions/breadcrum-function.php';

/**
 *
 * CUSTOMIZING THE LOGIN SCREEN
 *
 */

// require get_template_directory() . '/_functions/wp-logon-screen.php';

/**
 * SELFLIST CUSTOM FUNCTIONS		
 */

// CUSTOM REST ROUTE FOR LISTING 1ST PROTOTYPE
require get_theme_file_path('/_functions/selflist/selflist-search-route.php');

// SELFLIST CUSTOM POST TYPE 1ST PROTOTYPE
require get_theme_file_path('/_functions/selflist/selflist-listing-cpt.php');

// SELFLIST CUSTOM USER ROLES & PERMISSIONS
// require get_theme_file_path('/_functions/selflist/selflist-user-roles.php');

// SELFLIST CUSTOM USER LOGIN LOGOUT RELATED FUNCTIONS (ADMIN BAR, LOGIN/LOGOUT BTN, REDIRECTION ETC.)
require get_theme_file_path('/_functions/selflist/selflist-user-logins.php');

// SELFLIST SUB CATEGORIES LISTING FUNCTION
require get_theme_file_path('/_functions/selflist/selflist-get-category-list.php');

//Getting Main Categories with Sub Cats to JSON - selflist-get-subcats-json.php IS A DEPENDENCY
require get_theme_file_path('/_functions/selflist/selflist-get-category-json.php');
//Getting Sub Categories
require get_theme_file_path('/_functions/selflist/selflist-get-subcats-json.php');

// SELFLIST SUB CATEGORIES LISTING FUNCTION
require get_theme_file_path('/_functions/selflist/selflist-post-acf-to-rest.php');
// SELFLIST SET CUSTOM POST TITLE WITH ID
// require get_theme_file_path('/_functions/selflist/selflist-post-title.php');

// SELFTLIST CREATE CATEGORIES 
// require get_theme_file_path('/_functions/selflist/ajax/test-ajax.php');
// require get_theme_file_path('/_functions/selflist/selflist-create-categories.php');
require get_theme_file_path('/_functions/selflist/ajax/main-cat-insert-ajax.php');
require get_theme_file_path('/_functions/selflist/ajax/primo-cat-insert-ajax.php');
require get_theme_file_path('/_functions/selflist/ajax/secondo-cat-insert-ajax.php');
require get_theme_file_path('/_functions/selflist/ajax/terzo-cat-insert-ajax.php');
require get_theme_file_path('/_functions/selflist/ajax/list-preview-ajax.php');
require get_theme_file_path('/_functions/selflist/ajax/list-payment-and-publish-ajax.php');
// SELFLIST CUSTOM TAXONOMY
require get_theme_file_path('/_functions/selflist/taxonomy/selflist-create-taxonomy.php');


// FILTERS FOR ACF TO REST PLUGIN ... DON'T NEED THAT PLUGIN
// Enable the option show in rest
// add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

// Enable the option edit in rest
// add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );