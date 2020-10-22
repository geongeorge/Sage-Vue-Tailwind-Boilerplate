<?php

namespace App;

/*
*     ADD HOME PAGE CUSTOMIZE OPTIONS
*/

$wp_customize->add_panel('home_page', [
  'title' => 'Home Page',
  'description' => '',
  'priority' => 10,
]);

// Home -> Hero section

$wp_customize->add_section('hero_section', [
  'title' => 'Hero Banner',
  'priority' => 10,
  'panel' => 'home_page',
]);
// hero background image field
$wp_customize->add_setting('hero_bg', [
  'default' => '',
  'type' => 'theme_mod',
]);

$wp_customize->add_control(
  new \WP_Customize_Media_Control($wp_customize, 'hero_bg', [
    'label' => 'Hero Background',
    'section' => 'hero_section',
    'mime_type' => 'image',
  ])
);

// Hero title
$wp_customize->add_setting('hero_title', [
  'default' => 'Bankruptcy Attorney',
  'type' => 'theme_mod',
]);

$wp_customize->add_control('hero_title', [
  'label' => 'Title',
  'description' => '',
  'section' => 'hero_section',
  'type' => 'text', // Can be either text, email, url, number, hidden, or date
]);

// Hero subtitle
$wp_customize->add_setting('hero_subtitle', [
  'default' => 'In St. Paul and Minneapolis',
  'type' => 'theme_mod',
]);

$wp_customize->add_control('hero_subtitle', [
  'label' => 'Subtitle',
  'description' => '',
  'section' => 'hero_section',
  'priority' => 10, // Optional. Order priority to load the control. Default: 10
  'type' => 'text', // Can be either text, email, url, number, hidden, or date
]);


