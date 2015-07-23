<?php

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
    ),
    
    
    array(
        'controller' => array(
            'name' => 'wizzzard',
            'class' => 'wizzzard'
        ),
        'actions' => array(
            array(
                'name' => 'show',
                'method' => 'index2'
            ),
            array(
                'name' => 'index',
                'method' => 'index'
            )
        )
    )
);
Routes_Manager::Initialize_routes($route_list);

// run router and show website
Router::Start();

?>
