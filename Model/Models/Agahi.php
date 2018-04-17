<?php
namespace Model\Models;
use Model\Model;

class Agahi extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_fields=[
        'id'=>0,
        'title'=>null,
        'discription'=>null,
        'rooms'=>null,
        'addres'=>null,
        'pics'=>null,
        'metraj'=>null,
        'typeHome'=>null,
        'parking'=>null,
        'tedadVahed'=>null,
        'otherOptions'=>null,
        'timeEmpty'=>null,
        'status'=>null];
    }

}