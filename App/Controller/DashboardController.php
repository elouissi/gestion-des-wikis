<?php 
namespace App\Controller;
use App\Controller\Controller;
use App\Model\DashboardModel;

class DashboardController {
    public function index() {
        $users = new DashboardModel;
        $users = $users->getallusers();

        $wikis = new DashboardModel;
        $wikis = $wikis->getallwikis();

        $tags = new DashboardModel;
        $tags = $tags->getalltags();
        
       
        include "../app/View/dashbord/Dashboard.php";
 
    }
}
