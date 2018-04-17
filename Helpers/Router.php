<?php namespace App\Helper;

use Exception;

class Router{
    //---------------------start loadRoute()-----------
     public static function loadRoutes() {
        $request = isset($_GET['url']) ? $_GET['url'] : '';
        $route = self::checkRoute($request);
        static::executeRoute($request, $route);
    }

    //******************** end loadRoute() ***************

    //------------------------start checkRoute()------------
    private static function checkRoute($request)
    {
        /*
         * config/routes.phpیک ارایه داره تمام روت ها در این ارایه قرار داره با اینکلود کردن به این ارایه دسترسی داریم
         * $routes => این همون ارایه هست
         */

        if(file_exists('config/routes.php')){
            require_once 'config/routes.php';
        }else{
            die('not found $routes');
        }
        foreach ($routes as $key => $route) {
            if (strpos($key, '{')) {
                $main_route = substr($key, 0, strpos($key, '{') - 1);
            } else {
                $main_route = $key;
            }
            $flag = substr($request, 0, strlen($main_route));
            if ($flag == $main_route) {
                return $key . '=>' . $route;
            }
        }
        return 'home=>pageController/index';
    }

    //************************end checkRoute()************

    //------------------------start executeRoute()-------------
    private static  function executeRoute($request, $route)
    {
        $parts_route = explode('=>', $route);
        preg_match_all('/\/{([^}]+)}/U', $parts_route[0], $matches);
        if (!empty($matches)) {
            $params = isset($matches[1]) ? $matches[1] : null;
            $required_params = static::removeArbitraryParams($params);
        }
        if (strpos($parts_route[0], '{')) {
            $params_url = substr($request, strlen(substr($parts_route[0], 0, strpos($parts_route[0], '{'))));
        }
        $params_url = isset($params_url) && !empty($params_url) ? explode('/', $params_url) : [];

        if (count($required_params) <= count($params_url)) {
            $action = explode('/', $parts_route[1]);
            $controller_name = ucfirst($action[0]);
            $controller_map = 'App\Controllers\\'.$controller_name;
            try{
                $ctrl = new $controller_map;
            }
            catch (Exception $e)
            {
                echo 'EROOR';
            }
            $method_name = lcfirst($action[1]) . 'Action';
            if (method_exists($ctrl, $method_name)) {
                call_user_func_array([$ctrl, $method_name], $params_url);
            } else {
                echo "ERROR :  $method_name Not found in $controller_map";
            }

        } else {
            echo 'you must give an value ';
        }
    }
    //************************end executeRoute()**************

    //--------------------start removeArbitarryParams()-------------

    private static function removeArbitraryParams($params)
     {
         $params2 = [];
         if (is_array($params)) {
             for ($i = 0; $i < count($params); $i++) {
                 if (!strpos($params[$i], '?')) {
                     $params2[] = $params[$i];
                 }
             }
         }
         return $params2;
     }
    //*******************end removeArbitarryParams() ****************
}