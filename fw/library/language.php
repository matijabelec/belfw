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
    
    public static function load_lang_file($file, $lang) {
        $ret = array();
        
        $filename = ROOT_LANG . '/' . $file . '.lang';
        if(file_exists($filename) ) {
            $xml = simplexml_load_file($filename);
            
            foreach($xml->children() as $child) {
                    $id = $child->attributes();
                    $id = (string)$id->id;
                    $v = '';
                    foreach($child as $key => $value) {
                        $l = $value->attributes();
                        $v = (string)$value;
                        if($l == $lang)
                            break;
                    }
                    $ret[$id] = $v;
            }
        }
        
        return $ret;
    }
}

?>