<?php

class Model_language extends Model {
    public function set_lang($lang) {
        return Language::set($lang);
    }
}

?>