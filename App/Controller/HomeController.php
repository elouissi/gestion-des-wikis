<?php
namespace App\Controller;
use App\Controller\Controller; 
use App\Model\WikisModel;

class HomeController extends Controller{
    public function index() {
        $wikis = new WikisModel;
        $allWikis = $wikis->getallwikis();
        session_start();
        
        $this->render("View","home", compact('allWikis'));

    }
    public function search() {
        $input = $_POST['input'];
        $wikis = new WikisModel;
    
        if ($input == "all") {
            // Traiter le cas où l'input est "all" si nécessaire
            // ...
    
            // Exemple : renvoyer un message JSON
            $response = json_encode(['message' => 'All wikis']);
        } else {
            $allWikis = $wikis->searchwikis($input);
    
            // Formater les données en JSON
            $response = json_encode($allWikis);
        }
    
        // Envoyer la réponse JSON au client
        header('Content-Type: application/json');
        return $response;
      
       // Terminer le script après avoir envoyé la réponse
    }
        }


