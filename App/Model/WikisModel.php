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
    public function deletewikitag($id)
    {
   
        
        return $this->deletewt("wikitags" ,$id);
    }
    public function ajouter_wiki( $title ,$content, $description , $category ,$id_user){
        $data_wiki=[
            
           'title'=> $title ,
           'content' => $content ,
           'description' => $description ,
            'categoryId' => $category ,
            'userId' => $id_user,
     
        ];
        

        return $this->create("wikis", $data_wiki);
    }
    public function return_last_id(){
        return  $this->conn->getConnection()->lastInsertId();
        
    }
    public function ajouter_tag($id,$tag){
        
        $data_tag =[
            'wikiId' => $id,
            'tagId' => $tag
        ];
        // exit(var_dump($tags));
    
        return $this->create("wikitags", $data_tag);

    }
    public function afficher_one ($id) {
        return $this->selectOne($id);

    }
    public function afficher_tags($id){
        return $this->selectTags($id);
    }
    public function singlewiki($id){
        return $this->selectSingleWiki($id);
    }
    public function editwiki($title,$content,$description,$category,$id){
        $updateData = [
            'title' => $title,
            'description' => $description,
            'content' => $content,
            'categoryId' => $category
        ];
        return $this->update("wikis", $updateData , $id);

    }
    
    public function edittag($id,$tag){
        $updateData = [
            'wikiId' =>  $id,
        
            'tagId' => $tag
           
        ];
        return $this->updatetag("wikitags", $updateData , $id);

    }
    public function searchwikis($input){
        return $this->search($input);
    }
 
    
}