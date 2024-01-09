<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;

class HomeController {
    public function index() {
        $wikis = new WikisModel;
        $allWikis = $wikis->getallwikis();
        
        include '../app/View/home.php';
    }
}

