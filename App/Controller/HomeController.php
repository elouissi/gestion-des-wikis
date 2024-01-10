<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;

class HomeController extends Controller{
    public function index() {
        $wikis = new WikisModel;
        $allWikis = $wikis->getallwikis();
        
        $this->render("View","home", compact('allWikis'));

    }
}

