<?php

class Ctrl_index extends Controller {
    public function index($args) {
        $model = new Model_index;
        $view = new View_index;
        
        $model->prepare_index();
        
        $data = $model->get_data();
        $lang = $model->get_lang();
        
        $view->show($data, $lang);
    }
    
    public function about($args) {
        $model = new Model_index;
        $view = new View_index;
        
        $model->prepare_about();
        
        $data = $model->get_data();
        $lang = $model->get_lang();
        
        $view->show_about($data, $lang);
    }
}

?>