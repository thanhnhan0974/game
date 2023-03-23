<?php

define('ROOT', dirname( __FILE__, 2).'/');

const MENU = [
    [
        'name' => 'Đăng nhập',
        'path' => '/login',
        'icon' => '',
        'auth' => true
    ],
    [
        'name' => 'Thoát',
        'path' => '/exit',
        'icon' => '',
        'auth' => false
    ]
];