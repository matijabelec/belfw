<?php

class Model_wizzzard extends Model {
    public $data = null;
    public $lang = 'en';
    public $article_list = null;
    
    public function prepare_index() {
        $this->lang = Language::get();
        
        $lang_nav = Language::load_lang_file('region/nav', $this->lang);
        $lang_footer = Language::load_lang_file('region/footer', $this->lang);
        
        $this->data = array_merge( 
                            $lang_nav, 
                            $lang_footer);
    }
    
    public function get_by_id($id) {
        $res = Database::query('SELECT title, text FROM articles_view WHERE id = :id', 
                                array('id' => $id) );
        
        if(count($res) == 1) {
            if(is_array($this->data) )
                $this->data += $res[0];
            else
                $this->data = $res[0];
        } else
            $data = null;
    }
    
    public function get($page) {
        $off = ($page-1) * 10;
        $res = Database::query('SELECT id, title, text FROM articles_view ORDER BY id ASC LIMIT 10 OFFSET ' . $off,
                                array() );
        
        if(count($res) > 0) {
            $this->article_list = $res;
        } else
            $this->article_list = null;
    }
}

?>