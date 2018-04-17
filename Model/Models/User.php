<?php
namespace Model\Models ;

use Model\Model;
class User extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_fields=[
          'id'=>0,
          'username'=>null,
          'password'=>null,
          'email'=>null,
          'phoneNumber'=>null,
          'addres'=>null
        ];
    }
}