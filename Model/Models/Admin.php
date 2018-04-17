<?php namespace Model\Models;
/*
 * class admin baraye admin hay to data base mibashd
 * baraye auto load kardan az namespace estefade shode
 * agar kar nakard az function __autoload() estefade shavad
 *
 */

use Model\Model;
class Admin extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_fields = [
            'id'=>0,
            'username'=>null ,
            'password'=>null ,
            'email' => null
        ];
    }
}