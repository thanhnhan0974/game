<?php

namespace App\View;

class Layout
{
    protected $pathLayout = 'public/layouts/';
    protected $default;

    public function __construct($path = '', $default = null){
        $this->component($path, $default);
    }

    public function component($path = '', $default = null){
        $pathToComponent = ROOT.$this->pathLayout.$path;
        include_once($pathToComponent);
        return $this;
    }
}