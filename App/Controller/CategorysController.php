<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;
use App\Model\CategorysModel;

class CategorysController {
    public function index() {
        $name_category=$_POST['name_category'];

        $Categorys = new CategorysModel;
        $allCategorys = $Categorys->add_category($name_category);
        
        include '../app/View/dashboard.php';
    }
}
    
