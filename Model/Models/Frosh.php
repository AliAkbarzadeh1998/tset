<?php
namespace Model\Models;

use Model\Model;
class Frosh extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_fields=[
            'id'=>0,
            'id_agahi'=>0,
            'sanad'=>null,
            'gheymat'=>null,
            'gheymat1metr'=>null
        ];
    }
}