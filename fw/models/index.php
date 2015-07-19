<?php

class Model_index extends Model {
    protected $data = array();
    protected $lang = 'en';
    
    public function __construct() {
        $en = array();
        $en['nav-home'] = 'Home';
        $en['nav-projects'] = 'Projects';
        $en['nav-about'] = 'Impressum';
        $en['footer-rights'] = 'All Rights Reserved.';
        
        $hr = array();
        $hr['nav-home'] = 'Početna';
        $hr['nav-projects'] = 'Projekti';
        $hr['nav-about'] = 'Impressum';
        $hr['footer-rights'] = 'Sva prava zadržana.';
        
        $this->data['en'] = $en;
        $this->data['hr'] = $hr;
    }
    
    public function prepare_index() {
        $this->lang = Language::get();
        
        $this->data['en']['main-title'] = 'Main title';
        $this->data['en']['main-data'] = '<p>Info</p><p>Info 2</p><p>Info 3</p>';
        
        $this->data['hr']['main-title'] = 'Glavni naslov';
        $this->data['hr']['main-data'] = '<p>Info</p><p>Info 2 hr</p><p>Info 3 hr</p>';
    }
    public function prepare_about() {
        $this->lang = Language::get();
        
        $this->data['en']['main-title'] = 'About author';
        $this->data['en']['main-data'] = '<p>Info - en</p>';
        
        $this->data['hr']['main-title'] = 'O autoru';
        $this->data['hr']['main-data'] = '<p>Info - hr</p>';
    }
    
    public function get_data() {
        return $this->data[$this->lang];
    }
    
    public function get_lang() {
        return $this->lang;
    }
}

?>