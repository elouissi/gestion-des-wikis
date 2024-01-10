<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;
use App\Model\TagsModel;
use App\Model\DashboardModel;


class TagsController extends Controller {
    public function index() {
        
        $name_tag=$_POST['name_tag'];

        $Tags = new TagsModel;
        $allTags = $Tags->add_tags($name_tag);
        
        header("location: /gestion-des-wikis/dashboard");
    }
    public function deletetags() {
        
        $id=$_GET['id'];

        $Tags = new TagsModel;
         $Tags->delete_tags($id);
        
        header("location: /gestion-des-wikis/dashboard");
    }
   
    public function editTags() {
        
        $id=$_GET['id'];

        $Tags = new TagsModel;
        $singleTags = $Tags->read_tags($id);
 

        
         $this->render("View","EditTags", compact('singleTags'));
        }
   
}
    
