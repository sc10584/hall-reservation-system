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

        <?php
       /* while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {

            //echo "User : {$row['Username']}  <br> ".
                 //"Code : {$row['Code']} <br> ".
                 //"Password : {$row['Password']} <br> ";
            
            //Probably better this way
            
            $name = $row['Username'];
            $code = $row['code'];
            $password = $row['password'];
            
            $_SESSION['password'] = $password;
            $_SESSION['code'] = $code;
            $_SESSION['Username'] = $Username;
            
            }

            
*/


            //let's start the session
            session_start();

            //finally, let's store our posted values in the session variables
           

            
        ?>
        <div class="container mt-4">
            <h2>Payment details</h2>
            <form class="row g-3" action="paymentamount.php" method="post">
                <!--this for input personal details-->
                <div class="col-md-6">
                    <label for="f_name" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="f_name" name="fname" value="<?php echo $_SESSION['firstname']?>">
                </div>
                    
                <div class="col-md-6">
                    <label for="l_name" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="l_name" name="lname" value="<?php echo $_SESSION['lastname']?>">
                </div>
                    
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                </div>
                    
                <div class="col-md-6">
                    <label for="input_nic" class="form-label">NIC</label>
                    <input type="text" class="form-control" id="input_nic" name="nicnum" value="<?php echo $_SESSION['username']?>">
                </div>
                    
                <div class="col-md-4">
                    <label for="phoneNumber" class="form-label">Phone Number</label>
                    <input type="tel" id="phoneNumber" class="form-control" name="phonenum" value="<?php echo $_SESSION['telno']?>">   
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">Next</button>
                </div>
            </form>
        </div>

        
    </body>
</html>



