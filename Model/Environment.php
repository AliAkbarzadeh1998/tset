<?php namespace Model;
class Environment{
  private static $_conf = null;
  public static function get($path){
    $res = self::$_conf = self::$_conf?self::$_conf:json_decode(file_get_contents(ROOTPATH.'/model/environment'),true);
    return $res[$path];

  }
}

