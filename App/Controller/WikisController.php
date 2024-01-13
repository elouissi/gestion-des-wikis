<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;
use App\Model\DashboardModel;   
 

class WikisController extends Controller {
    public function acceptewikis() {
        
        $id=$_GET['id'];
        $wikis = new WikisModel;
        $wikis->acceptewikis($id);

        
        header("location: /gestion-des-wikis/dashboard");
    }
    public function deletewikis() {

        $id=$_GET['id'];
         $wikis = new WikisModel;
        $wikis->deletewikis($id);
        $wikis->deletewikitag($id);

        
        header("location: /gestion-des-wikis/dashboard");
    }
    public function hashwikis() {
        $id=$_GET['id'];
        $wikis = new WikisModel;
        $wikis->hashwikis($id);

        
        header("location: /gestion-des-wikis/dashboard");
    }
    public function Addwikis() {
        
        $tags = new DashboardModel;
        $tags = $tags->getalltags();

        $categorys = new DashboardModel;
        $categorys = $categorys->getallcategorys();
        session_start();
        if(isset($_SESSION['name'])){
        $this->render("View","AddWikis", compact('categorys','tags'));
        }else{
                   
        header("location: /gestion-des-wikis/Auth/Register");
        }
    }
    public function ajouter_wiki(){
        session_start();
        $title = $_POST['title'];
        $tags = $_POST['tags'];
         $content = $_POST['content'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $id_user = $_SESSION['id'];
  
        $wikis = new WikisModel;
        $wiki = $wikis->ajouter_wiki($title ,$content, $description , $category,$id_user); 
         $id = $wikis->return_last_id();
        // var_dump($tags);die;
        foreach($tags as $tag){
        $taginsert = $wikis->ajouter_tag($id,$tag);
        }
        
        header("location: /gestion-des-wikis/dashboard");


    }
    public function affichage_wiki(){
        session_start();
        $id = $_GET['id'];
        $wikis = new WikisModel;
        $one_wiki =$wikis->afficher_one($id);
        $tags =$wikis->afficher_tags($id);
        // exit(var_dump($one_wiki));
        $this->render("View","Single_Page_Wiki", compact('one_wiki','tags'));

        
    }
    public function modifierwikis(){
        $id = $_GET['id'];
        $wikis = new WikisModel;
        $tags = new DashboardModel;
        $tags = $tags->getalltags();

        $categorys = new DashboardModel;
        $categorys = $categorys->getallcategorys();
        $one_wiki =$wikis->afficher_one($id);
          // exit(var_dump($one_wiki));
          $this->render("View","EditWiki", compact('one_wiki','tags','categorys'));

    }
    public function editwiki(){
        $id = $_POST['id'];
        $title = $_POST['title'];
        // $tags = $_POST['tags'];
         $content = $_POST['content'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $wikis = new WikisModel;
        $editwiki = $wikis->editwiki($title,$content,$description,$category,$id);
        header("location: /gestion-des-wikis/dashboard");
   

    }
    
    

}
