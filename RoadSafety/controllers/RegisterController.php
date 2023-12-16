<?php
// include('config/app.php');
class Registercontroller
{
    public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }

    public function registration($fname,$lname,$sname,$placeofaccident,$injurytype,$email,$password)
    {
        $register_query = "INSERT INTO users_tbl (firstname,lastname,surname,placeofaccident,injurytype,email,password) VALUES('$fname', '$lname','$sname','$placeofaccident','$injurytype','$email','$password')";
        $result = $this->conn->query($register_query);
        return $result;
    }
    public function isUserExists()
    {

        $checkUser = "SELECT email FROM  users_tbl WHERE email='$email' LIMIT 1";
        $result = $this->conn->query($checkUser);
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }
    public function confirmpassword($password,$cpassword)
    {
        if($password == $cpassword){
            return true;


        }else{
            return false;
        }
    }

}

?>