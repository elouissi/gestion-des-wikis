<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Model\WikisModel;
use App\Model\CategorysModel;

class CategorysController  extends Controller
{
    public function index()
    {
        $name_category = $_POST['name_category'];

        $Categorys = new CategorysModel;
        $allCategorys = $Categorys->add_category($name_category);


        header("location: /gestion-des-wikis/dashboard");
    }
    public function readOneCtegory()
    {


        $id = $_GET['id'];

        $Categorys = new CategorysModel;
        $singleCategory = $Categorys->read_categorys($id);



        $this->render("View", "Edit", compact('singleCategory'));
    }

    public function EditCategory()
    {

        $name = $_POST['name'];
        $id = $_POST['id'];


        $TagEdit = new CategorysModel;
        $TagEdit->Edit_categorys($name, $id);
        header("location: /gestion-des-wikis/dashboard");
    }
    public function deletCategory(){
          
        $id=$_GET['id'];

        $Categorys = new CategorysModel;
         $Categorys->delete_Categorys($id);
        
        header("location: /gestion-des-wikis/dashboard");
    }

    }

