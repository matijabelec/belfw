<?php

class Session {
    protected function __construct() {}
    
    public static function start($name='SESS_UNK') {
        session_name($name);
        session_start();
    }
    
    public static function destroy() {
        session_destroy();
    }
    
    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }
    
    public static function get($key) {
        if(isset($_SESSION[$key]) )
            return $_SESSION[$key];
        return null;
    }
}

?>