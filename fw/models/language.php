<?php

class Model_language extends Model {
    public function set_lang($lang) {
        /*switch($lang) {
            case 'en':
            case 'hr':*/
                return Language::set($lang);
                /*break;
            default:
                break;
        }
        
        return false;*/
    }
}

?>