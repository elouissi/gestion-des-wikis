<?php 
namespace App\Controller;
use App\Controller\Controller;
use App\Model\DashboardModel;

class DashboardController extends Controller    {
    public function index() {
        $users = new DashboardModel;
        $users = $users->getallusers();

        $wikis = new DashboardModel;
        $wikis = $wikis->getallwikis();

        $tags = new DashboardModel;
        $tags = $tags->getalltags();

        $categorys = new DashboardModel;
        $categorys = $categorys->getallcategorys();

        $this->render("View","dashboard", compact('users','wikis', 'categorys','tags'));
        
       
        // include "../app/View/Dashboard.php";
       
 
    }
    
    
     

   
    }

 
