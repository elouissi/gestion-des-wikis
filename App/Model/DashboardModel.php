<?php
namespace App\Model;
 
use App\Database\Connection;
use PDO;


class DashboardModel  extends Crud  {
 
    public function __construct(){

        parent::__construct();   
     }
    public function getallusers(){
        return $this->read("users");
           
    }
    public function getallwikis(){
        return $this->read("wikis");
        
    }

    public function getAlltags(){
        return $this->read("tags");
    }
}