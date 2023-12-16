<?php

include('../../config/app.php');
include_once('../controller/RoadController.php');


if(isset($_POST['delete']))
{
    $id = validateInput($db->conn, $_POST['delete']);
    $book = new RoadController;
    $result = $book->delete($id);
    if($result){
        redirect("Accident Deleted Successfully","../viewaccident.php");

    }else{
        redirect("Something Went Wrong","../add_accident.php");

    }
}

if(isset($_POST['update']))
{
    $id = validateInput($db->conn,$_POST['book_id']);
    $inputdata = [

        'mode' => validateInput($db->conn,$_POST['mode']),
        'casualty' => validateInput($db->conn,$_POST['casualty']),
        'minor' => validateInput($db->conn,$_POST['minor']),
        'major' => validateInput($db->conn,$_POST['major']),
        'dateof' => validateInput($db->conn,$_POST['dateof']),
    
    ];

    $book = new RoadController;
    $result = $book->update($inputdata, $id);
    if($result){
        redirect("Accident Updated Successfully","../viewaccident.php");

    }else{
        redirect("Something Went Wrong","../viewaccident.php");

    }
}

if(isset($_POST['submit']))
{
    $inputdata = [

    'mode' => validateInput($db->conn,$_POST['mode']),
    'casualty' => validateInput($db->conn,$_POST['casualty']),
    'minor' => validateInput($db->conn,$_POST['minor']),
    'major' => validateInput($db->conn,$_POST['major']),
    'dateof' => validateInput($db->conn,$_POST['dateof']),

    ];
    
    $book = new RoadController;
    $result = $book->create($inputdata);
    if($result){
        redirect("Accident Added Successfully","../viewaccident.php");
    }else{
        redirect("Something Went wrong","../add_accident.php");

    }
}


?>