<?php

class View_wizzzard extends View {
    public $data = array();
    public $articles_list = null;
    public $lang = 'en';
    
    public function index() {
        $this->lang = Language::get();
        
        $tpl = new Template('page/wizzzard');
        
        $wiz = new Template('widget/wizzzard-one');
        $wiz->set('title', $this->data['title']);
        $wiz->set('text', $this->data['text']);
        $wiz->fill();
        
        $tpl->set_data($this->data);
        $tpl->set('article-item', $wiz->output() );
        $tpl->set('lang-' . $this->lang . '-selected', 'selected');
        $tpl->fill();
        
        echo $tpl->output();
    }
    
    public function index_list() {
        $this->lang = Language::get();
        
        $tpl = new Template('page/wizzzard');
        
        $wiz = new Template('widget/wizzzard');
        
        $wizs = '';
        if(is_array($this->articles_list) ) {
            foreach($this->articles_list as $arts) {
                $wiz->set('id', $arts['id']);
                $wiz->set('title', $arts['title']);
                $wiz->set('text', $arts['text']);
                $wiz->fill();
                $wizs .= $wiz->output();
            }
        }
        
        $tpl->set_data($this->data);
        $tpl->set('lang-' . $this->lang . '-selected', 'selected');
        $tpl->set('articles-list', $wizs);
        $tpl->fill();
        
        echo $tpl->output();
    }
    
    public function show() {
        $tpl = new Template('widget/wizzzard');
        
        $tpl->set_data($this->data);
        $tpl->fill();
        
        echo $tpl->output();
    }
}

?>