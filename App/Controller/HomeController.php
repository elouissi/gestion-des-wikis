<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;

class HomeController extends Controller{
    public function index() {
        $wikis = new WikisModel;
        $allWikis = $wikis->getallwikis();
        session_start();
        
        $this->render("View","home", compact('allWikis'));

    }
    public function search(){
        $input = $_POST['input'];
        $wikis = new WikisModel;
        $allWikis = $wikis->getallwikis();
        if ($input == "all"){
            $this->render("View","Search", compact('allWikis'));
               
 
        }else{
           $allWikis= $wikis->searchwikis($input);
            $this->render("View","Search", compact('allWikis'));
        }
        
    } 
        
    }


