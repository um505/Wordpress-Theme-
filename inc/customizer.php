<?php
  function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
      'title'   => __('Showcase', 'cr12_Maxim_Ulyanov_traveler'),
      'description' => sprintf(__('Options for showcase','cr12_Maxim_Ulyanov_traveler')),
      'priority'    => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
      'default'   => get_bloginfo('template_directory').'/img/showcase.jpg',
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
      'label'   => __('Showcase Image', 'cr12_Maxim_Ulyanov_traveler'),
      'section' => 'showcase',
      'settings' => 'showcase_image',
      'priority'  => 1
    )));


    $wp_customize->add_setting('showcase_heading', array(
      'default'   => _x('Mount Everest', 'cr12_Maxim_Ulyanov_traveler'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_heading', array(
      'label'   => __('Heading', 'cr12_Maxim_Ulyanov_traveler'),
      'section' => 'showcase',
      'priority'  => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
      'default'   => _x('The best travel agency from Vienna!', 'cr12_Maxim_Ulyanov_traveler'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('showcase_text', array(
      'label'   => __('Text', 'cr12_Maxim_Ulyanov_traveler'),
      'section' => 'showcase',
      'priority'  => 3
    ));

    $wp_customize->add_setting('btn_url', array(
      'default'   => _x('https://codefactory.wien/en/home-en/', 'cr12_Maxim_Ulyanov_traveler'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_url', array(
      'label'   => __('Button URL', 'cr12_Maxim_Ulyanov_traveler'),
      'section' => 'showcase',
      'priority'  => 4
    ));

    $wp_customize->add_setting('btn_text', array(
      'default'   => _x('Read More', 'cr12_Maxim_Ulyanov_traveler'),
      'type'      => 'theme_mod'
    ));

    $wp_customize->add_control('btn_text', array(
      'label'   => __('Button Text', 'cr12_Maxim_Ulyanov_traveler'),
      'section' => 'showcase',
      'priority'  => 5
    ));
  }

  add_action('customize_register', 'wpb_customize_register');