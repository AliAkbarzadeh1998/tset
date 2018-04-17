<?php namespace App;
use App\View;
class  Controller{
    public function Render($path , $data = null ){
        View :: render($path , $data);
    }
}