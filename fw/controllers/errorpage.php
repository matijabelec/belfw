<?php

class Ctrl_errorpage extends Controller {
    public function index() {
        $model = new Model_errorpage;
        $view = new View_errorpage;
        
        $view->data = $model->data;
        $view->show();
    }
}

?>