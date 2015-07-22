<?php

class View_index extends View {
    public $lang = 'en';
    public $data = array();
    
    public function show() {
        $tpl = new Template('page/home');
        
        $tpl->set_data($this->data);
        $tpl->set('lang-' . $this->lang . '-selected', 'selected');
        $tpl->fill();
        
        echo $tpl->output();
    }
}

?>