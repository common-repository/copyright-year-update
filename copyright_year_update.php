<?php
/*
Plugin Name: Copyright Year Update
Description: Automatically updates the copyright year.
Version: 1.0
Author URI: https://www.freewebtools.com
Author: Freewebtools
License:     GPL2
*/

function cyu_current_year() {
    $year = date('Y');
    return $year;
}

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
add_shortcode('current_year','cyu_current_year');
