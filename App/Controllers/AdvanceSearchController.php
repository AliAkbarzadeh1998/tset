<?php
namespace App\Controllers;

use App\Controller;

class AdvancesearchController extends Controller
{
    public function testAction()
    {
        if (isset($_POST['search_rahn'])) {
            dump($_POST);
        }
    }
}
