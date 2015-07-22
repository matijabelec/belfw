<?php

class View_errorpage extends View {
    public $data = array();
    
    public function show() {
        $tpl = new Template('page/error');
        
        $tpl->set_data($this->data);
        $tpl->fill();
        
        echo $tpl->output();
    }
}

?>