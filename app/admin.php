<?php

namespace App;


/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);

    /**
     * Load all customizers from Customizers
     * 
     * Files will be loaded in alphabetical order so you can prepend filename with numbers
     * eg: 001.Home.php, 002.About.php
     */
    $customizer_dir = __DIR__."/Customizers\/";
    $all_files = glob($customizer_dir."*.php");
    $files_in_alpha_order = array_reverse($all_files);
    echo $customizer_dir;
    print_r($files_in_alpha_order);
    
    foreach ($files_in_alpha_order as $filename)
    {
        include $filename;
    }
});
  
  /**
  * Customizer JS
  */
  add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
  });

