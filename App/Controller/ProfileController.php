<?php 
namespace App\Controller;
use App\Controller\Controller;

class ProfileController {
    public function index() {
        include "../app/View/profile.php";
    }
}
