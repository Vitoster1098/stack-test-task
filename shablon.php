<?php

class content {
    var $vars = [];
    var $content;

    function set($name, $val) {
        $this->vars[$name] = $val;
    }

    function get($name) {
        return isset($this->vars[$name]) ? $this->vars[$name] : null;
    }

    function out_content($tpl) {
        $this->content = file_get_contents($tpl);

        foreach ($this->vars as $key => $val) {
            $this->content = str_replace($key, $val, $this->content);
        }
        echo $this->content;
    }
}
$content = new content();