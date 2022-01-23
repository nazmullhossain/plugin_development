<?php
/*
plugin Name: Custom plugin
Plugin URI: https://jumuahshop.com/custom-plugin
description: A plugin to create awesome and spread joy
version: 1.0
Author: Muhammad Nazmul Hossain
Author URI: http://mdnazmulhossian.me
*/

define ('Plugin_Dir_path', plugin_dir_path(__FILE__));
define('PLUGINS_URL', plugins_url());
 

function add_custom_menu(){
        add_menu_page(
            'Custom Plugin',
             'Custom-Plugin', 
             'manage_options',
             'custom_plugin',
             'custom_plugin_func',
             'dashicons-format-status',
             9
        ); 

        add_submenu_page(
            'custom_plugin',
            'page_tittle',
            'menu_tittle',
            'manage_options',
            'custom_plugin',
            'custom_plugin_func'

        );

        add_submenu_page(
            'custom_plugin',
            'page2_tittle',
            'menu2_tittle',
            'manage_options',
            'custom_2',
            'submenu_fuc2'

        );
}

add_action('admin_menu', 'add_custom_menu');

function custom_plugin_func(){
    include_once Plugin_Dir_path.'./add_new.php';
}


function submenu_fuc2(){
    include_once Plugin_Dir_path.'./all_page.php';
}



?>