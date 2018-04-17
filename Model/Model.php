<?php namespace Model;
use dd\Environment;
use dd\DataBase;
class Model
{
    private $_db;
    private $_isnew = true;
    protected $_primery_key = 'id';
    protected $_fields = [];
    protected  $_tbl_name = '';
    public function __construct()
    {
      $this->_tbl_name = environment::get('database')['table_prefix'].strtolower(ltrim(get_class($this),'Model\\Models'));

      self::_init();
    }

    // function _init used for connect to DataBase ...
    private function _init()
    {
      $val = Environment::get("database");
      try
      {
          $connectionString = $val['driver'].": host = ".$val['host'].';dbname='.$val['dbname'].';charset='.$val['charset'];
          $this->_db = new DataBase($connectionString , $val['user'] , $val['password']);
      }
      catch(\PDOException $e)
      {
          dump($e->getMessage());
      }
    }

    public function save(){
        $q = implode(',',string_to_query_helper($this->_fields,':',''));
        $vars = implode(',',string_to_query_helper($this->_fields));
        $sql = "INSERT INTO {$this->_tbl_name} ($vars) VALUES ($q)";
        $res = $this->db()->prepare($sql)->execute($this->_fields);
        $result['res']=$res;
        $result['lastId']=$this->db()->lastInsertId();
        return $result;
    }

    // public function multi_save($data){
    //   $q =(strin_to_query_multi($data,$this->_fields));
    //   $vars = implode(',',string_to_query_helper($this->_fields));
    //   $sql = "INSERT INTO {$this->_tbl_name} ($vars) VALUES {$q}";
    //    $this->db()->prepare($sql)->execute($data);
    // }

    public function update(){
      $keys = $this->_fields;
      $pkey = $this->_primery_key;
      unset($keys[$pkey]);
      $vars = implode(',',string_to_query_helper($keys,'`','var'));
      $sql = "UPDATE {$this->_tbl_name} SET $vars WHERE `{$this->_primery_key}` = :{$this->_primery_key}";
      $res = $this->db()->prepare($sql)->execute($this->_fields);
      return $res;
    }
    public function selectAll($fields= '*' , $cond = null,$val =null){
      if($cond == null && $val ==null)
      {
          $sql = "SELECT {$fields} FROM {$this->_tbl_name} Where 1 = 1";
      }
      else {
        $sql = "SELECT {$fields} FROM `{$this->_tbl_name}` WHERE `{$cond}` = '{$val}'";
      }
      // Model($sql);exit;
      $run =$this->db()->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
      return $run;
    }


    public function remove(){
      $pk = $this->_primery_key;
      $q = "DELETE  FROM {$this->_tbl_name} WHERE `{$pk}` = :{$pk}";

      $res = $this->db()->prepare($q)->execute([$pk => $this->_fields[$pk]]);
      return $res;
    }

    public function findby($value , $search){
        $q = "SELECT *  FROM {$this->_tbl_name} WHERE `{$search}` = :{$search}";
        $run= $this->db()->prepare($q);
        $run->execute([$search => $value]);
        $rows = $run->fetchAll();
        $result = $this->_convert_row_to_object($rows);
        $arr =[];
        for($i=0 ; $i<count($result) ; $i++){
          $arr[] =$result[$i]->_fields;
        }
        return $arr;
      }
      public function removeby($value_cond , $cond){
          $q = "DELETE  FROM {$this->_tbl_name} WHERE `{$cond}` = :{$cond}";
          $run= $this->db()->prepare($q);
          return $run->execute([$cond => $value_cond]);
        }

    public function get_limit($offset , $some ){
      $q = "SELECT * FROM {$this->_tbl_name} LIMIT $offset,$some";
      $data = $this->db()->query($q)->fetchAll(\PDO::FETCH_ASSOC);
      return $data;
    }
    public function count(){
      $sql = "SELECT * FROM {$this->_tbl_name}";
      return $this->db()->query($sql)->rowCount();
    }

    //function db return a object database (pdo)
    public function db()
    {
      return $this->_db;
    }

    // this function is magic function for set varibale ... you can search about this func in php manual..
    public function __set($varibale , $value)
    {
      if(array_key_exists($varibale,$this->_fields))
      {
        $this->_fields[$varibale] = $value;
      }
      else
      {
        echo 'ERROR : not found varibale in _fields';
      }
    }

    private function _convert_row_to_object($res){
        $classname = get_class($this);
        $objs = [];
        foreach ($res as $index => $row) {
            $obj = new $classname();
            $fields = array_keys($obj->_get_fields());
          foreach ($fields as $fieldName) {
            $obj->$fieldName = $row[$fieldName];
          }
          $objs[] = $obj;
        }
return $objs;
    }

    private function _get_fields(){
      return $this->_fields;
    }

    public function __call($func , $args){
      $funcName = strtolower($func);
      if(substr($funcName , 0 , strlen('findby'))  === 'findby'){
        $search = ltrim($funcName , 'findby');
        if(in_array($search , $this->_fields)){
          $args['search'] = $search;
          return call_user_method_array('findby',$this,$args);
        }
      }
    }
}
