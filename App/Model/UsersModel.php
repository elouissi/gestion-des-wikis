<?php
namespace App\Model;
 

use App\Database\Connection;
use App\Model\Crud;
use PDO;

class UsersModel extends Crud  {
 
    public function __construct(){

        parent::__construct();   
     }

      public function register(){

      }
      public function add_User($name,$email,$password_hash)    
        {
            $data_insert = [
                'username' => $name,
                'email' => $email,
                'password' => $password_hash
            ];
        
          return $this->create("users",$data_insert);
      }
      
        }