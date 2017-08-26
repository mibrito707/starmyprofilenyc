<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// CUSTOMIZE SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options              = array();

// -----------------------------------------
// Customize Core Fields                   -
// -----------------------------------------
$options[]            = array(
  'name'              => 'napoli_core_fields',
  'title'             => 'Napoli Customize',
  'settings'          => array(

    // color
    array(
      'name'          => 'menu_nav_color',
      'default'       => '#333',
      'control'       => array(
        'label'       => 'Menu background color',
        'type'        => 'color',
      ),
    ),
    array(
      'name'          => 'section_border_color',
      'default'       => '#333',
      'control'       => array(
        'label'       => 'Section Title border color',
        'type'        => 'color',
      ),
    ),
    array(
      'name'          => 'section_header_color',
      'default'       => '#333',
      'control'       => array(
        'label'       => 'Section Title  color',
        'type'        => 'color',
      ),
    ),


  )
);

 

CSFramework_Customize::instance( $options );
