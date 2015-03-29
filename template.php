<?php

/**
 * @file
 * template.php
 */


function growl_bravo_preprocess_page(&$variables) {
  // Web Font Loader (https://github.com/typekit/webfontloader)
  drupal_add_js("//ajax.googleapis.com/ajax/libs/webfont/1.5.10/webfont.js");
}
