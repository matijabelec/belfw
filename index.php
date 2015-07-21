<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

define('ROOT', '/belfw');

// include framework
include_once('fw/main.php');

// prepare routes
$route_list = array(
    array(
        'controller' => array(
            'name' => array('', 'index'),
            'class' => 'index'
        ),
        'actions' => array(
            array(
                'name' => array('', 'index'),
                'method' => 'index'
            )
        )
    ),
    /*array(
        'controller' => array(
            'name' => 'about',
            'class' => 'index'
        ),
        'actions' => array(
            array(
                'name' => 'index',
                'method' => 'about'
            )
        )
    ),*/
    array(
        'controller' => array(
            'name' => 'lang',
            'class' => 'language'
        ),
        'actions' => array(
            array(
                'name' => 'set',
                'method' => 'set_lang'
            )
        )
    )
);
Routes_Manager::Initialize_routes($route_list);

// run router and show website
Router::Start();

?>
