<?php

include('../config/app.php');
include_once('../controllers/AuthenticationController.php');
$authenticated = new AuthenticationController;




include('includes/header.php');


?>

<div class="container-fluid px-4">
  
   

    <div class="row mt-4">
        <div class="col-md-12">

            <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Add Accident</h4>
                </div>
                <div class="card-body">
                    
                    <form action="codes/Roadcode.php" method="post">
                        <div class="mb-3">
                        <div class="mb-3">
                            <label for="">Accident Mode</label>
                            <input type="text " class="form-control" name="mode" required>
                        </div>
                            <label for="">Number Of Casualties</label>
                            <input type="number" class="form-control" name="casualty" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Minor Accident</label>
                            <input type="text" class="form-control" name="minor" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Major Accident</label>
                            <input type="text" class="form-control" name="major" required>
                        </div>
                        <div class="mb-3">
                            <label for="">Date Of Occurance</label>
                            <input type="date" class="form-control" name="dateof" required>
                        </div>

                        <div class="mb-3">
                            
                            <input type="submit" class="btn btn-primary" name="submit" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
</div>
<?php

include('includes/footer.php');
include('includes/scrits.php');


?>