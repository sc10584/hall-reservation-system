<?php


?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $fetch_info['name'] ?> | Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </head>

    <body>

        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2>Upload The Bank Slip</h2>
                </div>

                <div class="col-12 col-md-6">
                    <h2>Pay via online</h2>  
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 col-md-6">
                    <form method="POST" action="paymentprocess.php" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="myimage">
                        <input type="submit" class="form-control btn btn-secondary mt-1" name="submit_image" value="Upload">
                    </form>
                </div>

                <div class="col-12 col-md-6">
                <span><a href="paymentprocess.php">Pay</span> 
                </div>
            </div>
        </div>
        

        

    </body>
</html>