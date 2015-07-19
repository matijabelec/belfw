<?php

function f_autoloader($class) {
    if($class[0] == 'C' && $class[1] == 't' && $class[2] == 'r' && $class[3] == 'l' && $class[4] == '_') {
        $class = substr($class, 5);
        if(is_file('fw/controllers/' . $class . '.php') )
            include_once('fw/controllers/' . $class . '.php');
        return;
    }
    else if($class[0] == 'M' && $class[1] == 'o' && $class[2] == 'd' && $class[3] == 'e' && $class[4] == 'l' && $class[5] == '_') {
        $class = substr($class, 6);
        if(is_file('fw/models/' . $class . '.php') )
            include_once('fw/models/' . $class . '.php');
        return;
    }
    else if($class[0] == 'V' && $class[1] == 'i' && $class[2] == 'e' && $class[3] == 'w' && $class[4] == '_') {
        $class = substr($class, 5);
        if(is_file('fw/views/' . $class . '.php') )
            include_once('fw/views/' . $class . '.php');
        return;
    }
    else {
        $class = strtolower($class);
        if(is_file('fw/library/' . $class . '.php') )
            include_once('fw/library/' . $class . '.php');        
        return;
    }
}
spl_autoload_register('f_autoloader');

?>