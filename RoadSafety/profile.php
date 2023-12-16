<?php

include('config/app.php');
include_once('controllers/AuthenticationController.php');
include('codes/authentication.php');

$data = $authenticated->authDetail();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>

        </li>

        <li class="nav-item">
            <a href="home.php" class="nav-link">home</a>

        </li>
    </ul>
  </nav>

    <div class="py-5">
        <div class="container">
            <?php
            include('message.php');
            ?>
            <h1>My Profile</h1>
            <hr>
            <h4>First Name:  <?= $data['firstname'].' '.$data['lastname']; ?></h4>
            <h4>Email:  <?= $data['email']; ?></h4>
        </div>
    </div>
</body>
</html>