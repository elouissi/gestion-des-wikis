<?php
namespace App\Controller;

class Controller
{
    
    public function render(string $nameFolder, string $nameFile,array $params = null): void
    {
        $filePath = "../app/{$nameFolder}/{$nameFile}.php";

        if (file_exists($filePath)) {
            if (is_array($params)) {
                // Crée des variables locales à la fonction pour chaque élément du tableau
                extract($params);
     
                // Inclut le fichier avec les variables locales
                include $filePath;
            } else {
                // Si aucun paramètre n'est passé, inclut simplement le fichier
                include $filePath;
            }
        } else {
            // Gestion de l'erreur si le fichier n'est pas trouvé
            echo "Erreur : Fichier de vue non trouvé.";
        }
        }
    
            public function validation_input(  $data): string {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        }
        

 
