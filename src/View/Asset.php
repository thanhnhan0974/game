<?php

namespace App\View;

class Asset extends View
{
    protected $pathPublic = 'public/';
    protected $default;

    public function __construct($path = '', $default = null){
        $this->component($path, $default);
    }

    public function component($path = '', $default = null){
        return parent::component($this->pathPublic . $path, $default = null);
    }
}