<?php
namespace Model\Models;

use Model\Model;
class Rahn extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->_fields=[
            'id'=>0,
            'id_agahi'=>0,
            'rahn'=>null,
            'ejare'=>null
        ];
    }
}