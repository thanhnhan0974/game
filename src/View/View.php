<?php

namespace App\View;

class View
{
    public function __construct(){}

    public function load(){
        return $this->loadView();
    }

    public function loadView(){
        include_once(__DIR__ .'/../../public/index.php');
        return $this;
    }

    public function component($path = '', $default = null){
        include_once($path);
        return $this;
    }
}