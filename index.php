<?php
    session_start();
    require_once 'vendor/autoload.php';
    require_once 'config/define.php';
    require_once 'config/loadFunc.php';
    $request_user = isset($_GET['url'])?$_GET['url']:null;
    App\helper\Router::loadRoutes();