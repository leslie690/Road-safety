<?php

include('config/app.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Road Safety Management</title>
    <style>
        header{
           background: blue;
           display: flex; 
           justify-content: space-around;
        }

        body{
            background: silver;

        }
        .logo{
            
            padding: 10px;
           
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .logo a{
            color: wheat;
            font-size: 25px;
            text-decoration: none;
        }

        .menu ul{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .menu ul li{
            padding: 10px;
            list-style-type: none;

        }

        .menu ul li a{
            text-decoration: none;
            color: white;
        }

        .account ul{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .account ul li{
            padding: 10px;
            list-style-type: none;
            text-decoration: none;
            color: white;
        }

        .dropdown{
            min-width: 130px;
            margin: 0;
            padding: 0;
            padding: 15px 10px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            gap: 12px;
            position: absolute;
            top: 80px;
            border-radius: 8px;
            background-color: wheat;
            box-shadow: rgba(0, 0, 0, 0.4) 0 25px 50px 12px;
            opacity: 0;
            visibility: hidden;
            transition: 0.2s ease-in-out;
        }

        li:hover .dropdown{
            opacity: 1;
            visibility: visible;
            top: 60px;
        }

        .dropdown a{
            text-decoration: none;
            font-size: 20px;
            border-bottom: 2px solid black;
            padding-bottom: 10px;
            background-color: white;
            color: black;
            padding: 0;
            margin: 0;
        }
        .dropdown:hover{
            background: green;
            
        }
        .dropdown a:hover{
            background-color: cyan;
        }

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <a href="#">RSM</a>
        </div>
       

        <div class="account">
            <ul>
                <li>account
                    <div class="dropdown">
                        <a href="./signup.php
                        ">Signup</a>
                        <a href="./login.php">Login</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    <div class="content">
        <center>
        <h1 class="menu">
            ROAD SAFETY MANAGEMENT
        </h1>
        </center>
       
    </div>
</body>
</html>