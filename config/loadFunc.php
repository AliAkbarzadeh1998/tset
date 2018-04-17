<?php

foreach(glob('Helpers/*.php') as $lib){
    require_once $lib;
}
