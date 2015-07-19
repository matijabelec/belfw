<?php

class Language {
    protected function __construct() {}
    
    public static function set($lang) {
        $lang = Session::set('lang', $lang);
        return true;
    }
    
    public static function get() {
        $lang = Session::get('lang');
        
        if(is_null($lang) ) {
            Session::set('lang', 'en');
            return 'en';
        }
        
        return $lang;
    }
}

?>