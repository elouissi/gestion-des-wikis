<?php 
namespace App\Controller;
use App\Controller\Controller;

class SigninController {
    public function index() {
        include("../app/View/signin.php");
    }
}
