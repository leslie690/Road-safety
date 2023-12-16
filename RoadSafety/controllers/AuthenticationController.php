<?php

class AuthenticationController
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
        $this->checkIsLoggedIn();
    }

    public function admin(){
        $user_id = $_SESSION['auth_user']['user_id'];
        $checkAdmin = "SELECT id, role_as FROM users_tbl WHERE id='$user_id' and role_as='1' LIMIT";
        $result = $this->conn->query($checkAdmin);

        if($result->num_rows ==1){
            return true;
        }else{
            redirect("You are not authorised as admin", "index.php");
        }
    }

    private function checkIsLoggedIn()
    {
        if(!isset($_SESSION['authentication']))
        {
            redirect("Login to access the page", "login.php");
            return false;
        }
        else
        {
            return true;
        }
    }

    public function authDetail()
    {
        $checkAuth = $this->CheckIsLoggedIn();
        if($checkAuth)
        {
            $user_id = $_SESSION['auth_user']['user_id'];

            $getUserData = "SELECT * FROM users_tbl WHERE id='$user_id' LIMIT 1";
            $result = $this->conn->query($getUserData); 
            if($result->num_rows> 0){
                $data = $result->fetch_assoc();
                return $data;
            }
            else{
                redirect("something went wrong","login.php");
            }
        }
    }
}

$authenticated = new AuthenticationController;


?>