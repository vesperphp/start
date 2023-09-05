<?php

use App\Debug\Debug;

/**
 * The website's 
 * enviroment array:
 */

$a = [
    
    'system' => [
        'url' => 'http://'.$_SERVER["HTTP_HOST"].'/vesper/start/public_html/',
        'baseurl' => $_SERVER["HTTP_HOST"],
        'rootpath' => ROOTPATH,
        'site_name' => "Vesper PHP Development Platform",
    ],

    'database' => [
        'db_name' => 'xxxxxx',
        'db_user' => 'xxxxxx',
        'db_pass' => 'xxxxxx',
        'db_server' => 'localhost'
    ]  
      
];

/**
 * Some settings:
 */

 error_reporting(E_ALL);
 ini_set('display_errors','On');
