<?php
/**
 * Plugin Name: BSD Shortcode Button
 * Description: Shortcodes included in TinyMCE.
 * Version: 1.0
 * Author: Blue State Digital
 */

if (file_exists(WPMU_PLUGIN_DIR . '/shortcode-button/shortcode-button.php')) {
  require_once WPMU_PLUGIN_DIR . '/shortcode-button/shortcode-button.php';

  new BSD\ShortCodeButton();
}
