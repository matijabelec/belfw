<?php

class Ctrl_language extends Controller {
    public function set_lang($args) {
        $model = new Model_language();
        
        if(count($args) > 0) {
            $model->set_lang($args[0]);
        }
        
        $url = Url_manager::Get_prev_url();
        
        Url_manager::Redirect('/' . $url);
    }
}

?>