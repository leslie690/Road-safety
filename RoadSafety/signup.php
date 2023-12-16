<?php
include('config/app.php');
include('codes/authentication.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body{
            background: wheat;
            background-size: cover;
            
        }

       
        
       

        form .head h1{
            text-align: center;
            font-size: 40px;
            color: black;
        }

        form .lower-btn{
            display: flex;
            
            
        }

        form .lower{
            margin-top: 20px;
            padding: 20px;
            width: 40%;
            margin: 10px;
            background-color: grey;
            opacity: 0.8;
        }

        form .lower label{
            font-size: 30px;
            color: white;
            font-weight: bold;
            letter-spacing: 3px;
        }

        form .lower input{
            width: 80%;
            font-size: 20px;
            outline: none;
            background: none;
            color: black;
            
           
        }
        form .submit{
            justify-content: center;
            text-align: center;
            margin-top: 20px;
            
        }
        form .submit input{
            width: 30%;
            font-size: 30px;
            border-radius: 30px;
            cursor: pointer;
        }

        form .btn{
            margin-top: 30px;
            text-align: center;
            font-size: 20px;
           bottom: 60px;
           letter-spacing: 4px;
        }

        form .btn a{
            text-decoration: none;
            color: crimson;
            border: 1px solid rgb(255, 255, 255);
            padding: 5px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="form">

    <?php include('message.php'); ?>
        <form action="" method="POST">
            <div class="head">
                <h1> SIGNUP HERE</h1>
            </div>
            <hr>
            <div class="lower-btn">
                <div class="lower">
                    <label for="">first name</label><br>
                    <input type="text" name="firstname" required ><br>
                    <label for="">last name</label><br>
                    <input type="text" name="lastname" required><br>
                    <label for="">surname name</label><br>
                    <input type="text"name="surname" required><br>
                    <label for="">Place of Accident</label><br>
                    <input type="text" name="placeofaccident" required><br>
               
               
                    <label for="">injurytype</label><br>
                    <input type="text"name="injurytype" required><br>
                    <label for="">email</label><br>
                    <input type="email"name="email" required><br>
                    <label for="">password</label><br>
                    <input type="password"name="password" required><br>
                    <label for="">confirm password</label><br>
                    <input type="password" name="cpassword"required><br>
                </div>
            </div>
           
           <div class="submit">
                <input type="submit" name="submit" value="Sign Up">
           </div>
           <div class="btn">
            <p>Don't Have Account? <a href="./login.php">Login</a> Here.</p>

           </div>
        </form>
    </div>
</body>
</html>