<?php
global $config;
$config['db']['host']='localhost';
$config['db']['user']='webplus2_ali';
$config['db']['pass']='221155';
$config['db']['name']='webplus2_shop';

$config['address'] = array(
    '/login' => '/user/login',
    '/register' => '/user/register',
    '/shop' => '/page/shop',
    '/home' => '/page/home',
    '/cart' => '/page/cart',
    '/search' => '/page/search'
);
