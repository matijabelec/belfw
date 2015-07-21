<?php

class Model_errorpage extends Model {
    protected $data = array();
    
    public function __construct() {
        $this->lang = Language::get();
        
        $lang_page = Language::load_lang_file('page/error', $this->lang);
        $lang_footer = Language::load_lang_file('region/footer', $this->lang);
        $lang_uc = Language::load_lang_file('region/under-construction', $this->lang);
        
        $this->data = array_merge(
                            $lang_page, 
                            $lang_footer, 
                            $lang_uc);
    }
    
    public function get_data() {
        return $this->data;
    }
}

?>