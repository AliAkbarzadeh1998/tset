<?php
namespace App\Controllers;
use App\Controller;

class PageController extends Controller
{
    /*
     *
     * in controller baray page haye site estefade mishavd be onvane mesal
     *  home
     *  about us
     *  and more ...
     *  baraye single page agahi va mavared digar yek controller digar eajad shavad
     *
     */
    public function indexAction(){
        $this->render('page.homePage',['firstname'=>'abbas']);
    }

    public function searchAction()
    {
        $data['title_page'] = 'بنگاه خونه';
        $this->render('search.search', $data);
    }
}