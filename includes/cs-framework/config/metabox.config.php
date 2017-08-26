<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------
 

// -----------------------------------------
// Post Metabox Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => '_custom_post_team_options',
  'title'     => 'Custom Post Options',
  'post_type' => 'team',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'team',
      'fields' => array(

        array(
          'id'    => 'team_position',
          'type'  => 'text',
          'title' => 'Position',
        ),

         array(
          'id'              => 'napoli_social_cf',
          'type'            => 'group',
          'title'           => 'Social',
          'desc'            => 'Add social network.',
          'button_title'    => 'Add social',
          'accordion_title' => 'unique_group_2_text_2',
          'fields'          => array(

            array(
              'id'          => 'napoli_social_link',
              'type'        => 'text',
              'title'       => 'Link',
            ),

            array(
             'id'      => 'napoli_social_icon',
            'type'    => 'icon',
            'title'   => 'Icon',
            'default' => 'fa fa-facebook-square',
            ),
 

          )
        ),


      ),
    ),

  ),
);


$options[]    = array(
  'id'        => '_custom_post_work_options',
  'title'     => 'Custom Post Options',
  'post_type' => 'work',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'work',
      'fields' => array(

        array(
          'id'    => 'professions',
          'type'  => 'text',
          'title' => 'Professions',
        ),
        array(
          'id'    => 'link',
          'type'  => 'text',
          'title' => 'Link',
        ),
         


      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
