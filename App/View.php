<?php namespace App;
use Windwalker\Renderer\BladeRenderer;

class View{

    /**
     * @param $root
     * @param null $data
     */
    public static function render($root , $data = null)
  {
//      $root = str_replace('.','/',$root);
//      $real_path = 'view/'.$root.'.php';
//      if(file_exists($real_path))
//      {
//          if(!empty($data)){
//              extract($data);
//          }
//          ob_start();
//          require_once $real_path;
//          $page_render = ob_get_clean();
//          require_once 'view/defualt.blade.php';
//      }
      $paths = array('view');

      $renderer = new BladeRenderer($paths,array('cache_path' => __DIR__ . '/cache'));

      echo $renderer->render($root, $data);
  }
}
