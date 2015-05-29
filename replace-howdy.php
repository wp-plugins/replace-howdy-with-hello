<?php
   /*
   Plugin Name: Replace Howdy
   Plugin URI: http://www.odrasoft.com/plugins/remove-howdy
   Description: This plugin will replace "Howdy" in the top right corner of your Wordpress dashboard.
   Version: 1.0
   Author: Swadesh Ranjan Swain
   Author URI: http://www.odrasoft.com
   License: GPL2
   */

function replace_howdy( $wp_admin_top_bar ) {
    $wp_my_account=$wp_admin_top_bar->get_node('my-account');
    $replacetitle = str_replace( 'Howdy', 'Hello', $wp_my_account->title );
    $wp_admin_top_bar->add_node( array(
        'id' => 'my-account',
        'title' => $replacetitle,
    ) );
}
add_filter( 'admin_bar_menu', 'replace_howdy',25 );

?>