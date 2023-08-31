<?php 
class User{
    private $con;

    function __construct(){
        $this->con = new mysqli("localhost","root","","practice-database-1");
    }

//  php login code start .....

    function login($userName, $userPass){
        if(empty($userName)){
            echo '<p class="alert alert-danger my-2"><strong>Error:</strong> Username/Email is required </p>';
        }
        else if(empty($userPass)){
            echo '<p class="alert alert-danger my-2"><strong>Error:</strong> Password is required </p>';
        }
        else{
         $result = $this->con->query("SELECT* FROM tbl_user WHERE userName='$userName' AND pass='$userPass'");

            if($result->num_rows > 0){
                session_start();
                $data = $result->fetch_assoc();
                $_SESSION['userName']= $data['userName'];
                $_SESSION['userEmail']= $data['email'];
                $_SESSION['userPhone']= $data['phone'];
                $_SESSION['userRole']= $data['role'];
                header("location: dashboard.php");
            }
            else{
                echo '<p class="alert alert-danger my-2"><strong>Error:</strong> invalid user name and password </p>';
            }

           
        }
    }
}



?>