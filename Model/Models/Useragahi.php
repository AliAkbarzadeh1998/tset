<?php
namespace Model\Models;


use Model\Model;

class Useragahi extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_fields=[
            'id'=>0,
            'id_user'=>0,
            'id_agahi'=>0
        ];
    }
}