<?php

include('../config/app.php');
include_once('../controllers/AuthenticationController.php');
$authenticated = new AuthenticationController;

include_once('controller/RoadController.php');




include('includes/header.php');


?>

<div class="container-fluid px-4">
  
   

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>REGISTER NEW ACCIDENT </h4>
                </div>
                <div class="card-body">
            
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Accident Mode</th>
                                    <th>Number of Casualties</th>
                                    <th>Minor Accident</th>
                                    <th>Major Accident</th>
                                    <th>Date of Occurrance</th>
                                    <th>edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $book = new RoadController;
                                    $result = $book->index();
                                    if($result){
                                        foreach($result as $row){
                                            ?>
                                                <tr>
                                                    <td><?= $row['id'] ?></td>
                                                    <td><?= $row['mode'] ?></td>
                                                    <td><?= $row['casualty'] ?></td>
                                                    <td><?= $row['minor'] ?></td>
                                                    <td><?= $row['major'] ?></td>
                                                    <td><?= $row['dateof'] ?></td>
                                                    <td>
                                                        <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-success">Edit</a>
                                                    </td>
                                                    <td>
                                                        <form action="codes/roadcode.php" method="POST">
                                                            <button type="submit" name="delete" class="btn btn-danger" value="<?= $row['id'] ?>">Delete</button>
                                                        </form>
                                                        
                                                    </td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                    else{
                                        echo "No record Found";
                                    }
                                 ?>
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    
</div>
<?php

include('includes/footer.php');
include('includes/scrits.php');


?>