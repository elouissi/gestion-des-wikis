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
   
    public function readOneTags() {
  
        
        $id=$_GET['id'];

        $Tags = new TagsModel;
        $singleTags = $Tags->read_tags($id);
 

        
         $this->render("View","Edit", compact('singleTags'));
        }
   
    public function EditTags() {
        
        $name=$_POST['name'];
        $id = $_POST['id'];
        

        $TagEdit = new TagsModel;
         $TagEdit->Edit_tags($name,$id);
 

        
        header("location: /gestion-des-wikis/dashboard");
        }
   
}
    
