<?php

/**
 *  Responsive Filemanager plugin
 *
 *  @package Monstra.R
 *  @subpackage Plugins
 *  @author Ravilr
 *  @copyright 2016-2017 Ravilr
 *  @version 1.0.0
 *
 */

// Register plugin
Plugin::register( __FILE__,
                __('Responsive Filemanager', 'sandbox'),
                __('Responsive Filemanager plugin for Monstra', 'sandbox'),
                '1.0.0',
                'Ravilr',
                'http://monstra.org/');


if (Session::exists('user_role') && in_array(Session::get('user_role'), array('admin', 'editor'))) {

    Plugin::admin('responsive_filemanager');

}

