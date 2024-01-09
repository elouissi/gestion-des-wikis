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

        
        include '../app/View/dashboard.php';
    }
    public function deletewikis() {
        $id=$_GET['id'];
        $wikis = new WikisModel;
        $wikis->deletewikis($id);

        
        include '../app/View/dashboard.php';
    }
    public function hashwikis() {
        $id=$_GET['id'];
        $wikis = new WikisModel;
        $wikis->hashwikis($id);

        
        include '../app/View/dashboard.php';
    }
}
