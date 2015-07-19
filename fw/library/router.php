<?php

include_once('fw/library/url_manager.php');
include_once('fw/library/routes_manager.php');
include_once('fw/library/controller.php');

class Router {
    protected static function Run_controller() {
        Session::start();
        
        Url_manager::Initialize();
        
        $controller = Url_manager::Get_controller();
        $action = Url_manager::Get_action();
        $arguments = Url_manager::Get_arguments();
        
        $ok = Routes_Manager::Check_route($controller, $action, $arguments);
        
        if($ok) {
            // run controller
            $controller = 'Ctrl_' . $controller;
            
            if(class_exists($controller) ) {
                $cnt = new $controller;
                $cnt->$action($arguments);
                
                return;
            }
        }
        
        $err_ctrl = 'Ctrl_errorpage';
        if(class_exists($err_ctrl) ) {
            $cnt = new $err_ctrl;
            $cnt->index();
            
            return;
        }
        
        // show error
        echo 'Error';
    }
    
    public static function Start() {
        self::Run_controller();
    }
}

?>