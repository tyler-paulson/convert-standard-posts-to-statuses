<?php
/*
Plugin Name: Convert Standard Posts to Statuses
Description: Converts all standard posts to statuses upon publish. Potentially useful for microblogging.
Version:     1.0.0
Author:      Tyler Paulson Design & Development, Inc
Author URI:  https://tylerpaulson.com
License:     GPLv3
*/

defined( 'ABSPATH' ) or die('No script kiddies please!');

function tpdd_post_published($id) {
    if(! get_post_format($id)) {
        set_post_format($id, 'status');
    }
}

add_action( 'publish_post', 'tpdd_post_published', 10, 1 );