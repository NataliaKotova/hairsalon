<?php

//Hook1: customize-register to define new Cutomizer panels, settings, controls
function mytheme_customize_register( $wp_customize ) {
   //All sections, settings, and controls will be added here

   //Title color
    $wp_customize->add_setting( 'title_color' , array(
      'default'   => '#a46497',
      'transport' => 'refresh',
      ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hairsalon_titleColourControl', array(
      'label'      => __( 'Title Colour', 'hairsalonTheme' ),
      'description' => 'Change the title Colour',
      'section'    => 'colors',
      'settings'   => 'title_color',
    ) ) );

    //Heading color color
    $wp_customize->add_setting( 'heading_color' , array(
      'default'   => '#a46497',
      'transport' => 'refresh',
      ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hairsalon_headingColourControl', array(
      'label'      => __( 'Heading Colour', 'hairsalonTheme' ),
      'description' => 'Change the heading Colour',
      'section'    => 'colors',
      'settings'   => 'heading_color',
    ) ) );

     //Title color
     $wp_customize->add_setting( 'navbar_color' , array(
      'default'   => '#a46497',
      'transport' => 'refresh',
      ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hairsalon_navbarColourControl', array(
      'label'      => __( 'Navbar Menu Colour', 'hairsalonTheme' ),
      'description' => 'Navbar menu color',
      'section'    => 'colors',
      'settings'   => 'navbar_color',
    ) ) );

   // Background Colour
   $wp_customize->add_setting( 'hairsalon_backgroundColour' , array(
       'default'   => '#ffffff',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hairsalon_backgroundColourControl', array(
   	'label'      => __( 'Background Colour', 'hairsalonTheme' ),
    'description' => 'Change the background Colour',
   	'section'    => 'colors',
   	'settings'   => 'hairsalon_backgroundColour',
   ) ) );

   // Header and Footer hairsalon_backgroundColour // Background Colour
    $wp_customize->add_setting( 'hairsalon_headerFooterColour' , array(
        'default'   => '#ece3dd',
        'transport' => 'refresh',
    ) );


    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hairsalon_headerFooterColourControl', array(
    	'label'      => __( 'Header and Footer Colour', 'hairsalonTheme' ),
     'description' => 'Change the Header and Footer Colour',
    	'section'    => 'colors',
    	'settings'   => 'hairsalon_headerFooterColour',
    ) ) );

    //Footer Widget title color
    $wp_customize->add_setting( 'footer_widget_title_color' , array(
      'default'   => '#a46497',
      'transport' => 'refresh',
      ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hairsalon__widget_titleColourControl', array(
      'label'      => __( 'Footer Widget Title Colour', 'hairsalonTheme' ),
      'description' => 'Change the footer widget title Colour',
      'section'    => 'colors',
      'settings'   => 'footer_widget_title_color',
    ) ) );

    //Footer Link color
    $wp_customize->add_setting( 'footer_link_color' , array(
    'default'   => '#024873',
    'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hairsalon__footer_linkColourControl', array(
      'label'      => __( 'Footer Link Colour', 'hairsalonTheme' ),
      'description' => 'Change the footer link Colour',
      'section'    => 'colors',
      'settings'   => 'footer_link_color',
    ) ) );

   // Footer Message
   $wp_customize->add_section( 'hairsalon_footerSection' , array(
       'title'      => __( 'Footer Text', 'hairsalonTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'hairsalon_footerMessage' , array(
       'default'   => 'copyright@2020',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hairsalon_footerMessageControl', array(
     'label'      => __( 'Footer Text', 'hairsalonTheme' ),
     'section'    => 'hairsalon_footerSection',
     'settings'   => 'hairsalon_footerMessage',
   ) ) );
   

   // Site Title Text
   $wp_customize->add_section( 'hairsalon_siteTitleTextSection' , array(
       'title'      => __( 'Site Title Text', 'hairsalonTheme' ),
       'priority'   => 30,
   ));

   $wp_customize->add_setting( 'hairsalon_siteTitleText' , array(
       'default'   => 'Hair salon',
       'transport' => 'refresh',
   ) );

   $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'hairsalon_siteTitleTextControl', array(
     'label'      => __( 'Site Title Text', 'hairsalonTheme' ),
     'section'    => 'hairsalon_siteTitleTextSection',
     'settings'   => 'hairsalon_siteTitleText',
   ) ) );

   // footer icon image

   $wp_customize->add_section( 'hairsalon_footerIconImage' , array(
      'title'      => __( 'Footer Icon Image', 'hairsalonTheme' ),
      'priority'   => 45,
  ) );

  $wp_customize->add_setting( 'hairsalon_footerIcon' , array(
      'default'   => get_template_directory_uri() . 'images/facebook.png',
      'transport' => 'refresh',
  ) );

  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hairsalon_footerIconImageControl', array(
    'label'      => __( 'Footer Icon Image', 'hairsalonTheme' ),
    'section'    => 'hairsalon_footerIconImage',
    'settings'   => 'hairsalon_footerIcon',
  ) ) );
}

 add_action( 'customize_register', 'mytheme_customize_register' );


//Hook2: wp_head to output custom-generated CSS
 function mytheme_customize_css()
 {
   ?>
    <style type="text/css">
    body {
            background-color: <?php echo get_theme_mod('hairsalon_backgroundColour','#ffffff'); ?>!important;
         }
   .navbar, .headerFooter{
            background-color: <?php echo get_theme_mod('hairsalon_headerFooterColour', '#dcc9be'); ?>!important ;
          }
    .siteTitle{
            color: <?php echo get_theme_mod('title_color', '#a46497'); ?>!important ;
    }
    .navbar-light .navbar-nav a.nav-link {
      color: <?php echo get_theme_mod('navbar_color', '#a46497'); ?>!important ;
    }
    .navbar-light .current-menu-item a.nav-link {
      border-bottom-color: <?php echo get_theme_mod('navbar_color', '#a46497'); ?>!important ;
    }
    .headingColor {
      color: <?php echo get_theme_mod('heading_color', '#a46497'); ?>!important ;
    }
    .widget-title {
      color: <?php echo get_theme_mod('footer_widget_title_color', '#a46497'); ?>!important ;
    }

   .footer a {
     color: <?php echo get_theme_mod('footer_link_color', '#024873'); ?>!important ;
   }
  </style>
<?php
}
add_action( 'wp_head', 'mytheme_customize_css');
