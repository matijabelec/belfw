<?php

class View_errorpage extends View {
    public function show($data) {
        $tpl = new Template('page/error');
        
        $tpl->set_data($data);
        
        $tpl->fill();
        echo $tpl->output();
    }
}

?>