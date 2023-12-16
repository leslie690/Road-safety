<?php
include('config/app.php');
include('codes/authentication.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body{
            background: purple;
            background-size: cover;
            
        }
        .form{
            background-color: black;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            justify-content: center;
            align-items: center;
            align-content: center;
            margin-top: 10%;
            height: 63vh;
            opacity: 0.8;
            border-radius: 20px;
        }
        form .head{
            background: red;
            padding: 5px;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
        }

        form .head h1{
            text-align: center;
            font-size: 40px;
        }

        form .lower{
            margin-top: 20px;
            padding: 20px;
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
            color: white;
           
        }
        form .submit{
            justify-content: center;
            text-align: center;
            
        }
        form .submit input{
            width: 30%;
            font-size: 20px;
            border-radius: 30px;
            cursor: pointer;
        }

        form .btn{
            text-align: center;
            font-size: 20px;
           bottom: 60px;
           color: #fff;
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
        <?php include('message.php') ?>
        <form action="" method="POST"> 
            <div class="head">
                <h1> LOGIN HERE</h1>
            </div>
           <div class="lower">
                <label for="">Email</label><br>
                <input type="email" name="email"><br>
                <label for="">Password</label><br>
                <input type="password" name= "password"><br>

           </div>
           <div class="submit">
                <input type="submit" name="login">
           </div>
           <div class="btn">
            <p>Don't Have Account? <a href="./signup.php">Sign Up</a> Here.</p>
           </div>
        </form>
    </div>
</body>
</html>