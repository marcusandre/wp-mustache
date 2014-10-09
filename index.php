<?php

/**
 * Plugin Name: WP-Mustache
 * Plugin URI: https://github.com/marcusandre/wp-mustache
 * Description: Integrate logic-less templating into your Wordpress themes.
 * Version: 0.0.1
 * Author: Marcus André
 * Author URI: http://marcusandre.de/
 * License: MIT
 *
 * Mustache can be used for HTML, config files, source code - anything. It works
 * by expanding tags in a template using values provided in a hash or object.
 * We call it 'logic-less' because there are no if statements, else clauses, or
 * for loops. Instead there are only tags. Some tags are replaced with a value,
 * some nothing, and others a series of values. This document explains the
 * different types of Mustache tags. – http://mustache.github.io/
 */

/**
 * Define paths.
 */

$pwd = plugin_dir_path(__FILE__);
$lib = $pwd . 'mustache/src/Mustache/Autoloader.php';

/**
 * Load `Mustache`.
 */

require($lib);
Mustache_Autoloader::register();

/**
 * Check if `fn.parse()` already exists in runtime.
 */

if (!function_exists('parse')) {

  /**
   * Parse data into Mustache templates.
   *
   * @param  [String] $template
   * @param  [Array|Class] $data
   * @return [String]
   * @api public
   */

  function parse($template, $data) {
    $m = new Mustache_Engine;
    return $m->render($template, $data);
  }
}
