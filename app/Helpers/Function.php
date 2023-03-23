<?php

use App\View\Component;

function test(){
    echo "helpers";
}

if(!function_exists('component')){
    function component($path, $default = null){
        return new Component($path, $default);
    }
}

if(!function_exists('asset')){
    function asset($path){
        return ;
    }
}