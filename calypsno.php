<?php

/*
 * Plugin Name: Calypsno
 * Description: Disable front-end links to the WordPress.com "Calypso" admin panel.
 */

add_filter( 'pre_option_jetpack_edit_links_calypso_redirect', '__return_null' );
