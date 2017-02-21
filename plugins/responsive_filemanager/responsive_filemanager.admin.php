<?php

// Add hooks
Action::add('admin_post_template', 'ResponsiveFilemanager::footer');

/**
 * ResponsiveFilemanager Class
 */
class ResponsiveFilemanager
{

    public static function footer() 

    {

        if (!file_exists(ROOT . DS .'storage/database/sec.key')) {
            $rand = sha1(uniqid(mt_rand()));
            file_put_contents(ROOT . DS .'storage/database/sec.key', $rand);
        }

        $sec = file_get_contents(ROOT . DS .'storage/database/sec.key');

        if (Request::get('id') == 'pages') { 
            View::factory('responsive_filemanager/views/backend/index')
            ->assign('sec', $sec)
            ->assign('lng', 'ru')
            ->display();
        }
    }   

}


