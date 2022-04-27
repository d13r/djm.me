<?php
/*
Plugin Name: DJM.me
Plugin URI: https://git.djm.me/dave/djm.me
Description: YOURLS customisations for DJM.me.
Version: 1.0
Author: Dave James Miller
Author URI: https://djm.me/
*/

// Based on https://github.com/YOURLS/404-if-not-found
yourls_add_action('loader_failed', 'djm_404_page', 20); // "Preview URL with QR Code" takes precedence
yourls_add_action('infos_keyword_not_found', 'djm_404_page');
yourls_add_action('redirect_no_keyword', 'djm_404_page');
yourls_add_action('infos_no_keyword', 'djm_404_page');

function djm_404_page() {
    require __DIR__ . '/404.php';
    exit;
}
