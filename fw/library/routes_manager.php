<?php

include_once('fw/config.php');

class Routes_Manager {
    protected static $route_list = null;
    
    public static function Initialize_routes($route_list) {
        if(is_array($route_list) ) {
            self::$route_list = $route_list;
            return true;
        }
        return false;
    }
    
    public static function Check_route(&$controller, &$action, &$arguments) {
        if(is_null(self::$route_list) )
            return 0;
        
        if(is_null($controller) )
            $controller = '';
        if(is_null($action) )
            $action = '';
        if(is_null($arguments) )
            $arguments = array();
        
        foreach(self::$route_list as $route) {
            $found = 0;
            $found2 = 0;
            
            $c = $route['controller'];
            if(is_array($c['name']) ) {
                foreach($c as $cn)
                    if($cn == $controller) {
                        $controller = $c['class'];
                        $found = 1;
                        break;
                    }
            } else {
                if($c['name'] == $controller) {
                    $controller = $c['class'];
                    $found = 1;
                }
            }
            
            if($found) {
                foreach($route['actions'] as $a) {
                    if(is_array($a['name']) ) {
                        foreach($a as $an)
                            if($an == $action) {
                                $action = $a['method'];
                                $found2 = 1;
                                break;
                            }
                    } else {
                        if($a['name'] == $action) {
                            $action = $a['method'];
                            $found2 = 1;
                        }
                    }
                    
                    if($found2) {
                        return 1;
                    }
                }
            }
        }
        
        return 0;
    }
}

?>