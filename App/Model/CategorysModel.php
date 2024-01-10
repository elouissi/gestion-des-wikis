<?php
namespace App\Model;
 
use App\Database\Connection;
use PDO;


class CategorysModel  extends Crud  {
 
    public function __construct(){

        parent::__construct();   
     }
     public function add_category($name_category){
        $data_insert = [
            'name' => $name_category
        ];
    
        return $this->create("categorys", $data_insert);
    }
    public function read_categorys($id){
        return $this->seletCategorys($id);
    }
    public function Edit_categorys($name,$id){
        $update = [
            'name' => $name
        ];
        
        return $this->update("categorys ",$update,$id);
    }
 
}