<?php

class Url_manager {
    protected static $prev_url = '';
    protected static $url = '';
    protected static $controller = null;
    protected static $action = null;
    protected static $arguments = null;
    
    protected static function Deep_clean() {
        
    }
    
    public static function Redirect($url, $relative=true) {
        if($relative)
            $url = ROOT . $url;
        
        if(headers_sent() ) {
            die('<script type="text/javascript">window.location=\'' . $url . '\';</script>');
        } else {
            header('Location: ' . $url);
            die();
        }
    }
    
    public static function Initialize() {
        self::deep_clean();
        
        $url = $_GET['url'];
        self::$controller = 'index';
        self::$action = 'index';
        self::$arguments = array();
        
        
        $prev = Session::get('url');
        if(is_null($prev) )
            self::$prev_url = '';
        else
            self::$prev_url = $prev;
        Session::set('prev-url', self::$prev_url);
        Session::set('url', $url);
        
        
        $url = rtrim($url, '/');
        
        $url_expl = explode('/', $url);
        $url_expl_cnt = count($url_expl);
        
        switch($url_expl_cnt) {
            case 0:
                break;
            case 1:
                if($url != '')
                    self::$controller = $url_expl[0];
                break;
            case 2:
                self::$controller = $url_expl[0];
                self::$action = $url_expl[1];
                break;
            default:
                self::$controller = $url_expl[0];
                self::$action = $url_expl[1];
                //self::$arguments = array();
                for($i=2; $i<$url_expl_cnt; $i++)
                    self::$arguments[] = $url_expl[$i];
                break;
        }
        self::$url = $url;
    }
    
    public static function Get_url() {
        return self::$url;
    }
    public static function Get_prev_url() {
        return self::$prev_url;
    }
    public static function Get_controller() {
        return self::$controller;
    }
    public static function Get_action() {
        return self::$action;
    }
    public static function Get_arguments() {
        return self::$arguments;
    }
}

?>