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
                    <h4>ALT ACCIDENT RECORD</h4>
                </div>
                <div class="card-body">

                    <?php
                        if(isset($_GET['id']))
                        {
                            $book_id = validateInput($db->conn, $_GET['id']);
                            $book = new RoadController;
                            $result = $book->edit($book_id);

                            if($result)
                            {
                                ?>


                    
                    <form action="codes/roadcode.php" method="post">
                        <input type="hidden" name="book_id" value="<?=$result['id'] ?>">
                        <div class="mb-3">
                        <div class="mb-3">
                            <label for="">Accident Mode</label>
                            <input type="text " value="<?= $result['mode']  ?>" class="form-control" name="mode" required>
                        </div>
                            <label for="">Number Of Casualties</label>
                            <input type="number" value="<?= $result['casualty']  ?>" class="form-control" name="casualty" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Minor Accident</label>
                            <input type="text" value="<?= $result['minor']  ?>" class="form-control" name="minor" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Major Accident</label>
                            <input type="text" value="<?= $result['major']  ?>" class="form-control" name="major" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Date Of Occurance</label>
                            <input type="date" value="<?= $result['dateof']  ?>" class="form-control" name="dateof" required>
                        </div>

                        <div class="mb-3">
                            
                            <input type="submit" value="Update" class="btn btn-primary" name="update" >
                        </div>
                    </form>

                    
                    <?php
                            }else{
                                echo "<h4>No record found</h4>";
                            }
                        }else{
                            echo "<h4>Something Went Wrong</h4>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>


    
</div>
<?php

include('includes/footer.php');
include('includes/scrits.php');


?>