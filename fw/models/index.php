<?php

class Model_index extends Model {
    public $data = array();
    public $lang = 'en';
    
    public function prepare() {
        $this->lang = Language::get();
        
        $lang_page = Language::load_lang_file('page/home', $this->lang);
        $lang_nav = Language::load_lang_file('region/nav', $this->lang);
        $lang_footer = Language::load_lang_file('region/footer', $this->lang);
        $lang_uc = Language::load_lang_file('region/under-construction', $this->lang);
        
        $projects_data = array('project-title' => 'Wizzzard',
                                'project-desc' => '?',
                                'project-website' => '<a href="/belfw/wizzzard/">website</a>');
        
        $this->data = array_merge(
                            $lang_page, 
                            $lang_nav, 
                            $lang_footer, 
                            $lang_uc,
                            $projects_data);
    }
}

?>