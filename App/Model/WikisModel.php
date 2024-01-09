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
        return $this->read("wikis");
    }
    
}