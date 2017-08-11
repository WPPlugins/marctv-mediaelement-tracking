<?php

/*
  Plugin Name: MediaElement Google Analytics & Piwik Event Tracking
  Plugin URI: http://www.marc.tv/blog/marctv-wordpress-plugins/
  Description: Tracks user interactions in the native Wordpress videoplayer with Google Analytics.
  Version: 1.3
  Author: MarcDK
  Author URI: http://www.marc.tv
  License: GPL2
 */

function add_marctv_me_scripts()
{
    wp_enqueue_script(
        "jquery.me-ga-events", WP_PLUGIN_URL . "/marctv-mediaelement-tracking/js/jquery.me-ga-events.js", array("jquery"), "1.3", true);
}


if (!is_admin()) {
    add_action('wp_enqueue_scripts', 'add_marctv_me_scripts');
}
?>
