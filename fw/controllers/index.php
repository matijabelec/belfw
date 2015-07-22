<?php

class Ctrl_index extends Controller {
    public function index($args) {
        $model = new Model_index;
        $view = new View_index;
        
        $model->prepare();
        
        $view->data = $model->data;
        $view->lang = $model->lang;
        $view->show();
    }
}

?>