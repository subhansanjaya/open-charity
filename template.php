<?php

/**
 * @file
 * The primary PHP file for this theme.
 */

// adding Viewport to Header
 function opencharity_preprocess_html(&$vars) {
   $viewport = array(
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1, maximum-scale=1',
    ),
   );
   drupal_add_html_head($viewport, 'viewport');
 }
