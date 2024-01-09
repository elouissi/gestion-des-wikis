<?php
namespace App\Model;
 

use App\Database\Connection;
use App\Model\Crud;
use PDO;

class WikisModel extends Crud  {
 
    public function __construct(){

        parent::__construct();   
     }
 
    public function getallwikis()
    {
        return $this->selectWhere();
    }
    public function acceptewikis($id)
    {
        $updateData = [
            'status' => 'publish'
        ];
        return $this->update("wikis",  $updateData ,$id);
    }
    public function  hashwikis($id){

        $hashData = [
            'status' => 'hashing'
        ];
        return $this->update("wikis", $hashData , $id);
    }
    public function deletewikis($id)
    {
        
        return $this->delete("wikis" ,$id);
    }
    
}