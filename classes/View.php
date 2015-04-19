<?php

class View {

    protected $data = [];

    public function assign($name, $value){
        $this->data[$name] = $value;
    }

    public function __set($key, $val){
        $this->data[$key] = $val;
    }

    public function __get($key){
        return $this->data[$key];
    }

    public function display($template){

        foreach($this->data as $key => $val){
            $$key = $val;
        }

        include_once __DIR__.'/../views/'.$template.'.php';
    }
}