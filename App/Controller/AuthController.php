<?php

namespace App\Controller;

use App\Controller\Controller;
use App\Model\UsersModel;
use App\Model\WikisModel;
use App\Model\CategorysModel;


class AuthController extends Controller
{

    function index(): void
    {
        // TODO: Implement index() method.
    }


    /**
     * @throws RandomException
     * @throws Exception
     */
    function create(): void
    {
     
        session_start();
         
        $this->Register();

         // TODO: Implement create() method.
        $name = $this->validation_input($_POST["name"]);
         $email = $this->validation_input($_POST["email"]);
         $password = $this->validation_input($_POST["password"]);
        $confirmation_password = $this->validation_input($_POST["confirmation_password"]);
      
        if(!(empty($name)|| empty($email) || empty($password) || empty($confirmation_password) )){
            if($password==$confirmation_password){
                $user=new UsersModel();
                $password_hash = password_hash($password, PASSWORD_BCRYPT);
         
                    $user->add_User($name,$email,$password_hash);
                     $_SESSION["name"] = $name ;
 
                    

                    header("location: /gestion-des-wikis/home");             
            }
            else
            
            echo "<script> alert('password incorrect') </script>";
        }
        else   
        echo "<script> alert('entere les infos') </script>";


    }

    
    // public function update(int $id): void
    // {
    //     // TODO: Implement update() method.

    //     $user=new user($_POST["full_name"],$_POST["email"],$_POST["age"],$_POST["phone"]);
    //     $user->setId($id);

    //     $user_find=$user->check_auth_login();
    //     if($user_find!=null){
    //         if($user_find->id!=$id){
    //             header("Location: /streamstadium/Auth/profile/email_exist");
    //             die;
    //         }
    //     }
    //     $user->edit();
    //     session_start();
    //     $_SESSION["name"]=$_POST["full_name"];
    //     //header("Location: /streamstadium/Auth/profile/update_succes");
    //     header("Location: /streamstadium/Auth/profile");
    //     die;
    // }

    function Register()
    {
         // TODO: Implement login() method.
        $this->render("View","Register");
    }
    function sign_in()
    {
         // TODO: Implement login() method.
        $this->render("View","Log_in");
    }
    public function login(){
       
        session_start();
         $email = $this->validation_input($_POST["email"]);
        $password = $this->validation_input($_POST["password"]);
        if(!(empty($password) || empty($email))){
            $user=new UsersModel();
           $row = $user->getUserByEmail($email);
             if ($row !== null){
                if(password_verify($password,$row['password'])){
                    $_SESSION['email'] = $email;
                    $_SESSION['name']=$row['username'] ;
                    $_SESSION['id'] = $row['id'];
                     $_SESSION['role'] = $row['roleId'];
                   

                    header("location: /gestion-des-wikis/home");                    
                       die;
                }
                else{
                    echo "<script> alert('password incorrect') </script>";
                    die;
                }
            }
            else{
                echo "<script> alert('email not found') </script>";
                die;
            }

        }
        else{
            echo "<script> alert('entere les infos') </script>";
            die;
        }
    
     
 
    }
 


    
    // function registe(): void
    // {
    //     session_start();
    //     // TODO: Implement login() method.
    //     $this->render("views","register","Register");
    // }
    // function profile($token=null): void
    // {
    //     session_start();
    //     if(isset($_SESSION["id_user"])){
    //         $user = new user();
    //         $user->setId($_SESSION["id_user"]);
    //         $user->show();

    //         if($token!=null){
    //             $currentdate=date("U");
    //             $verification = new Verification("null",$token,$currentdate);
    //             $check_verif=$verification->check_token();
    //             if($check_verif!=null){
    //                 $us=new user("null",$check_verif->email);
    //                 $u= $us->check_auth_login();
    //                 $us->setId($u->id);
    //                 $us->verify();
    //                 $verif_delete=new Verification($check_verif->email);
    //                 $verif_delete->destroy();
    //             }
    //         }
    //         $user->show();

    //         $this->render("views","profile","Profile",$user);
    //     }
    //     else header("Location: /streamstadium/Auth/sign_in");

    // }
    // public function verify(string $email):void{

    //     include(__DIR__ . "/../PhpMailer/mail.php");
    //     $token = bin2hex(random_bytes(8));
    //     $expire = date("U")+1800;
    //     $url="localhost:8080/streamstadium/auth/profile/".$token;
    //     $mail->addAddress($email,"test");
    //     $mail->Subject = "Confirmation your Compte for StreamStadium";
    //     $mail->Body = "<html><head></head>
    //                 <body>
    //                 <p>the link to Confirm your compte is below.if you did not make this request, you can ignore this email </p>
    //                 <p>Here is your Confirmation reset link: </p> <br>
    //                 <a href='$url'>$url</a> 
    //                 </body>
    //                 </html>";
    //     $mail->send();
    //     $verification=new Verification($email,$token,$expire);
    //     $verification->add();
    //     header("Location: /streamstadium/Auth/profile");

    // }
    public function log_out(){
            session_start();
             session_destroy();
           
            header("location: /gestion-des-wikis/home"); 
    }
}