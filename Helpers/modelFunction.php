<?php
function string_to_query_helper($array,$StartMark='`',$EndMark=null){
    if($EndMark === null){
        $EndMark = $StartMark;
    }

    if($EndMark == 'var'){
        $temp = array();
        foreach ($array as $key => $value) {
            $temp[] = $StartMark . $key . $StartMark . '= :'.$key;
        }
        return $temp;

    }else{
        $temp = array();
        foreach ($array as $key => $value) {
            $temp[] = $StartMark . $key . $EndMark;
        }
        return $temp;
    }
}
function strin_to_query_multi($array){
    $var = null;

    $var .= '('.implode(',',string_to_query_helper($array,':','')).'),';

    return rtrim($var,',');
}
function creat_menus($menu , $submenu){


    return $menus;
}