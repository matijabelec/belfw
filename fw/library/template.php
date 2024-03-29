<?php

class Template {
    protected $data = '';
    protected $filled_data = '';
    protected $values = array(
                            'ROOT' => ROOT
                        );
    
    protected function process_includes() {
        /*{#include(region/nav)}*/
        $string = $this->data;
        $pattern = '/\{#include\(([a-zA-Z0-9-\/]*)\)\}/i';
        $this->data = preg_replace_callback(
            $pattern,
            function($matches) {
                $value = $matches[1];
                if(is_null($value) )
                    return '';
                
                $tpl = new Template($value);
                
                return $tpl->output();
            },
            $string
        );
    }
    
    public function __construct($name) {
        $this->values['SITE'] = ROOT . '/site';
        
        $filename = ROOT_TPL . '/' . $name . '.tpl';
        
        if(file_exists($filename) ) {
            $this->data = file_get_contents($filename);
            $this->filled_data = $this->data;
            
            $this->process_includes();
        }
    }
    
    public function set($key='', $value='') {
        $this->values[$key] = $value;
    }
    
    public function set_data($data) {
        if(isset($data) && is_array($data) )
            foreach($data as $k=>$v)
                $this->values[$k] = $v;
    }
    
    public function get($key='') {
        if(isset($this->values[$key]) )
            return $this->values[$key];
        return null;
    }
    
    public function fill() {
        /*{@key}*/
        $string = $this->data;
        $pattern = '/\{\@([a-zA-Z0-9-]*)\}/i';
        $this->filled_data = preg_replace_callback(
            $pattern,
            function($matches) {
                $value = $this->get($matches[1]);
                if(is_null($value) )
                    return '';
                return $value;
            },
            $string
        );
    }
    
    public function output() {
        return $this->filled_data;
    }
}

?>