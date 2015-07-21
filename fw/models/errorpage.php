<?php

class Model_errorpage extends Model {
    protected $data = array();
    
    public function __construct() {
        $en = array();
        $en['main-title'] = 'Ooops!';
        $en['main-info'] = 'Page not found';
        $en['main-home'] = 'home page';
        $en['footer-rights'] = 'All Rights Reserved.';
        $en['main-under-construction-title'] = 'Under construction';
        $en['main-under-construction'] = 'This website is under construction!';
        
        $hr = array();
        $hr['main-title'] = 'Uuups!';
        $hr['main-info'] = 'Stranica nije pronađena.';
        $hr['main-home'] = 'početna stranica';
        $hr['footer-rights'] = 'Sva prava zadržana.';
        $hr['main-under-construction-title'] = 'U izradi';
        $hr['main-under-construction'] = 'Ova je stranica u fazi izrade!';
        
        $this->data['en'] = $en;
        $this->data['hr'] = $hr;
    }
    
    public function get_data() {
        $lang = Language::get();
        
        switch($lang) {
            case 'en':
            case 'hr':
                $data = $this->data[$lang];
                return $data;
                break;
            default:
                break;
        }
        
        return null;
    }
}

?>