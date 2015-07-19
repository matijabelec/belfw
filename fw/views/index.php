<?php

class View_index extends View {
    protected function lang_select(&$tpl, &$lang) {
        if(isset($lang) ) {
            switch($lang) {
                case 'en':
                    $tpl->set('lang-en-selected', 'selected');
                    break;
                case 'hr':
                    $tpl->set('lang-hr-selected', 'selected');
                    break;
                default:
                    break;
            }
        }
    }
    
    public function show($data, $lang) {
        $tpl = new Template('page/home');
        
        $tpl->set_data($data);
        
        $this->lang_select($tpl, $lang);
        
        $tpl->fill();
        
        echo $tpl->output();
    }
    
    public function show_about($data, $lang) {
        $tpl = new Template('page/about');
        
        $tpl->set_data($data);
        
        $this->lang_select($tpl, $lang);
        
        $tpl->fill();
        
        echo $tpl->output();
    }
}

?>