<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;
use App\Model\DashboardModel;   

class WikisController {
    public function acceptewikis() {
        
        $id=$_GET['id'];
        $wikis = new WikisModel;
        $wikis->acceptewikis($id);

        
        header("location: /gestion-des-wikis/dashboard");
    }
    public function deletewikis() {
        $id=$_GET['id'];
        $wikis = new WikisModel;
        $wikis->deletewikis($id);

        
        header("location: /gestion-des-wikis/dashboard");
    }
    public function hashwikis() {
        $id=$_GET['id'];
        $wikis = new WikisModel;
        $wikis->hashwikis($id);

        
        header("location: /gestion-des-wikis/dashboard");
    }
}