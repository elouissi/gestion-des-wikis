<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;
use App\Model\DashboardModel;   

class WikisController extends Controller {
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
    public function Addwikis() {
        
        $tags = new DashboardModel;
        $tags = $tags->getalltags();

        $categorys = new DashboardModel;
        $categorys = $categorys->getallcategorys();
        session_start();
        if(isset($_SESSION['name'])){
        $this->render("View","AddWikis", compact('categorys','tags'));
        }else{
                   
        header("location: /gestion-des-wikis/Auth/Register");
        }
    }

}
