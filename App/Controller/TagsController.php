<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;
use App\Model\TagsModel;
use App\Model\DashboardModel;

class TagsController extends DashboardController{
    public function index() {
        $name_tag=$_POST['name_tag'];

 
        $users = new DashboardModel;
        $users = $users->getallusers();

        $wikis = new DashboardModel;
        $wikis = $wikis->getallwikis();

        $tags = new DashboardModel;
        $tags = $tags->getalltags();

        $categorys = new DashboardModel;
        $categorys = $categorys->getallcategorys();
        $Tags = new TagsModel;
        $allTags = $Tags->add_tags($name_tag);
        
        include '../app/View/dashboard.php';
    }
}

