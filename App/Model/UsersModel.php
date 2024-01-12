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
      public function getUserByEmail($email)
      {
          $query = "SELECT * FROM users WHERE email = :email";
          $stmt = $this->conn->getConnection()->prepare($query);
      
          // Liez le paramètre :email avec la valeur de $email
          $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      
          // Exécutez la requête préparée
          if (!$stmt->execute()) {
              // Gestion de l'erreur si l'exécution échoue
              echo "Il y a un problème d'exécution de la requête";
              return null;
          }
      
          // Utilisez fetch pour obtenir une seule ligne
          $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        
      }
      
      
        }