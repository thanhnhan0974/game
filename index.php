<?php

use App\Game;
use Dotenv\Dotenv;

require_once __DIR__.'./vendor/autoload.php';

$dotenv  = Dotenv::createImmutable(__DIR__);
$dotenv->load();
$game = new Game;

