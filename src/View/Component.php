<?php

namespace App\View;

class Component
{
    protected $pathComponent = 'public/components/';
    protected $default;

    public function __construct($path = '', $default = null){
        $this->component($path, $default);
    }

    public function component($path = '', $default = null){
        $pathToComponent = ROOT.$this->pathComponent.$path;
        include_once($pathToComponent);
        return $this;
    }
}