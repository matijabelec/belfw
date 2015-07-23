<?php

class Ctrl_wizzzard extends Controller {
    public function index($args) {
        Url_manager::Redirect('/wizzzard/show');
    }
    
    public function index2($args) {
        $model = new Model_wizzzard;
        $view = new View_wizzzard;
        
        $model->prepare_index();
        
        $data = $model->data;
        if(count($args)>1 && $args[0]=='id' && is_numeric($args[1]) ) {
            $model->get_by_id($args[1]);
            
            if(!is_null($model->data) )
                $data = $model->data;
        } else {
            if(count($args)>1 && $args[0]=='page') {
                $model->get($args[1]);
            } else {
                $model->get(1);
            }
            
            $view->data = $data;
            $view->articles_list = $model->article_list;
            $view->index_list();
            return;
        }
        
        $view->data = $data;
        $view->index();
    }
    
    public function show($args) {
        $model = new Model_wizzzard;
        $view = new View_wizzzard;
        
        if(count($args)>0 && is_numeric($args[0]) ) {
            $model->get_by_id($args[0]);
            
            if(is_null($model->data) )
                return;
            
            $view->data = $model->data;
            $view->show();
        }
    }
}

?>