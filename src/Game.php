<?php 

namespace App;

use App\View\View;

class Game
{
    public function __construct()
    {
        $this->run();
    }

    public static function run(){
        
        $view = new View;
        $view->load();
    }
}