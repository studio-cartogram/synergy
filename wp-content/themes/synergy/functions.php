<?php

	/* ========================================================================================================================

	Actions

	======================================================================================================================== */

	/**
	 * Front End Assets
	 **/
  add_action('wp_head','cartogram_fonts');
  add_action( 'wp_enqueue_scripts', 'cartogram_styles' );
  // add_action( 'wp_enqueue_scripts', 'cartogram_scripts' );
  remove_filter( 'the_content', 'wpautop' );

	/**
	 * Post types and taxonomies
	 **/
	add_action('init', 'create_post_types' );
	add_action('init', 'create_taxonomies' );
	add_filter('the_excerpt', 'excerpt_ellipsis');
  add_filter('the_content', 'cartogram_remove_more_link');

	/* ========================================================================================================================

	Cartogram Post Types and Taxonomies Functions v.1.0

	======================================================================================================================== */

  if ( ! function_exists( 'create_post_types' ) ) {

    function create_post_types() {

      $faqs_args = array(
        'public'              => true,
        'label'               => 'FAQs',
        'has_archive'         => true,
        'rewrite'            => array( 'slug' => 'faqs' ),
        'supports'            => array( 'title', 'excerpt', 'editor')
      );

      register_post_type( 'faqs', $faqs_args );

      $media_args = array(
        'public'              => true,
        'label'               => 'Press',
        'has_archive'         => true,
        'rewrite'            => array( 'slug' => 'press' ),
        'supports'            => array( 'title', 'thumbnail', 'excerpt', 'editor')
      );

      register_post_type( 'media', $media_args );

      $staff_args = array(
        'public'              => true,
        'label'               => 'Staff',
        'has_archive'         => true,
        'rewrite'            => array( 'slug' => 'staff' ),
        'supports'            => array( 'title', 'thumbnail', 'revisions', 'excerpt', 'editor')
      );

      register_post_type( 'staff', $staff_args );

      $services_args = array(
        'public'              => true,
        'label'               => 'Services',
        'has_archive'         => true,
        'rewrite'            => array( 'slug' => 'services' ),
        'supports'            => array( 'title', 'revisions', 'page-attributes', 'thumbnail', 'excerpt', 'editor')
      );

      register_post_type( 'services', $services_args );

      $programs_args = array(
        'public'              => true,
        'label'               => 'Programs',
        'has_archive'         => true,
        'rewrite'            => array( 'slug' => 'group-programs' ),
        'supports'            => array( 'title', 'revisions', 'page-attributes', 'thumbnail', 'excerpt', 'editor')
      );

      register_post_type( 'programs', $programs_args );

      $fees_args = array(
        'public'              => true,
        'label'               => 'Fees & Policies',
        'has_archive'         => true,
        'rewrite'            => array( 'slug' => 'fees' ),
        'supports'            => array( 'title', 'excerpt', 'editor')
      );

      register_post_type( 'fees', $fees_args );

      flush_rewrite_rules( false );

    }

  }

  if ( ! function_exists( 'create_taxonimies' ) ) {

    function create_taxonomies() {

      $labels = array(
        'name'                       => _x( 'Topic', 'taxonomy general name' ),
        'singular_name'              => _x( 'Topic', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Topics' ),
        'popular_items'              => __( 'Popular Topics' ),
        'all_items'                  => __( 'All Topics' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Topic' ),
        'update_item'                => __( 'Update Topic' ),
        'add_new_item'               => __( 'Add New Topic' ),
        'new_item_name'              => __( 'New Topic Name' ),
        'separate_items_with_commas' => __( 'Separate Topic with commas' ),
        'add_or_remove_items'        => __( 'Add or remove Topic' ),
        'choose_from_most_used'      => __( 'Choose from the most used Topic' ),
        'not_found'                  => __( 'No Topics found.' ),
        'menu_name'                  => __( 'Topics' ),
      );

      $args = array(
        'exclude_from_search' => false,
        'labels'              => $labels,
      );

      register_taxonomy( 'topic', array('faqs'), $args );

      $labels = array(
        'name'                       => _x( 'Category', 'taxonomy general name' ),
        'singular_name'              => _x( 'Category', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Categories' ),
        'popular_items'              => __( 'Popular Categories' ),
        'all_items'                  => __( 'All Categories' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Category' ),
        'update_item'                => __( 'Update Category' ),
        'add_new_item'               => __( 'Add New Category' ),
        'new_item_name'              => __( 'New Category Name' ),
        'separate_items_with_commas' => __( 'Separate Category with commas' ),
        'add_or_remove_items'        => __( 'Add or remove Category' ),
        'choose_from_most_used'      => __( 'Choose from the most used Category' ),
        'not_found'                  => __( 'No Categories found.' ),
        'menu_name'                  => __( 'Categories' ),
      );

      $args = array(
        'exclude_from_search' => false,
        'labels'              => $labels,
      );

      register_taxonomy( 'categories', array('staff'), $args );

      $labels = array(
        'name'                       => _x( 'Tags', 'taxonomy general name' ),
        'singular_name'              => _x( 'Tags', 'taxonomy singular name' ),
        'search_items'               => __( 'Search Tags' ),
        'popular_items'              => __( 'Popular Tags' ),
        'all_items'                  => __( 'All Tagss' ),
        'parent_item'                => null,
        'parent_item_colon'          => null,
        'edit_item'                  => __( 'Edit Tags' ),
        'update_item'                => __( 'Update Tags' ),
        'add_new_item'               => __( 'Add New Tags' ),
        'new_item_name'              => __( 'New Tags Name' ),
        'separate_items_with_commas' => __( 'Separate tags with commas' ),
        'add_or_remove_items'        => __( 'Add or remove Tags' ),
        'choose_from_most_used'      => __( 'Choose from the most used tags' ),
        'not_found'                  => __( 'No Tags found.' ),
        'menu_name'                  => __( 'Tags' ),
      );

      $args = array(
        'exclude_from_search' => false,
        'labels'              => $labels,
      );

      register_taxonomy( 'tags', array('services'), $args );

      flush_rewrite_rules( false );

    }

  }

	/* ========================================================================================================================

	Cartogram Custom Field Functions

	======================================================================================================================== */

  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page('Contact');

    acf_add_options_page('Staff');

    acf_add_options_page('Services');

    acf_add_options_page('Programs');

    acf_add_options_page('FAQ');

    acf_add_options_page('Blog');

    acf_add_options_page('404');

  }

	/* ========================================================================================================================

	Scripts

	======================================================================================================================== */

  // if ( ! function_exists( 'cartogram_scripts' ) ) {

  //   function cartogram_scripts() {

  //     $theme_dir = get_stylesheet_directory_uri();

  //     wp_enqueue_script( 'main', "$theme_dir/assets/js/main.js", array(), null, true );

  //   }

  // }

	/* ========================================================================================================================

	Styles

  ======================================================================================================================== */

  if ( ! function_exists( 'cartogram_styles' ) ) {

    function cartogram_styles() {
      $theme_dir = get_stylesheet_directory_uri();

      wp_enqueue_style( 'main', "$theme_dir/assets/css/main.css", array(), null, 'all' );
    }
  }

	/* ========================================================================================================================

	Theme Setup

	======================================================================================================================== */


      /* ========================================================================================================================

      HTML

      ======================================================================================================================== */

      add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption'
      ) );

      /* ========================================================================================================================

      Images

      - Set thumbnail sizes and add any additional featured images.

      ======================================================================================================================== */

      add_theme_support('post-thumbnails');
      add_image_size('img_thumbnail',500, 500, true);
      add_image_size('img_medium',800, 800, false);
      add_image_size('img_large',1200, 800, true);
      add_image_size('img_xlarge',1600, 1000, true);

      /* ========================================================================================================================

      Navigation Menus

      ======================================================================================================================== */

      register_nav_menus( array(
        'nav_tabs'	=>  'Topics Nav',
        // 'header_nav_primary'	=>  'Primary Nav',
        // 'header_nav_services'	=>  'Services Nav',
        // 'header_nav_programs'	=>  'Programs Nav',
        'header_nav_resources'	=>  'Main Nav',
        'nav_footer'	=>  'Footer Nav',
      ) );


  /* ========================================================================================================================

  Add Font Embed Script

  ======================================================================================================================== */

	function cartogram_fonts() {

    $output = '<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600" rel="stylesheet">';
    // $output = '<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet">';
    // $output = '<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">';
		echo $output;

  }


  /* ========================================================================================================================

  Custom Search

  ======================================================================================================================== */

  add_filter('get_search_form', 'fondfolio_search_form');

  function fondfolio_search_form($html) {

    $icon = 'search';

    $html = '<form class="searchform__form" action="/" method="get">';

      $html .= '<label class="visuallyhidden" for="search">Search in ' . home_url( '/' ) . '</label>';

      $html .= '<input class="search-field" placeholder="' . 'Search our FAQs...' . '" type="search" value="' . get_search_query() . '" name="s" id="s" />';

      $html .= '<button class="searchform__button"><svg class="icon icon--' . $icon . '"><use xlink:href="#icon-' . $icon . '"></use></svg></button>';

    $html .= '</form>';

	  return $html;

  }

  function remove_tax_name( $title, $sep, $seplocation ) {
    if ( is_tax() ) {
        $term_title = single_term_title( '', false );

        // Determines position of separator
        if ( 'right' == $seplocation ) {
            $title = $term_title . " $sep ";
        } else {
            $title = " $sep " . $term_title;
        }
    }

    return $title;
    }
  add_filter( 'wp_title', 'remove_tax_name', 10, 3 );

?>
