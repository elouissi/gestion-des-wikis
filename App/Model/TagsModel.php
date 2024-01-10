<?php
namespace App\Model;
 
use App\Database\Connection;
use PDO;


class TagsModel  extends Crud  {
 
    public function __construct(){

        parent::__construct();   
     }
     public function add_tags($name_tag){
        $data_insert = [
            'name' => $name_tag
        ];
    
        return $this->create("Tags", $data_insert);
    }
    public function delete_tags($id){
        return $this->delete("Tags",$id);
    }
    public function read_tags($id){
        return $this->seletTags($id);
    }
    
 
}