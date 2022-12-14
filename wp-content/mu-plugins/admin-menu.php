<?php

/**
 * Plugin Name: Admin Menu
 * Description: Removes unused menus from the WP Dashboard
 * Author: NYC Opportunity
 */

add_action('admin_menu', function() {
  remove_menu_page('edit.php');           // Posts
  remove_menu_page('edit-comments.php');  // Comments
});
