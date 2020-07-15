<?php
/*
	Plugin Name: Smashing Plugin
	Description: This is for updating your Wordpress plugin.
	Version: 2.0.0
	Author: Webmyne
	Author URI: http://www.webmyne.com
*/
if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'webmyne2290' );
$updater->set_repository( 'smashing-updater-plugin' );
$updater->authorize( '457a917a79fca142979eedb86b2c107be629aad0' ); // Your auth code goes here for private repos
$updater->initialize();


function register_my_custom_menunew()
{
    add_menu_page( 
        __( 'Version Update Plugin', 'textdomain' ),
        'Version Update Plugin',
        'manage_options',
        'versionupdate',
        'version_update',
        'dashicons-admin-page',
        6
    ); 
}
add_action( 'admin_menu', 'register_my_custom_menunew' );

function version_update()
{
	echo "This is plugin functionallity";
}
