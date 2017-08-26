<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Napoli Options',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'napoli-options',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Napoli Theme Options<small> by teathemes</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();
$options[]      = array(
  'name'        => 'overview',
  'title'       => 'Overview',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(
    array(
      'id'      => 'napoli_stick_menu',
      'type'    => 'switcher',
      'title'   => 'Menu fixed',
      'default' => true
    ),
    array(
      'id'      => 'napoli_scroll_top',
      'type'    => 'switcher',
      'title'   => 'Show scroll to top',
      'default' => true
    ),
    // begin: a field
    array(
      'id'       => 'napoli_copyright',
      'type'     => 'wysiwyg',
      'title'    => 'Footer Copyright',
      'settings' => array(
        'textarea_rows' => 5,
        'tinymce'       => false,
        'media_buttons' => false,
      )
    ),
    array(
      'id'        => 'layout_option',
      'type'      => 'image_select',
      'title'     => 'Select blog layout',
      'options'   => array(
        'left'    => NAPOLI_THEME_URL.'/assets/images/left-sidebar.jpg',
        'right'   => NAPOLI_THEME_URL .'/assets/images/right-sidebar.jpg',
        'full' => NAPOLI_THEME_URL .'/assets/images/full-width.jpg',
      ),
      'default'   => 'right',
    ),
    // end: a field

 array(
  'id'        => 'napoli_font_family',
  'type'      => 'typography',
  'title'     => 'Typography Field',
  'default'   => array(
    'family'  => 'Open Sans',
    'variant' => '800',
    'font'    => 'google', // this is helper for output
  ),
),

  ), // end: fields
);
// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'logo',
  'title'       => 'Logo',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field

    // end: a field
    array(
           'id'        => 'napoli_logo',
          'type'      => 'image',
          'title'     => 'Upload your logo image',
          'add_title' => 'Select logo',
          ),
     array(
           'id'        => 'napoli_footer_logo',
          'type'      => 'image',
          'title'     => 'Upload your footer logo image',
          'add_title' => 'Select logo',
          ),

  ), // end: fields
);


$options[]      = array(
  'name'        => 'social',
  'title'       => 'Social',
  'icon'        => 'fa fa-share-square-o',

  // begin: fields
  'fields'      => array(

    // begin: a field

    // end: a field
     array(
          'id'    => 'social_facebook', // this is must be unique
          'type'  => 'text',
          'title' => 'Facebook URL',
          'default' => 'https://www.facebook.com/teathemes.net',
        ),
         array(
          'id'    => 'social_twitter', // this is must be unique
          'type'  => 'text',
          'title' => 'Twitter URL',
          'default' => 'https://twitter.com/TeaThemes',
        ),
          array(
          'id'    => 'social_instagram', // this is must be unique
          'type'  => 'text',
          'title' => 'Instagram URL',
          'default' => 'https://www.instagram.com/teathemes/',
        ),
         array(
          'id'    => 'social_Pinterest', // this is must be unique
          'type'  => 'text',
          'title' => 'Pinterest Url',
          'default' => 'https://www.pinterest.com/teathemes/',
        ),
         array(
          'id'    => 'social_google_plus', // this is must be unique
          'type'  => 'text',
          'title' => 'Google Plus Url ',
          'default' => 'https://plus.google.com/u/0/100151983956665027209/posts',
        ),
    ),


);
$options[]      = array(
  'name'        => 'blog',
  'title'       => 'Blog',
  'icon'        => 'fa fa-rss',

  // begin: fields
  'fields'      => array(
      array(
      'id'        => 'blog_image',
      'type'      => 'image',
      'title'     => 'Banner Image',
      'add_title' => 'Add banner',
      'desc'      =>  'Upload your banner image for blog page'
    ),
       array(
        'id'      => 'blog_title', // another unique id
        'type'    => 'text',
        'title'   => 'Blog Title',
      ),
  )
);
$options[]      = array(
  'name'        => 'page',
  'title'       => 'Pages',
  'icon'        => 'fa fa-rss',

  // begin: fields
  'fields'      => array(
    array(
      'id'      => 'show_banner_page',
      'type'    => 'switcher',
      'title'   => 'Show page banner',
      'default' => true
    ),
      array(
      'id'        => 'page_image',
      'type'      => 'image',
      'title'     => 'Banner Image',
      'add_title' => 'Add banner',
      'desc'      =>  'Upload your banner image for  page'
    ),

  )
);
$options[]      = array(
  'name'        => 'googleapi',
  'title'       => 'Google API',
  'icon'        => 'fa fa-google',

  // begin: fields
  'fields'      => array(
      array(
        'id'      => 'napoli_google_api', // another unique id
        'type'    => 'text',
        'title'   => 'Google API',
        'desc'    => '<a href="'.esc_url('https://developers.google.com/maps/documentation/javascript/get-api-key' ).'">Get API Here </a>',
        'help'    => 'Get from google console',
      ),

  )
);
// ------------------------------
// a option section with tabs   -
// ------------------------------


// ------------------------------
// a seperator                  -
// ------------------------------
$options[] = array(
  'name'   => 'seperator_1',
  'title'  => 'A Seperator',
  'icon'   => 'fa fa-bookmark'
);

// ------------------------------
// backup                       -
// ------------------------------
$options[]   = array(
  'name'     => 'backup_section',
  'title'    => 'Backup',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'warning',
      'content' => 'You can save your current options. Download a Backup and Import.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// validate                     -
// ------------------------------


// ------------------------------
// sanitize                     -
// ------------------------------


// ----------------------------------------
// dependencies                           -
// ----------------------------------------





// ------------------------------
// license                      -
// ------------------------------
$options[]   = array(
  'name'     => 'license_section',
  'title'    => 'License',
  'icon'     => 'fa fa-info-circle',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);

CSFramework::instance( $settings, $options );
