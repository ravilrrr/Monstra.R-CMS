<?php

/**
 *  SimpleMDE! plugin
 *
 *  @package Monstra.R
 *  @subpackage Plugins
 *  @author Ravilr
 *  @version 1.0.1
 *
 */

// Register plugin
Plugin::register( __FILE__,
                __('SimpleMDE', 'simplemde'),
                __('SimpleMDE. A simple, beautiful JavaScript Markdown editor', 'simplemde'),
                '1.0.1',
                'Ravilr',
                'http://monstra.org/');


if (Session::exists('user_role') && in_array(Session::get('user_role'), array('admin', 'editor'))) {

    Plugin::admin('simplemde');

}