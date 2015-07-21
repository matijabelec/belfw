<?php

class Model_index extends Model {
    protected $data = array();
    protected $lang = 'en';
    
    public function prepare_index() {
        $this->lang = Language::get();
        
        $lang_page = Language::load_lang_file('page/home', $this->lang);
        $lang_nav = Language::load_lang_file('region/nav', $this->lang);
        $lang_footer = Language::load_lang_file('region/footer', $this->lang);
        $lang_uc = Language::load_lang_file('region/under-construction', $this->lang);
        
        $this->data = array_merge(
                            $lang_page, 
                            $lang_nav, 
                            $lang_footer, 
                            $lang_uc);
    }
    
    public function get_data() {
        return $this->data;
    }
    public function get_lang() {
        return $this->lang;
    }
}

?>