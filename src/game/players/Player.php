<?php

class Player
{
    protected $name;

    public function __construct()
    {
        
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function getName($name){
        return $this->name = $name;
    }

    public function attack() {
        echo 'attck';
    }
}