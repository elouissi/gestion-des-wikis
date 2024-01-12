<?php

namespace App\Model;

use App\Database\Connection;
use PDO;
use PDOException;

class Crud 
{ 
    protected   $conn;
    public function __construct()
    {
        $this->conn = new Connection();
    }

   
    public function create($tableName, $data)
    {
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));

            $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
            $stmt = $this->conn->getConnection()->prepare($query);
            $stmt->execute($data);

          
        } catch (PDOException $e) {
            echo "Error creating record: " . $e->getMessage();
        }
    }
   

  
    public function read($tableName)
    {
        try {
            $query = "SELECT * FROM $tableName";
            $stmt = $this->conn->getConnection()->prepare($query);
            $stmt->execute();

            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records; // Return the fetched records
        } catch (PDOException $e) {
            echo "Error fetching records: " . $e->getMessage();
            return []; // Return an empty array in case of an error
        }
    }
        public function update($tableName, $data, $id)
        {
            try {
                $update_arr = [];
                foreach ($data as $column => $value) {
                    $update_arr[] = "$column = :$column";
                }
                $update_arr = implode(", ", $update_arr);
        
                $query = "UPDATE $tableName SET $update_arr WHERE id = :id";
                $data['id'] = $id;
        
                $stmt = $this->conn->getConnection()->prepare($query);
                $stmt->execute($data);
                    
                echo "Record updated successfully!";
            } catch (PDOException $e) {
                echo "Error updating record: " . $e->getMessage();
            }
        }
        

    public function delete($tableName, $id)
    {
        try {
            $query = "DELETE FROM $tableName WHERE id = :id";

            // Prepare and execute the SQL statement
            $stmt = $this->conn->getConnection()->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            // Output a success message
            echo "Record deleted successfully!";
        } catch (PDOException $e) {
            // Handle errors
            echo "Error deleting record: " . $e->getMessage();
        }
    }
    public function selectWhere()
    {
        $sql = "SELECT * FROM wikis WHERE status = 'publish'";
        $stmt = $this->conn->getConnection()->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function seletTags($id)
    {
        $sql = "SELECT * FROM Tags WHERE id = $id";
        $stmt = $this->conn->getConnection()->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
   
    public function seletCategorys($id)
    {
        $sql = "SELECT * FROM categorys WHERE id = $id";
        $stmt = $this->conn->getConnection()->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function selectOne($id)
    {
        $sql = "SELECT wikis.*, 
                users.username AS user_name,
                categorys.name AS category_name
        FROM wikis  
        JOIN users ON wikis.userId = users.id  
        JOIN categorys ON wikis.categoryId = categorys.id  
        WHERE wikis.id =  $id";
        $stmt = $this->conn->getConnection()->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function selectTags($id)
    {
        $sql = "SELECT t.name FROM wikitags
        INNER JOIN tags t
        ON wikitags.tagId=t.id
        WHERE wikitags.wikiId = $id LIMIT 100";
        $stmt = $this->conn->getConnection()->prepare($sql);
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
   
    
}
