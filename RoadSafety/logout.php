<?php

include('config/app.php');

include('codes/authentication.php');

session_start();
session_unset();
session_destroy();

header('location:index.php');

?>