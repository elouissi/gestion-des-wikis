<?php 
namespace App\Controller;
use App\Controller\Controller;
use App\Model\DashboardModel;
use App\Model\WikisModel;

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


        session_start();
        $id = $_SESSION['id'];
        
        $singlewiki = new WikisModel;
        $singlewiki = $singlewiki->singlewiki($id);
      

        $this->render("View","dashboard", compact('users','wikis', 'categorys','tags','singlewiki'));
 
        
        
       
 
    
   
    
     

   
    }

 
}