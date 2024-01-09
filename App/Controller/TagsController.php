<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;
use App\Model\TagsModel;

class TagsController {
    public function index() {
        $name_tag=$_POST['name_tag'];

        $Tags = new TagsModel;
        $allTags = $Tags->add_tags($name_tag);
        
        include '../app/View/dashboard.php';
    }
}
    
